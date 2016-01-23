<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <?php echo $this->tag->stylesheetLink('js/uploadify/uploadify.css'); ?>
         <?php echo $this->assets->outputCss(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Phalcon PHP Framework</title>
          <?php echo $this->assets->outputJs(); ?>
    </head>
    <body>
    <div align="center">
       <?php echo $this->getContent(); ?>
       </div>
    </body>
</html>
