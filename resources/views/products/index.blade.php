@extends('app')
@section('content')
       <div class="row">
        <div class="col-md-12"><br>
        <a href="{{route('products.create')}}" class="btn btn-info">New Product</a><br>
        <table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
     
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $products)
    <tr>
      <td>{{$products->name}}</td>
      <td>{{$products->price}}</td>
      <td>{{$products->description}}</td>
      <td><a href="{{route('products.edit', $products->id)}}" class="btn btn-primary">Edit
     
      </td>
      <td> <form action="{{route('products.destroy', $products->id)}}" method="POST" >
        @method('DELETE')
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="retrun confirm('Are you sure;')"/>
                       </form>
</td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
    </div>
    @endsection