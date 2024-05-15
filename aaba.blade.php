<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-secondary">
    <div class= "container border mb-4 mt-4 rounded-3 shadow bg-white">


    <!-- menu -->
    <nav class="d-md-flex p-4">
        
            <div class="logo"><h1>Sela's Book</h1></div>

            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3"><a href="#Home" class="text-decoration-none text-dark fw-bold">Home</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#Populer"class="text-decoration-none text-dark fw-bold">Populer</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#Search"class="text-decoration-none text-dark fw-bold">Search</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#About"class="text-decoration-none text-dark fw-bold">About</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#Membership"class="text-decoration-none text-dark fw-bold">Membership</a></li>
                    <li class="list-inline-item mx-md-3"><a href="#Contact"class="text-decoration-none text-dark fw-bold">Contact</a></li>
                </ul>
            </div>
</nav>



<!-- Home -->
<div class="px-4 mb-4">
    <img src="{{asset('gambar')}}/book.jpg" class="w-100 rounded-3">
    <!-- <p><a href="" class="Button-Daftar">Daftar</a></p> -->



    <!-- <p class="text-end text-white"><img src="{{asset('gambar')}}/member.jpg" align="left" style="width:500px"/>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis nemo, esse cumque nisi id quasi, ipsum fuga perspiciatis eum molestiae amet enim hic dicta laborum voluptatem quidem fugiat vitae. Non et impedit ad quia earum saepe asperiores voluptas a qui.
    </p> -->
    <button type="button" class="btn btn-primary btn-lg me-md-2">Daftar</button>

    <button class="btn btn-primary me-md-2" type="button">Button</button>

</div>









<div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
    <!-- 1 -->
    <div class="col mb-5">
        <div class="card shadow" style=>
            <img src="{{asset('gambar')}}/psychology_of_money.jpg" class="card-img-top">
            <div class="card-body">
                <h5>The Psychology Of Money</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-sm btn-primary d-block"> detail</a>
            </div>
        </div>
    </div>
<!-- 2 -->
    <div class="col mb-5">
        <div class="card shadow" style=>
            <img src="{{asset('gambar')}}/the visual mba.jpg" class="card-img-top">
            <div class="card-body">
            <h5>The Visual MBA</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-sm btn-primary d-block"> detail</a>
            </div>
        </div>
    </div>
<!-- 3 -->
    <div class="col mb-5">
        <div class="card shadow" style=>
            <img src="{{asset('gambar')}}/sebuah_seni.jpg" class="card-img-top">
            <div class="card-body">
            <h5>Sebuah Seni Untuk Bersikap Bodo Amat </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a class="btn btn-sm btn-primary d-block"> detail</a>
            </div>
        </div>
    </div>
</div>


<!-- About -->

<!-- Tulisan tengah -->
<h3 class="text-center">About Sela's Book</h3>
<div class="text-center w-50 mx-auto fw-light">Sela's Book merupakan Perpustakaan Umum yang dapat Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, animi? Natus fugit optio eos praesentium, voluptas culpa voluptatem fugiat inventore temporibus consequatur deleniti ab nesciunt, quidem aliquam recusandae incidunt dignissimos!</div>
<div class="px-4 py-4 secondary text-end">
    <div class="mx-auto w-75">
    <h3 class="text-white">About Sela's Book </h3>        
    <img src="{{asset('gambar')}}/perpus.jpeg" class="w-100 rounded-3">
</div>


<div class="px-500 py-100 bg-secondary text-center mt-4">
    <div class="mx-auto w-100">
    <h3 class="text-white">Member</h3>
    <p class="text-end text-white"><img src="{{asset('gambar')}}/member.jpg" align="left" style="width:500px"/>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis nemo, esse cumque nisi id quasi, ipsum fuga perspiciatis eum molestiae amet enim hic dicta laborum voluptatem quidem fugiat vitae. Non et impedit ad quia earum saepe asperiores voluptas a qui.
    </p>
    </div>

</div>


</div>








    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>