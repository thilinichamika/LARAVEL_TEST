@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">ADD USERS</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="{{route('ustore')}}" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div> 
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>NIC</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="nic" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Address</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="add" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Mobile</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="mobile" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>E-Mail</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="mail" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Gender</strong></label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control" id="gender">
                                    <option selected disabled>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territoty</strong></label>
                            <div class="col-md-6">
                                <select name="tCode" class="form-control" id="tCode">
                                    <option selected disabled>Select</option>
                                    @foreach ($territory as $territorys)
                                        <option value="{{$territorys->tCode}}">{{$territorys->tCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>User Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="uName" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Password</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="pass" class="form-control">
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