<! DOCTYPE html>
< html  lang = " en " >

    < meta  charset = " UTF-8 " >
    < meta  name = " viewport "  content = " width = device-width, initial-scale = 1.0 " >
    < meta  http-equiv = " Compatible con X-UA "  contenido = " ie = borde " >
    < título > Practica 12 </ título >

    < h1 > Usando Variables </ h1 >
    <? php
    $ Nombre = " Jorge Luis " ;
    $ Edad = 20 ;
    $ SalarioMensual = 8500.50 ;
    $ Sindicalizado = falso ;
    echo  $ Nombre .  ' <br> ' ;
    echo  $ edad .  ' <br> ' ;
    echo  $ SalarioMensual .  ' <br> ' ;
    echo  $ sindicalizado .  ' <br> ' ;
    echo  ' empleado ' , $ nombre .  ' tiene ' , $ Edad , ' años ' ;
    ? >
    < h1 > Operaciones Aritmeticas </ h1 >
    <? php
    $ Numero1 = 15 ;
    $ Numero2 = 10 ;
    $ Suma = $ Numero1 + $ Numero2 ;
    $ Resta = $ Numero1 - $ Numero2 ;
    $ Multiplicacion = $ Numero1 * $ Numero2 ;
    $ Division = $ Numero1 / $ Numero2 ;
    echo  ' suma ' , $ suma .  ' resta ' , $ resta .  ' multiplicacion ' , $ multiplicacion .  ' división ' , $ división ;
    echo  ' suma ' , ( $ Numero1 + $ Numero2 );
    si ( $ sindicalizado == verdadero )
    {
        echo  ' va a huelga ' ;
    }
    más
    {
        echo  ' trabajara ' ;
    }
    ? >

</ html >