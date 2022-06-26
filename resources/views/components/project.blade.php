<div class="sec-title">
    <h2>OUR Work</h2>
    <h3>Recent Projects</h3>
</div>
<div class="container">
    <div class="row">
        @forelse($projects as $key => $project)
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="side-wrapper">
                <div class="grid-item">
                    <div class="single-img">
                        <img class="img img-responsive" src="{{$project->image}}" alt="">
                        <a href="{{route('project.show' , $project->id)}}" class="opacity">
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
        <!-- <div class="col-md-12 col-sm-12 col-xs-12 new-btn" align="center" style="margin-top: 30px;">
            <button class="custom-btn"><span>View All</span></button>
        </div> -->
    </div>
</div>
