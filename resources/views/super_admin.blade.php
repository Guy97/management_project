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
    @foreach ($allusers as $alluser)
    
    <div class="col-md-3" id="userLine">
    <div class="card" style="width:200px">
    @if ($alluser->type == 1)
    <img class="card-img-top" src="/img/admin.png" alt="Card image">
            @elseif ($alluser->type == 0)
            <img class="card-img-top" src="/img/agent.png" alt="Card image">
            @endif
  
  <div class="card-body">
    <h4 class="card-title">{{ $alluser->name }}</h4>
    <p class="card-text">Regione: Regione<br>
    @if ($alluser->type == 1)
                Ruolo: Admin
            @elseif ($alluser->type == 0)
            Ruolo: Agente
            @endif
    </p>
    <div class="btn-group">
            <a href="{{action('AdminPanelController@edit', $alluser->id)}}" class="btn btn-primary btnIcon">Modifica</a>
            <form action="{{action('AdminPanelController@destroy', $alluser->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Elimina</button>
            </form>
          </div>
    </div>
</div>
    </div>
    @endforeach
    </div>
</div>
@endsection