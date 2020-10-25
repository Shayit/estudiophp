<!doctype html>
<html>
    <head>
        <title>
            Mi primera página.
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body bgcolor="silver">
        <h1>¡Mi PÁGINA WEB!</h1> 

        <h2><i> HTML</h2></i>
        <p><i>
             El lenguaje HTML basa su filosofía de desarrollo en la diferenciación. Para añadir un elemento externo a la página (imagen, vídeo, script, entre otros.), este no se incrusta directamente en el código de la página, sino que se hace una referencia a la ubicación de dicho elemento mediante texto. De este modo, la página web contiene solamente texto mientras que recae en el navegador web (interpretador del código) la tarea de unir todos los elementos y visualizar la página final. Al ser un estándar, HTML busca ser un lenguaje que permita que cualquier página web escrita en una determinada versión, pueda ser interpretada de la misma forma (estándar) por cualquier navegador web actualizado.
        </p></i>

        <img src="image/html.png">

        <h3><i> PHP</h3></i>
        <p1><i>
                PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.​ Fue creado inicialmente por el programador danés-canadiense Rasmus <br>Lerdorf en 1994.​
                En la actualidad, la implementación de referencia de PHP es producida por The PHP Group
        </p1></i>
        <img id="im1" src="image/php.png" alt="bepet">
        <br>
        <br>
    </body>

    <body>
        <H4><i>CALCULADORA</H4></i>
    <form id="calculo" method="post" action="calculo.php">
        Ingrese valores y elige la operación:
        <br>
        <br>
         primer valor <input id="b1" type="text" name="Valor1">
        <br>
        <br>
         segundo valor <input id="b2" type="text" name="Valor2">
        <br>
        <br>
        <input type="radio" name="radio1" value="suma">Sumar
        <br>
        <input type="radio" name="radio1" value="resta">Restar
        <br>
        <input type="radio" name="radio1" value="multiplicar">Multiplicar
        <br>
        <input type="radio" name="radio1" value="division">Dividir
        <br>
        <br>
        <input type="submit" value="calcular">
        </form>
    </body>
</html>