@extends('layouts.app')

@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Submit Permission</div>
                <div class="card-body">
                    <form action="{{route('permit.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="label-form">Name</label>
                            <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden class="form-control">
                            <input type="text" value="{{Auth::user()->name}}" disable class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Class</label>
                            <select name="class_id" class="form-select">
                                <option selected>Pilih Kelas</option>
                                @foreach($kelas as $row)
                                <option value="{{$row->id}}">{{$row->class_name}}</option> 
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Type</label>
                            <select name="permission_type" class="form-select">
                                <option selected>Izin Karena</option>
                                <option value="health">Health</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Reason</label>
                            <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Start Date</label>
                            <input type="date" name="start_date" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">End Date</label>
                            <input type="date" name="end_date" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">PIC Name</label>
                            <select name="pic_name" class="form-control">
                                @foreach($user as $row)
                                @if($row->level == 'teacher')

                                <option value="{{$row->name}}">{{$row->name}}</option>
                                @endif

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-success">Submit Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
