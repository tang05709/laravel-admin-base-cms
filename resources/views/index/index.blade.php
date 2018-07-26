<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minmum-scale=1,maxmum-scale=1,user-scalable=no">
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
    <section class="banner">
        <img src="{{ URL::asset('/') }}images/jianzhu-1341.jpg"/>
    </section>  
    <section class="main">
        <div class="products">
            <div class="container">
                <div class="floor-title">
                    <i class="fa fa-heart"></i>
                    <b>产品中心</b>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                        <li>
                            <a href="">分类1</a>
                        </li>
                    </ul>
                </div>
                <div class="products-list">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" />
                                <p>木板材</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cases">
            <div class="container">
                <div class="floor-title">
                    <i class="fa fa-heart"></i>
                    <b>工程案例</b>
                </div>
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
            </div>
        </div>
        <div class="contacts">
            <div class="container contact-content">
                <div class="floor-title">
                    <i class="fa fa-heart"></i>
                    <b>联系我们</b>
                </div>
                <div class="img"><img src="{{ URL::asset('/') }}images/1527474917.jpg" /></div>
                <div class="content">
                    <div class="contact-info">
                        <p><span>联系人： ssss</span></p>
                        <p><span>联系电话： 21244124411</span></p>
                        <p>地址： fsdfdfdsfsdfsdfdsfsdfsdf</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="articles">
            <div class="container">
                <div class="floor-title">
                    <i class="fa fa-heart"></i>
                    <b>新闻中心</b>
                </div>
                <div class="articles-list">
                    <ul>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                        <li class="row">
                            <div class="col-sm-3 img">
                                <a href="#"><img src="{{ URL::asset('/') }}images/jianzhu-1370.jpg" /></a>
                            </div>
                            <div class="col-sm-9 info">
                                <a href="#">教你选择大理石教你选择大理石教你选择大理石教你选择大理石</a>
                                <p><i class="fa fa-clock-o"></i> 2018-08-28</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 
    <section class="container friend-links">
        <span>友情链接：</span>
        <a href="#" target="_blank">百度</a>
        <a href="#" target="_blank">百度</a>
        <a href="#" target="_blank">百度</a>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="copyright">
                <p><span>地址：广东省佛上市顺德区伦教华南机械城</span> <span>联系电话： 125455215457</span></p>
                <p><span>备案：粤2541214</span> <span>版权：某某公司</span></p>
            </div>
        </div>
    </footer>
 
  </body>
</html>