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
                    <li><a href="/index.php?l=<?php echo (LANG_SET); ?>">Home</a></li>
                    <li class="active"><?php echo ($catname); ?></li>
                </ol>
            </div>
        </div>
    </div>


    <div class="product-show">
        <div class="container">
            <div class="row">
<div class="left col-lg-4 col-md-4 col-sm-4">
                    <form action="/search/product" method="GET">
                        <input class="search" type="search" placeholder="Search..." name="keyword">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    <h2 class="dg-sider-title"><?php echo ($Categorys[$bcid][catname]); ?></h2>

                    <div class="sidebar-nav">
                        <ul class="first-nav">
                            <?php $n=0;foreach($Categorys as $key=>$r):if($n<100) :if( intval($bcid)==$r["parentid"] ) :++$n;?><!-- start -->
                            <li class=" <?php if($bcid==$r[id]) : ?>active<?php endif;?>"><a href="<?php if($r[child]==1) : ?>#menui<?php echo ($r[id]); else : echo ($r["url"]); endif;?>" <?php if($r[child]==1) : ?>data-toggle="collapse"<?php endif;?>><?php echo ($r["catname"]); ?>
                                   <?php if($r[child]==1) : ?> <i class="fa fa-angle-right"></i><?php endif;?>
                                </a>
                                 <?php if($r[child] == 1) : ?>
                                <div id="menui<?php echo ($r[id]); ?>" class="collapse">
                                    <ul class="second-nav">
                                        <?php $n=0;foreach($Categorys as $key=>$rs):if($n<99) :if( intval($r[id])==$rs["parentid"] ) :++$n;?><li class="<?php if($parentid==$rs[id]) : ?>afinve active<?php endif;?> <?php if($catid==$rs[id]) : ?>active<?php endif;?>">
                                            <a href="<?php if($rs[child]==1) : ?>#menui<?php echo ($rs[id]); else : echo ($rs["url"]); endif;?>" <?php if($rs[child]==1) : ?>data-toggle="collapse"<?php endif;?>><?php echo ($rs["catname"]); ?>
                                                <?php if($rs[child]==1) : ?><i class="fa fa-angle-right"></i><?php endif;?>
                                            </a>
                                            <?php if($rs[child]==1) : ?>
                                            <div id="menui<?php echo ($rs[id]); ?>" class="collapse">
                                                <?php $nnn=0;foreach($Categorys as $key=>$rss):if($nnn<10) :if( intval($rs[id])==$rss["parentid"] ) :++$nnn;?><a href="<?php echo ($rss["url"]); ?>"><?php echo ($rss["catname"]); ?></a><?php endif; endif; endforeach;?>
                                            </div>
                                            <?php endif;?>
                                        </li><?php endif; endif; endforeach;?>
                                    </ul>
                                </div>
                                 <?php endif;?>
                            </li>
                            <!-- end --><?php endif; endif; endforeach;?> 



                        </ul>
                    </div>

                    <h2 class="dg-sider-title">Hot Product</h2>

                    <ul class="dg-list-items">
<?php  $_result=M("Product")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  and lang=1 AND status=1   AND posid =1")->order("listorder desc")->limit("5")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- start -->
                        <li class="dg-item">
                            <div class="dg-image">
                                <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" class="src">
                            </div>
                            <div class="dg-content">
                                <h3 class="dg-title"><a href="<?php echo ($r["url"]); ?>" title="<?php echo ($r["title"]); ?>" ><?php echo (str_cut($r["title"],30,'...')); ?></a></h3>
                            </div>
                        </li>
                        <!-- end --><?php endforeach; endif;?>

                    </ul>

                </div>
                
                <div class="right col-lg-8 col-md-8 col-sm-8">

                    <div class="clearfix">
                        <div class="images-box col-lg-5 col-md-5">
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    var showproduct = {
                                        "boxid": "showbox",
                                        "sumid": "showsum",
                                        "boxw": 300, //宽度,该版本中请把宽高填写成一样
                                        "boxh": 300, //高度,该版本中请把宽高填写成一样
                                        "sumw": 50, //列表每个宽度,该版本中请把宽高填写成一样
                                        "sumh": 50, //列表每个高度,该版本中请把宽高填写成一样
                                        "sumi": 5, //列表间隔
                                        "sums": 5, //列表显示个数
                                        "sumsel": "sel",
                                        "sumborder": 1, //列表边框，没有边框填写0，边框在css中修改
                                        "lastid": "showlast",
                                        "nextid": "shownext"
                                    }; //参数定义	  
                                    $.ljsGlasses.pcGlasses(showproduct); //方法调用，务必在加载完后执行
                                });
                            </script>


                            <div id="showbox">
                                <?php if(is_array($pic)): $i = 0; $__LIST__ = array_slice($pic,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><img src="<?php echo ($r["filepath"]); ?>" width="500" height="500" alt=""><?php endforeach; endif; else: echo "" ;endif; ?> 
                            </div>
                            <!--展示图片盒子-->
                            <div id="showsum"></div>
                            <!--展示图片里边-->
                            <p class="showpage">
                                <a href="javascript:void(0);" id="showlast"> <i class="fa fa-arrow-left"></i> </a>
                                <a href="javascript:void(0);" id="shownext"> <i class="fa fa-arrow-right"></i></a>
                            </p>
                        </div>
                        <div class="text col-lg-7  col-md-7">
                            <h5>Factory Free sample U8 Smart Watch U8 Android Smart Watch DZ09 TW64 GT08 Wifi in stock
                            </h5>
                            <hr>
                            <div class="dg-des-content">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Release on:</th>
                                            <td>2016-02-21</td>
                                        </tr>
                                        <tr>
                                            <th>Version:</th>
                                            <td>0.1</td>
                                        </tr>
                                        <tr>
                                            <th>Included:</th>
                                            <td>Zip, AI, EPS</td>
                                        </tr>
                                        <tr>
                                            <th>File size:</th>
                                            <td>5Mb</td>
                                        </tr>
                                        <tr>
                                            <th>Requirements:</th>
                                            <td>Illustrator</td>
                                        </tr>
                                        <tr>
                                            <th>Document:</th>
                                            <td>Yes</td>
                                        </tr>
                                        <tr>
                                            <th>Support:</th>
                                            <td>Life Time</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr>
                            <div class="dg-des-buttons">
                                <a href="#" class="dg-btn">Contact Us</a>
                                <a href="#" class="dg-btn dg-theme">Send inquiry</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="layout-content">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Product Details</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Parameter</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab"
                                    data-toggle="tab">Inquiry</a></li>
                        </ul>

                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="home">
                                <?php echo ($content); ?>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="profile">
                                <?php echo ($Parameter); ?>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div digood-id="dg-product-inquiry-form">
                                    <form class="form-horizontal bv-form" role="form" id="dg-InquiryForm"
                                        action="" method="post" target="_top"
                                        novalidate="novalidate"><button type="submit" class="bv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button>
                                        <button type="submit" class="bv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button><button
                                            type="submit" class="bv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button><button
                                            type="submit" class="bv-hidden-submit"
                                            style="display: none; width: 0px; height: 0px;"></button>
                                        <div class="form-group has-feedback">
                                            <label for="dg-email" class="col-sm-3 control-label">
                                                <small style="color:red">*</small> From
                                            </label>
                                            <div class="col-sm-7 col-md-6">
                                                <input type="email" class="form-control" id="dg-email" name="email"
                                                    minlength="8" maxlength="50" required=""
                                                    placeholder="Enter your email address" value=""
                                                    data-bv-field="email"><i class="form-control-feedback"
                                                    data-bv-icon-for="email" style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="emailAddress"
                                                    data-bv-for="email" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">The value is not a valid email
                                                    address</small><small class="help-block"
                                                    data-bv-validator="notEmpty" data-bv-for="email"
                                                    data-bv-result="NOT_VALIDATED" style="display: none;">The email
                                                    address is required</small><small class="help-block"
                                                    data-bv-validator="stringLength" data-bv-for="email"
                                                    data-bv-result="NOT_VALIDATED" style="display: none;">Please enter a
                                                    value with valid length</small></div>
                                        </div>

                                        <div class="form-group has-feedback">
                                            <label for="dg-message" class="col-sm-3 control-label">
                                                <small style="color:red">*</small>
                                                Message</label>
                                            <div class="col-sm-6">
                                                <textarea class="form-control" rows="10" id="dg-message" name="message"
                                                    placeholder="Your message must be between 20-3,000 characters!"
                                                    minlength="20" maxlength="2000" required=""
                                                    data-bv-field="message"></textarea><i class="form-control-feedback"
                                                    data-bv-icon-for="message" style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="message" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">The message is required</small><small
                                                    class="help-block" data-bv-validator="stringLength"
                                                    data-bv-for="message" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">The message must be between 20 and 2000
                                                    characters</small></div>
                                            <div class="col-sm-3">
                                                <p class="help-block small">
                                                    Tips on getting accurate quotes from
                                                    suppliers. Please include the
                                                    following in your inquiry:
                                                    <br>1. Personal or business information
                                                    <br>2. Provide product request in great
                                                    detail
                                                    <br>3. Inquiry for MOQ, Unit Price, etc
                                                </p>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="form-group has-feedback">
                                            <label for="dg-company" class="col-sm-3 control-label">Company</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="dg-company"
                                                    name="contact[company]" maxlength="100"
                                                    data-bv-field="contact[company]"><i class="form-control-feedback"
                                                    data-bv-icon-for="contact[company]" style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="stringLength"
                                                    data-bv-for="contact[company]" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">Please enter a value with valid
                                                    length</small></div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="dg-fullname" class="col-sm-3 control-label">Full Name</label>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-5 col-md-4 col-lg-3">
                                                        <select class="form-control" name="contact[call]"
                                                            style="padding:6px 14px">
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs">Mrs.</option>
                                                            <option value="Miss.">Miss.</option>
                                                            <option value="Ms.">Ms.</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-7 col-md-8 col-lg-9">
                                                        <input type="text" class="form-control" id="dg-fullname"
                                                            name="contact[fullname]" maxlength="30"
                                                            data-bv-field="contact[fullname]"><i
                                                            class="form-control-feedback"
                                                            data-bv-icon-for="contact[fullname]"
                                                            style="display: none;"></i>

                                                        <small class="help-block" data-bv-validator="stringLength"
                                                            data-bv-for="contact[fullname]"
                                                            data-bv-result="NOT_VALIDATED" style="display: none;">Please
                                                            enter a value with valid length</small></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="dg-tel" class="col-sm-3 control-label">Telephone</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="dg-tel" name="contact[tel]"
                                                    maxlength="30" data-bv-field="contact[tel]"><i
                                                    class="form-control-feedback" data-bv-icon-for="contact[tel]"
                                                    style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="stringLength"
                                                    data-bv-for="contact[tel]" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">Please enter a value with valid
                                                    length</small></div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="dg-fax" class="col-sm-3 control-label">Fax</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="dg-fax" name="contact[fax]"
                                                    maxlength="30" data-bv-field="contact[fax]"><i
                                                    class="form-control-feedback" data-bv-icon-for="contact[fax]"
                                                    style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="stringLength"
                                                    data-bv-for="contact[fax]" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">Please enter a value with valid
                                                    length</small></div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <label for="dg-website" class="col-sm-3 control-label">Website</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="dg-website"
                                                    name="contact[website]" placeholder="http://"
                                                    data-bv-field="contact[website]"><i class="form-control-feedback"
                                                    data-bv-icon-for="contact[website]" style="display: none;"></i>
                                                <small class="help-block" data-bv-validator="uri"
                                                    data-bv-for="contact[website]" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">The website address is not valid</small>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dg-country" class="col-sm-3 control-label">Country</label>
                                            <div class="col-sm-6">
                                                <select name="country" id="dg-country" class="form-control">
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AS">American Samoa</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua and Barbuda
                                                    </option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean
                                                        Territory</option>
                                                    <option value="BN">Brunei Darussalam
                                                    </option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic
                                                    </option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CX">Christmas Island</option>
                                                    <option value="CC">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo</option>
                                                    <option value="CD">Congo, the Democratic
                                                        Republic of the</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Cote D'Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czech Republic</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic
                                                    </option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea
                                                    </option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands
                                                        (Malvinas)</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern
                                                        Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HM">Heard Island and Mcdonald
                                                        Islands</option>
                                                    <option value="VA">Holy See (Vatican City
                                                        State)</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran, Islamic Republic of
                                                    </option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KP">Korea, Democratic
                                                        People's Republic of</option>
                                                    <option value="KR">Korea, Republic of
                                                    </option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Lao People's Democratic
                                                        Republic</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao</option>
                                                    <option value="MK">Macedonia, the Former
                                                        Yugoslav Republic of</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MH">Marshall Islands</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="FM">Micronesia, Federated
                                                        States of</option>
                                                    <option value="MD">Moldova, Republic of
                                                    </option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="AN">Netherlands Antilles
                                                    </option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="MP">Northern Mariana Islands
                                                    </option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PW">Palau</option>
                                                    <option value="PS">Palestinian Territory,
                                                        Occupied</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Reunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russian Federation
                                                    </option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="PM">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="VC">Saint Vincent and the
                                                        Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">Sao Tome and Principe
                                                    </option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="CS">Serbia and Montenegro
                                                    </option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia and the
                                                        South Sandwich Islands</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syrian Arab Republic
                                                    </option>
                                                    <option value="TW">Taiwan, Province of China
                                                    </option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania, United Republic
                                                        of</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad and Tobago
                                                    </option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks and Caicos Islands
                                                    </option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates
                                                    </option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US">United States</option>
                                                    <option value="UM">United States Minor
                                                        Outlying Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Viet Nam</option>
                                                    <option value="VG">Virgin Islands, British
                                                    </option>
                                                    <option value="VI">Virgin Islands, U.s.
                                                    </option>
                                                    <option value="WF">Wallis and Futuna
                                                    </option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group has-feedback">
                                            <label for="dg-checkcode" class="col-sm-3 control-label">
                                                <small style="color:red">*</small> Verification
                                                Code
                                            </label>
                                            <div class="col-xs-9 col-sm-4">
                                                <div class="input-group" style="display:flex;">
                                                    <!-- <input type="text" class="form-control" name="checkcode" id="dg-checkcode" required=""
                                              data-bv-field="checkcode"> -->
                                                    <input type="text" class="col-sm-12 form-control"
                                                        placeholder="verifyCode" name="verifyCode" id="verifyCode"
                                                        size="6" value="" maxlength="4" data-bv-field="verifyCode">
                                                    <img src="/Public/www/images/code.gif" onclick="javascript:resetVerifyCode();"
                                                        class="checkcode" align="absmiddle" title="RESETVERIFYCODE"
                                                        id="verifyImage">

                                                    <!-- <span class="input-group-addon" style="margin:0px;padding:0px;width:70px;">
                                              <img class="media-object" src="static/picture/d29e7c07f84c422f81d507fd073639cb.gif"
                                                width="70" height="30" id="dg-imgObj">
                                            </span> -->
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"
                                                            onclick="javascript:resetVerifyCode();"
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Click on the picture to change it" id="dg-reloadimg">
                                                            <span class="glyphicon glyphicon-refresh"></span>
                                                        </button>
                                                    </span>
                                                </div><i class="form-control-feedback" data-bv-icon-for="verifyCode"
                                                    style="display: none; top: 0px; z-index: 100;"></i><i
                                                    class="form-control-feedback" data-bv-icon-for="checkcode"
                                                    style="display: none; top: 0px; z-index: 100;"></i>


                                                <small class="help-block" data-bv-validator="notEmpty"
                                                    data-bv-for="checkcode" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">The verification code is
                                                    required</small>
                                                <small class="help-block" data-bv-validator="stringLength"
                                                    data-bv-for="verifyCode" data-bv-result="NOT_VALIDATED"
                                                    style="display: none;">Please enter a value with valid
                                                    length</small>
                                            </div>
                                            <p class="help-block small  hidden-sm  hidden-xs">
                                                Please enter a correct
                                                verification code.</p>
                                        </div>
                                        <hr>

                                        <!-- 
                                      产品URL 
                                      示例：
                                      <input name="products[]" value="http://www.domain.com/product1.html">
                                      <input name="products[]" value="http://www.domain.com/product2.html">
              
              
                                      自定义内容 
                                      示例：
                                      <input name="custom[Size]" value="60*120">
                                      <input name="custom[Weight]" value="120kg">
                                      -->
                                        <!-- products 字段：咨询的产品页面-->
                                        <!-- page 字段：来源页面，也是提交成功后返回的页面 -->
                                        <input name="page" type="hidden" value="http://inquiry.digoodcms.com/form/demo">


                                        <input id="dg-ipAddress" name="geoip[ipAddress]" type="hidden"
                                            value="120.84.219.81">
                                        <input id="dg-countryName" name="geoip[countryName]" type="hidden"
                                            value="China">
                                        <input id="dg-countryCode" name="geoip[countryCode]" type="hidden" value="CN">
                                        <input id="dg-regionName" name="geoip[regionName]" type="hidden"
                                            value="Guangdong">
                                        <input id="dg-cityName" name="geoip[cityName]" type="hidden" value="Dongguan">
                                        <input id="dg-zipCode" name="geoip[zipCode]" type="hidden" value="110128">
                                        <input id="dg-latitude" name="geoip[latitude]" type="hidden" value="23.0489">
                                        <input id="dg-longitude" name="geoip[longitude]" type="hidden" value="113.745">
                                        <input id="dg-timeZone" name="geoip[timeZone]" type="hidden" value="+08:00">

                                        <input name="useragent[browser]" type="hidden" value="Chrome[66.0.3359.139]">
                                        <input name="useragent[platform]" type="hidden" value="Windows 10">
                                        <input name="useragent[lang]" type="hidden" value="zh-CN,zh;q=0.9,zh-TW;q=0.8">
                                        <input name="useragent[mobile]" type="hidden" value="No">
                                        <input name="useragent[agent_string]" type="hidden"
                                            value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.139 Safari/537.36">

                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-4  col-md-8">
                                                <button type="submit" class="dg-btn dg-theme btn-lg btn-block">
                                                    <span class="glyphicon glyphicon-send"></span>
                                                    &nbsp;&nbsp;Send
                                                    Inquiry</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-sm-offset-2 col-sm-4  col-md-8">
                                            <p class="well well-sm help-block small">
                                                Please make sure your contact information is
                                                correct. Your message will
                                                be sent directly to the recipient(s) and will
                                                not
                                                be publicly displayed. We will never distribute
                                                or sell your personal
                                                information to third parties without
                                                your express permission.
                                            </p>
                                        </div>
                                    </div>

                                    <link href="css/bootstrapvalidator.min.css" rel="stylesheet">
                                    <script src="js/bootstrapvalidator.min.js"></script>
                                    <script src="js/jquery.form.js"></script>
                                    <script src="js/my.js"></script>
                                    <script>
                                        $(document).ready(function () {
                                            //表单验证
                                            $('#dg-InquiryForm').bootstrapValidator({
                                                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                                                feedbackIcons: {
                                                    valid: 'glyphicon glyphicon-ok',
                                                    invalid: 'glyphicon glyphicon-remove',
                                                    validating: 'glyphicon glyphicon-refresh'
                                                },
                                                fields: {
                                                    email: {
                                                        validators: {
                                                            emailAddress: {
                                                                message: 'The value is not a valid email address'
                                                            },
                                                            notEmpty: {
                                                                message: 'The email address is required'
                                                            }
                                                        }
                                                    },
                                                    message: {
                                                        validators: {
                                                            notEmpty: {
                                                                message: 'The message is required'
                                                            },
                                                            stringLength: {
                                                                min: 20,
                                                                max: 2000,
                                                                message: 'The message must be between 20 and 2000 characters'
                                                            }
                                                        }
                                                    },
                                                    'contact[website]': {
                                                        validators: {
                                                            uri: {
                                                                message: 'The website address is not valid'
                                                            }
                                                        }
                                                    },
                                                    checkcode: {
                                                        validators: {
                                                            notEmpty: {
                                                                message: 'The verification code is required'
                                                            }
                                                        }
                                                    }
                                                }
                                            });
                                        });

                                        //刷新验证码
                                        function changeImg() {
                                            var imgSrc = $("#dg-imgObj");
                                            var src = imgSrc.attr("src");
                                            imgSrc.attr("src", src + "?" + Math.random());
                                        }

                                        //获取GEOIP信息
                                        // var YOUR_KEY = "4f21d3e89231c93599ff1f8b7a82a008d03beed6ce46978d8e2816f13ad7e5c1";
                                        // var theURL = "//api.ipinfodb.com/v3/ip-city/?key=" + YOUR_KEY + "&format=json&callback=?";

                                        $.ajax({
                                            type: "POST",
                                            url: theURL,
                                            contentType: "application/json; charset=utf-8",
                                            dataType: "json",
                                            method: 'GET',

                                            success: function (data) {
                                                $("#dg-country").val(data.countryCode);
                                                $("#dg-ipAddress").val(data.ipAddress);
                                                $("#dg-countryName").val(data.countryName);
                                                $("#dg-countryCode").val(data.countryCode);
                                                $("#dg-regionName").val(data.regionName);
                                                $("#dg-cityName").val(data.cityName);
                                                $("#dg-zipCode").val(data.zipCode);
                                                $("#dg-latitude").val(data.latitude);
                                                $("#dg-longitude").val(data.longitude);
                                                $("#dg-timeZone").val(data.timeZone);
                                            }
                                        });
                                    </script>
                                </div>
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