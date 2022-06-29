<x-show>
    @section('header' , 'Packages')
    <section class="packages">
        <div class="container">
            <div class="row">
                @forelse($categories as $key => $category)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="side-wrapper">
                        <div class="grid-item">
                            <div class="single-img">
                                <img class="img img-responsive" src="{{ asset('images/categories/' .$category->image)}}" alt="Image">
                                <a href="{{route('subcategory.show' ,$category->id)}}" class="opacity">
                                    <div>
                                        <div>
                                            <h5>{{$category->title}}</h5>
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
