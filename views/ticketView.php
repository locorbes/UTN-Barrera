<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <!-- Print js -->
    <script type="text/javascript">
        function printDiv(nombreDiv) {
        var contenido= document.getElementById(nombreDiv).innerHTML;
        var contenidoOriginal= document.body.innerHTML;
        document.body.innerHTML = contenido;
        window.print();
        document.body.innerHTML = contenidoOriginal;
        }
        window.onresize = function() 
        {
            window.resizeTo(320,500);
        }
        window.onclick = function() 
        {
            window.resizeTo(320,500);
        }
    </script>
    <!-- Print style -->
     <style type="text/css"> @media print { body * { visibility: visible; } #ticket * { visibility: visible; } #ticket { position: absolute; top: 40px; left: 30px; } } </style> 
    <!-- Custom styles for this template -->
    <link href="<?php echo $helper->content('css/ticket.css'); ?>" rel="stylesheet">
</head>
<body>
    <div id="ticket">
        <div class="ticket">
        <b>UTN-FRGP</b><br>
        CUIT:202020202020<br>
        ING.BRUTO:202020-20<hr>
        Av. Hipólito Yrigoyen 288<br> 
        B1617 Gral. Pacheco, Buenos Aires<br><br>
        NRO.TICKET 20202020<br><br>
        <span class="fecha">FECHA<br>20-20-20</span>
        <span class="hora">HORA<br>20:20</span><br><br><br>
        <b>IMPORTE TOTAL $20,20</b><br>
        <div class="footer">
        CAJERO ID: 20<br>
        IVA RESPONSABLE INSCRIPTO A CONSUMIDOR FINAL</div>
        </div>
    </div>
    <input type="button" onclick="printDiv('ticket')" value="IMPRIMIR" style="float:right;margin-top:8px;"/>
</body>
</html>