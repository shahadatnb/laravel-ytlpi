@extends('layouts.master')
@section('title','Generation List')
@section('content')
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Generation List</h3>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>SL</th>
          <th>Username</th>
          <th>Name</th>
        </tr>
        @foreach($members as $key=>$item)
        <tr>
          <td>{{++$key}}</td>
          <td>{{$item->username}}</td>
          <td>{{$item->name}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
 @endsection