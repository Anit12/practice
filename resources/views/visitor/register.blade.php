@extends('app')
@section('content')
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown" style="margin-top:80px;">
  <div id="formContent">
    <!-- Tabs Titles -->
 
   
<form method="POST" action="{{url('register_store')}}"  enctype="multipart/form-data" >
    <!-- -->
 @if($errors->any())
                  <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                  </div>
               @endif 

@method('POST')
    @csrf
 <div class="container">
    <div class="row">
        <div class="col-md-6">
        <input type="text" class="form-control" placeholder="Your Name *"  name ="name" value="">
     </div>
     <div class="col-md-6">
     <input type="text" class="form-control" placeholder="Father Namer *" name="fname"  />
  </div>
  <div class="row">
        <div class="col-md-6"><br>
        <input type="password" class="form-control" placeholder="Your Password *" name="password"  />
     </div>
     <div class="col-md-6"><br>
     <input type="email" class="form-control" placeholder="Email id *" name="email" />
  </div><br>
  <div class="row">
        <div class="col-md-6"><br>
        <input type="number" class="form-control" placeholder="Mobile Number *" name="mobile" />
     </div>
     <div class="col-md-6"><br>
     <input type="text" class="form-control" placeholder="Address *" name="address" />
  </div>
  <div class="row">
        <div class="col-md-12">
        <input  type="submit" class="btn btn-primary" name="save" value="Save">
     </div>
    
   </div>
 </div>
</form>
  </div>
</div>   
    @endsection
