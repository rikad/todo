<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$ruang = array(
		  array('id' => '1','kode_ruang_itb' => '135.01.1001','kode_ruang_prodi' => '135.01.001','nama_ruangan' => 'Ruang Seminar TF 1
		','desc_ruang' => 'Luas ruangan   : 77,9m²
		Jumlah lampu   : 18 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt 
		Lumens         : 250
		Jumlah Saklar  : 2
		Fasilitas      : AC 5PK','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '2','kode_ruang_itb' => '135.01.1002','kode_ruang_prodi' => '135.01.002','nama_ruangan' => 'Ruang sekretariat D3 Metrologi dan Instrumentasi
		','desc_ruang' => 'Luas ruangan   : 26,93m²
		Jumlah lampu   : 8 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '3','kode_ruang_itb' => '135.01.1003','kode_ruang_prodi' => '135.01.003','nama_ruangan' => 'Gudang ATK
		','desc_ruang' => 'Luas ruangan   : 25,06m²
		Jumlah lampu   : 3 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '4','kode_ruang_itb' => '135.01.1004','kode_ruang_prodi' => '135.01.004','nama_ruangan' => 'Laboratorium Kalibrasi
		','desc_ruang' => 'Luas ruangan   : 27,68m²
		Jumlah lampu   : 4 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 buah
		Presentasi Upgrade Peralatan : ...%','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '5','kode_ruang_itb' => '135.01.0007','kode_ruang_prodi' => '135.01.007','nama_ruangan' => 'Nugraha, Dr., Ir.
		 ','desc_ruang' => 'Luas ruangan   : 11,97m²
		Jumlah lampu   : 4 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '6','kode_ruang_itb' => '135.01.1006','kode_ruang_prodi' => '135.01.006','nama_ruangan' => 'Bambang Sunendar, Prof., Dr.
		','desc_ruang' => 'Luas ruangan   : 36,48m²
		Jumlah lampu   : 8 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '7','kode_ruang_itb' => '135.01.0008','kode_ruang_prodi' => '135.01.008','nama_ruangan' => 'Ruang tunggu dosen YM, AN
		 ','desc_ruang' => 'Luas ruangan   : 12,33m²
		Jumlah lampu   : 6 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '8','kode_ruang_itb' => '135.01.0009','kode_ruang_prodi' => '135.01.009','nama_ruangan' => 'SUYATMAN, DR., IR., M.ENG. 
		','desc_ruang' => 'Luas ruangan   : 10,03m²
		Jumlah lampu   : 2 Buah (Ballast Konvensional)
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan ruang tunggu Dosen AN, YM)','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '9','kode_ruang_itb' => '135.01.0010','kode_ruang_prodi' => '135.01.010','nama_ruangan' => 'AHMAD NURUDDIN, IR., M.SR., PH.D. 
		    ','desc_ruang' => 'Luas ruangan   : 10,03m²
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan ruang tunggu Dosen AN, YM)','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '10','kode_ruang_itb' => '135.01.1007C','kode_ruang_prodi' => '135.01.007C','nama_ruangan' => 'RUANG TA','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '11','kode_ruang_itb' => '135.01.0011','kode_ruang_prodi' => '135.01.011','nama_ruangan' => 'Lab. CHEMICAL, FOLDER PREPARATION MATERIAL POCESSING
		','desc_ruang' => 'Luas ruangan   : 26,93m²
		Jumlah lampu   : 16 Buah (Ballast Konvensional)
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '12','kode_ruang_itb' => '135.01.0012','kode_ruang_prodi' => '135.01.012','nama_ruangan' => 'Gudang Sementara
		','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 1 buah 
		Jenis lampu    : SL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '13','kode_ruang_itb' => '135.01.0013','kode_ruang_prodi' => '135.01.013','nama_ruangan' => 'Ruang Genset
		','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 1 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '14','kode_ruang_itb' => '135.01.0014','kode_ruang_prodi' => '135.01.014','nama_ruangan' => 'Ruang pompa air dan Hydrant','desc_ruang' => '','pnj_jwb' => '','no_pnj' => '0'),
		  array('id' => '15','kode_ruang_itb' => '135.01.0015','kode_ruang_prodi' => '135.01.015','nama_ruangan' => 'Bengkel logam','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 6 buah : 4 buah (Ballast Elektrik), 2 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt 
		Cahaya lampu   : 
		Jumlah Saklar  : 2','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '16','kode_ruang_itb' => '135.01.0015A','kode_ruang_prodi' => '135.01.015A','nama_ruangan' => 'Ruang boiler','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan bengkel logam)','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '17','kode_ruang_itb' => '135.01.0017','kode_ruang_prodi' => '135.01.017','nama_ruangan' => 'LAB . ADVANCED FUNCTIONAL MATERIAL 1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '18','kode_ruang_itb' => '135.01.1015','kode_ruang_prodi' => '135.01.015','nama_ruangan' => 'Ruang pertemuan BY','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '19','kode_ruang_itb' => '135.01.1016A','kode_ruang_prodi' => '135.01.015A','nama_ruangan' => 'Ruang belajar','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '20','kode_ruang_itb' => '135.01.0016','kode_ruang_prodi' => '135.01.016','nama_ruangan' => 'LAB . ADVANCED FUNCTIONAL MATERIAL 2','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 16 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '21','kode_ruang_itb' => '135.01.0018','kode_ruang_prodi' => '135.01.018','nama_ruangan' => 'LAB. LOGAM DAN GELAS','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '4'),
		  array('id' => '22','kode_ruang_itb' => '135.01.0019','kode_ruang_prodi' => '135.01.019','nama_ruangan' => 'Panel listrik utama','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => '','no_pnj' => '0'),
		  array('id' => '23','kode_ruang_itb' => '135.01.0020','kode_ruang_prodi' => '135.01.020 ','nama_ruangan' => 'Tempat wudhu','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 1 Buah
		Jenis lampu    : SL 10 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '24','kode_ruang_itb' => '135.01.0021','kode_ruang_prodi' => '135.01.021','nama_ruangan' => 'Toilet pria','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 8 Buah (6 Buah Ballast Konvensional)
		Jenis lampu    : 6 Buah TL 20 Watt, 2 Buah SL 10 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 4 Buah','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '25','kode_ruang_itb' => '135.01.1020','kode_ruang_prodi' => '135.01.020','nama_ruangan' => 'Toilet wanita','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 5 Buah (2 Buah Ballast Konvensional)
		Jenis lampu    : 2 Buah TL 20 Watt, 3 Buah SL 10 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 4 Buah','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '26','kode_ruang_itb' => 'G1','kode_ruang_prodi' => 'G1','nama_ruangan' => 'Ruang kontrol air Lt 1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : 
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '27','kode_ruang_itb' => '135.02.0022','kode_ruang_prodi' => '135.02.022','nama_ruangan' => 'Ruang Alumni','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 14 buah : (4 buah Ballast Elektronik), (10 buah Ballast Konvenional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '28','kode_ruang_itb' => '135.02.0023','kode_ruang_prodi' => '135.02.023','nama_ruangan' => 'Ruang Tunggu Kaprodi S1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 8 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '29','kode_ruang_itb' => '135.02.0023A','kode_ruang_prodi' => '135.02.023A','nama_ruangan' => 'Ruang Kaprodi S1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '30','kode_ruang_itb' => '135.02.0024','kode_ruang_prodi' => '135.02.024','nama_ruangan' => 'Pintu Utama Ruang Dosen EY, TR dan AW','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '31','kode_ruang_itb' => '135.02.0024A','kode_ruang_prodi' => '135.02.024A','nama_ruangan' => 'R. TRIYOGO, Ir. M.Des., SC.','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Bersatu dengan ruang utama Dosen TR, AW, EY)','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '32','kode_ruang_itb' => '135.02.0024B','kode_ruang_prodi' => '135.02.024B','nama_ruangan' => 'AUGIE WIDYOTRIATMO, Dr., ST., MT.','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 3 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '33','kode_ruang_itb' => '135.02.0024C','kode_ruang_prodi' => '135.02.024C','nama_ruangan' => 'ENDANG JULIASTUTI DR., IR., M.SC. ','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 3 Buah : (1 Buah Ballas Elektronik), (2 Buah Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '34','kode_ruang_itb' => '135.02.0025','kode_ruang_prodi' => '135.02.025','nama_ruangan' => 'Selasar Barat','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 10 Buah : (2 Buah Ballast Elektronik), (8 Buah Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '35','kode_ruang_itb' => '135.02.0027','kode_ruang_prodi' => '135.02.027','nama_ruangan' => 'Ruang Rapat 1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '36','kode_ruang_itb' => '135.02.0026','kode_ruang_prodi' => '135.02.026','nama_ruangan' => 'Ruang Rapat 2','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 18 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '37','kode_ruang_itb' => '135.02.0028','kode_ruang_prodi' => '135.02.028','nama_ruangan' => 'Ruang Kaprodi S2/S3','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '38','kode_ruang_itb' => '135.02.0029','kode_ruang_prodi' => '135.02.029','nama_ruangan' => 'Ruang Tata Usaha','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '39','kode_ruang_itb' => '135.02.0029A','kode_ruang_prodi' => '135.02.029A','nama_ruangan' => 'Ruang Rauter','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 3 Buah
		Jenis lampu    : 2 Buah TL 36 Watt, 1 Buah LED 30 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '9'),
		  array('id' => '40','kode_ruang_itb' => '135.02.0029','kode_ruang_prodi' => '135.02.029B','nama_ruangan' => 'Ruang Kepegawaian Prodi','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 2 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan ruang TU)','pnj_jwb' => 'karyawan','no_pnj' => '16'),
		  array('id' => '41','kode_ruang_itb' => '135.02.0029C','kode_ruang_prodi' => '135.02.029C','nama_ruangan' => 'Ruang Adm. Keuangan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '16'),
		  array('id' => '42','kode_ruang_itb' => '135.02.0030','kode_ruang_prodi' => '135.02.030','nama_ruangan' => 'Ruang PANEL Listrik LT. 2','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 1 Buah
		Jenis lampu    : SL 18 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '43','kode_ruang_itb' => '135.02.0031','kode_ruang_prodi' => '135.02.031','nama_ruangan' => 'Tempat Wudhu','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 1 Buah
		Jenis lampu    : SL 10 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '44','kode_ruang_itb' => '135.02.0032','kode_ruang_prodi' => '135.02.032','nama_ruangan' => 'Toilet Pria','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 6 Buah  
		Jenis lampu    : (2 Buah SL 5 Watt), (4 Buah LED 10 Watt)
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '45','kode_ruang_itb' => '135.02.2033','kode_ruang_prodi' => '135.02.033','nama_ruangan' => 'Toilet Wanita','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 5 Buah
		Jenis lampu    : (2 Buah TL 36 Watt), (1 LED 10 Watt), (2 Buah SL 5 Watt)
		Cahaya lampu   : 
		Jumlah Saklar  : 4 Buah','pnj_jwb' => 'karyawan','no_pnj' => '18'),
		  array('id' => '46','kode_ruang_itb' => '135.02.0034','kode_ruang_prodi' => '135.02.034','nama_ruangan' => 'Ruang Pegawai TF','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 8 buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 buah','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '47','kode_ruang_itb' => '135.02.0036','kode_ruang_prodi' => '135.02.036','nama_ruangan' => 'Ruang Laboratorium Optik 2','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '48','kode_ruang_itb' => '135.02.0035','kode_ruang_prodi' => '135.02.035','nama_ruangan' => 'Laboratorium Optik 1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 18 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '49','kode_ruang_itb' => '135.02.0036A','kode_ruang_prodi' => '135.02.036A','nama_ruangan' => 'Ruang Dosen  Vebi Nadira','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan ruang Lab. Optik 2)','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '50','kode_ruang_itb' => '135.02.0037','kode_ruang_prodi' => '135.02.037','nama_ruangan' => 'Ruang Multimedia','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '51','kode_ruang_itb' => '135.02.0038','kode_ruang_prodi' => '135.02.038','nama_ruangan' => 'GALERI TF','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '52','kode_ruang_itb' => '135.02.0039','kode_ruang_prodi' => '135.02.039','nama_ruangan' => 'Ruang Cluster','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '53','kode_ruang_itb' => '135.02.0040','kode_ruang_prodi' => '135.02.040','nama_ruangan' => 'Lab. Sistem Instrumentasi Industri
		','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 12 Buah : (2 Buah Ballast Konvensional),(10 Buah Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '54','kode_ruang_itb' => '135.02.0040A','kode_ruang_prodi' => '135.02.040A','nama_ruangan' => 'Lab. Instrumentasi dan Metrologi
		Ketua : Dr. Augie W','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan Lab. Sistem Instrumentasi Industri)','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '55','kode_ruang_itb' => '135.02.0040B','kode_ruang_prodi' => '135.02.040B','nama_ruangan' => 'Ruang Dosen Dr. Eko Mursito Budi ','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 2 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (Saklar bersatu dengan Lab. Sistem Instrumentasi Industri)','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '56','kode_ruang_itb' => '135.02.0040C','kode_ruang_prodi' => '135.02.040C','nama_ruangan' => 'Ruang Admin','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah : 2 Buah Ballast elektronik, 2 Buah Ballast Konvensional
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : Saklar bersatu dengan Lab. Sisin','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '57','kode_ruang_itb' => '135.02.0041','kode_ruang_prodi' => '135.02.041','nama_ruangan' => 'Lab. Manajemen Sistem Instrumentasi dan Kontrol','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 24 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 Buah','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '58','kode_ruang_itb' => '135.02.2042','kode_ruang_prodi' => '135.02.042','nama_ruangan' => 'Pintu Selasar Timur','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '59','kode_ruang_itb' => '135.02.0043','kode_ruang_prodi' => '135.02.043','nama_ruangan' => 'Ruang Dosen X 1','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 8 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : (saklar bersatu dengan ruang Dosen BS)','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '60','kode_ruang_itb' => '135.02.0044','kode_ruang_prodi' => '135.02.044','nama_ruangan' => 'Ruang Tunggu Dosen HT DKK','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 4 Buah (Ballast Konvensional)
		Jenis lampu    : TL 36 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 1 Buah','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '61','kode_ruang_itb' => '135.02.2044','kode_ruang_prodi' => '135.02.044A','nama_ruangan' => 'Ruang X 2','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '62','kode_ruang_itb' => '135.02.2044','kode_ruang_prodi' => '135.02.044B','nama_ruangan' => 'Ruang X 3','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '63','kode_ruang_itb' => '135.02.2044','kode_ruang_prodi' => '135.02.044C','nama_ruangan' => 'Ruang Dosen Prof. DR. Soegianto','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '64','kode_ruang_itb' => '135.02.2044','kode_ruang_prodi' => '135.02.044D','nama_ruangan' => 'Ruang Dosen > Prof.DR. Harijono Tjokronegoro','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '65','kode_ruang_itb' => '135.02.2045','kode_ruang_prodi' => '135.02.045','nama_ruangan' => 'Lab Thermal Kondisi Lingkungan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '66','kode_ruang_itb' => '135.02.2046','kode_ruang_prodi' => '135.02.046','nama_ruangan' => 'Lab. Thermal Kondisi Lingkungan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '67','kode_ruang_itb' => '135.02.2046A','kode_ruang_prodi' => '135.02.046A','nama_ruangan' => 'Ruang Dosen . Ir.Wisnu Hendrajit,M.Sc.E ','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '68','kode_ruang_itb' => '135.02.2046B','kode_ruang_prodi' => '135.02.046B','nama_ruangan' => 'Ruang Dosen Rahmat Romadhon, ST.,MT','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '69','kode_ruang_itb' => '135.02.2046C','kode_ruang_prodi' => '135.02.046C','nama_ruangan' => 'Dr. Aditya Gandayus Saputro, ST.','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '70','kode_ruang_itb' => '135.02.2046D','kode_ruang_prodi' => '135.02.046D','nama_ruangan' => 'Ruang Dosen  ua Tamba Agustinus, ST., Ph.D.','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '71','kode_ruang_itb' => '135.02.2046E','kode_ruang_prodi' => '135.02.046E','nama_ruangan' => 'Ruang Belajar ','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '72','kode_ruang_itb' => '135.02.2047','kode_ruang_prodi' => '135.02.047','nama_ruangan' => 'Lab. Thermal Kondisi Lingkungan 1','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '73','kode_ruang_itb' => '135.02.2048','kode_ruang_prodi' => '135.02.048','nama_ruangan' => 'Dapur Teknik Fisika','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '74','kode_ruang_itb' => '135.03.3049','kode_ruang_prodi' => '135.03.049','nama_ruangan' => 'Ruang Adm. Perpustakaan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '5'),
		  array('id' => '75','kode_ruang_itb' => '135.02.2049','kode_ruang_prodi' => '135.02.049A','nama_ruangan' => 'Ruang Baca Perpustakaan ','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '5'),
		  array('id' => '76','kode_ruang_itb' => '135.03.3049','kode_ruang_prodi' => '135.03.049B','nama_ruangan' => 'Ruang Buku dan Baca Perpustakaan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '5'),
		  array('id' => '77','kode_ruang_itb' => '135.03.3050','kode_ruang_prodi' => '135.03.050','nama_ruangan' => 'Ruang Buku Dan Baca Perpustakaan','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '5'),
		  array('id' => '78','kode_ruang_itb' => '135.03.3051','kode_ruang_prodi' => '135.03.051','nama_ruangan' => 'Ruang Pertemuan Lab. CMD','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '79','kode_ruang_itb' => '135.03.3051','kode_ruang_prodi' => '135.03.051A','nama_ruangan' => 'Ruang Prof.DR. Hermawan K','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '80','kode_ruang_itb' => '135.03.3051','kode_ruang_prodi' => '135.03.051B','nama_ruangan' => 'Raung Cluster CMD','desc_ruang' => 'Luas ruangan   : 
		Jumlah lampu   : 
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : ','pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '81','kode_ruang_itb' => '135.03.3052','kode_ruang_prodi' => '135.03.052','nama_ruangan' => 'Lab Instrumentasi Pencitraan dan Ultrasonik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '82','kode_ruang_itb' => '135.03.3052','kode_ruang_prodi' => '135.03.052A','nama_ruangan' => 'Ruang Prof.DR.Dedy Kurniadi','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '83','kode_ruang_itb' => '135.03.3053','kode_ruang_prodi' => '135.03.053','nama_ruangan' => 'Pintu Darurat Lt.3','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '84','kode_ruang_itb' => '135.03.3054','kode_ruang_prodi' => '135.03.054','nama_ruangan' => 'Ruang Lab. Manajemen Energi','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '85','kode_ruang_itb' => '135.03.3055','kode_ruang_prodi' => '135.03.055','nama_ruangan' => 'Ruang Pertemuan Lab Medik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '86','kode_ruang_itb' => '135.03.3055','kode_ruang_prodi' => '135.03.055A','nama_ruangan' => 'Ruang Tugas Akhir Lab Medik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '87','kode_ruang_itb' => '135.03.3056','kode_ruang_prodi' => '135.03.056','nama_ruangan' => 'Ruang Ukur EEG Lab. Medik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '88','kode_ruang_itb' => '135.03.3057','kode_ruang_prodi' => '135.03.057','nama_ruangan' => 'Gudang Alat
		','desc_ruang' => 'Luas ruangan   : 27,78m²
		Jumlah lampu   : 8
		Jenis Ballast  : Elektronik
		Jenis lampu    : TL 32 Watt
		Cahaya lampu   : 
		Jumlah Saklar  : 2 > 1 untuk 2 lampu > 1 untuk 6 lampu
		Fasilitas : AC','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '89','kode_ruang_itb' => '135.03.3058','kode_ruang_prodi' => '135.03.058','nama_ruangan' => 'WORKSHOP','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '90','kode_ruang_itb' => '135.03.3058','kode_ruang_prodi' => '135.03.058A','nama_ruangan' => 'Ruang Teknisi Workshop','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '91','kode_ruang_itb' => '135.03.3058','kode_ruang_prodi' => '135.03.058B','nama_ruangan' => 'Ruang Transit Alat','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '92','kode_ruang_itb' => '135.03.3059','kode_ruang_prodi' => '135.03.059','nama_ruangan' => 'Lab. Kontrol Dan Otomasi Cerdas','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '93','kode_ruang_itb' => '135.03.3059','kode_ruang_prodi' => '135.03.059A','nama_ruangan' => 'DR.Ir. Sutanto Hadisupadmo','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '94','kode_ruang_itb' => '135.03.3059','kode_ruang_prodi' => '135.03.059B','nama_ruangan' => 'Ruang DR.Ir.Endra Joelianto','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '95','kode_ruang_itb' => '135.03.3059','kode_ruang_prodi' => '135.03.059C','nama_ruangan' => 'Lab PLC','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '96','kode_ruang_itb' => '135.03.3059','kode_ruang_prodi' => '135.03.059D','nama_ruangan' => 'Lab Meteringskid','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '97','kode_ruang_itb' => '135.03.3060','kode_ruang_prodi' => '135.03.060','nama_ruangan' => 'Panel Listril','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '98','kode_ruang_itb' => '135.03.3061','kode_ruang_prodi' => '135.03.061','nama_ruangan' => 'Toilet Wanita','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '99','kode_ruang_itb' => '135.03.3062','kode_ruang_prodi' => '135.03.062','nama_ruangan' => 'Tempat Wudhu','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '100','kode_ruang_itb' => '135.03.3063','kode_ruang_prodi' => '135.03.063','nama_ruangan' => 'Toilet Pria','desc_ruang' => NULL,'pnj_jwb' => 'dosen','no_pnj' => '1'),
		  array('id' => '101','kode_ruang_itb' => '135.03.3064','kode_ruang_prodi' => '135.03.064','nama_ruangan' => 'Ruang Pertemuan Dosen Ida Bagus','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '102','kode_ruang_itb' => '135.03.3064','kode_ruang_prodi' => '135.03.064A','nama_ruangan' => 'DR.Ir.Ida Bagus Ardhana Putra','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '103','kode_ruang_itb' => '135.03.3065','kode_ruang_prodi' => '135.03.065','nama_ruangan' => 'Ruang Pertemuan .DR.Ir.I.G.N','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '104','kode_ruang_itb' => '135.03.3065','kode_ruang_prodi' => '135.03.065A','nama_ruangan' => 'DR.Ir.I.G.N Mertayasa.M.Eng','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '105','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066','nama_ruangan' => 'Pintu Utama Ruang Dosen','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '106','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066A','nama_ruangan' => 'FX Nugroho Soelami, Ir.MBENV','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '107','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066B','nama_ruangan' => 'Ruang. DR.Ir Rizky Armanto','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '108','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066C','nama_ruangan' => 'Iwan Prasetiyo,ST.,MT.,Ph.D','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '109','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066D','nama_ruangan' => 'Mohammad Kemal Agusta,ST','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '110','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066E','nama_ruangan' => 'DR. Miranti Indra Mandasari','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '111','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066F','nama_ruangan' => 'Ruang Asisten Akademik','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '112','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066G','nama_ruangan' => 'Ruang .Dr. Suprijanto','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '113','kode_ruang_itb' => '135.03.3066','kode_ruang_prodi' => '135.03.066H','nama_ruangan' => 'Estyanti Ekawati,IT.,MT.PH.D','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '114','kode_ruang_itb' => '135.03.3067','kode_ruang_prodi' => '135.03.067','nama_ruangan' => 'Ruang. Asisten Akademik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '115','kode_ruang_itb' => '135.03.3068','kode_ruang_prodi' => '135.03.068','nama_ruangan' => 'Ruang S2/S3','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '116','kode_ruang_itb' => '135.03.3069','kode_ruang_prodi' => '135.03.069','nama_ruangan' => 'Lab. Fisbang Ruang Gelap','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '117','kode_ruang_itb' => '135.03.3069','kode_ruang_prodi' => '135.03.069A','nama_ruangan' => 'Ruang Fisbang Anecoic','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '118','kode_ruang_itb' => '135.03.3070','kode_ruang_prodi' => '135.03.070','nama_ruangan' => 'Lab Fisbang','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '119','kode_ruang_itb' => '135.03.3070','kode_ruang_prodi' => '135.03.070A','nama_ruangan' => 'Ir.Sugeng Joko Sarwono,MT.,PH.D ','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '120','kode_ruang_itb' => '135.04.4072','kode_ruang_prodi' => '135.04.072','nama_ruangan' => 'Ruang Praktikum A','desc_ruang' => NULL,'pnj_jwb' => 'dosen','no_pnj' => '1'),
		  array('id' => '121','kode_ruang_itb' => '135.04.4073','kode_ruang_prodi' => '135.04.073','nama_ruangan' => 'Lab TF A','desc_ruang' => 'Luas ruangan   : 81m²
		Jumlah lampu   : 
		Jenis lampu    : TL 36 Watt
		Lumens         : 
		Jumlah Saklar  : 
		Fasilitas      : AC','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '122','kode_ruang_itb' => '135.04.4074','kode_ruang_prodi' => '135.04.074','nama_ruangan' => 'Lab TF A','desc_ruang' => 'Luas ruangan   : 54m²
		Jumlah lampu   : 
		Jenis lampu    : TL 36 Watt
		Lumens         : 
		Jumlah Saklar  : 
		Fasilitas      : AC','pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '123','kode_ruang_itb' => '135.04.4075','kode_ruang_prodi' => '135.04.075','nama_ruangan' => 'Ruang Seminar 2','desc_ruang' => NULL,'pnj_jwb' => 'dosen','no_pnj' => '1'),
		  array('id' => '124','kode_ruang_itb' => '135.04.4075','kode_ruang_prodi' => '135.04.075A','nama_ruangan' => 'Pintu Ke Kontrol Lift','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '125','kode_ruang_itb' => '135.04.4076','kode_ruang_prodi' => '135.04.076','nama_ruangan' => 'Ruang Ruang Seminar 3','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '126','kode_ruang_itb' => '135.04.4077','kode_ruang_prodi' => '135.04.077','nama_ruangan' => 'Lab. Komputer','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '127','kode_ruang_itb' => '135.04.4078','kode_ruang_prodi' => '135.04.078','nama_ruangan' => 'Lab. Komputer','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '10'),
		  array('id' => '128','kode_ruang_itb' => '135.04.4083','kode_ruang_prodi' => '135.04.083','nama_ruangan' => 'Ruang Seminar 4','desc_ruang' => '','pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '129','kode_ruang_itb' => '135.04.4080','kode_ruang_prodi' => '135.04.080','nama_ruangan' => 'Ruang Seminar 5','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '130','kode_ruang_itb' => '135.04.4081','kode_ruang_prodi' => '135.04.081','nama_ruangan' => 'Panel Listrik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '131','kode_ruang_itb' => '135.04.0082','kode_ruang_prodi' => '135.04.082','nama_ruangan' => 'Ruang Praktikum B','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '132','kode_ruang_itb' => '135.04.0083','kode_ruang_prodi' => '135.04.083','nama_ruangan' => 'Toilet Wanita','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '133','kode_ruang_itb' => '135.04.0084','kode_ruang_prodi' => '135.04.084','nama_ruangan' => 'Tempat Wudhu','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '2'),
		  array('id' => '134','kode_ruang_itb' => '135.04.4085','kode_ruang_prodi' => '135.04.085','nama_ruangan' => 'Toilet Pria','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '135','kode_ruang_itb' => '135.04.4086','kode_ruang_prodi' => '135.04.086','nama_ruangan' => 'Panel Listrik','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '136','kode_ruang_itb' => '135.04.4087','kode_ruang_prodi' => '135.04.087','nama_ruangan' => 'Ruang Praktikum B','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '137','kode_ruang_itb' => '135.04.4088','kode_ruang_prodi' => '135.04.088','nama_ruangan' => 'Pintu Utama Ruang Dosen','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '138','kode_ruang_itb' => '135.04.4088','kode_ruang_prodi' => '135.04.088A','nama_ruangan' => 'Ruang . Dr.Ing.Ir.Parsaulian Ishaya Siregar','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '139','kode_ruang_itb' => '135.04.4088','kode_ruang_prodi' => '135.04.088B','nama_ruangan' => 'Ruang. Prof.Dr. Ing.Ir.Yul.Y. Nazarudin','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '140','kode_ruang_itb' => '135.04.4088C','kode_ruang_prodi' => '135.04.088C','nama_ruangan' => 'Ruang . Dr.Ir.Agus Samsi MT','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '141','kode_ruang_itb' => '135.04.4088','kode_ruang_prodi' => '135.04.088D','nama_ruangan' => 'Ruang. Brian Yuliarto ST.,Ph.D','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '142','kode_ruang_itb' => '135.04.4089','kode_ruang_prodi' => '135.04.089','nama_ruangan' => 'Lab. Instrumentasi Industri','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '1'),
		  array('id' => '143','kode_ruang_itb' => '135.04.4089A','kode_ruang_prodi' => '135.04.089','nama_ruangan' => 'Ruang Pertemuan','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '144','kode_ruang_itb' => '135.04.4090','kode_ruang_prodi' => '135.04.090','nama_ruangan' => 'Dapur Teknik Fisika','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '145','kode_ruang_itb' => '135.04.4090A','kode_ruang_prodi' => '135.04.090','nama_ruangan' => 'Pintu Kontrol Lift','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '146','kode_ruang_itb' => '135.03.3054','kode_ruang_prodi' => '135.03.054A','nama_ruangan' => 'Dr. Ir. Edi Leksono','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '8'),
		  array('id' => '147','kode_ruang_itb' => '135.04.4085','kode_ruang_prodi' => '135.04.085','nama_ruangan' => 'Toilet Pria','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '11'),
		  array('id' => '148','kode_ruang_itb' => '135.02.2036','kode_ruang_prodi' => '135.02.036A','nama_ruangan' => 'Vebi Nadhira, ST., MT.','desc_ruang' => NULL,'pnj_jwb' => 'karyawan','no_pnj' => '6'),
		  array('id' => '149','kode_ruang_itb' => '135.04.091','kode_ruang_prodi' => '135.04.091','nama_ruangan' => 'Instrumentasi Industri','desc_ruang' => '-','pnj_jwb' => 'karyawan','no_pnj' => '10')
		);


		foreach ($ruang as $key => $value) {
	        $room = new Room();
	        $room->user_id = $value['no_pnj']+4;
	        $room->code = $value['kode_ruang_itb'];
	        $room->code2 = $value['kode_ruang_prodi'];
	        $room->name = $value['nama_ruangan'];
	        $room->description = $value['desc_ruang'];
	        $room->save();
		}
			

    }
}
