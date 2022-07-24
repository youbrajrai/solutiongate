<x-show>
    @section('header' , 'Details')
    <section class="single-page">
        <div class="container">
            <div class="row">
                @if($details!="No Data")       
                @for($i=0;$i<count($details[0]['details']);$i++)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">   
                            <div class="d-flex jusify-content">
                                <h5>{{$details[0]['title'][$i]}}</h5>
                                <textarea readonly rows="10" cols="40">{!!$details[0]['details'][$i]!!}</textarea>
                            </div>                                                               
                        </div>
                    </div>
                </div>
                @endfor
                @else
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">   
                                <h2 style="text-align: center">{{$details}}</h2>                                                              
                        </div>
                    </div>
                </div>                
                @endif
            </div>
        </div>
    </section>
    
</x-show>
