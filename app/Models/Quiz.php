<?php

namespace App\Models;

use App\Models\Soal;
use App\Models\attempt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }

    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }


}
