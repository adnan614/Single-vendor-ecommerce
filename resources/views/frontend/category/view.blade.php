@extends ('frontend.master')
@section('content')

<div class="container" style="margin-bottom: 320px">
    <div class="section-title">
      <h2>Our Specials</h2>
    </div>

    <div class="row">
        @foreach ($category as $da)
        <div class="col-xs-12 col-sm-4">
            <div class="features-item">
              <p class="card-text">{{ $item->name }}</p>
              <img src="{{ url('uploads/products/'.$item->image) }}" style="    width: 250px;
                        height: 250px">
              <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">{{ $item->price }} BDT</small>

              </div>
                  <div class="btn-group">

                      <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.item.addTocart',$item->id) }}"> Add To Cart</a>
                  </div>


            </div>
        </div>
        @endforeach


    </div>
  </div>
</div>


@stop
