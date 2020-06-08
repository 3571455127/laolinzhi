<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <!-- wap -->
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=yes" />
    <meta name="Robots" content="all">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <!-- css -->
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.treemenu.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/font-awesome.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">
    <script src='__PUBLIC__/www/js/jquery.min.js'></script>
    <script src="__PUBLIC__/www/js/swiper.min.js"></script>
    <script src="__PUBLIC__/www/js/jquery.treemenu.min.js"></script>
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
    <script src="__PUBLIC__/www/js/jquery.fancybox.min.js"></script>
    <script src="__PUBLIC__/www/js/main.js"></script>
</head>

<body style="overflow:-Scroll;overflow-y:hidden">
    <h1 style="display:none;"><?php if(MODULE_NAME !== 'Index') : echo ($seo_description); else : echo ($seo_description); endif;?></h1>

    <header>
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="top-box clearfix">
                        <div class="logo col-lg-6 col-md-6 col-sm-6">
                            <a href="/index.php?l=<?php echo (LANG_SET); ?>" title="logo"><img src="__PUBLIC__/www/images/logo.png" alt=""></a>
                        </div>
                        <div class="right col-lg-6 col-md-6 col-sm-6">
                            <ul class="clearfix">
                                <!-- wechat -->
                                <li class="wechat">
                                    <img src="__PUBLIC__/www/images/top-wechat.png" alt="">
                                    <div class="wechat-box"><img src="__PUBLIC__/www/images/wechat11.png" alt=""></div>
                                </li>
                                <!-- share -->
                                <li><a href="" title="facebook" target="_blank" rel="nofollow" class=""><img
                                            src="__PUBLIC__/www/images/top-facebook.png" alt=""></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=8613928248021" title="" target="_blank"
                                        rel="nofollow" class=""><img src="__PUBLIC__/www/images/top-whatsapp.png" alt=""></a></li>
                                <li><a href="" title="linkedin" target="_blank" rel="nofollow" class=""><img
                                            src="__PUBLIC__/www/images/top-linkedin.png" alt=""></a></li>

                                <!-- search -->
                                <li class="search-form">
                                    <form action="" method="post">
                                        <input type="text" placeholder="Search">
                                        <img src="__PUBLIC__/www/images/search.png" alt="">
                                    </form>
                                </li>
                                <li class="search">
                                    <img src="__PUBLIC__/www/images/search.png" alt="">
                                </li>

                                <!-- language -->
                                <li class="language">

                                    <div>
                                        <img src="__PUBLIC__/www/images/english.png" alt="">
                                        <span>EN</span>
                                    </div>
                                    <ul class="multilingual">
                                        <li><a href="/index.php?l=en" title="english"><img src="__PUBLIC__/www/images/english.png" alt="">English</a>
                                        </li>
                                        <li><a href="/index.php?l=es" title="españa"><img src="__PUBLIC__/www/images/españa.png" alt="">España</a>
                                        </li>
                                        <li><a href="/index.php?l=ru" title="pоссия"><img src="__PUBLIC__/www/images/pоссия.png" alt="">Россия</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- nav -->
        <div class="nav">
            <div class="container">
                <div class="row">
                    <ul class="navbars clearfix">
                        <li><a href="/index.php?l=<?php echo (LANG_SET); ?>" title="">HOME</a></li>
                        <?php $n=0;foreach($Categorys as $key=>$r):if($n<150) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' && $r[id] != 194): ?><li class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>">
                            <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?></a>
                            <?php if($r[child] == 1) : ?>
                            <ul class="second-nav">
                                <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li>
                                    <a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?></a>
                                    <?php if($rs[child] == 1) : ?>
                                        <ul class="second-nav">
                                            <?php $n=0;foreach($Categorys as $key=>$rss):if($n<99) :if( intval($r[id])==$rss["parentid"] ) :++$n;?><li>
                                                <a href="<?php echo ($rss["url"]); ?>" title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a>
                                            </li><?php endif; endif; endforeach;?>
                                        </ul>
                                    <?php endif;?> 
                                </li><?php endif; endif; endforeach;?>
                            </ul>
                            <?php endif;?>
                        </li><?php endif; endif; endif; endforeach;?>
                    </ul>
                </div>
            </div>

        </div>
    </header>
    <!-- 路径导航 -->
    <div class="ljbg">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="/index.php?l=<?php echo (LANG_SET); ?>">Home</a></li>
                    <li class="active">News</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- NEWs-show -->
    <div class="news-show">
        <div class="news-show-box container">
            <div class="row">
                <div class="clearfix">
                    <div class="left col-lg-9 col-md-9 col-sm-12">
                        <!-- 内容 -->
                        <div class="article">
                            <?php echo ($content); ?>
                        </div>
                        <!-- 推荐新闻 -->
                        <div class="article-related">
                            <h5>Related News</h5>
                            <div class="article-related-box clearfix">
                                <?php  $_result=M("Article")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1  AND catid=112  AND posid =1")->order("listorder desc")->limit("4")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a  href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="col-lg-6 col-md-6 col-sm-6">
                                    <strong class="time">[<?php echo (todate($r["createtime"],'Y-m-d')); ?>]</strong>
                                    <span><?php echo (str_cut($r["title"],30,'...')); ?></span>
                                </a><?php endforeach; endif;?> 

                            </div>

                        </div>

                    </div>
                    <div class="nav-right col-lg-3 col-md-3 col-sm-12">
                        <!-- 搜索 -->
                        <div class="aside-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-primary" type="button">button</button>
                                </span>
                            </div>
                        </div>

                        <div class="sidebar-nav">
                            <ul class="first-nav">
                                <!-- start -->
                                <li><a href="#menui1" data-toggle="collapse">SideBar Nav menui
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div id="menui1" class="collapse">
                                        <ul class="second-nav">
                                            <li><a href="#menui11" data-toggle="collapse">SideBar Nav child menu
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <div id="menui11" class="collapse">
                                                    <a href=""> SideBar Nav sub child menu</a>
                                                </div>
                                            </li>
                                            <li><a href="">SideBar Nav child menu</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <!-- end -->

                                <li><a href="#menui2" data-toggle="collapse">SideBar Nav menui2
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <div id="menui2" class="collapse">
                                        <ul class="second-nav">
                                            <li><a href="#menui22" data-toggle="collapse">SideBar Nav child menu2
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                                <div id="menui22" class="collapse">
                                                    <a href=""> SideBar Nav sub child menu2</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                               

                            </ul>
                        </div>

                        <ul class="digood-related">
<?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder desc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><li><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="clearfix">
                                    <img class="col-lg-4 col-md-4 col-sm-4 col-xs-4" src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                                    <h6 class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo (str_cut($r["title"],40,'...')); ?></h6>
                                </a>
                            </li><?php endforeach; endif;?>

                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>

  

    <footer>

        <!-- footer-nav -->
        <div class="footer-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>Product</h5>
                        <ul>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>News</h5>
                        <ul>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5>About Us</h5>
                        <ul>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                            <li><a href="" title="" target="_blank">MATTRESS MACHINE</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 clearfix">
                        <a href="" class="footer-logo"><img src="__PUBLIC__/www/images/footer-logo.png" alt=""></a>
                        <p>NINGBO LADETECH MATTRESS MACHINERY CO., LTD </p>
                        <ul class="footer-share">
                            <li><a href="" title="facebook" target="_blank" rel="nofollow" class=""><img
                                        src="__PUBLIC__/www/images/footer-facebook.png" alt=""></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=8613928248021" title="" target="_blank"
                                    rel="nofollow" class=""><img src="__PUBLIC__/www/images/footer-whatsapp.png" alt=""></a></li>
                            <li><a href="" title="linkedin" target="_blank" rel="nofollow" class=""><img
                                        src="__PUBLIC__/www/images/footer-linkedin.png" alt=""></a></li>
                            <li class="wechats">
                                <a href="javascript:;">
                                    <img src="__PUBLIC__/www/images/footer-wechat.png" alt="">
                                    <div class="wechats-box"><img src="__PUBLIC__/www/images/wechat11.png" alt=""></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copy">NINGBO LADETECH MATTRESS MACHINERY CO., LTD</div>
                </div>
            </div>

        </div>

        <!-- 右侧悬浮表单 -->
        <div class="float-form">
            <div class="show-btn" style="display: block;">
                <img alt="" src="__PUBLIC__/www/images/ms.png">
                Inquire Now </div>
            <div class="show-form" style="display: none; opacity: 0;">
                <span class="X">X</span>
                <p style="font-size:24px;font-weight:bold;color:#fff;text-align:center;">Inquire Now</p>
                <p>Commissioner one-on-one service</p>
                <form name="form" method="post" action="index.php?g=Home&amp;a=message"
                    onsubmit="return beforeSubmit2(this);" id="user_form2">
                    <input name="forward" type="hidden" value="www.acousticcn.com/index.php">
                    <div class="showFormBacColor">
                        <div class="form-line01">
                            <input type="text" name="name" placeholder="Youre Name">
                        </div>
                        <div class="form-line01">
                            <input type="text" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-line01">
                            <input type="text" name="phone" placeholder="Whatsapp">

                        </div>
                        <div class="form-line01">
                            <input type="text" name="com" placeholder="Project">

                        </div>
                        <div class="form-line01">
                            <textarea name="message" placeholder="Detailed"></textarea>
                        </div>
                    </div>
                    <div class="form-line01">

                        <input id="form_submit" type="submit" value="SEND MESSAGE" form="user_form2">
                    </div>
                </form>
            </div>
        </div>
        <!-- <div class="goTop">
            <i class="topIcon"></i>
            <p>TOP</p>
        </div> -->

        <!-- 右侧导航 -->
        <div class="index-contact">
            <div class="index-contact-item-block index-contact-top">
                <div class="index-contact-item flex-col">
                    <div class="goTop">
                        <i class="topIcon"></i>
                    </div>
                </div>
            </div>
            <div class="index-contact-item-block index-contact-in transition index-contact-wx">
                <a href="javascript:void(0);" class="one-pan-link-mark">
                    <div class="index-contact-item flex-col">
                        <div class="img-block">
                            <img src="__PUBLIC__/www/images/weixin.png" alt="">
                        </div>
                    </div>
                    <div class="index-contact-item-in">
                        <p class="index-contact-item-in-p transition flex-col" style="">
                            Wechat QR code</p>
                    </div>
                </a>
                <div class="index-contact-qr-show" style="display: none;">
                    <div class="img-block">
                        <img src="__PUBLIC__/www/images/wechat11.png" alt="wechat">
                    </div>
                </div>
            </div>

            <div class="index-contact-item-block index-contact-in transition index-contact-tel">
                <a href="tel:0757-83680580" target="_blank" class="one-pan-link-mark">
                    <div class="index-contact-item flex-col">
                        <div class="img-block">
                            <img src="__PUBLIC__/www/images/dianhua.png" alt="">
                        </div>

                    </div>
                    <div class="index-contact-item-in">
                        <p class="index-contact-item-in-p transition">0757-83680580</p>
                    </div>
                </a>
            </div>

            <div class="index-contact-item-block index-contact-in transition index-contact-online">
                <a href="javascript:void(0);" class="shangqiao a_baidu_window zixun_count one-pan-link-mark" zixun="bd">
                    <div class="index-contact-item flex-col">
                        <div class="img-block">
                            <img src="__PUBLIC__/www/images/kefu.png" alt="">
                        </div>
                    </div>
                    <div class="index-contact-item-in">
                        <p class="index-contact-item-in-p transition zixun_count" zixun="bd">建站在线咨询</p>
                    </div>
                </a>

            </div>




        </div>
    </footer>
</body>

</html>