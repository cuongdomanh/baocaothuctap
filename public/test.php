<?php
if (isset($_FILES['myfile'])) {
    $file = $_FILES['myfile'];
    echo "File Name: " . $file['name'] . '<br/>';
    echo "File Size: " . $file['size'] . '<br/>';
    echo "File Type: " . $file['type'] . '<br/>';
    echo "File txtData: " . $_POST['txtData'] . '<br/>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="plugins/jquery/jquery.min.js" ></script>
    <script type="text/javascript" src="js/jquery.form.min.js" ></script>
    <script type="text/javascript">
        $(function () {
            var bar = $('.bar');
            var percent = $('.percent');
            var status = $('#status');
            $('form').ajaxForm({
                beforeSend: function () {
                    status.empty();
                    var percentVal = '0%';
                    bar.width(percentVal);
                    percent.html(percentVal);
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal);
                    percent.html(percentVal);
                },
                complete: function (xhr) {
                    status.html(xhr.responseText);
                }
            });
        });
    </script>
</head>
<body>
    <form action="test.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"><br>
        <input type="text" name="txtData" />
        <input type="submit" value="Upload File to Server">
    </form>

    <div class="progress">
        <div class="bar"></div>
        <div class="percent">0%</div>
    </div>

    <div id="status"></div>
</body>
</html>