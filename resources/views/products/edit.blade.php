@extends('app')
@section('content')
 <div class="container">
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
     <form action="{{route('products.update', $products->id)}}" method="POST" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      Name :
      <br/>
      <input type="text" name="name" value="{{$products->name}}" class="form-control"/>
      <br/><br>
      <input type="text" name="price" value="{{$products->price}}" class="form-control"/>
      <br/><br>
      <input type="text" name="description" value="{{$products->description}}" class="form-control"/>
      <br/><br>
      <select name ="category_id" class="form-control">
         @foreach($categories as $category)
        <option value="{{$category->id}}" @if($category->id== $products->category_id) selected @endif>{{$category->name}}</option>
        @endforeach
  </select>
      <br/><br>
      Photo :
      <br/>
      <input type="file" class="form-control"/>
      <br/><br>
      <input type="submit" class="btn btn-primary" value="Update"/>
</form>
   </div>
   </div>
  </div>
    @endsection