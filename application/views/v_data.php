<div style="padding:20px;" >
<h1><?php echo $judul ?></h1>
<table border="1">
    <tr>
    <th>
            No
        </th>
        <th>
            Nama
        </th>
        <th>
            Jenis Kelamin
        </th>
        <th>
            Alamat
        </th>
        <th>
            Pekerjaan
        </th>
    </tr>

    <?php foreach ($bio as $key => $b) { ?>
        <td>
            <?php echo $key + 1 ?>
        </td>
        <td>
            <?php echo $b->nama ?>
        </td>
        <td>
            <?php echo $b->jk ?>
        </td>
        <td>
            <?php echo $b->alamat ?>
        </td>
        <td>
            <?php echo $b->pekerjaan ?>
        </td>

    <?php } ?>
</table>
<br>
</div>