@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="margin-left: 200px;">
                <a class="navbar-brand" href="#">免费课程</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="color: #fff;">实战课程 <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">就业班</a>
                    </li>
                    <li>
                        <a href="#">猿问</a>
                    </li>
                    <li>
                        <a href="#">手记</a>
                    </li>
                    <li>
                        <a href="#">猿聘</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group headers" style="">

                        <input type="text" class="form-control myinput" style="" value="web">
                        <div class="glyphicon glyphicon-search"></div>

                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">下载App</a>
                    </li>
                    <li>
                        <a href="#">购物车</a>
                    </li>
                    <li>
                        <a href="#">登录 </a>
                    </li>
                    <li style="line-height: 48px;">/</li>
                    <li>
                        <a href="#"> 注册 </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="inner shadow Broadcast clearfix">
        <div class="col-md-2">
            <div class="left">
                <ul class="nav">
                    <li class="first">
                        <ul class="menu">
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                            <li>前沿/区域链/人工智能<i class="fr iconfont icon-gengduo"></i></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_fuceng">
                <div class="fuceng_wrap" id="1">1</div>
                <div class="fuceng_wrap" id="2">2</div>
                <div class="fuceng_wrap" id="3">3</div>
                <div class="fuceng_wrap" id="4">4</div>
                <div class="fuceng_wrap" id="5">5</div>
                <div class="fuceng_wrap" id="6">6</div>
                <div class="fuceng_wrap" id="7">7</div>
                <div class="fuceng_wrap" id="8">8</div>
                <div class="fuceng_wrap" id="9">9</div>
                <div class="fuceng_wrap" id="10">10</div>
            </div>
        </div>
        <div class="col-md-10 ">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/img1.jpg" /></div>
                    <div class="swiper-slide"><img src="images/img2.jpg" /></div>
                    <div class="swiper-slide"><img src="images/img3.jpg" /></div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="bottom">
                <a href="##"><i></i>
                    <p class="tit">web前端</p>
                    <p class="desc">互联网时代最火爆的技术</p>
                </a>
                <a href="##"><i></i>
                    <p class="tit">web前端</p>
                    <p class="desc">互联网时代最火爆的技术</p>
                </a>
                <a href="##"><i></i>
                    <p class="tit">web前端</p>
                    <p class="desc">互联网时代最火爆的技术</p>
                </a>
                <a href="##"><i></i>
                    <p class="tit">web前端</p>
                    <p class="desc">互联网时代最火爆的技术</p>
                </a>
            </div>
        </div>
    </div>
    <div class="hand">
        <div class="inner clearfix">
            <div class="col-md-12 clearfix">
                <h3>
                    <span class="icon_left"></span>
                    <em>实</em>
                    <em>/</em>
                    <em>战</em>
                    <em>/</em>
                    <em>推</em>
                    <em>/</em>
                    <em>荐</em>
                    <span class="icon_right"></span>
                </h3>
            </div>
            <div>
                <div class="col-md-6 adsense-box">
                    <a href="#">
                        <h3 class="ellipsis">火爆微信小程序开发，只有实用，没有套路！</h3>
                        <p class="ellipsis">0门槛搭建微信小程序，大步迈入微信"小"时代</p>
                    </a>
                </div>
                <div class="col-md-6 adsense-box">
                    <a href="#">
                        <h3 class="ellipsis">用最短的时间高效地学习Python全指导</h3>
                        <p class="ellipsis">从菜鸟到Pythoner，最新最全的学习路线，让你更专业！</p>
                    </a>
                </div>
            </div>
            <div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 index-card-container">
                    <a href="##">
                        <div class="course-card-top">
                            <img src="images/5bc3f1420001abf206000338.jpg" />
                            <div class="course-label">
                                <label>Java</label>
                                <label>Android</label>
                            </div>
                        </div>
                        <div class="course-card-content">
                            <h5 class="course-card-name">Socket网络编程进阶与实战</h5>
                            <div class="clearfix course-card-bottom">
                                <div class="course-card-info">
                                    <span>实战</span>
                                    <span>中级</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hand">
        <div class="inner">
            <div class="col-md-12 clearfix">

                <h3>
                    <span class="icon_left"></span>
                    <em>精</em>
                    <em>/</em>
                    <em>彩</em>
                    <em>/</em>
                    <em>手</em>
                    <em>/</em>
                    <em>记</em>
                    <em>/</em>
                    <em>及</em>
                    <em>/</em>
                    <em>猿</em>
                    <em>/</em>
                    <em>问</em>
                    <span class="icon_left"></span>
                </h3>
            </div>
            <div id="sortable" class="sjs-default">
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-1.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 1</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, eius, asperiores. Incidunt sapiente est quae iure...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-2.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 2</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum vitae necessitatibus, dolorem similique vero explicabo...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="funny">
                    <div class="card">
                        <img class="card__picture" src="./images/item-3.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 3</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, placeat voluptate, fuga tenetur eos ducimus animi porro...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-4.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 4</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit doloremque quisquam, obcaecati unde nam est quos...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-5.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 5</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse corporis hic minima nisi reprehenderit...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="funny">
                    <div class="card">
                        <img class="card__picture" src="./images/item-1.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 6</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel voluptatibus, id, deserunt inventore...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-2.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 7</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum enim beatae vero culpa, fuga, magni sunt dolores nam...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="flatty">
                    <div class="card">
                        <img class="card__picture" src="./images/item-3.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 8</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae numquam, blanditiis necessitatibus...
                            </p>
                        </div>
                    </div>
                </div>
                <div data-sjsel="funny">
                    <div class="card">
                        <img class="card__picture" src="./images/item-4.png" alt="">
                        <div class="card-infos">
                            <h2 class="card__title">Example 9</h2>
                            <p class="card__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur adipisci voluptatum laborum officiis...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="teacher">
                <div class="inner">
                    <h3>
                        <span class="icon_left"></span>
                        <em>慕</em>
                        <em>/</em>
                        <em>课</em>
                        <em>/</em>
                        <em>精</em>
                        <em>/</em>
                        <em>英</em>
                        <em>/</em>
                        <em>名</em>
                        <em>/</em>
                        <em>师</em>
                        <span class="icon_left"></span>
                    </h3>
                    <div class="box">
                        <span class="prev"></span>
                        <div>
                            <dl id="roll">
                                <dd>
                                    <h3>sdadsadasd111</h3>
                                </dd>
                                <dd>
                                    <h3>sdadsadasd222</h3></dd>
                                <dd>
                                    <h3>sdadsadasd333</h3></dd>
                                <dd>
                                    <h3>sdadsadasd4444</h3></dd>

                            </dl>
                        </div>
                        <span class="next">></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot" style="margin-top: 0;">
        <div class="inner clearfix">
            <ul class="clearfix">
                <li>
                    <a href="#">网站首页</a>
                </li>
                <li>
                    <a href="#">企业合作</a>
                </li>
                <li>
                    <a href="#">人才招聘</a>
                </li>
                <li>
                    <a href="#">联系我们</a>
                </li>
                <li>
                    <a href="#">讲师招聘</a>
                </li>
                <li>
                    <a href="#">帮助我们</a>
                </li>
                <li>
                    <a href="#">意见反馈</a>
                </li>
                <li>
                    <a href="#">友情连接</a>
                </li>
            </ul>
            <div class="fr">
                <a class="weixin" href="##"></a>
                <a class="weibo" href="##"></a>
                <a class="qq" href="##"></a>
            </div>

            <br />
            <p>Copyright © 2018 imooc.com All Rights Reserved | 京ICP备 12003892号-11 </p>
        </div>
    </div>
@endsection
