@extends('auth/base')

@section('content')

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if(Session::has('login_error'))
                <div class="alert alert-danger">
                    {{ Session::get('login_error') }}
                </div>
            @endif

            <form class="login-form" action="{{ route('auth.login') }}" method="post">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <div class="input-group">
                        <div class="input-group-addon">@</div>
                        <input id="email" class="form-control" type="email" name="email" value="{{ Session::get('email') }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Login">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>

@endsection
