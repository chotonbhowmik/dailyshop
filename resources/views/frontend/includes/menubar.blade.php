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
               
                <a href="">{{$parentCategory->category_name}} <span class="caret"></span>
                </a>
                



                <ul class="dropdown-menu"> 
                  @foreach(App\Models\Backend\Category::orderBy('category_name', 'asc')->where('is_parent', $parentCategory->id )->get() as $childCategory)               
                  <li><a href="{{ route('category.show', $childCategory->category_slug)}}">{{$childCategory->category_name}}</a></li>
                @endforeach
                </ul>

                
              </li>

              @endforeach
           
              <li><a href="contact.html">Contact</a></li>
              <li><a href="{{route('allProducts')}}">Shop <span class="caret"></span></a>
                
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->