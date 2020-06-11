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

    <header class="">
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
                                        <input type="text" name="keyword" placeholder="Prodcut name" id="search"
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

        <!-- wap-nav -->
        <div class="wap-nav">
            <!-- nav -->
            <div class="bg">
                <div class="bg_l">
                </div>
                <div class="nav_right">
                    <div class="nav_rin">
                        <!-- <ul class="menu_ul">
                            <li><a href="" title="">HOME</a></li>
                            <li class="active menu_li">
                                <a href="" class="menu_a one-pan-link-mark">MATTRESS MACHIN</a>
                                <span class="arrow"><i></i></span>
                                <ul class="mt_ul">
                                    <li><a href="" title="">Pocket Spring Machine</a></li>

                                    <li class="menu_li arrow2">
                                        <a href="/mobile.php/about.html" class="menu_a one-pan-link-mark">Bonnell Spring
                                            Machine</a>
                                        <span class="arrow"><i></i></span>
                                        <ul class="mt_ul">
                                            <li><a href="">test1</a></li>
                                            <li><a href="">test2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="" title="">Continuous(Superlastic) Spring Machine</a></li>
                                    <li><a href="" title="">Mattress Quilting Machine</a></li>
                                </ul>
                            </li>

                            <li><a href="" title="">PU FOAM MACHINE</a></li>
                        </ul> -->

                        <ul class="menu_ul clearfix">
                            <li class="<?php if(MODULE_NAME == 'Index') : ?>active<?php endif;?>"><a href="/index.php?l=<?php echo (LANG_SET); ?>"
                                    title="">HOME</a></li>
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<150) :if( intval(0)==$r["parentid"] ) :++$n; if($r[catname] != 'THANKS' && $r[id] != 194): ?><li class="<?php if($bcid==$r[id]) : ?>active<?php endif;?> active menu_li" >
                                        <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["catname"]); ?>"><?php echo ($r["catname"]); ?></a>
                                        <?php if($r[child] == 1) : ?><span class="arrow"><i></i></span><?php endif;?>
                                        <?php if($r[child] == 1) : ?>
                                        <ul class="mt_ul">
                                            <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li  class="menu_li arrow2">
                                                    <a href="<?php echo ($rs["url"]); ?>" title="<?php echo ($rs["catname"]); ?>"><?php echo ($rs["catname"]); ?>
                                                    </a>
                                                    <?php if($rs[child] == 1) : ?><span class="arrow"><i></i></span><?php endif;?>

                                                    <?php if($rs[child] == 1) : ?>
                                                    <ul class="mt_ul last-padd">
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

            <div class="header">
                <div class="h_in">
                    <div class="h_left">
                        <a href="/mobile.php" class="h_logo"><img src="__PUBLIC__/www/images/logo.png"
                                style="width: 230px;"></a>
                    </div>
                    <div class="h_right">
                        <i class="fa fa-list-ul" aria-hidden="true"></i>
                    </div>
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
                    <li class="active"><?php echo ($catname); ?></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="product">
        <div class="container">
            <div class="row">
                <div class="product-top">
                    <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                        non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                </div>
                <div class="product-list clearfix">
                    <div class="left col-lg-9 col-md-9">
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><div class="box clearfix">
                            <div class="image col-lg-5 col-md-5">
                                <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></a>
                            </div>
                            <div class="txt col-lg-7 col-md-7">
                                <h3><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>"><?php echo (str_cut($r["title"],30,'...')); ?></a>
                                </h3>
                                <?php echo ($r["jianjie"]); ?>

                                <div class="product-btn clearfix">
                                    <div type="button" class="btn1" data-toggle="modal" data-target="#myModal"> Quick
                                        Inquiry
                                    </div>
                                    <a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" class="btn2"> View Details</a>

                                </div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                        <!-- 分页按钮-->
                         <div class="row" style="margin: 3% 0 5% 0">
                        <div class="col-xs-12 text-center pagingClick">
                            <?php echo ($pages); ?>
                        </div>
                    </div> 

                        <!-- 弹窗表单 -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Quick Inquiry</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="clearfix" method="post" action="index.php?g=Home&amp;a=message"
                                            onsubmit="return beforeSubmit2(this);">
                                            <div class="modal-box">
                                                <p>Name: </p>
                                                <input placeholder="Name" type="text" name="name">
                                            </div>
                                            <div class="modal-box">
                                                <p>E-mail: </p>
                                                <input placeholder="Email" type="text" name="email">
                                            </div>
                                            <div class="modal-box">
                                                <p>Phone Number:</p>
                                                <input placeholder="Phone" type="text" name="phone">
                                            </div>
                                            <div class="modal-box">
                                                <p>Consulting Information:</p>
                                                <textarea rows="3"
                                                    placeholder="Please enter your consulting information."
                                                    name="message"></textarea>
                                            </div>
                                            <input type="submit" value="Send Inquiry" class="footer-sub">
                                        </form>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right col-lg-3 col-md-3">
                        <!-- 搜索 -->
                        <div class="aside-search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default btn-primary" type="button">button</button>
                                </span>
                            </div>
                        </div>
                        <!-- 导航 -->
                        <div class="right-nav">
                            <div class="aside-munu">
                                <ul id="asideMenu" class="list-group">
                                    <li class="list-group-item"><a title="Continuous (Superlastic) Spring Machine" href="#">Continuous (Superlastic) Spring Machine</a></li>
                                    <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                    <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                    <li class="list-group-item">
                                        <a href="#">Porta ac consectetur ac</a>
                                        <ul class="list-group sub-group">
                                            <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                            <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                            <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                            <li class="list-group-item">
                                                <a href="#">Porta ac consectetur ac</a>
                                            </li>
                                            <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                                            <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                            <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                                    <li class="list-group-item">
                                        <a href="#">Dapibus ac facilisis in</a>
                                        <ul class="list-group sub-group">
                                            <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                            <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                            <li class="list-group-item">
                                                <a href="#">Morbi leo risus</a>
                                                <ul class="list-group sub-group">
                                                    <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                                                    <li class="list-group-item"><a href="#">Dapibus ac facilisis
                                                            in</a></li>
                                                    <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                                    <li class="list-group-item">
                                                        <a href="#">Porta ac consectetur ac</a>
                                                    </li>
                                                    <li class="list-group-item"><a href="#">Vestibulum at eros</a>
                                                    </li>
                                                    <li class="list-group-item"><a href="#">Dapibus ac facilisis
                                                            in</a></li>
                                                    <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                                </ul>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="#">Porta ac consectetur ac</a>
                                            </li>
                                            <li class="list-group-item"><a href="#">Vestibulum at eros</a></li>
                                            <li class="list-group-item"><a href="#">Dapibus ac facilisis in</a></li>
                                            <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item"><a href="#">Morbi leo risus</a></li>
                                </ul>
                                <script>
                                    $("#asideMenu").treemenu({
                                        'delay': 200,
                                        'closeOther': true,
                                        'openActive': true
                                    });
                                </script>
                            </div>

                        </div>
                        <!-- 推荐列表 -->
                        <div class="aside-product">
                            <a href="" class="media">
                                <div class="box-img">
                                    <img src="Public/www/images/pro1.png" alt="">
                                </div>
                                <p>Nested media heading</p>
                            </a>
                            <a href="" class="media">
                                <div class="box-img">
                                    <img src="Public/www/images/pro2.png" alt="">
                                </div>
                                <p>Nulla vel metus scelerisque ante sollicitudin commodo</p>
                            </a>
                            <a href="" class="media">
                                <div class="box-img">
                                    <img src="Public/www/images/pro3.png" alt="">
                                </div>
                                <p>Cras sit amet nibh libero, in gravida nulla</p>
                            </a>
                            <a href="" class="media">
                                <div class="box-img">
                                    <img src="Public/www/images/pro4.png" alt="">
                                </div>
                                <p>Donec lacinia congue felis in faucibus.</p>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="line"></div>
                <!-- 相关推荐轮播 -->
                <div class="product-recommend">
                    <div class="title">Recommend Products</div>
                    <div class="product-swiper">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="image col-lg-5">
                                            <a href="" target="_blank"><img src="Public/www/images/pro1.png" alt=""></a>
                                        </div>
                                        <div class="txt col-lg-7">
                                            <h3><a href="#" target="_blank">Nullam id dolor id nibh ultricies id nibh
                                                    ultricies</a>
                                            </h3>
                                            <table class="table-bordered table-condensed" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Model
                                                        </td>
                                                        <td>
                                                            DW-UIFD01
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Price
                                                        </td>
                                                        <td>
                                                            $86
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Material
                                                        </td>
                                                        <td>
                                                            stainless steel
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Voltage
                                                        </td>
                                                        <td>
                                                            12v/220v
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Size
                                                        </td>
                                                        <td>
                                                            100x146x30 (mm)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="product-btn clearfix">
                                                <div type="button" class="btn1" data-toggle="modal"
                                                    data-target="#myModal">
                                                    Quick
                                                    Inquiry
                                                </div>
                                                <a href="" target="" class="btn2"> View Details</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="image col-lg-5">
                                            <a href="" target="_blank"><img src="Public/www/images/pro2.png" alt=""></a>
                                        </div>
                                        <div class="txt col-lg-7">
                                            <h3><a href="#" target="_blank">Nullam id dolor id nibh ultricies id nibh
                                                    ultricies</a>
                                            </h3>
                                            <table class="table-bordered table-condensed" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Model
                                                        </td>
                                                        <td>
                                                            DW-UIFD01
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Price
                                                        </td>
                                                        <td>
                                                            $86
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Material
                                                        </td>
                                                        <td>
                                                            stainless steel
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Voltage
                                                        </td>
                                                        <td>
                                                            12v/220v
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Size
                                                        </td>
                                                        <td>
                                                            100x146x30 (mm)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="product-btn clearfix">
                                                <div type="button" class="btn1" data-toggle="modal"
                                                    data-target="#myModal">
                                                    Quick
                                                    Inquiry
                                                </div>
                                                <a href="" target="" class="btn2"> View Details</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="image col-lg-5">
                                            <a href="" target="_blank"><img src="Public/www/images/pro3.png" alt=""></a>
                                        </div>
                                        <div class="txt col-lg-7">
                                            <h3><a href="#" target="_blank">Nullam id dolor id nibh ultricies id nibh
                                                    ultricies</a>
                                            </h3>
                                            <table class="table-bordered table-condensed" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Model
                                                        </td>
                                                        <td>
                                                            DW-UIFD01
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Price
                                                        </td>
                                                        <td>
                                                            $86
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Material
                                                        </td>
                                                        <td>
                                                            stainless steel
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Voltage
                                                        </td>
                                                        <td>
                                                            12v/220v
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Size
                                                        </td>
                                                        <td>
                                                            100x146x30 (mm)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="product-btn clearfix">
                                                <div type="button" class="btn1" data-toggle="modal"
                                                    data-target="#myModal">
                                                    Quick
                                                    Inquiry
                                                </div>
                                                <a href="" target="" class="btn2"> View Details</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="box clearfix">
                                        <div class="image col-lg-5">
                                            <a href="" target="_blank"><img src="Public/www/images/pro4.png" alt=""></a>
                                        </div>
                                        <div class="txt col-lg-7">
                                            <h3><a href="#" target="_blank">Nullam id dolor id nibh ultricies id nibh
                                                    ultricies</a>
                                            </h3>
                                            <table class="table-bordered table-condensed" style="width:100%;">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            Model
                                                        </td>
                                                        <td>
                                                            DW-UIFD01
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Price
                                                        </td>
                                                        <td>
                                                            $86
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Material
                                                        </td>
                                                        <td>
                                                            stainless steel
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Voltage
                                                        </td>
                                                        <td>
                                                            12v/220v
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Size
                                                        </td>
                                                        <td>
                                                            100x146x30 (mm)
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="product-btn clearfix">
                                                <div type="button" class="btn1" data-toggle="modal"
                                                    data-target="#myModal">
                                                    Quick
                                                    Inquiry
                                                </div>
                                                <a href="" target="" class="btn2"> View Details</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>

                        </div>
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