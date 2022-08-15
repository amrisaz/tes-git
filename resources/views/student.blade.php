@extends('layouts.template') <!-- import template -->

@section('title', 'Students') <!-- title -->

@section('content') <!-- main content (isi body) -->
  <h5>Ini Halaman Student</h5>
  <h5>{{$studentList}}</h5><br>

  @foreach ($studentList as $data)
  <li>
            {{$data->name}} |  {{$data->gender}}
  </li>
    endforeach
@endsection

