<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Lga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lga::create([
            'name' => 'Ado Ekiti',
            'state_id' => 1
        ]);

        Lga::create([
            'name' => 'Ikeja',
            'state_id' => 2

        ]);

        Lga::create([
            'name' => 'Abaji',
            'state_id' => 3

        ]);
    }
}
