<x-app>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Add Product Details</h5>
            </div>
            <div class="card-body">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{old('title')}}">
                                @error('title')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Parent Category </label>
                                <select class="form-control" name="category" id="category">
                                    <option value="0">Category Name</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                  </select>
                                @error('category_id')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Parent Sub Category </label>
                                <select class="form-control" name="subcategory" id="subcategory">
                                    <option value="">Subcategory Name</option>
                                  </select>
                                @error('category_id')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>                                                   
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Descriptions</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor" placeholder="Content">{{old('content')}}</textarea>
                                @error('content')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Choose Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="ml-3">
                        <button type="button" name="" id="" class="btn btn-secondary">More details</button>
                        </div>
                    </div> --}}

                    @if(Session::has('message'))
                    <span class="text-success">
                        <p>{{ Session::get('message') }}</p>
                    </span>
                    @endif
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
@push('change-script')
  <script>
    $(document).ready(function(){
        $(document).on('change','#category',function(){
            // console.log("change happenn");
            var cat_id = $(this).val();
            var div = $(this).parent();
            // console.log(div);
            var op = '';
            // console.log(cat_id);
            $.ajax({
                type : 'get',
                url : "{{route('findSubcategory')}}",
                data : {'id':cat_id},
                success : function(data){
                    // console.log("sucess");
                    // console.log(data);
                    op+= '<option value="0" selected disabled>Select Sub Category</option>';
                    for(var i = 0;i<data.length;i++){
                        op+='<option value="'+data[i].id+'">'+data[i].title+'</option>';
                    }
                    document.getElementById("subcategory").innerHTML = op;
                },
                error:function(data){

                }
            });
        });
    });
  </script>  

@endpush
</x-app>
