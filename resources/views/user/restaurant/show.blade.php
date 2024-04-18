<x-user.layout>


<x-user.restaurant.about :restaurant="$restaurant"/>

@if(!$products->isEmpty())
    <section style="background-image: url(user/assets/images/menu-bg.png);"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">our menu</p>
                                    <h2 class="h2-title">wake up early, <span>eat fresh & healthy</span></h2>
                                    <div class="sec-title-shape mb-4">
                                        <img src="{{asset("user/assets/images/title-shape.svg")}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-tab-wp">
                            <div class="row">
                                <div class="col-lg-12 m-auto">
                                    <div class="menu-tab text-center">
                                        <ul class="filters">
                                            <div class="filter-active"></div>
                                            <li class="filter" data-filter="@foreach($categories as $category) '{{$category->name}}', @endforeach">
                                                {{-- <img src="{{asset("user/assets/images/menu-1.png")}}" alt=""> --}}
                                                All
                                            </li>
                                            @foreach($categories as $category )
                                            <li class="filter" data-filter=".{{$category->name}}">
                                                {{-- <img src="{{ $category->getFirstMediaUrl('category-image') ?: asset('user/assets/images/menu-3.png') }}" alt=""> --}}
                                                {{$category->name}}
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-list-row">
                            <div class="row g-xxl-5 bydefault_show" id="menu-dish">
                                @foreach ($products as $product )
                                <div class="col-lg-4 col-sm-6 dish-box-wp {{$product->category->name ?? 'all'}}" data-cat="{{$product->category->name ?? 'all'}}">
                                    <div class="dish-box text-center">
                                        <div class="dist-img">
                                            <img src="{{ $product->getFirstMediaUrl('product-image') ?: asset('admin/assets/img/product/noimage.png') }}" alt="">
                                        </div>
                                        <div class="dish-rating">
                                            5
                                            <i class="uil uil-star"></i>
                                        </div>
                                        <div class="dish-title">
                                            <h3 class="h3-title">{{$product->name ?? ''}}</h3>
                                            <p>{{substr($product->description ?? '', 0, 30)}}</p>
                                        </div>
                                        <div class="dish-info">
                                            <ul>
                                                @if (!empty($product->category))
                                                <li>
                                                    <p>Category</p>
                                                    <b>{{$product->category->name}}</b>
                                                </li>
                                                @endif

                                                <li>
                                                    <p>Count</p>
                                                    <b>2</b>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dist-bottom-row">
                                            <ul>
                                                <li>
                                                    <b>Price: {{$product->price ?? ''}} AZN</b>
                                                </li>
                                                <li>
                                                    <button class="dish-add-btn">
                                                        <i class="uil uil-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endif
    <x-user.restaurant.schedule :restaurant="$restaurant"/>

</x-user.layout>
