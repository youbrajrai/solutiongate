<x-show>
    @section('header' , 'Products')
    <section class="packages">
        <div class="container">
            <div class="row">
                @forelse($products as $key => $product)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">
                            <div class="single-img">
                                <img class="img img-responsive" src="{{ asset('images/products/' .$product->image)}}" alt="Image">
                                <a href="{{route('details.show' ,$product->id)}}" class="opacity">
                                    <div>
                                        <div>
                                            <h5>{{$product->title}}</h5>
                                            {!!$product->description!!}
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
