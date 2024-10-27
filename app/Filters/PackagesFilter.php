<?php

namespace App\Filters;

use Closure;

class PackagesFilter
{
    public function handle($request, Closure $next)
    {
        $query = $next($request);

        if(!empty(request('cat_ids'))) {
            $query->whereHas('category', function($query){
                $query->whereIn('id', request('cat_ids'));
            });
        }

        if(!empty(request('cost'))) {
            $query->where('cost', '<=', (int)request('cost'));
        }
        if(!empty(request('name'))) {
            $query->where('name', 'LIKE', '%'. request('name') . '%');
        }
        if(!empty(request('type'))) {
            $query->whereHas('provider', function($query){
                $query->where('type', request('type'));
            });
         }
         if(!empty(request('price-filter'))) {
            if(request('price-filter') == 'Lowset') {
                $query->orderBy('cost', 'asc');
            }
            else {
                $query->orderBy('cost', 'desc');

            }
        }

         
        // if(!empty(request('description'))) {
        //     $query->whereIn('description', 'LIKE', '%' . request('description') . '%');
        // }

        return $query;
    }
}
