<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCvData extends Model
{
    use HasFactory;

    protected $fillable = [
        'template_id',
        'fields_value',
        'fields_id',
    ];
}
