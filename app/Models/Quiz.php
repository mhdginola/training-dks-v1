<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'id_day',
      'benar',
      'salah',
      'nilai'
    ];

    public function users()
    {
      return $this->belongsTo(User::class, "user_id");
    }
}
