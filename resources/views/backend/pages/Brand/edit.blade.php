@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Brand Information</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Brand Information</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>Brand Name</label>
	  							<input type="text" name="name" class="form-control" value="{{ $brand->name}}">
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Brand Description</label>
	  							<textarea class="form-control" name="description" rows="3">{{ $brand->description}}</textarea>
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Is Featured</label>
	  							<select class="form-control" name="is_featured">
	  								<option value="0">Please Select The Featured Satus</option>
	  								<option value="1" @if ($brand->is_featured ==1 )selected @endif</option>Yes Featued</option>
	  								<option value="0" @if ($brand->is_featured==0)selected @endif>Not Featured</option>
	  								
	  							</select>
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Status</label>
	  							<select class="form-control" name="status">
	  								<option value="0">Please Select The  Satus</option>
	  								<option value="1"@if ($brand->status==1)selected @endif>Active</option>
	  								<option value="0"@if ($brand->status==1)selected @endif>Inactive</option>
	  								
	  							</select>
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Brand Image / Logo</label><br>

	  							@if(!is_null($brand->image))
						      	<img src="{{ asset('Backend/img/brand' )}}/{{ $brand->image }}" width="40">

						      	@else
						      	No Image

						      	@endif
						      	<br>
						      	<br>
	  							<input type="file" class="form-controle-file" name="image">
	  							
	  						</div>

	  						<div class="form-group">
	  							<input type="submit" name="updateBrand" class="btn btn-primary" value="Save Change">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

