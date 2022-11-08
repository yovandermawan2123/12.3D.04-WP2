<div class="card">
    <div class="card-header"><h3><?php echo $judul ?></h3></div>
    <div class="card-body">

       <?php if(validation_errors() != false){ ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    
        <?php } ?>

        <form action="<?php echo base_url(); ?>web/update/<?= $bio->id; ?>" method="post">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" value="<?= $bio->nama; ?>" name="nama">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" aria-label="Default select example">
                <option value="<?= $bio->jk; ?>" selected><?= $bio->jk; ?></option>
                <option value="1">Laki - laki</option>
                <option value="2">Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" id="exampleFormControlTextarea1" rows="3"><?= $bio->alamat; ?></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="name" class="form-label">Pekerjaan</label>
            <input type="name" class="form-control" id="pekerjaan" value="<?= $bio->pekerjaan; ?>" name="pekerjaan">
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="<?php echo base_url() . 'web/bio' ?>" class="btn btn-danger" type="submit">Batal</a>

        </form>
    </div>
</div>