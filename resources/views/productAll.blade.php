@extends('layouts.master')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">ALL PRODUCTS</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="col-md-2">
                                    <a class="btn btn-primary btn-block"  href="{{route('productAdd')}}">ADD NEW PRODUCT</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>SKU ID</th>
                                                <th>SKU Code</th>
                                                <th>SKU Name</th>
                                                <th>MRP</th>
                                                <th>Distributor Price</th>
                                                <th>Weight</th>
                                                <th>Volume</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                            <tr> 
                                                <td>{{$product->sku_id}}</td>
                                                <td>{{$product->sku_code}}</td>
                                                <td>{{$product->sku_name}}</td>
                                                <td>{{$product->mrp}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->weight}}</td>
                                                <td>{{$product->volume}}</td>
                                                <td>
                                                <form action="{{route('destroy',$product->id)}}" method="POST">
													<div class="d-flex">
														<a href="{{route('productEdit',$product->id)}}"" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														@csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></button>
													</div>	
                                                    </form>											
												</td>												
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
</div>
@endsection