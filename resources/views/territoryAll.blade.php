@extends('layouts.master')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">ALL TERRITORYIES</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="col-md-2">
                                    <a class="btn btn-primary btn-block"  href="{{route('territoryAdd')}}">ADD NEW TERRITORY</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Zone Code</th>
                                                <th>Region Code</th>
                                                <th>Territory Code</th>
                                                <th>Territory Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($territorys as $territory)
                                            <tr>
                                                <td>{{$territory->zCode}}</td>
                                                <td>{{$territory->rCode}}</td>
                                                <td>{{$territory->tCode}}</td>
                                                <td>{{$territory->tName}}</td>
                                                <td>
                                                    <form action="{{route('tdestroy',$territory->id)}}" method="POST">
													<div class="d-flex">
														<a href="{{route('territoryEdit',$territory->id)}}"" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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