<!DOCTYPE html>
<html>
    <head>
         {{ stylesheet_link('css/styles/public.css') }}
         {{ stylesheet_link('css/styles/index.css') }}
         {{ stylesheet_link('css/bootstrap/bootstrap.css') }}
         {{ stylesheet_link('css/bootstrap/bootstrap.min.css') }}
         {{ stylesheet_link('js/uploadify/uploadify.css') }}
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>金色光首页</title>
    </head>
    <body>
    <!--{% include "public/header.volt"%}-->
      {{ partial("public/header")}}

 <!--content render start -->
        {{ content() }}
 <!--content render end
     {% include "public/footer.volt"%}-->
      {{ partial("public/footer")}}
    </body>
</html>
