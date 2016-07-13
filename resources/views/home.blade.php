@extends('layouts.app')

@section('content')

<div class="panel-heading">Dashboard</div>

<div class="panel-body">
    You are logged in!
    {{(Auth::user()->remote_key)}}

</div>

@endsection
