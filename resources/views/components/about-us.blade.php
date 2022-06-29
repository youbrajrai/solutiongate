<div class="container">
    <div class="sec-title">
        <h2> <span> ABOUT US</h2>
        <h3>Know more about us</h3>
    </div>
    <div class="row">
        <div class="col-md-7 col-sm-7">
            <div class="abt-wrap">
                <div class="abt-title">
                    <h2>Why Choose Us ?</h2>
                </div>

                @forelse($about_us as $key => $about)
                <button class="accordion">{{$about->title}}</button>
                <div class="panel">
                    <p>{!!$about->content!!}</p>
                </div>
                @empty

                @endforelse
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
            <div class="abt-wrapper">
                <div class="abt-img">
                    <img class="img img-responsive" src="{{asset('images/slide-2.png')}}">
                </div>
                <!-- <div class="rd-img">
					<img class="img img-responsive" src="assets/image/abtrd.png">
				</div> -->
            </div>
        </div>
    </div>
</div>
