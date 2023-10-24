<?php

namespace App\Models;

use App\Models\Jenis;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi','kecacatan','image', 'jumlah'];


    public function jenis(){
        return $this->belongsTo(Jenis::class);
    }
    
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
