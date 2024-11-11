<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Jobs\OrderResponseJob;
use App\Jobs\OrderUpdateJob;
use App\Models\Notification;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('provider-panel.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        $this->authorize('viewforProvider', $order);

        $order->load('items', 'user');

        return view('provider-panel.orders.show', compact('order'));
    }

    public function response(Order $order, Request $request)
    {
        $request->validate([
            'response' => 'required|string|in:cancelled,approved'
        ]);

        if ($order->status != 'received') {
            abort(403, 'Order is already responded');
        }

        $order->update([
            'status' => $request->response
        ]);

        OrderResponseJob::dispatch($order);


        return redirect()->route('provider-panel.home');
    }
    public function update(Order $order)
    {
        $statuses = [
            'requested',
            'approved',
            'set_the_installation',
            'the_visit_has_been_scheduled',
            'worker_on_the_road',
            'get_started',
            'work_completed'
        ];

        $currentStatusIndex = array_search($order->status, $statuses);

        if($order->status =='work_completed')
        {
            return redirect()->route('provider-panel.home');
        }

        if ($currentStatusIndex !== false && $currentStatusIndex < count($statuses) - 1) {
            $order->status = $statuses[$currentStatusIndex + 1];
            $order->save();

        Notification::create([
            'user_id' => $order->user_id,
            'text' => 'Order Status Updated to' . $order->status 
        ]);

        }

        OrderUpdateJob::dispatch($order);
        return redirect()->route('provider-panel.home');
    }


    public function assign($order)
    {
        return view('provider.orders.assign');
    }

    public function assignEmployee($order)
    {
        return redirect()->route('provider.orders.index');
    }
}
