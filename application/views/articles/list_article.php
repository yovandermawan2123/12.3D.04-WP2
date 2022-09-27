
<!DOCTYPE html>
<html lang="en">
<head>
<?= $this->load->view('partial/head.php') ?>
</head>
<body>
<?= $this->load->view('partial/navbar.php') ?>
    <h1>List Article</h1>
    <ul>
        <?php foreach($articles as $article) ?>
        <li><?php echo $article['title'] ?></li>
        <?php endforeach ?>
    </ul>
    <?= $this->load->view('partial/footer.php') ?>
</body>
</html>