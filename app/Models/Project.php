<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project',
        'name',
        'price',
        'payment',
        'start_date',
        'end_date',
        'status',
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getTotalPricesAttribute()
    {
        return $this->prices->sum('price');
    }

    public function getTotalPaymentsAttribute()
    {
        return $this->payments->sum('price');
    }
}
