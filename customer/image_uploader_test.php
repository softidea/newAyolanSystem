<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="Fancy multiple images uploader using AJAX and PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Images Uploader</title>
        <link rel="stylesheet" href="../assets/css/images-uploader.css">
    </head>
    <body>
        <section id="forms">
            <form id="upload" method="post" enctype="multipart/form-data">
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

                <input type="submit" value="Submit" name="upload-submit" id="upload-submit">
            </form>
            <ul id="image-preview">
            </ul>
        </section>
        <script src="../assets/js/images-uploader-min.js"></script>
    </body>
</html>
