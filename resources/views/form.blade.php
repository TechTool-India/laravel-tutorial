@extends('app')

@section('content')

    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h3 class="text-center">Create User</h3>
        <p class="text-center"><em>Register Here</em></p>

        <div class="row">
            <form action="{{ route('form.store') }}" method="post">
                @csrf
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Full Name" type="text" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="gender" name="gender" placeholder="Gender" type="text">
                            @error('gender')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <button class="btn pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection