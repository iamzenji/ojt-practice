@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <h1>HELLO WORLD!</h1>
                    <h1>OJT TASK</h1>
                    <h1>Registration Form</h1>
                    <div class="mb-3">
                        <label for="fName" class="form-label">First Name</label>
                        <input type="email" class="form-control" id="fName" placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="email" class="form-control" id="lName" placeholder="Last Name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="Gender" class="form-label">Gender</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select gender</option>
                            <option value="option1">Male</option>
                            <option value="option2">Female</option>
                        </select>
                    </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        {{-- <input type="submit" value="Upload Image" name="submit"> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
