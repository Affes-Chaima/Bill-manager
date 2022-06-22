<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setmeth extends Model
{
    use HasFactory;
    protected $fillable = ['IDMODREG','code_mod','lib_mod'];
    public $timestamps =false;
}
