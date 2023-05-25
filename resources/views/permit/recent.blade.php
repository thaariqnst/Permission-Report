@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Your Recent Submission</div>
                <div class="card-body">
                    <div class="row row-cols-2">

                @foreach($permitletter as $data)
                        <div class="mb-4">
                            <div class="card">
                                <div class="card-header bg-white">
                                    <div class="fw-bold">{{$data->user_id}}</div>
                                    <div class="fw-italic">{{$data->class_id}}</div>
                                </div>
                                <div class="card-body p-4 d-flex">
                                    <div class="col-md-6 gap-2">
                                        <div class="container">
                                            <div class="fw-light">permit type</div>
                                            <div>{{$data->permission_type}}</div>
                                        </div>
                                        <div class="container">
                                            <div class="fw-light">description</div>
                                            <div class="">{{$data->desc}}</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="container">
                                            <div class="fw-light">start date</div>
                                            <div>{{$data->start_date}}</div>
                                        </div>
                                        <div class="container">
                                            <div class="fw-light">end date</div>
                                            <div>{{$data->end_date}}</div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer bg-white">
                                    <div class="fw-light">PIC Name</div>
                                    <div class="fw-bold">{{$data->pic_name}}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>












                </div>
            </div>
        </div>
    </div>
</div>
@endsection