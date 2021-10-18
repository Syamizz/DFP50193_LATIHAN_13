<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <h>Borang Permohonan(A)</h>
    <p>Validate guna html</p>
    <form action="semak.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required
                 minlength="2"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" required
                 min="18" max="45"></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>

    <p>
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang layak memohon.
    </p>
    <hr>
    <h>Borang Permohonan(B)</h>
    <p>Validate guna java script</p>
    <form action="semak.php" method="post" onsubmit="return semak();">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" ></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>

    <p>
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang layak memohon.
    </p>

    <script>
        function semak(){
            let nama = document.getElementById('nama').value;
            let umur = document.getElementById('umur').value;
        
            if(nama === '') {
                alert('Sila isi nama anda');
                return false;
            } elseif(nama.length<2){
                alert('Sila isi nama panjang anda');
                return false;
            } else if (umur<18 || umur>45){
                alert('Maaf, umur anda tidak layak');
                return false;
            } else{
                return else;
            }
        }
    </script>
<hr>
    <h>Borang Permohonan(C)</h>
    <p>Validate guna java PHP</p>
    <form action="semak.php" method="post" >
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" ></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="umur" ></td>
            </tr>
        </table>
        <button type="submit">Hantar</button>
    </form>

    <p>
        Hanya pemohon yang berumur antara 18 dan 45 tahun saja yang layak memohon.
    </p>
</body>
</html>