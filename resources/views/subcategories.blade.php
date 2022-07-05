{{-- <x-show>
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
</x-show> --}}
<x-show>
    <section class="single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="first-container">
                        <h1 class="abt-title">Products</h1>
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
                <div class="col-md-3 sticky">
                    <div class="side-wrapper">
                        <h2 class="abt-title">Sub-Categories</h2>
                        <ul class="serv-list">
                            @forelse($subcategories as $key => $subcategory)
                                <li><a href="{{route('products.show' ,$subcategory->id)}}">{{$subcategory->title}}</li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-show>


