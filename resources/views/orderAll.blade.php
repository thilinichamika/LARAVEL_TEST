@extends('layouts.master')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">PURCHASE ORDER VIEW</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                        <div class="card-header">
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
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>PO No</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>From</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-md-4 col-form-label text-md-end"><strong>To</strong></label>
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
                                                <th>REGION</th>
                                                <th>TERRITORY</th>
                                                <th>DISTRIBUTOR</th>
                                                <th>PO NUMBER</th>
                                                <th>DATE</th>
                                                <th>TIME</th>
                                                <th>TOTAL AMOUNT</th>
                                                <th>VIEW PO</th>
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
                                                <td></td>											
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
</div>
@endsection