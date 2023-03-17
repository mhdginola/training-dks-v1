<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
      "nama_file",
      "ukuran_file",
      "file_path", 
      "created_at", 
      "updated_at",
    ];
}
