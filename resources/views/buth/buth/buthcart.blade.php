<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>购物车</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.
">
<link rel="stylesheet" href="lib/weui.min.css">
<link rel="stylesheet" href="css/jquery-weui.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body ontouchstart>
<!--主体-->
<header class="wy-header">
  <div class="wy-header-icon-back"><span></span></div>
  <div class="wy-header-title">购物车</div>
</header>
<div class="weui-content">
  <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd"><span>江苏蓝之蓝旗舰店</span><a href="javascript:;" class="wy-dele"></a></div>
    @foreach($res as $v)
    <div class="weui-panel__bd">
      <div class="weui-media-box_appmsg pd-10">
        <div class="weui-media-box__hd check-w weui-cells_checkbox">
          <label class="weui-check__label" for="cart-pto1">
            <div class="weui-cell__hd cat-check"><input type="checkbox" class="weui-check" name="cartpro" id="cart-pto1"><i class="weui-icon-checked"></i></div>
          </label>
        </div>
        <div class="weui-media-box__hd"><a href="pro_info.html"><img class="weui-media-box__thumb" src="upload/pro3.jpg" alt=""></a></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc"><a href="pro_info.html" class="ord-pro-link">{{$v->goods_name}}</a></h1>
          <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
          <div class="clear mg-t-10">
            <div class="wy-pro-pri fl">¥<em class="num font-15">{{$v->goods_price}}</em></div>
            <div class="pro-amount fr"><div class="Spinner"></div></div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>
<!--底部导航-->
<div class="foot-black"></div>
<div class="weui-tabbar wy-foot-menu">
  <div class="npd cart-foot-check-item weui-cells_checkbox allselect">
    <label class="weui-cell allsec-well weui-check__label" for="all">
        <div class="weui-cell__hd">
          <input type="checkbox" class="weui-check" name="all-sec" id="all">
          <i class="weui-icon-checked"></i>
        </div>
        <div class="weui-cell__bd">
          <p class="font-14">全选</p>
        </div>
    </label>
  </div>
  <div class="weui-tabbar__item  npd">
    <p class="cart-total-txt">合计：<i>￥</i><em class="num font-16" id="zong1">22222.00</em></p>
  </div>
  <a href="buthinfo" class="red-color npd w-90 t-c">
    <p class="promotion-foot-menu-label">去结算</p>
  </a>
</div>

<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script type="text/javascript" src="js/jquery.Spinner.js"></script>
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script>
<script type="text/javascript">
$(function(){
	$(".Spinner").Spinner({value:1, len:3, max:999});
});
</script>
<script src="js/jquery-weui.js"></script>
<!---全选按钮-->

<script type="text/javascript">
$(document).ready(function () {      
	$(".allselect").click(function () {
		if($(this).find("input[name=all-sec]").prop("checked")){
			$("input[name=cartpro]").each(function () {
				$(this).prop("checked", true);
			});
		
		}
		else
   		{
			$("input[name=cartpro]").each(function () {
				if ($(this).prop("checked")) {
					$(this).prop("checked", false);
				} else {
					$(this).prop("checked", true);
				} 
			});
    
   		}
		
	});

});
</script>
<script>
      $(document).on("click", ".wy-dele", function() {
        $.confirm("您确定要把此商品从购物车删除吗?", "确认删除?", function() {
          $.toast("文件已经删除!");
        }, function() {
          //取消操作
        });
      });

    </script>

</body>
</html>
