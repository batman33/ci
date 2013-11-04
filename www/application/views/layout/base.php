<?php echo doctype('html5') . "\n"; ?>
<html>
    <head>
        <?php $this->load->view('block/meta'); ?>
    </head>
    <body>
        <?php $this->load->view('block/header'); ?>

        <div id="content">
            <?php echo $content; ?>
        </div>

        <?php $this->load->view('block/footer'); ?>
    </body>
</html>