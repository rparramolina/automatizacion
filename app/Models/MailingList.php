<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailingList extends Model
{
    //
    protected $fillable = [
        'productor_id',
        'mailing_list',
    ];
}
