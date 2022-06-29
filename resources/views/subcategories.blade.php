<x-show>
    @section('header' , 'Sub-Categories')
    <section class="packages">
        <div class="container">
            <div class="row">
                @forelse($subcategories as $key => $subcategory)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">
                            <div class="single-img">
                                <img class="img img-responsive" src="{{ asset('images/subcategories/' .$subcategory->image)}}" alt="Image">
                                <a href="{{route('products.show' ,$subcategory->id)}}" class="opacity">
                                    <div>
                                        <div>
                                            <h5>{{$subcategory->title}}</h5>
                                            <p></p>
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- /.single-img -->
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
</x-show>
