<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Project Table</h4>
                <a href="{{route('project.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Projects
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Organization</th>
                                <th>Project Type</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($projects as $project)
                            <tr>
                                <td>{{$project->organization}}</td>
                                <td>{{$project->type}}</td>
                                <td width="10%">
                                    <img src="{{$project->image}}" alt="" style="max-width: 45%">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('project.destroy', $project->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <a href="{{route('project.edit' , $project->id)}}" class="btn btn-success btn-sm">
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
