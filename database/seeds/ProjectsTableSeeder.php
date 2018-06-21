<?php

use Illuminate\Database\Seeder;
use App\Project;
use App\Task;
use App\Member;
use App\Difficulty;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$diff = [
		[1,20],
		[2,40],
		[3,60],
		[4,80],
		[5,100],
	];
	$members = [
		[1,2],
		[2,2],
	];
	$task = [
		['buat repositori github','set gihub private',1,1,2,'2018-8-8'],
		['buat crud untuk table keuangan','gunakan databtable ui',3,1,2,'2018-8-8'],
	];

	$projects = [
		['Sistem Managemen Akuntansi Pt. Kairaga','adalah program keuangan pt.kairaga berbasis web',1],
		['Sistem Smart Tilang ','adalah program kerjasama pemkot bandung & kepolisian bandung',1],
	];


	foreach ($diff as $key => $value) {
	        $a = new Difficulty();
	        $a->id = $value[0];
	        $a->exp = $value[1];
	        $a->save();
	}

	foreach ($projects as $key => $value) {
	        $a = new Project();
	        $a->name = $value[0];
	        $a->desc = $value[1];
	        $a->leader_id = $value[2];
	        $a->save();
	}

	foreach ($members as $key => $value) {
	        $a = new Member();
	        $a->project_id = $value[0];
	        $a->user_id = $value[1];
	        $a->save();
	}

	foreach ($task as $key => $value) {
	        $a = new Task();
	        $a->name = $value[0];
	        $a->desc = $value[1];
			$a->difficulty = $value[2];
	        $a->project_id = $value[3];
	        $a->user_id = $value[4];
	        $a->deadline = $value[5];
	        $a->save();
	}

    }
}
