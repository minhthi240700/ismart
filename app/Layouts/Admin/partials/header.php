<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/solid.min.css">
<?php
    $loadTinyMCE = $loadTinyMCE ?? false;
    if ($loadTinyMCE):
?>
     <script src="https://cdn.tiny.cloud/1/sothdcelequxf8yxt7y2qhl8cng87onhu0jd6uf2wv2qhcyu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo home_url()?>/assets/admin/css/style.css?v=<?php echo time()?>">
    <title>Admintrator</title>
</head>

<body>
    <div id="warpper" class="nav-fixed">