<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'relacionamento1.php';
    require_once 'relacionamento2.php';

        $p = new Lutador('fulano', 'et', '200', '2.80', '80.2', 'leve', '25', '2', '1');

        $p2 = new Lutador('ciclano', 'br', '20', '1.80', '52.2', 'leve', '10', '2', '8');

        $p3 = new Lutador('xabarabanã', 'eua', '20', '1.80', '90.6', 'leve', '1', '8', '2');

        $p4 = new Lutador('aeiou', 'eua', '20', '1.80', '55', 'leve', '3', '20', '3');

        $p5 = new Lutador('enem', 'eua', '55', '1.95', '83.8', 'leve', '0', '5', '10');

        $p6 = new Lutador('ihip', 'jp', '55', '1.95', '120.2', 'leve', '20', '0', '0');

        
        $lut1 = new Luta();
        $lut1->marcarLuta($p, $p1);
        $lut1->lutar();


        //não esta aparecendo na tela.
    ?>
    </pre>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once 'relacionamento1.php';
    require_once 'relacionamento2.php';

        $p = new Lutador('fulano', 'et', '200', '2.80', '80.2', 'leve', '25', '2', '1');

        $p2 = new Lutador('ciclano', 'br', '20', '1.80', '52.2', 'leve', '10', '2', '8');

        $p3 = new Lutador('xabarabanã', 'eua', '20', '1.80', '90.6', 'leve', '1', '8', '2');

        $p4 = new Lutador('aeiou', 'eua', '20', '1.80', '55', 'leve', '3', '20', '3');

        $p5 = new Lutador('enem', 'eua', '55', '1.95', '83.8', 'leve', '0', '5', '10');

        $p6 = new Lutador('ihip', 'jp', '55', '1.95', '120.2', 'leve', '20', '0', '0');

        
        $lut1 = new Luta();
        $lut1->marcarLuta($p, $p1);
        $lut1->lutar();


        //não esta aparecendo na tela.
    ?>
    </pre>
</body>
>>>>>>> acfd551e775ee186e067248d6676c6dfaf6167a8
</html>