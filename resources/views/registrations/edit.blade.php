@extends('app')
@section('content')
<div class="container">
<a href="{{url('visitor_list')}}" class="btn btn-primary" style="margin-top:80px;">Back</a>
</div><br>
<form method="post" action="{{url('update_visitor/'.$registrations->id)}}" enctype="multipart/form-data" >
@method('PUT')
 @csrf
<div class="container register-form">
            <div class="form">
          
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name" value="{{$registrations->name}}"/>
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Father Namer *" name="fname"  value="{{$registrations->fname}}" />
                            </div>
                        </div><br>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="password" value="{{$registrations->password}}" />
                            </div><br>
                           
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary" name="submit" value="Update">Submit</button>
                </div>
            </div>
        </div>
</form>
        @endsection