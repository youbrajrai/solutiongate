<x-show>
    @section('header' , 'Details')
    <section class="single-page">
        <div class="container">
            <div class="row">               
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
            </div>
        </div>
    </section>
    
</x-show>
