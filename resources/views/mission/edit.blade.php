<x-app>
    <div class="col-md-12">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Mission & Vision</h5>
            </div>
            <div class="card-body">
                <form action="{{route('mission.update' , $mission->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Type</label>
                                <select type="text" class="form-control @error('type') is-invalid @enderror" name="type">
                                    <option value="Mission" {{$mission->type=='Mission'? 'selected':''}}>Mission</option>
                                    <option value="Vision" {{$mission->type=='Vision'? 'selected':''}}>Vision</option>
                                </select>
                                @error('type')
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
                                <label>Content</label>
                                <input type="text" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Scarlett Johansson , Chris Hemsworth Karen Gillan ... ete." value="{{$mission->content}}" required>
                                @error('content')
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
