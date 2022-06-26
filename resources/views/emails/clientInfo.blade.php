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
        $boat= App\Boat::find($data['boat_id']);
    ?>
<table width="600" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block; padding-top:30px; margin-bottom: 50px;">
    <tr>
        <td colspan="2" style="padding: 10px; background: #081549;">
            <img src="http://boatsbaja.com/img/logos.png" alt="">
        </td>
    </tr>

    <tr>
        <td colspan="2" style="padding:5px 15px; font-family: Arial, Helvetica, sans-serif;">
            <h1 style="font-size: 16px;">

                <strong> PAYMENT ATTEMPT:</strong>
             
            </h1>
         
    </tr>

    <tr>
        <td colspan="2" style="padding: 15px;">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block;">
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Your name:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['fullname']}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Your email:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['email']}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Special Request:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['special_request']}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Passengers:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$data['totalpax']}}</strong></td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Boat:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$boat->name}}</strong></td>
                </tr>
                
                @if($data['duration'] > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Date:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$data['trip_date']}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Date:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$data['trip_date']}}</strong></td>
                    </tr>

                @endif

                @if($data['duration'] > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Time:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$data['time']}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Time:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$data['time']}}</strong></td>
                    </tr>

                @endif

                @if($data['duration'] > 4)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Fishing Duration:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>{{$data['duration']}}</strong></td>
                    </tr>
                @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Tour Duration:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong >{{$data['duration']}}</strong></td>
                    </tr>

                @endif


               @if ($data['cash'] !== true)
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Cost:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$data['total_cost']}} USD</strong></td>
                    </tr>
                    @else
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Cost:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$data['total_cost'] * 3}} USD</strong></td>
                    </tr>
                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Total Paid:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>$ {{$data['total_cost']}} USD</strong></td>
                    </tr>

               @endif

                @if($data['cash'] === true)

                    <tr style="background-color: #FFFFFF;">
                        <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                        <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>25% Deposit Reservation</strong></td>
                    </tr>

                @endif

               @if($data['paypal'] === true)

                        <tr style="background-color: #FFFFFF;">
                            <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                            <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>PayPal</strong></td>
                        </tr>

               @endif
               @if($data['cash'] === true || $data['credit_card'] === true)
      
                   <tr style="background-color: #FFFFFF;">
                       <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Payment Method:</td>
                       <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd"><strong>Credit Card</strong></td>
                   </tr>
f
          @endif
            </table>
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

