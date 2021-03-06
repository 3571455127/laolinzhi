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
                            <a href="/index.php?l=<?php echo (LANG_SET); ?>" title="logo"><img
                                    src="__PUBLIC__/www/images/logo.png" alt=""></a>
                        </div>
                        <div class="right col-lg-6 col-md-6 col-sm-6">
                            <ul class="clearfix">
                                <!-- wechat -->
                                <li class="wechat">
                                    <img src="__PUBLIC__/www/images/top-wechat.png" alt="">
                                    <div class="wechat-box"><img src="__PUBLIC__/www/images/wechat11.png" alt=""></div>
                                </li>
                                <!-- share -->
                                <li><a href="<?php echo ($facebook); ?>" title="facebook" target="_blank" rel="nofollow" class=""><img
                                            src="__PUBLIC__/www/images/top-facebook.png" alt=""></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=86<?php echo ($whatsapp); ?>" title="" target="_blank"
                                        rel="nofollow" class=""><img src="__PUBLIC__/www/images/top-whatsapp.png"
                                            alt=""></a></li>
                                <li><a href="<?php echo ($ins); ?>" title="linkedin" target="_blank" rel="nofollow" class=""><img
                                            src="__PUBLIC__/www/images/top-linkedin.png" alt=""></a></li>

                                <!-- search -->
                                <li class="search-form" id="con">
                                    <form id="search_form" action="<?php echo U('Search/index');?>" method="post">
                                        <!--<input type="text" placeholder="Search">-->
                                        <img src="__PUBLIC__/www/images/search.png" alt="" class="searchs">
                                        <input type="text" name="keyword" placeholder="prodcut name" id="search"
                                            value="<?php echo ($keyword); ?>">
                                        <input type="hidden" name="module" value="Product">
                                    </form>
                                </li>
                                <li class="search" id="tf">
                                    <img src="__PUBLIC__/www/images/search.png" alt="">
                                </li>
                                <script>
                                    $(function () {
                                        $('.searchs').click(function () {
                                            //            alert(1);
                                            var search = $('#search').val();
                                            if (search == '') {
                                                alert("Please enter the search content");
                                                $('#search').focus();
                                                return false;
                                            } else {
                                                $('#search_form').submit();
                                            }
                                        })
                                    })
                                </script>

                                <!-- language -->
                                <li class="language">

                                    <div>
                                        <img src="__PUBLIC__/www/images/english.png" alt="">
                                        <span>EN</span>
                                    </div>
                                    <ul class="multilingual">
                                        <li><a href="/index.php?l=en" title="english"><img
                                                    src="__PUBLIC__/www/images/english.png" alt="">English</a>
                                        </li>
                                        <li><a href="/index.php?l=es" title="españa"><img
                                                    src="__PUBLIC__/www/images/es.png" alt="">España</a>
                                        </li>
                                        <li><a href="/index.php?l=ru" title="pоссия"><img
                                                    src="__PUBLIC__/www/images/ru.png" alt="">Россия</a>
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
                        <li class="<?php if(MODULE_NAME == 'Index') : ?>active<?php endif;?>"><a href="/index.php?l=<?php echo (LANG_SET); ?>"
                                title="">HOME</a></li>
                        <?php $n=0;foreach($Categorys as $key=>$r):if($n<150) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' && $r[id] != 194): ?><li class="<?php if($bcid==$r[id]) : ?>active<?php endif;?>">
                                    <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?></a>
                                    <?php if($r[child] == 1) : ?>
                                    <ul class="second-nav">
                                        <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li>
                                                <a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?>
                                                </a>
                                                <?php if($rs[child] == 1) : ?> <i class="fa fa-angle-right"></i><?php endif;?>

                                                <?php if($rs[child] == 1) : ?>
                                                <ul class="three-nav">
                                                    <?php $n=0;foreach($Categorys as $key=>$rss):if($n<99) :if( intval($r[id])==$rss["parentid"] ) :++$n;?><li>
                                                            <a href="<?php echo ($rss["url"]); ?>"
                                                                title="<?php echo ($rss["catname"]); ?>"><?php echo ($rss["catname"]); ?></a>
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
<!-- 
<div class="crumbs">
    <div class="container">
        <a href="/index.php">HOME</a> / <?php  $arrparentid = array_filter(explode(',', $Categorys[$catid]['arrparentid'].','.$catid));foreach($arrparentid as $cid):$parsestr[] = '<a href="'.$Categorys[$cid]['url'].'">'.$Categorys[$cid]['catname'].'</a>'; endforeach;echo implode("&gt;",$parsestr);?>
    </div>
</div> -->
<div class="search-content">
    <div class="container clearfix">
        
        <div class="mainBox">
            <div class="mainTitle clearfix">
                <h3 class="main_left">Search Results</h3>
                <!-- <div class="main_address">
                    <a href="<?php echo ($site_url); ?>">HOME</a>-
                    <a href="<?php echo ($site_url); ?>">SEARCH</a>
                </div> -->
            </div>
            <!-- <div class="newsList">
                <ul>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><li><i></i><span><?php echo (todate($r["createtime"],"Y-m-d")); ?></span><a href="<?php echo ($r["url"]); ?>"
                                title=""><?php echo ($r["title"]); ?></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div> -->
            <div class="serch-list">
                <div class="row">
                    <a href="" class="col-lg-3 col-md-3 col-sm-6">
                        <img src="/Public/www/images/pro1.png" alt="">
                        <h5>Nullam id dolor id nibh ultric Nullam id dolor id nibh ultric.</h5>
                    </a>
                    <a href="" class="col-lg-3 col-md-3 col-sm-6">
                        <img src="/Public/www/images/pro2.png" alt="">
                        <h5>Nullam id dolor id nibh ultric.</h5>
                    </a>
                    <a href="" class="col-lg-3 col-md-3 col-sm-6">
                        <img src="/Public/www/images/pro3.png" alt="">
                        <h5>Nullam id dolor id nibh ultric.</h5>
                    </a>
                    <a href="" class="col-lg-3 col-md-3 col-sm-6">
                        <img src="/Public/www/images/pro4.png" alt="">
                        <h5>Nullam id dolor id nibh ultric.</h5>
                    </a>
                    <a href="" class="col-lg-3 col-md-3 col-sm-6">
                        <img src="/Public/www/images/pro4.png" alt="">
                        <h5>Nullam id dolor id nibh ultric.</h5>
                    </a>

                </div>
                <?php if($pages) : ?>
                <div class="page">
                    <?php echo ($pages); ?>
                </div>
                <?php endif;?>
            </div>
        </div>

    </div>

    <style>
        .main_left {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }
        @media screen and (max-width:1920px) {
            .search-content {
                margin-top: 250px;
            }
        }
        @media screen and (max-width: 1366px) {
            .search-content {
                margin-top: 250px;
            }
        }
        @media screen and (max-width: 768px) {
            .search-content {
                margin-top: 80px;
            }
        }
       

        .search-content {
            max-width: 100%;
            height: auto;
        }

        .search-content .serch-list {
            padding-top: 20px;
        }

        .search-content .serch-list a {
            padding-bottom: 20px;
            overflow: hidden;
            display: block;
        }

        .search-content .serch-list img {
            transition: all .4s ease-in-out;
        }

        .search-content .serch-list a:hover img {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .search-content .serch-list h5 {
            margin: 5px 0;
            font-size: 16px;
            height: 30px;
            line-height: 30px;
            padding: 0 5px;
            color: #333;
            text-align: center;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
        }
    </style>
<footer>

    <!-- footer-nav -->
    <div class="footer-nav">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                    <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' && !in_array($r[id],array(77,112,113,78,194,159,160,161,162,163,189,190,191,192,193))): ?><div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <h5><?php echo ($r["catname"]); ?></h5>
                                <?php if($r[child] == 1) : ?>
                                <ul>
                                    <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>"
                                                target="_blank"><?php echo (str_cut($rs["catname"],25,'..')); ?></a></li><?php endif; endif; endforeach;?>
                                </ul>
                                <?php endif;?>
                            </div><?php endif; endif; endif; endforeach;?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 clearfix">
                        <a href="" class="footer-logo"><img src="__PUBLIC__/www/images/footer-logo.png" alt=""></a>
                        <p><?php echo ($name); ?></p>
                        <ul class="footer-share">
                            <li><a href="<?php echo ($facebook); ?>" title="facebook" target="_blank" rel="nofollow" class=""><img
                                        src="__PUBLIC__/www/images/footer-facebook.png" alt=""></a></li>
                            <li><a href="https://api.whatsapp.com/send?phone=86<?php echo ($whatsapp); ?>" title="" target="_blank"
                                    rel="nofollow" class=""><img src="__PUBLIC__/www/images/footer-whatsapp.png"
                                        alt=""></a></li>
                            <li><a href="<?php echo ($ins); ?>" title="linkedin" target="_blank" rel="nofollow" class=""><img
                                        src="__PUBLIC__/www/images/footer-linkedin.png" alt=""></a></li>
                            <li class="wechats">
                                <a href="javascript:;">
                                    <img src="__PUBLIC__/www/images/footer-wechat.png" alt="">
                                    <div class="wechats-box"><img src="__PUBLIC__/www/images/wechat11.png" alt=""></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="copy"><?php echo ($cop); ?></div>
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
                <input name="forward" type="hidden"
                    value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />
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