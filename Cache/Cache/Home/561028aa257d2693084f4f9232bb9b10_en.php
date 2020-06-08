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


    <!-- 路径导航 -->
    <div class="ljbg">
        <div class="container">
            <div class="row">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>

    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="left col-lg-8 col-md-8 col-sm-8">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                data-toggle="tab">New York</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                data-toggle="tab">London</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                data-toggle="tab">Sydney</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab"
                                data-toggle="tab">Paris</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="col-lg-6 col-md-6  col-sm-6"></div>
                            <div class="col-lg-6  col-md-6  col-sm-6">
                                <ul>
                                    <li>
                                        <strong>Address:</strong>
                                        <span><?php echo ($address); ?></span>
                                    </li>
                                    <li>
                                        <strong>Phone:</strong>
                                        <span> <?php echo ($phone); ?></span>
                                    </li>
                                    <li>
                                        <strong>Fax:</strong>
                                        <span><?php echo ($domestic_fax); ?></span>
                                    </li>
                                    <li>
                                        <strong>Email:</strong>
                                        <span> <?php echo ($email); ?></span>
                                    </li>
<!--                                    <li>
                                        <strong>Web:</strong>
                                        <span> http://buildpro-construction.com</span>
                                    </li>-->
                                    <li>
                                        <strong>Open</strong>
                                        <span>Sunday - Friday 08:00 - 18:00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="col-lg-6 col-md-6  col-sm-6"></div>
                            <div class="col-lg-6  col-md-6  col-sm-6">
                                <ul>
                                    <li>
                                        <strong>Address:</strong>
                                        <span><?php echo ($address); ?></span>
                                    </li>
                                    <li>
                                        <strong>Phone:</strong>
                                        <span> <?php echo ($phone); ?></span>
                                    </li>
                                    <li>
                                        <strong>Fax:</strong>
                                        <span><?php echo ($domestic_fax); ?></span>
                                    </li>
                                    <li>
                                        <strong>Email:</strong>
                                        <span> <?php echo ($email); ?></span>
                                    </li>
<!--                                    <li>
                                        <strong>Web:</strong>
                                        <span> http://buildpro-construction.com</span>
                                    </li>-->
                                    <li>
                                        <strong>Open</strong>
                                        <span>Sunday - Friday 08:00 - 18:00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">...</div>
                        <div role="tabpanel" class="tab-pane" id="settings">...</div>
                    </div>

                </div>

                <div class="right col-lg-4 col-md-4 col-sm-4">
                    <h5>Send Us Message</h5>
                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&a=message">
                        <input type="text" name="name" id="" placeholder="Your Name">
                        <input type="text" name="email" id="" placeholder="Your Email">
                        <input type="text" name="phone" id="" placeholder="Your Phone">
                        <textarea placeholder="Your Message" name="message" id="" cols="30" rows="10"></textarea>
                        <input type="submit" value="Submit Form" class="submit-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer>

        <!-- footer-nav -->
        <div class="footer-nav">
            <div class="container">
                <div class="row">
                    <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' && !in_array($r[id],array(77,112,113,78,194,159,160,161,162,163,189,190,191,192,193))): ?><div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <h5><?php echo ($r["catname"]); ?></h5>
                        <?php if($r[child] == 1) : ?>
                        <ul>
                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li><a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>" target="_blank"><?php echo (str_cut($rs["catname"],25,'..')); ?></a></li><?php endif; endif; endforeach;?>
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
                                    rel="nofollow" class=""><img src="__PUBLIC__/www/images/footer-whatsapp.png" alt=""></a></li>
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
            <input name="forward" type="hidden" value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>"/>
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