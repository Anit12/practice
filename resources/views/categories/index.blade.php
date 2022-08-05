@extends('app')
@section('content')
       <div class="row">
        <div class="col-md-12"><br>
        <a href="{{route('categories.create')}}" class="btn btn-info">New Category</a><br>
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
      <td><a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit
     
      </td>
      <td> <form action="{{route('categories.destroy', $category->id)}}" method="POST" >
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