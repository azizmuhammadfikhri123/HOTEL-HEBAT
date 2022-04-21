<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_room extends Model
{
    use HasFactory;
    protected $table = 'type_rooms';
    protected $guarded = ['updated_at', 'created_at'];
}
