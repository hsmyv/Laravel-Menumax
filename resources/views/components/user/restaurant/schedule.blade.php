@props(['restaurant'])
<section class="book-table section bg-light">
    <div class="book-table-shape">
        <img src="{{asset("user/assets/images/table-leaves-shape.png")}}" alt="">
    </div>

    <div class="book-table-shape book-table-shape2">
        <img src="{{asset("user/assets/images/table-leaves-shape.png")}}" alt="">
    </div>

    <div class="sec-wp">
    <x-user.restaurant.schedule-table :restaurant="$restaurant" :table="'Opening Table'" :model="$restaurant->openingTime"/>

        <x-user.restaurant.gallery :restaurant="$restaurant"/>

        <br>
        <br>
        <br>
        <x-user.restaurant.schedule-table :restaurant="$restaurant" :table="'Delivery Table'" :model="$restaurant->deliveryInformation"/>





    </div>

</section>
