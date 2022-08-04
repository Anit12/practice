@extends('app')
@section('content')
       <div class="row">
        <div class="col-md-12">
        <table class="table">
  <thead>
    <tr>
      <th>Name</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <td>{{$category->name}}</td>
      <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</td>
    </tr>
  @endforeach
  </tbody>
</table>
    </div>
    </div>
    @endsection