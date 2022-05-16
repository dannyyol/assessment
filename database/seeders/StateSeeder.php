<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        State::create([
            'name' => 'Ekiti',
            'country_id' => 1
        ]);

        State::create([
            'name' => 'Lagos',
            'country_id' => 1

        ]);

        State::create([
            'name' => 'Abuja',
            'country_id' => 1
        ]);
    }
}
