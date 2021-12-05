<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>

        @foreach($data as $house)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="{{ $house->image }}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{ $house->detaisl }}</h4></a>
              <h6>${{ $house->price }}</h6>
              <p>{{ $house->details }}.</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (32)</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
