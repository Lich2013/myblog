
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon"  href="../../../public/favicon.ico" />
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="../../../public/dist/css/bootstrap-combined.min.css">
    <!--    markdown css-->
    <link rel="stylesheet" href="../../../public/markdown/css/bootstrap-markdown.min.css"/>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--    markdown js-->
    <script src="../../../public/markdown/js/bootstrap-markdown.js"></script>

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
        position: absolute;
        bottom: 0;
        margin: 0 auto;
        text-align: center;
    }
    </style>

</head>
<body>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span12">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="#">首页</a>
						</li>
						<li>
							<a href="#">资料</a>
						</li>
						<li class="disabled">
							<a href="#">信息</a>
						</li>
						<li class="dropdown pull-right">
							 <a href="#" data-toggle="dropdown" class="dropdown-toggle">下拉<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">操作</a>
								</li>
								<li>
									<a href="#">设置栏目</a>
								</li>
								<li>
									<a href="#">更多设置</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">分割线</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
                    @section('form')
                    @show

                </div>
			</div>
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