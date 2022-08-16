@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('OTP Login') }}</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert"> {{session('success')}} 
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger" role="alert"> {{session('error')}} 
                    </div>
                    @endif

                    <form method="POST" action="{{ route('otp.getlogin') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{$user_id}}" />
                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('OTP') }}</label>

                            <div class="col-md-6">
                                <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus placeholder="Enter OTP">

                                @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection