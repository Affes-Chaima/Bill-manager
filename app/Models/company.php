<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;
    protected $fillable = ['IDSOC','rais_soc','tel1_soc','tel2_soc','email_soc','mf_soc','rc_soc','adr_soc','logo_soc','entete_soc'];
    public $timestamps =false;
}
