<x-user.layout>

    <div id="viewport">
        <div id="js-scroll-content">
            <section class="main-banner" id="home">
                <div class="js-parallax-scene">
                    <div class="banner-shape-1 w-100" data-depth="0.30">
                        <img src="{{asset("user/assets/images/berry.png")}}" alt="">
                    </div>
                    <div class="banner-shape-2 w-100" data-depth="0.25">
                        <img src="{{asset("user/assets/images/leaf.png")}}" alt="">
                    </div>
                </div>
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="banner-text">
                                    <h1 class="h1-title">
                                        Welcome to our
                                        <span>Menu</span>
                                        restaurant.
                                    </h1>
                                    <p>This is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam eius
                                        vel tempore consectetur nesciunt? Nam eius tenetur recusandae optio aperiam.</p>
                                    <div class="banner-btn mt-4">
                                        <a href="#menu" class="sec-btn">Check our Menu</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="banner-img-wp">
                                    <div class="banner-img" style="background-image: url({{asset('user/assets/images/main-b.jpg')}});">
                                    </div>
                                </div>
                                <div class="banner-img-text mt-4 m-auto">
                                    <h5 class="h5-title">Sushi</h5>
                                    <p>this is Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="brands-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brand-title mb-5">
                                <h5 class="h5-title">Trusted by 70+ companies</h5>
                            </div>
                            <div class="brands-row">
                                <div class="brands-box">
                                    <img src="{{asset("user/assets/images/brands/b1.png")}}" alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{asset("user/assets/images/brands/b2.png")}}"  alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{asset("user/assets/images/brands/b3.png")}}"  alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{asset("user/assets/images/brands/b4.png")}}"  alt="">
                                </div>
                                <div class="brands-box">
                                    <img src="{{asset("user/assets/images/brands/b5.png")}}"  alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <x-user.restaurant.restaurants :restaurants="$restaurants"/>
            <x-user.restaurant.left-right/>
            <x-user.restaurant.gallery/>







            {{-- <section class="testimonials section bg-light">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">What they say</p>
                                    <h2 class="h2-title">What our customers <span>say about us</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="testimonials-img">
                                    <img src="assets/images/testimonial-img.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t1.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:85%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Nilay Hirpara
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t2.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:80%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Ravi Kumawat
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t3.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:89%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Navnit Kumar
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="testimonials-box">
                                            <div class="testimonial-box-top">
                                                <div class="testimonials-box-img back-img"
                                                    style="background-image: url(assets/images/testimonials/t4.jpg);">
                                                </div>
                                                <div class="star-rating-wp">
                                                    <div class="star-rating">
                                                        <span class="star-rating__fill" style="width:100%"></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="testimonials-box-text">
                                                <h3 class="h3-title">
                                                    Somyadeep Bhowmik
                                                </h3>
                                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque,
                                                    quisquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="faq-sec section-repeat-img" style="background-image: url(assets/images/faq-bg.png);">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">faqs</p>
                                    <h2 class="h2-title">Frequently <span>asked questions</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="assets/images/title-shape.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="faq-row">
                            <div class="faq-box">
                                <h4 class="h4-title">What are the login hours?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What do i get my refund?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">How long it will take food to arrive?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Does your restaurant has both veg and non veg?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Voluptates, distinctio?</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">What is cost of food delivery?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Nam officiis ducimus, cum enim repudiandae animi.</p>
                            </div>
                            <div class="faq-box">
                                <h4 class="h4-title">Who is eligible for pro membership?</h4>
                                <p>It is Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus ipsum
                                    vitae fugit laboriosam dolor distinctio. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </section> --}}


            {{-- <div class="bg-pattern bg-light repeat-img"
                style="background-image: url(assets/images/blog-pattern-bg.png);">
                <section class="blog-sec section" id="blog">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sec-title text-center mb-5">
                                        <p class="sec-sub-title mb-3">Our blog</p>
                                        <h2 class="h2-title">Latest Publications</span></h2>
                                        <div class="sec-title-shape mb-4">
                                            <img src="assets/images/title-shape.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog1.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">September.15.2021</p>
                                            <a href="#" class="h4-title">Energy Drink which you can make at home.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog2.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">October.15.2021</p>
                                            <a href="#" class="h4-title">Fresh Veggie and rice combo for dinner.</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="blog-box">
                                        <div class="blog-img back-img"
                                            style="background-image: url(assets/images/blog/blog3.jpg);"></div>
                                        <div class="blog-text">
                                            <p class="blog-date">November.15.2021</p>
                                            <a href="#" class="h4-title">Chicken burger with double nuggets</a>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur ipsa
                                                explicabo atque reprehenderit beatae! Accusantium soluta consequuntur
                                                blanditiis amet ad.</p>
                                            <a href="#" class="sec-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}

                {{-- <section class="newsletter-sec section pt-0">
                    <div class="sec-wp">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 m-auto">
                                    <div class="newsletter-box text-center back-img white-text"
                                        style="background-image: url(assets/images/news.jpg);">
                                        <div class="bg-overlay dark-overlay"></div>
                                        <div class="sec-wp">
                                            <div class="newsletter-box-text">
                                                <h2 class="h2-title">Subscribe our newsletter</h2>
                                                <p>This is Lorem ipsum dolor sit amet consectetur adipisicing elit ad
                                                    veritatis.</p>
                                            </div>
                                            <form action="#" class="newsletter-form">
                                                <input type="email" class="form-input"
                                                    placeholder="Enter your Email Here" required>
                                                <button type="submit" class="sec-btn primary-btn">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            {{-- </div> --}}

            <!-- footer starts  -->
            <x-user.footer/>



        </div>
    </div>



</x-user.layout>
