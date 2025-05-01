<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protect:非公開で継承が可能になる。
    protected $fillable = [
        'name',
        'email',
        'tel',
        'content'
    ];

}
