<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->load->view('partial/head.php') ?>
</head>
<body>
    <?= $this->load->view('partial/navbar.php') ?>
    <h1>Contact us</h1>
    <form action="" method="post">
        <div>
            <label for="name">Nama</label>
            <input type="text" name="nama" placeholder="Nama anda" required>
        </div>    
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email anda" required>
        </div>    
        <div>
            <label for="email">Message</label>
            <textarea name="message" id="message" cols="10" rows="5" required placeholder="Isi keterangan anda"></textarea>
        </div>
        <div>
            <input type="submit" value="Kirim">
            <input type="reset" value="Reset">
        </div>    
    </form>
    <?= $this->load->view('partial/footer.php') ?>
</body>
</html>