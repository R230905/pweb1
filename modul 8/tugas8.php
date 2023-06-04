<fieldset>
    <legend>Input Nilai</legend>
    <form action="" method="post">
        <table border = "0" width="335">
            <tr>
                <td width = "130">Nilai</td>
                <td width = "8">:</td>
                <td width = "180">
                    <input type="text" name="nilai" id="textfield">
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type = "submit" name ="button" value="proses" ></td>
            </tr>
        </table>
        <?php
                if (isset($_POST['nilai']))
                {
                    $skor=$_POST['nilai'];
                    if ($skor%2 == 0) {
                        echo "$skor adalah bilangan genap";
                    }
                    else
                    {
                        echo "$skor adalah bilangan ganjil";
                    }
                }         
            ?>
    </form>
</fieldset>