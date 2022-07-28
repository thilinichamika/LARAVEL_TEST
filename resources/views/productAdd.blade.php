@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">ADD SKU</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="{{route('pstore')}}" method="POST">
                    @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU ID</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="sku_id"class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU Code</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="sku_code" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="sku_name" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>MRP</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="mrp" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Distributor Price</strong></label>
                            <div class="col-md-6">
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Weight/Volume</strong></label>
                            <div class="col-md-3">
                                <input type="text" name="weight" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <select name="volume" class="form-control" id="volume">
                                    <option value="kg">kg</option>
                                    <option value="g">g</option>
                                </select>
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