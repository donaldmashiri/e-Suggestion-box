@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h4 class="fw-bold">Welcome {{ Auth::user()->regnum }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="user-info">
                            <div class="row">
                                <div class="col-4">User Type:</div>
                                <div class="col-8">{{ Auth::user()->user_type }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Reg. Number:</div>
                                <div class="col-8">{{ Auth::user()->regnum }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Name:</div>
                                <div class="col-8">{{ Auth::user()->name }}</div>
                            </div>
                            <div class="row">
                                <div class="col-4">Email:</div>
                                <div class="col-8">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
