@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Customer Information</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Customer Information</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>Name</label>
	  							<input type="text" name="name" class="form-control" value="{{ $customer->name}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Email</label>
	  							<input type="text" name="email" class="form-control" value="{{ $customer->email}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Password</label>
	  							<input type="text" name="password" class="form-control" value="{{ $customer->password}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Mobile</label>
	  							<input type="text" name="mobile" class="form-control" value="{{ $customer->mobile}}">
	  							
	  						</div>


	  						<div class="form-group">
	  							<label>Address</label>
	  							<input type="text" name="address" class="form-control" value="{{ $customer->address}}">
	  							
	  						</div>
	  						
	  						<div class="form-group">
	  							<label>City</label>
	  							<input type="text" name="city" class="form-control" value="{{ $customer->city}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>State</label>
	  							<input type="text" name="state" class="form-control" value="{{ $customer->state}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Zip</label>
	  							<input type="text" name="zip" class="form-control" value="{{ $customer->zip}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Company</label>
	  							<input type="text" name="company" class="form-control" value="{{ $customer->company}}">
	  							
	  						</div>


	  						<div class="form-group">
	  							<label>Gstir</label>
	  							<input type="text" name="gstir" class="form-control" value="{{ $customer->gstir}}">
	  							
	  						</div>
	  						
	  						<div class="form-group">
	  							<label>Status</label>
	  							<select class="form-control" name="status">
	  								<option value="0">Please Select The  Satus</option>
	  								<option value="1"@if ($customer->status==1)selected @endif>Active</option>
	  								<option value="0"@if ($customer->status==0)selected @endif>Inactive</option>
	  								
	  							</select>
	  							
	  						</div>



	  						<div class="form-group">
	  							<input type="submit" name="updatecustomer" class="btn btn-primary" value="Save Change">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

