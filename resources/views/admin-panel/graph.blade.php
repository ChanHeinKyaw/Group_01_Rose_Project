@extends('layouts.admin-app')
@section('title', '')
@section('content')
  <section id="main-content" class="column column-offset-20">
    <!--Charts-->
    <h5>Graphs</h5><a class="anchor" name="graphs"></a>
    <div class="row grid-responsive">
      <div class="column column-50">
        <div class="card">
          <div class="card-title">
            <h2>Age level Crime</h2>
          </div>
          <div class="card-block">
            <div class="canvas-wrapper">
              <canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="column column-50">
        <div class="card">
          <div class="card-title">
            <h2>Line Chart</h2>
          </div>
          <div class="card-block">
            <div class="canvas-wrapper">
              <canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="credit">SCM OJT Batch 2 group I<a href="#">Group I</a></p>
  </section>
@endsection
