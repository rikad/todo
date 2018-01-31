<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(KaryawanTableSeeder::class);
        $this->call(DosenTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(AssetsTableSeeder::class);
        $this->call(AssetDetailsTableSeeder::class);
    }
}
