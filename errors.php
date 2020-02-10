<?php

<!DOCTYPE html>
<html>
<body>
<center>
<h2>LightFeather.io Code Challenge Registration Errors</h2>

<?php  if (count($errors) > 0) : ?>


  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>

</center>

</body>
</html>

?>