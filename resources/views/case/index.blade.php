<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/front.css" />
  </head>
  <body>
  <div id="app">
    <header class="header">
        <div class="container">
            <div class="row header-bar">
                <div class="col-3 logo"><img src="/images/logo-200.png" /></div>
                <div class="col-9 text-right phone"><i class="fa fa-volume-control-phone"></i> 18200587474</div>
                <div class="col-9 text-right menu"><i class="fa fa-align-justify"></i></div>
            </div>
            <nav class="header-nav">
                <ul>
                    <li>
                        <a href="">首页</a>
                    </li>
                    <li class="active">
                        <a href="">产品中心</a>
                    </li>
                    <li>
                        <a href="">工程案例</a>
                    </li>
                    <li>
                        <a href="">行业动态</a>
                    </li>
                    <li>
                        <a href="">联系我们</a>
                    </li>
                </ul>
            </nav>
        </div> 
    </header>
    <section class="banner-inner">
        <img src="{{ URL::asset('/') }}images/jianzhu-1341.jpg"/>
    </section>  
    <section class="container main">
        <div class="row">
        <div class="col-lg-3 col-md-3 main-bar">
            <div class="bar menu">
            <h3>产品中心</h3>
            <ul>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
                <li>
                <a href="#">分类1</a>
                </li>
            </ul>
            </div>
            <div class="bar contact">
                <h3>联系我们</h3>
                <p>地址：广东省佛上市顺德区伦教华南机械城</p>
                <p>联系电话： 125455215457</p>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 main-content">
            <div class="cases-list">
            <ul>
               <li>
                    <a href="#">
                        <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                        <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                        <p>教你选择大理石</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                        <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                        <p>教你选择大理石</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                        <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                        <p>教你选择大理石</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                        <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                        <p>教你选择大理石</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure class="case-img cover"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></figure>
                        <p class="title"><i class="fa fa-chevron-right"></i>人造板</p>
                        <p>教你选择大理石</p>
                    </a>
                </li>
            </ul>
            </div>
            <div class="page">
            <ul class="pagination">
                <li><a href="#">首 页</a></li>
                <li><a href="#">上一页</a></li>
                <li><a href="#">下一页</a></li>
                <li><a href="#">尾 页</a></li>
            </ul>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer footer-inner">
        <div class="container">
            <div class="copyright">
                <p><span>地址：广东省佛上市顺德区伦教华南机械城</span> <span>联系电话： 125455215457</span></p>
                <p><span>备案：粤2541214</span> <span>版权：某某公司</span></p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ URL::asset('/') }}ks/jquery.SuperSlide.2.1.1.js"></script>
  </body>
</html>