<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
