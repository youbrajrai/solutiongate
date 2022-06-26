<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Sub-Category Table</h4>
                <a href="{{route('subcategory.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add SubCategory
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th width="25%">Title</th>
                                <th width="25%">Parent Category</th>
                                <th width="25%">Icon</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($subcategories as $subcategory)
                            <tr>
                                <td>{{$subcategory->title}}</td>
                                <td>
                                    @if($subcategory->category_id)
                                    {{$subcategory->parent->title}}
                                    @endif
                                </td>
                                <td width="12%">
                                    <img src="{{asset('images/subcategories/'.$subcategory->image)}}">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('subcategory.destroy', $subcategory->id) }}" class="pull-left mr-4">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('subcategory.edit' , $subcategory->id)}}" class="btn btn-success btn-sm">
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
