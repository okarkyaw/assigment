@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        You are not loggin
                    @endguest

                    @auth
                        You are logged in! {{ auth()->user()->name}}
                    @else
                        None login user
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
