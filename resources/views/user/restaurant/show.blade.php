<x-user.layout>


<x-user.restaurant.about :restaurant="$restaurant"/>

<style>
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 8px;
        z-index: 1000;
        display: none;
    }
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
        display: none;
    }
</style>
<div class="overlay" id="overlay"></div>

    <div id="popup" class="popup col-lg-4 col-sm-6 dish-box-wp">
        <div class="dish-box text-center">
            <div class="dist-img" id="productImg">
            </div>
            <div class="dish-title" id="productName">

            </div>
            <div class="dish-info" id="productDetails">

            </div>

            <div class="dist-bottom-row" id="productCount">
            </div>
            <button onclick="closePopup()" class="checkoutButton-add-btn">Close</button>
            <button onclick="order()" class="checkoutButton-add-btn">Order</button>

        </div>
    </div>
@if(!$products->isEmpty())
    <section style="background-image: url({{asset("user/assets/images/menu-bg.png")}});"
                class="our-menu section bg-light repeat-img" id="menu">
                <div class="sec-wp">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title text-center mb-5">
                                    <p class="sec-sub-title mb-3">{{__("translate.our menu")}}</p>
                                    <h2 class="h2-title">{{__("translate.wake up early")}}, <span>{{__("translate.eat fresh & healthy")}}</span></h2>
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
                                <x-user.restaurant.products :product="$product"/>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
    </section>
@endif


    <x-user.restaurant.schedule :restaurant="$restaurant"/>

</x-user.layout>


<script>
    var count = 1; // Initial count
    var price = 0; // Product price
    var prdctId = 0;
    function openPopup(name, description, category, productPrice, imageUrl, productId) {
        document.getElementById("overlay").style.display = "block";
        document.getElementById("popup").style.display = "block";
        prdctId = productId;

        price = productPrice; // Update the price

        var productImg = `<img src="${imageUrl}" alt="">`;
        var productName = `<h3 class="h3-title">${name}</h3><p>${description}</p>`;
        var productDetails = `<ul><li><p>Category</p><b>${category}</b></li><li><p>Price</p><b id="productPrice">${price} AZN</b></li></ul>`;
        var productCount = `<ul><li><b>${count}</b></li><li><button class="dish-add-btn" onclick="increaseCount()"><i class="uil uil-plus"></i></button></li></ul>`;

        document.getElementById("productDetails").innerHTML = productDetails;
        document.getElementById("productName").innerHTML = productName;
        document.getElementById("productImg").innerHTML = productImg;
        document.getElementById("productCount").innerHTML = productCount;
    }

    function closePopup() {
        document.getElementById("overlay").style.display = "none";
        document.getElementById("popup").style.display = "none";
        count = 1;
        price = 0;
        prdctId = 0;
    }

    function increaseCount() {
        count++;
        updateProductDetails();
    }

    function updateProductDetails() {
        document.getElementById("productCount").innerHTML = `<ul><li><b>${count}</b></li><li><button class="dish-add-btn" onclick="increaseCount()"> + <i class="uil uil-plus"></i></button></li></ul>`;
        // Update price
        var totalPrice = count * price;
        var roundedPrice = Math.round(totalPrice * 100) / 100; // Round to two decimal places
        document.getElementById("productPrice").textContent = `${roundedPrice.toFixed(2)} AZN`;
    }

    function order() {
    var totalPrice = count * price;
    totalPriceForRequest = Math.round(totalPrice * 100) / 100

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $.post("/send-order", {
    productId: prdctId,
    totalPrice: totalPriceForRequest,
    count: count
    })
    .done(function(response) {
        window.location.href = response.whatsappLink;
    })
    .fail(function(error) {
        console.error("Error sending order:", error);
    });


    closePopup();
    }



</script>
