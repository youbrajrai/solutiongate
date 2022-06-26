@forelse($heros as $key => $hero)
    <div class="mainimg-wrapper">
        <div class="img-full">
            <div class="main-text">
                <h2>{{$hero->title}}</h2>
                <p>{!!slice_words($hero->content , 20)!!}</p>
                <a href="{{route('hero.show',$hero->id)}}" class="default-btn">View More</a>
            </div>
            <div class="sd-img">
                <img class="img img-responsive" src="{{$hero->hero}}">
            </div>
        </div>
    </div>
@empty

@endforelse
