<?php

use Illuminate\Database\Seeder;

class Telepon extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        \App\Telepon::insert([
            [
              'id'  			=> 1,
              'nomor_telepon'  			=> 'a',
              'pengguna_id'  			=> '1',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'nomor_telepon'  			=> 'b',
                'pengguna_id'  			=> '2',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
        ]);
    }
}
