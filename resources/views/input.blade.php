@extends('layouts.app')

@section('content')

<div class="">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Submit Permission</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="label-form">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Class</label>
                            <select name="class" class="form-control">
                                
                                <option value=""></option> 
                                
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Reason</label>
                            <textarea type="text" name="reason" class="form-control" rows="3"></textarea>
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
                            <button class="btn btn-success">Submit Permission</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection