<?php
    $nim = "0411500400";
    $nama = 'Chotimatul Musyarofah';
    $umur = 23;
    $nilai = 82.25;
    $status = TRUE;
    echo "Nilai : $nilai<br>";
?>

<table border="1">
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td>
            <?php
            echo "$nim";
            ?>
        </td>
    </tr>
    <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>
            <?php
                echo "$nama";
            ?>
        </td>
    </tr>
    <tr>
        <td>UMUR</td>
        <td>:</td>
        <td>
            <?php
            echo "$umur";
            ?>
        </td>
    </tr>
    <tr>
        <td>NILAI</td>
        <td>:</td>
        <td>
            <?php
            echo "$nilai";
            ?>
        </td>
    </tr>
</table>