<footer class="footer">
    <section id="contact-us" class="dark-layout section-b-space">
        <div class="container">
            <section class="small-section">
                <div class="mb-4">
                	<h2 class="text-white title">@lang('general.contact-us')</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="contact">
                            <label class="d-block tx-dark-gray">+1 (378) 400-1234</label>
                            <label class="d-block"><a href="mailto:contact@queenspades.com" class="tx-dark-gray">contact@queenspades.com</a></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="tx-dark-gray mb-0">@lang('general.subscribe')</label>
                        <div class="subscribe">
                            <form action="" class="form-inline subscribe-form needs-validation" method="post" name="subscribe-form">
                                <div class="form-group mb-0 mr-sm-3">
                                    <input type="text" class="form-control" name="EMAIL" id="mce-EMAIL"
                                        placeholder="*@lang('general.email')" required="required">
                                </div>
                                <button type="submit" class="btn btn-outline" id="mc-submit">@lang('general.next')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="darken-layout section-b-space">
        <div class="container">
            <div class="row footer-theme">
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>@lang('general.about-us')</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="#">系列</a></li>
                                <li><a href="#">护肤</a></li>
                                <li><a href="/the-house">The House</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>@lang('general.support')</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="/customer-service">@lang('general.customer-service')</a></li>
                                <li><a href="/terms-and-conditions#pay-for-shipping">@lang('general.secure-payment')</a></li>
                                <li><a href="/shipping">@lang('general.shipping-and-return')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>@lang('general.company-brand')</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="/the-brand">@lang('general.brand-introduction')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="sub-title">
                        <div class="footer-title">
                            <h4>@lang('general.legal')</h4>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="/privacy-policy">@lang('general.privacy-policy')</a></li>
                                <li><a href="/terms-and-conditions">@lang('general.terms-and-conditions')</a></li>
                                <li><a href="/privacy-policy#cookie">@lang('general.cookie-policy')</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="darken-layout sub-footer section-b-space pt-0">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12 col-md-4 footer-social d-flex justify-content-md-end align-items-center">
                    <div class="mr-3">
                        <a href="#"><img src="assets/images/icon/wechat-w.png" alt=""></a>
                    </div>
                    <div>
                       	<a href="#"><img src="assets/images/icon/weibo-w.png" alt=""></a>
                    </div>
                </div> -->
                <div class="col-12 col-md-4 footer-language-selector align-self-center">
                	<div class="language-selector-wrapper">
                    	<select class="text-uppercase">
                            <option value="cn" {{ !empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'cn' ? 'selected':null }}>China - CN</option>
                            <option value="en" {{ !empty($_COOKIE['locale']) && $_COOKIE['locale'] == 'en' ? 'selected':null }}>United States - EN</option>
                    	</select>
                	</div>
                </div>
                <div class="col-12 col-md-4 footer-logo-copyright">
                    <div class="footer-logo">
                        <a href="/"><img src="{{ URL::asset('assets/images/queen-logo-footer.png') }}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="copyright-text">
						<div class="footer-contant">2020 QUEEN SPADES - @lang('general.copyrights')</div> 
					</div>
                    <div class="company-reg-number tx-dark-gray">
						<div class="footer-contant">ICP备案号：沪ICP备12345678号</div> 
					</div>
                </div>
            </div>
        </div>
    </section>
</footer>