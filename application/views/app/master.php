<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower/bootstrap/dist/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
    <title>Document</title>
</head>
<body>
    <?php $this->load->view('app/header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <?php $this->load->view('app/menu.php'); ?>
            </div>
            <div class="col-md-10">
                <?php $this->load->view('app/' . $__class__ . '_' . $__function__ . '.php'); ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('app/footer.php'); ?>
    <script>
        var _base_url_ = '<?php echo base_url(); ?>';
    </script>
    <script src="<?php echo base_url(); ?>bower/requirejs/require.js" data-main="<?php echo base_url(); ?>dist/main"></script>
</body>
</html>