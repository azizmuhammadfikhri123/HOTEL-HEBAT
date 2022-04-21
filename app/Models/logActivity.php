<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class logActivity extends Model
{
    use HasFactory;
    protected $table = 'log_activities';
    protected $guarded = ['updated_at', 'created_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
