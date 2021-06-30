@extends ('backend.layout.template')


@section ('body')
 
 <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Product Information</h4>
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
	  					<div><h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Update Product Information</h6>
	  					</div>

	  					
	  				</div>
	  				<div class="pd-1-25 pd-r-15 pd-b-25">
	  					<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
	  						<!---------this is security token-------->
	  						@csrf
	  						<div class="container-fluid">
	  							<div class="row">
	  								<!---First Coloumn--->
	  								<div class="col-sm-4">
	  									<div class="form-group">
			  							<label>Product Title </label>
			  							<input type="text" name="title" class="form-control" value="{{ $product->title}}">
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>slug </label>
			  							<input type="text" name="slug" class="form-control" value="{{ $product->slug}}">
			  							
			  						</div>

			  							<div class="form-group">
			  							<label>Product Brand</label>
			  							<select class="form-control" name="brand">
			  								<option value="0">Please Select The Product Brand</option>
			  								@foreach( App\Models\Backend\Brand::orderBy('name', 'asc')->get() as $brand_navme)
			  								<option value="{{ $brand_navme->id }}" @if($brand_navme->id == $product->brand) selected @endif> {{ $brand_navme->name }}</option>
			  								@endforeach
			  								
			  								
			  								
			  							</select>
			  							
			  						</div>
			  						<div class="form-group">
			  							<label> Model </label>
			  							<input type="text" name="model" class="form-control" value="{{ $product->model}}">
			  							
			  						</div>
			  						<div class="form-group">
		  							<label> keyword</label>
		  							<input type="text" name="keyword" class="form-control" value="{{ $product->keyword}}">
		  							
		  						</div>	


		  						<div class="form-group">
			  							<label>Product Size</label>
			  							<select class="form-control" name="size_one">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Size::orderBy('size', 'asc')->get() as $parent_size)

			  								<option value="{{ $parent_size->id}}" @if($parent_size->id == $product->size_one) selected @endif> {{ $parent_size->size}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>Product Size Two</label>
			  							<select class="form-control" name="size_two" required="required">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Size::orderBy('size', 'asc')->get() as $cat_size)

			  								<option value="{{ $cat_size->id}}"  @if($cat_size->id == $product->size_two) selected @endif> {{ $cat_size->size}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
	  							<label>Lead Time</label>
	  							<input type="text" name="lead_time" class="form-control" value="{{ $product->lead_time}}">
	  							
	  						</div> 

	  						
	  						<div class="form-group">
			  							<label>Tax</label>
			  							<select class="form-control" name="tax_id">
			  								<option>Please Select The TAX</option>

			  								@foreach( App\Models\Backend\Tax::orderBy('tax_value', 'asc')->get() as $tax_val)

			  								<option value="{{ $tax_val->id}} "@if($tax_val->id == $product->tax_id) selected @endif> {{ $tax_val->tax_value}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

	  						<div class="form-group">
			  							<label>Is Tranding</label>
			  							<select class="form-control" name="is_tranding">
			  								
			  								<option value="0"@if ($product->is_tranding ==0 )selected @endif>No</option>
			  								<option value="1"@if ($product->is_tranding ==1 )selected @endif>Yes</option>
			  								
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

			  								<option value="{{ $parent_cat->id}}" @if($parent_cat->id == $product->category_id) selected @endif > {{ $parent_cat->category_name}}</option>

			  								@foreach( App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', $parent_cat->id)->get() as $child_cat)
			  								
			  								<option value="{{ $child_cat->category_id}}"> --{{ $child_cat->category_name}}</option>

			  								@endforeach

			  								@endforeach
			  							</select>
			  							
			  						</div>
			  						
			  						<div class="form-group">
			  							<label>Status</label>
			  							<select class="form-control" name="status">
			  								<option value="0">Please Select The  Satus</option>
			  								<option value="1"  @if ($product->status ==1 )selected @endif>Active</option>
			  								<option value="0" @if ($product->status ==0 )selected @endif>Inactive</option>
			  								
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
		  							<label> technical specification</label>
		  							<input type="text" name="technical_specification" class="form-control" value="{{ $product->technical_specification}}">
		  							
		  						</div>	
		  						<div class="form-group">
		  							<label> uses</label>
		  							<input type="text" name="uses" class="form-control" value="{{ $product->uses}}">
		  							
		  						</div>	

			  						<div class="form-group">
		  							<label> warranty</label>
		  							<input type="text" name="warranty" class="form-control" value="{{ $product->warranty}}">
		  							
		  						</div>	


		  						<div class="form-group">
		  							<label> sku</label>
		  							<input type="text" name="sku" class="form-control" value="{{ $product->sku}}">
		  							
		  						</div>	

		  						<div class="form-group">
		  							<label> Regular Price</label>
		  							<input type="number" name="regular_price" class="form-control" value="{{ $product->regular_price}}">
		  							
		  						</div>	
		  						<div class="form-group">
		  							<label> Offer Price</label>
		  							<input type="number" name="offer_price" class="form-control" value="{{ $product->offer_price}}">
		  							
		  						</div>

		  						 
	  						<div class="form-group">
			  							<label>Is Discounted</label>
			  							<select class="form-control" name="is_discounted">
			  								
			  								<option value="0" @if ($product->is_discounted ==0 )selected @endif>No</option>
			  								<option value="1" @if ($product->is_discounted ==1 )selected @endif>Yes</option>
			  								
			  							</select>
			  							
			  						</div>
	  		
	  						  			</div>

	                                     <!---Last Coloumn--->
		  							<div class="col-sm-4">

		  								<div class="form-group">
		  							<label> Quantity</label>
		  							<input type="number" name="Quantity" class="form-control" value="{{ $product->Quantity}}">
		  							
		  						</div>	

		  							<div class="form-group">
		  							<label>Product Short Description</label>
		  							<textarea class="form-control" name="short_desc" rows="5">{{ $product->short_desc}}</textarea>
		  							
		  						</div>
		  						<div class="form-group">
		  							<label>Product Description</label>
		  							<textarea class="form-control" name="desc" rows="5">{{ $product->desc}}</textarea>
		  							
		  						</div>
		  						<div class="form-group">
		  							<label> keyword</label>
		  							<input type="text" name="keyword" class="form-control" value="{{ $product->keyword}}">
		  							
		  						</div>	

		  						<div class="form-group">
			  							<label>Product Color One</label>
			  							<select class="form-control" name="color_one">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Color::orderBy('color', 'asc')->get() as $parent_color)

			  								<option value="{{ $parent_color->id}}" @if($parent_color->id == $product->color_one) selected @endif > {{ $parent_color->color}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div>

			  						<div class="form-group">
			  							<label>Product Color Two</label>
			  							<select class="form-control" name="color_two">
			  								<option>Please Select The Product Color</option>

			  								@foreach( App\Models\Backend\Color::orderBy('color', 'asc')->get() as $child_color)

			  								<option value="{{ $child_color->id}}" @if($child_color->id == $product->color_two) selected @endif > {{ $child_color->color}}</option>

			  								

			  								@endforeach
			  							</select>
			  							
			  						</div> 

			  						<div class="form-group">
			  							<label>Is Promo</label>
			  							<select class="form-control" name="is_promo">
			  								
			  								<option value="0" @if ($product->is_promo ==0 )selected @endif >No</option>
			  								<option value="1" @if ($product->is_promo ==1 )selected @endif>Yes</option>
			  								
			  							</select>
			  							
			  						</div>
			  						<div class="form-group">
			  							<label>Is Featured</label>
			  							<select class="form-control" name="is_featured">
			  								
			  								<option value="0" @if ($product->is_featured ==0 )selected @endif >No</option>
			  								<option value="1" @if ($product->is_featured ==1 )selected @endif >Yes</option>
			  								
			  							</select>
			  							
			  						</div>
		  						 						
	  						
                            	</div>
	  								
	  							</div>
			  							
			  						</div>
			  						<div class="container-fluid">
			  							<div class="row">
			  								<div class="col-sm-12">
                            <div class="form-group">
	  							<label>Product Image</label><br>

	  							@if(!is_null($product->image))
						      	<img src="{{ asset('Backend/img/product' )}}/{{ $product->image }}" width="40">

						      	@else
						      	No Image

						      	@endif
						      	<br>
						      	<br>
	  							<input type="file" class="form-controle-file" name="image">
	  							
	  						</div>

	  						 <div class="form-group">
	  							<label>Product Image one</label><br>

	  							@if(!is_null($product->image_one))
						      	<img src="{{ asset('Backend/img/product' )}}/{{ $product->image_one }}" width="40">

						      	@else
						      	No Image

						      	@endif
						      	<br>
						      	<br>
	  							<input type="file" class="form-controle-file" name="image_one">
	  							
	  						</div>

	  						 <div class="form-group">
	  							<label>Product Image one</label><br>

	  							@if(!is_null($product->image_two))
						      	<img src="{{ asset('Backend/img/product' )}}/{{ $product->image_two }}" width="40">

						      	@else
						      	No Image

						      	@endif
						      	<br>
						      	<br>
	  							<input type="file" class="form-controle-file" name="image_two">
	  							
	  						</div>

	  									<div class="form-group">
	  							     <input type="submit" name="updateProduct" class="btn btn-primary" value="Save Changes">
	  							
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

