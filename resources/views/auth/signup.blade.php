@extends('layouts.auth')

@section('content')
<div class="peers ai-s fxw-nw h-100vh">
    <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image: url("assets/static/images/bg.jpg")'>
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
                <img class="pos-a centerXY" src="assets/static/images/logo.png" alt="">
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
        <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
        <form action="{{ route('auth.register.post') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.first_name')</label>
                <input type="text" class="form-control"  name="first_name">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.last_name')</label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.phone')</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.phone')</label>

                <select name="role_id" class="form-control">
                    @foreach($roles as $roleId => $name)
                        <option value="{{ $roleId }}">{{ $name }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.email_address')</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.password')</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">@lang('auth.confirm_password')</label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">@lang('auth.register')</button>
            </div>
        </form>
    </div>
</div>
@endsection
