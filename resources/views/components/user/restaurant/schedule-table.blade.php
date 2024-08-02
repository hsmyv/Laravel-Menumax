@props(['restaurant', 'table', 'model'])
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="sec-title text-center mb-5">
                <p class="sec-sub-title mb-3">{{__("translate.Book Table")}}</p>
                <h2 class="h2-title">
                    @if($table == "Opening Table")
                        {{__("translate.Opening Table")}}
                    @elseif($table == "Delivery Table")
                    {{__("translate.Delivery Table")}}

                    @endif
                </h2>
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
                    <h3>{{__("translate.Monday")}}</h3>
                    <p>{{$model->monday}}</p>
                    <br>
                    <h3>{{__("translate.Tuesday")}}</h3>
                    <p>{{$model->tuesday}}</p>
                    <br>
                    <h3>{{(__("translate.Wednesday"))}}</h3>
                    <p>{{$model->wednesday}}</p>
                    <br>
                    <h3>{{__("translate.Thursday")}}</h3>
                    <p>{{$model->thursday}}</p>
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
                    <h3>{{__("translate.Friday")}}</h3>
                    <p>{{$model->friday}}</p>
                    <br>
                    <h3>{{__("translate.Saturday")}}</h3>
                    <p>{{$model->saturday}}</p>
                    <br>
                    <h3>{{__("translate.Sunday")}}</h3>
                    <p>{{$model->sunday}}</p>

                </div>
            </div>
        </div>
    </div>






</div>
