<section class="ftco-section category-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading gradient-text-green">Categories</span>
                <h2 class="mb-3">Browse By Category</h2>
                <div class="heading-line"></div>
            </div>
        </div>
        <div class="row">
            @foreach($cat_data as $category)
            <div class="col-md-3 mb-4">
                <div class="category-card w-100 text-center">
                    <a href="{{ url('/show_category', ['category_id' => $category->id])}}"
                        class="category-icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-transportation"></span>
                    </a>
                    <div class="category-content w-100">
                        <h3 class="category-title mb-2">{{$category->catagory_name}}</h3>
                        <div class="category-stats">
                            <span class="car-count">12 Cars</span>
                            <span class="dot">•</span>
                            <span class="availability">Available Now</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
/* Category Section Styling */
.category-section {
    background: #f8f9fa;
    padding: 80px 0;
}

.subheading {
    font-size: 1.2rem;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.gradient-text-green {
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.heading-line {
    width: 50px;
    height: 3px;
    background: linear-gradient(45deg, #00d25b, #00ff6e);
    margin: 20px auto 0;
}

/* Category Card Styling */
.category-card {
    background: white;
    border-radius: 15px;
    padding: 30px 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.category-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.category-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(45deg, rgba(0, 210, 91, 0.1), rgba(0, 255, 110, 0.1));
    border-radius: 50%;
    transition: all 0.3s ease;
}

.category-card:hover .category-icon {
    background: linear-gradient(45deg, #00d25b, #00ff6e);
}

.category-icon span {
    font-size: 2rem;
    color: #00d25b;
    transition: all 0.3s ease;
}

.category-card:hover .category-icon span {
    color: white;
}

.category-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.category-stats {
    font-size: 0.9rem;
    color: #666;
}

.category-stats .dot {
    margin: 0 8px;
    color: #00d25b;
}

.car-count {
    color: #00d25b;
    font-weight: 500;
}

.availability {
    color: #28a745;
    font-weight: 500;
}

/* Animation */
.ftco-animate {
    opacity: 0;
    visibility: hidden;
}

.ftco-animated {
    opacity: 1;
    visibility: visible;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate3d(0, 40px, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

.fadeInUp {
    animation: fadeInUp 0.5s ease forwards;
}
</style>