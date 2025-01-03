<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Notifications\Notifiable;

class Provider extends Authenticatable
{
    use HasFactory , Notifiable;

    protected $guarded = [];

    protected $appends = ['average_rate'];


    public function services()
    {
        return $this->hasMany(Service::class);
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class );
    }

    public function package(): HasMany
    {
        return $this->hasMany(Package::class)->latest('id')->take(1);
    }
    public function packages(): HasMany
    {
        return $this->hasMany(Package::class)->orderBy('id', 'desc');
    }

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function info() {
        return $this->hasOne(ProviderInfo::class);
    }


    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }

    public function getAvatarAttribute()
    {
        $firstFile = $this->files->first();

        if ($firstFile && file_exists(public_path($firstFile->path))) {
            return asset($firstFile->path);
        }

        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&color=7F9CF5&background=EBF4FF';
    }

    public function rates()
    {
        return $this->hasManyThrough(Rate::class, Package::class, 'provider_id', 'rateable_id')
                    ->where('rateable_type', Package::class);
    }


    //Password Mutator for Hashing Password
    public function setPasswordAttribute($value): void
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function employees()
    {
        return $this->hasMany(Manager::class);
    }

    public function getAverageRateAttribute()
    {
        $averageRate = $this->rates()->avg('rate');

        return $averageRate ? round($averageRate, 2) : null;
    }

}
