@extends('app')

@section('content')

    <!-- Container (Contact Section) -->
    <div id="contact" class="container">
        <h3 class="text-center">Create User</h3>
        <p class="text-center"><em>Register Here</em></p>

        <div class="row">
            
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Full Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="gender" name="gender" placeholder="Gender" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="password" name="password" placeholder="Password" type="password" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection