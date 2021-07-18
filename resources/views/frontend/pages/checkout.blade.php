@extends('frontend.layout.template')
@section('body')

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
         
            <div class="row">
               <form action="{{ route('order.store') }}" method="POST">
              @csrf
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                  
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                     
                      <!-- <div id="collapseFour" class="panel-collapse collapse"> -->
                        <div class="panel-body">
                          
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="fname" placeholder="First Name*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="lname" placeholder="Last Name*">
                              </div>
                            </div>
                          </div> 
                          
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="email" placeholder="Email Address*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" name="phone" placeholder="Phone*">
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                               
                                <textarea class="form-control" name="shipping_address" rows="4" > Address</textarea>
                              </div>                             
                            </div>                            
                          </div>   
                          
                        
                         
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea class="form-control" name="additional_message" rows="4">Additional Message</textarea>
                                
                                
                              </div>                             
                            </div>                            
                          </div>              

                        </div>
                     <!--  </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( App\Models\Frontend\Cart::totalCarts() as $item)
                        <tr>
                          <td>{{ $item->product->title}} </td>
                             <td>@if ( !is_null($item->product->offer_price))
                            BDT {{ $item->product->offer_price *  $item->product_quantity }}
                            @else
                            BDT {{$item->product->regular_price *  $item->product_quantity}}

                            @endif</td>
                        </tr>
                          @endforeach
                        
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Subtotal</th>
                          <td>BDT {{ App\Models\Frontend\Cart::totalPrice()}} ৳</td>
                        </tr>
                         
                         <tr>
                          <th>Total</th>
                          <td>BDT {{ App\Models\Frontend\Cart::totalPrice()}} ৳</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                
                  <h4>Payment Method</h4>
                                 
                    
            @foreach( App\Models\Backend\Payment::orderBy('priority', 'asc')->get() as $gateway)

            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="{{ $gateway->slug}}" value="{{ $gateway->id}}">
              <label class="form-check-label" for="{{ $gateway->slug}}">
                {{ $gateway->name}}
              </label>
              </div>

              @if( $gateway->slug == 'bkash')
               <div class="gateway-option {{ $gateway->slug}} hidden">
                <h5>Please send money to this <strong> {{$gateway->number}}</strong> and Insert the transction number below.</h5>
                <div class="form-group">
                <input type="text" name="btransction_id" class="form-control" placeholder="Transction Id"> 
                  
                </div>
                
              </div>

              @elseif( $gateway->slug == 'rocket')
              <div class="gateway-option {{ $gateway->slug}} hidden">
                <h5>Please send money to this <strong> {{$gateway->number}}</strong> and Insert the transction number below.</h5>
                <div class="form-group">
                <input type="text" name="rtransction_id" class="form-control" placeholder="Transction Id"> 
                  
                </div>
                
              </div>
              @elseif( $gateway->slug == 'nagad')
              <div class="gateway-option {{ $gateway->slug}} hidden">
                <h5>Please send money to this <strong> {{$gateway->number}}</strong> and Insert the transction number below.</h5>
                <div class="form-group">
                <input type="text" name="ntransction_id" class="form-control" placeholder="Transction Id"> 
                  
                </div>
                
              </div>
              @else( $gateway->slug == 'cashondelivery')
              <div class="gateway-option {{ $gateway->slug}} hidden">
                <h5>Once you received the order, You have to pay the money to the delivery man</h5>
                
                
              </div>
              @endif()

             
            
            @endforeach
                       
                    <input type="hidden" name="product_finalprice" value="{{ App\Models\Frontend\Cart::totalPrice()}}">
            <div class="form-group">
              <input type="submit" name="order" class="btn btn-primary checkout-btn" value="Place Your Order">
              
            </div>
                                
                  
                </div>
              </div>
              </form>
            </div>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
@endsection