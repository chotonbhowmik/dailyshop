 <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{route('homepage')}}">Home</a></li>

               @foreach(App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', 0)->get() as $parentCategory)
              <li>
               
                <a href="#">{{$parentCategory->category_name}} <span class="caret"></span>
                </a>
                  @foreach(App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', $parentCategory->id )->get() as $childCategory)



                <ul class="dropdown-menu">                
                  <li><a href="#">{{$childCategory->category_name}}</a></li>
                
                </ul>

                @endforeach
              </li>

              @endforeach
           
              <li><a href="contact.html">Contact</a></li>
              <li><a href="#">Pages <span class="caret"></span></a>
                <ul class="dropdown-menu">                
                  <li><a href="product.html">Shop Page</a></li>
                  <li><a href="product-detail.html">Shop Single</a></li>                
                  <li><a href="404.html">404 Page</a></li>                
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->