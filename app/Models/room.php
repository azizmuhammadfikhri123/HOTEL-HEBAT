<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\type_room;

class room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $guarded = ['updated_at', 'created_at'];

    public function type_room()
    {
        return $this->belongsTo(type_room::class, 'type_id', 'id');
    }
}
