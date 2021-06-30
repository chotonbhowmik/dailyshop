@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New Coupon</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New Category</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('coupon.store') }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>Coupon Name</label>
	  							<input type="text" name="title" class="form-control">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Coupon Code</label>
	  							<input type="text" name="code" class="form-control">
	  							
	  							
	  						</div>
	  						
	  						<div class="form-group">
	  							<label>Amount</label>
	  							<input type="number" name="value" class="form-control">
	  							
	  							
	  						</div>



	  						<div class="form-group">
			  							<label>Type</label>
			  							<select class="form-control" name="type">
			  								
			  								<option value="0">value</option>
			  								<option value="1">per</option>
			  								
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
	  							<label>Minimum Order Amount</label>
	  							<input type="number" name="min_order_amt" class="form-control">
	  							
	  							
	  						</div>

	  						<div class="form-group">
			  							<label>Is One Time</label>
			  							<select class="form-control" name="is_one_time">
			  								<option value="0">No</option>
			  								<option value="1">Yes</option>
			  								
			  								
			  							</select>
			  							
			  						</div>


	  						<div class="form-group">
			  							<label>Status</label>
			  							<select class="form-control" name="status">
			  								<option value="0">Please Select The  Satus</option>
			  								<option value="1">Active</option>
			  								<option value="0">Inactive</option>
			  								
			  							</select>
			  							
			  						</div>
	  						
	  						

	  						<div class="form-group">
	  							<input type="submit" name="addCoupon" class="btn btn-primary" value="Add New Coupon">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

