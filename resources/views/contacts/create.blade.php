@extends('base')

@section('main')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1>Join our platform or find out more information!</h1>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br/>
                    @endif

                    <form method="POST" action="{{ route('contacts.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" name="firstName">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" name="lastName">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company">Company:</label>
                                    <input type="text" class="form-control" name="company">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jobTitle">Job Title:</label>
                            <input type="text" class="form-control" name="jobTitle">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" class="form-control" name="country">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
