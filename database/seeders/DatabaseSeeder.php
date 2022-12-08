<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\kamars;
use App\Models\Pengunjung;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pengunjung::Factory(10)->create();
        // kamars::table()->insert([
        //     'jenis_kamar' => 'Suite',
        //     'jumlah_kasur' => '1',
        //     'harga' => '3.000.000',
        // ]);
        // kamars::table()->insert([
        //     'jenis_kamar' => 'Twin',
        //     'jumlah_kasur' => '2',
        //     'harga' => '1.500.000',
        // ]);
        // kamars::table()->insert([
        //     'jenis_kamar' => 'king',
        //     'jumlah_kasur' => '1',
        //     'harga' => '4.000.000',
        // ]);
        // kamars::table()->insert([
        //     'jenis_kamar' => 'single',
        //     'jumlah_kasur' => '1',
        //     'harga' => '800.000',
        // ]);
    }
}
