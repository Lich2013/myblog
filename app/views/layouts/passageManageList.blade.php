<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon"  href="../public/favicon.ico" />
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../../public/dist/css/bootstrap-combined.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">

        body{
            background-color: rgb(250,235,215);
        }

        #page{
            background-color: rgb(250,235,215);
            margin: 0 auto;
        }

        .unstyled{
              padding-left: 50px;
        }

        h3{
            font-family: "Microsoft YaHei";
            color: rgb(0, 134, 204);
        }
        li{
            color: rgb(0, 134, 190);
        }

        .list{
            padding: 10px;
            font-size: 1.5em;
        }

    #footer{
        position: relative;
        bottom: 0;
        margin: 0 auto;
        text-align: center;
    }
        span{
            display: inline-block;
            padding: 0.5em;

        }

        .time{
            position: relative;
            float: right;

        }
        .span12 div a{
            position: relative;
            float: right;
        }
    </style>

</head>
<body>


<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div><a href="../logout">退出</a></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
            </div>
        </div>
        <div class="row-fluid">
            <div class="span2">
                <ul class="nav nav-list">
                    <li class="nav-header">
                    功能列表
                    </li>
                    <li >
                        <a href="http://longzy.sinaapp.com/">首页</a>
                        <a href="http://longzy.sinaapp.com/passage">文章列表</a>
                    </li>

                </ul>
            </div>
            <div class="span1">
            </div>
            <div class="span8">
                <h3>
                    文章列表
                </h3>
                <ol class="unstyled">
                   @section('list')
                   @show
                </ol>
                    @section('page')
                    @show
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12" id="footer">
            © 2014 Lich. All rights reserved. Powered by <a href="http://www.golaravel.com/">Laravel Framework</a>.
        </div>
    </div>
</body>
</html>