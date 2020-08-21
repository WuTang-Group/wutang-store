<div class="btn-group myacc-menu" role="group">
  	<a href="/my-account" class="btn btn-outline btn-sm {{ Request::is('my-account','my-account/order/*') ? 'active' : null }}">@lang('general.my-account.all-orders')</a>
  	<a href="/my-account/tracking" class="btn btn-outline btn-sm {{ Request::is('my-account/tracking') ? 'active' : null }}">@lang('general.my-account.tracking')</a>
  	<a href="/my-account/profile" class="btn btn-outline btn-sm {{ Request::is('my-account/profile') ? 'active' : null }}">@lang('general.my-account.my-profile')</a>
  	<a href="javascript:void(0)" class="btn btn-outline btn-sm" onclick="logout()">@lang('general.my-account.logout')</a>
</div>