<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailboxAttachment extends Model
{
    use HasFactory;
    protected $table = "mailbox_attachments";
    protected $fillable = ["mailbox_id", "attachment"];
}
