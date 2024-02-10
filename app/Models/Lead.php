<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{

    protected $fillable = ['contact_email', 'contact_message'];
}
