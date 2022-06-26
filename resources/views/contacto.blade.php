@extends('layouts.contact-master')

@section('content')

<section class="my-5">
    <div class="container">
        <div class="row">
            <h1 class="hero-title-blue">
                Contacto
            </h1>
        </div>

        <div class="row">

            <div class="col-md-4">

                    <p id="suico_5ebb9593d6c74" class="su-icon">
                        <i class="fa fa-map-marker"></i>
                        <strong>Ubicación:</strong><br/>Calle Prolongación Matamoros S/N entre 5 de Febrero y Reforma, Cabo San Lucas, B.C.S., México
                    </p>
                    <p id="suico_5ebb9593d6d7a" class="su-icon phone">
                        <i class="fa fa-phone"></i>
                        Tel. (624) 143 90 65<br/>
                    </p>
                    <p id="suico_5ebb9593d6e65" class="su-icon phone">
                        <i class="fa fa-phone"></i>
                        Cel. (01) 624 129 05 12
                    </p>
                    <p id="suico_5ebb9593d6e65" class="su-icon phone">
                        <i class="fa fa-phone"></i>
                        Cel. (01) 624 175 7590
                    </p>
                    <p id="suico_5ebb9593d6e65" class="su-icon phone">
                        <i class="fa fa-phone"></i>
                        Cel. (01) 624 125 2741
                    </p>
                    <p id="suico_5ebb9593d6f4c" class="su-icon phone">
                        <i class="fa fa-envelope"></i>
                        polarisdorantes@live.com.mx
                    </p>

            </div>
            <div class="col-md-8">
                <div class="su-column-inner su-clearfix">
                    <p>
                        <div id="map" style="height: 256px;"></div>
                    </p>
                    <form  method="post" id="contact-form">
                        <div class="form-group">
                            <input class="form-control" name="fullname" id="fullname" required="" type="text" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="phone" id="phone" required="" pattern=".{8,10}" type="tel" placeholder="Teléfono">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" id="email" required="" type="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" required="" rows="4" placeholder="Mensaje"></textarea>
                        </div>

                        @csrf
                        <div class="form-group">
                            <button class="btn btn-primary btn-lg w-max mt-2 float-right send-btn">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</section>
       

@endsection


