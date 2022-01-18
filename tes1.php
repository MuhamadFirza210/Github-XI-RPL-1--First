<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Mingguan</title>
</head>
<body style="background-color : aqua;">

<center>
    <h2 align="center">Program</h2>
    <form action="" method="post">
        <table align="center">
            <tr>
                <td></td>
                <td></td>
                <td>1. Program Pengulangan Kelipatan 2</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>2. program kelipatan 5 x 5</td>
            </tr><tr>
                <td></td>
                <td></td>
                <td>3. Program Ganjil Genap</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>4.program pengulangan kuadrat</td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="number" name="pilih"></td>
            </tr>
            <tr>
                <td>Masukkan Angka</td>
                <td>:</td>
                <td><input type="number" name="masukkan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="KIRIM"></td>
            </tr>
        </table>
    </form>
    <?php
if (isset($_POST['kirim'])) {
    $pilih = $_POST['pilih'];
    $angka = $_POST['masukkan'];

    if ($pilih == 1) {
        echo "<center>";
        echo "<h3>Program pengulangan kelipatan 2</h3>";
        for ($x = 2; $x <= $angka; $x += 2) {
            echo "$x ";
        }
        echo "</center>";
    }
    elseif ($pilih == 2){
        echo "<center>";
        echo "<h3>Program Pengulangan Kelipatan 5 x 5</h3>";
        for ($x = 5; $x <= $angka; $x += 5) {
            $hasil =$x*5;
            echo "Nilai =$x x 5=$hasil<br>";
        }
        echo "</center>";
    }
    elseif ($pilih == 3){
        echo "<center>";
        echo "<h3>Program Ganjil Genap</h3>";
        for ($bil = 1; $bil <= $angka; $bil++){
            if ($bil % 2 ==0){
                echo "$bil Adalah Bilangan Genap<br>";
            }else {
                echo"$bil Adalah Bilangan Ganjil<br>";
            }
        }
        echo "</center>";
    }
    elseif($pilih ==4){
        echo "<b>4.Program Pengulangan kuadrat</b><br><hr>";
        for($q=1; $q <=$angka; $q++){
            $hsl=$q*$q;
            echo"$q x $q=$hsl<br>";
        }
    }
    
}
    

    
?>
</center>
</body>
</html>