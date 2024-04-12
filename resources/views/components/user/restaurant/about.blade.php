@props(['restaurant'])
<section class="about-sec section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center mb-5">
                    {{-- <p class="sec-sub-title mb-3">About Us</p> --}}
                    <h2 class="h2-title">Discover our <span>{{$restaurant->name}}</span></h2>
                    <div class="sec-title-shape mb-4">
                        <img src="{{asset("user/assets/images/title-shape.svg")}}" alt="">
                    </div>
                    <p>{{$restaurant->about}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-video">
                    <div class="about-video-img" style="background-image: url({{asset("user/assets/images/about.jpg")}});">
                    </div>
                    <div class="play-btn-wp">
                        <a href="{{asset("user/assets/images/video.mp4")}}" data-fancybox="video" class="play-btn">
                            <i class="uil uil-play"></i>

                        </a>
                        <span>Watch The Recipe</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
