@extends('homeUser')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">ADD INDIVIDUAL PURCHASE ORDER</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Zone</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Region</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Territory</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Distributor</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Date</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>PO No</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>Remark</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>SKU CODE</th>
                                                <th>SKUNAME</th>
                                                <th>UNIT PRICE</th>
                                                <th>AVB QTY</th>
                                                <th>ENTER QTY</th>
                                                <th>UNITS</th>
                                                <th>TOTAL PRICE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>											
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="col-md-2">
                                    <a class="btn btn-primary btn-block"  href="{{route('orderAdd')}}">ADD PO</a>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
</div>
@endsection