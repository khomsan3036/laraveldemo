@extends('layouts.master_template')
@section('title')Login 
@endsection

@section('content')
<body>
    <div class="container mt-3 d-flex align-items-center" style="height: 45vh;">
        <form class="col-md-8 offset-2 card">
            <p class="text-center"><i class="fas fa-user-circle fa-7x mt-2"></i></p>
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">User name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Please input email">
                </div>
            </div>
           
            <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Please input password">
                </div>
            </div>
           
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-8">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
@endsection