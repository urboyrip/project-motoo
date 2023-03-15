<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review_App extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'application_id',
        'Penilaian',
        'Deskripsi'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function application(){
        return $this->belongsTo(application::class);
    }
}
