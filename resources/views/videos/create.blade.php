<form method="POST" action="/videos"  enctype="multipart/form-data">
    @csrf
    <input type="file" name="video">
    <input type="submit" value="アップロード">
</form>