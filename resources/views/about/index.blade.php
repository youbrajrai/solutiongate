<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> About Us Table</h4>
                <a href="{{route('about.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add About Us
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Is Current</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($about_us as $about)
                            <tr>
                                <td>{{$about->title}}</td>
                                <td>{{$about->content}}</td>
                                <td>{{$about->is_current}}</td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('about.destroy', $about->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('about.edit' , $about->id)}}" class="btn btn-success btn-sm">
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
