@extends('layout')
@section('content')
        
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Login Time</th>
            </tr>
       <!--  @foreach ($users as $user) -->
        <tr>
            <!-- <td>{{ ++$i }}</td> -->
            <td>{{ Auth::user()->name }}</td>
            <td>{{ Auth::user()->email }}</td>   
        </tr>
       <!--  @endforeach -->
        </table>
        <!-- {!! $users->render() !!} -->
    @endsection