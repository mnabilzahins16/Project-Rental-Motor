<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <table>
            <form action="" method="POST">
                <tr>
                    <td>Nama Pelanggan : </td>
                    <td>
                        <input type="text" name="name" id="name" required>
                    </td>
                </tr>
                <tr>
                    <td>Lama Waktu Rental (per hari) : </td>
                    <td>
                        <input type="text" name="time" id="time" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Motor : </td>
                    <td>
                        <select name="jenis" id="jenis">
                            <option disabled selected>--Bike Option--</option>
                            <option value="NakedBike">Naked-Bike</option>
                            <option value="SportBike">Sport-Bike</option>
                            <option value="RetroBike">Retro-Bike</option>
                            <option value="TouringBike">Touring-Bike</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" name="kirim">Kirim</button>
                    </td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>

<?php
    include 'proses.php';
    $proses = new Beli();
    $proses->setHarga(70000, 120000, 80000, 85000);
    if (isset($_POST['kirim'])) {
        $proses->name = $_POST['name'];
        $proses->time = $_POST['time'];
        $proses->jenis = $_POST['jenis'];
        
        $proses->cetakPembelian();
    }
?>