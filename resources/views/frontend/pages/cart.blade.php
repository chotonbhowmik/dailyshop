@extends('frontend.layout.template')
@section('body')

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
            
               <div class="table-responsive">
                @if(App\Models\Frontend\Cart::totalItems() > 0)
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>update</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $total_price = 0; @endphp
                     @foreach( $cartItems as $item )
                     
                      <tr>
                       
                        <td>

                           <form action="{{ route('cart.destroy', $item->id)}}" method="POST">
              @csrf

              <button type="submit" class="remove"><i class="fa fa-close"></i></button>
              

                        </form></td>



                        <td><a href="#">
@if( !is_null($item->product->image))
                <img src="{{ asset('Backend/img/product') .'/'. $item->product->image}}" alt="">
                @else
                No Image Found
                @endif
                          
                        </a></td>
                        <td><a class="aa-cart-title" href="">{{ $item->product->title}}</a></td>
                        <td>@if ( !is_null($item->product->offer_price))
              BDT {{ $item->product->offer_price }}
              @else
              BDT {{$item->product->regular_price}}

              @endif</td>
              <td class="cart-product-edit">

            <form action="{{ route('cart.update', $item->id)}}" method="POST">
              @csrf

              <input type="submit" name="update" class="btn-upper btn btn-primary" value="Update">

              
            


          </td>

                        <td>
                          <input class="aa-cart-quantity" type="number" name="product_quantity" value="{{$item->product_quantity}}">
                          </form>
                        </td>
                        <td>  @if ( !is_null($item->product->offer_price))
              BDT {{ $item->product->offer_price *  $item->product_quantity }}
              @else
              BDT {{$item->product->regular_price *  $item->product_quantity}}

              @endif</td>
                      </tr>
                      @endforeach

                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                          </div>
                          
                        </td>
                      </tr>
                      </tbody>
                  </table>
                  @else

    <div class="alert alert-warning">No Item Added In Your Cart</div>

    @endif
                </div>
            
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>BDT {{ App\Models\Frontend\Cart::totalPrice()}}</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>BDT {{ App\Models\Frontend\Cart::totalPrice()}}</td>
                   </tr>
                 </tbody>
               </table>
               <a href="{{route('checkout.page')}}" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
 @endsection

