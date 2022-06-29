<div class="side-wrapper">
    <h2 class="abt-title">Services</h2>
    <ul class="serv-list">
        @forelse($services as $service)
            <li><a href="{{route('service1' ,$service->id)}}">{{$service->title}}</a></li>
        @empty
        @endforelse
    </ul>
</div>
