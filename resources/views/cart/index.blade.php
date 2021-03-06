<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>购物车</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('cart/css/reset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('cart/css/index.css') }}"/>
</head>
<body>
<!--头部-->
<header>
    购物车<span class="fr">编辑</span>
</header>
<!--头部-->
<!--主题-->

@if(!empty($list))
    <div class="con">
        <div class="content">
            <div class="list">
                <div class="fl">
                    <label>
                        <input type="checkbox" checked="checked"/>
                        <img src="{{ asset('cart/image/c_checkbox_on.png') }}"/>
                    </label>
                </div>
                <p>全选</p>
            </div>
            <ul ind="0">
                @forelse($list as $item)
                    <li class="clearfix">
                        <div class="label fl">
                            <label>
                                <input type="checkbox" checked="checked" name="goods_id"/>
                                <img src="{{ asset('cart/image/c_checkbox_on.png') }}"/>
                            </label>
                        </div>
                        <div class="img fl">
                            <img src="{{ asset('cart/image/logo.png') }}"/>
                        </div>
                        <div class="text fl">
                            <p class="overflow">{{ $item->goods_name }}</p>
                            <p class="clearfix">
                                <span class="fl red">￥{{ $item->price }}</span>
                                <span class="fr">
		    					<input type="button" value="-" class="btn1"/>
		    					<span class="number">{{ $item->qty }}</span>
		    					<input type="button" value="+" class="btn2"/>
		    				</span>
                            </p>
                        </div>
                    </li>
                @empty
                @endforelse
            </ul>
            <p class="total">一共
                <number></number>
                件商品：<span></span></p>
        </div>
    </div>
@else
    <div class="no">
        <p>暂无数据，快去逛逛吧！</p>
    </div>
@endif
<!--主题-->
<!--结算-->
<div class="bottom fixed">
    <div class="fl bottom-label">
        <label>
            <input type="checkbox" checked="checked"/>
            <img src="image/c_checkbox_on.png" class="fl" />
            全选
        </label>
    </div>
    <div class="fr">
        需要支付：<span></span>
        <button class="sett">结算</button>
    </div>
</div>
<!--结算-->
<!--删除-->
<div class="bottom fixed" style="display: none;">
    <div class="fr">
        <button class="delete">删除</button>
    </div>
</div>
<!--删除-->
<!--弹框-->
<div class="text1 fixed">
    <form>
        <input type="number"/>
        <input type="button"  value="确定"/>
    </form>
</div>
<!--弹框-->
<!--弹框2-->
<div class="alert fixed"></div>
<!--弹框2-->
<script src="{{ asset('cart/js/web.js') }}"></script>
<script src="{{ asset('cart/js/zepto.js') }}"></script>
<script src="{{ asset('cart/js/index.js') }}"></script>
</body>
</html>
