@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">ADD TERRITORY</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="{{route('tstore')}}" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Zone</strong></label>
                            <div class="col-md-6">
                                <select name="zCode" class="form-control" id="zCode">
                                    <option selected disabled>Zone Code</option>
                                    @foreach ($zone as $zones)
                                        <option value="{{$zones->zCode}}">{{$zones->zCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Region</strong></label>
                            <div class="col-md-6">
                                <select name="rCode" class="form-control" id="rCode">
                                    <option selected disabled>Region Code</option>
                                    @foreach ($region as $regions)
                                        <option value="{{$regions->rCode}}">{{$regions->rCode}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territory Code</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tCode">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territory Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tName">
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