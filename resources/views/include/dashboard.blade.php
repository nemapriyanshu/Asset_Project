@extends('include.master')

@section('contents')
<div class="display-1">WelCome!   {{{ Auth::user()->name}}}</div>

@endsection