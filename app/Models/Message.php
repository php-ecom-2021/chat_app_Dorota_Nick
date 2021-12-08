<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Message extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'user_id',
        'chat_id',
        'content'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function chat(){
        return $this->belongsTo(Chat::class, 'chat_id');
    }
}
