@extends('include.master')

@section('contents')
<div style="width: 1000px">

    
<div class="text-center h1">
    <a href="/showassetdata"><i class="fas fa-arrow-circle-left"></i></a>
    ID - {{$drop->unicode}}
</div>

<div class="row">

    @foreach ($data as $item)
    
   <div class="col-4">
    <div class="card text-center" style="width:18rem;">
        <img src="{{ asset('uploads/'.$item->images) }}" alt="Card image cap"  width="288px" height="200px">
        <div class="card-body">
          <div class="card-title">{{$drop->name}}</div> <br>
          
        </div>
    </div>
   </div>
    
    @endforeach
</div>
</div>
@endsection