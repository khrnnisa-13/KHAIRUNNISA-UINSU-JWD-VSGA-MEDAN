<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Order</title>
</head>
<body>

    <h2>Input Data Order</h2>

    <form action="order_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="order_nama"></td>
        </tr>
        <tr>
            <td>HP</td>
            <td><input type="text" name="order_hp"></td>
        </tr>
        <tr>
            <td>JENIS</td>
            <td><select name="order_jenis">
                <option value="1">SILK</option>
                <option value="2">PARIS</option>
                <option value="3">PASHMINA</option>
                <option value="4">SPORT</option>
            </select></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="order_jumlah"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="b_simpan" value="Simpan"></td>
        </tr>
    </table>
    </form>



</body>
</html>
