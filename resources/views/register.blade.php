@extends('layout')

@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="successMessage"></div>
        <div class="panel panel-primary">
            <div class="panel-heading"><h2>Register to get Started </h2></div>
            <div class="panel-body">
                <form action="/register" method="post" id="registrationForm">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

                    <div class="form-group">
                        <label class="control-label" for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email*</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="phone_number">Phone Number*</label>
                        <input type="number" class="form-control" id="phone_number" name="phone_number" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password">Password*</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group">
                        <select name="country" class="form-control">
                            @foreach($countries as $country)
                                <option value="{{ $country }}">{{ $country }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Register">
                    </div>
                </form>
            </div>
        </div>

    </div>

@stop