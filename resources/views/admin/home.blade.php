@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($abc as $value)
        <tr>
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->password }}</td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@stop