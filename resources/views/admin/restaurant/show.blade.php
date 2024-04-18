<x-admin.layout>

    <div class="page-wrapper">
    <div class="content container-fluid">

    <div class="row">
    <div class="col-sm-12">
    <div class="card">
    <div class="card-header">
    <h4 class="card-title">Restaurant's Products</h4>
    <p class="card-text">
        You can see restaurant's products</p>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table  datanew ">
    <thead>
    <tr>
    <th>Restaurant</th>
    <th>Category</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($restaurant->products as $product)
            <tr>
            <td>{{$product->restaurant->name ?? ''}}</td>
            <td>{{optional($product->category)->name ?? ''}}</td>
            <td>{{$product->name ?? ''}}</td>
            <td>{{$product->price ?? ''}}</td>
            <td>{{substr($product->description ?? 'No Description', 0, 15)}}</td>
            <td>
                <div class="status-toggle d-flex justify-content-between align-items-center">
                    <input type="checkbox" id="status{{$product->id}}" class="check" {{$product->status ? 'checked' : ''}} data-product-id="{{$product->id}}">
                    <label for="status{{$product->id}}" class="checktoggle">checkbox</label>
                </div>
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
    </div>


    </x-admin.layout>
    <script>
        $(document).ready(function() {
        $('.check').click(function() {
            var productId = $(this).data('product-id');
            var newStatus = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: '/admin/update-product-status',
                method: 'POST',
                data: {
                    productId: productId,
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
