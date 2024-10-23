<?php
/**
 * Page data
 */
$page_name = "Blog Articles";
$page_url = "/blog/";

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
                            <li class="axil-breadcrumb-item active" aria-current="page">Blog</li>
                        </ul>
                        <h1 class="title">Blog Home</h1>
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

    <!-- Start Blog Area  -->
    <div class="axil-blog-area axil-section-gap">
        <div class="container">
            <div class="row row--25">
                <div class="col-lg-12 axil-post-wrapper">

                    <!-- Start Single Blog  -->
                    <div class="content-blog sticky mt--60">
                        <div class="inner">
                            <div class="content">
                                <h4 class="title"><a href="/blog/is-cpu-mining-is-better.php">is CPU mining better</a></h4>
                                <div class="axil-post-meta">
                                    <div class="post-author-avatar">
                                        <img src="/assets/images/logo/NucMining_icon_250x250.png" alt="Nuc Mining">
                                    </div>
                                    <div class="post-meta-content">
                                        <h6 class="author-title">
                                            MiniPC Mining
                                        </h6>
                                        <ul class="post-meta-list">
                                            <li>May 13, 2023</li>
                                            <li>5 min to read</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>One of the main advantages of CPU mining is that it is accessible to anyone with a computer.</p>
                                <div class="read-more-btn">
                                    <a class="axil-btn btn-bg-primary" href="/blog/is-cpu-mining-is-better.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog  -->

                </div>
            </div>
            <!-- End post-pagination -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End Blog Area  -->


    <?php include "./../includes/bottom-messaging.php" ?>
</main>

<?php include "./../includes/footer.php" ?>
<?php include "./../includes/global_footer.php" ?>

</body>

</html>