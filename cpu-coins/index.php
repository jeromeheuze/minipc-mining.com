<?php
/**
 * Page data
 */
$page_name = "CPU Coins";
$page_url = "/cpu-coins/";

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <title><?=$page_name?> | MiniPC Mining</title>
    <meta name="description" content="Want to mine crypto with your NUC. MiniPC Mining will guide you to mine the latest CPU PoW.">
    <link rel="canonical" href="https://minipc-mining.com<?=$page_url?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$page_name?> | MiniPC Mining" />
    <meta property="og:description" content="Want to mine crypto with your NUC. MiniPC Mining will guide you to mine the latest CPU PoW." />
    <meta property="og:url" content="https://minipc-mining.com<?=$page_url?>" />
    <meta property="og:image" content="https://minipc-mining.com/assets/img/logo/og-image.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="722" />
    <meta property="og:image:alt" content="MiniPC Mining" />
    <meta property="og:site_name" content="MiniPC Mining" />
    <?php include "./../includes/favicon.php" ?>
    <?php include "./../includes/global_head.php" ?>
    <?php include "./../includes/gtag.php" ?>
</head>


<body class="sticky-header">
<?php include "./../includes/back-to-top.php" ?>
<!-- Start Header -->
<header class="header axil-header header-style-5">
    <?php include "./../includes/mainmenu.php" ?>
</header>
<!-- End Header -->

<main class="main-wrapper">
    <!-- Start Breadcrumb Area  -->
    <div class="axil-breadcrumb-area pb--50 pb_sm--30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="inner">
                        <ul class="axil-breadcrumb">
                            <li class="axil-breadcrumb-item"><a href="/">Home</a></li>
                            <li class="separator"></li>
                            <li class="axil-breadcrumb-item active" aria-current="page">Coins</li>
                        </ul>
                        <h1 class="title">CPU Coins</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="inner">
                        <div class="bradcrumb-thumb">
                            <img src="/assets/images/logo/NucMining_icon_250x250.png" width="200" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area  -->

    <!-- Start Wishlist Area  -->
    <div class="axil-wishlist-area axil-section-gap">
        <div class="container">
            <div class="product-table-heading">
                <h2 class="title">CPU Coins we mine</h2>
            </div>
            <div class="table-responsive">
                <table class="table axil-product-table axil-wishlist-table">
                    <thead>
                    <tr>
                        <th scope="col" class="product-thumbnail">Icon</th>
                        <th scope="col" class="product-title">Name</th>
                        <th scope="col" class="product-price">Symbol</th>
                        <th scope="col" class="product-stock-status">Algorithm</th>
                        <th scope="col" class="product-add-cart">Wallet</th>
                        <th scope="col" class="product-add-cart">MinerPoolStats</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/vrsc.png" width="50" alt="VerusCoin"></td>
                        <td class="product-title">VerusCoin</td>
                        <td class="product-price">VRSC</td>
                        <td class="product-price">VerusHash</td>
                        <td class="product-add-cart"><a href="https://verus.io/wallet" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/veruscoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/xmr.png" width="50" alt="Monero"></td>
                        <td class="product-title">Monero</td>
                        <td class="product-price">XMR</td>
                        <td class="product-price">RandomXmonero</td>
                        <td class="product-add-cart"><a href="https://www.getmonero.org/downloads/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/monero" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/cointaft.png" width="50" alt="CoinTAFT"></td>
                        <td class="product-title">CoinTAFT</td>
                        <td class="product-price">TAFT</td>
                        <td class="product-price">GhostRider</td>
                        <td class="product-add-cart"><a href="https://github.com/TaftProject/cointaft/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/cointaft" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/rtm.png" width="50" alt="Raptoreum"></td>
                        <td class="product-title">Raptoreum</td>
                        <td class="product-price">RTM</td>
                        <td class="product-price">GhostRider</td>
                        <td class="product-add-cart"><a href="https://raptoreum.com/sample-page/downloads/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/raptoreum" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/vhh.png" width="50" alt="Volkshash"></td>
                        <td class="product-title">Volkshash</td>
                        <td class="product-price">VHH</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/VolkshashDEV/volkshashcore/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/volkshash" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/onx.png" width="50" alt="Onyx"></td>
                        <td class="product-title">Onyx</td>
                        <td class="product-price">ONX</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/ONYXcore/onyx/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/onyx" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/ytn.png" width="50" alt="Yenten"></td>
                        <td class="product-title">Yenten</td>
                        <td class="product-price">YTN</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/yentencoin/yenten/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/yenten" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/qrl.png" width="50" alt="QuantumRL"></td>
                        <td class="product-title">QuantumRL</td>
                        <td class="product-price">QRL</td>
                        <td class="product-price">RandomX</td>
                        <td class="product-add-cart"><a href="https://www.theqrl.org/downloads/wallets/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/quantumrl" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/adot.png" width="50" alt="Alterdot"></td>
                        <td class="product-title">Alterdot</td>
                        <td class="product-price">ADOT</td>
                        <td class="product-price">ARGON2D16000</td>
                        <td class="product-add-cart"><a href="https://github.com/Alterdot/Alterdot/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/alterdot" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/naca.png" width="50" alt="NashCoin"></td>
                        <td class="product-title">NashCoin</td>
                        <td class="product-price">NACA</td>
                        <td class="product-price">CHUKWA</td>
                        <td class="product-add-cart"><a href="https://github.com/nash-cash/NashCash-GUI-Wallet/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/nashcash" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/mng.png" width="50" alt="MangoCoin"></td>
                        <td class="product-title">MangoCoin</td>
                        <td class="product-price">MNG</td>
                        <td class="product-price">CHUKWA</td>
                        <td class="product-add-cart"><a href="https://github.com/mangocoinproject/mangocoin/releases" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/mangocoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/uis.png" width="50" alt="Unitus"></td>
                        <td class="product-title">Unitus</td>
                        <td class="product-price">UIS</td>
                        <td class="product-price">ARGON2D4096</td>
                        <td class="product-add-cart"><a href="https://unituscurrency.com" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/unitus-argon2d" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/veco.png" width="50" alt="Veco"></td>
                        <td class="product-title">Veco</td>
                        <td class="product-price">VECO</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/vecopay/veco/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/veco" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/bell.png" width="50" alt="Bellcoin"></td>
                        <td class="product-title">Bellcoin</td>
                        <td class="product-price">BELL</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://bellcoin.web4u.jp/#wallet" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/bellcoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/swamp.png" width="50" alt="SwampCoin"></td>
                        <td class="product-title">SwampCoin</td>
                        <td class="product-price">SWAMP</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/swampcoin/swamp/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/swampcoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/urx.png" width="50" alt="UraniumX"></td>
                        <td class="product-title">UraniumX</td>
                        <td class="product-price">URX</td>
                        <td class="product-price">YESPOWER-URX</td>
                        <td class="product-add-cart"><a href="https://github.com/UraniumX-URX/UraniumX-2.0.0/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/uraniumx" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/sugar.png" width="50" alt="SugarChain"></td>
                        <td class="product-title">SugarChain</td>
                        <td class="product-price">SUGAR</td>
                        <td class="product-price">YESPOWER-SUGAR</td>
                        <td class="product-add-cart"><a href="https://github.com/sugarchain-project/sugarchain/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/sugarchain" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/iso.png" width="50" alt="IsotopeC"></td>
                        <td class="product-title">IsotopeC</td>
                        <td class="product-price">ISO</td>
                        <td class="product-price">YESPOWER-IC</td>
                        <td class="product-add-cart"><a href="https://github.com/isotopec-org/IsotopeC/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/isotopec" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/sprx.png" width="50" alt="SprintPay"></td>
                        <td class="product-title">SprintPay</td>
                        <td class="product-price">SPRX</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/Sprint-Core/Sprint/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/sprintpay" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/tdc.png" width="50" alt="TideCoin"></td>
                        <td class="product-title">TideCoin</td>
                        <td class="product-price">TDC</td>
                        <td class="product-price">YESPOWER-TIDE</td>
                        <td class="product-add-cart"><a href="https://github.com/tidecoin/tidecoin/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/tidecoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/uky.png" width="50" alt="UkkeyCoin"></td>
                        <td class="product-title">UkkeyCoin</td>
                        <td class="product-price">UKY</td>
                        <td class="product-price">YESPOWER</td>
                        <td class="product-add-cart"><a href="https://github.com/ukkeyHG/UkkeyCoin/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/ukkeycoin" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/xns.png" width="50" alt="NovaSol"></td>
                        <td class="product-title">NovaSol</td>
                        <td class="product-price">XNS</td>
                        <td class="product-price">CHUKWA</td>
                        <td class="product-add-cart">-</td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/novasol" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/vkax.png" width="50" alt="Vkax"></td>
                        <td class="product-title">Vkax</td>
                        <td class="product-price">VKAX</td>
                        <td class="product-price">MIKE</td>
                        <td class="product-add-cart"><a href="https://github.com/vkaxproject/vkax/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/vkax" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    <tr>
                        <td class="product-thumbnail"><img src="/assets/images/coins/plsr.png" width="50" alt="PulsarCoin"></td>
                        <td class="product-title">PulsarCoin</td>
                        <td class="product-price">PLSR</td>
                        <td class="product-price">MINOTAURX</td>
                        <td class="product-add-cart"><a href="https://github.com/PulsarCoin/Pulsar-Coin-Cryptocurrency/releases/" class="axil-btn btn-outline">Get Wallet</a></td>
                        <td class="product-add-cart"><a href="https://miningpoolstats.stream/pulsarcoin-minotaurx" class="axil-btn btn-outline">View Stats</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Wishlist Area  -->


    <?php include "./../includes/bottom-messaging.php" ?>
</main>

<?php include "./../includes/footer.php" ?>
<?php include "./../includes/global_footer.php" ?>

</body>

</html>