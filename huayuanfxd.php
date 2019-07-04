<?php
/*
Plugin Name: 博客影视选集插件
Version: 1.0
Plugin URL: http://cache.igvps.cn
Description: <font color=blue>青空网易-博客影视选集插件</font>
Author: 青空网易
Author URL: http://cache.igvps.cn
*/
!defined('EMLOG_ROOT') && exit('access deined!');
function huayuanfxd_setting(){?>
<script>
$(document).ready(function(){
$("#HFbox #CR").click(function(){
$($(".ke-edit-iframe:first").contents().find(".ke-content")).append("<div class=\"huayuanfxd_tit\"><i class=\"ico\"></i>选集&nbsp;"+($('#MM').val())+"</div><span onclick=\"window.open('"+($('#DZ').val())+"');\" class=\"huayuanfxd\"><i class=\"ico\"></i><i class=\"line\"></i>"+($('#LY').val())+"</span>&nbsp;");});
$("#HFbox #CR1").click(function(){
$($(".ke-edit-iframe:first").contents().find(".ke-content")).append("<span onclick=\"window.open('"+($('#DZ').val())+"');\" class=\"huayuanfxd\"><i class=\"ico\"></i><i class=\"line\"></i>"+($('#LY').val())+"</span>&nbsp;");});
//关闭代码
$("#GB").click(function(){
$("#hf_con").slideUp(200);}); 
$("#hf_title").click(function(){
$("#hf_con").toggle();}); 
$("#QC").click(function(){
$("#hf_con input").attr("value","");
  });
});
</script>
<style>
#hf_box{font-weight:bold; font-family:Arial;font-size:12px;margin:5px 0; cursor:pointer;clear:both; position:relative}
#hf_box #hf_title{background:#5bc0de;float:left;padding:5px 10px;margin-bottom:5px;float:left;clear:both;color:#fff;border-radius:4px;font-weight:normal;font-family:"Microsoft Yahei";font-size:14px;background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size: 30px 30px;box-shadow: 0 0 4px 1px rgba(16, 160, 249, 0.3);}
#hf_box #hf_title:hover{background-color:#00aff0;}
#hf_box #hf_con{clear:both;float:left;font-weight:normal;margin:5px auto 10px;display:none;border: 1px solid #ccc;padding: 10px;width:450px;border-radius:4px;top: 70px;left:0px;right:0px; position:absolute;background-color:#fff;}
#hf_box #hf_con p{margin:0 0 10px 0;font-size:14px;}
#hf_box #hf_con input{width:210px;font-size:12px;padding:5px;border-radius:4px;outline:none;border: 1px solid #ccc;}
#hf_box #hf_con input:-webkit-autofill{background:#fff;}
#hf_box #hf_con span{float:left;cursor:pointer;border:0;padding:10px 15px;font-size: 12px;margin: 0 10px 0 0;border-radius:4px;color:#fff;background-image: linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size: 30px 30px;box-shadow: 0 0 4px 1px rgba(16, 160, 249, 0.3);}
#hf_box #hf_con span:hover{background:#00aff0 !important;color:#fff !important;}
#hf_box #hf_con #crfj{background:#9c3;color:#fff;}
#hf_box #hf_con select{padding:5px;border-radius:4px;outline:none;border: 1px solid #ccc;}
input:focus,select:focus{border-color:#66afe9;outline:0;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);background:#fff;}
</style>
<div class="clear"></div>
<div id="hf_box">
<div id="hf_title" title="点击打开或关闭功能界面">插入选集按钮</div> 
<div id="hf_con">
<div id="HFbox">
<!--<p>选集来源地址：<input name="LY" id="LY" value="第一集" />&nbsp;&nbsp;<b style="color:#ccc;font-weight:normal">例如：第一集</b></p>-->
<p>选集来源地址：：
<select name="LY" id="LY">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
&nbsp;&nbsp;&nbsp;&nbsp;<b style="color:#ccc;font-weight:normal">选择多少集将调用对应的集数</b></select></p>
<p>播放来源：<input name="DZ" id="DZ" value="" />&nbsp;&nbsp;<b style="color:#ccc;font-weight:normal">例子：http://cache.igvps.cn</b></p>
<p>页面密码：<input name="MM" id="MM" value="" />&nbsp;&nbsp;<b style="color:#ccc;font-weight:normal">例子：页面访问验证 没有则不填</b></p>
<p>使用方法：</p>
<p>1、播放来源、页面密码输入正确后插入第一集【首先插入】</p>
<p>2、更多集数来源请将前面设置好以后再点击【循环插入】</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;切记，先点击【首先插入】再点击【循环插入】</p>
<p style="margin: 10px 0 0 70px;">
<span id="CR" style="background-color:#337ab7;">首先插入</span>
<span id="CR1" style="background-color:#337ab7;">循环插入</span>
<span id="GB" style="background-color:#5cb85c">关闭工具</span>
<span id="QC" style="background-color:#f0ad4e">清除内容</span>
</p>
</div>
</div>
</div>
<div class="clear"></div>
<?php }
addAction('adm_writelog_head', 'huayuanfxd_setting');
function huayuanfxd_css(){?>
<style>
div.huayuanfxd_tit{border-top:1px solid #ccc;margin:10px 0 5px;padding-top:10px;}
div.huayuanfxd_tit .ico{display:inline-block;margin-right:5px;width:15px;height:15px;background: url(<?php echo BLOG_URL;?>content/plugins/huayuanfxd/ico.png) no-repeat;background-position: 0 -36px;vertical-align:-2px;}
span.huayuanfxd{position:relative;z-index:1;display:inline-block;height:37px;line-height:37px;padding:0 20px 0 50px;margin:10px 10px 10px 0;border:1px solid #d7d7d7;border-width:1px 1px 4px;font-size:14px;font-weight:700;color:#0b588c; text-decoration:none;transition:none;border-radius:2px;cursor:pointer}
span.huayuanfxd:hover{background-color:#0b588c;border-color:#0b588c #0b588c #0b4972;color:#fff;}
span.huayuanfxd .ico{position:absolute;z-index:2;left:11px;top:14.5px;width:12px;height:8px;font-size:0;display:inline-block;margin-right:5px;background: url(<?php echo BLOG_URL;?>content/plugins/huayuanfxd/ico.png) no-repeat;background-position:-63px -166px;}
span.huayuanfxd:hover .ico{background-position:-80px -166px;}
span.huayuanfxd .line{position:absolute;z-index:2;left:32px;top:0;height:37px;width:1px;background-color:#d7d7d7;}
</style>
<?php }
addAction('index_footer', 'huayuanfxd_css');
?>