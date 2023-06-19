<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    public function run() {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'nim' => $faker->nim,
                'name' => $faker->name,
                'tugas' => $faker->tugas,
                'tugas' => $faker->deskripsi
            ]);
        }
    }
}