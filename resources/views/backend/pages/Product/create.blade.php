@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Create New product</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Create New product</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf
	  						<div class="container-fluid">
	  							<div class="row">
	  								<!---First Coloumn--->
	  								<div class="col-sm-4">
	  									<div class="form-group">
			  							<label>Product Title </label>
			  							<input type="text" name="title" class="form-control">
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>slug </label>
			  							<input type="text" name="slug" class="form-control">
			  							
			  						</div>

			  							<div class="form-group">
			  							<label>Product Brand</label>
			  							<select class="form-control" name="brand" width="40px" >
			  								<option value="0">Please Select The Product Brand</option>
			  								@foreach( App\Models\Backend\Brand::orderBy('name', 'asc')->get() as $brand_size)
			  								<option value="{{ $brand_size->id }}"> {{ $brand_size->name }}</option>
			  								@endforeach
			  								
			  								
			  								
			  							</select>
			  							
			  						</div>
			  						<div class="form-group">
			  							<label> Model </label>
			  							<input type="text" name="model" class="form-control">
			  							
			  						</div>
			  						<div class="form-group">
		  							<label> keyword</label>
		  							<input type="text" name="keyword" class="form-control">
		  							
		  						</div>

		  						<div class="form-group">
			  							<label>Product Size</label>
			  							<select class="form-control" name="size_one">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Size::orderBy('size', 'asc')->get() as $parent_size)

			  								<option value="{{ $parent_size->id}}"> {{ $parent_size->size}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>Product Size Two</label>
			  							<select class="form-control" name="size_two">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Size::orderBy('size', 'asc')->get() as $cat_size)

			  								<option value="{{ $cat_size->id}}"> {{ $cat_size->size}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

		  						<div class="form-group">
	  							<label>Lead Time</label>
	  							<input type="text" name="lead_time" class="form-control">
	  							
	  						</div> 

	  						<div class="form-group">
			  							<label>Tax</label>
			  							<select class="form-control" name="tax_id">
			  								<option>Please Select The TAX</option>

			  								@foreach( App\Models\Backend\Tax::orderBy('tax_value', 'asc')->get() as $tax_val)

			  								<option value="{{ $tax_val->id}}"> {{ $tax_val->tax_value}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

	  						<div class="form-group">
			  							<label>Is Tranding</label>
			  							<select class="form-control" name="is_tranding">
			  								
			  								<option value="0">No</option>
			  								<option value="1">Yes</option>
			  								
			  							</select>
			  							
			  						</div>

	  									
	  								</div>
	  								<!---Middle Coloumn--->

	  								<div class="col-sm-4">
	  									


			  						<div class="form-group">
			  							<label>Product Category</label>
			  							<select class="form-control" name="category_id">
			  								<option>Please Select The Product Category</option>

			  								@foreach( App\Models\Backend\Category::orderBy('category_name', 'asc')->get() as $parent_cat)

			  								<option value="{{ $parent_cat->id}}"> {{ $parent_cat->category_name}}</option>
			  								
			  									@foreach( App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', $parent_cat->id)->get() as $child_cat)
			  								
			  								<option value="{{ $child_cat->id}}"> --{{ $child_cat->category_name}}</option>

			  								@endforeach

			  								

			  								@endforeach
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
		  							<label> technical specification</label>
		  							<input type="text" name="technical_specification" class="form-control">
		  							
		  						</div>	
		  						<div class="form-group">
		  							<label> uses</label>
		  							<input type="text" name="uses" class="form-control">
		  							
		  						</div>	

			  						<div class="form-group">
		  							<label> warranty</label>
		  							<input type="text" name="warranty" class="form-control">
		  							
		  						</div>	

		  						<div class="form-group">
		  							<label> sku</label>
		  							<input type="text" name="sku" class="form-control">
		  							
		  						</div>	

		  						<div class="form-group">
		  							<label> Regular Price</label>
		  							<input type="number" name="regular_price" class="form-control">
		  							
		  						</div>	
		  						<div class="form-group">
		  							<label> Offer Price</label>
		  							<input type="number" name="offer_price" class="form-control">
		  							
		  						</div>	
		  						
	  						<div class="form-group">
			  							<label>Is Discounted</label>
			  							<select class="form-control" name="is_discounted">
			  								
			  								<option value="0">No</option>
			  								<option value="1">Yes</option>
			  								
			  							</select>
			  							
			  						</div>
	  		
	  						  			</div>

	                                     <!---Last Coloumn--->
		  							<div class="col-sm-4">

		  								<div class="form-group">
		  							<label> Quantity</label>
		  							<input type="number" name="Quantity" class="form-control">
		  							
		  						</div>	

		  							<div class="form-group">
		  							<label>Product Short Description</label>
		  							<textarea class="form-control" name="short_desc" rows="5"></textarea>
		  							
		  						</div>
		  						<div class="form-group">
		  							<label>Product Description</label>
		  							<textarea class="form-control" name="desc" rows="5"></textarea>
		  							
		  						</div>
		  						<div class="form-group">
		  							<label> keyword</label>
		  							<input type="text" name="keyword" class="form-control">
		  							
		  						</div>

		  						<div class="form-group">
			  							<label>Product Color One</label>
			  							<select class="form-control" name="color_one">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Color::orderBy('color', 'asc')->get() as $parent_color)

			  								<option value="{{ $parent_color->id}}"> {{ $parent_color->color}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>Product Color Two</label>
			  							<select class="form-control" name="color_two">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Color::orderBy('color', 'asc')->get() as $child_color)

			  								<option value="{{ $child_color->id}}"> {{ $child_color->color}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>
			  						<div class="form-group">
			  							<label>Is Promo</label>
			  							<select class="form-control" name="is_promo">
			  								
			  								<option value="0">No</option>
			  								<option value="1">Yes</option>
			  								
			  							</select>
			  							
			  						</div>
			  						<div class="form-group">
			  							<label>Is Featured</label>
			  							<select class="form-control" name="is_featured">
			  								
			  								<option value="0">No</option>
			  								<option value="1">Yes</option>
			  								
			  							</select>
			  							
			  						</div>



		  					

		  						 						
	  						
                            	</div>
	  								
	  							</div>
			  							
			  						</div>
			  						<div class="container-fluid">
			  							<div class="row">
			  								<div class="col-sm-12">

			  						<div class="form-group">
			  							<label>Product Image</label>
			  							<input type="file" class="form-controle-file" name="image">
			  							
			  						</div>
			  						<div class="form-group">
			  							<label>Product Image One</label>
			  							<input type="file" class="form-controle-file" name="image_one">
			  							
			  						</div>
			  						<div class="form-group">
			  							<label>Product Image Two</label>
			  							<input type="file" class="form-controle-file" name="image_two">
			  							
			  						</div>

	  									<div class="form-group">
	  							     <input type="submit" name="addProduct" class="btn btn-primary" value="Add New Product">
	  							
	  						      </div>

	  						      
	  									
	  								</div>
	  								
	  							</div>
	  							
	  						</div>

	  						
	  						
	  					</form>
	  					
	  				</div>

	  				
	  			</div>
	  			<!---------body content end------------->
	  			
	  		</div>
	  		
	  	</div>
	  	
	  </div>

@endsection

