@extends('app')
@section('content')
<div class="container">
<a href="{{url('visitor_list')}}" class="btn btn-primary" style="margin-top:80px;">Back</a>
</div><br>
<form method="post" action="{{url('registrations_store')}}"  enctype="multipart/form-data" >
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
                                <input type="text" class="form-control" placeholder="Your Name *"  name ="name"value="{{old('name')}}"/>
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Father Namer *" name="fname" value="{{old('fname')}}" />
                            </div>
                        </div><br>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="password"value="{{old('password')}}" />
                            </div><br>
                           
                        </div>
                    </div><br>
                    <input  type="submit" class="btn btn-primary" name="save" value="Save">
                </div>
            </div>
        </div>
</form>
        @endsection