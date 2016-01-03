<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CI2 with Eloquent</title>
</head>
<body>

<?php foreach ($articles as $article) : ?>
<h1>
    <?php echo $article->title; ?>
  </h1>
  <div class="content">
    <p>
      <?php echo $article->content; ?>
    </p>
  </div>
<?php endforeach;?>
  

</body>
</html>