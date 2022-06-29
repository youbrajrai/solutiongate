<x-show>
    @section('header' , 'Details')
    <section class="packages">
        <div class="container">
            <div class="row">
                @foreach($details as $key => $detail)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">
                            {{$detail}}
                            {{-- <div class="single-img">
                                
                                
                                    <div>
                                        <div>
                                            <h5>{{$detail->title}}</h5>
                                            {!!$detail->description!!}
                                        </div>
                                    </div>
                                
                            </div> <!-- /.single-img --> --}}
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
</x-show>
