<x-admin.layout>


@if (auth('admin')->user()->role == 0)
<div class="page-wrapper">
    <div class="content">
    <div class="row">
    @foreach ($restaurants as $restaurant)
        <div class="col-lg-3 col-sm-6 col-12 d-flex rName" data-id="{{$restaurant->id}}">
            <div class="dash-count">
                <div class="dash-counts">
                    <h4>{{$restaurant->name}}</h4>
                    <h5>{{$restaurant->phone}}</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="award"></i>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>
@else

<div class="page-wrapper">
    <div class="content">
    <div class="page-header">
    <div class="page-title">
    <h4>Customer list</h4>
    <h6>View/Search Customer</h6>
    </div>
    {{-- <div class="page-btn">
    <a href="{{route('admins.create')}}" class="btn btn-added">
    <img src="{{asset("admin/assets/img/icons/plus.svg")}}" class="me-1" alt="img">Add Customer
    </a>
    </div> --}}
    </div>

    <div class="card">
    <div class="card-body">
    {{-- <div class="table-top">
        <div class="search-set">
            <div class="search-path">
            <a class="btn btn-filter" id="filter_search">
            <img src="{{asset("admin/assets/img/icons/filter.svg")}}" alt="img">
            <span><img src="{{asset("admin/assets/img/icons/closes.svg")}}" alt="img"></span>
            </a>
            </div>
            <div class="search-input">
            <a class="btn btn-searchset"><img src="{{asset("admin/assets/img/icons/search-white.svg")}}" alt="img"></a>
            </div>
        </div>
        <div class="wordset">
        <ul>
        <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{asset("admin/assets/img/icons/pdf.svg")}}" alt="img"></a>
        </li>
        <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{asset("admin/assets/img/icons/excel.svg")}}" alt="img"></a>
        </li>
        <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{asset("admin/assets/img/icons/printer.svg")}}" alt="img"></a>
        </li>
        </ul>
        </div>
    </div>

    <div class="card" id="filter_inputs">
        <div class="card-body pb-0">
        <div class="row">
        <div class="col-lg-2 col-sm-6 col-12">
        <div class="form-group">
        <select class="select">
        <option>Choose Category</option>
        <option>Computers</option>
        </select>
        </div>
        </div>
        <div class="col-lg-2 col-sm-6 col-12">
        <div class="form-group">
        <select class="select">
        <option>Choose Sub Category</option>
        <option>Fruits</option>
        </select>
        </div>
        </div>
        <div class="col-lg-2 col-sm-6 col-12">
        <div class="form-group">
        <select class="select">
        <option>Choose Sub Brand</option>
        <option>Iphone</option>
        </select>
        </div>
        </div>
        <div class="col-lg-1 col-sm-6 col-12 ms-auto">
        <div class="form-group">
        <a class="btn btn-filters ms-auto"><img src="{{asset("admin/assets/img/icons/search-whites.svg")}}" alt="img"></a>
        </div>
        </div>
        </div>
        </div>
    </div> --}}

    <div class="table-responsive">
    <table class="table  datanew">
    <thead>
    <tr>
    <th>
    <label class="checkboxs">
    <input type="checkbox" id="select-all">
    <span class="checkmarks"></span>
    </label>
    </th>
    @if(session()->has('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Warning!</strong> {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <th>Name</th>
    <th>Email</th>
    <th>Username</th>
    <th>Status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($admins->where('role', '!=', 1) as $admin)
        <tr>
            <td>
            <label class="checkboxs">
            <input type="checkbox">
            <span class="checkmarks"></span>
            </label>
            </td>
            <td class="productimgname">
            <a href="javascript:void(0);" class="product-img">
            <img src="{{ $admin->getFirstMediaUrl('admin-image') ?: asset('admin/assets/img/product/noimage.png') }}" alt="product">
            </a>
            <a href="{{route('admins.edit', $admin)}}">{{$admin->name}}</a>
            </td>
            <td>{{$admin->email}}</td>
            <td>{{$admin->username}}</td>
            <td>
                <div class="status-toggle d-flex justify-content-between align-items-center">
                    <input type="checkbox" id="status{{$admin->id}}" class="check" {{$admin->status ? 'checked' : ''}} data-admin-id="{{$admin->id}}">
                    <label for="status{{$admin->id}}" class="checktoggle">checkbox</label>
                </div>
            </td>
            <td>
            <a class="me-3" href="{{route('admins.edit', $admin)}}">
            <img src="{{asset("admin/assets/img/icons/edit.svg")}}" alt="img">
            </a>
            <form action="{{route('admins.destroy', $admin)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
            <button style="border: none; background: none; padding: 0; margin: 0; cursor: pointer;" type="submit">
            <img src="{{asset("admin/assets/img/icons/delete.svg")}}" alt="img">
            </button>
            </form>
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>




</div>
@endif

</x-admin.layout>

<script>
    $(document).ready(function() {
        $('.rName').on('click', function() {
            var restaurantId = $(this).data('id');
            window.location.href = '{{ url('admin/restaurants') }}/' + restaurantId + '/edit';
        });

        $('.aName').on('click', function() {
            var adminId = $(this).data('id');
            window.location.href = '{{ url('admins') }}/' + adminId;
        });
    });
</script>

<script>
    $(document).ready(function() {
    $('.check').click(function() {
        var adminId = $(this).data('admin-id');
        var newStatus = $(this).prop('checked') ? 1 : 0;

        $.ajax({
            url: '/admin/update-admin-status',
            method: 'POST',
            data: {
                adminId: adminId,
                newStatus: newStatus,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
</script>
