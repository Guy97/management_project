@extends('layouts.app')
@section('content')
<div class="container">
<div class="row" id="intestation">
    <div class="col-md-6">
    <div class="text-center"><h2><strong>Bentornato {{ $user->name }}</strong></h2></div>
    </div>
    
    <div class="col-md-3"></div>
    <div class="col-md-3"><a href="{{action('AdminPanelController@index')}}"><button type="button" class="btn btn-primary">Crea</button></a></div>
</div>
<div class="row">
    <!-- <div class="card"> -->
        <div class="col-md-3 text-center">
            <strong>Nome Agente</strong>
        </div>
        <div class="col-md-3 text-center">
            <strong>Ruolo</strong>
        </div>
        <div class="col-md-3 text-center">
            <strong>Regioni</strong>
        </div>
        <div class="col-md-3 text-center">
            <strong>Modifica / Elimina</strong>
        </div>
    <!-- </div> -->
</div>
    @foreach ($allusers as $alluser)
    <div class="row">
    <!-- <div class="card"> -->
        <div class="col-md-3 text-center">
            <p>{{ $alluser->name }}</p>
        </div>
        <div class="col-md-3 text-center">
            @if ($alluser->type == 1)
                <p>Admin</p>
            @elseif ($alluser->type == 0)
                <p>Agente</p>
            @endif
        </div>
        <div class="col-md-3 text-center">
            <strong>Regioni</strong>
        </div>
        <div class="col-md-3 text-center">
            <strong>Modifica / Elimina</strong>
        </div>
    <!-- </div> -->
    </div>
    @endforeach
</div>
@endsection