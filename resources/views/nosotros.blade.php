@extends('layouts.master')

@section('content')
    
<div class="container py-5" id="la-empresa">

    <div class="row">
      <div class="col-md-4 offset-md-4 text-center mb-5">
        <img src="{{asset('img/Ing_dorantes.jpeg')}}" class="mx-auto" alt="">
        <p class="filter-title">
          Ing. Joel Dorantes Morteo
        </p>
      </div>
    </div>
    <p class="text-center hero-title-blue">LA EMPRESA</p>
    <p class="hero-title z-1-6">
      Fundada en 1979 por el Ing. Joel Dorantes Morteo, polaris refrigeración es una empresa
      vanguardista, 100% mexicana, con más de 40 años de experiencia y con una amplia cartera de
      clientes por todo México. Somos una empresa comprometida con la sociedad, el planeta y, sobre
      todo, con nuestros clientes.
      Nuestra sede es en Cabo San Lucas, B.C.S., pero nuestros servicios no tienen fronteras; somos
      especialistas en la venta, fabricación e instalación en sistemas de aires acondicionados como lo
      son: mini split, equipos fan and coil, equipos paquetes, VRF, sistemas de agua helada, chillers y
      mini chillers; Sistemas de extracción e inyección como lo son: Campanas, extractores y fabricación
      e instalación de ductos; también manejamos la instalación de mobiliario y equipos de cocina y, por
      último, ofrecemos venta e instalación de sistemas de refrigeración, como cámaras de conservación
      y congelación, mesas frías, vitrinas y máquinas de hielo.
      Los destacados proyectos que hemos ejecutado a lo largo de los años han dejado huella en más de
      siete estados de la república mexicana como; puebla, B.C.S, colima, guerrero, Quintana Roo,
      Estado de México, Sinaloa, Oaxaca, entre otros.  
    </p>

    <p class="text-center hero-title-blue">NUESTRA MISION</p>
    <p class="hero-title z-1-6">
      Ser la mejor opción ante las exigencias de calidad, seguridad, vanguardia, garantía y confort en la
      ejecución de nuestros servicios
    </p>
    <p class="text-center hero-title-blue">COMPROMISO CON NUESTROS CLIENTES</p>
    <p class="hero-title z-1-6">
      La satisfacción de nuestros clientes es el factor más importante para nosotros y nos
      comprometemos con ellos garantizándoles que están en manos de profesionales altamente
      preparados, con más de 40 años de experiencia y con un historial impecable de proyectos
      ejecutados. 
    </p>

</div>


<div class="container mt-5">
  <p class="text-center hero-title-blue">NUESTRAS CERTIFICACIONES</p>
  
  {{-- **AUX** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        AUX
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Sistemas invertir diagnostico e instalación 
        </li>
      </ul>
    </div>
  </div>
    <div class="row">

      <div class="col-md-2 offset-md-2">
        <a href="{{asset('img/certificados/cert4.jpeg')}}" data-lightbox="certificados">

          <img src="{{asset('img/certificados/cert4.jpeg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
        <div class="col-md-2">
            <a href="{{asset('img/certificados/cert2.jpeg')}}" data-lightbox="certificados">

            <img src="{{asset('img/certificados/cert2.jpeg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
        <div class="col-md-2">
            <a href="{{asset('img/certificados/cert3.jpeg')}}" data-lightbox="certificados">

            <img src="{{asset('img/certificados/cert3.jpeg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{asset('img/certificados/cert8.jpg')}}" data-lightbox="certificados">

          <img src="{{asset('img/certificados/cert8.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
  </div>

    {{-- **DAIKIN** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        DAIKIN
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Instalación de equipos VRV (CVRF)
        </li>
      </ul>
    </div>
  </div>
  <div class="row mt-5">


      <div class="col-md-3 col-md-3 offset-md-5">
        <a href="{{asset('img/certificados/cert1.jpeg')}}" data-lightbox="certificados">
          <img src="{{asset('img/certificados/cert1.jpeg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>

       

  </div>
  
  {{-- **ASHRAE** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        ASHRAE
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Conferencias técnicas – Ashrae expo 2006
        </li>
        <li>Diseño de sistemas de termoalmacenaje </li>
        <li>Selección de válvulas y bombas para diseños hidrónicos</li>
        <li>Diseño en baja temperatura </li>
      </ul>
    </div>
  </div>
    <div class="row mt-5">


      <div class="col-md-2 offset-md-1">
        <a href="{{asset('img/certificados/cert5.jpg')}}" data-lightbox="certificados">

          <img src="{{asset('img/certificados/cert5.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{asset('img/certificados/cert5.jpg')}}" data-lightbox="certificados">

          <img src="{{asset('img/certificados/cert5.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>


      <div class="col-md-2">
        <a href="{{asset('img/certificados/cert6.jpg')}}" data-lightbox="certificados">

          <img src="{{asset('img/certificados/cert6.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>

      <div class="col-md-2">
        <a href="{{asset('img/certificados/cert13.jpg')}}" data-lightbox="certificados">
  
          <img src="{{asset('img/certificados/cert13.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
      <div class="col-md-2">
        <a href="{{asset('img/certificados/cert14.jpg')}}" data-lightbox="certificados">
  
          <img src="{{asset('img/certificados/cert14.jpg')}}" class="w-100" alt="" srcset="">
        </a>
      </div>
     

  </div>
  
  {{-- **GREENHECK** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        GREENHECK
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Seminario de ventilación teórico-practico
        </li>
      </ul>
    </div>
  </div>
  <div class="row mt-5">

    <div class="col-md-2 offset-md-4">
      <a href="{{asset('img/certificados/cert11.jpg')}}" data-lightbox="certificados">

        <img src="{{asset('img/certificados/cert11.jpg')}}" class="w-100" alt="" srcset="">
      </a>
    </div>
    <div class="col-md-2">
      <a href="{{asset('img/certificados/cert12.jpg')}}" data-lightbox="certificados">

        <img src="{{asset('img/certificados/cert12.jpg')}}" class="w-100" alt="" srcset="">
      </a>
    </div>

  </div>

  {{-- **INTENSITY** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        INTENSITY
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Clínica practica de instalación, arranque, pruebas y fallas para equipos de agua helada. 
        </li>
      </ul>
    </div>
  </div>
  <div class="row mt-5">


    <div class="col-md-3 offset-md-5">
      <a href="{{asset('img/certificados/cert9.jpg')}}" data-lightbox="certificados">

        <img src="{{asset('img/certificados/cert9.jpg')}}" class="w-100" alt="" srcset="">
      </a>
    </div>

   


  </div>


  {{-- **MIDDLEBY WORDWIDE** --}}

  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        MIDDLEBY WORDWIDE
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Seminario de entrenamiento en todas sus marcas.
        </li>
      </ul>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col-md-3 offset-md-5">
      <a href="{{asset('img/certificados/cert7.jpg')}}" data-lightbox="certificados">

        <img src="{{asset('img/certificados/cert7.jpg')}}" class="w-100" alt="" srcset="">
      </a>
    </div>
  </div>


  {{-- **EQUIPSA** --}}
  <div class="row mt-5 pt-5">
    <div class="col-md-12">
      <p class="text-center hero-title-blue">
        EQUIPSA
      </p>
    </div>
    <div class="col-md-6 offset-md-3">
      <ul>
        <li class="hero-title z-1-6"> 
          Seminario técnico de refrigeración. 
        </li>
      </ul>
    </div>
  </div>
  <div class="row mt-5">


    <div class="col-md-3 offset-md-5">
      <a href="{{asset('img/certificados/cert10.jpg')}}" data-lightbox="certificados">

        <img src="{{asset('img/certificados/cert10.jpg')}}" class="w-100" alt="" srcset="">
      </a>
    </div>


  </div>

</div>



<div class="container mt-5 pt-5" id="nuestros-clientes">
    <p class="text-center hero-title-blue mt-5">NUESTROS CLIENTES</p>

    <div class="row">

        <div class="col-md-4 text-center">
            <svg  class="brand"  id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 605.044 194.91">
                <defs>
                  <style>
                    .cls-1 {
                      fill: url(#linear-gradient);
                    }
              
                    .cls-2 {
                      fill: url(#linear-gradient-2);
                    }
              
                    .cls-3 {
                      fill: url(#linear-gradient-3);
                    }
              
                    .cls-4 {
                      fill: url(#linear-gradient-4);
                    }
              
                    .cls-5 {
                      fill: url(#linear-gradient-5);
                    }
              
                    .cls-6 {
                      fill: url(#linear-gradient-6);
                    }
              
                    .cls-7 {
                      fill: url(#linear-gradient-7);
                    }
              
                    .cls-8 {
                      fill: url(#linear-gradient-8);
                    }
              
                    .cls-9 {
                      fill: url(#linear-gradient-9);
                    }
              
                    .cls-10 {
                      fill: url(#linear-gradient-10);
                    }
              
                    .cls-11 {
                      fill: url(#linear-gradient-11);
                    }
              
                    .cls-12 {
                      fill: url(#linear-gradient-12);
                    }
              
                    .cls-13 {
                      fill: url(#linear-gradient-13);
                    }
              
                    .cls-14 {
                      fill: url(#linear-gradient-14);
                    }
              
                    .cls-15 {
                      fill: url(#linear-gradient-15);
                    }
              
                    .cls-16 {
                      fill: url(#linear-gradient-16);
                    }
              
                    .cls-17 {
                      fill: url(#linear-gradient-17);
                    }
              
                    .cls-18 {
                      fill: url(#linear-gradient-18);
                    }
              
                    .cls-19 {
                      fill: url(#linear-gradient-19);
                    }
                  </style>
                  <linearGradient id="linear-gradient" x1="207.926" y1="94.091" x2="207.926" y2="52.211" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#101540"/>
                    <stop offset="0.357" stop-color="#0e1c4b"/>
                    <stop offset="0.797" stop-color="#0d2253"/>
                  </linearGradient>
                  <linearGradient id="linear-gradient-2" x1="268.643" y1="95.058" x2="268.643" y2="52.211" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-3" x1="328.429" y1="94.091" x2="328.429" y2="52.211" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-4" x1="388.182" y1="94.091" x2="388.182" y2="52.211" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-5" x1="446.213" y1="94.091" x2="446.213" y2="52.211" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-6" x1="509.996" y1="95.058" x2="509.996" y2="51.645" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-7" x1="7.341" y1="164.935" x2="80.131" y2="164.935" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#101540"/>
                    <stop offset="0.117" stop-color="#182051"/>
                    <stop offset="0.411" stop-color="#283876"/>
                    <stop offset="0.648" stop-color="#32478d"/>
                    <stop offset="0.797" stop-color="#364c95"/>
                  </linearGradient>
                  <linearGradient id="linear-gradient-8" x1="4.726" y1="60.182" x2="96.019" y2="60.182" xlink:href="#linear-gradient-7"/>
                  <linearGradient id="linear-gradient-9" x1="0" y1="84.773" x2="147.552" y2="84.773" xlink:href="#linear-gradient-7"/>
                  <linearGradient id="linear-gradient-10" x1="74.809" y1="51.244" x2="147.552" y2="51.244" gradientUnits="userSpaceOnUse">
                    <stop offset="0.203" stop-color="#364c95"/>
                    <stop offset="0.352" stop-color="#32478d"/>
                    <stop offset="0.589" stop-color="#283876"/>
                    <stop offset="0.883" stop-color="#182051"/>
                    <stop offset="1" stop-color="#101540"/>
                  </linearGradient>
                  <linearGradient id="linear-gradient-11" x1="10.477" y1="29.751" x2="96.017" y2="29.751" xlink:href="#linear-gradient-10"/>
                  <linearGradient id="linear-gradient-12" x1="40.118" y1="164.417" x2="80.131" y2="164.417" xlink:href="#linear-gradient-10"/>
                  <linearGradient id="linear-gradient-13" x1="128.819" y1="148.198" x2="175.211" y2="148.198" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-14" x1="282.877" y1="148.198" x2="332.672" y2="148.198" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-15" x1="197.035" y1="148.198" x2="258.143" y2="148.198" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-16" x1="350.853" y1="148.198" x2="411.96" y2="148.198" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-17" x1="436.48" y1="148.198" x2="446.213" y2="148.198" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-18" x1="548.332" y1="148.611" x2="605.044" y2="148.611" xlink:href="#linear-gradient"/>
                  <linearGradient id="linear-gradient-19" x1="475.164" y1="148.1" x2="522.216" y2="148.1" xlink:href="#linear-gradient"/>
                </defs>
                <title>8d6dc5e3-12d5-44cd-b2fc-0923bb1d2540</title>
                <g>
                  <g>
                    <path class="cls-1" d="M208.735,52.211H191.923V94.091h3.788V79.272h13.023c10.023,0,15.194-6.185,15.194-13.531S218.758,52.211,208.735,52.211Zm1.587,24.163h-14.61V55.291h14.61c7.022,0,10.343,5.3,10.343,10.45S217.344,76.374,210.321,76.374Z"/>
                    <path class="cls-2" d="M280.888,78.563c0,7.6-4.983,12.436-12.245,12.436-7.327,0-12.51-4.832-12.51-12.436V52.211h-4.181V77.919c0,11.211,6.434,17.139,16.691,17.139s16.691-5.928,16.691-17.139V52.211h-4.446Z"/>
                    <polygon class="cls-3" points="317.267 74.697 340.463 74.697 340.463 70.638 317.267 70.638 317.267 56.27 342.378 56.27 342.378 52.211 313.479 52.211 313.479 94.091 343.378 94.091 343.378 90.032 317.267 90.032 317.267 74.697"/>
                    <path class="cls-4" d="M403.977,65.483c0-7.281-5.171-13.273-15.194-13.273H371.174V94.091h4.074V78.756h11.343l13.3,15.335h5.3L391.095,78.4C398.245,76.917,403.977,71.411,403.977,65.483ZM375.248,74.7V55.261h14.534c7.022,0,10.343,5.133,10.343,10.223s-3.32,9.214-10.343,9.214Z"/>
                    <polygon class="cls-5" points="430.157 55.838 444.311 55.838 444.311 94.091 448.608 94.091 448.608 55.838 462.27 55.838 462.27 52.211 430.157 52.211 430.157 55.838"/>
                    <path class="cls-6" d="M510.028,51.645c-12.9,0-21.77,9.768-21.77,21.707s8.874,21.707,21.77,21.707c12.833,0,21.707-9.768,21.707-21.707S522.861,51.645,510.028,51.645Zm-.43,39.972c-9.7,0-17.523-8.115-17.523-18.266s7.82-18.2,17.523-18.2,17.465,8.053,17.465,18.2S519.3,91.617,509.6,91.617Z"/>
                  </g>
                  <path class="cls-7" d="M80.131,175.6c0,7.863-4.928,17.761-18.866,18.465s-53.924.845-53.924.845c0-34.417,38.077-59.949,55.676-59.949,11.967,0,17.114,9.968,17.114,17.712Z"/>
                  <path class="cls-8" d="M4.726,113.263v-72.3c0-27.31,17.139-33.633,30.747-33.835,12.583-.186,37.672.432,52.056,11.029C104.82,30.9,93.8,46.689,71.566,62.716,42.968,83.334,17.362,94.141,4.726,113.263Z"/>
                  <path class="cls-9" d="M2.065,169.545s4.829-35.317,59.026-48.75c53.872-13.352,86.461-21,86.461-65.14,0-43.152-42-58.858-72.743-55.124,0,0,37.463,6.483,36.829,30.088-.831,30.926-52.209,54.028-70.665,67.18C22.444,111-8.243,129.723,2.065,169.545Z"/>
                  <path class="cls-10" d="M74.809.531S91.66,3.459,102.567,12.506c11.971,5.327,23.479,13.765,29.218,27.131,10.647,24.8-.869,48.185-12.149,62.85,17.965-9.224,27.916-22.462,27.916-46.832C147.552,12.5,105.547-3.2,74.809.531Z"/>
                  <path class="cls-11" d="M87.528,18.156C73.145,7.559,48.056,6.94,35.473,7.127c-8.688.129-18.808,2.764-25,11.751,8.144-3.706,20-5.827,37.749-3.115C76.461,20.079,92.446,31.841,84.22,52.4,97.233,40.013,101.087,28.145,87.528,18.156Z"/>
                  <path class="cls-12" d="M63.288,193.874c12.383-1.521,16.843-10.807,16.843-18.274V152.672c0-7.744-5.147-17.712-17.114-17.712-6.018,0-14.432,2.989-22.9,8.3,12.378-2.987,27.285-2.35,27.285,12.23v24.266C67.4,184.284,66.469,189.631,63.288,193.874Z"/>
                  <g>
                    <path class="cls-13" d="M156.38,120.8H128.819v54.8h11.224l.125-15.92h16.586c7.607,0,18.457-6.61,18.457-19.205S167.1,120.8,156.38,120.8Zm-1.746,29.531H139.669V130.548h14.965c6.112,0,10.6,3.816,10.6,10.426S159.123,150.327,154.634,150.327Z"/>
                    <path class="cls-14" d="M315.169,156.418c6.816-1.511,14.1-6.623,14.1-16.943,0-12.6-8.107-18.679-18.831-18.679H282.877v54.8H294.1l.125-18.688h9.437L319.774,175.6h12.9Zm-21.442-8.22v-17.65h14.965c6.112,0,10.6,3.555,10.6,9.767s-6.111,7.883-10.6,7.883Z"/>
                    <path class="cls-15" d="M233.45,120.8H222.226l-25.191,54.8h11.972l4.739-9.809H242.18l4.24,9.809h11.723Zm-15.713,34.894,9.852-22.572,9.852,22.572Z"/>
                    <path class="cls-16" d="M387.268,120.8H376.044l-25.191,54.8h11.972l4.739-9.809H396l4.24,9.809H411.96Zm-15.713,34.894,9.852-22.572,9.852,22.572Z"/>
                    <rect class="cls-17" x="436.48" y="120.795" width="9.733" height="54.805"/>
                    <path class="cls-18" d="M576.688,119.78a28.834,28.834,0,1,0,28.356,28.83A28.6,28.6,0,0,0,576.688,119.78Zm0,48.837c-9.959,0-18.032-8.957-18.032-20.007S566.73,128.6,576.688,128.6s18.032,8.957,18.032,20.007S586.647,168.617,576.688,168.617Z"/>
                    <path class="cls-19" d="M475.164,163.914l8.391-4.5a18.281,18.281,0,0,0,15.784,8.791c11.089,0,12.487-5.994,12.487-8.791s-2.1-7.792-11.488-7.792-22.677-3.526-22.677-15.984c0-13.486,11.688-16.883,21.478-16.883s16.883,3.9,21.178,10.389l-7.792,5.095a17.71,17.71,0,0,0-13.486-6.493c-8.691,0-10.782,4.5-10.782,6.893s1.491,6.793,13.179,7.592,20.779,5.994,20.779,17.282-10.889,17.923-22.377,17.923C486.453,177.441,478.461,171.406,475.164,163.914Z"/>
                  </g>
                </g>
            </svg>
        </div>
        <div class="col-md-4 text-center">
          <a href="{{asset('img/clientes/rock-n-brews-logo.png')}}" data-lightbox="galeria">
            <img  src="{{asset('img/clientes/rock-n-brews-logo.png')}}" class="brand"  alt="" srcset="">
          </a>
          </div>
        <div class="col-md-4 text-center">
          <a href="{{asset('img/clientes/bank-of-tokio.png')}}" data-lightbox="galeria">
            <img src="{{asset('img/clientes/bank-of-tokio.png')}}" class="brand"  alt="" srcset="">
          </a>
        </div>
        
      </div>
      

      
      
      <div class="row my-5">
        <div class="col-md-4 text-center">
          <a href="{{asset('img/clientes/solmar-logo.jpeg')}}" data-lightbox="galeria">
            <img  src="{{asset('img/clientes/solmar-logo.jpeg')}}" class="brand"  alt="" srcset="">
          </a>
          </div>
        <div class="col-md-4 text-center">
          <a href="{{asset('img/clientes/barcelo-logo.png')}}" data-lightbox="galeria">
            <img  src="{{asset('img/clientes/barcelo-logo.png')}}" class="brand"  alt="" srcset="">
          </a>
          </div>
        <div class="col-md-4 text-center">
          <a href="{{asset('img/clientes/hyat-ziva.webp')}}" data-lightbox="galeria">
            <img  src="{{asset('img/clientes/hyat-ziva.webp')}}" class="brand"  alt="" srcset="">
          </a>
          </div>
      </div>


  

  <div class="row mt-5">
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/pblogo.png')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/pblogo.png')}}" class="brand"  alt="" srcset="">
      </a>
      </div>
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/Consulate-General-of-Canada.png')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/Consulate-General-of-Canada.png')}}" class="brand"  alt="" srcset="">
      </a>
      </div>
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/Finamex-2.png')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/Finamex-2.png')}}" class="brand"  alt="" srcset="">
      </a>
    </div>
</div>
  
  
  <div class="row my-5">
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/new/cliente_1.jpeg')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/new/cliente_1.jpeg')}}" class="brand"  alt="" srcset="">
      </a>
      </div>
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/new/cliente_2.jpeg')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/new/cliente_2.jpeg')}}" class="brand"  alt="" srcset="">
      </a>
      </div>
    <div class="col-md-4 text-center">
      <a href="{{asset('img/clientes/new/cliente_3.jpeg')}}" data-lightbox="galeria">
        <img  src="{{asset('img/clientes/new/cliente_3.jpeg')}}" class="brand"  alt="" srcset="">
      </a>
      </div>
</div>


<div class="row mt-5">
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_4.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_4.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
    </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_5.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_5.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
    </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_6.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_6.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
    </div>
</div>


<div class="row my-5">
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_7.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_7.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_8.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_8.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_9.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_9.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
</div>


<div class="row my-5">
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_10.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_10.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_11.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_11.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/new/cliente_12.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_12.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>
</div>
  
<div class="row my-5">

  <div class="col-md-4 offset-md-2 text-center">
    <a href="{{asset('img/clientes/new/cliente_13.jpeg')}}" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/new/cliente_13.jpeg')}}" class="brand"  alt="" srcset="">
    </a>
  </div>

  <div class="col-md-4 text-center">
    <a href="{{asset('img/clientes/farito.png')}}<?php Date('U')?>" data-lightbox="galeria">
      <img  src="{{asset('img/clientes/farito.png')}}<?php Date('U')?>" class="brand"  alt="" srcset="">
    </a>
  </div>

</div>



</div>

@endsection