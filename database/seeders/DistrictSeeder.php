<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->delete();

        $districts = array(
            array('name' => "Amritsar", 'state_id' => 28),
            array('name' => "Barnala", 'state_id' => 28),
            array('name' => "Bathinda", 'state_id' => 28),
            array('name' => "Faridkot", 'state_id' => 28),
            array('name' => "Fatehgarh Sahib", 'state_id' => 28),
            array('name' => "Fazilka", 'state_id' => 28),
            array('name' => "Ferozepur", 'state_id' => 28),
            array('name' => "Gurdaspur", 'state_id' => 28),
            // array('name' => "Daman and Diu",'state_id' =>28),
            array('name' => "Hoshiarpur", 'state_id' => 28),
            array('name' => "Jalandhar", 'state_id' => 28),
            array('name' => "Kapurthala", 'state_id' => 28),
            array('name' => "Ludhiana", 'state_id' => 28),
            array('name' => "Malerkotla", 'state_id' => 28),
            array('name' => "Mansa", 'state_id' => 28),
            array('name' => "Moga", 'state_id' => 28),
            array('name' => "SAS Nagar", 'state_id' => 28),
            array('name' => "Sri Mukatsar Sahib", 'state_id' => 28),
            array('name' => "SBS Nagar", 'state_id' => 28),
            array('name' => "Pathankot", 'state_id' => 28),
            array('name' => "Patiala", 'state_id' => 28),
            array('name' => "Rupnagar", 'state_id' => 28),
            array('name' => "Sangrur", 'state_id' => 28),
            array('name' => "Tarn Taran", 'state_id' => 28),
        );
        DB::table('districts')->insert($districts);

    }
}
