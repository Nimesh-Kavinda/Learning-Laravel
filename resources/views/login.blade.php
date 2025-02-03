@extends('layout')

@section('title', 'Login Page')


@section('main')
@parent
<div class="main">
  <h1>User Login Form</h1>
  <form action="" method="post">
  <input type="text" placeholder="Enter Name">
  <br><br>

  <input type="password" placeholder="Enter Password">
  <br><br>

  <button type="button" class="btn btn-primary">Login</button>
  </form>
</div>


@endsection


