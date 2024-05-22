@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="fw-bolder">
                            {{ __('Users') }}
                        </h5>
                    </div>
                    <div class="card-body">
@include('layouts.messages')
                        <table class="table table-sm table-bordered table-striped table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">User Type</th>
                                <th scope="col">Regnum</th>
                                <th scope="col">Full Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Added on</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $data)
                                <tr>
                                    <td> {{$data->user_type}} </td>
                                    <td> {{$data->regnum}} </td>
                                    <td> {{$data->name}} </td>
                                    <td> {{$data->email}} </td>
                                    <td> {{$data->created_at}} </td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
