<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [ 'TaskName','Description','updated_at' ];
    protected $casts = [
        'updated_at' => 'datetime:d/m/Y',
        'created_at' => 'datetime:d/m/Y',
    ];
}
