<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="foot-box">
                    <img src="{{asset('images/foot-logo.png')}}">
                    <p>Solution Gate Pvt Ltd. is a company located in Biratnagar specializing in the IT sector. We are especially working in the field of website design and software development in Nepal.</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="foot-box">
                    <h3 class="foot-title">Quick Links</h3>
                    <ul class="foot-items">
                        <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="{{route('portfolio')}}">Portfolios</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="foot-box">
                    <h3 class="foot-title">Services</h3>
                    <ul class="foot-items">
                        @forelse($services as $key => $service)
                            <li><a href="{{route('service.show' , $service->id)}}">{{$service->title}}</a></li>
                        @empty
                        @endforelse

                    </ul>
                </div>
            </div>


            <div class="col-md-3 col-sm-3">
                <div class="foot-box">
                    <h3 class="foot-title">Contact Us</h3>
                    <ul class="foot-ct">
                        <li><i class="fas fa-map-marker"></i><a href="#">Biratnagar-11, Janpath Tole, Nepal</a></li>
                        <li><a href="tel:+9779862004936, +9779880976769"><i class="fa fa-phone"></i> 9862004936,
                                9825028818</a>, <a href="tel:"></a></li>
                        <li><a href="mailto:info@softbenz.com"><i class="fa fa-envelope"></i> solutiongate.sg@gmail.com</a>
                        </li>
                    </ul>
                    <x-social-link></x-social-link>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="foot-bottom">
    <h4>© 2021 Solution Gate Pvt. Ltd. All Rights Reserved.</h4>
</div>
