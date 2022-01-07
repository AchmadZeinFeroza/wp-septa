@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form class="form-horizontal mt-3 form-material" id="loginform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="">
                                <input class="form-control px-3" type="text" required placeholder="Username" name="username"> </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="">
                                <input class="form-control px-3" type="password" required placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group text-center mt-4 mb-3">
                            <div class="col-xs-12">
                                <button class="btn btn-primary d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
