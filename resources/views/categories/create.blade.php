@extends('app')
@section('content')
 <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
     <form action="{{route('categories.store')}}" method="POST">
 
      @csrf
      Name :
      <br/>
      <input type="text" name="name" value="" class="form-control"/>
      <br/><br>
      <input type="submit" class="btn btn-primary" value="Save"/>
</form>
   </div>
   </div>
  </div>
    @endsection