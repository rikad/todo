<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\ActivePlant;
use App\LogPlant;
use App\LogPower;
use App\Sensor;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $admin = new User();
        $admin->name = 'sample';
        $admin->username = 'sample';
        $admin->email = 'sample@app.com';
        $admin->password = bcrypt('sample');
        $admin->save();
        $admin->attachRole('user');

        $admin = new User();
        $admin->name = 'rikad';
        $admin->username = 'rikad';
        $admin->email = 'rikad@app.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole('admin');

        Sensor::create(['serial'=>'CP9292','password'=>'55555','type'=>'hidroponik']);
        Sensor::create(['serial'=>'CP1292','password'=>'55555','type'=>'hidroponik']);
        Sensor::create(['serial'=>'CP2292','password'=>'55555','type'=>'hidroponik']);

        ActivePlant::create(['user_id'=>3,'sensor_id'=>1,'name'=>'Nanam Cabe','tanaman'=>1,'area'=>1,'capground'=>1,'city'=>'bandung']);

        LogPlant::create(['activeplant_id'=>1,'temperature'=>38,'humidity'=>83,'itensity'=>85152,'ph'=>20046]);
        LogPlant::create(['activeplant_id'=>1,'temperature'=>32,'humidity'=>31,'itensity'=>85152,'ph'=>20046]);
        LogPlant::create(['activeplant_id'=>1,'temperature'=>38,'humidity'=>83,'itensity'=>85152,'ph'=>20046]);
    }
}
