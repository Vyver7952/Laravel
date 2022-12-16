<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orderan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];

    public function Karyawan()
    {
        return $this->belongsToMany(User::class);
        }
    }

