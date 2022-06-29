<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Clients Table</h4>
                <a href="{{route('client.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Clients
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($clients as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td>{{$client->description}}</td>
                                <td width="7%">
                                    <img src="{{$client->image}}" alt="">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('client.destroy', $client->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('client.edit' , $client->id)}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app>
