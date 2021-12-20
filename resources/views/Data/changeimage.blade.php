@extends('include.master')

@section('contents')
    


<div class="display-4 text-secondary">
    Change Password
  </div>
  
  @if (Session::has('success'))
      <div class="alert" style="background-color:#c8ffc7;font-weight:bold">{{Session::get('success')}}
    
      </div>
     
  @endif


  @if (Session::has('error'))
  <div class="alert alert-danger">{{Session::get('error')}}</div>
 
@endif



<form action="/doneimage/{{{ Auth::user()->id}}}" method="post" enctype="multipart/form-data" style="width: 1000px">
    @csrf

   <div class="">

        <div class="">
                <div class="col text-center">
                    <label  class="form-label">Change Image</label>
                    @error('image')
                        <div class="text-danger font-weight-bold">
                            {{$message}}
                        </div>
                    @enderror
                    <input type="file" class="form-control col-3 m-auto"  placeholder="Old Password" name="image">
                </div>
        </div>
        

        


   </div>

 

  <div class="mt-3 text-center">
      <input type="submit" value="Change profile" class="btn btn-dark">
  </div>

</form>
    
@endsection