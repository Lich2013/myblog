<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon"  href="../public/favicon.ico" />
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../public/dist/css/bootstrap-combined.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: rgb(250,235,215);

        }
        .form-horizontal{
            margin-left: 30em;
            margin-top: 20em;
        }
        #inputPassword,#inputEmail{
            height: inherit;
        }
        #footer{
            position: relative;
            bottom: 0;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            @section('form')
            @show
        </div>

            <div class="span12" id="footer">
                © 2014 Lich. All rights reserved. Powered by <a href="http://www.golaravel.com/">Laravel Framework</a>.
            </div>

    </div>

</div>


</body>
</html>
