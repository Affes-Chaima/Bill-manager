<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $fillable = ['IDCLT','code_clt','nom_clt','prenom_clt','rais_soc_clt','numtel1_clt','numtel2_clt','email_clt','adr_clt','mf_clt','rc_clt'];
    public $timestamps =false;
}
