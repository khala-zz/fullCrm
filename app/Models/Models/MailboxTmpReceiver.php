<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class MailboxTmpReceiver extends Model
{
    use HasFactory;
    protected $table = "mailbox_tmp_receivers";
    protected $fillable = ["mailbox_id", "receiver_id"];
    public function mailbox()
    {
        return $this->belongsTo(Mailbox::class, "mailbox_id");
    }
    public function user()
    {
        return $this->belongsTo(User::class, "receiver_id");
    }
}
