@extends('layouts.layout')

@yield('title-block')

@section('content')
    <div class="body-class">
        <section class="Product-Gallery">
            <div class="collection-title">
                <h1>@yield('title')</h1>
            </div>
            <div class="product-gallery-box">
                <div class="navigation-collections">
                    <div class="text-section">
                        <div class="text-block">
                            <a href="../catalogue.php"><h1>Catalogue</h1></a>
                            <a href="rings.blade.php"><p>Rings</p></a>
                            <a href="necklaces.blade.php"><p>Necklaces</p></a>
                            <a href="bracelets.blade.php"><p>Bracelets</p></a>
                            <a href="sculptures.blade.php"><p>Sculptures</p></a>
                        </div>
                        <div class="text-block">
                            <a href="../all_collections.php"><h1>Collections</h1></a>
                            <a href="vikings.php"><p>Vikings</p></a>
                            <a href="#"><p>Asgard</p></a>
                            <a href="#"><p>Animals</p></a>
                            <a href="#"><p>Maori</p></a>
                            <a href="#"><p>Other</p></a>
                        </div>
                        <div class="text-block">
                            <a href="#"><h1>Metal</h1></a>
                            <a href="#"><p>Bronze</p></a>
                            <a href="#"><p>Silver</p></a>
                            <a href="#"><p>Pewter</p></a>
                            <a href="#"><p>Golden silver</p></a>
                            <a href="#"><p>Silver plated Bronze</p></a>
                        </div>
                    </div>
                </div>
                @yield('collection-block')
            </div>
            @include('includes.style-catalogue')
        </section>
    </div>
@endsection
