@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"> Sign In</div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label class="label-form">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-form">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-success">Daftar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection