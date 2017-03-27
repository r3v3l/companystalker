@extends('auth.authForm')

@section('content')
    <div class="panel panel-sign">
        <div class="panel-title-sign mt-xl text-right">
            <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group mb-lg {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Username</label>
                    <div class="input-group input-group-icon">
                        <input name="name" type="text" class="form-control input-lg" />
                        <span class="input-group-addon">
							<span class="icon icon-lg">
								<i class="fa fa-user"></i>
                            </span>
                        </span>
                    </div>
                    @if ($errors->has('name'))
                        <div class="alert alert-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group mb-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email</label>
                    <div class="input-group input-group-icon">
                        <input name="email" type="email" class="form-control input-lg" />
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
                    <div class="col-sm-8">
                        <div class="checkbox-custom checkbox-default">
                            <input id="termOfUse" name="termOfUse" type="checkbox" required/>
                            <label for="termOfUse">Accept term of use</label>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
                    </div>
                </div>

                <p class="text-center">Do you have an account? <a href="{{ route('login')  }}">Sign In!</a></p>

            </form>
        </div>
    </div>

@endsection
