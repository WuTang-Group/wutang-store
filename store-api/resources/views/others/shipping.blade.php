@extends('layouts.app')

@section('content')
<div class="section-nav darken-layout">
  <div class="container">
    <ul>
      <!-- <li><a href="#tracking" class="anchor">追踪订单</a></li> -->
      <li><a href="#pay-for-shipping" class="anchor">支付配送</a></li>
      <li><a href="#inspection" class="anchor">商品验货与签收</a></li>
      <li><a href="#after-sales" class="anchor">售后服务</a></li>
    </ul>
  </div>
</div>
<div class="dark-layout">
	<div class="section-t-space position-relative">
      <div class="container">
        <div class="row customer-care-wrapper justify-content-center">
          <!-- <div class="col-12 col-md-7 col-lg-6 col-xl-5" id="tracking">
            <h4 class="text-center text-white mb-3 lh-13">
              要跟踪您的订单，请在下面的框中输入<br>
              您的订单ID，然后按“跟踪”按钮
            </h4>
            <form class="needs-validation" method="post" novalidate>
              <div class="form-group">
                <input type="text" class="form-control border-white bg-trans" placeholder="顺丰运单号 *" id="tracking" required>
                <div class="invalid-feedback">
                  You must agree before submitting.
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-white">追踪</button>
              </div>
            </form>
          </div> -->
          <div class="col-12 col-md-9 col-lg-8" id="pay-for-shipping">
            <h2 class="text-white title">支付配送</h2>
            <div class="accordion">
              <h2 class="text-white title index mb-0">
                <span>01</span>货到付款
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>您的货款将在订单送达后由送货员直接收取，请您务必确认签字。</p>
                </div>
              </div>
              <h2 class="text-white title index mb-0">
                <span>02</span>在线支付
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>如您已拥有支付宝账号，银联卡或微信支付账号，您也可以选择使用支付宝/银联在线支付/微信支付货款。请在完成订单后，选择进入支付宝/银联在线支付/微信支付页面进行确认支付，不进行此步操作或支付信息失败，您的订单将无法发出，请重新确认支付。</p>
                  
                  <p>下单后，您必须在二十四（24）小时内将钱款转入我们的银行账户，否则订单会自动取消。 如果支付宝/银联在线支付/微信支付拒绝授权您向我们进行支付，那么不会处理您的订单。通过支付宝/银联在线支付/微信支付进行支付时，您需要服从其条款和政策。</p>
                </div>
              </div>
              <h2 class="text-white title index mb-0">
                <span>03</span>配送方式
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们将根据您选择的支付方式与收货地址自动选择最优惠、最快的配送方式。 订单购物金额达到包邮条件时，可以享受免费的配送服务。</p>
                </div>
              </div>
              <h2 class="text-white title index mb-0">
                <span>04</span>配送时间
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>温馨提醒</p>
                  <ol class="ol-list-style pl-0">
                    <li>出库时间：商品实际有库存的情况下，下午3点前成功付款的在线支付订单，当天可以出库。其他订单48小时内出库。如遇法定节假日，系统故障，订单异常，仓库年度盘点以及官网重大活动期间，出库时间可能会有延误现象，请您谅解!</li>
                    <li>通常情况下：在线支付比货到付款收货更快</li>
                    <li>县级城市，乡镇村配送时效可能会顺延1-2天</li>
                    <li>因天气、交通等各类不可抗力之因素影响，您的订单可能会有延误现象，敬请谅解!</li>
                    <li>我们承诺尽最大努力使商品在预计配送时效内送达，但无法确保每个订单都能顺利送达。如您的订单未在预计配送时效内到达，可致电客服，由客服人员联系配送公司为您查询跟进。</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="inspection">
            <h2 class="text-white title">商品验货与签收</h2>
            <div class="accordion">
              <h2 class="text-white title index mb-0">
                <span>01</span>商品验货与签收
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>为保障您的权益，请您在收货时注意以下环节：</p>
                  <ol class="ol-list-style pl-0">
                    <li>签收时与配送人员当面核对：商品及配件、应付金额（货到付款）、商品数量及发货清单、赠品（如有）等。</li>
                    <li>如存在包装破损、商品错误、商品短缺、商品存在质量问题等影响签收的因素，您可以拒收包裹，相关的赠品，配件或捆绑商品应一起当场拒收。</li>
                    <li>为了保护您的权益，建议您尽量不要委托他人代为签收；如由他人代为签收商品而没有在配送人员在场的情况下验货，则视为您所订购商品的包装无任何问题；</li>
                    <li>为了方便日后可能出现的退货流程，请保留商品外包装箱14天。</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="after-sales">
            <h2 class="text-white title">售后服务</h2>
            <div class="accordion">
              <h2 class="text-white title index mb-0">
                <span>01</span>退货规定
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>如需退货，请您参考以下流程并确认您符合本页面所有适用的条件：</p>
                  
                  <p>第一步：<br>
                  请联系在线客服或者拨打服务热线</p>
                  
                  <p>第二步：<br>
                  请配合客服提供请配合客服提供相关信息核实，填写下方内容</p>
                  
                  <p>第三步：<br>
                  请将需退货产品连同产品配送清单、售后服务保障卡一并寄回</p>
                  
                  <p>第四步：<br>
                  退货处理，请耐心等待</p>
                  <ol class="ol-list-style pl-0">
                    <li>如您需退货，请知晓：我们只受理在本网站销售的产品，同时所有退回产品必须跟产品配送清单保持一致并保持产品完好；即退货时须退回产品本身，产品配件及附带的防伪标识、商标吊牌、合格证、使用说明书等如有，必须与产品一起退回。退货时必须将退货产品及对应赠品同时退回。</li>
                    <li>
                      您确认并同意：您在本网站上购买的任何产品，除非发生本第2条中所列原因，一经拆封或产品全部包装出现任何破损，即成为按照商品性质（包括人身安全、生命健康原因等）不宜退货的产品，不可按照本第3条的情形退货。如您在收到产品后发现以下任一情形，可以在签收之日起的7天内申请退货，我们可以在核实情况并收到退货产品后退款，同时承担因此产生的运费：
                      <ol class="ol-list-style">
                        <li>收到的产品临近有效期终结之日或过期，且塑封未拆封的；</li>
                        <li>收到的产品质地发生变化；</li>
                        <li>收到产品时发现产品破损、漏液；</li>
                        <li>收到产品与在官网上订购的产品不符。</li>
                      </ol>
                    </li> 
                    <li>
                      如您非因本第2条中所列原因想要退货，可以在签收之日起的7天内申请退货，我们可以在核实情况并收到退货产品后退款，您需自行承担因此产生的运费，退货产品必须同时满足以下所有条件：
                      <ol class="ol-list-style">
                        <li>产品包括赠品未拆封（包括塑封），不影响二次销售；</li>
                        <li>退货的产品必须与包裹内的产品配送清单保持一致。</li>
                      </ol>
                    </li>  
                    <li>
                      如您在初次使用某一产品后出现过敏等非因产品自身质量问题造成的不适情况，可以在签收之日起的30天内并在满足下列所有条件时申请退货，我们可以在核实情况并确认收到退货产品后退款，并同时承担因此产生的运费：
                      <ol class="ol-list-style">
                        <li>产品使用量小于30%；</li>
                        <li>提供由市级以上医院出具的就消费者使用本化妆品所产生的过敏等症状的证明（包含病历、处方及就医发票，病历中须包括消费者个人信息如名称、性别等，及产品全称）；</li>
                        <li>诊断报告出具日期在顾客签收产品之后。</li>
                        <li>如果您通过退货的方式退回产品的，您承认并同意放弃所有可以放弃的与退货产品相关的民事权利，并承诺不行使该等权利；您同时承认并同意承担因违反本承诺而产生的一切费用，包括但不限于诉讼费、仲裁费、律师费、差旅费、行政处罚等。</li>
                      </ol>
                    </li>
                    <li>如购买该商品曾被积分，退货后，该笔金额产生的积分将被从积分数中扣除。</li>    
                    <li>退货申请通过客服审核后请您于3日内将需要退货的商品随产品配送清单、售后服务保障卡，按客服说明的地址退回。如使用不可查询的递送手段退货，发生商品遗失、破损、误送等情况，本公司不承担责任，敬请谅解。</li>              
                  </ol>
                  <p>注：请您务必在运单的备注栏上注明订单号，谢谢配合。</p>
                  <p>特别提醒：若您选择国内挂号的邮寄方式，请在邮局办理完邮寄包裹后，保留您的“国内普通包裹详情单” 以作备查之用。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection