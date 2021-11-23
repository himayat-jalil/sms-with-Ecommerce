@extends('layouts.student-app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ Session('status') }}
                            </div>
                        @endif
                        @if (Session()->has('message'))

                            <h1>{{ Session()->get('message') }}</h1>
                        @endif

                        {{ __('You are logged in as a student') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
