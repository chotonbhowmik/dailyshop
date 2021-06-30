@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Coupon Information</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Coupon Information</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('coupon.update', $coupon->id) }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>Coupon Name</label>
	  							<input type="text" name="title" class="form-control" value="{{ $coupon->title}}">
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Coupon Code</label>
	  							<input type="text" name="code" class="form-control" value="{{ $coupon->code}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Amount</label>
	  							<input type="number" name="value" class="form-control" value="{{ $coupon->value}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Type</label>
	  							<select class="form-control" name="type">
	  								
	  								<option value="0"@if ($coupon->type==0)selected @endif>value</option>
	  								<option value="1"@if ($coupon->type==1)selected @endif>per</option>
	  								
	  							</select>
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Minimum Order Amount</label>
	  							<input type="number" name="min_order_amt" class="form-control" value="{{ $coupon->min_order_amt}}">
	  							
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Is One Time</label>
	  							<select class="form-control" name="is_one_time">
	  								
	  								<option value="0"@if ($coupon->is_one_time==0)selected @endif>No</option>
	  								<option value="1"@if ($coupon->status==1)selected @endif>Yes</option>
	  								
	  							</select>
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Status</label>
	  							<select class="form-control" name="status">
	  								<option value="0">Please Select The  Satus</option>
	  								<option value="1"@if ($coupon->status==1)selected @endif>Active</option>
	  								<option value="0"@if ($coupon->status==0)selected @endif>Inactive</option>
	  								
	  							</select>
	  							
	  						</div>



	  						<div class="form-group">
	  							<input type="submit" name="updateCoupon" class="btn btn-primary" value="Save Change">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

