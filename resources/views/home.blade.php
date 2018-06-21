@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="block-header">
    <h2>DASHBOARD</h2>
  </div>

  <!-- Widgets -->
  <div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-blue hover-expand-effect">
        <div class="icon">
          <i class="material-icons">playlist_add_check</i>
        </div>
        <div class="content">
          <div class="text">Completed Project</div>
          <div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20">
            {{ \App\Project::where('status',1)->count() }}
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-cyan hover-expand-effect">
        <div class="icon">
          <i class="material-icons">cached</i>
        </div>
        <div class="content">
          <div class="text">Ongoing Project</div>
          <div class="number count-to">{{ \App\Project::where('status',0)->count() }}</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-teal hover-expand-effect">
        <div class="icon">
          <i class="material-icons">assignment</i>
        </div>
        <div class="content">
          <div class="text">Total Project</div>
          <div class="number count-to" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20">{{ \App\Project::count() }}</div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="info-box bg-blue-grey hover-expand-effect">
        <div class="icon">
          <i class="material-icons">person_add</i>
        </div>
        <div class="content">
          <div class="text">Users</div>
          <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">{{ \App\User::count() }}</div>
        </div>
      </div>
    </div>
  </div>
  <!-- #END# Widgets -->

  <div class="row clearfix">
    <!-- Visitors -->
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
      <div class="card">
        <div class="body bg-blue">
        <div class="m-b--35 font-bold">LATESTS PROJECTS</div>
        <ul class="dashboard-stat-list">
        @foreach(\App\Project::select(DB::raw('COUNT(members.id) as jumlah'),'projects.*')->join('members','members.project_id','projects.id')
                    ->groupBy('members.id')->limit(5)->get() as $v)
          <li>
            <a href="{{ route('projects.show',$v->id) }}" style="color: white">{{ $v->name }}</a>
            <span class="pull-right"><b>{{ $v->jumlah }}</b> <small>PROGRAMMER</small></span>
          </li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
  <!-- #END# Visitors -->

  <!-- Answered Tickets -->
  <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <div class="body bg-teal">
        <div class="font-bold m-b--35">COMPLETED TASKS</div>
        <ul class="dashboard-stat-list">
          <li>
            TODAY
            <span class="pull-right"><b>12</b> <small>TASKS</small></span>
          </li>
          <li>
            YESTERDAY
            <span class="pull-right"><b>15</b> <small>TASKS</small></span>
          </li>
          <li>
            LAST MONTH
            <span class="pull-right"><b>342</b> <small>TASKS</small></span>
          </li>
          <li>
            LAST YEAR
            <span class="pull-right"><b>4 225</b> <small>TASKS</small></span>
          </li>
          <li>
            ALL
            <span class="pull-right"><b>8 752</b> <small>TASKS</small></span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- #END# Answered Tickets -->
</div>

</div>
@endsection
