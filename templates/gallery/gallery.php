<link rel="stylesheet" href="templates/gallery/gallery.css">
<script src="templates/gallery/gallery.js"></script>
<div id="gallery_wrapper">
  
<?php
$scaned_directory    = 'templates/gallery/images';
$array_with_filenames = scandir($scaned_directory);
$dlinna_massiva = count($array_with_filenames);
?>

<?php foreach ($array_with_filenames as $value): ?>
  <div class="gallery_preview_img" id="templates/gallery/images/<?php echo $value; ?>"></div>
  <script> 
  var zalupa=<?php echo json_encode($value); ?>;
document.getElementById("templates/gallery/images/<?php echo $value; ?>").style.backgroundImage="url("+"templates/gallery/images/"+zalupa+")";

  </script>
<?php endforeach; ?>

<script>
var parent = document.getElementById("gallery_wrapper"); //назначем родителя
var child = document.getElementById("templates/gallery/images/.");   //назначаем дочерний элемент
parent.removeChild(child);  // через назначенные переменные удаляем дочерний элемент
var child = document.getElementById("templates/gallery/images/..");   //назначаем дочерний элемент
parent.removeChild(child);  // через назначенные переменные удаляем дочерний элемент

</script>

</div>





