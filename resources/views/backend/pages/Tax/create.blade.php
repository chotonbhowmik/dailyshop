@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New tax</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New tax</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('tax.store') }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>tax Value</label>
	  							<input type="text" name="tax_value" class="form-control">
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Tax Description</label>
	  							<input type="text" name="tax_desc" class="form-control">
	  							
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
	  							<input type="submit" name="addtax" class="btn btn-primary" value="Add New tax">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

