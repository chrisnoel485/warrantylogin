<?php

use Illuminate\Database\Seeder;

class KpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Kp::insert([
            [
              'id'  			=> 1,
              'kp'  			=> 'KP1',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'kp'  			=> 'KP2',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 3,
                'kp'  			=> 'KP3',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 4,
                'kp'  			=> 'DEV1',
                'created_at'      => \Carbon\Carbon::now(),
                'updated_at'      => \Carbon\Carbon::now()
              ],
              [
                  'id'  			=> 5,
                  'kp'  			=> 'DEV3',
                  'created_at'    => \Carbon\Carbon::now(),
                  'updated_at'    => \Carbon\Carbon::now()
              ],
        ]);
    }
}
