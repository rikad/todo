@extends('layouts.app')

@section('content')
<div class="main" style="margin-top: 1em">
  <div class="main-inner">
    <div class="container">

      <div class="row">
        <div class="span12">

          <div class="widget">

            <div class="widget-content">


                  <div class="shortcuts">

                  <a href="{{ route('home') }}" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Greenhouse Status</span> </a>

                  <a href="{{ route('utilities.index') }}" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                  <a href="{{ route('schedule.index') }}" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Planting Schedule</span> </a>

                  <a href="{{ route('plant.index') }}" class="shortcut shortcut-active"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Plant</span> </a>

                  </div>
                  <!-- /shortcuts --> 


                  </div>
                  <!-- /widget-content --> 
            </div>
            <!-- /widget -->

          </div>
        </div>

        <div class="row">
          <div class="span12">

            <div class="widget">
              <!-- /widget-header -->
              <div class="widget-content">

                Under Develop Cepi

              </div>
              <!-- /widget-content --> 
            </div>
            <!-- /widget -->

          </div>
        </div>


      </div>
    </div>
  </div>
  @endsection

