@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Users Data
        </div>
        <div class="card-body">
            <form method="post" >
                <div class="form-group">
                    @csrf
                    <label for="country_name">User Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="cases">User Surname :</label>
                    <input type="text" class="form-control" name="price"/>
                </div>
                <button type="submit" class="btn btn-primary">Add user</button>
            </form>
        </div>
    </div>
@endsection
