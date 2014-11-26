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
    <style type="text/css">

       body, .thumbnails,.thumbnail
       {
           background-color: rgb(250,235,215);
       }

       #page{
           background-color: rgb(250,235,215);
           margin: 0 auto;
       }
        .item img
        {
            margin: 0 auto;
        }

       #footer{

           margin: 0 auto;
           text-align: center;
       }
       .carousel-indicators{
            top: 82%;
           left: 48.5%;
            width: 50px;
       }


    </style>

    @yield('title')
</head>

<body>
<div class="container-fluid">

    <div class="row-fluid">
        <div class="span12">
            <div class="carousel slide" id="carousel-2204">
                 <ol class="carousel-indicators">
                    <li data-slide-to="0" data-target="#carousel-2204" class="active">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-2204">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-2204" >
                    </li>
                </ol>
                <div class="carousel-inner">
                    @section('item')

                    @show

                    @section('item_wait')

                    @show
                </div> <a data-slide="prev" href="#carousel-2204" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-2204" class="right carousel-control">›</a>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="./passage">文章列表</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <ul class="thumbnails">
                @section('span4')

                @show
            </ul>
            <a class="btn btn-primary" href="./passage">更多文章</a>

        </div>
    </div>

    <div class="row-fluid">
        <div class="span12" id="footer">
            © 2014 <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=530572924&site=qq&menu=yes">Lich</a>. All rights reserved. Powered by <a href="http://www.golaravel.com/">Laravel Framework</a>.
        </div>
    </div>
</div>

</body>
</html>