<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>" />

        <?php foreach($styles as $style): ?>
            <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css"
                  rel="stylesheet" type="text/css" />
        <?php endforeach; ?>

    </head>
    <body>
        <div class="layer">
            <div class="container">
                <div class="header">
                    <div class="main-menu">
                        <ul>
                            <li><a href="<?php echo URL::site('pages/index'); ?>">Главная</a></li>
                            <li><a href="<?php echo URL::site('pages/news'); ?>">Новости</a></li>
                            <li><a href="<?php echo URL::site('pages/gallery'); ?>">Галлерея</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content"><?php echo $content; ?></div>
                <div class="clearing"></div>
                <div class="footer">2015 Артем Петров</div>
            </div>
        </div>
    </body>
</html>

<?php foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js"></script>
<?php endforeach; ?>