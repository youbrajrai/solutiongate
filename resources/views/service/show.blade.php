<x-show>
    <section class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="first-container">
                        <div class="single-img">
                            <img class="img img-responsive" src="{{$service->image}}">
                        </div>
                        <h2>{{$service->title}}</h2>

                        <div class="entry-content">

                            <p>{!!$service->content!!}</p>


                           <!--  <ul class="wp-gallery">
                                <li>
                                    <img width="1024" height="683"
                                         src="https://anno.softhopper.studio/wp-content/uploads/2020/05/post-06-1024x683.jpg"
                                         alt="">
                                </li>
                                <li>
                                    <img width="800" height="800"
                                         src="https://anno.softhopper.studio/wp-content/uploads/2020/06/7.jpg" alt="">
                                </li>
                                <li>
                                    <img width="800" height="800"
                                         src="https://anno.softhopper.studio/wp-content/uploads/2020/06/9.jpg" alt="">
                                </li>
                            </ul>
 -->
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
                        <x-social-link services="services"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-show>

