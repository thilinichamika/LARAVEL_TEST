@extends('layouts.master')

@section('content')
<div class="container-fluid"> 
				
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item">ALL USERS</li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header ">
                                <div class="col-md-2">
                                    <a class="btn btn-primary btn-block"  href="{{route('userAdd')}}">ADD NEW USER</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>NIC</th>
                                                <th>Address</th>
                                                <th>Mobile</th>
                                                <th>E-mail</th>
                                                <th>Gender</th>
                                                <th>Territory</th>
                                                <th>User Name</th>
                                                <th>Password</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($distributes as $distribute)
                                            <tr> 
                                                <td>{{$distribute->name}}</td>
                                                <td>{{$distribute->nic}}</td>
                                                <td>{{$distribute->add}}</td>
                                                <td>{{$distribute->mobile}}</td>
                                                <td>{{$distribute->mail}}</td>
                                                <td>{{$distribute->gender}}</td>
                                                <td>{{$distribute->tCode}}</td>
                                                <td>{{$distribute->uName}}</td>
                                                <th>{{$distribute->pass}}</th>
                                                <td>
                                                    <form action="{{route('udestroy',$distribute->id)}}" method="POST">
													<div class="d-flex">
														<a href="{{route('userEdit',$distribute->id)}}"" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
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