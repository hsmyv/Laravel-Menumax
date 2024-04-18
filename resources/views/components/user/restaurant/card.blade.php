
@props(['restaurant'])
<div class="col-lg-4 swiper-slide">
    <div class="team-box text-center">
        <a href="{{route('main.restaurant.show', $restaurant)}}"><div style="background-image: url({{ $restaurant->getFirstMediaUrl('restaurant-main-image')}});"
            class="team-img back-img">
        </div></a>

        <h3 class="h3-title">{{$restaurant->name}}</h3>
        <div class="social-icon">
            <ul>
                @foreach ($restaurant->socialNetworks as $socialNetwork)
                    @if ($socialNetwork->status)
                        <li>
                            <a href="{{ $socialNetwork->url }}" target="_blank" >
                                @if (strpos($socialNetwork->url, 'facebook.com') !== false)
                                    <i class="uil uil-facebook-f"></i>
                                @elseif (strpos($socialNetwork->url, 'instagram.com') !== false)
                                    <i class="uil uil-instagram"></i>
                                @elseif (strpos($socialNetwork->url, 'youtube.com') !== false)
                                    <i class="uil uil-youtube"></i>
                                @endif
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
