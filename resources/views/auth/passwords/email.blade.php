@extends('layouts.app')

@section('content')
    <div class="panel panel-sign">
        <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Reset Password</h2>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group mb-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <div class="input-group input-group-icon">
                        <input name="username" type="text" class="form-control input-lg" />
                        <span class="input-group-addon">
							<span class="icon icon-lg">
								<i class="fa fa-envelope"></i>
                            </span>
                        </span>
                    </div>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary hidden-xs">Reset Password</button>
                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset password</button>
                    </div>
                </div>

                <p class="text-center">Don't have an account yet? <a href="{{ route('register')  }}">Sign Up!</a></p>

            </form>
        </div>
    </div>
@endsection
