@extends ('backend.layout.template')

@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage All Customer</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
      </div>

      <div class="br-pagebody">
	        <div class="row row-sm">
	          <div class="col-sm-6 col-xl-3">
	          </div>
	        </div>
	  </div>

	  <div class="br-pagebody">
	  	<div class="row row-sm">
	  		<div class="col-sm-12 col-xl-12">
	  			<!---------body content start------------->
	  			<div class="card bd-0 shadow-base">
	  				<div class="d-md-flex justify-content-between pd-25">
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Manage All Customer</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<div class="bd rounded table-responsive">
	  						<!-------table start------->

	  					<table class="table table-bordered table-striped">
						  <thead>
						    <tr>
						      <th scope="col">#SL</th>
						      <th scope="col">Name</th>
						      <th scope="col">Email</th>
						      <th scope="col">Password</th>
						       <th scope="col">Mobile</th>
						      <th scope="col">Address</th>
						      <th scope="col">City</th>
						       <th scope="col">State</th>
						      <th scope="col">Zip</th>
						       <th scope="col">Company</th>
						      <th scope="col">Gstir</th>
						      
						      <th scope="col">Status</th>
						      
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>

						  	@php $i=1; @endphp

                             @foreach( $customers as $customer)
                             
						    <tr>
						      <th scope="row">{{ $i++ }}</th>
						     
						      <td>{{ $customer->name}}</td>
						      <td>{{ $customer->email}}</td>
						       <td>{{ $customer->password}}</td>
						      <td>{{ $customer->mobile}}</td>
						      <td>{{ $customer->address}}</td>
						      <td>{{ $customer->city}}</td>
						       <td>{{ $customer->state}}</td>
						      <td>{{ $customer->zip}}</td>
						      <td>{{ $customer->company}}</td>
						      <td>{{ $customer->gstir}}</td>
						      
						      <td>
						      	@if($customer->status==1)
						      	<span class="badge badge-success">Yes</span>

						      	@else
						      	<span class="badge badge-warning">No</span>

						      	@endif
						      </td>
						      
						     
						      
						      <td>
						      	<div class="action-icons">
						      		<ul>
						      			<li><a href="{{ route('customer.edit', $customer->id )}}"><i class="fa fa-edit"></i></a></li>
						      			<li><a href="" data-toggle="modal" data-target="#deleteCustomer{{$customer->id}}"><i class="fa fa-trash"></i></a></li>
						      		</ul>
						      		<!---delete modal start------>

						      		<!-- Modal -->
									<div class="modal fade" id="deleteCustomer{{$customer->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">Do you want to delete this Coupon?</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									        <form action="{{ route('customer.destroy', $customer->id) }}" method="POST">
									@csrf
								<div class="action-icons">
									<ul>
									<li><input type="submit" name="delete" value="Delete" class="btn btn-danger"></li>
									<li><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></li>
									</ul>
									        		
								</div>
								 </form>
							      </div>
							      
							    </div>
							  </div>
							</div>

						      	
						      		<!------delete modal end----------->
						      		
						      	</div>
						      </td>
						   </tr>

						  

					
                           
						

                         
						    @endforeach
						    
						  </tbody>
						</table>


	  					<!-------table end--------->
	  						
	  					</div>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection