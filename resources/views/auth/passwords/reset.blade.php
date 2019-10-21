@extends('layouts.default')
@section('title','修改密码')
@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h5>更新密码</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('password.update') }}" method="post">
          @csrf
          <input type="hidden" name="token" value="{{ $token }}">
          <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email地址</label>
            <div class="col-md-6">
              <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is_invalid' : '' }}" value="{{ $email ?? old('email') }}" required autofocus>
              @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">密码</label>
            <div class="col-md-6">
              <input type="password" id="password" class="form-control {{ $errors->has('password')? 'is-invalid':''}}" name="password" required>
              @if($errors->has('password'))
                <strong>{{ $errors->first('password') }}</strong>
              @endif
            </div>
          </div>

          <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">确认密码</label>
            <div class="col-md-6">
              <input type="password" id="password-confirm" name="password_confirmation" class="form-control" required>
            </div>
          </div>

          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                重置密码
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
