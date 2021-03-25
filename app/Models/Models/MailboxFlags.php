<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailboxFlags extends Model
{
    use HasFactory;
    protected $table = "mailbox_flags";
    protected $fillable = ["is_unread", "is_important", "mailbox_id", "user_id"];
}
