<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>产品详情</title>
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
<div class="weui-content">
<meta name="_token" content="{{ csrf_token() }}"/>
  <!--产品详情-->
  <div class="weui-tab">
    <div class="weui-navbar" style="position:fixed; top:0; left:0; right:0; height:44px;">
      <a class="weui-navbar__item proinfo-tab-tit weui-bar__item--on" href="#tab1">商品</a>
      <a class="weui-navbar__item proinfo-tab-tit" href="#tab2">详情</a>
      <a class="weui-navbar__item proinfo-tab-tit" href="#tab3">评价</a>
    </div>
    <div class="weui-tab__bd proinfo-tab-con">
      <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
        <!--主图轮播-->
        <div class="swiper-container swiper-zhutu">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{$list->goods_images}}" /></div>
          </div>
          <div class="swiper-pagination swiper-zhutu-pagination"></div>
        </div>
        <div class="wy-media-box-nomg weui-media-box_text">ss="num font-20" id='goods_price'>{{$list->goods_price}}</em></div>
          <p class="weui-media-box__desc">点击领取10000元优惠卷！！</p>
        </div>
        <div class="wy-media-box2 weui-media-box_text">
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">优惠</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-message clear">
                <i
          <h4 class="wy-media-box__title">{{$list->goods_name}}</h4>
          <div class="wy-pro-pri mg-tb-5">¥<em cla class="yhq"><span class="label-text">优惠券</span></i>
                <span class="promotion-item-text">满197.00减40.00</span>
              </div>
              <div class="promotion-message clear">
                <i class="yhq"><span class="label-text">优惠券</span></i>
                <span class="promotion-item-text">满197.00减40.00</span>
              </div>
              <div class="yhq-btn clear"><a href="yhq_list.html">去领券</a></div>
            </div>
          </div>
        </div>
        <div class="wy-media-box2 weui-media-box_text">
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">尺码</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-sku clear">
                <ul>
                  <li><a href="javascript:;">40</a></li>
                  <li><a href="javascript:;">45</a></li>
                  <li><a href="javascript:;">50</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">颜色</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-sku clear">
                <ul>
                  <li><a href="javascript:;">黑色</a></li>
                  <li><a href="javascript:;">红色</a></li>
                  <li><a href="javascript:;">绿色</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="wy-media-box2 txtpd weui-media-box_text">
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">送至</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-message clear">
                <span class="promotion-item-text">江苏</span>
                <span class="promotion-item-text">宿迁</span>
                <span class="promotion-item-text">洋河新区</span>
              </div>
            </div>
          </div>
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">运费</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-message clear">
                <span class="promotion-item-text">免运费<!--<div class="wy-pro-pri">¥<span class="num">11.00</span></div>--></span>
              </div>
            </div>
          </div>
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">商家</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-message clear">
                <span class="promotion-item-text">蓝之蓝股份有限公司</span>
              </div>
            </div>
          </div>
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">提示</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-message clear">
                <span class="promotion-item-text"><p class="txt-color-ml">支持7天无理由退换货</p></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div id="tab2" class="weui-tab__bd-item ">
        <div class="pro-detail">
          <img src="upload/xq1.jpg" /><img src="upload/xq2.jpg" /><img src="upload/xq3.jpg" /><img src="upload/xq4.jpg" /><img src="upload/xq5.jpg" /><img src="upload/xq6.jpg" /><img src="upload/xq7.jpg" /><img src="upload/xq8.jpg" /><img src="upload/xq9.jpg" />
        </div>
      </div> -->
      <div id="tab3" class="weui-tab__bd-item">
        <!--评价-->
        <!-- <div class="weui-panel__bd">
          <div class="wy-media-box weui-media-box_text">
            <div class="weui-cell nopd weui-cell_access">
              <div class="weui-cell__hd"><img src="upload/headimg.jpg" alt="" style="width:20px;margin-right:5px;display:block"></div>
              <div class="weui-cell__bd weui-cell_primary"><p>飞翔的小土豆</p></div>
              <span class="weui-cell__time">2017-02-06</span>
            </div>
            <div class="comment-item-star"><span class="real-star comment-stars-width5"></span></div>
            <p class="weui-media-box__desc">面料不错，码数也正常  男朋友穿的很合适。</p>
            <ul class="weui-uploader__files clear mg-com-img">
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
            </ul>
          </div>
        </div> -->
        <!-- <div class="weui-panel__bd">
          <div class="wy-media-box weui-media-box_text">
            <div class="weui-cell nopd weui-cell_access">
              <div class="weui-cell__hd"><img src="upload/headimg.jpg" alt="" style="width:20px;margin-right:5px;display:block"></div>
              <div class="weui-cell__bd weui-cell_primary"><p>爱情海的事故</p></div>
              <span class="weui-cell__time">2017-02-06</span>
            </div>
            <div class="comment-item-star"><span class="real-star comment-stars-width3"></span></div>
            <p class="weui-media-box__desc">面料不错，码数也正常  男朋友面料不错，码数也正常  男朋友穿的面料不错，码数也正常  男朋友穿的穿的很合适。</p>
            <ul class="weui-uploader__files clear mg-com-img">
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
            </ul>
          </div>
        </div>
        <div class="weui-panel__bd">
          <div class="wy-media-box weui-media-box_text">
            <div class="weui-cell nopd weui-cell_access">
              <div class="weui-cell__hd"><img src="upload/headimg.jpg" alt="" style="width:20px;margin-right:5px;display:block"></div>
              <div class="weui-cell__bd weui-cell_primary"><p>爱情海的事故</p></div>
              <span class="weui-cell__time">2017-02-06</span>
            </div>
            <div class="comment-item-star"><span class="real-star comment-stars-width3"></span></div>
            <p class="weui-media-box__desc">面料不错，码数也正常  男朋友面料不错，码数也正常  男朋友穿的面料不错，码数也正常  男朋友穿的穿的很合适。</p>
            <ul class="weui-uploader__files clear mg-com-img">
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
            </ul>
          </div>
        </div>
        <div class="weui-panel__bd">
          <div class="wy-media-box weui-media-box_text">
            <div class="weui-cell nopd weui-cell_access">
              <div class="weui-cell__hd"><img src="upload/headimg.jpg" alt="" style="width:20px;margin-right:5px;display:block"></div>
              <div class="weui-cell__bd weui-cell_primary"><p>爱情海的事故</p></div>
              <span class="weui-cell__time">2017-02-06</span>
            </div>
            <div class="comment-item-star"><span class="real-star comment-stars-width3"></span></div>
            <p class="weui-media-box__desc">面料不错，码数也正常  男朋友面料不错，码数也正常  男朋友穿的面料不错，码数也正常  男朋友穿的穿的很合适。</p>
            <ul class="weui-uploader__files clear mg-com-img">
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)" onclick="window.location.reload('gallery.html')"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/ban2.jpg)" onclick="window.location.reload('gallery.html')"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)" onclick="window.location.reload('gallery.html')"></li>
            </ul>
          </div>
        </div>
        <div class="weui-panel__bd">
          <div class="wy-media-box weui-media-box_text">
            <div class="weui-cell nopd weui-cell_access">
              <div class="weui-cell__hd"><img src="upload/headimg.jpg" alt="" style="width:20px;margin-right:5px;display:block"></div>
              <div class="weui-cell__bd weui-cell_primary"><p>爱情海的事故</p></div>
              <span class="weui-cell__time">2017-02-06</span>
            </div>
            <div class="comment-item-star"><span class="real-star comment-stars-width3"></span></div>
            <p class="weui-media-box__desc">面料不错，码数也正常  男朋友面料不错，码数也正常  男朋友穿的面料不错，码数也正常  男朋友穿的穿的很合适。</p>
            <ul class="weui-uploader__files clear mg-com-img">
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
                <li class="weui-uploader__file" style="background-image:url(./upload/pro3.jpg)"></li>
            </ul>
          </div> -->
        </div>
        <a href="javascript:void(0);" class="weui-cell weui-cell_access weui-cell_link list-more">
            <div class="weui-cell__bd">查看更多</div>
            <span class="weui-cell__ft"></span>
          </a>
        
      </div>
    </div>
  </div>  
</div>
<span id="tophovertree" title="返回顶部"></span>
<!--底部导航-->
<div class="foot-black"></div>
<div class="weui-tabbar wy-foot-menu">
  <a href="javascript:;" class="promotion-foot-menu-items">
    <div class="weui-tabbar__icon promotion-foot-menu-kefu"></div>
    <p class="weui-tabbar__label">客服</p>
  </a>
  <a href="javascript:;" id='show-toast' class="promotion-foot-menu-items">
    <div class="weui-tabbar__icon promotion-foot-menu-collection"></div>
    <p class="weui-tabbar__label">收藏</p>
  </a>
  <a href="shopcart.html" class="promotion-foot-menu-items">
    <span class="weui-badge" style="position: absolute;top: -.4em;right: 1em;">8</span>
    <div class="weui-tabbar__icon promotion-foot-menu-cart"></div>
    <p class="weui-tabbar__label">购物车</p>
  </a>
  <a href="javascript:;" class="weui-tabbar__item yellow-color open-popup" data-target="#join_cart">
    <p class="promotion-foot-menu-label" id="cc" >加入购物车</p>
  </a>
  <a href="javascript:;" class="weui-tabbar__item red-color open-popup" data-target="#selcet_sku">
    <p class="promotion-foot-menu-label">立即购买</p>
  </a>
</div>
<div id="join_cart" class='weui-popup__container popup-bottom' style="z-index:600;">
  <div class="weui-popup__overlay" style="opacity:1;"></div>
  <div class="weui-popup__modal">
    <div class="modal-content">
      <div class="weui-msg" style="padding-top:0;">
        <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
        <div class="weui-msg__text-area">
          <h2 class="weui-msg__title">成功加入购物车</h2>
          <p class="weui-msg__desc">亲爱的用户，您的商品已成功加入购物车，为了保证您的商品快速送达，请您尽快到购物车结算。</p>
        </div>
        <div class="weui-msg__opr-area">
          <p class="weui-btn-area">
            <a href="buthcart" class="weui-btn weui-btn_primary">去购物车结算</a>
            <a href="javascript:;" class="weui-btn weui-btn_default close-popup">不，我再看看</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="selcet_sku" class='weui-popup__container popup-bottom' style="z-index:600;">
  <div class="weui-popup__overlay" style="opacity:1;"></div>
  <div class="weui-popup__modal">
    <div class="toolbar">
      <div class="toolbar-inner">
        <a href="javascript:;" class="picker-button close-popup">关闭</a>
        <h1 class="title">商品属性</h1>
      </div>
    </div>
    <div class="modal-content">
      <div class="weui-msg" style="padding-top:0;">
        <div class="wy-media-box2 weui-media-box_text" style="margin:0;">
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">尺码</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-sku clear">
                <ul>
                  <li><a href="javascript:;">25</a></li>
                  <li><a href="javascript:;">30</a></li>
                  <li><a href="javascript:;">34</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="weui-media-box_appmsg">
            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">颜色</span></div>
            <div class="weui-media-box__bd">
              <div class="promotion-sku clear">
                <ul>
                  <li><a href="javascript:;">黑色</a></li>
                  <li><a href="javascript:;">红色</a></li>
                  <li><a href="javascript:;">白色</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="weui-msg__opr-area">
          <p class="weui-btn-area">
            <a href="order_info.html" class="weui-btn weui-btn_primary">立即购买</a>
            <a href="javascript:;" class="weui-btn weui-btn_default close-popup">不，我再看看</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="lib/jquery-2.1.4.js"></script> 
<script src="lib/fastclick.js"></script> 
<script>
  $(function() {
    FastClick.attach(document.body);
  });
</script> 
<script src="js/jquery-weui.js"></script>
<script src="js/swiper.js"></script>
<script>
$(".swiper-zhutu").swiper({
        loop: true,
		paginationType:'fraction',
        autoplay:5000
      });
</script>
<script>
$(function(){
	$(".promotion-sku li").click(function(){
		$(this).addClass("active").siblings("li").removeClass("active");
		})
	})
</script>
<script>
      $(document).on("click", "#show-toast", function() {
        $.toast("收藏成功", function() {
          console.log('close');
        });
      })
</script>
<script>
      $(document).on("open", ".weui-popup-modal", function() {
        console.log("open popup");
      }).on("close", ".weui-popup-modal", function() {
        console.log("close popup");
      });
    </script>
<script>
$(function (){initTopHoverTree("tophov"+"ertree",30,10,10); })
</script>
<script>
function initTopHoverTree(hvtid, times, right, bottom) {
$("#" + hvtid).css("right", right).css("bottmo", bottom);
$("#" + hvtid).on("click", function () { goTopHovetree(times); })
$(window).scroll(function () {
if ($(window).scrollTop() > 268) {
$("#" + hvtid).fadeIn(100);
}
else {
$("#" + hvtid).fadeOut(100);
}
});
}
//返回顶部动画
//goTop(500);//500ms内滚回顶部
function goTopHovetree(times) {
if (!!!times) {
$(window).scrollTop(0);
return;
}
var sh = $('body').scrollTop();//移动总距离
var inter = 13.333;//ms,每次移动间隔时间
var forCount = Math.ceil(times / inter);//移动次数
var stepL = Math.ceil(sh / forCount);//移动步长
var timeId = null;
function aniHovertree() {
!!timeId && clearTimeout(timeId);
timeId = null;
//console.log($('body').scrollTop());
if ($('body').scrollTop() <= 0 || forCount <= 0) {//移动端判断次数好些，因为移动端的scroll事件触发不频繁，有可能检测不到有<=0的情况
$('body').scrollTop(0);
return;
}
forCount--;
sh -= stepL;
$('body').scrollTop(sh);
timeId = setTimeout(function () { aniHovertree(); }, inter);
}
aniHovertree();
}

$('#cc').on('click',function(){
  var _this=$(this);
  var goods_id=_this.attr('goods_id');
  var goods_price=$('#goods_price').text();
  alert(goods_id);
  $.ajax({
     headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'),
        },
     url:'/buthcart',
     type:'POST',
     data:{goods_id:goods_id,goods_price:goods_price},
     dataType:'json',
     async:true,
     success:function(res){
      if(res.code==1){
        alert('加入购物车成功');
      }else{
        alert('加入购物车失败');
      }
     }
  
  },'json');
});
</script>
</body>
</html>
