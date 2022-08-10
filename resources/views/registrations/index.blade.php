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
</div>
@endsection