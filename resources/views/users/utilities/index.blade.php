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

                <a href="{{ route('utilities.index') }}" class="shortcut  shortcut-active"><i class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Utilities</span> </a>

                <a href="{{ route('schedule.index') }}" class="shortcut"><i class="shortcut-icon icon-calendar"></i> <span class="shortcut-label">Planting Schedule</span> </a>

                <a href="{{ route('plant.index') }}" class="shortcut"> <i class="shortcut-icon icon-globe"></i><span class="shortcut-label">Plant</span> </a>

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

              <div class="row">
                <div class="span9">

                  <div class="form-group">
                    <label for="sel1">Period</label>
                    <select class="form-control" id="sel1">
                      <option>10/04/1997</option>
                      <option>10/04/1997</option>
                      <option>10/04/1997</option>
                      <option>10/04/1997</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="sel1">Greenhouse</label>
                    <select class="form-control" id="sel1">
                      <option>A</option>
                      <option>B</option>
                      <option>C</option>
                    </select>
                  </div>

                  <table class="table table-bordered">
                    <tr>
                      <th>Calendar Day</th>
                      <th>Sum Of Water Consumption (L)</th>
                      <th>Sum Of Electrical (Watt)</th>
                    </tr>

                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>01/04/2017</td>
                      <td>2</td>
                      <td>4</td>
                    </tr>

                    <tfoot>
                      <td>Grand Total</td>
                      <td>10</td>
                      <td>10</td>
                    </tfoot>
                  </table>

                </div>

                <div class="span2" style="text-align: center">
                  <h3 style="font-size: 25px">Total Water Consumption</h3><br>
                  <div style="border-radius: 20px; border: 4px solid black; font-size: 25px; padding: 25px">10 L</div>
                  <br>
                  <h3 style="font-size: 25px">Electrical Cost</h3><br>
                  <div style="border-radius: 20px; border: 4px solid black; font-size: 25px; padding: 25px">Rp. 200.000,-</div>
                </div>
              </div>

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

