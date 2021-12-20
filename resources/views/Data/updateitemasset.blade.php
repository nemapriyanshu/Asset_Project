
@extends('include.master')

@section('contents')


<div class="display-4 text-secondary">
    Update Asset Data
  </div>
  
  @if (Session::has('success'))
      <div class="alert" style="background-color:#c8ffc7;font-weight:bold">{{Session::get('success')}}
        <span class="text-dark"><a href="/showassetdata">show</a></span>
      </div>
     
  @endif

<form action="/upadateasetdata/{{$data->tid}}" method="post" enctype="multipart/form-data" style="width: 1000px"> 
    @csrf

   <div class="row">

        <div class="col-6 row">
                <div class="col">
                    <label  class="form-label">Name</label>
                    @error('name')
                        <span class="text-danger font-weight-bold">
                            {{$message}}
                        </span>
                    @enderror
                    <input type="text" class="form-control"  placeholder="Assert Name" name="name" value="{{$data->name}}">
                </div>
        </div>
        
        <div class="col-6 row">
                <div class="col">
                    <label  class="form-label">Assert Type</label>
                    @error('typeid')
                        <span class="text-danger font-weight-bold">
                            {{$message}}
                        </span>
                    @enderror
                    <select name="typeid" class="form-control">
                        <option value="">Assert Type</option>
{{-- This is for Drop Down --}}
                        @foreach ($drop as $item)
                            <option value="{{$item->id}}" >{{$item->type}}</option>
                        @endforeach
                    </select>
                </div>
                
        </div>

     

   </div>

 

  <div class="mt-3">
      <input type="submit" value="Add Category" class="btn btn-dark">
  </div>

</form>
    
@endsection



