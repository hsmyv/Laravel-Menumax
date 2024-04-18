@props(['restaurants'])
<section class="our-team section">
    <div class="sec-wp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-center mb-5">
                        <p class="sec-sub-title mb-3">Your Choice</p>
                        <h2 class="h2-title">Discovery the Restaurants</h2>
                        <div class="sec-title-shape mb-4">
                            <img src="{{asset("user/assets/images/title-shape.svg")}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team-slider">
                <div class="swiper-wrapper">
                    @foreach ( $restaurants as $restaurant)
                        <x-user.restaurant.card :restaurant="$restaurant"/>
                    @endforeach
                </div>
                <div class="swiper-button-wp">
                    <div class="swiper-button-prev swiper-button">
                        <i class="uil uil-angle-left"></i>
                    </div>
                    <div class="swiper-button-next swiper-button">
                        <i class="uil uil-angle-right"></i>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
