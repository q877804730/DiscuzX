<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('tool_upload');?><?php include template('common/header'); ?><link rel="stylesheet" href="static/css/tools.css" />
<link rel="stylesheet" href="static/css/wangEditor.min.css" />
<script src="static/js/wangEditor.min.js" type="text/javascript" ></script>
<script src="static/js/easyform.js" type="text/javascript" ></script>
<style type="text/css">
.wp {
width: auto;
}
</style>
    <!--main-->
    <div class="tools">
    	<div class="tools_container">
            	<!--left-->
    		<div class="tools_content upload_tool">
                    <div class="box_02">
                    	<div id="accordion" class="accordion">
                                <div class="upload_link">工具上传</div>
                                <form class="submenu" id="reg-form" action="tool.php?mod=index&amp;action=save_upload_tool" method="post" enctype="multipart/form-data">
                                  <div class="submenu_text">
                                    	<span>资料名称：</span>
                                   <span class="search_box01"><input autocomplete="off" class="search" name="tool_name" placeholder="请输入资料名称(3-30汉字)" type="text" id="uid" message="资料名称不能为空" easytip="disappear:lost-focus;theme:blue;"></span>
                                    </div>
                                    <div class="submenu_text">
                                    	<span>工具截图：</span>
                                      <div class="uploader green">
                                        <input type="text" class="filename" readonly/>
                                        <input type="button" class="button" value="上传截图"/>
                                        <input type="file" name="tool_pic" size="30"/>
                                        </div>
                                    </div>
                                    <div class="submenu_text">
                                    	<span>上传工具：</span>
                                        <div class="uploader green">
                                        <input type="text" class="filename" readonly/>
                                        <input type="button" class="button" value="上传截图"/>
                                        <input type="file" name="tool_filename" size="30"/>
                                        </div>
                                    </div>
                                    <div class="submenu_text">
                                    	<span>关键词（Tag)：</span>
                                        <span class="search_box01"><input autocomplete="off" class="search" name="tool_tag" placeholder="请用逗号或空格分隔标签，标签可填1-5个" type="text" id="uid" message="标签不能为空,标签可填1-5个" easytip="disappear:lost-focus;theme:blue;"></span>
                                    </div>
                                    <div class="submenu_text">
                                    	<span>工具分类：</span>
                                        <span class="search_box01">
                                        <select name="tool_cat" class="search w240">
                                            <option value="">请选择资料类型</option>
                                            <option value="1">PHP工具</option>
                                            <option value="2">jQuery插件</option>
                                            <option value="3">HTML5工具</option>
                                            <option value="4">Linux组件</option>
                                            <option value="5">JavaScript工具</option>
                                            <option value="6">开发工具</option>
                                            <option value="7">服务器工具</option>
                                            <option value="8">其他工具</option>
                                        </select>
                                        <!-- <select name="" class="search w240 ml30">
                                            <option value="">请选择</option>
                                        </select> -->
                                        </span>
                                    </div>  
                                    <div class="submenu_text">
                                    	<span>下载威望：</span>
                                        <span class="search_box01">
                                        <select name="tool_cost" class="search w240">
                                            <option value="">请选择下载威望</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                        
                                        </span>
                                    </div>
                                    <div class="submenu_text">
                                    	<span>工具描述：</span>
                                        <span class="search_box01"><textarea class="search" name="tool_desc" rows="0" cols="0" placeholder="介绍一下您的资料吧，这能让它得到更多人的青睐:)" style="height:200px; max-height:200px; max-width:510px"></textarea></span>
                                    </div>

                        <button title="确认提交" type="submit">确认提交</button>
                                </form>
        				</div>
                        <!-- <div class="validation">
                        	<span class="fl">验证码：</span>
                        							<span class="search_box01 w210 fl">
                        								<input type="text" class="search" style="padding-right:0; margin-top:0; width:190px;">
                        							</span>
                        							<span class="fl">
                        								 <img width="78" height="20" alt="" src="">
                        							</span>	
                        							<span class="fl">
                        								<a href="javascript:void(0);">看不清？换一张</a>
                        							</span>
                        </div> -->
                        <!-- <div class="clearfix"></div>
                        <div class="agree">
                        	<input type="checkbox" checked="">&nbsp;&nbsp;同意&nbsp;&nbsp;<a href="#">PHPChina&nbsp;资料上传协议 </a>
                        </div> -->
                        
                    </div>
    	</div>
    	<!--right-->
    	<div class="tool_right">
    		<div class="right_author" style="background:url(static/image/tools/dedicate_announcement.png) center no-repeat;">
    			<h1 style="font-weight:bold; font-size:18px; color:#666; margin-bottom:20px">上传资料须知</h1>
                        <p>
                        1.存储空间：不限<br />
                        2.存储时间：永久<br />
                        3.每次最多同时上传10份资料<br />
                        4.每份资料最大50M<br />
                        5.资料超出50M建议分卷 （如何分卷?）<br />
                        6.分卷资料建议合为一个资料上传<br />
                        7.禁止上传任何政治敏感、色情、 广告以及侵犯他人版权的资料<br />
                        8.上传资料表示您完全接受PHPChina <br />
                        下载中心的&nbsp;&nbsp;<a href="#" style="text-decoration: underline;color: #77d4c6;">上传协议</a>
                        </p>
    		</div>
    			<div class="right-side-focus">
<ul>
<li><a href="javascript:;"><img src="static/image/tools/ad.jpg"></a></li>
<li><a href="javascript:;"><img src="static/image/tools/ad1.jpg"></a></li>
</ul>	
</div>
    	</div>
    	</div>
    </div>

</body>
<script type="text/javascript">
    
    jQuery(function(){
    	jQuery(".search").focus(function(){
jQuery(this).css("box-shadow","rgba(102,175,233,0.5) 0px 0px 6px");
});
jQuery(".search").blur(function(){
jQuery(this).css("box-shadow","1px 1px 8px rgba(210,206,206,0.35) inset,1px 1px 4px rgba(255,255,255,0.4)");
});

//关注和收藏
 	jQuery(".concern").click(function(){
 		var name = jQuery(".concern").text();
 		str=name.substring(0,5);
 		var k = name.substring(6,7);
 		if(str ==="关注发布者"){
 		k ++;
 		jQuery(".concern").html('<i class="fa fa-check"></i>已关注（'+k+'）');
 		}else{
 			var name = jQuery(".concern").text();
 			str=name.substring(0,3);
 			var k = name.substring(4,5);
 			k--;
 			jQuery(".concern").html('<i class="fa fa-edit"></i>关注发布者（'+k+'）')
 		}
 	})

 	jQuery(".ollection").click(function(){
 		var name_o = jQuery(".ollection").text();
 		str=name_o.substring(0,4);
 		var k = name_o.substring(5,6);
 		if(str ==="收藏工具"){
 		k ++;
 		jQuery(".ollection").html('<i class="fa fa-heart"></i>已收藏（'+k+'）');
 		}else{
 			var name_o = jQuery(".ollection").text();
 			str=name_o.substring(0,3);
 			var k = name_o.substring(4,5);
 			k--;
 			jQuery(".ollection").html('<i class="fa fa-heart-o"></i>收藏工具（'+k+'）')
 		}
 	})
jQuery("#delete_01").on('click',function(){
jQuery("#upload_content_01").hide();
})
jQuery("#delete_02").on('click',function(){
jQuery("#upload_content_02").hide();
})
jQuery("#delete_03").on('click',function(){
jQuery("#upload_content_03").hide();
})
jQuery("#delete_04").on('click',function(){
jQuery("#upload_content_04").hide();
})
    })
jQuery(function(){
jQuery("input[type=file]").change(function(){jQuery(this).parents(".uploader").find(".filename").val(jQuery(this).val());});
jQuery("input[type=file]").each(function(){
if(jQuery(this).val()==""){jQuery(this).parents(".uploader").find(".filename").val("No file selected...");}
});
});
jQuery(document).ready(function(){
jQuery('#reg-form').easyform();
});
//jQuery(function() {
//			var Accordion = function(el, multiple) {
//				this.el = el || {};
//				this.multiple = multiple || false;
//		
//				// Variables privadas
//				var links = this.el.find('.upload_link');
//				// Evento
//				links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
//			}
//		
//			Accordion.prototype.dropdown = function(e) {
//				var jQueryel = e.data.el;
//					jQuerythis = jQuery(this),
//					jQuerynext = jQuerythis.next();
//		
//				jQuerynext.slideToggle();
//				jQuerythis.parent().toggleClass('open');
//		
//				if (!e.data.multiple) {
//					jQueryel.find('.submenu').not(jQuerynext).slideUp().parent().removeClass('open');
//				};
//			}	
//		
//			var accordion = new Accordion(jQuery('#accordion'), false);
//		});				
</script><?php include template('common/footer'); ?>