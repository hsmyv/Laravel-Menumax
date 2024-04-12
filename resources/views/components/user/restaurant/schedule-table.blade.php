@props(['restaurant', 'table'])
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="sec-title text-center mb-5">
                <p class="sec-sub-title mb-3">Book Table</p>
                <h2 class="h2-title">{{$table}}</h2>
                <div class="sec-title-shape mb-4">
                    <img src="{{asset("user/assets/images/title-shape.svg")}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="book-table-info">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="table-title text-center">
                    <h3>Monday</h3>
                    <p>9:00 am - 22:00 pm</p>
                    <br>
                    <h3>Tuesday</h3>
                    <p>9:00 am - 22:00 pm</p>
                    <br>
                    <h3>Wednesday</h3>
                    <p>9:00 am - 22:00 pm</p>
                    <br>
                    <h3>Thrusday</h3>
                    <p>9:00 am - 22:00 pm</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="call-now text-center">
                    <i class="uil uil-phone"></i>
                    <a href="tel:+91-8866998866">{{$restaurant->phone}}</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="table-title text-center">
                    <h3>Friday</h3>
                    <p>9:00 am - 22:00 pm</p>
                    <br>
                    <h3>Saturday</h3>
                    <p>9:00 am - 22:00 pm</p>
                    <br>
                    <h3>Sunday</h3>
                    <p>9:00 am - 22:00 pm</p>

                </div>
            </div>
        </div>
    </div>






</div>
