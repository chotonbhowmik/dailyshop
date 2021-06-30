@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Category Information</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Category Information</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf

	  						<div class="form-group">
	  							<label>Category Name</label>
	  							<input type="text" name="category_name" class="form-control" value="{{ $category->category_name}}">
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Category Slug</label>
	  							<input type="text" name="category_slug" class="form-control" value="{{ $category->category_slug}}">
	  							
	  						</div>

	  							<div class="form-group">
	  							<label>Is parent</label>
	  							<select class="form-control" name="is_parent">


	  							>
	  								@foreach(App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', 0)->get() as $parentcat)

	  								<option value="{{ $parentcat->id}}" @if( $parentcat->is_parent==0 && $category->id == $parentcat->id) selected @endif>{{ $parentcat->category_name }}</option>


	  								@foreach(App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', $parentcat->id)->get() as $childcat)

	  								<option value="{{ $childcat->id}}"@if($category->id == $childcat->id)selected @endif>--- {{ $childcat->category_name }}</option>
                                        

	  								@endforeach
                                        

	  								@endforeach
	  								
	  							</select>
	  							
	  						</div>

	  						<div class="form-group">
	  							<label>Status</label>
	  							<select class="form-control" name="status">
	  								<option value="0">Please Select The  Satus</option>
	  								<option value="1"@if ($category->status==1)selected @endif>Active</option>
	  								<option value="0"@if ($category->status==0)selected @endif>Inactive</option>
	  								
	  							</select>
	  							
	  						</div>
	  						<div class="form-group">
	  							<label>Category Image / Logo</label><br>

	  							@if(!is_null($category->image))
						      	<img src="{{ asset('Backend/img/category' )}}/{{ $category->image }}" width="40">

						      	@else
						      	No Image

						      	@endif
						      	<br>
						      	<br>
	  							<input type="file" class="form-controle-file" name="image">
	  							
	  						</div>



	  						<div class="form-group">
	  							<input type="submit" name="updateCategory" class="btn btn-primary" value="Save Change">
	  							
	  						</div>
	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

