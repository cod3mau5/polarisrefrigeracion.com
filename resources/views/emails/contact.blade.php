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
<table width="600" align="center" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block; padding-top:30px; margin-bottom: 50px;">
    <tr>
        <td colspan="2" style="padding: 10px; background: #081549;">
            <img src="https://www.polarisrefrigeracion.com/img/logo_white.png" alt="">
        </td>
    </tr>
    <tr>
        <td colspan="2" style="padding:5px 15px; font-family: Arial, Helvetica, sans-serif;">
            <p>A new contact email request has been sent:</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="padding: 15px;">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-spacing: 0; border-collapse: 0; border: 0; margin: 0 auto; display: block;">
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Name:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['fullname']}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Email:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['email']}}</td>
                </tr>
                <tr style="background-color: #FFFFFF;">
                    <td width="250" bgcolor="#FFFFFF" style="width: 200px; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">Message:</td>
                    <td width="350" bgcolor="#FFFFFF" style="width: 400px; border-left: 5px solid #ffffff; padding:5px 15px;font-family: Arial, Helvetica, sans-serif;" class="fulltd">{{$data['message']}}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="background: #e4eef1; color: #a4a7ac; padding: 30px; text-align: center;">
            <p>&copy;2020  Polaris Refrigeración, Cabo san lucas B.C.S. México.</p>
        </td>
    </tr>
</table>
</body>
</html>

