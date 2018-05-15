<!DOCTYPE html>
<html lang="fr-FR" dir="auto">
<head>
    <meta charset="UTF-8">
    <title>Test Alicia</title>

    <link rel="stylesheet" href="/site-test/styles/styles.css">



</head>
<body>
<?php include 'header.php';?>
<div class="page-container page-2">

    <ul class="list-container">
    </ul>
    <input id="input-add-files" type="file" name="img" onchange="addOnList(this.files);">
    <button onclick="checkAllFiles();">Done !</button>

</div>
<script src="/site-test/script/page2.js"></script>
<script src="/site-test/script/jquery-3.2.1/jquery-3.2.1.min.js"></script>
</body>
</html>