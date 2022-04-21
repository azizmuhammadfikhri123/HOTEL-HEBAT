<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fasility extends Model
{
    use HasFactory;
    protected $table = 'facilities';
    protected $guarded = ['updated_at', 'created_at'];
}
