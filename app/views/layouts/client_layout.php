<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/assets/client/css/style.css">
    <title><?php echo (!empty($page_title)) ? $page_title: 'Website' ?></title>
</head>

<body>
    <?php
    $this->render('blocks/header');
    $this->render($content,$sub_content);
    $this->render('blocks/footer');
    ?>
    
    <script type="text/javascript" src="<?php echo _WEB_ROOT; ?>/public/assets/client/js/script.js"></script>
</body>

</html>