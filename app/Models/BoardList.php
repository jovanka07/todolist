<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardList extends Model
{
    use HasFactory;
    protected $table = "boards_list";

    public function Cards(){
    	return $this->hasMany(Cards::class, 'list_id');
    }
}
