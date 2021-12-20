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



<form action="/donepassword/{{{ Auth::user()->id}}}" method="post" enctype="multipart/form-data" style="width: 600px">
    @csrf

   <div class="">

        <div class="col-6">
                <div class="col">
                    <label  class="form-label">Old Password</label>
                    @error('oldpass')
                        <div class="text-danger font-weight-bold">
                            {{$message}}
                        </div>
                    @enderror
                    <input type="password" class="form-control"  placeholder="Old Password" name="oldpass">
                </div>
        </div>
        
    
        <div class="col-6 row">
                <div class="col">
                    <label  class="form-label">New Password</label>
                    @error('newpass')
                        <div class="text-danger font-weight-bold">
                            {{$message}}
                        </div>
                    @enderror
                    <input type="password" class="form-control"  placeholder="New Password" name="newpass">
                </div>
        </div>
        
    
    
        <div class="col-6 row">
                <div class="col">
                    <label  class="form-label">Confirm Password</label>
                    @error('confim')
                        <div class="text-danger font-weight-bold">
                            {{$message}}
                        </div>
                    @enderror
                    <input type="password" class="form-control"  placeholder="Confirm Password" name="confim">
                </div>
        </div>
        


   </div>

 

  <div class="mt-3">
      <input type="submit" value="Change Password" class="btn btn-dark">
  </div>

</form>
    
@endsection