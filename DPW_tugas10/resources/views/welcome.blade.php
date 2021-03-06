<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E-Commerce</title>


<!-- Styles -->


        
    </head>
    <body class="antialiased">
        <footer>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-500 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">



<div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left">
                <h1><a href="index.php">ANGGI STORE DREAM CHATHER</a></h1>
            </div>
       




            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>

                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>

 <div class="w3l_search">
            <form action="search.php" method="post">
                <input type="search" name="Search" placeholder="Cari ...">
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                    <i class="fa fa-search" aria-hidden="true"> </i>
                </button>
                <div class="clearfix"></div>
            </form>
        </div>
            
            <div class="clearfix"> </div>
        </div>
    </div>


            @endif
            </div>
        </div>
        </footer>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anggita | Ecommerce Website</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style type="text/css">    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
.btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover{
    background: #563434;
}

.header{
    background: radial-gradient(#fff,#ffd6d6);
}
.header .row{
    margin-top: 70px;
}
.categories{
    margin: 70px 0;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
}
.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;

}
.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transfrom 0.5s;
}
.col-4 img{
    width: 100%;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555;
}
.title :: after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
h4{
    color: #555;
    font-weight: normal;
}
.col-4 p{
    font-size: 14px;
}
.rating .fa{
    color: #ff523b;
}
.col-4:hover{
    transform: translateY(-5px);
}

/*------offer------*/

.offer{
    background: radial-gradient(#fff,#ffd6d6);
    margin-top: 80px;
    padding: 30px 0;
}
.col-2 .offer-img{
    padding: 50px;
}
.small{
    color: #555;
} 

/*------testimonial------*/

.testimonial{
    padding-top: 100px;
}
.testimonial .col-3{
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transfrom 0.5s;
}
.testimonial .col-3 img{
width: 50px;
margin-top: 20px;
border-radius: 50%;
}
.testimonial .col-3:hover{
    transform: translateY(-10px);
}
.fa.fa-quote-left{
    font-size: 34px;
    color: #ff523b;
}
.col-3 p{
    font-size: 12px;
    margin: 12px 0;
    color: #777;
}
.testimonial .col-3 h3{
    font-weight: 600;
    color: #555;
    font-size: 16px;
}

/*------brands------*/
.brands{
    margin: 100px auto;
}
.col-5{
    width: 160px;
}
.col-5 img{
    width: 100%;
    cursor: pointer;
    filter: grayscale(100%);
}
.col-5 img : hover{
    filter: grayscale(0);  
}

/*------footer------*/
footer {
    padding: 30px 0;
    background-color: #333;
    color: #fff;
    text-align: center;
}
.label{
    background-color: #148f77;
    color: #fff;
}


/*------body------*/
body {
    font-family: 'Nunito', sans-serif;
}



</style>
</head>


<body>
    <div class="header">
    <div class="container">
    <div class="row">
        <div class="col-2">
            <h1>Give Your Workout <br> A New Style!</h1>
            <p>Success isn't always about greatness. It's about consistency. Consistent <br> hard word gains success. Greatness will come.</p>
            <a href="http://127.0.0.1:8000/login/sign-up.php" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="gambar/penjualan.jpg">
        </div>
    </div>
    </div>
    </div>

<!------ featured categories ------>
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
            <img src="gambar/1.jpg">
        </div>
        <div class="col-3">
            <img src="gambar/2.jpg">
        </div>
        <div class="col-3">
            <img src="gambar/3.jpg">
        </div>
    </div>
    </div>
</div>

<!------ featured Products ------>
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="gambar/1.jpg">
            <h4>Dream Catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp30.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/2.jpg">
            <h4>Rainbow Dream Catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp50.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/3.jpg">
            <h4>Blue Dream Catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp30.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/4.jpg">
            <h4> moon dream catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp40.000</p>
        </div>
    </div>


    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="gambar/7.jpg">
            <h4>Pink</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp40.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/8.jpg">
            <h4>Black</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp20.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/9.jpg">
            <h4>Black White</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp17.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/10.jpg">
            <h4> Red</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rp30.000</p>
        </div>
         <div class="col-4">
            <img src="gambar/3.jpg">
            <h4>Blue Dream Catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp30.000</p>
        </div>
        <div class="col-4">
            <img src="gambar/2.jpg">
            <h4>Rainbow Dream Catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp50.000</p>
        </div>
        <div class="col-4">
            <img src="gambar/4.jpg">
            <h4> moon dream catcher</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rp40.000</p>
        </div>
    </div>
</div>

<!------ offer ------>
<div class="offer">
<div class="small-container">
    <div class="row">
            <div class="col-2">
                <img src="gambar/bagus.jpg" class="offer-img">
            </div>
            <div class="col-2">
                <p>Eclusively Available on AnggiStore</p>
                <h1>Limited Edition <br> Dream Catcher</h1>
                <small> A Limited Edition Dream Catcher, the latest work that beauty lovers love the most. This product will give beauty to your room. </small> <br>
                <a href="http://127.0.0.1:8000/login/sign-up.php" class="btn">Buy Now &#8594; </a>
            </div>
        </div>
    </div>
</div>
</div>

<!------ testimonial ------>
<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p> Semua produk original dan bagus, sangat direkomendasikan pembelian pada toko ini, selain bagus pengiriman barang juga cepat, tidak rugi menghabiskan duit untuk toko ini </p>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <img src="gambar/erpa.jpg">
                <h3>Erpa yam</h3>
            </div>
                        <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p> Saya kecewa beli disini.. kenapa tidak dari dulu aja tokoh ini buka jadikan saya bisa menghemat uang untuk tidak beli produk dari toko lain, produk yang bagus tidak ada duanya </p>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                </div>
                <img src="gambar/Melan.jpg">
                <h3>Melan cing</h3>
            </div>
                        <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p> Terimaksaih barangnya bagus. dikasi bintang 4 yah, karena kesempurnaan hanya milik Allah SWT </p>
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
                <img src="gambar/sopiya.jpg">
                <h3>Sopiya dut</h3>
            </div>
        </div>
    </div>
</div>

</body>

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
        <!--footer-->
    <footer>
        <div class="container">
            <small>copyright &copy;- Anggita Afrelia. AnggiStore DPW2 2021.</small>
        </div>
    </footer>

    </body>
</html>
