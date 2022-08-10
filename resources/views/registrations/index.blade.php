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
    @foreach($registrations as $item)
    <tr>
  
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->fname}}</td>
     <td>
        <button class="btn btn-primary">Edit
        <button class="btn btn-primary">Delete

     </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection