<div style="padding:20px;" >
<h1><?php echo $judul ?></h1>
<a href="<?php echo base_url() . 'web/create' ?>" class="btn btn-success mb-3">Tambah</a>
<table border="1" class="table table-bordered">
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
        <th>
            Aksi
        </th>
    </tr>

    <?php foreach ($bio as $key => $b) { ?>
        <tr>
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
        <td class="text-center">
           <a href="<?php echo base_url(). 'web/edit/' . $b->id; ?>" class="btn btn-warning">Ubah</a>
           <a href="<?php echo base_url() . 'web/delete/' . $b->id; ?>" class="btn btn-danger">Hapus</a>
        </td>
        </tr>
    <?php } ?>
</table>
<br>
</div>