@extends('app')
@section('content')
<link href="{{ asset('css/login.css')}}" rel="stylesheet" />
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown" style="margin-top:60px;">
  <div id="formContent">
  
    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>   
    @endsection
