<x-show>
    @section('header' , '')
    <section class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="first-container">
                        <div class="single-img">
                            <img class="img img-responsive" src="{{$project->image}}">
                        </div>
                        <h2>{{$project->organization}}</h2>

                        <div class="entry-content">
                            <p>{{$project->type}}</p>
                             <p>{!!$project->content!!}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 sticky">
                    <div class="side-wrapper">
                        <h2 class="abt-title">Portfolio</h2>
                        <div class="grid-item">
                            <div class="single-img">
                                <img class="img img-responsive" src="{{$project->image}}" alt="Image">
                                <a href="{{route('portfolio')}}" class="opacity">
                                    <div>
                                        <div>
                                            <h5>View Portfolio</h5>
                                            <p></p><!--<p>{{$project->organization}}</p>-->
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- /.single-img -->
                        </div>
                    </div>
                    <div class="side-wrapper">
                        <h2 class="abt-title">Services</h2>
                        <ul class="serv-list">
                            @forelse($services as $service)
                                <li><a href="{{route('service.show' , $service->id)}}">{{$service->title}}</a></li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                    <x-working></x-working>
                    <div class="side-wrapper">
                        <h2 class="abt-title">Follow:</h2>
                        <x-social-link></x-social-link>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-show>
