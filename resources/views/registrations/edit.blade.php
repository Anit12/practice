@extends('app')
@section('content')
<div class="container">
<a href="{{route('registrations.index')}}" class="btn btn-primary" style="margin-top:80px;">Back</a>
</div><br>
<form method="POST" action="{{route('registrations.edit','$item->id')}}" >
    @csrf
    @method('PUT')
<div class="container register-form">
            <div class="form">
              
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="name" />
                            </div><br>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Father Namer *" name="fname"  />
                            </div>
                        </div><br>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" name="password"  />
                            </div><br>
                           
                        </div>
                    </div><br>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>
        </div>
</form>
        @endsection