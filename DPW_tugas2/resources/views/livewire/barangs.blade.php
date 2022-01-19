<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>


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


</style>
</head>


<body>

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
                <small> A limited edition dream catcher, the latest work that beauty lovers love the most. This product will give beauty to your room. </small> <br>
                <a href="" class="btn">Buy Now &#8594; </a>
            </div>
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




    <!--footer-->
    <footer>
        <div class="container">
            <small>copyright &copy;- Anggita Afrelia. AnggiStore DPW2 2021.</small>
        </div>
    </footer>

</body>