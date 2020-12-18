<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Your Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        @php
            $total = 0;
        @endphp
        @if(!empty($cart_data))
            @foreach($cart_data as $data)
                <div>
                    <div class="row align-items-center">
                        <div class="col-5 d-flex align-items-center">
                            <div class="mr-4">
                                <span class="btn btn-primary btn-sm" onclick="deleteCartItem(this);countCartData()" data-id="{{ $data->id }}"><i class="las la-times"></i>
                                </span>
                            </div>
                            <!-- Image -->

                            @php
                                if($data->file == ""){
                                    $imagePath = "assets/images/product/01.jpg";
                                }else{
                                  $imagePath = "uploads/".$data->file;
                                }

                            @endphp

                            <a href="product-left-image.html">
                                <img class="img-fluid" src="{{ asset($imagePath) }}" alt="...">
                            </a>
                        </div>
                        <div class="col-7">
                            <!-- Title -->
                            <h6><a class="link-title" href="#">{{$data->productname}}</a></h6>
                            <div class="product-meta"><span class="mr-2 text-primary">{{$data->price}}</span><span
                                    class="text-muted">x{{$data->quantity}}</span>



                            </div>
                            <div class="product-meta"><span class="mr-2 text-primary">Color :</span><span
                                    class="text-muted">{{$data->quantity}}</span>
                                <span class="mr-2 text-primary">Size :</span><span
                                    class="text-muted">{{$data->quantity}}</span>

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-5">
                @php
                $price = !empty($data->price)?$data->price :0;
                $quantity = !empty($data->quantity)?$data->quantity :0;
                    $total = $total + ((double)$price*(double)$quantity);
                @endphp

            @endforeach
        @else
            <h5>No Data in Cart</h5>
        @endif


        <hr class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-8"><span
                class="text-muted">Subtotal:</span> <span class="text-dark">{{ $total }} BDT</span>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="paymentcheck">
            <label class="custom-control-label" for="paymentcheck">I have read and
                accept
                the terms and conditions</label>
        </div>
        <br><br>
        <a href="{{ route("view_cart") }}" class="btn btn-primary btn-animated mr-2"><i
                class="las la-shopping-cart mr-1"></i>View Cart</a>
            <a href="/confirmation" class="btn btn-dark" ><i class="las la-money-check mr-1"></i>Continue To
            Checkout</a>
    </div>
</div>
