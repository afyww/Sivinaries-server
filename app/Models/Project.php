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
        'start_date',
        'end_date',
    ];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
