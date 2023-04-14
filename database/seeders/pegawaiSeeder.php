<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'NIP'=>'210202088',
            'Nama'=>'melitanurwalidaen',
            'Email'=>'nurwalidaenmelita@gmail.com',
            'Alamat'=>'jl Darusman Depox',
            'Jenis_kelamin'=>'Perempuan',
            'Jabatan'=>'kades'
        ]);

        // DB::table('pegawai')->insert([
        //     'NIP'=>'210202099',
        //     'Nama'=>'Putri Umara Musakina',
        //     'Email'=>'putri@gmail.com',
        //     'Alamat'=>'jl Rinjani',
        //     'Jenis_kelamin'=>'Perempuan',
        //     'Jabatan'=>'Admin'
            
        // ]);

        // DB::table('pegawai')->insert([
        //     'NIP'=>'210202000',
        //     'Nama'=>'Bagus Saleh Apdila',
        //     'Email'=>'bagus@gmail.com',
        //     'Alamat'=>'jl katamso',
        //     'Jenis_kelamin'=>'Laki-laki',
        //     'Jabatan'=>'lurah'
            
        // ]);
    }
}
