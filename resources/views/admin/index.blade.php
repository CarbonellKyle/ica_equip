@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Admin!') }}
                </div>
            </div>

            <!-- Start of Home Content -->
            <div class="mt-5 text-center">
                 <h3 style="color: #EF3B2D">Welcome Admin!</h3>
                 <p>This is the Admin Panel.</p>
            </div>

        </div>
    </div>
</div>
@endsection