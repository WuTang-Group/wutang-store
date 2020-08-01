@extends('layouts.app')

@section('content')
<div class="section-nav darken-layout">
  <div class="container">
    <ul>
      <li><a href="#official-website-service" class="anchor">销售条款</a></li>
      <li><a href="#pay-for-shipping" class="anchor">支付配送</a></li>
      <li><a href="#inspection" class="anchor">商品验货与签收</a></li>
      <li><a href="#after-sales-service" class="anchor">售后服务</a></li>
      <li><a href="#refund-method" class="anchor">退款方法</a></li>
      <li><a href="#final-clause" class="anchor">最后条款</a></li>
    </ul>
  </div>
</div>
<div class="dark-layout">
	<div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row terms-and-conditions-wrapper justify-content-center">
          <div class="col-12 col-md-9 col-lg-8" id="official-website-service">
            <h2 class="text-white title">销售条款</h2>
            <div class="accordion">
              <h2 class="text-white title index mb-0">
                <span>01</span>采购资格
              </h2>
              <div class="accordion-content show">
                  <p>只有符合下列全部条件的人方可通过客服中心或网站订购产品：（a）达到法定年龄（18岁）的成年人，（b）具有签订合同的法定行为能力，及（c）居住在中华人民共和国（不包括中国香港和中国澳门特别行政区）。如果您未达到法定成年年龄，或因其他原因不能合法签订合同，那么您必须由父母或监护人代表您下单并同意本销售条款。 </p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>02</span>商品信息
              </h2>
              <div class="accordion-content collapsed">
                  <p>我们将尽最大努力保证您所购商品与网站上公布的产品信息一致，保证您浏览产品信息的准确性。但由于网站上的信息量极其庞大，且诸如互联网技术等一些客观因素的存在，本网站上显示的信息可能会有偏差或滞后，望您能否知悉并理解。 网站上的产品价格、数量等信息随时可能更改，我们将不作特别通知。如我们发现网站上显示的产品及订单有明显错误的情形，有权单方面拒绝订单。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>03</span>产品供应水平、数量
              </h2>
              <div class="accordion-content collapsed">
                  <p>通过客服中心或网站发出的所有订单受供应水平制约，并需得到我们接受。如果我们经过努力仍无法提供产品，或我们出于合法理由相信一份订单违反本销售条款，我们可以拒绝订单。 我们保留更改网站或客服中心产品分类的权利，可不定时限制一位客户在一次购买期内订购我们产品的数量。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>04</span>订单和合同成立
              </h2>
              <div class="accordion-content collapsed">
                  <p>如果您订购本网站上的产品，请在选择该产品后放入您的“购物车”。此后您可以选择继续购物并添加到购物车（受供应水平和数量限制），或通过结算下单。您还可以从购物车里删除一件或多件已选择的产品。</p>
                  
                  <p>收到您的订单后，我们可向您发送一电子邮件或短信确认我们已收到您的订单，其中载明订单的细节，但该确认不代表我们接受您的订单。 只有当我们向您发出发货确认的电子邮件或短信通知您我们已将您订购的商品发出时，才构成我们对您的订单的接受和承诺，我们和您之间的订购合同才成立。如果您在一份订单里订购了多种商品，而我们只向您发出了其中部分商品的发货确认电子邮件或短信，那么我们和您之间的订购合同仅就该部分商品成立。通过网站订购产品时，您需要提供并同意提供适用的个人信息，如收货地址，寄付发票地址和付款说明等。您需保证向我们提供的所有个人信息真实准确。</p>
                  
                  <p>我们或第三方供应商可以在此时收集额外信息以处理您的订单和付款。有关我们可能如何使用或保留您的个人信息及使用和保留的时限，请查阅我们的隐私条款了解更多详情。</p>
                  
                  <p>无论本文是否有相反的规定，我们保留在任何时候出于合法理由拒绝、取消和终止订单的权利。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>05</span>价格、税费和运费 
              </h2>
              <div class="accordion-content collapsed">
                  <p>除非另行声明，否则网站产品页显示的所有价格或客服中心的所有报价均以人民币（CNY）为单位，包括增值税，但不包含运费和其他税费。</p>
                  
                  <p>我们保留在任何时候修改价格和运费的权利，无需事先通知，更改后的价格适用于通过网站提交订单时显示的价格，但价格显示错误的情形除外。 产品页不说明运费，但在您支付订单前会添加到订单金额中。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>06</span>客户审核和确认订单
              </h2>
              <div class="accordion-content collapsed">
                  <p>在通过网站提交订单前，您应仔细检查一切细节，包括但不限于每笔交易的具体信息，这些信息会通过网站的订单汇总提供给您。 您在彻底核对订单之后，还有机会查阅网站发布的销售条款，您提交的订单需要接受这些销售条款的约束。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>07</span>支付
              </h2>
              <div class="accordion-content collapsed">
                  <p>您的银行卡寄付账单地址必须位于中华人民共和国境内（为本条款之目的，不包括中国香港、中国澳门特别行政区或中国台湾）。我们不接受寄付账单地址在中国大陆境外的国际银行卡。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>08</span>订单确认书
              </h2>
              <div class="accordion-content collapsed">
                  <p>您在网站下单后，会通过电子邮件或短信收到一份订单确认书，其中包含您订单的具体信息，以及所选支付方式。该订单确认书包括分配的订单编号。该订单确认书不表示我们已接受您的订单。</p>
                  
                  <p>您可以在支付前修改您的订单，致电客服中心修改订单或在配送前取消订单，但配送后不得取消。这样做不影响您在销售条款中的其他权利。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>09</span>发票
              </h2>
              <div class="accordion-content collapsed">
                  <p>在网站订购产品时选择索要发票，并确保您已填写相关发票信息，则您将会在签收产品后收到发票。若发票寄送地址与收货地址不相同，您的发票将会被寄送至发票寄送地址。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="pay-for-shipping">
            <h2 class="text-white title">支付配送</h2>
            <div class="accordion">
              <h2 class="text-white title index collapsed mb-0">
                <span>01</span>货到付款
              </h2>
              <div class="accordion-content collapsed">
                  <p>您的货款将在订单送达后由送货员直接收取，请您务必确认签字。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>02</span>在线支付
              </h2>
              <div class="accordion-content collapsed">
                  <p>如您已拥有支付宝账号，银联卡或微信支付账号，您也可以选择使用支付宝/银联在线支付/微信支付货款。请在完成订单后，选择进入支付宝/银联在线支付/微信支付页面进行确认支付，不进行此步操作或支付信息失败，您的订单将无法发出，请重新确认支付。</p>
                  
                  <p>下单后，您必须在二十四（24）小时内将钱款转入我们的银行账户，否则订单会自动取消。 如果支付宝/银联在线支付/微信支付拒绝授权您向我们进行支付，那么不会处理您的订单。通过支付宝/银联在线支付/微信支付进行支付时，您需要服从其条款和政策。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>03</span>配送方式
              </h2>
              <div class="accordion-content collapsed">
                  <p>我们将根据您选择的支付方式与收货地址自动选择最优惠、最快的配送方式。 订单购物金额达到包邮条件时，可以享受免费的配送服务。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>04</span>配送时间
              </h2>
              <div class="accordion-content collapsed">
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
          <div class="col-12 col-md-9 col-lg-8" id="inspection">
            <h2 class="text-white title">商品验货与签收</h2>
            <div class="accordion">
              <h2 class="text-white title index collapsed mb-0">
                <span>01</span>商品验货与签收
              </h2>
              <div class="accordion-content collapsed">
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
          <div class="col-12 col-md-9 col-lg-8" id="after-sales-service">
            <h2 class="text-white title">售后服务</h2>
            <div class="accordion">
              <h2 class="text-white title index collapsed mb-0">
                <span>01</span>退货规定
              </h2>
              <div class="accordion-content collapsed">
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
          <div class="col-12 col-md-9 col-lg-8" id="refund-method">
            <h2 class="text-white title">退款方法</h2>
            <div class="accordion">
              <h2 class="text-white title index collapsed mb-0">
                <span>01</span>退款方法
              </h2>
              <div class="accordion-content collapsed">
                  <p>退货收到并确认无误后，如需退款，本公司将根据您的支付方式为您办理相关退
                  <ul class="ul-list-style">
                    <li>使用在线支付，款项将原路返回，退回您的原支付账号。</li>
                    <li>
                      使用货到付款，退款时必须同时提供以下任一项信息：
                      <ol class="ol-list-style pl-0">
                        <li>银行卡支付订单: 需要您提供银行卡支付流水号及付款银行卡号等信息，款项退回对应银行账户；</li>
                        <li>现金支付订单: 需要您提供官网注册信息、收货信息，经客服确认两者属实后提供收款银行卡号等相关信息，客服确认后款项退回您提供的银行账户。</li>
                      </ol>
                    </li>
                  </ul>
                  <p>如您未能提供以上相应信息或者信息不符，我们有权拒绝退款申请，感谢您的配合。</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="final-clause">
            <h2 class="text-white title">最后条款</h2>
            <div class="accordion">
              <h2 class="text-white title index collapsed mb-0">
                <span>01</span>信息和投诉
              </h2>
              <div class="accordion-content collapsed">
                  <p>如果您有任何要求或投诉，请按网站上的电话和电子邮件地址联系客服中心。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>02</span>全部协议
              </h2>
              <div class="accordion-content collapsed">
                  <p>本销售条款，包括本文包含的政策，通过本网站采购产品的全部协议，本销售条款替代此前任何其他销售条款。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>03</span>效力瑕疵
              </h2>
              <div class="accordion-content collapsed">
                  <p>如果本销售条款的任何一款规定被认为部分无效或不可执行，这类规定只应在此范围内无效或不可执行，而本销售条款其他规定的有效性和可执行性不受影响。</p>
              </div>
              <h2 class="text-white title index collapsed mb-0">
                <span>04</span>管辖法律
              </h2>
              <div class="accordion-content collapsed">
                  <p>本销售条款受中华人民共和国法律管辖并据其解释。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
</div>
@include('partials.official-services')
@endsection