<x-show>
    @section('header' , 'About Us')
    <section class="abt-pg-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="abt-pg-img">
                        <img class="fst-img" src="{{asset('images/abt-1.jpg')}}" alt="pic">
                        <!-- <img class="snd-img" src="assets/image/bookbar.png" alt="icon"> -->
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="abt-pg-des">
                        <h2 class="abtp-title">About Us</h2>
                        <p>
                            {{$about_us->content}}
                        </p>
                        <!-- <button class="custom-btn btn-3"><span>Read More</span></button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="abt-pg-two mission">
        <div class="container-fluid pd-0">
            <div class="row">
                <div class="col-md-6 pd-0">
                    <div class="mission-back"></div>
                </div>
                <div class="col-md-6">
                    <div class="mission-des">
                        <h2 class="abt-title">Our Mission</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mission-des marg-auto">
                        <h2 class="abt-title">Our Vision</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummyLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
                </div>
                <div class="col-md-6 pd-0">
                    <div class="vision-back"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h2 class="abtp-title">Meet Our Team</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="assets/image/team1.jpg">
                            <ul class="social-links">
                                <li class="social-facebook">
                                    <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="assets/image/team2.jpg">
                            <ul class="social-links">
                                <li class="social-facebook">
                                    <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="assets/image/team3.jpg">
                            <ul class="social-links">
                                <li class="social-facebook">
                                    <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="team-wrapper">
                        <div class="team-img">
                            <img src="assets/image/team3.jpg">
                            <ul class="social-links">
                                <li class="social-facebook">
                                    <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-instagram"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Instagram"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="client-sec" style="padding-top: 75px;">
        <div class="container">
            <div class="row">
                <h2 class="abt-title">Our Clients</h2>
                <div class="flex-ct">
                    <div class="ct-img">
                        <img src="assets/image/pt1.png">
                    </div>
                    <div class="ct-img">
                        <img src="assets/image/pt2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-show>
