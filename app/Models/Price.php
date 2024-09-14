<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'service',
        'price',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

}
