<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $User = new User();
        $User->username = 'gurusatu';
        $User->password = Hash::make('gurusatu');
        $User->role = 'guru';
        $User->save();

        $guru = new Guru();
        $guru->id_user = $User->id;
        $guru->nama = 'Nabila Najmi';
        $guru->email = 'nabilanabila1101@gmail.com';
        $guru->username="gurusatu";
        $guru->password = Hash::make('ketapang35');
        $guru->noinduk="2010131220008";
        $guru->save();
        

        $User = new User();
        $User->username = 'gurudua';
        $User->password = Hash::make('gurudua');
        $User->role = 'guru';
        $User->save();

        $guru = new Guru();
        $guru->id_user = $User->id;
        $guru->nama = 'gurudua';
        $guru->email = 'nabila@gmail.com';
        $guru->username="gurudua";
        $guru->password = Hash::make('gurudua');
        $guru->noinduk="1123";
        $guru->save();

        
    }
}
