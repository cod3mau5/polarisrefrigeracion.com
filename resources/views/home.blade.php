@extends('layouts.master')

@section('content')
    



        <div class="slider hero" id="hero">
            <div class="hero-slide">
                <img src="{{asset('img/slide1.jpg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide">DUCTERIAS <span class="d-block font-weight-bold">Fabricación e instalación</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#ducterias" tabindex="0">Ver Proyectos</a>
                </div>
            </div>
            <div class="hero-slide">
                <img src="{{asset('img/slide2.jpg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide">EQUIPOS <span class="d-block font-weight-bold">de Aire Acondicionado</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#aire-acondicionado" tabindex="0">Consulta nuestros servicios</a>
                </div>
            </div>
            <div class="hero-slide">
                <img src="{{asset('img/slide3.jpg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide">CAMPANAS <span class="d-block font-weight-bold">Industriales</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#campanas" tabindex="0">Ver Proyectos</a>
                </div>
            </div>

            <div class="hero-slide">
                <img src="{{asset('img/proyectos/camaras_frias/img_1.jpg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide"><span class="d-block font-weight-bold">CAMARAS FRIAS</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#camaras-frias" tabindex="0">Ver Proyectos</a>
                </div>
            </div>
            <div class="hero-slide">
                <img src="{{asset('img/slide4.jpeg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide"><span class="d-block font-weight-bold">MINI SPLIT</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#aire-acondicionado" tabindex="0">Ver Proyectos</a>
                </div>
            </div>
           
            <div class="hero-slide">
                <img src="{{asset('img/proyectos/extraccion_ventilacion/img_2.jpg')}}" alt="" class="w-100" srcset="">
                <div class="header-content text-white position-absolute slide-content col-lg-4">
                    <h1 class="mb-4 txt-slide"><span class="d-block font-weight-bold"> EXTRACCIÓN Y VENTILACIÓN</span></h1>
                    <a class="btn btn-primary btn-lg w-max mt-2" href="{{route('servicios')}}#extraccion-ventilacion" tabindex="0">Ver Proyectos</a>
                </div>
            </div>
        </div>
               
<div class="container mt-5 pt-5">
    <h4 class="text-center hero-title-blue">¿QUIENES SOMOS?</h4>
    <p class="hero-title">
        Fundada en 1979 por el Ing. Joel Dorantes Morteo, polaris refrigeración es una empresa vanguardista, 100% mexicana, con más de 40 años de experiencia y con una amplia cartera de clientes por todo México. Somos una empresa comprometida con la sociedad, el planeta y, sobre todo, con nuestros clientes. Nuestra sede es en Cabo San Lucas, B.C.S., pero nuestros servicios no tienen fronteras; somos especialistas en la venta, fabricación e instalación en sistemas de aires acondicionados como lo son: mini split, equipos fan and coil, equipos paquetes, VRF, sistemas de agua helada, chillers y mini chillers; Sistemas de extracción e inyección como lo son: Campanas, extractores y fabricación e instalación de ductos; también manejamos la instalación de mobiliario y equipos de cocina y, por último, ofrecemos venta e instalación de sistemas de refrigeración, como cámaras de conservación y congelación, mesas frías, vitrinas y máquinas de hielo. Los destacados proyectos que hemos ejecutado a lo largo de los años han dejado huella en más de siete estados de la república mexicana como; puebla, B.C.S, colima, guerrero, Quintana Roo, Estado de México, Sinaloa, Oaxaca, entre otros.
    </p>
    <a class="btn btn-primary btn-lg w-max mt-2 float-right" href="{{route('nosotros')}}#la-empresa" tabindex="0">Ver más</a>
</div>

<div class="container pt-5" id="servicios">

    <h4 class="text-center hero-title-blue mt-5 py-5">NUESTROS SERVICIOS</h4>

   <div class="row mb-5">
       <div class="col-md-4 text-center">
            <a href="{{route('servicios')}}#camaras-frias"><img src="{{asset('img/iconos/camarafria.png')}}" title="Click para ver más" alt=""></a>
            <h1 class="text-center">CUARTO FRIO</h1>
            <h3 class="text-center">cálculo, venta e instalación de equipos de refrigeración y cuartos frios de conservación y congelación</h3>
       </div>
       <div class="col-md-4 text-center">
           <a href="{{route('servicios')}}">
                <svg preserveAspectRatio="xMidYMid meet" id="comp-k68nzqdjsvgcontent" data-bbox="15 47 169.999 106" viewBox="15 47 169.999 106" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-labelledby="comp-k68nzqdj-svgtitle"><title>Click para ver más</title>
                    <g>
                        <path d="M183.631 67.712h-50.645V48.369A1.37 1.37 0 0 0 131.617 47H105.17a1.37 1.37 0 0 0-1.369 1.369v19.343H53.156a1.37 1.37 0 0 0-1.369 1.369v50.327c-1.23.688-2.074 1.988-2.074 3.495v6.675H18.402A3.406 3.406 0 0 0 15 132.98a3.405 3.405 0 0 0 3.402 3.401h31.311v6.675a4.026 4.026 0 0 0 4.021 4.02h2.795a4.025 4.025 0 0 0 4.02-4.02v-.589l32.744 1.138a10.549 10.549 0 0 0 7.697-3.012 10.523 10.523 0 0 0 3.115-6.244h79.525a1.37 1.37 0 0 0 1.369-1.369V69.081a1.367 1.367 0 0 0-1.368-1.369zm-77.092-17.974h23.709v17.974h-5.626V55.86a1.37 1.37 0 0 0-1.369-1.369h-10.248a1.37 1.37 0 0 0-1.369 1.369v11.852h-5.097V49.738zm7.835 17.974V57.229h7.51v10.483h-7.51zm-9.204 2.737h77.092v19.736h-57.375v-6.563a1.37 1.37 0 0 0-1.369-1.369h-10.249a1.37 1.37 0 0 0-1.369 1.369v6.563H54.525V70.449h50.645zm16.979 19.737h-7.511v-5.194h7.511v5.194zm-7.511 2.737h7.511v5.195h-7.511v-5.195zm-96.236 40.719a.663.663 0 1 1 0-1.327h31.311v1.327H18.402zm39.409 9.413c0 .707-.575 1.282-1.282 1.282h-2.795a1.285 1.285 0 0 1-1.283-1.282v-20.153c0-.708.575-1.282 1.283-1.282h2.795c.707 0 1.282.575 1.282 1.282v20.153zm41.268-4.423a7.821 7.821 0 0 1-5.703 2.237l-32.827-1.142v-13.496l32.816-1.142a7.867 7.867 0 0 1 5.714 2.237c1.539 1.499 2.386 3.506 2.386 5.654s-.847 4.153-2.386 5.652zm5.027-7.021a10.524 10.524 0 0 0-3.116-6.245 10.53 10.53 0 0 0-7.708-3.012l-32.732 1.138v-.589a4.025 4.025 0 0 0-4.02-4.02h-2.004v-25.96H111.9v6.564a1.37 1.37 0 0 0 1.369 1.369h10.249a1.37 1.37 0 0 0 1.369-1.369v-6.564h57.375v38.687h-78.156z" fill="#0000A1" data-color="1"/>
                        <path d="M126.89 141.701c-2.191 0-4.024 1.471-4.619 3.47h-6.787a1.37 1.37 0 0 0 0 2.738h6.787c.595 1.999 2.429 3.47 4.619 3.47 2.669 0 4.84-2.171 4.84-4.839s-2.17-4.839-4.84-4.839zm0 6.941c-1.159 0-2.102-.943-2.102-2.102s.943-2.102 2.102-2.102 2.102.943 2.102 2.102-.942 2.102-2.102 2.102z" fill="#0000A1" data-color="1"/>
                        <path d="M151.727 143.323a4.81 4.81 0 0 0-2.738.855l-4.417-3.38a1.37 1.37 0 0 0-1.665 2.174l4.353 3.331a4.816 4.816 0 0 0-.374 1.859 4.844 4.844 0 0 0 4.84 4.838 4.845 4.845 0 0 0 4.84-4.838 4.843 4.843 0 0 0-4.839-4.839zm0 6.939a2.104 2.104 0 0 1-2.102-2.101c0-1.159.943-2.102 2.102-2.102s2.102.943 2.102 2.102a2.104 2.104 0 0 1-2.102 2.101z" fill="#0000A1" data-color="1"/>
                    </g>
                </svg>
            </a>
            <h1 class="text-center">SERVICIO Y SOPORTE TECNICO</h1>
            <h3 class="text-center">servicio de mantenimiento a equipos de aire acondicionado, industrial, residencial y domestico.</h3>
       </div>

       <div class="col-md-4 text-center">
            <a href="{{route('servicios')}}#vantilacion-extraccion">
                <svg preserveAspectRatio="xMidYMid meet" id="comp-k68nzq4dsvgcontent" data-bbox="41.5 41.5 117 117" viewBox="41.5 41.5 117 117" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-labelledby="comp-k68nzq4d-svgtitle"><title id="comp-k68nzq4d-svgtitle">Click para ver más</title>
                    <g>
                        <path d="M100 41.5c-32.257 0-58.5 26.243-58.5 58.5s26.243 58.5 58.5 58.5 58.5-26.243 58.5-58.5-26.243-58.5-58.5-58.5zm0 114.234c-30.732 0-55.734-25.002-55.734-55.734S69.268 44.267 100 44.267 155.734 69.269 155.734 100 130.732 155.734 100 155.734z" fill="#0000A1" data-color="1"/>
                        <path d="M100 50.531c-27.278 0-49.469 22.192-49.469 49.47S72.722 149.469 100 149.469s49.469-22.192 49.469-49.469S127.278 50.531 100 50.531zm0 96.172c-25.752 0-46.703-20.951-46.703-46.703S74.248 53.298 100 53.298s46.703 20.95 46.703 46.702-20.951 46.703-46.703 46.703z" fill="#0000A1" data-color="1"/>
                        <path d="M135.077 98.617h-19.012c5.465-3.321 9.036-9.31 9.036-16.155 0-10.433-8.488-18.922-18.921-18.922H100c-.764 0-1.383.619-1.383 1.383v19.012c-3.321-5.465-9.31-9.037-16.155-9.037-10.433 0-18.921 8.489-18.921 18.922V100c0 .764.619 1.383 1.383 1.383h19.013c-5.466 3.321-9.038 9.31-9.038 16.155 0 10.433 8.488 18.921 18.921 18.921H100c.764 0 1.383-.619 1.383-1.383v-19.012c3.321 5.465 9.31 9.037 16.155 9.037 10.433 0 18.921-8.488 18.921-18.921V100a1.381 1.381 0 0 0-1.382-1.383zm-35.012 7.762c-.017 0-.032.005-.049.006l-.017-.002c-3.482 0-6.344-2.834-6.379-6.317 0-.017-.005-.032-.006-.049l.002-.017c0-3.482 2.834-6.343 6.317-6.378.017 0 .033-.005.049-.006l.017.002c3.482 0 6.344 2.833 6.379 6.316 0 .017.005.032.006.049l-.002.017c.001 3.482-2.833 6.343-6.317 6.379zm1.318-40.072h4.797c8.908 0 16.155 7.247 16.155 16.155 0 7.955-5.644 14.567-13.337 15.902-.696-3.813-3.775-6.818-7.616-7.408V66.307zM66.306 93.82c0-8.908 7.248-16.155 16.155-16.155 7.956 0 14.567 5.644 15.903 13.337-3.813.695-6.818 3.775-7.408 7.615h-24.65V93.82zm32.311 39.874H93.82c-8.908 0-16.155-7.248-16.155-16.155 0-7.955 5.644-14.567 13.337-15.902.696 3.813 3.775 6.818 7.616 7.408v24.649zm35.077-27.514c0 8.908-7.248 16.155-16.155 16.155-7.956 0-14.567-5.644-15.903-13.338 3.813-.696 6.818-3.774 7.408-7.615h24.65v4.798z" fill="#0000A1" data-color="1"/>
                    </g>
                </svg>
            </a>
            <h1 class="text-center">VENTILACION Y EXTRACCION</h1>
            <h3 class="text-center">cálculo, venta e instalación de sistemas para extracción e inyección de aire.</h3>
       </div>


    </div>

   <div class="row">
        <div class="col-md-4 text-center">
            <a href="{{route('servicios')}}#campanas">
                <img src="{{asset('img/iconos/campana.png')}}" title="Click para ver más" alt="">
            </a>
            <h1 class="text-center">CAMPANAS INDUSTRIALES</h1>
            <h3 class="text-center">Suministro, fabricación e instalación de campanas para cocina.</h3>
        </div>

        <div class="col-md-4 text-center">
            <a href="{{route('servicios')}}#aire-acondicionado">
                <svg preserveAspectRatio="xMidYMid meet" id="comp-k68nzq7psvgcontent" data-bbox="10.5 39 179 122.002" viewBox="10.5 39 179 122.002" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img" aria-labelledby="comp-k68nzq7p-svgtitle"><title id="comp-k68nzq7p-svgtitle">Click para ver más</title>
                    <g>
                        <path d="M189.5 58.519C189.5 47.756 180.709 39 169.902 39H30.098C19.291 39 10.5 47.756 10.5 58.519v36.43c0 .491.038.972.074 1.453a1.366 1.366 0 0 0-.074.426c0 .251.072.483.189.686 1.268 9.551 9.477 16.953 19.409 16.953h139.804c9.931 0 18.141-7.402 19.409-16.953.117-.203.189-.435.189-.686 0-.15-.03-.291-.074-.426.036-.482.074-.963.074-1.453v-36.43zm-176.219 0c0-9.236 7.544-16.75 16.817-16.75h139.804c9.273 0 16.817 7.514 16.817 16.75v36.43c0 .167-.02.329-.025.495H13.306c-.005-.166-.025-.328-.025-.495v-36.43zm156.621 53.179H30.098c-8.151 0-14.962-5.807-16.491-13.485h172.787c-1.53 7.678-8.341 13.485-16.492 13.485z" fill="#0000A1" data-color="1"/>
                        <path d="M160.395 104.568H35.801c-.767 0-1.39.62-1.39 1.385s.623 1.385 1.39 1.385h124.594c.767 0 1.39-.62 1.39-1.385s-.623-1.385-1.39-1.385z" fill="#0000A1" data-color="1"/>
                        <path d="M85.56 88.935h28.879c.767 0 1.39-.62 1.39-1.385V76.734c0-.765-.623-1.385-1.39-1.385H85.56c-.767 0-1.39.62-1.39 1.385V87.55c0 .765.623 1.385 1.39 1.385zm1.391-10.816h26.099v8.046H86.951v-8.046z" fill="#0000A1" data-color="1"/>
                        <path d="M22.448 88.935h13.353c.767 0 1.39-.62 1.39-1.385s-.623-1.385-1.39-1.385H22.448c-.767 0-1.39.62-1.39 1.385s.623 1.385 1.39 1.385z" fill="#0000A1" data-color="1"/>
                        <path d="M40.769 88.935h3.338c.767 0 1.39-.62 1.39-1.385s-.623-1.385-1.39-1.385h-3.338c-.767 0-1.39.62-1.39 1.385s.622 1.385 1.39 1.385z" fill="#0000A1" data-color="1"/>
                        <path d="M71.334 128.513c0-.816-.663-1.476-1.482-1.476s-1.482.66-1.482 1.476c0 2.094-.726 3.061-1.645 4.286-1.047 1.395-2.234 2.978-2.234 6.054s1.187 4.658 2.234 6.054c.919 1.224 1.645 2.192 1.645 4.286 0 2.092-.725 3.058-1.644 4.282-1.048 1.395-2.235 2.976-2.235 6.051 0 .816.663 1.476 1.482 1.476s1.482-.66 1.482-1.476c0-2.093.725-3.059 1.644-4.283 1.048-1.395 2.235-2.976 2.235-6.05 0-3.076-1.187-4.658-2.234-6.054-.919-1.224-1.645-2.192-1.645-4.286 0-2.094.726-3.061 1.645-4.286 1.047-1.396 2.234-2.978 2.234-6.054z" fill="#0000A1" data-color="1"/>
                        <path d="M92.726 128.513c0-.816-.663-1.476-1.482-1.476s-1.482.66-1.482 1.476c0 2.094-.726 3.061-1.645 4.286-1.047 1.395-2.234 2.978-2.234 6.054s1.187 4.658 2.234 6.054c.919 1.224 1.645 2.192 1.645 4.286 0 2.092-.725 3.058-1.644 4.282-1.048 1.395-2.235 2.976-2.235 6.051 0 .816.663 1.476 1.482 1.476s1.482-.66 1.482-1.476c0-2.093.726-3.059 1.644-4.283 1.048-1.395 2.235-2.976 2.235-6.05 0-3.076-1.187-4.658-2.234-6.054-.919-1.224-1.645-2.192-1.645-4.286 0-2.094.726-3.061 1.645-4.286 1.047-1.396 2.234-2.978 2.234-6.054z" fill="#0000A1" data-color="1"/>
                        <path d="M114.118 128.513c0-.816-.663-1.476-1.482-1.476s-1.482.66-1.482 1.476c0 2.094-.726 3.061-1.645 4.286-1.047 1.395-2.234 2.978-2.234 6.054s1.187 4.658 2.234 6.054c.919 1.224 1.645 2.192 1.645 4.286 0 2.092-.725 3.058-1.644 4.282-1.048 1.395-2.235 2.976-2.235 6.051 0 .816.663 1.476 1.482 1.476s1.482-.66 1.482-1.476c0-2.093.725-3.059 1.644-4.283 1.048-1.395 2.235-2.976 2.235-6.05 0-3.076-1.187-4.658-2.234-6.054-.919-1.224-1.645-2.192-1.645-4.286 0-2.094.726-3.061 1.645-4.286 1.046-1.396 2.234-2.978 2.234-6.054z" fill="#0000A1" data-color="1"/>
                        <path d="M135.509 128.513c0-.816-.663-1.476-1.482-1.476s-1.482.66-1.482 1.476c0 2.094-.726 3.061-1.645 4.286-1.047 1.395-2.234 2.978-2.234 6.054s1.187 4.658 2.234 6.054c.919 1.224 1.645 2.192 1.645 4.286 0 2.092-.725 3.058-1.644 4.282-1.048 1.395-2.235 2.976-2.235 6.051 0 .816.663 1.476 1.482 1.476s1.482-.66 1.482-1.476c0-2.093.726-3.059 1.644-4.283 1.048-1.395 2.235-2.976 2.235-6.05 0-3.076-1.187-4.658-2.234-6.054-.919-1.224-1.645-2.192-1.645-4.286 0-2.094.726-3.061 1.645-4.286 1.047-1.396 2.234-2.978 2.234-6.054z" fill="#0000A1" data-color="1"/>
                        <path d="M147.91 72.861h2.011l-1.467 1.675a.796.796 0 0 0 .604 1.324.796.796 0 0 0 .604-.274l2.387-2.725h8.009l-4.253 4.236-3.622-.246c-.442-.043-.825.302-.855.742s.304.822.746.851l2.226.151-1.513 1.507a.797.797 0 0 0 .567 1.364.8.8 0 0 0 .567-.234l1.512-1.506.152 2.217a.8.8 0 0 0 .8.744c.019 0 .037 0 .056-.002a.8.8 0 0 0 .746-.851l-.247-3.608 4.252-4.235v7.995l-2.736 2.377a.8.8 0 1 0 1.054 1.204l1.681-1.461v1.984a.8.8 0 0 0 .803.799.801.801 0 0 0 .803-.799v-1.984l1.68 1.461a.802.802 0 0 0 1.131-.077.796.796 0 0 0-.077-1.127l-2.735-2.377v-7.995l4.238 4.221-.247 3.609a.799.799 0 0 0 .746.851l.056.002c.418 0 .77-.323.8-.744l.152-2.217 1.526 1.52a.8.8 0 0 0 1.134 0 .797.797 0 0 0 0-1.13l-1.526-1.52 2.226-.151a.8.8 0 0 0 .746-.851.804.804 0 0 0-.855-.742l-3.622.246-4.24-4.223h8.027l2.387 2.725a.8.8 0 0 0 1.208-1.05l-1.467-1.675h1.993a.801.801 0 0 0 .803-.799.8.8 0 0 0-.803-.799h-1.993l1.467-1.675a.796.796 0 0 0-.077-1.127.804.804 0 0 0-1.132.077l-2.387 2.725h-8.027l4.24-4.223 3.622.246.056.002a.799.799 0 0 0 .054-1.595l-2.226-.151 1.526-1.52a.797.797 0 0 0 0-1.13.805.805 0 0 0-1.135 0l-1.526 1.52-.152-2.217a.798.798 0 0 0-.855-.742.8.8 0 0 0-.746.851l.247 3.609-4.238 4.221v-7.977l2.735-2.377a.796.796 0 0 0 .077-1.127.804.804 0 0 0-1.132-.077l-1.68 1.461v-2.002a.8.8 0 0 0-.803-.799.801.801 0 0 0-.803.799v2.003l-1.681-1.461a.804.804 0 0 0-1.132.077.796.796 0 0 0 .077 1.127l2.736 2.377v7.977l-4.252-4.235.247-3.608a.799.799 0 0 0-.746-.851.79.79 0 0 0-.855.742l-.152 2.217-1.512-1.506a.805.805 0 0 0-1.135 0 .797.797 0 0 0 0 1.13l1.513 1.507-2.226.151a.8.8 0 0 0-.746.851.8.8 0 0 0 .8.744c.019 0 .037 0 .056-.002l3.622-.246 4.253 4.236h-8.009l-2.387-2.725a.804.804 0 0 0-1.132-.077.796.796 0 0 0-.077 1.127l1.467 1.675h-2.011a.801.801 0 0 0-.803.799.804.804 0 0 0 .805.796z" fill="#0000A1" data-color="1"/>
                    </g>
                </svg>
            </a>
            <h1 class="text-center">AIRE ACONDICIONADO</h1>
            <h3 class="text-center">suministro e instalación de equipos de aire acondicionado, mini split, paquetes,fan and coil de agua helada, chiller.</h3>
        </div>


        <div class="col-md-4 text-center">
            <a href="{{route('servicios')}}#ducterias">
                <img src="{{asset('img/iconos/ductos2.png')}}" title="Click para ver más" alt="">
            </a>
            <h1 class="text-center">DUCTERIAS</h1>
            <h3 class="text-center">suministro e instalación de ductos para equipos de aire acondicionado, sistemas de extracción, ventilación y campanas de cocinas.</h3>
        </div>

    </div>

    <a class="btn btn-primary btn-lg w-max mt-2 float-right" href="{{route('servicios')}}" tabindex="0">Ver más</a>
</div>

<div class="container px-5 my-5 py-5" id="filters">

    {{-- <h1 class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</h1> --}}

    <p class="text-center hero-title-blue mt-5">SUMINISTRAMOS UNA GRAN DIVERSIDAD DE FILTROS Y LAMPARAS UV:</p>
    <div class="slider-for-filters px-5 mx-auto">
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro HEPA</h1>
            <img src="{{asset('img/filtros/don-hepa.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro de Bolsa</h1>
            <img src="{{asset('img/filtros/aircare-filtros-nuevo.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Carbón Relleno</h1>
            <img src="{{asset('img/filtros/carbon.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Carbon Pleat y Carbon Pleat Plus</h1>
            <img src="{{asset('img/filtros/CARBON-PLEAT.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro Desechable de Fibra de Vidrio</h1>
            <img src="{{asset('img/filtros/dispofiber1.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro Electrostático</h1>
            <img src="{{asset('img/filtros/electrostatico1.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro 95% D.O.P.</h1>
            <img src="{{asset('img/filtros/MICRO-95-DOP.jpg')}}" alt="" class="mx-auto">
        </div>
        <div>
            <h3 class="text-center mb-0 filter-title">Filtro de Pliegues / Pleated</h1>
            <img src="{{asset('img/filtros/pliegues1.jpg')}}" alt="" class="mx-auto">
        </div>
    </div>

    <div class="slider-filters px-5 mx-5 mx-auto">
        <div><img src="{{asset('img/filtros/don-hepa.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/aircare-filtros-nuevo.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/carbon.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/CARBON-PLEAT.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/dispofiber1.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/electrostatico1.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/MICRO-95-DOP.jpg')}}" alt="" class="mx-auto"></div>
        <div><img src="{{asset('img/filtros/pliegues1.jpg')}}" alt="" class="mx-auto"></div>
    </div>

</div>



<p class="marcas-title text-center">MARCAS:</p>
<div class="brands my-5">

    <div>
        <img src="{{asset('img/logos/carrier.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/gree.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/lennox.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/lgvermont.jpg')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/lg.png')}}" alt="" class="mx-auto">
    </div>
   
    <div>
        <img src="{{asset('img/logos/mitsubishi.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/rheem.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/trane.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/york.png')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/prime.webp')}}" alt="" class="mx-auto">
    </div>
    <div>
        <img src="{{asset('img/logos/mirage.png')}}" alt="" class="mx-auto mirage">
    </div>
</div>

@endsection