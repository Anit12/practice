@extends('app')
@section('content')
 <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
     <form action="{{route('categories.update', $categories->id)}}" method="POST">
      @method('PUT')
      @csrf
      Name :
      <br/>
      <input type="text" name="name" value="{{$categories->name}}" class="form-control"/>
      <br/><br>
      <input type="submit" class="btn btn-primary" value="Update"/>
</form>
   </div>
   </div>
  </div>
    @endsection