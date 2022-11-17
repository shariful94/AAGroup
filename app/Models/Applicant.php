<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'division_id',
        'district_id',
        'upozila_id',
        'address',
        'exam',
        'university',
        'board',
        'result',
        'photo',
        'cv',
        'training',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function upozila()
    {
        return $this->belongsTo(Upozila::class);
    }
}
