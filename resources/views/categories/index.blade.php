<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Category Table</h4>
                <a href="{{route('categories.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Categories
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categories as $category)
                            <tr>
                                <td>{{$category->title}}</td>
                                <td width="10%">
                                    <img src="{{asset('images/categories/'.$category->image)}}">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}" class="pull-left mr-4">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success btn-sm">
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
