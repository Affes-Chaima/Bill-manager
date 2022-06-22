<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;
    protected $fillable = ['IDfact','IDCLT','IDREG','code_fact','date_fact','totalht_fact','totaltva_fact','totalttc_fact','totremise_fact','solde_fact'];
    public $timestamps =false;
    protected $primarykey='IDfact';
    public function commande(){
        return $this->hasmany(bline::class,article::class);
    }
    public function regler(){
        return $this->hasone(settlement::class);
    }
    public function clients(){
        return $this->hasmany(client ::class);
    }


}
