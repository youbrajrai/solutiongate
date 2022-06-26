<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Products Table</h4>
                <a href="{{route('product.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add product
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th width="25%">Title</th>
                                <th width="25%">Parent Category</th>
                                <th width="25%">Parent Subcategory</th>
                                <th width="25%">Image</th>
                                <th width="25%">Details</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                            <tr>
                                <td>{{$product->title}}</td>
                                <td>
                                    @if($product->category_id)
                                    {{$product->category->title}}
                                    @endif
                                </td>
                                <td>
                                    @if($product->subcategory_id)
                                    {{$product->subcategory->title}}
                                    @endif
                                </td>                                
                                <td width="12%">
                                    <img src="{{asset('images/products/'.$product->image)}}">
                                </td>
                                <td width="12%" style="text-align: center">
                                    <a href="{{route('product.extraDetails' , $product->id)}}" class="btn btn-primary btn-sm ">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>                                
                                <td width="14%">
                                    <form method="POST" action="{{ route('product.destroy', $product->id) }}" class="pull-left mr-4">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('product.edit' , $product->id)}}" class="btn btn-success btn-sm">
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
