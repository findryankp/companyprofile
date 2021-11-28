@extends('layouts.layout')
@section('title', 'Content')
@section('addcss')@endsection

@section('content')
<main id="main">
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Konten</h2>
          <ol>
            <li><a href="{{ url('content') }}">Konten</a></li>
            <li>Index</li>
          </ol>
        </div>

      </div>
    </section>

    <section id="about-us" class="about-us">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="content d-flex flex-column justify-content-center">
              <h3 data-aos="fade-up"><center>KONTEN</center></h3><br>

              <!-- Tulis konten di bawah sini -->

              
              <table class="table table-striped">
                <thead>
                  <th>#</th>
                  <th>Url</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  @foreach($data as $key => $d)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$d->url}}</td>
                      <td>
                        <a href="{{url('conten/show', $d->id)}}" class="btn btn-primary btn-sm">Show</a>
                        <a href="{{url('conten/edit', $d->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{url('conten/destroy', $d->id)}}" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              

            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
  </main><!-- End #main -->
@endsection

@section('addjs')@endsection