<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>

    <style>
        body {
            text-align: center;
            font-family: 'Nunito', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
          <a class="navbar-brand" href="#">CODER</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/course">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/user">User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- end navbar --}}

@extends('master')
@section('title', 'Detail Course')
@section('content')
    <h2> {{ $course->title }} </h2>
    <p> {{ $course->description }} </p>

    {{-- @foreach ($course->episodes as $m)
        <p> {{ $m->episode }} </p>
    @endforeach --}}
@endsection
