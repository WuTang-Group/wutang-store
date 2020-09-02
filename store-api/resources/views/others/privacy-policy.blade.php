@extends('layouts.app')

@section('content')
<div class="section-nav dark-layout">
  <div class="container">
    <ul>
      <li><a href="#privacy-policy" class="anchor">隐私政策</a></li>
      <li><a href="#website" class="anchor">网站信息</a></li>
      <li><a href="#cookie" class="anchor">Cookie政策</a></li>
    </ul>
  </div>
</div>
<div class="dark-layout">
  <div class="section-t-space section-b-space position-relative">
      <div class="container">
        <div class="row privacy-policy-wrapper justify-content-center">
          <div class="col-12 col-md-9 col-lg-8" id="privacy-policy">
            <h2 class="text-white title">隐私政策</h2>
            <p>
              欢迎登陆本网站(“网站”)。<br>
              请仔细阅读以下使用条款，该条款适用于本网站之使用事宜。<br>
              一旦您访问本网站，即视为您已毫无保留地接受了本使用条款。
            </p>
            <div class="accordion">
              <h2 class="text-white title mb-0">
                访问网站
              </h2>
              <div class="accordion-content show">
                <div>
                  <p>访问并使用本网站，您必须已成年（已满18周岁）并拥有可用的且有效的电子邮件地址。如果您尚未成年，则必须提前得到父母的许可。</p>
                  <p>在访问本网站之前，您需要在表格中填写必填字段（以“*”作标记的字段）。任何不准确、不完整的注册将不会被接受。</p>
                  <p>您同意您输入的并且储存在我们信息系统中的数据是准确的并且可作为您身份的证明。如果此类数据有任何变更，请通知我们。</p>
                  <p>访问本网站和/或本网站某些板块可能要求输入个人登录密码。该情况下，请您采取措施以确保您密码的安全。当然您也可以随时更改登录密码。但是，为了防止盗用密码，我们会设定尝试访问本网站和/或本网站某些板块的次数限制。您一旦意识到密码被盗用，请通知我们。</p>
                  <p>违反本使用条款的规则，我们会保留暂停您访问本网站的权利并及时通知您。</p>
                  <p>虽然我们尽力保持本网站可以随时进行访问，但我们不能保证您在任何情况下都可以访问本网站。事实上，尤其是由于维护、升级或其他超出我们控制的原因，对本网站的访问可能会被中断。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                知识产权
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>本网站及本网站各组成部分（例如商标、图像、文本、视频等）都受到知识产权保护。本网站的开发体现了我们团队的一项重要投资以及共同工作成果。因此，除本使用条款另有明确规定，您对本网站的访问严格限定为个人及私人使用目的，除此之外，您未被授予任何权利使用本网站。我们不允许基于其他任何目的（包括但不限于商业目的）在任何媒体上，使用、复制或展示本网站(全部或部分) 或本网站的组成部分。</p>
                  <p>在特殊情况下，我们可能会授权您在特定媒体上复制和/或展示全部或部分本网站内容。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                网站使用
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>首先，请注意使用本网站意味着您具备使用互联网必要的硬件和软件。</p>
                  <p>此外，请注意互联网无法确保数据传输的安全性、可用性与完整性。
                  对于一些我们无法控制硬件和软件操作或者由于非授权使用而造成通信线路的错误、
                  遗漏、缺失、延迟、故障（包括但不限于由病毒引起的）或者您在本网站发布的内容
                  出现任何损失，我们不承担任何责任。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                用户的一般义务
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们秉持宽容的价值观并尊重他人的权利。因此本网站不能被用于传播种族主义、暴力、排外、恶毒、淫秽或非法信息。</p>
                  <p>使用本网站，您同意不得：</p>
                  <ul class="ul-list-style">
                    <li>散布侮辱、诽谤、非授权的、恶意的、侵犯个人隐私或肖像权，煽动暴力、种族或民族仇恨的内容；</li>
                    <li>使用本网站进行政治宣传或宗教宣传；</li>
                    <li>发布促销或广告内容；</li>
                    <li>讨论与网站论坛无关的内容，包括将其用作交友服务；</li>
                    <li>传播可能侵害未成年人的信息或内容；</li>
                    <li>进行非法活动，包括但不限于侵犯软件、商标、照片、图像、文本、视频等权利的行为。</li>
                  </ul>
                  <br>
                  <p>我们想强调的是，对于您发布在本网站的任何内容，您必须拥有全部权利和/或得到许可。因此，我们建议您不要发布任何（尤其是照片）展示近代建筑物、广告创作、含有商标的服装设计（首字母、标志、品牌的颜色代码等）的内容。最后，请注意本网站不接受展示未成年人的内容（包括但不限于照片和视频）。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed border-bottom-0 mt-5 mb-0 no-toggle">
                特定版块规定
              </h2>
              <p>本网站有不同的内容版块：<br>
              可下载内容、在线应用、用户内容、网站论坛等（“版块”）。</p>

              <h2 class="text-white title collapsed index mb-0">
                <span>01</span>可下载内容
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们授权您下载本板块的内容（“可下载内容”）。<br>
                  下载或使用这些可下载内容，视为您同意遵守本使用条款。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed index mb-0">
                <span>02</span>在线应用
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们授权您使用本网站的软件应用（“在线应用”）。我们授权您仅基于个人和私人使用的目的，免费地和在版权保护的法律术语上，一种非排他的、不可转让的权利使用在线应用。您同意不修改、改编、复制、修正或传播在线应用，也不得在这些在线应用和/或任何相关媒介上的标记商标或所有权。</p>
                  <p>您使用在线应用所创建或制作的任何内容将被认为是用户内容（见第三部分“用户内容”）。</p>
                  <p>如果我们为您提供的工具/应用能够编辑图片（尤其是针对美容产品的虚拟测试），您确认并同意此工具/应用仅可用于个人使用目的，并遵循其真实用途。禁止使用此工具/应用对第三方做出不尊重的、有害的或/和侵犯其权利的行为。因此，未经第三方事先明确同意，您不得修改和/或展示第三方的图像。最后，未经我们事先明确同意，您不得修改和/或展示（无论是否通过工具/应用编辑）此工具/应用提供的全部或部分内容（尤其是展示模特/模型的内容）。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed index mb-0">
                <span>03</span>用户内容
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>本网站为用户提供专门空间上传用户内容，例如文本、照片、视频等（“用户内容”）。</p>
                  <p>通过在本网站上提交用户内容，自动视为您授权我们在全球范围内，在所有媒介上免费的、永久的、不可撤消的、非排他性的（包括但不限于本网站）许可我们使用、复制、修改、改编、传播、翻译、创作衍生作品、合并入其他作品并以其他方式利用此类用户内容（全部或部分）。</p>
                  <p>您明确授权我们在本网站以及第三方网站，特别是所谓的“社交网站”上使用用户内容。</p>
                  <p>您认可并同意社交网站的使用应完全符合该网站条款和条件。因此，您认可并同意我们以符合该第三方网站的条款和条件的要求使用用户内容。我们不承担由于我们或者第三方以遵循第三方社交网站的条款和条件而造成的，包括但不限于授权范围、权利期限和用户内容删除的任何责任。</p>
                  <p>您应当对任何第三方根据社交网站的条款和条件提起的针对内容使用的投诉承担全部责任。</p>
                  <p>尽管有以上规定，您需陈述并保证您对于该等用户内容在社交网站上的使用已经获得了所有相关权利方的授权许可。</p>
                  <p>最后，您同意并认可（并确认您已通知并获得了所有相关权利方的同意）这些内容可能通过第三方网络进行“病毒”式传播（口头传播），我们对于此类使用不承担任何责任。</p>
                  <p>您发布在本网站的用户内容完全是您的选择，也由您自己承担责任。但我们想请您注意用户内容不得违反现行法律或公认的道德标准，且不得侵犯他人权利。因此，对于一些明显不合法和/或违背公认的道德标准和/或侵犯他人权利的用户内容，我们保留随时撤消这些用户内容的权利。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed index mb-0">
                <span>04</span>网站论坛
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们在本网站为您提供了一个允许您与其他用户交流的版块（“网站论坛”）。</p>
                  <p>网站论坛的使用必须遵循现行法律、公认的道德标准、本网站载明的原则并符合他人权利。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="website">
            <h2 class="text-white title collapsed">网站信息</h2>
            <div class="accordion">
              <h2 class="text-white title collapsed mb-0">
                通用信息
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>我们尽力向您提供准确、即时的信息。尽管如此，通过互联网传输数据和信息没有绝对的
                  技术可靠性，因此，我们无法保证本网站所含全部数据的准确性。</p>
                  <p>此外，我们想强调的是，本网站上提供的信息可能存在不准确或遗漏，
                  尤其是在第三方侵入的情况下。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                产品和服务信息
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>除非另有说明，本网站为您展示的产品和服务不构成销售要约，
                  而仅是我们在全国销售的产品和提供的服务范围的概括介绍。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                建议与诊断工具
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>本网站提供的建议和/或诊断工具是便于用户获得专家级化妆品建议的简单模拟。
                  用户允许传送的指示性信息不能替代医疗诊断或临床会诊，也不可替代医学治疗。</p>
                  <p>因此，我们无法保证您对使用此类工具而得到的建议完全满意，
                  而且不对您的使用情况承担任何责任。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                超文本链接
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>在本网站运行的超文本链接可能使您导航至我们不能控制内容的第三方发布的网站。
                  因此，本网站包含的超文本链接在一定程度上仅是为了给您浏览互联网提供便利，</p>
                  <p>若您自愿选择访问此类第三方网站，将由您自行承担浏览该第三方网站带来的责任。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                Cookies
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>Cookies是当您在您的设备上（电脑，平板电脑或手机）访问互联网，包括我们的网站时，
                  储存的小型文本文档。 您可以参见我们的<a href="#cookie">《Cookies 政策》</a>了解更多内容，
                  包括如何设置或删除Cookies 。</p>
                </div>
              </div>
              <h2 class="text-white title collapsed mb-0">
                网站的修改和使用条款的修订
              </h2>
              <div class="accordion-content collapse">
                <div>
                  <p>包括但不限于为了遵循适用的新法律和/或规定、和/或为了改善本网站，
                  我们会修改本网站中包含的内容、信息及修订本使用条款。</p>
                  <p>任何的修改和/或修订会纳入本使用条款中。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 col-lg-8" id="cookie">
            <h2 class="text-white title collapsed">Cookies政策</h2>
            
          </div>
        </div>
      </div>
  </div>
</div>
@include('partials.official-services')
@endsection