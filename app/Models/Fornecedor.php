<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'uf', 'email', 'site'];
    use HasFactory;

    public function produtos(){
        return $this->hasMany('App\Models\Item', 'fornecedor_id', 'id');
    }

}
