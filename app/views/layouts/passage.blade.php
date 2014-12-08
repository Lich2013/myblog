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
        body {
           background-color: rgb(250,235,215);
            line-height: 200%;
        }
          pre{
            border-left: 4px solid #de3859;
            border-radius: 5px;
            color: #DE3859;
            font-size: 1.2em;
            padding: 0.4em 20px;
            font-family: Consolas, 'Liberation Mono', Courier, monospace;
            line-height: 300%;

        }
        code{
            border-left: 4px solid #de3859;
            border-radius: 5px;
            color: #DE3859;
            font-size: 1.2em;
            padding: 0.4em 20px;
            font-family: Consolas, 'Liberation Mono', Courier, monospace;
            line-height: 300%;

        }
        .span10{
            padding: 20px 20px 20px 30px;
            border-left: 2px solid rgb(250,255,220);
        }


        #footer{
            position: relative;
            bottom: 0;
            margin: 0 auto;
            text-align: center;
        }
    </style>

    @section('webtitle')
    @show
</head>

<body>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <h3 class="text-center">
               @section('title')
               @show
            </h3>
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
        <div class="span10">
            <p>
               @section('content')
                @show
            </p>
            <div class="row-fluid">
                <div class="span12">
                    标签: @section('tag')
                   @show
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <script type="text/javascript">
                        (function(){
                            var p = {
                                url:location.href,
                                showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
                                desc:'',/*默认分享理由(可选)*/
                                summary:'',/*分享摘要(可选)*/
                                title:'',/*分享标题(可选)*/
                                site:'',/*分享来源 如：腾讯网(可选)*/
                                pics:"{{$data[0]->cover_path}}", /*分享图片的路径(可选)*/
                                style:'102',
                                width:145,
                                height:30
                            };
                            var s = [];
                            for(var i in p){
                                s.push(i + '=' + encodeURIComponent(p[i]||''));
                            }
                            document.write(['<a version="1.0" class="btn btn-info" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="span12" id="footer">
        © 2014 Lich. All rights reserved. Powered by <a href="http://www.golaravel.com/">Laravel Framework</a>.
    </div>
</div>

<script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
</body>
</html>