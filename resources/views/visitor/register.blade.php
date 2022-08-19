@extends('app')
@section('content')
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

   
    <form method="post"   enctype="multipart/form-data"   style="margin-top:60px;">
@method('POST')
    @csrf
<div class="container register-form">
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

            <div class="form">
              
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *"  name ="name"/>
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Father Namer *" name="fname" />
                            </div>
                        </div><br>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="password" />
                            </div><br>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email id *" name="email" />
                            </div><br>
                           
                        </div>
                       
                     </div><br>
                     <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                                <input type="number" class="form-control" placeholder="Mobile Number *" name="number" />
                            </div>
                    </div>
                     </div>
                    <input  type="submit" class="btn btn-primary" name="save" value="Save">
                </div>
            </div>
        </div>
</form>

  </div>
</div>   
    @endsection
