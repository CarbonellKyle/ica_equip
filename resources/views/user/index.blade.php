@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as User!') }}
                </div>
            </div>

            <!-- Start of Home Content -->
            <div class="mt-5 text-center">
                 <h3 style="color: #EF3B2D">Welcome User!</h3>
                 <p>This is the User Page.</p>
            </div>

        </div>
    </div>
</div>
@endsection