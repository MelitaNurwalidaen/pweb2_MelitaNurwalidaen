<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';

    protected $guarded = [];
    // protected $fillable = [
    //     'NIP',
    //     'Nama',
    //     'Email',
    //     'Alamat',
    //     'Jenis_kelamin',
    //     'Jabatan',
    // ];

}
