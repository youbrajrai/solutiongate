<section class="navigation">
    <div class="container">
        <div class="nav-logo pull-left">
            <a href="{{url('/')}}"><img class="img img-responsive" src="{{asset('images/logo.PNG')}}"></a>
        </div>
        <div id="cssmenu" class="pull-right">
            <ul class="navbar-right">
                <li><a href="{{url('/')}}" class="{{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
                <li><a href="" class="{{ (request()->is('')) ? 'active' : '' }}">Packages</a></li>
                <li><a href="{{route('about-us')}}" class="{{ (request()->is('about-us')) ? 'active' : '' }}">About Us</a></li>
                <li>
                    <a href="#">Services</a>
                    <ul class="drop">
                        @forelse($services as $key => $service)
                        <li><a href="{{route('service.show' , $service->id)}}">{{$service->title}}</a></li>
                        @empty

                        @endforelse
                    </ul>
                </li>
                <li><a href="{{route('portfolio')}}" class="{{ (request()->is('portfolio')) ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{route('contact-us')}}" class="{{ (request()->is('contact-us')) ? 'active' : '' }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</section>
