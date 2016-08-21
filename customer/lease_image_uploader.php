
<?php
session_start();
if (!isset($_SESSION['user_email'])) {
    header("Location:../index.php");
}
?>
<?php
if (isset($_SESSION['ser_number'])) {
    $img_cus_nic = $_SESSION['img_cus_nic'];
    if ($img_cus_nic != null) {
        $img_cus_nic = $_SESSION['img_cus_nic'];
        $img_ser_number = $_SESSION['ser_number'];
    }
    $img_ser_number = $_SESSION['ser_number'];
} else {
    $img_cus_nic = "";
    $img_ser_number = "";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Service | Image Upload</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Optional theme -->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,700,600italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../assets/css/customer_service.css">
        <script src="../assets/js/jquery-3.0.0.js"></script>
        <script src="../assets/js/angular.js"></script>
        <link rel="icon" href="favicon.ico">



        <?php require '../controller/co_load_vehicle_brands.php'; ?>
        <script type="text/javascript">
            function imagepreview(input) {
                if (input.files && input.files[0]) {
                    var filerd = new FileReader();
                    filerd.onload = function (e) {
                        $('#imgpreview').attr('src', e.target.result);
                    };
                    filerd.readAsDataURL(input.files[0]);
                }
            }

            document.onkeydown = function (e) {
                if (e.keyCode === 13) {
                    // alert('not allowed');
                    return false;
                } else {
                    return true;
                }
            };
        </script>
        <link rel="stylesheet" href="../assets/css/images-uploader.css">
    </head>
    <body>

        <?php include '../assets/include/navigation_bar.php'; ?>
        <!--Lease Registration Panel-->
        <div ng-app="" class="container" style="margin-top: 80px;display: block;" id="one">
            <form id="upload" method="POST" enctype="multipart/form-data" action="../customer/images-uploader.php">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="panelheading">
                                <h3 class="panel-title">Lease Image Upload</h3>
                            </div>
                            <div class="panel-body" style="background-color: #FAFAFA;">
                                <div class="col-sm-6">
                                    <!--Image Uploader-->
                                    <fieldset id="account">
                                        <legend>Upload Vehicle Images Here</legend>

                                        <input type="text" name="img_cus_nic" id="img_cus_nic" value="<?php echo $img_cus_nic; ?>">
                                        <input type="text" name="img_ser_number" id="img_ser_number" value="<?php echo $img_ser_number;?>">
                                        <div id="upload-drop-zone">
                                            <ul>
                                                <li>Drop photos here</li>
                                                <li>or</li>
                                                <li>
                                                    <input type="file" multiple name="upload-input[]" id="upload-input" accept="image/*">
                                                    <label for="upload-input">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                        </svg>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--<label for="galleries-names">Enter galleries names as CSV</label>-->


                                        <input type="hidden" name="galleries-names" id="galleries-names">
                                        <input type="submit" value="Upload" name="upload-submit" id="upload-submit" class="btn btn" style="background: #009688; color: white;">
                                        <input type="button" value="Clear" id="clear_img_preview" class="btn btn" onclick="clearImgPreview();" style="background: #009688; color: white;">

                                        <ul id="image-preview">

                                        </ul>
                                    </fieldset>
                                    <!--Image Uploader-->

                                </div>
                                <div class="col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!--Lease Registration Panel-->
        <?php include '../assets/include/footer.php'; ?>
    </body>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://bootsnipp.com/dist/scripts.min.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script type="text/javascript">
                                            function clearImgPreview() {
                                                document.getElementById('image-preview').innerHTML = "";
                                            }
    </script>
    <script src="../assets/js/images-uploader-min.js"></script>
</html>
