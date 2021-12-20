
@extends('include.master')

@section('contents')

<div class="display-4 text-secondary">
  Add Asset Type
</div>

@if (Session::has('success'))
    <div class="alert" style="background-color:#c8ffc7;font-weight:bold">{{Session::get('success')}}
      <span class="text-dark"><a href="/showasset">show</a></span>
    </div>
   
@endif

<form action="/insertdata" method="post" style="width: 1000px"> @csrf
    <div class="">
      <label  class="form-label">Type</label>
          @error('type')
              <span class="text-danger font-weight-bold">
                {{$message}}
              </span>
          @enderror
      <input type="text" class="form-control"  placeholder="TYPE" name="type" value="{{old('type')}}">
    </div>
    <div class="mb-3">
      <label  class="form-label">Description</label>
      @error('description')
      <span class="text-danger  font-weight-bold">
        {{$message}}
      </span>
  @enderror
      <textarea name="description" class="form-control" cols="20" rows="8" >{{old('description')}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-dark">Submit</button>
  </form>

@endsection
