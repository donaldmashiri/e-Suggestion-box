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

            @if(Auth::user()->user_type === 'admin')
                <div class="card mt-3">
                    <div class="card-header">Dashboard reports</div>
                    <div class="card-body">
                        <table class="w-full table table-striped">
                            <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 text-left">Description</th>
                                <th class="py-3 px-4 text-left">Count</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-star text-info"></i> Users Total</td>
                                <td class="py-3 px-4">{{ $usersCount }}</td>
                            </tr>
                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-clipboard-list text-info"></i> Suggestions Total</td>
                                <td class="py-3 px-4">{{ $suggestionCount }}</td>
                            </tr>
                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-hourglass-half text-info"></i> Pending Suggestions</td>
                                <td class="py-3 px-4">{{ $suggestionPending }}</td>
                            </tr>
                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-check-circle text-info"></i> Reviewed Suggestions</td>
                                <td class="py-3 px-4">{{ $suggestionReviewed }}</td>
                            </tr>
                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-check-double text-info"></i> Implemented Suggestions</td>
                                <td class="py-3 px-4">{{ $suggestionImplemented }}</td>
                            </tr>

                            <tr class="border-t text-sm">
                                <td class="py-3 px-4"><i class="fas fa-check-double text-info"></i> Feedbacks</td>
                                <td class="py-3 px-4">{{ $feedbackCount }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
