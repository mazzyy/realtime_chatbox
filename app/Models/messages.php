<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class messages extends Model
{
    use HasFactory;

    Protected $fillable =['from','to','message','is_read'];
}
