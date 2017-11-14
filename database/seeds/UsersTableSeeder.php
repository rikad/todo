<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
use App\Pegawai;
use App\ActivePlant;
use App\Plant;
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

        Pegawai::create(['nip'=>'170001','name'=>'Bowo','gender'=>'L','address'=>'Bandung','phone'=>'812112121','jabatan'=>'Komisioner']);
        Pegawai::create(['nip'=>'170002','name'=>'Fahri','gender'=>'L','address'=>'Tegal','phone'=>'831201213','department'=>'Teknologi','jabatan'=>'Staf']);
        Pegawai::create(['nip'=>'170003','name'=>'Asep','gender'=>'L','address'=>'Bekasi','phone'=>'801239123','department'=>'Produksi','jabatan'=>'Team Leader']);
        Pegawai::create(['nip'=>'170004','name'=>'Udin','gender'=>'L','address'=>'Mars','phone'=>'801923123','department'=>'Keuangan','jabatan'=>'Kepala']);
        Pegawai::create(['nip'=>'170005','name'=>'Cucu','gender'=>'P','address'=>'Pluto','phone'=>'805912301','department'=>'Pemasaran','jabatan'=>'Staf']);

        Sensor::create(['user_id'=>3,'serial'=>'CP9292','password'=>'55555','type'=>'hidroponik']);
        Sensor::create(['user_id'=>3,'serial'=>'CP1292','password'=>'55555','type'=>'hidroponik']);
        Sensor::create(['user_id'=>3,'serial'=>'CP2292','password'=>'55555','type'=>'hidroponik']);

        Plant::create(['name'=>'Strawberry','tmin'=>5,'tmax'=>24,'hmin'=>80,'hmax'=>90,'imin'=>32000]);
        Plant::create(['name'=>'Seledri','tmin'=>5,'tmax'=>24,'hmin'=>80,'hmax'=>90,'imin'=>32000]);
        Plant::create(['name'=>'Bayam','tmin'=>16,'tmax'=>20,'hmin'=>40,'hmax'=>60,'imin'=>15000,'imax'=>20000]);
        Plant::create(['name'=>'Kangkung','tmin'=>25,'tmax'=>30,'hmin'=>60,'imin'=>6000]);
        Plant::create(['name'=>'Tomat','tmin'=>18,'tmax'=>30,'hmin'=>30,'hmax'=>100,'imin'=>6000,'imax'=>15000]); 
        Plant::create(['name'=>'Cabai','tmin'=>15,'tmax'=>36,'hmin'=>80,'imin'=>18000]);
        Plant::create(['name'=>'Kol','tmin'=>18,'tmax'=>20,'hmin'=>60,'imin'=>3000,'imax'=>7000]);
        Plant::create(['name'=>'Timun','tmin'=>18,'tmax'=>32,'hmin'=>75,'hmax'=>95,'imin'=>4000,'imax'=>10000]);
        Plant::create(['name'=>'Selada','tmin'=>15,'tmax'=>30,'hmin'=>50,'hmax'=>80,'imin'=>14000,'imax'=>18000]);
        Plant::create(['name'=>'Bawang merah','tmin'=>19,'tmax'=>26,'hmin'=>65,'hmax'=>70,'imin'=>3000,'imax'=>7000]);
        Plant::create(['name'=>'Paprika','tmin'=>15,'tmax'=>25,'hmin'=>50,'hmax'=>60,'imin'=>10000,'imax'=>15000]);
        Plant::create(['name'=>'Kentang','tmin'=>14,'tmax'=>26,'hmin'=>80,'hmax'=>90,'imin'=>2000,'imax'=>3000]);
        Plant::create(['name'=>'Buncis','tmin'=>13,'tmax'=>25,'hmin'=>60,'hmax'=>75,'imin'=>5000,'imax'=>10000]);

        ActivePlant::create(['user_id'=>3,'sensor_id'=>1,'name'=>'Nanam Cabe','plant_id'=>1,'area'=>1,'capground'=>1,'city'=>'bandung']);

        LogPlant::create(['sensor_id'=>1,'temperature'=>38,'humidity'=>83,'intensity'=>85152,'ph'=>20046]);
        LogPlant::create(['sensor_id'=>1,'temperature'=>32,'humidity'=>31,'intensity'=>85152,'ph'=>20046]);
        LogPlant::create(['sensor_id'=>1,'temperature'=>38,'humidity'=>83,'intensity'=>85152,'ph'=>20046]);
    }
}
