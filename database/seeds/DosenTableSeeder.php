<?php

use Illuminate\Database\Seeder;
use App\User;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$dosen = array(
		  array('id' => '2','nip' => '196401151989021001','gelar_depan' => 'Dr., Ir.','nama' => 'Nugraha','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'NG'),
		  array('id' => '3','nip' => '19590423198503002','gelar_depan' => 'Prof.','nama' => 'Bambang Sunendar','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'BB'),
		  array('id' => '4','nip' => '195707271985031003','gelar_depan' => 'Dr.Ir.M.Eng.','nama' => 'Suyatman','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'YM'),
		  array('id' => '5','nip' => '196004031986031002','gelar_depan' => 'Ir.','nama' => 'Ahmad Nuruddin','gelar_belakang' => 'M.Sc.Ph.D.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'AN'),
		  array('id' => '6','nip' => '195108081977031000','gelar_depan' => 'Dr.Ir.','nama' => 'Agus Samsi','gelar_belakang' => ' MT.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'AS'),
		  array('id' => '7','nip' => '130611116','gelar_depan' => 'Prof.Dr.Ir.','nama' => 'Amoranto Trisnobudi','gelar_belakang' => '','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'AT'),
		  array('id' => '8','nip' => '19770804201011000','gelar_depan' => '','nama' => 'Augie Widyotriatmo','gelar_belakang' => 'Ph.D.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'AW'),
		  array('id' => '9','nip' => '197507272006041000','gelar_depan' => 'Dr.Ir.','nama' => 'Brian Yuliarto','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'BY'),
		  array('id' => '10','nip' => '196309301988101000','gelar_depan' => 'Prof.Dr.','nama' => 'Deddy Kurniadi','gelar_belakang' => 'M.Eng.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'DK'),
		  array('id' => '11','nip' => '195912281984031000','gelar_depan' => 'Dr.Ir.','nama' => 'Edi Leksono','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'EL'),
		  array('id' => '12','nip' => '196710061997021000','gelar_depan' => 'Dr.Ir.','nama' => 'Eko Mursito Budi','gelar_belakang' => 'MT','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'EM'),
		  array('id' => '13','nip' => '195907241985032000','gelar_depan' => 'Dr.Ir.','nama' => 'Endang Juliastuti','gelar_belakang' => 'MS','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'EY'),
		  array('id' => '14','nip' => '196607081992031000','gelar_depan' => 'Dr.Ir.','nama' => 'Endra Joelianto','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'EJ'),
		  array('id' => '15','nip' => '196908052008012000','gelar_depan' => 'Ir.','nama' => 'Estiyanti Ekawati','gelar_belakang' => 'MT.Ph.D.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'EE'),
		  array('id' => '16','nip' => '195512051980031000','gelar_depan' => 'Ir.','nama' => 'FX. Nugroho Soelami','gelar_belakang' => 'MBEnv.Ph.D.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'FX'),
		  array('id' => '17','nip' => '194908071978031000','gelar_depan' => 'Prof.Dr.Ir.','nama' => 'Harijono A. Tjokronegoro','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'HT'),
		  array('id' => '18','nip' => '195602071980101000','gelar_depan' => 'Prof.Dr.','nama' => 'Hermawan Kresno Dipojono','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'KD'),
		  array('id' => '19','nip' => '195101261978021000','gelar_depan' => 'Dr.Ir.','nama' => 'I.B. Ardhana Putra','gelar_belakang' => '','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'AP'),
		  array('id' => '20','nip' => '195610061986011000','gelar_depan' => 'Dr.Ir.','nama' => 'I.G.N. Merthayasa','gelar_belakang' => 'M.Eng.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'IM'),
		  array('id' => '21','nip' => '197905122010121000','gelar_depan' => '','nama' => 'Iwan Prasetyo','gelar_belakang' => 'Ph.D.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'IP'),
		  array('id' => '22','nip' => '197405242012122000','gelar_depan' => 'Dr.','nama' => 'Janivita Joto Sudirham','gelar_belakang' => 'M.Sc.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'JJS'),
		  array('id' => '23','nip' => '198208032012121000','gelar_depan' => 'Dr.','nama' => 'Mohammad Kemal Agusta','gelar_belakang' => 'M.Eng.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'MKA'),
		  array('id' => '24','nip' => '194907261977031000','gelar_depan' => 'Dr.Ir.','nama' => 'Mohammad Rohmanuddin','gelar_belakang' => 'MT','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'MR'),
		  array('id' => '25','nip' => '196003231986111000','gelar_depan' => 'Dr.-Ing.Ir.','nama' => 'Parsaulian Ishaya Siregar','gelar_belakang' => '','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'PIS'),
		  array('id' => '26','nip' => '195810191986011000','gelar_depan' => 'Ir.','nama' => 'R. Triyogo','gelar_belakang' => 'MDESSC (Illum.)','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'RT'),
		  array('id' => '27','nip' => '130177012','gelar_depan' => 'Prof.Dr.Ir.','nama' => 'R.M. Soegijanto','gelar_belakang' => '','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'RMS'),
		  array('id' => '28','nip' => '196803271995031000','gelar_depan' => 'Dr.Ir.','nama' => 'R.Sugeng Joko Sarwono','gelar_belakang' => 'MT','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'JS'),
		  array('id' => '29','nip' => '197210172009121000','gelar_depan' => 'Ir.','nama' => 'Rahmat Romadhon','gelar_belakang' => 'MT','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'RR'),
		  array('id' => '30','nip' => '197009021997011000','gelar_depan' => 'Dr.','nama' => 'Suprijanto','gelar_belakang' => 'ST.MT.','alamat' => '','telepon' => '2504424','email' => 'supri@tf.itb.ac.id','gambar' => '','inisial' => 'SP'),
		  array('id' => '31','nip' => '195304131978031000','gelar_depan' => 'Dr.Ir.','nama' => 'Sutanto Hadisupadmo','gelar_belakang' => 'MT','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'SH'),
		  array('id' => '32','nip' => '195503161985031000','gelar_depan' => 'Ir.','nama' => 'Wisnu Hendradjit','gelar_belakang' => 'M.Sc.E','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'WH'),
		  array('id' => '33','nip' => '131801712','gelar_depan' => 'Prof.Dr.-Ing.Ir.','nama' => 'Yul Y. Nazaruddin','gelar_belakang' => 'M.Sc.DIC','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'YY'),
		  array('id' => '34','nip' => '198702142014042001','gelar_depan' => '','nama' => 'Vebi Nadhira','gelar_belakang' => 'ST. MT.','alamat' => '','telepon' => '2504424','email' => '','gambar' => '','inisial' => 'VN'),
		  array('id' => '35','nip' => '2016','gelar_depan' => '','nama' => 'Irsyad Nashirul Haq','gelar_belakang' => 'ST. MT.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'INH'),
		  array('id' => '36','nip' => '2017','gelar_depan' => '','nama' => 'Anugrah Sabdono Sudarsono','gelar_belakang' => 'ST. MT.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'ASS'),
		  array('id' => '37','nip' => '2018','gelar_depan' => '','nama' => 'Faqihza Mukhliash','gelar_belakang' => 'ST. MT.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'FM'),
		  array('id' => '38','nip' => '2019','gelar_depan' => '','nama' => 'Narendra Kurnia Putra','gelar_belakang' => 'ST.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'NKP'),
		  array('id' => '39','nip' => '2020','gelar_depan' => '','nama' => 'Indra Sihar','gelar_belakang' => 'ST. MS.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'IS'),
		  array('id' => '40','nip' => '2021','gelar_depan' => '','nama' => 'Muhammad Iqbal','gelar_belakang' => 'ST. MT.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'MI'),
		  array('id' => '41','nip' => '2022','gelar_depan' => '','nama' => 'Thomas Budiarto','gelar_belakang' => '','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'TB'),
		  array('id' => '42','nip' => '2023','gelar_depan' => 'Dr.','nama' => 'Rizki Armanto','gelar_belakang' => 'ST. MT.','alamat' => NULL,'telepon' => '2504424','email' => NULL,'gambar' => NULL,'inisial' => 'RA'),
		  array('id' => '44','nip' => '198611152015042001','gelar_depan' => 'Dr','nama' => 'Miranti Indar Mandasari','gelar_belakang' => '','alamat' => 'Puri Cipageran Indah D-34','telepon' => '082216668896','email' => 'miranti.indra.mandadasari@gmail.com','gambar' => '','inisial' => 'MIM')
		);

		foreach ($dosen as $key => $value) {
	        $person = new User();
	        $person->noid = $value['nip'];
	        $person->name = $value['gelar_depan'].' '.$value['nama'].' '.$value['gelar_belakang'];

	        $username = $value['inisial'];
	        $password = $username;

	        $person->username = $username;
	        $person->email = $value['email'];

	        if ($value['email'] == '') {
		        $person->email = $value['inisial'].'@tf.itb.ac.id';
	        }

	        $person->password = bcrypt($password);
	        $person->address = $value['alamat'];
	        $person->phone = $value['telepon'];
	        $person->save();
	        $person->attachRole('dosen');
		}

    }
}
