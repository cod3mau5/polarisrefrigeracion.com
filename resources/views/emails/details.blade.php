<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        @media  only screen and (max-width: 500px) {
            table {
                width: 100%;
            }

           .fulltd {
                display: block;
                width: 100%;
            }
            .logo {
                text-align: right;
            }
        }
    </style>
</head>
<body>
    <?php 
        $boat= App\Boat::find($model->boat_id);
    ?>
<table width="600" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block; padding-top:30px; margin-bottom: 50px;">
    <tr>
        <td colspan="2" style="padding: 10px; background: #081549;">
            <img src="http://boatsbaja.com/img/logos.png" alt="">
        </td>
    </tr>

    <tr>
        <td colspan="2" style="padding:5px 15px; font-family: Arial, Helvetica, sans-serif;">
            <p style="font-size: 16px;">
                @if ($model->payID)
                <strong>Thank you for your Payment:</strong>
                @else
                <strong>Thank you for your Request:</strong>
                @endif
            </p>
            <p>This email is to confirm that your Reservation
                @if ($model->payID)
                Payment
                @else
                Request
                @endif
            was received.</p>
            <p>This is a short version of your request:</p>
        </td>
    </tr>

    <tr>
        <td colspan="2" style="padding: 15px;">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block;">
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Your name:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$model->fullname}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Your email:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$model->email}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Special Request:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$model->special_request}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Passengers:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->totalpax}}</strong></td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Boat:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$boat->name}}</strong></td>
                </tr>
                
                @if($model->duration > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Date:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->trip_date}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Date:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$model->trip_date}}</strong></td>
                    </tr>

                @endif

                @if($model->duration > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Time:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->time}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Time:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$model->time}}</strong></td>
                    </tr>

                @endif

                @if($model->duration > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Duration:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->duration}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Duration:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$model->duration}}</strong></td>
                    </tr>

                @endif


               @if ($model->cash !== true)
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Cost:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$model->total_cost}} USD</strong></td>
                    </tr>
                    @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Cost:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$model->total_cost * 3}} USD</strong></td>
                    </tr>
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Paid:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$model->total_cost}} USD</strong></td>
                    </tr>

               @endif

                @if($model->cash === true)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>25% Deposit Reservation</strong></td>
                    </tr>
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Status:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong style="color:crimson">Pending</strong></td>
                    </tr>

                @endif

               @if($model->paypal === true)
                    @if ($model->payID)
                        <tr style="background-color: #FFFFFF;">
                            <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                            <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>PayPal</strong></td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Status:</td>
                            <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong style="color:springgreen">Paid</strong></td>
                        </tr>
                        <tr style="background-color: #FFFFFF;">
                            <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">PayPal ID:</td>
                            <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->payID}}</strong></td>
                        </tr>
                    @endif
               @endif
               @if($model->cash === true || $model->credit_card === true)
               @if ($model->payID)
                   <tr style="background-color: #FFFFFF;">
                       <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                       <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>Credit Card</strong></td>
                   </tr>
                   <tr style="background-color: #FFFFFF;">
                       <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Status:</td>
                       <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong style="color:springgreen">Paid</strong></td>
                   </tr>
                   <tr style="background-color: #FFFFFF;">
                       <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Stripe ID:</td>
                       <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$model->payID}}</strong></td>
                   </tr>
               @endif
          @endif
            </table>
        </td>
    </tr>

  
   
    <tr>
        <td colspan="2" style="padding:5px 15px; font-family: Arial, Helvetica, sans-serif;">
            @if ($model->payID)
                <hr>
            @else
                <p>We accept the following Payments methods:<br>
                    <strong>PAY PAL AND CASH UPON ARRIVAL</strong>
                </p>
            @endif
            <p style="text-align: center">
                <br>
                <a href="http://boatsbaja.com/voucher/{{$model->voucher}}"
                    style="color: #fff; background: #00ab6d; padding: 10px 20px; border:1px solid #00ab6d; border-radius: 16px; text-decoration: none;"
                >
                    Review your Voucher
                </a>
                <br>
            </p>
        </td>
    </tr>
   
    <tr>
        <td colspan="2">
            <p style="margin-left: 50px;">
                <strong>Boats Baja Contact Information</strong><br>
                 Mobile: +52 1 (612) 156 6639<br>
                 Office: +52 1 (624) 688 9130

                <a href="mailto:info@boatsbaja.com" style="text-decoration: none;">
                    <strong>info@boatsbaja.com</strong>
                </a><br>
            </p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="background: #e4eef1; color: #a4a7ac; padding: 30px; text-align: center;">
            <p>&copy;2019 Boats Baja Sport Fishing & Charters. All Right Reserved.</p>
        </td>
    </tr>
</table>
</body>
</html>

