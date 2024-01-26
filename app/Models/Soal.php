<?php

namespace App\Models;

use App\Models\Kuis;
use App\Models\Opsi_jawaban;
use App\Models\Tipe_soal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Soal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function quiz()
    {
        return $this->hasMany(Kuis::class);
    }

    public function tipe_soal()
    {
        return $this->belongsTo(Tipe_soal::class);
    }

    public function opsi_jawaban()
    {
        return $this->hasMany(Opsi_jawaban::class);
    }

}
