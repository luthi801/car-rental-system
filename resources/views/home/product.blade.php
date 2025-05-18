<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading gradient-text-green">Our Fleet</span>
                <h2 class="mb-2">Featured Vehicles</h2>
                <div class="heading-line"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach($product_data as $product)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end position-relative"
                                style="background-image: url('added_products/{{$product->image}}');">
                                <div class="price-wrap">
                                    <span class="price">BDT {{$product->price}}</span>
                                    <span class="per">/day</span>
                                </div>
                            </div>
                            <div class="text">
                                <h2 class="mb-0">
                                    <a href="{{url('product_details', $product->product_id)}}" class="car-title">{{$product->product_title}}</a>
                                </h2>
                                <div class="d-flex mb-3 mt-2 car-info">
                                    <span class="cat"><i class="fas fa-tag mr-2"></i>{{$product->catagory->catagory_name}}</span>
                                    <span class="seats ml-auto"><i class="fas fa-users mr-2"></i>{{$product->product_capacity}} Seats</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{url('product_details', $product->product_id)}}"
                                        class="btn btn-primary btn-sm">View Details</a>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Section Styling */
.heading-section .subheading {
    font-size: 1.2rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.heading-line {
    width: 50px;
    height: 3px;
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    margin: 20px auto 0;
}

/* Car Card Styling */
.car-wrap {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.car-wrap:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.car-wrap .img {
    height: 250px;
    background-size: cover;
    background-position: center;
}

.price-wrap {
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    padding: 8px 15px;
    border-radius: 25px;
    color: white;
}

.price-wrap .price {
    font-size: 1.2rem;
    font-weight: 600;
}

.price-wrap .per {
    font-size: 0.9rem;
    opacity: 0.8;
}

.car-title {
    color: #333;
    font-size: 1.3rem;
    font-weight: 600;
    transition: color 0.3s ease;
}

.car-title:hover {
    color: #00d25b;
    text-decoration: none;
}

.car-info {
    font-size: 0.9rem;
    color: #666;
}

.car-info i {
    color: #00d25b;
}

/* Rating Stars */
.rating {
    color: #ffd700;
    font-size: 0.9rem;
}

/* Button Styling */
.btn-primary {
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    border: none;
    border-radius: 25px;
    padding: 8px 20px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 210, 91, 0.4);
}

/* Carousel Navigation */
.owl-nav button {
    background: white !important;
    width: 40px;
    height: 40px;
    border-radius: 50% !important;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.owl-nav button:hover {
    background: #00d25b !important;
    color: white !important;
}
</style>