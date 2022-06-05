<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('includes.style')
</head>
<body>

@include('includes.navigation')

<div class="body-class">
    <section class="Collections-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="item-1 product-box product-bg-fade">
                    <h2 class="product-title">Sculptures</h2>
                    <img class="product-item" src="assets/images/jewelry/mice1.png">
                </div>
                <div class="item-3 product-box product-bg-fade">
                    <h2 class="product-title">Braceletes</h2>
                    <img class="product-item" src="assets/images/jewelry/bracelet_viking.png">
                </div>
                <div class="item-4 product-box product-bg-fade">
                    <h2 class="product-title">Necklaces</h2>
                    <img class="product-item" src="assets/images/jewelry/sign.png">
                </div>
                <div class="item-2 product-box product-bg-fade">
                    <h2 class="product-title">Rings</h2>
                    <img class="product-item" src="assets/images/jewelry/ring_viking.png">
                </div>
            </div>
        </div>
        <div class="all-collection-title">
            <a href="all_collections.php"><h1>ALL COLLECTIONS</h1></a>
        </div>
        <script src="assets/js/script.js" type="text/javascript"></script>
        <style>
            .container-fluid {
                justify-content: center;
                align-items: center;
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5, .py-lg-5 {
                padding-top: 3rem !important
            }

            .pr-lg-5, .px-lg-5 {
                padding-right: 3rem !important
            }

            .pb-lg-5, .py-lg-5 {
                padding-bottom: 3rem !important
            }

            .pl-lg-5, .px-lg-5 {
                padding-left: 3rem !important
            }


            .row {
                justify-content: center;
                align-items: center;
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin: -15px;
            }



        </style>
    </section>
</div>

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
