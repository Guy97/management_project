@extends('layouts.app')
@section('content')
<br>
{{ $user->name }} <br>
    @foreach ($allusers as $alluser)
        {{ $alluser->name }} <br>
    @endforeach
@endsection