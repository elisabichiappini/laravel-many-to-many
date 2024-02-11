@extends('layouts.admin')

@section('header_main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Benvenuto in Area Admin, accesso consentito.') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
