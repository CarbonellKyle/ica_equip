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

                    Welcome, {{ Auth::user()->name }}
                </div>
            </div>

            <!-- Start of Home Content -->
            <div class="mt-5">
                 <h3 style="color: #EF3B2D">User Information:</h3>
                 <p><strong style="color: #EF3B2D">Username:</strong> {{ Auth::user()->name }}</p>
                 <p><strong style="color: #EF3B2D">Email: </strong>{{ Auth::user()->email }}</p>
                 <p><strong style="color: #EF3B2D">Account Role: </strong>User</p>
            </div>

        </div>
    </div>
</div>
@endsection