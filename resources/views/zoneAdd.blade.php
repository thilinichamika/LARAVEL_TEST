@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">ADD ZONE</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-8">
                <div class="auth-form ">
                    <form action="{{route('zstore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"><strong>Zone Code</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="zCode" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"><strong>Zone Long Description</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="zLD" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"><strong>Short Description</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="zSD" class="form-control">
                            </div>
                        </div>                 
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end"></label>
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