@extends('layouts.layout')

@section('title','Login')

@section('contents')
<p>E-Mail Address <input type="email" name="email" value=""></p>
<p>Password <input type="password" name="pass"></p>
<input type="checkbox">Remember Me
<br>
<input type="submit" Value='Login'>
<a href="#">Forgot Your Password?</a>
@endsection