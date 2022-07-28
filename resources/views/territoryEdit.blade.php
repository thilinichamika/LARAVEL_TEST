@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">EDIT TERRITORY</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="index.html">
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Zone</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Region</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territory Code</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territory Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
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