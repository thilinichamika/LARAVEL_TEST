@extends('layouts.master')

@section('content')
<div class="container-fluid">     
    <div class="row page-titles">
		<ol class="breadcrumb">
            <li class="breadcrumb-item">EDIT SKU</li>
		</ol>
    </div>
    <!-- row -->       
    <div class="row ">
        <div class="card justify-content-center align-items-center">
            <div class="col-xl-6">
                <div class="auth-form ">
                    <form action="{{route('pupdate',$product->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row mb-3"> 
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU ID</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sku_id" value="{{$product->sku_id}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU Code</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sku_code" value="{{$product->sku_code}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>SKU Name</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="sku_name" value="{{$product->sku_name}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>MRP</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="mrp" value="{{$product->mrp}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Distributor Price</strong></label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="price" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Weight/Volume</strong></label>
                            <div class="col-md-3">
                                <input type="text" name="weight" class="form-control" value="{{$product->weight}}">
                            </div>
                            <div class="col-md-3">
                                <select name="volume" class="form-control" id="volume" value="{{$product->volume}}">
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