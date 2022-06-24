@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Game Data
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('user.update', $user->id ) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">User Name:</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"/>
                </div>
                <div class="form-group">
                    <label for="cases">User Surname :</label>
                    <input type="text" class="form-control" name="price" value="{{ $user->surname }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Data</button>
            </form>
        </div>
    </div>
@endsection
