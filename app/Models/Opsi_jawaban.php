<?php

namespace App\Models;

use App\Models\Soal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opsi_jawaban extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}
