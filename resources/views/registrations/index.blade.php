@extends('app')
@section('content')

<div class="container" style="margin-top:80px;">
@if(session('status'))
<h6 class="alert alert-warning">{{session('status')}}</h6>
@endif
<a href="{{route('registrations.create')}}" class="btn btn-primary " style="float:right;">Add visitor</a><br><br>
</div>
<div class="container">
<h3>Visitor List</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">father name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registrations as $registrations)
    <tr>
  
      <td>{{$registrations->id}}</td>
      <td>{{$registrations->name}}</td>
      <td>{{$registrations->fname}}</td>
     <td>
        <a href="{{route('registrations.edit',$registrations->id)}}">
          <button class="btn btn-primary" style="font-color:white;">Edit</a>
       

     </td>
     <td> <form action="{{route('registrations.destroy', $registrations->id)}}" method="POST" >
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
@endsection