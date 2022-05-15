<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    use HasFactory;
  
    public $table = "lectures";
    // created_at and updated_at predefined tablae lai hataunalai yo talako public variable lai
     public $timestamps = false;
    
    
}
