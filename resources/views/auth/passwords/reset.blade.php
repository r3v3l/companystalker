@extends('layouts.app')

@section('content')

    <div class="panel panel-sign">
        <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Reset Password</h2>
        </div>
        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

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

                <div class="form-group mb-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="clearfix">
                        <label class="pull-left">Password</label>
                    </div>
                    <div class="input-group input-group-icon">
                        <input name="password" type="password" class="form-control input-lg" />
                        <span class="input-group-addon">
                            <span class="icon icon-lg">
                                <i class="fa fa-lock"></i>
                            </span>
                        </span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="alert alert-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group mb-lg {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <div class="clearfix">
                        <label class="pull-left">Password confirmation</label>
                    </div>
                    <div class="input-group input-group-icon">
                        <input name="password_confirmation" type="password" class="form-control input-lg" />
                        <span class="input-group-addon">
                            <span class="icon icon-lg">
                                <i class="fa fa-unlock"></i>
                            </span>
                        </span>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <span class="alert alert-danger">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary hidden-xs">Reset Password</button>
                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Reset Password</button>
                    </div>
                </div>

                <p class="text-center">Don't have an account yet? <a href="{{ route('register')  }}">Sign Up!</a></p>

            </form>
        </div>
    </div>
@endsection
