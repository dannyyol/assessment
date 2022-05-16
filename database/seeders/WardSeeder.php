<?php

namespace Database\Seeders;

use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Ward::create([
            'name' => 'Ado a Idofin.',
            'lga_id' => 1
        ]);

        Ward::create([
            'name' => 'Ado b Inisa.',
            'lga_id' => 1

        ]);

        Ward::create([
            'name' => 'Ado c Idolofin.',
            'lga_id' => 1

        ]);

        Ward::create([
            'name' => 'Ado d Ijigbo.',
            'lga_id' => 1

        ]);

        //Lagos 
        Ward::create([
            'name' => 'Akoge/ogbilolo.',
            'lga_id' => 2
        ]);

        Ward::create([
            'name' => 'Apa',
            'lga_id' => 2

        ]);

        Ward::create([
            'name' => 'Ekile',
            'lga_id' => 2

        ]);

        Ward::create([
            'name' => 'Igumale I.',
            'lga_id' => 2

        ]);


        //Abuja 
        Ward::create([
            'name' => 'City Centre',
            'lga_id' => 3
        ]);

        Ward::create([
            'name' => 'GUI',
            'lga_id' => 3

        ]);

        Ward::create([
            'name' => 'Garki',
            'lga_id' => 3

        ]);

        Ward::create([
            'name' => 'Gwagwa',
            'lga_id' => 3

        ]);
    }
}
