@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>User Name</td>
                <td>User Surname</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td><a href="{{ route('$user.edit', $user->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('user.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
