<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tva extends Model
{
    use HasFactory;
    protected $fillable = ['IDTVA','code_tva','taux_tva'];
    public $timestamps =false;
    protected $primaryKey='IDTVA';
    public function articles(){
        return $this->belongsTo(article::class);
    }
}
