<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;
    protected $table = "cards";

    public function BoardList(){
    	return $this->hasMany(BoardList::class);
    }
}
