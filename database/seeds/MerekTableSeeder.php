<?php

use Illuminate\Database\Seeder;

class MerekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Merek::insert([
            [
              'id'  			=> 1,
              'kp'  			=> 'LENOVO',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'kp'  			=> 'HP',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
        ]);
    }
}
