@extends('layouts.layout')

@section('title','Register')

@section('contents')
<p>Name <input type="text" name="name" value=""></p>
<p>E-Mail Address <input type="email" name="email" value=""></p>
<p>Password <input type="password" name="pass"></p>
<p>Confirm Password <input type="password" name="confirmpass"></p>
<input type="submit" Value='Register'>
@endsection