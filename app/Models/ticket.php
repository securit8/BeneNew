<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    
        protected $table = 'ticket';      
    
        protected $fillable = ['Price','Name','LastName','Phone','Email','given_id','transfer','raodenoba','status'];
    
}
