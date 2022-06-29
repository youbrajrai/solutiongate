<x-app>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Categories</h5>
            </div>
            <div class="card-body">
                <form action="{{route('categories.update',$categories->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- @method('PATCH') --}}
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$categories->title}}" name="title" placeholder="Title" value="{{old('title')}}">
                                @error('title')
                                <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            </div>
                        </div>
                    </div>

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
</x-app>
