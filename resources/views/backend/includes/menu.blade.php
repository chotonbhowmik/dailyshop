 <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ route('dashboard')}}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
     
      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Ecommerce Functionality</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('category.manage') || Route::currentRouteNamed('category.create') || Route::currentRouteNamed('category.edit')) active @endif">

            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Category</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('category.manage')}}" class="sub-link @if ( Route::currentRouteNamed('category.manage')) active @endif">Manage Category</a></li>
            <li class="sub-item"><a href="{{ route('category.create')}}" class="sub-link @if ( Route::currentRouteNamed('category.create')) active @endif">Create Category</a></li>
          </ul>
        </li>

         <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('coupon.manage') || Route::currentRouteNamed('coupon.create') || Route::currentRouteNamed('coupon.edit')) active @endif">
            <i class="menu-item-icon icon fa fa-bullhorn tx-20"></i>
            <span class="menu-item-label">Coupon</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('coupon.manage')}}" class="sub-link @if ( Route::currentRouteNamed('coupon.manage')) active @endif">Manage Coupon</a></li>
            <li class="sub-item"><a href="{{ route('coupon.create')}}" class="sub-link @if ( Route::currentRouteNamed('coupon.create')) active @endif">Create Coupon</a></li>
          </ul>
        </li>

          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('size.manage') || Route::currentRouteNamed('size.create') || Route::currentRouteNamed('size.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Size</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('size.manage')}}" class="sub-link @if ( Route::currentRouteNamed('size.manage')) active @endif">Manage Size</a></li>
            <li class="sub-item"><a href="{{ route('size.create')}}" class="sub-link @if ( Route::currentRouteNamed('size.create')) active @endif">Create Size</a></li>
          </ul>
        </li>
        

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('color.manage') || Route::currentRouteNamed('color.create') || Route::currentRouteNamed('color.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Color</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('color.manage')}}" class="sub-link @if ( Route::currentRouteNamed('color.manage')) active @endif">Manage Color</a></li>
            <li class="sub-item"><a href="{{ route('color.create')}}" class="sub-link @if ( Route::currentRouteNamed('color.create')) active @endif">Create Color</a></li>
          </ul>
        </li>

          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('product.manage') || Route::currentRouteNamed('product.create') || Route::currentRouteNamed('product.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Product List</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('product.manage')}}" class="sub-link @if ( Route::currentRouteNamed('product.manage')) active @endif">Manage Product</a></li>
            <li class="sub-item"><a href="{{ route('product.create')}}" class="sub-link @if ( Route::currentRouteNamed('product.create')) active @endif">Create Product</a></li>
          </ul>
        </li>

          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('brand.manage') || Route::currentRouteNamed('brand.create') || Route::currentRouteNamed('brand.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Brand List</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('brand.manage')}}" class="sub-link @if ( Route::currentRouteNamed('brand.manage')) active @endif">Manage Brand</a></li>
            <li class="sub-item"><a href="{{ route('brand.create')}}" class="sub-link @if ( Route::currentRouteNamed('brand.create')) active @endif">Create Brand</a></li>
          </ul>
        </li>


          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('tax.manage') || Route::currentRouteNamed('tax.create') || Route::currentRouteNamed('tax.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Tax</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('tax.manage')}}" class="sub-link @if ( Route::currentRouteNamed('tax.manage')) active @endif">Manage Tax</a></li>
            <li class="sub-item"><a href="{{ route('tax.create')}}" class="sub-link @if ( Route::currentRouteNamed('tax.create')) active @endif">Create Tax</a></li>
          </ul>
        </li>

          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('customer.manage') || Route::currentRouteNamed('customer.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Customer</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('customer.manage')}}" class="sub-link @if ( Route::currentRouteNamed('customer.manage')) active @endif">Manage Customer</a></li>
            
          </ul>
        </li>


          <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub @if ( Route::currentRouteNamed('slider.manage') || Route::currentRouteNamed('slider.create') || Route::currentRouteNamed('slider.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Slider List</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
           
            <li class="sub-item"><a href="{{ route('slider.manage')}}" class="sub-link @if ( Route::currentRouteNamed('slider.manage')) active @endif">Manage Slider</a></li>
            <li class="sub-item"><a href="{{ route('slider.create')}}" class="sub-link @if ( Route::currentRouteNamed('slider.create')) active @endif">Create Slider</a></li>
          </ul>
        </li>


      </ul><!-- br-sideleft-menu -->



      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->