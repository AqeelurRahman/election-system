<?php

namespace App\Models;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;
    protected $fillable = ['party_id', 'constituency_id', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
