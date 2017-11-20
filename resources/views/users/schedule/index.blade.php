@extends('layouts.app')

@section('content')
<div class="main" style="margin-top: 1em">
  <div class="main-inner">
    <div class="container">

          <div class="widget">

            <div class="widget-content">


                  <div class="shortcuts">

                <a href="{{ route('home') }}" class="shortcut"><i class="shortcut-icon icon-globe"></i><span class="shortcut-label">Planting Guides</span> </a>
                <a href="{{ route('plant.index') }}" class="shortcut"> <i class="shortcut-icon icon-list-alt"></i><span class="shortcut-label">Field Status</span> </a>

                <a href="{{ route('utilities.index') }}" class="shortcut"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                <a href="{{ route('schedule.index') }}" class="shortcut  shortcut-active"><i class="shortcut-icon icon-calendar"></i> <span class="shortcut-label">Planting Schedule</span> </a>


                  </div>
                  <!-- /shortcuts --> 


                  </div>
                  <!-- /widget-content --> 
            </div>
            <!-- /widget -->



          <div class="row">
            <div class="col-md-6">

          <div class="widget">
            <!-- /widget-header -->
            <div class="widget-content" style="padding-top: 4em;">
              <div id='calendar'></div>
              <hr>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
            </div>
            <div class="col-md-6">

          <div class="widget">
            <!-- /widget-header -->
            <div class="widget-content" style="padding-top: 4em;">

              <h3 style="text-align: center;">Todo Schedule</h3>
              <hr>
              <table id="todoTable" class="table table-striped">
              @if(!$data)
              <p align="center">Belum Ada Data</p>
              @else
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>                
              </thead>
              <tbody id="konten">
              </tbody>
              @endif
              </table>
              <hr>
              <p align="right">* Checklist jika sudah selesai</p>

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

  @section('js')
  <script type="text/javascript" src="{{ asset('js/full-calendar/fullcalendar.min.js') }}"></script>

<script>  
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

@if($data)
var schedule = {!! $data->schedule !!};
var schedule2 = {!! $data->schedule !!};
@else
var schedule = [];
var schedule2 = [];
@endif

  function loadTodo() {

    var konten = document.getElementById('konten');


    konten.innerHTML = ''; //reset table data


    function createRow(vid,vtitle,vdate) {
      var action = document.createElement("td");
      var title = document.createElement("td");
      var date = document.createElement("td");
      var tr = document.createElement("tr");
      var box = document.createElement('span');

      box = '<input type="checkbox" onchange="removeSchedule('+vid+')">';

      title.innerText = vtitle;
      action.innerHTML = box;
      date.innerText = vdate;
      tr.appendChild(title);
      tr.appendChild(date);
      tr.appendChild(action);
      
      konten.appendChild(tr);
    }

    function formatDate(date) {
      date = new Date(date);
      return date.getDate() +'/'+date.getMonth()+'/'+date.getFullYear();
    }

    for (var i = 0; i < schedule.length; i++) {
      var date = schedule[i].end == undefined ? formatDate(schedule[i].start) : formatDate(schedule[i].start) + ' - ' + formatDate(schedule[i].end);
      createRow(i,schedule[i].title,date);
    }

  }

  loadTodo();


  function removeSchedule(id) {
    schedule.splice(id,1);
    schedule2.splice(id,1);
    loadTodo();
    loadCalendar();
    saveSchedule();
  }
  function addSchedule(title, start, end, allDay) {
    start.setHours(23);
    end.setHours(23);

    schedule.push(
      {
        title: title,
        start: start,
        end: end,
        allDay: allDay
      }
    );
    schedule2.push(
      {
        title: title,
        start: start,
        end: end,
        allDay: allDay
      }
    );
    loadTodo();
    saveSchedule();
  }

  function loadCalendar() {

    var calendar = $('#calendar');
    calendar.empty(); // reset

    calendar.fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: ''
      },
      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          addSchedule(title,start,end,allDay);
          calendar.fullCalendar('renderEvent',
            {
              title: title,
              start: start,
              end: end,
              allDay: allDay
            },
            true // make the event "stick"
          );
        }
        calendar.fullCalendar('unselect');
      },
      editable: true,
      events: schedule2
    });

  }
  loadCalendar();

  function saveSchedule() {
    
    $.ajax({
      url: "{{ route('schedule.create') }}",
      data: { 'schedule': JSON.stringify(schedule) },
      type: 'GET',
      error: function() {
        alert('Gagal di simpan, silahkan coba lagi');
      },
      success: function(res) {
        alert('Berhasil di simpan');
      }
    }); 
  }

  </script>
  @endsection
