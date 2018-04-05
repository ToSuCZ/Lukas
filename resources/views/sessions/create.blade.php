@extends('layouts.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Sign in</h1>

        <form method="post" action="/lukas/public/admin">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            @include ('layouts.error')

        </form>
    </div>
@endsection