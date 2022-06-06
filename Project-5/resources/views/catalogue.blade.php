@extends('layouts.layout')

@section('titale-block')
    Catalogue
@endsection

@section('content')

    <div class="body-class">
        <section class="Collections-slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="item-1 product-box product-bg-fade">
                        <h2 class="product-title">Sculptures</h2>
                        <img class="product-item" src="images/jewelry/mice1.png">
                    </div>
                    <div class="item-3 product-box product-bg-fade">
                        <h2 class="product-title">Braceletes</h2>
                        <img class="product-item" src="images/jewelry/bracelet_viking.png">
                    </div>
                    <div class="item-4 product-box product-bg-fade">
                        <h2 class="product-title">Necklaces</h2>
                        <img class="product-item" src="images/jewelry/sign.png">
                    </div>
                    <div class="item-2 product-box product-bg-fade">
                        <h2 class="product-title">Rings</h2>
                        <img class="product-item" src="images/jewelry/ring_viking.png">
                    </div>
                </div>
            </div>
            <div class="all-collection-title">
                <a href="#"><h1>ALL COLLECTIONS</h1></a>
            </div>
            @include('includes.style-catalogue')
        </section>
    </div>

@endsection

