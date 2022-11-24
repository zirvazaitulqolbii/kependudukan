<?php

namespace Database\Seeders;

use App\Models\agama;
use App\Models\kelahiran;
use App\Models\Kelurahan;
use App\Models\kematian;
use App\Models\penduduk;
use App\Models\status_kawin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(10)->create();
        
    	
        // status_kawin::create([
        //     'nama' => 'Belum Kawin'
        // ]);

        // status_kawin::create([
        //     'nama' => 'Kawin'
        // ]);

        // status_kawin::create([
        //     'nama' => 'Cerai Hidup'
        // ]);

        // status_kawin::create([
        //     'nama' => 'Cerai Mati'
        // ]);


        // Kelurahan::create([
        //     'nama' => 'Balai Gadang'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Air Dingin'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Batipuh Panjang'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Air Pacah'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Batang Kabung'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Bungo Pasang'
        // ]);

        // Kelurahan::create([
        //     'nama' => 'Dadok Tunggul Hitam'
        // ]);

        // agama::create([
        //     'nama' => 'Islam'
        // ]);

        // Agama::create([
        //     'nama' => 'Protestan'
        // ]);

        // Agama::create([
        //     'nama' => 'Katolik'
        // ]);

        // Agama::create([
        //     'nama' => 'Hindu'
        // ]);

        // Agama::create([
        //     'nama' => 'Budha'
        // ]);

        // penduduk::factory(20)->create();

        // kelahiran::factory(20)->create();

        // kematian::factory(20)->create();
    }
}
