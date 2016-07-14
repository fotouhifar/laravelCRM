
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
                    <table id="users_list" class="table table-bordered" width="100%">
                        <thead>
                            <tr>
                                <td>name</td>
                                <td>email</td>
                                <td>Active</td>
                                <td>Assigned to id</td>
                                <td>id</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}} </td>
                                <td>{{$user->email}} </td>
                                <td>{{$user->status}} </td>
                                <td>{{$user->assignedto}},
                                    {{$users[5]->id}}
                               

                                </td>
                                <td>{{$user->id}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>name</td>
                                <td>email</td>
                                <td>Active</td>
                                <td>Assigned to id</td>
                                <td>id</td>
                            </tr>

                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
