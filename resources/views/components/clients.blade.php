<div class="container">
    <div class="row">
        <h2 class="abt-title">Our Clients</h2>
        <div class="flex-ct">
            @forelse($clients as $key => $client)
            <div class="ct-img">
                <img src="{{$client->image}}">
            </div>
            @empty

            @endforelse

        </div>
    </div>
</div>
