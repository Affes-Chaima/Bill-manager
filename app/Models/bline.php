<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bline extends Model
{
    use HasFactory;
    protected $fillable = ['id','IDFACT','IDART','qte_art','puht_art','remise_art','punetht_art','totalnetht_art','totalht_art','totalttc_art'];
    public $timestamps =false;
    protected $primaryKey='id';
    public function articles(){
        return $this->hasMany(article::class);
    }
    public function facture(){
        return $this->hasOne(bill::class);
}
public function commande(){
    return $this->belongsTo(bline::class);

}}
