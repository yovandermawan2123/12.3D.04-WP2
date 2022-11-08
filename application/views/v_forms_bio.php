<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <center>
        <form action="<? echo base_url('Bio/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th>
                        Biodata Saya :
                    </th>
                </tr>
                <tr>
                    <th>
                        NIM
                    </th>
                    <th>:</th>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <th>
                        NAMA
                    </th>
                    <th>:</th>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>
                        Prodi
                    </th>
                    <th>:</th>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="si">Sistem Informasi</option>
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                         </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>