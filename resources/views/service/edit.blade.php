<x-app>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit service</h5>
            </div>
            <div class="card-body">
                <form action="{{route('service.update' , $service->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{$service->title}}">
                                @error('title')
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
                                <label>content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor" placeholder="content">{{$service->content}}</textarea>
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
