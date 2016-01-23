<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        {{ stylesheet_link('js/uploadify/uploadify.css') }}
         {{ assets.outputCss() }}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Phalcon PHP Framework</title>
          {{ assets.outputJs() }}
    </head>
    <body>
    <div align="center">
       {{ content() }}
       </div>
    </body>
</html>
