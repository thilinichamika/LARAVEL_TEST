@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">EDIT USERS</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{$distribute->name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>NIC</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nic" value="{{$distribute->nic}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Address</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="add" value="{{$distribute->add}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Mobile</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mobile" value="{{$distribute->mobile}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>E-Mail</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mail" value="{{$distribute->mail}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Gender</strong></label>
                            <div class="col-md-6">
                            <select name="gender" class="form-control" id="gender" value="{{$distribute->gender}}">
                                    <option selected disabled>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territoty</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tCode" value="{{$distribute->tCode}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>User Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="uName" value="{{$distribute->uName}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Password</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pass" value="{{$distribute->pass}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"></label>
                            <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection