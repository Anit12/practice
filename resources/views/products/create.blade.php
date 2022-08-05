@extends('app')
@section('content')
 <div class="container">
  
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


 <!-- Validation
 
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12">
    @if($errors->any())
 @foreach($errors->all() as $err)
 <li>{{$err}}</li>
 @endforeach
 @endif
 -->

     <form action="{{route('products.store')}}" method="POST" enctype="multipart/data-form">
 
      
               
      @csrf
      Name :
      <br/>
      <input type="text" name="name" value="{{old('name')}}" class="form-control"/>
      <br/><br>
      Price :
      <br/>
      <input type="text" name="price" value="{{old('price')}}" class="form-control"/>
      <br/><br>
      Description :
      <br/>
      <input type="text" name="description" value="{{old('description')}}" class="form-control"/>
      <br/><br>
      Category Id :
      <br/>
      <select name ="category_id" class="form-control">
         @foreach($categories as $category)
        <option value="{{$category->id}}"  @if($category->id== old('category_id')) selected @endif>{{$category->name}}</option>
        @endforeach
  </select>
      <br/><br>
      Photo :
      <br/>
      <input type="file" name="photo" class="form-control"/>
      <br/><br>
      <input type="submit" class="btn btn-primary" value="Save"/>
</form>
   </div>
   </div>
  </div>
    @endsection