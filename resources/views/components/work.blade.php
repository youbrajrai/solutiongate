<div class="container">
    <div class="sec-title">
        <h2>Process</h2>
        <h3>How we work</h3>
    </div>
    <div class="row">
        @forelse($works as $key => $work)
        <div class="col-md-3 col-sm-3">
            <div class="single-box">
                <span>0{{$key+1}}</span>
                <h3>{{$work->title}}</h3>
                <p>{!!$work->content!!}</p>
            </div>
        </div>
        @empty

        @endforelse
    </div>
</div>
