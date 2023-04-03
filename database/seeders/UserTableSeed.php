<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserTableSeed extends Seeder {
        
    public function run() {
        
            User::create([
                'name'      => 'Ó Pál',
                'email'     => 'o.pal@gmail.com',
                'password'  => bcrypt('O_Pal_123')
            ]);

            User::create([
                'name'      => 'Kiss Éva',
                'email'     => 'kiss.eva@gmail.com',
                'password'  => bcrypt('Kiss_Eva_123')
            ]);

            User::create([
                'name'      => 'Nagy Béla',
                'email'     => 'nagy.bela@gmail.com',
                'password'  => bcrypt('Nagy_Bela_123')
            ]);

            User::create([
                'name'      => 'Kovács Ági',
                'email'     => 'kovacs.agi@gmail.com',
                'password'  => bcrypt('Kovacs_Agi_123')
            ]);

        }
}