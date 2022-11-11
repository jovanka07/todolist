<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    use HasFactory;
    protected $table = "boards";

    public function board_lists(){
    	return $this->hasMany(BoardList::class, 'board_id');
    }
}
