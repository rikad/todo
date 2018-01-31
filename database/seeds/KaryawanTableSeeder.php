<?php

use Illuminate\Database\Seeder;

use App\User;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$karyawan = array(
		  array('id' => '1','noid' => '196906112014091001','nama' => 'Wachyudin','address' => 'Kp. Leuwidulang, Desa Rancamulya RT 03/01 No 62, Kec. Pameungpeuk Banjaran Kab. Bandung ','kota' => '1','kode_pos' => '40275','phone' => '082219096020','photo' => '1446449915.JPG','email' => 'wachyudin@tf.itb.ac.id'),
		  array('id' => '2','noid' => '000000000111000198','nama' => 'Usep Setiawan','address' => 'Jl Cihanjuang 108 Rt 03 Rw 02 KP.Cisintok Ds Cihanjuang - Parongpong - Bandung Barat','kota' => '1','kode_pos' => '0','phone' => '085720501807','photo' => '1494988753.JPG','email' => 'usep.setiawan67@gmail.com'),
		  array('id' => '3','noid' => '195811291985031004','nama' => 'Efruddin Syaefuddin','address' => 'Jl. Sambisari II Q1 No 2 Kecamatan Cimahi Selatan Kota Cimahi','kota' => '1','kode_pos' => '0','phone' => '081321181191','photo' => '1429081447.JPG','email' => 'efruddin@tf.itb.ac.id'),
		  array('id' => '4','noid' => '196611061987031002','nama' => 'Parji Admianto','address' => 'Laksana Mekar Asri C 24 Kec Padalarang Kabupaten Bandung Barat','kota' => '1','kode_pos' => '0','phone' => '085722731000','photo' => '1429081464.JPG','email' => 'parji@tf.itb.ac.id'),
		  array('id' => '5','noid' => '197104191994032002','nama' => 'Rina Kania','address' => ' Jl. Raden Ganda II No 151 RT 05/10 Bandung 40175, Kelurahan Sukaraja, Kecamatan Cicendo','kota' => '1','kode_pos' => '40175','phone' => '081220999829','photo' => '1429081485.jpg','email' => 'kania.rina@gmail.com'),
		  array('id' => '6','noid' => '196810081995121001','nama' => 'Soleh Taryana','address' => 'Gg. Siliwangi Dalam I No 908 RT 01/01 Kel Cipaganti Kec Coblong Kota Bandung','kota' => '1','kode_pos' => '40131','phone' => '081313531076','photo' => '1494988857.JPG','email' => 'soleh@tf.itb.ac.id'),
		  array('id' => '7','noid' => '197505202014092001','nama' => 'Himawati Sutanti','address' => 'Jl. Begawan Sempani gang Sukarela No. 20D/66 Pajajaran Bandung 40173','kota' => '1','kode_pos' => '0','phone' => '08156088115','photo' => '1429081519.jpg','email' => 'tanti@tf.itb.ic.id'),
		  array('id' => '8','noid' => '196511122014091001','nama' => 'Sutriana','address' => 'Kebon Manggu RT 01/04 Kecamatan Cimahi Tengah Kota Cimahi','kota' => '1','kode_pos' => '0','phone' => '085724861796','photo' => '1494988783.JPG','email' => 'iyan@tf.itb.ac.id'),
		  array('id' => '9','noid' => '197302192014091001','nama' => 'Dahuri','address' => 'Jl. Sekeloa Timur No 263 RT 07/03 Kel Sekeloa Kec Coblong Bandung','kota' => '1','kode_pos' => '0','phone' => '085222006100','photo' => '1429081556.JPG','email' => 'dahuri@tf.itb.ac.id'),
		  array('id' => '10','noid' => '000000000107000031','nama' => 'Seno Nugroho','address' => 'Pasir Leutik Komp DU No F22 RT 06/09 Kel Sukapada Kec Cibeunying Kidul Kota Bandung','kota' => '1','kode_pos' => '40125','phone' => '0811223855','photo' => '1429081573.jpg','email' => 'Q_noypoenya@yahoo.com'),
		  array('id' => '11','noid' => '000000000000000001','nama' => 'Dahlan','address' => 'Babakan Gaya Kaler RT 01/01 Kel Pasir Jati Kec Ujung Berung Kota Bandung','kota' => '1','kode_pos' => '0','phone' => '081572356236','photo' => '1429081589.JPG','email' => 'dahlan@tf.itb.ac.id'),
		  array('id' => '12','noid' => '000000000000000002','nama' => 'Mazna Yumira M.','address' => 'Jl. Setrasari Kulon IV/14 Kel Sukarasa Kec Sukasari Kota Bandung','kota' => '1','kode_pos' => '0','phone' => '08157024323','photo' => '1429081614.jpg','email' => 'mazna@tf.itb.ac.id'),
		  array('id' => '13','noid' => '000000000113000068','nama' => 'Riesa Andriani','address' => 'Sindanglaya RT 04/02 Kel Sindang Jaya Kec Mandalajati Kota Bandung','kota' => '1','kode_pos' => '0','phone' => '08562120550','photo' => '1429081631.JPG','email' => 'riesa@tf.itb.ac.id'),
		  array('id' => '14','noid' => '000000000000000003','nama' => 'Agung Gumilar','address' => 'Sekeloa Selatan No 44 RT 06/015 Kel Lebak Gede Kec Coblong Kota Bandung','kota' => '1','kode_pos' => '0','phone' => '085659382009','photo' => '1429081650.JPG','email' => 'agung@tf.itb.ac.id'),
		  array('id' => '15','noid' => '000000000000000004','nama' => 'Gina Safitri','address' => 'Kp Sekejulang RT 01/02 Kel Ciumbuleuit Kec Cidadap Kota Bandung','kota' => '1','kode_pos' => '0','phone' => '085860048527','photo' => '1429081668.jpg','email' => 'gina@tf.itb.ac.id'),
		  array('id' => '16','noid' => '000000000000000005','nama' => 'Roni Suhara','address' => 'Jl Raya Banjaran No 199 RT 01/015 Kel Bale Endah Kec Bale Endah Kabupaten Bandung','kota' => '1','kode_pos' => '0','phone' => '082115533520','photo' => '1429081690.jpg','email' => 'roni@tf.itb.ac.id'),
		  array('id' => '17','noid' => '000000000000000006','nama' => 'Moh Arifin','address' => 'Kendawa RT 02/01 Kel Kendawa Kec Jatibarang Kabupaten Brebes','kota' => '1','kode_pos' => '0','phone' => '085720371161','photo' => '1494988909.JPG','email' => ''),
		  array('id' => '18','noid' => '000000000000000007','nama' => 'Rana Tata Rohendi','address' => 'Gg Sukaharja I RT 07/03 Kel Sukapada Kec Cibeunying Kidul Kota Bandung','kota' => '1','kode_pos' => '40125','phone' => '085721313868','photo' => '1494988726.JPG','email' => 'ranatata.mifw310@gmail.com'),
		  array('id' => '19','noid' => '196610311995121001','nama' => 'Sunarya/FTI','address' => 'FTI','kota' => '1','kode_pos' => '40132','phone' => '815','photo' => '','email' => 'sunarya@fti.itb.ac.id'),
		  array('id' => '20','noid' => '000000000001072015','nama' => 'Rikad','address' => 'Kampung Babakan RT 02 RW 03
		Kecamatan-Desa Gununghalu','kota' => '1','kode_pos' => '40565','phone' => '08973107421','photo' => '1494988580.JPG','email' => 'rikad@tf.itb.ac.id')
		);

		foreach ($karyawan as $key => $value) {
	        $person = new User();
	        $person->noid = $value['noid'];
	        $person->name = $value['nama'];

	        $username = explode(" ",$value['nama']);
	        $password = strtolower($username[0]).'!';

	        $person->username = strtolower($username[0]);
	        $person->email = $value['email'];
	        $person->password = bcrypt($password);
	        $person->address = $value['address'];
	        $person->phone = $value['phone'];
	        $person->save();
	        $person->attachRole('karyawan');
		}

    }
}
