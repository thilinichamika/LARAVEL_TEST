@extends('layouts.master')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">ALL ZONES</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="col-md-2">
                                    <a class="btn btn-primary btn-block"  href="{{route('zoneAdd')}}">ADD NEW ZONE</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Zone Code</th>
                                                <th>Zone Long Description</th>
                                                <th>Short Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead> 
                                        <tbody>
                                        @foreach($zones as $zone)
                                            <tr>
                                                <td>{{$zone->zCode}}</td>
                                                <td>{{$zone->zLD}}</td>
                                                <td>{{$zone->zSD}}</td>
                                                <td>
                                                    <form action="{{route('destroy',$zone->id)}}" method="POST">
													<div class="d-flex">
														<a href="{{route('zoneEdit',$zone->id)}}"" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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
                {!! $zones->links()!!}
</div>
@endsection