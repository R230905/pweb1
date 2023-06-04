<?php
    $n = 3; //menentukan variable yang akan ditambahkan
    $hasil = 0;
    $i=1;

    while ($i<=$n) {
        $hasil += $i;
        if ($i !=$n) {
            echo "$i + ";
        }
        elseif($i = $n) {
            echo "$i = ";
        }
        $i++;
    }
    echo "$hasil <br><br>";
?>

<html>
    <body>

    Perulangan For <br>
        <?php
            // $i=1;
            // while($i<=5)
            // {
            //     echo "Nomor " . $i . "<br>";
            //     $i++;
            // }
            for($i=1;$i<=5;$i++)
            {
                echo "Nomor " . $i . "<br>";
            }
        ?>
    Perulangan do while <br>
        <?php
        $i=1;
        do
        {
            echo "Nomor " . $i . "<br>";
            $i++;
        }while ($i<=5);    
         ?>
    </body>
</html>

