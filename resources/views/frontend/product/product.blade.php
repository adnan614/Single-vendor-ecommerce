@extends ('frontend.master')
@section('content')
<div class="container">
    <!-- heading -->
    <div>
        <div class="text-center">
            <h1 class="text-capitalize">all products</h1>
        </div>
    </div>
    <div>
        <div class="row">
        @foreach($product as $data)
            <div class="col-md-3 mb-5">
                <!-- product name -->
                <div>
                    <div class="text-center">
                        <p>Category Id:{{ $data->category_id }}</p>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <p>Brand Id:{{ $data->brand_id }}</p>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <p>Product Name:{{ $data->name }}</p>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <p>Quantity:{{ $data->quantity }}</p>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <p>Colour:{{ $data->color }}</p>
                    </div>
                </div>
                <!-- image -->
                {{-- <div>
                    <img src="{{ url('upload/'.$data->image) }}" style="    width: 250px;
                        height: 250px">
                </div> --}}
                <!-- article -->
                <div>
                    <!-- price -->
                   <div class="text-center">
                        <p>Price:{{$data->price }}</p>
                   </div>

                </div>
                <div>
                    <div class="text-center">
                        <p>Status:{{ $data->status }}</p>
                    </div>
                </div>
                <!-- buttons -->
                <div class="d-flex">
                    <div class="mr-5">
                        <a class="btn btn-sm btn-outline-secondary" href=""> View</a>
                        {{--<a href="{{route('all.product.view')}}" class="btn btn-info btn-lg">
                          <span class="glyphicon glyphicon-shopping-order"></span> Order Now
                          </a>--}}
                    </div>

                    <div>
                         <a class="btn btn-sm btn-outline-secondary" href=""> Add To Cart</a>
                                              {{-- <a href="{{ route('frontend.cart.addTocart',$data->id) }}" class="btn btn-info btn-lg">
                          <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart
                          </a> --}}
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>












@endsection
