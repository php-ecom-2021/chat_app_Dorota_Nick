<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Chat extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name'
    ];

    public function users(){
        return $this->belongsToMany(
            User::class,
            'users_chats',
            'chat_id',
            'user_id'
        );
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
