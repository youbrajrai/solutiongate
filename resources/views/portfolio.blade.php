<x-show>
    @section('header' , 'Portfolio')
    <section class="portfolio">
        <div class="container">
            <div class="row">
                @forelse($projects as $key => $project)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">
                            <div class="single-img">
                                <img class="img img-responsive" src="{{$project->image}}" alt="Image">
                                <a href="{{route('project.show' ,$project->id)}}" class="opacity">
                                    <div>
                                        <div>
                                            <h5>{{$project->organization}}</h5>
                                            <p>{{$project->type}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- /.single-img -->
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
</x-show>
