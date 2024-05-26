<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class studenDantbl1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $data=[
        //     ['id'=>1, 'nama'=>'Aini'],
        //     ['id'=>2, 'nama'=>'Boni'],
        //     ['id'=>3, 'nama'=>'Dini'],
        //     ['id'=>4, 'nama'=>'Eini'],
        //     ['id'=>5, 'nama'=>'Lini'],
        // ];
        // DB::table('tbl1')->insert($data);


        $Faker =faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            DB::table('students')->insert([
                'nama' =>$Faker->name,
                'nilai'=>$Faker->numberBetween(20,90)
            ]);
            // DB::table('tbl1')->insert([
            //     'nama' =>$Faker->name
            // ]);
        }
    }
}
