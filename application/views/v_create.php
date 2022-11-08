<div class="card">
    <div class="card-header"><h3>Tambah Data</h3></div>
    <div class="card-body">

       <?php if(validation_errors() != false){ ?>
        <div class="alert alert-danger">
            <?php echo validation_errors(); ?>
        </div>
    
        <?php } ?>

        <form action="<?php echo base_url(); ?>web/save" method="post">
        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="name" class="form-control" id="name" name="nama">
        </div>
        <div class="form-group mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select" id="jenis_kelamin" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Laki-laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="name" class="form-label">Pekerjaan</label>
            <input type="name" class="form-control" id="pekerjaan" name="pekerjaan">
        </div>

        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="<?php echo base_url() . 'web/bio' ?>" class="btn btn-danger" type="submit">Batal</a>

        </form>
    </div>
</div>