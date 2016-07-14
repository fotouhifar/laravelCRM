@extends('layouts.app')

@section('content')
<div class="fullcontainer">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

            </div>
        </div>
    </div>    
</div><div class="fullcontainer">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users List</div>
                <div class="panel-body">          
                    @foreach($users as $user)
                    {{$user->name}}{{$user->group_id}}<br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
