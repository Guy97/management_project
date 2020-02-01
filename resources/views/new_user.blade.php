@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{route('admin_manage.store')}}" method="post">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nameuser" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ruolo</label>
    <select name="role">
      <option value="1">Admin</option>
      <option value="0">Agente</option>
    </select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Regioni</label>
    @foreach ($regions as $region)
      <input type="checkbox" name="region[]" value="{{ $region->id }}"> {{ $region->name_region }}
    @endforeach
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="emailuser" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="userpass" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection