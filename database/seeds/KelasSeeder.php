<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create('en_US');

        for($i=0; $i<10; $i++){
            DB::table('kelas')->insert([
                'nama' => $Faker->word
            ]);
        }
    }
}
