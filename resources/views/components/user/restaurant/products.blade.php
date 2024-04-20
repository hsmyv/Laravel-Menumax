@props(['product'])

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
                    <button onclick="openPopup('{{$product->name}}', '{{$product->description}}', '{{$product->category->name}}', '{{$product->price}}', '{{ $product->getFirstMediaUrl('product-image') ?: asset('admin/assets/img/product/noimage.png') }}', '{{$product->id}}' )" class="dish-add-btn">
                        <i class="uil uil-plus"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

