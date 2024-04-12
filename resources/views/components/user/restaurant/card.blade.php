
@props(['restaurant'])
<div class="col-lg-4 swiper-slide">
    <div class="team-box text-center">
        <a href="{{route('main.restaurant.show', $restaurant)}}"><div style="background-image: url(user/assets/images/chef/c1.jpg);"
            class="team-img back-img">
        </div></a>

        <h3 class="h3-title">{{$restaurant->name}}</h3>
        <div class="social-icon">
            <ul>
                <li>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="uil uil-youtube"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
