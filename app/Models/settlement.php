<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class settlement extends Model
{
    use HasFactory;
    protected $fillable = ['IDREG','IDMODREG','code_reg','date_reg','montant_reg','comment_reg'];
    public $timestamps =false;
}

