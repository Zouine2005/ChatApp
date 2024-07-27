<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable=[
        'body',
        'sender_id',
        'receiver_id',
        'conversation_id',
        'read_at',
        'receiver_deleted_at',
        'sender_deleted_at',
        'voice_message_path', // Add this line
    ];


    protected $dates=['read_at','receiver_deleted_at','sender_deleted_at'];


    /* relationship */

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }


    public function isRead():bool
    {

         return $this->read_at != null;
    }
}
