<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Team Table</h4>
                <a href="{{route('team.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Teams
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Linkedin</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teams as $team)
                            <tr>
                                <td>{{$team->name}}</td>
                                <td>{{$team->designation}}</td>
                                <td>{{$team->facebook}}</td>
                                <td>{{$team->twitter}}</td>
                                <td>{{$team->instagram}}</td>
                                <td>{{$team->linkedin}}</td>
                                <td width="7%">
                                    <img src="{{$team->image}}" alt="">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('team.destroy', $team->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('team.edit' , $team->id)}}" class="btn btn-success btn-sm">
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
