@extends('layouts.app')
@section('content')
<div class="container">
<div class="row" id="intestation">
    <div class="col-md-6">
    <div class="text-center"><h2><strong>Bentornato {{ $user->name }}</strong></h2></div>
    </div>
</div>


    <div class="row">
    @foreach ($allusers as $alluser)
    
    <?php
        $info = "";
        if (Illuminate\Support\Facades\DB::table('user_region')->where('user_id', $alluser->id)->exists()) {
            $out = Illuminate\Support\Facades\DB::table('user_region')->where('user_id', $alluser->id)->get();
            //dd($out);
            foreach ($out as $region) {
                $reg = \App\Region::where('id', $region->region_id)->get();
                foreach ($reg as $regOn) {
                    $info .= $regOn->name_region." ";
                }
                
            }
        }
    ?> 

    <div class="col-md-3" id="userLine">
    <div class="card" style="width:200px">
    @if ($alluser->type == 1)
    <img class="card-img-top" src="/img/admin.png" alt="Card image">
            @elseif ($alluser->type == 0)
            <img class="card-img-top" src="/img/agent.png" alt="Card image">
            @endif
  
  <div class="card-body">
    <h4 class="card-title">{{ $alluser->name }}</h4>
    @if ($info == "")
    <p class="card-text">Regione: Non selezionata<br>
    @else
    <p class="card-text">Regione: {{ $info }}<br>
    @endif
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
    <?php $info = ""; ?>
    @endforeach
    <div class="col-md-3" id="userLine">
    <div class="card" style="width:200px">
    <img class="card-img-top" src="/img/AddUser.png" alt="Card image">
  
  <div class="card-body">
    
    <p class="card-text"><br>
    </p>
    <div class="btn-group">
        <a href="{{action('AdminPanelController@index')}}"><button type="button" class="btn btn-primary">Crea</button></a>
    </div>
    </div>
</div>
    </div>
    </div>
</div>
@endsection