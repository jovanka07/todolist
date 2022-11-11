<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardMember extends Model
{
    use HasFactory;
    protected $table = "board_member";
    protected $fillable  = ['board_id', 'user_id'];

    public function Boards(){
    	return $this->belongsTo(Boards::class, 'board_id');
    }
}
