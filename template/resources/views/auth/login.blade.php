@extends('layout.master-mini')
@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" style="background-image: url({{ url('assets/images/auth/login_1.jpg') }}); background-size: cover;">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auto-form-wrapper">
        <form method="POST" action="{{ route('login') }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail</label>

                <div class="input-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>
            <div class="input-group">
                <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block"> <i class="mdi mdi-check-circle-outline"></i>
                        <strong>{{ $errors->first('password') }}</strong>
                    <i class="mdi mdi-check-circle-outline"></i>   
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Ingresar
                </button>
            </div>
        </div>  
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
@extends('layout.master-mini')

