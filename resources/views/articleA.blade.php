<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shifu">

    <title>{{ config('app.name') }}</title>

    <link rel="shortcut icon" href="/assets/dist/img/icon.png">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
        @if (Auth::guest())
            <a href="{{ url('auth/facebook') }}" class="btn btn-primary">
                <strong>FB 登入</strong>
            </a> 
        @else
            <a class="btn btn-primary" href="{{ url('/logout') }}">登出</a>
        @endif
      </div>
    </nav>

    <div class="container">
    <h1>How Robot Change the World</h1>


<p>在過去的十年，隨著機器人革命的擴展，公司開始使用智能化的機器人。自2010年以來，全球工業機器人增長了一倍以上，並且在機器學習方面的創新預示著未來五年中，機器人將在服務業中更快得被應用。</p>

<p>本報告為機器人對現行全球製造業工作的影響力，以及其潛在對於更大市場服務的能力。為了評估正在進行的機器人革命的意義，本篇報告結合牛津的經濟學家、計量經濟學家以及模組建構人員、主題專家的綜合專業知識，一同對於此議題進行探討。
機器人的興起已經對全世界的工業就業產生了深遠的影響：如今，大約每三台新的製造機器人中就有一個正在中國安裝。本報告的計量經濟學模型發現，平均而言，每個新安裝的機器人平均可減少1.6名製造工人。到2030年，由於機器人技術的發展，全世界將有多達2000萬個製造工作崗位被取代。
</p>


<h3>低薪地區的風險較高</h3>

<p>事實上機器人取代人類的情況不會在世界範圍內或在國家內部平均分配。 研究表明，在全球主要經濟體的低收入地區，更容易感到機器人化所帶來的負面影響，平均而言，與高收入地區相比，新型機器人在低收入地區所取代的工作崗位幾乎是其兩倍。在世界範圍內日益關注經濟不平等和政治兩極分化的加劇之際，這一發現具有重要的社會和政治意義。考慮到這些風險，政府需要一個預警系統來幫助他們減輕就業自動化的風險。 本研究當中即開發了一個機器人脆弱性指數，該指數對七個已開發經濟體以他們各自的勞動力對安裝工業機器人的脆弱程度進行排名。</p>

<p>在許多情況下，我們的研究發現，最脆弱的地區在一定程度上與較富裕地區有所不同，例如英國的坎布里亞郡，法國的弗朗什-孔戴和美國俄勒岡州東部的高沙漠地區。這些農村地區通常包括具有強大製造業傳統的城鎮，在地區經濟中發揮著驚人的作用。 相反，在知識密集型城市周圍的地區，例如法國的圖盧茲和格勒諾布爾，或德國的慕尼黑和斯圖加特，對機器人興起的脆弱性通常要低得多。 在倫敦，巴黎，首爾和東京等首都也是如此。</p>

<img class="img-fluid rounded-left mb-3" src="img/BB.png" alt="">

<h3>五兆美元的機器人技術</h3>

<p> 儘管地區的影響各不相同，人們對於機器人可能永久性取代工作的擔憂似乎有些誇張。我們的研究表明，當前的機器人化浪潮趨向於提高生產率和經濟增長，即便會取代部分工作帶也以相當的速度創造新的就業機會。研究統計，製造業中每個工人的機器人庫存量增加1％，將導致整個勞動力隊伍中每個工人的產出增加0.1％。使用牛津經濟學的全球經濟模型（GEM），我們計算了工業機器人安裝率的變化如何影響全球經濟。總而言之，研究發現採用機器人會對短期和中期的經濟增長具有積極的影響。例如，到2030年將機器人安裝量提高到比原本預測高出30％的比例時，將令該年全球GDP估計增長5.3％。這相當於到2030年每年為全球經濟增加4.9兆美元，相當於一個比德國規模還大的經濟體。</p>

<h3>機器人服務的未來</h3>

<p>機器人目前在以下的特定領域穩定發展：
五個主要的領域為：醫療保健、零售、飯店、運輸、（建築與農業）。 在本研究中，我們僅將機器人定義為具有實體化的機器，不包括軟體式的類型，所謂軟體型態的機器人係指可以說、聽、讀、進行交易，使流程自動化的機器人（RPA）。 
在服務業中可預期使用機器人的關鍵因素為這些機器人所運行的環境，尤其是該工作是否在某種程度上包含重複性， 諸如倉儲工作之類型。而重複性、結構化程度較低的工作類型很可能會在未來幾十年內仍由人類執行。至於需要同理心、創造力和社會智慧的服務行業，機器很難替代人類。 例如，物理治療師，狗訓練師和社會工作者即可能可以繼續保持工作，不需要擔心被機器人取代。</p>

<h3>政策上的影響</h3>

<p>隨著採用機器人技術的步伐加快，政府將面臨兩難的情況：儘管機器人推動了經濟增長，但加劇了收入不平等。自動化將繼續推動世界許多已開發經濟體的兩極化，使整體人民的收益和成本嚴重分配不均。隨著自動化對工作的影響從製造業擴展到服務業，這種趨勢將加劇，此外如何處理被AI所取代的工作者將成為主要的問題。</p>

<p>本研究對超過35,000名美國人的職涯變化進行分析，過去的20年有一半以上離開生產型工作的工人均進入以下三個職業類別：運輸、（建築和維護）以及辦公室之行政工作。不幸的是，研究分析發現，在接下來的十年中，前述的這三個職業領域恰好為最容易受到機器人、AI所影響。然而，即便有此發現也不應導致政府和其他利益關係人拒絕機器人技術的採用。相反的，政策面上應該是通過幫助弱勢工人準備並適應機器化社會將帶來的劇變，以及更均勻地分配前述機器人可以帶來的利益。政策制定者、商業領袖、科技公司、教育工作者以及工作者都應一同努力。本研究將針對每個角色設定行動框架，以應對機器人化將帶來的挑戰和機遇。</p>

<p>機器人的興起前所未見,準備並應對自動化社會將是下一個十年的決定性挑戰。</p>
<p>文章出處：http://resources.oxfordeconomics.com/how-robots-change-the-world</p>     

    </div>
    <!-- Footer -->
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <p class="text-muted small mb-4 mb-lg-0">&copy; MCSL801 Shifu 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="/privacy">
                  <i class="fa fa-shield fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="https://www.facebook.com/BlockFayjai/" target="_blank">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
