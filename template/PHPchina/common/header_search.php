<?php echo 'error'; exit();?>
<!--{subtemplate common/header_common}-->
<meta name="application-name" content="$_G['setting']['bbname']" />
<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />

<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
<!--{/if}-->
<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
<!--{if widthauto()}-->
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_{STYLEID}_widthauto.css?{VERHASH}" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<!--{/if}-->
<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}home_index.js?{VERHASH}"></script>
<!--{elseif $_G['basescript'] == 'portal'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}home_index.js?{VERHASH}"></script>
<!--{/if}-->
<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
<!--{/if}-->
<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />
<!--{/if}-->

<script>
    $(function(){
        $(".one li").mouseover(function(){
            var k =$(".one li").index(this);
            $(this).addClass("special").siblings().removeClass("special");
            var qq =$(this).parents(".third-left-one").children("div")
            qq.eq(k).show().siblings().hide();
            $(".one").show();
        });
        $(".ones li").mouseover(function(){
            var k =$(".ones li").index(this);
            $(this).addClass("special").siblings().removeClass("special");
            var qq =$(this).parents(".third-left-one").children("div")
            qq.eq(k).show().siblings().hide();
            $(".one").show();
        });

        $(".nav-main-right li").mouseover(function(){
            $(this).addClass("special").siblings().removeClass("special");
        })
    })
</script>

</head>
<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
<!--{template common/header_diy}-->
<!--{/if}-->
<!--{if check_diy_perm($topic)}-->
<!--{template common/header_diynav}-->
<!--{/if}-->
<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
$diynav
<!--{/if}-->
<!--{if empty($topic) || $topic['useheader']}-->
<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
<div class="xi1 bm bm_c">
    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
</div>
<!--{/if}-->
<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
<div id="shortcut">
    <span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
    {lang shortcut_notice}
    <a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>

</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<!--{/if}-->
<!--{hook/global_cpnav_top}-->
<div class="header_top">
    <div class="top_container">
        <div class="top_left">
            <!--{loop $_G['setting']['topnavs'][0] $nav}-->
            <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
            <!--{/loop}-->
            <!--{hook/global_cpnav_extra1}-->
        </div>
        <div class="top_right">
            <span class="login"><a href="javascript:;">登录</a></span>|<span class="register"><a href="javascript:;">注册</a></span>
        </div>
        <!--隐藏diy-->
        <div class="y" style="display: none;">
            <a id="switchblind" href="javascript:;" onclick="toggleBlind(this)" title="{lang switch_blind}" class="switchblind">{lang switch_blind}</a>
            <!--{hook/global_cpnav_extra2}-->
            <!--{loop $_G['setting']['topnavs'][1] $nav}-->
            <!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
            <!--{/loop}-->
            <!--{if empty($_G['disabledwidthauto']) && $_G['setting']['switchwidthauto']}-->
            <a href="javascript:;" id="switchwidth" onclick="widthauto(this)" title="{if widthauto()}{lang switch_narrow}{else}{lang switch_wide}{/if}" class="switchwidth"><!--{if widthauto()}-->{lang switch_narrow}<!--{else}-->{lang switch_wide}<!--{/if}--></a>
            <!--{/if}-->
            <!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}--><a id="sslct" href="javascript:;" onmouseover="delayShow(this, function() {showMenu({'ctrlid':'sslct','pos':'34!'})});">{lang changestyle}</a><!--{/if}-->
            <!--{if check_diy_perm($topic)}-->
            $diynav
            <!--{/if}-->
        </div>
    </div>
</div>


<!--{if !IS_ROBOT}-->
<!--{if $_G['uid']}-->
<ul id="myprompt_menu" class="p_pop" style="display: none;">
    <li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>
    <li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>
    <!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
    <li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
    <!--{/if}-->
    <!--{if $_G[member][newprompt]}-->
    <!--{loop $_G['member']['category_num'] $key $val}-->
    <li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
    <!--{/loop}-->
    <!--{/if}-->
    <!--{if empty($_G['cookie']['ignore_notice'])}-->
    <li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
    <!--{/if}-->
</ul>
<!--{/if}-->
<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
<div id="sslct_menu" class="cl p_pop" style="display: none;">
    <!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onclick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
    <!--{loop $_G['style']['extstyle'] $extstyle}-->
    <span class="sslct_btn" onclick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
    <!--{/loop}-->
</div>
<!--{/if}-->
<!--{if $_G['uid']}-->
<ul id="myitem_menu" class="p_pop" style="display: none;">
    <li><a href="forum.php?mod=guide&view=my">{lang mypost}</a></li>
    <li><a href="home.php?mod=space&do=favorite&view=me">{lang favorite}</a></li>
    <li><a href="home.php?mod=space&do=friend">{lang friends}</a></li>
    <!--{hook/global_myitem_extra}-->
</ul>
<!--{/if}-->
<!--{subtemplate common/header_qmenu}-->
<!--{/if}-->

<!--{ad/headerbanner/wp a_h}-->

<div id="hd">
    <div class="wp">

    </div>
</div>

<!--{hook/global_header}-->
<!--{/if}-->



    <div class="header_nav">
        <div class="nav_container">
            <div class="nav_logo">
                <!--{eval $mnid = getcurrentnav();}-->
                <h2><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->append_parent$_G['setting']['navlogos'][$mnid]<!--{/if}--></h2>
            </div>
            <div class="nav_ad"><img src="template/PHPchina/image/community/app.gif"></div>
            <!--{hook/global_nav_extra}-->
            $_G[setting][menunavs]
            <!--{ad/subnavbanner/a_mu}-->
            <div class="nav_search">
                <input type="text" placeholder="请输入搜索文章内容" class="search" autocomplete="off"><i></i>
            </div>
            <div class="er_code">
                <div><span class="er_code_weibo">新浪微博</span><i class="wb"></i></div>
                <div><span class="er_code_weixin">微信订阅</span><i class="wx"></i></div>
            </div>
        </div>
    </div>

<div id="wp" class="wp">