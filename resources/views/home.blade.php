@extends('layouts.template') <!-- import template -->

@section('title', 'Home') <!-- title -->

@section('content') <!-- main content (isi body) -->
  <h5>Home</h5>

  <h5>welcome , {{$name}}, anda adalah {{$role}}</h5>

  <table class="table table-dark table-striped-columns small">
    <tr>
      <th>Nomor</th>
      <th>Nama</th>
    </tr>
    @foreach($buah as $data)

    <tr>
      <td>{{$loop->iteration}}</td>
      <td>{{$data}}</td>
    </tr>

    @endforeach
  </table>
@endsection

