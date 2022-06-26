<style>

    .menu-item a{
        padding: 10px 30px!important;
    }

    .slider img{
        max-height: 640px;
    }

    .brands img{
        max-height: 120px;
    }
    .brands div{
        display: flex!important;
        align-items: center;
        text-align: center;
    }
    .brands .mirage{
        max-height: 64px!important;
    }


    .hero-text h2 {
        margin-bottom: 50px;
    }

    .hero-text .hero {
        position: relative;
    }

    .hero-text .hero .hero-slide a:hover span {
        color: #033a71;
    }

    .hero .hero-slide img {
        width: 100%;
        object-fit: cover;
        object-position: top center;
    }

    .hero .hero-slide .header-content {
        bottom: 20%;
        right: 10%;
        margin-left: 8rem;
        max-width: 550px;
        width: 100%;
        padding: 2rem;
    }

    .slide-content {
        padding: 10px 20px 10px 0;
    }

    .slide-content .txt-slide {
        font-size: 3.8rem!important;
        line-height: 1;
        text-shadow: 1px 1px 3px rgba(150, 150, 150, 1);
    }
    
    /** Text Animation **/

    @-webkit-keyframes fadeInUpSD {
        0% {
            opacity: 0;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInUpSD {
        0% {
            opacity: 0;
            -webkit-transform: translateY(100px);
            transform: translateY(100px);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    .fadeInUpSD {
        -webkit-animation-name: fadeInUpSD;
        animation-name: fadeInUpSD;
    }

    .slick-active .slide-content {
        animation-name: fadeInUpSD;
        animation-duration: 1s;
        opacity: 1;
        width: 100%;
        padding: 10px 20px 30px 0;
    }



    #hero .slick-arrow,
    .brands .slick-arrow{
        display: none!important;
    }

    #map {
        height: 400px;
        width: 100%; 
    }
    #filters .slider-for-filters{
        max-width: 600px;
        max-height: 537px;
    }
    #filters .slider-filters{
        max-width: 750px;
    }


    .slick-prev:before {
        content: '<';
    }

    .slick-next:before {
        content: '>';
    }
.slick-next:before, .slick-prev:before {
    font-family: 'Advent Pro', sans-serif;
    font-size: 70px;
    line-height: 0;
    opacity: 1;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.8);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    z-index: 1000;
    cursor: pointer;
    border-radius: 50%;
    padding: 0 28px 0 25px;
    font-weight: 100;
}
.slick-prev {
    left: -55px!important;
}
.slick-next {
    right: 0px;
}

.slick-prev, .slick-next {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: -40%!important;
    display: block;
    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    cursor: pointer;
    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.filter-title{
    font-size: 2.5rem;
    font-family: 'Advent Pro', sans-serif;
    color: #444;
    line-height: 1;
}

p.hero-title{
    font-family: 'Montserrat', sans-serif;
    font-size: 1.8rem;
}
.hero-title-blue{
    font-family: 'Raleway', sans-serif;
    color: #01066B;
    font-weight: 900;
    font-size: 2.8rem;
}

@media(max-width:480px){
    .hero-title-blue{
    font-size: 2.4rem;
}
}

.marcas-title{
    font-family: 'Kanit', sans-serif;
    color: #444;
    font-weight: 100;
    font-size: 1.8rem;
}


.z-1-6{
    font-size: 1.6rem!important;
}

.brand{
    margin: 0 auto;
    max-height: 120px;
    max-width: 240px;
}

#servicios svg,
#servicios img{
    max-height: 140px;
}
#servicios h1{
    font-family: 'Balsamiq Sans', cursive;
    font-size: 1.8rem;
    margin-top: 1.5rem;
    color: #0C0A6E;
}
#servicios h3{
    font-size: 1.2rem;
    padding: 0 2rem;
}
.floating-top-header{
    color:#0C0A6E;
    position:absolute;
    right: 21.05%;
    top:0;
    font-size: 14px;
    background:#fff;
    border-radius: 0 0 3px 3px;
    -webkit-box-shadow: 4px 6px 5px 5px rgba(0,0,0,0.54);
    -moz-box-shadow: 4px 6px 5px 5px rgba(0,0,0,0.54);
    box-shadow: 4px 6px 5px 5px rgba(0,0,0,0.54);
}
.floating-top-header i{
    font-size: 1rem
}
.floating-top-header h1{
    display: inline;
    font-size: 16px;
}
.floating-top-header a{
    color: #0C0A6E;
    font-weight: bolder;
}


@media(max-width:1500px){
    .floating-top-header{
        width: 47%;
    }
}




@media(min-width:700px){
    .navbar-dark .navbar-nav .nav-link {
        background-size: cover!important;
    }
    .navbar-dark .navbar-nav .nav-link {
        font-size: .777rem;
    }
}

.proyectos img{
    height: 250px;
    width: 100%;
    object-fit: cover;
    object-position: top;
}
#header .nav.navbar{
    background:  -ms-linear-gradient(left, #FFFFFF 0%, #000851 100%);
}
.mobil-button{
    display: none;
}
@media(max-width:580px){
    .floating-top-header{
        width: 100%;
        position: initial;
    }
    .anchor-logo{
        margin: 0 auto;
    }
    .mobil-button{
        display: block;
        height: 50px;
        width: 55px;
        border-radius: 6px;
    }
    #d-flex-mobil{
        display: flex;
        justify-content: flex-end;
    }
    #col-md-12-mobil{
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }
}
</style>