<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = ['IDART','IDTVA','code_art','lib_art','puht_art','puttc_art','maxremise_art','stockable_art','actif_art','depstsk_art','codebarre_art','prixcash_art'];
    public $timestamps =false;
    protected $primaryKey='IDART';
    public function tva(){
        return $this->hasmany(tva::class);
    }
    public function commande(){
        return $this->hasmany(bline::class);
    }
}
