@extends('master')
@section('content')
    <div class="container">
        <div class="offset-3 py-5">
            <div class="row">
                <div class="col-8">
                    <form action="login" method="post">
                        <div class="form-group">
                            @csrf
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
{{--                        <div class="form-group form-check">--}}
{{--                            <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                            <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                        </div>--}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
