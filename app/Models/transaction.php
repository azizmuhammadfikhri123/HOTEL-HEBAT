<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\room;
use App\Models\payment;

class transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $guarded = ['updated_at', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(room::class, 'room_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(payment::class, 'id', 'transaction_id');
    }
}
