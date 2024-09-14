<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'payment',
        'project_id',
        'prove',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    
}
