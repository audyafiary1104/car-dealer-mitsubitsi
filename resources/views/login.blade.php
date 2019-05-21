@extends('layouts.app_login')
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
<p></p>
    <!-- Icon -->
    <div class="fadeIn first">
    </div>

    <!-- Login Form -->
    <form method="post"action="{{url('post_login')}}">
    {{ csrf_field() }}
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="nik">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
  </div>
</div>