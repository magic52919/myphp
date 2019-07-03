<!-- 上傳唯一選擇POST -->
<form action="php37.php" method="post" enctype="multipart/form-data">
upload File : <input type="file" name="upload[]"><br>
<input type="file" name="upload[]"><br>
<input type="file" name="upload[]"><br>
<input type="file" name="upload[]"><br>
<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
<input type="submit" value="upload">

</form>