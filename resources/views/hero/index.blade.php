<x-app>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title pull-left"> Heros Table</h4>
                <a href="{{route('hero.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Heros
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>hero</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($heros as $hero)
                            <tr>
                                <td>{{$hero->title}}</td>
                                <td>{!!$hero->content!!}</td>
                                <td width="7%">
                                    <img src="{{$hero->hero}}" alt="">
                                </td>
                                <td width="14%">
                                    <form method="POST" action="{{ route('hero.destroy', $hero->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('hero.edit' , $hero->id)}}" class="btn btn-success btn-sm">
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
