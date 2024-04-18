<x-admin.layout>

<div class="page-wrapper">
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Social Network list</h4>
                <h6>View Social Network</h6>
            </div>
            <div class="page-btn">
                <a href="{{route('social-networks.create',$restaurant)}}" class="btn btn-added">
                    <img src="{{asset("admin/assets/img/icons/plus.svg")}}" class="me-1" alt="img">Add Social Network
                </a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
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
                            <th>Restaurant</th>
                            <th>Social Network</th>
                            <th>URL</th>
                            <th>Status</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($socialNetworks as $socialNetwork)
                            <tr>
                                <td>{{$socialNetwork->restaurant->name}}</td>
                                <td>@if (strpos($socialNetwork->url, 'facebook.com') !== false) facebook @elseif (strpos($socialNetwork->url, 'instagram.com') !== false) instagram @elseif(strpos($socialNetwork->url, 'youtube.com') !== false) youtube @endif</td>
                                <td>{{$socialNetwork->url}}</td>
                                <td>
                                    <div class="status-toggle d-flex justify-content-between align-items-center">
                                        <input type="checkbox" id="status{{$socialNetwork->id}}" class="check" {{$socialNetwork->status ? 'checked' : ''}} data-socialNetwork-id="{{$socialNetwork->id}}">
                                        <label for="status{{$socialNetwork->id}}" class="checktoggle">checkbox</label>
                                    </div>
                                </td>
                                <td>
                                <a class="me-3" href="{{route('social-networks.edit', [$restaurant, $socialNetwork])}}">
                                <img src="{{asset("admin/assets/img/icons/edit.svg")}}" alt="img">
                                </a>
                                <form action="{{route('social-networks.destroy', [$restaurant, $socialNetwork])}}" method="POST" style="display: inline">
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


</x-admin.layout>

<script>
        $(document).ready(function() {
        $('.check').click(function() {
            var socialNetworkId = $(this).data('socialNetwork-id');
            var newStatus = $(this).prop('checked') ? 1 : 0;

            $.ajax({
                url: '/admin/update-socialNetwork-status',
                method: 'POST',
                data: {
                    socialNetworkId: socialNetworkId,
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
