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
                            <!-- {{@$about_us->content}} -->
                        Solution Gate Pvt Ltd. is a company located in Biratnagar specializing in the IT sector. We are especially working in the field of website design and software development in Nepal. Not only that, our other services include mobile app development, digital marketing and graphics designing. We are your best IT partner and believe that website and digital marketing are the only ways to promote growing businesses digitally. Our projects are fully successful in terms of time, cost, design, and performance.
                        </p
>                        <!-- <button class="custom-btn btn-3"><span>Read More</span></button> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="abt-pg-two mission">
        <x-missions />
    </section>


    <section class="team">
        <x-team />
    </section>



    <section class="client-sec" style="padding-top: 75px;">
        <x-clients />
    </section>
</x-show>
