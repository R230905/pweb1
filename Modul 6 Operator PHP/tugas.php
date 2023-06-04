<?php
$server = $_SERVER['PHP_SELF'];
?>
<h2>Contoh Penggunaan Operator pada PHP</h2>
<form action="<?php echo $server;?>" method="post">
    <table border="0">
        <tr>
            <td>Nilai A
            </td>
            <td>:</td>
            <td><input type="text" name="nilai1" value=""/></td>
        </tr>
        <tr>
            <td>Nilai B
            </td>
            <td>:</td>
            <td><input type="text" name="nilai2" value=""/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="proses" value="Tambah"/>&nbsp;<input type="reset" name="reset" value="Reset"/></td>
        </tr>
    </table>
</form>
<table border="0">
    <tr>
        <tb>Hasil</tb>
        <tb>:</tb>
        <tb>
            <?php
                if (isset($_POST['nilai1']))
                {
                    $a = $_POST['nilai1'];
                    $b = $_POST['nilai2'];
            
                    $hasil = $a + $b;
                    echo $hasil;
                }
            ?>
        </tb>
    </tr>
</table>