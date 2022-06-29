<section id="trailer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="trailer-des">
                    <h1>Showcase</h1>
                </div>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @forelse($showcases  as $showcase)
                            <div class="swiper-slide">
                                <img class="img img-responsive" src="{{asset('showcases/poster/'.$showcase->poster)}}">
                                <div class="poster-view">
                                    <h3>{{$showcase->name}}</h3>
                                    <a class="post-btn" href="{{route('showcases.show' , $showcase->id)}}">
                                        View Trailer
                                    </a>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
