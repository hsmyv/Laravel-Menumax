<x-admin.layout>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Customer's Restaurants</h4>
<p class="card-text">
    You can see customer's restaurants</p>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table  datanew ">
<thead>
<tr>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Website</th>
<th>Delivery fee</th>
<th>Status</th>
</tr>
</thead>
<tbody>
    @foreach ($customer->restaurants as $restaurant)
        <tr>
        <td><a href="{{route('restaurants.show', $restaurant)}}">{{ $restaurant->name ?? ''}}</a></td>
        <td>{{$restaurant->address ?? ''}}</td>
        <td>{{$restaurant->phone ?? ''}}</td>
        <td>{{$restaurant->website ?? ''}}</td>
        <td>{{$restaurant->delivery_fee ?? ''}}</td>
        <td>
            <div class="status-toggle d-flex justify-content-between align-items-center">
                <input type="checkbox" id="status{{$restaurant->id}}" class="check" {{$restaurant->status ? 'checked' : ''}} data-restaurant-id="{{$restaurant->id}}">
                <label for="status{{$restaurant->id}}" class="checktoggle">checkbox</label>
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
        var restaurantId = $(this).data('restaurant-id');
        var newStatus = $(this).prop('checked') ? 1 : 0;

        $.ajax({
            url: '/admin/update-restaurant-status',
            method: 'POST',
            data: {
                restaurantId: restaurantId,
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
