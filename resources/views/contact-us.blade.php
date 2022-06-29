<x-show>
    @section('header' , 'Contact Us')

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4>Phone</h4>
                            <p>9862004936</p>
                            <p>9825028818</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>E-mail</h4>
                            <p>solutiongate.sg@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-box">
                        <div class="icon">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="content">
                            <h4>Location</h4>
                            <p>Buspark, Janpath Tole<span>Biratnagar, Nepal</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row form-box">
                <div class="col-md-7">
                    <h5><i class="fa fa-map"></i> Location</h5>
                    <div class="map-card" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="card-body p-4">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3572.1061189338325!2d87.26763821451064!3d26.452308086127264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef752b82ea5f03%3A0x15ca22a0364e7f4a!2sSolution%20Gate!5e0!3m2!1sen!2snp!4v1624804561040!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h5><i class="fa fa-envelope"></i> Send Message</h5>
                    @if(Session::has('message'))
                    <span class="text-success">
                        <p>{{ Session::get('message') }}</p>
                    </span>
                    @endif
                    <div class="contact-card">
                        <div class="card-body">
                            <form action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name" value="{{old('title')}}">
                                    <div class="srch-icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    @error('name')
                                    <span class="text-danger" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email address" value="{{old('title')}}">
                                    <div class="srch-icon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    @error('email')
                                    <span class="text-danger" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control @error('title') is-invalid @enderror large-box" name="message" placeholder="Message">{{old('message')}}</textarea>
                                    <div class="srch-icon">
                                        <i class="fas fa-pencil-alt"></i>
                                    </div>
                                    @error('message')
                                    <span class="text-danger" role="alert">
                                        <p>{{ $message }}</p>
                                    </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-default"> Submit Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-show>
