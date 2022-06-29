<x-app>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('images/damir-bosnjak.jpg')}}" alt="...">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray"
                             src="{{$user->avatar}}" alt="...">
                        <h5 class="title">{{$user->name}}</h5>
                    </a>
                    <p class="description">
                        {{$user->email}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form action="{{route('profile.update' , $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Jon Doe.."
                                       value="{{$user->name}}">
                            </div>
                            @error('name')
                            <span class="text-danger" role="alert">
                                <p>{{ $message }}</p>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                       value="{{$user->email}}">
                            </div>
                            @error('email')
                            <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" class="form-control" name="avatar">
                            </div>
                            @error('avatar')
                            <span class="text-danger" role="alert">
                                    <p>{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @if(Session::has('message'))
                        <span class="text-success">
                            <p>{{ Session::get('message') }}</p>
                        </span>
                    @endif
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app>
