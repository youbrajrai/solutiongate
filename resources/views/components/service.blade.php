<div class="container">
    <div class="sec-title">
        <h2>Our Services</h2>
        <h3>Services that makes your business more profitable</h3>
    </div>
    <div class="row">
        @forelse($services as $key => $service)
        <div class="col-md-4 col-sm-6">
            <div class="service-block">
                <a href="{{route('service.show' , $service->id)}}">
                    <div class="icon-outer">
                        <img src="{{$service->image}}" alt="" title="">
                    </div>
                    <div class="box-text">
                        <h3>{{$service->title}}</h3>
                        <p>{!!slice_words($service->content , 20)!!}</p>
                    </div>
                </a>
            </div>
        </div>
        @empty

        @endforelse
       <!--  <div class="col-md-12 col-sm-12 new-btn">
            <button class="custom-btn btn-3"><span>Read More</span></button>
        </div> -->
    </div>
</div>
