<x-guest>
    <x-navigation />
    <div class="inner-head">
        <div class="btm-img">

        </div>
        <div class="text-center">
            <h3>@yield('header')</h3>
            <!-- <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li>Data</li>
            </ol> -->
        </div>
    </div>
    {{$slot}}
    <x-foot />
</x-guest>
