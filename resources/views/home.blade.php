@extends('layouts.app')

@section('name')
  {{ Auth::user()->name }}
@endsection

@section('content')
<div class="x_panel">
                  <div class="x_title">
                    <h2>Statistik Penjualan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <div class="btn-group">
                      <button type="button" class="btn btn-danger">Pilih Tahun</button>
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>                      
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('home.param',['tahun' => 2017])}}">2017</a>
                        </li>
                        <li><a href="{{route('home.param',['tahun' => 2016])}}">2016</a>
                        </li>
                        <li><a href="{{route('home.param',['tahun' => 2015])}}">2015</a>
                        </li>                        
                      </ul>
                    </div>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">                    
                    <div class="col-md-12">
                      {!! $chart->render() !!}  
                    </div>
                    <hr>
                    <div class="col-md-12">
                      {!! $chart2->render() !!}  
                    </div>                                      
                  </div>
                </div>






  {{--  <div class="col-md-12 col-sm-12 col-xs-12"> 
    <div class="x_panel">
        <div class="x_title">
          <h2>Chart<small>Orlinfarm</small></h2>
          <ul class="nav navbar-right panel_toolbox">
              <li></li>
          </ul>
          <div class="clearfix"></div>
        </div>
    </div>
    <div class="x_content">
    {!! $chart->render() !!}
    </div>  
  </div>  --}}
@endsection

