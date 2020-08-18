<div class="btn-group myacc-menu" role="group">
  	<a href="/my-account" class="btn btn-outline btn-sm {{ Request::is('my-account','my-account/order/*') ? 'active' : null }}">所有订单</a>
  	<a href="/my-account/tracking" class="btn btn-outline btn-sm {{ Request::is('my-account/tracking') ? 'active' : null }}">跟踪订单</a>
  	<a href="/my-account/profile" class="btn btn-outline btn-sm {{ Request::is('my-account/profile') ? 'active' : null }}">我的个人资料</a>
  	<a href="javascript:void(0)" class="btn btn-outline btn-sm" onclick="logout()">登出</a>
</div>