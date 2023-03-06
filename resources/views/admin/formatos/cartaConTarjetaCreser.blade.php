<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
            .imgHeader {
                width: 100%;
                height: 15%;
            }

            /* @page {
                margin-left: 0.5cm;
                margin-top: 0.5;
            } */
            h1{
                text-align: center;
                text-transform: uppercase;
            }
            .contenido{
                margin-top: -0.6cm;
            }
            #texto1{
                text-align: justify;
                font-size: 14px;
                /* background-color: #ccc; */
            }
            .texto2{
                text-align: center;
                color: red;
                font-size: 18px;
            }
            #tableContent {
                width: 100%;
                /* text-align: center; */
            }
            #imgTarjeta{
                width: 75%;
                height: 10%;
            }
            #imgAzteca{
                width: 13%;
                height: 5%;
                margin-left: 9%;
            }
            #barcode {
                width: 3%;
                height: 5%;
            }
            #imgOxxo {
                width: 13%;
                height: 6%;
                margin-top: -7%;
                margin-left: 40%;
            }
            #imgBBVA {
                width: 14%;
                height: 3%;
                margin-left: 5%;
                margin-top: 2%;
            }
            .punteado{
                border-style: dashed;
                border-width: 1px;
                border-color: black;
                background-color: transparent;
                font-family: verdana, arial;
                font-size: 10pt;
                width: 55%;
                height: 25%;
                margin-right: 10%;
                padding-top: -70%;
                position: relative;
                z-index: -50;
            }
            .imgLinealAzteca {
                width: 60%;
                height: 6%;
            }
            .imgLinealOxxo {
                width: 15%;
                height: 6%;
                margin-top: -25%;
                margin-left: 72%;
            }
            .imgLinealBBVA {
                width: 15%;
                height: 4%;
                margin-top: -15%;
                margin-left: 72%;
            }

            #labelDeposito{
                margin-top: -10%;
                margin-left: 62%;
                font-family: verdana, arial;
                font-size: 11pt;
            }
            .labelConsi {
                font-family: verdana, arial;
                font-size: 16pt;
                text-align: center;
            }
            .labelConsideraciones {
                font-size: 8pt;
                text-align: justify;
            }
            .imgFooter {
                width: 100%;
                height: 25%;
                margin-top: -10%;
                z-index: -400;
            }
            #labelty {
                font-size: 12pt;
                text-align: center;
                margin-top: 4%;
            }
            .labeltymsg {
                font-size: 8pt;
                text-align: center;
                margin-top: 2%;
                z-index: 800;
                /* color: white; */
            }
    </style>
    </head>
    <body>
        <img src="{{ asset('assets/img/formatos/creser/header.png') }}" class="imgHeader" alt="" title="" />
        {{-- <h1>Titulo de prueba</h1> --}}
        {{-- <hr> --}}
        <div class="contenido">
            <p id="texto1"><strong>Cre-ser cultural</strong>  agradece que nos distinga con la adquisición de nuestras obras.  Tenemos la seguridad de que en la investigación y lectura de estas obras encontrará el conocimiento necesario para aumentar su acervo cultural.    </p>
            <p class="texto2"><strong>¡SEA USTED BIENVENIDO!</strong></p>
            <table id="tableContent">
                <tr>
                    <td><strong>FOLIO</strong> 123</td>
                    <td><strong>MONTO</strong> $200.00</td>
                </tr>
                <tr>
                    <td style="width: 70%;">
                        <img src="{{ asset('assets/img/formatos/creser/header.png') }}" id="imgTarjeta" alt="" title="" />
                    </td>
                    <td><img src="{{ asset('assets/img/formatos/creser/azteca.png') }}" alt="" title="" class="imgLinealAzteca"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="width: 70%;">
                        <strong>Ref. Azteca:</strong> 128742837462374
                        <img src="{{ asset('assets/img/formatos/creser/azteca.png') }}" id="imgAzteca" alt="" title=""/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        {!! DNS1D::getBarcodeHTML('123456789012345678901234567890', 'C39', .5, 40) !!}
                        <img src="{{ asset('assets/img/formatos/creser/oxxo.png') }}" id="imgOxxo" alt="" title=""/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Ref. Oxxo:</strong> 123456789012345678901234567890
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong>Ref. BBVA Bancomer:</strong> 12345678
                        <img src="{{ asset('assets/img/formatos/creser/bbva.png') }}" id="imgBBVA" alt="" title=""/>
                    </td>
                </tr>
            </table>
            <img src="{{ asset('assets/img/formatos/creser/oxxo.png') }}" alt="" title="" class="imgLinealOxxo"/>
            <img src="{{ asset('assets/img/formatos/creser/bbva.png') }}" alt="" title="" class="imgLinealBBVA"/>
            <p id="labelDeposito"><strong>Depósitos los días 15 y 30 de cada mes</strong>.</p>
            <p class="labelConsi"><strong>CONSIDERACIONES</strong></p>
            <p class="labelConsideraciones">1.- Los pagos pueden realizarse en BANCO AZTECA, tiendas OXXO y en BBVA BANCOMER por la cantidad de $200.00 quincenal o $400.00 mensual.</p>
            <p class="labelConsideraciones">2.- El primer depósito será realizado máximo 15 días después de la adquisición.</p>
            <p class="labelConsideraciones">3.- Para realizar transferencia por BBVA BANCOMER a nombre de Manuel Ortega Sánchez con los siguientes datos:</p>
            <p class="labelConsideraciones" style="text-align: center !important;"><strong>Número de convenio: 1794493 ------------------  Clabe interbancaria: 012814002017944930</strong></p>
            <p class="labelConsideraciones">4.- Si al ser nuevo cliente requiere factura, envíe sus datos fiscales al correo electrónico: <strong>creserculturalMX@gmail.com</strong> ó whatsapp (228-170-33-99), misma que se le enviará electrónicamente en 24hrs ó impresa en 5 días.</p>
            <p class="labelConsideraciones">5.- Un beneficio adicional del cual puede gozar, usted es acreedor a un 20% de descuento por pago anticipado en una sola exhibicion.</p>
            <p id="labelty"><strong>¡GRACIAS POR SER PARTE DE CRE-SER CULTURAL!</strong></p>
            <p class="labeltymsg">Para cualquier duda y/o aclaración de su crédito, favor de comunicarse al teléfono Cel. (228) 170 33 99; ó al correo electrónico: creserculturalMX@gmail.com</p>
            <p style="font-size: 8pt;
            text-align: center;
            padding-top: -70%;
            z-index: 1800;">Lunes a Sábado de 9:00 am - 6:00 pm.</p>
            <img src="{{ asset('assets/img/formatos/creser/footer.png') }}" class="imgFooter" alt="" title="" />
        </div>
    </body>
</html>
