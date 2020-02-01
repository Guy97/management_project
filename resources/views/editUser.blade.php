@extends('layouts.app')
@section('content')
<div class="container">
<?php $contregion = []; ?>
    @foreach ($userRegion as $region) 
        <?php   $regionusers = \App\Region::where('id', $region->region_id)->get(); 
                
        ?>
        @foreach ($regionusers as $regionuser) 
            <?php array_push($contregion, $regionuser->name_region);
                
            ?>
            
        @endforeach
    @endforeach
     

<form action="{{action('AdminPanelController@update', $id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PATCH">
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
        @if (in_array($region->name_region, $contregion))
      <input type="checkbox" name="region[]" value="{{ $region->id }}" checked> {{ $region->name_region }}
      @else
      <input type="checkbox" name="region[]" value="{{ $region->id }}"> {{ $region->name_region }}
      @endif
    @endforeach
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection