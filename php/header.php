<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="canonical" href="https://www.yellowmobile.jp/blog">
    <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-inner">
            <div class="header-top-bar">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
                    <h1>
                        <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/サイトロゴ.png">
                    </h1>
                    <h2 class="header-site-title">グローバルスマホ研究所</h2>
                    <p>byイエローモバイル</p>
                </a>
                <div class="search-wrap">
                    <input type="text" name="s" data-id="" value="" placeholder="" class="l-header-search">
                    <a href="#" class="search-btn"></a>
                </div>
            </div>
            
            <div class="header-title-bar">
                <nav class="menu">
                    <ul class="sidemenu-list">
                        <li class="sidemenu-item has-submenu">
                            <div class="sidemenu-parent">
                                <a href="<?php echo home_url('/destination/'); ?>#dest-all" class="sidemenu-link">
                                    <span>行き先</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/行き先new.png" alt="行き先" height="28" width="39">
                                </a>
                                <button class="submenu-toggle">
                                    <span class="icon-plus"></span>
                                </button>
                            </div>
                            <ul class="submenu-list">
                                <li><a href="<?php echo home_url('/destination/'); ?>#america" class="submenu-link"><span>アメリカ</span></a></li>
                                <li><a href="<?php echo home_url('/destination/'); ?>#kanada" class="submenu-link"><span>カナダ</span></a></li>
                                <li><a href="<?php echo home_url('/destination/'); ?>#australia" class="submenu-link"><span>オーストラリア</span></a></li>
                                <li><a href="<?php echo home_url('/destination/'); ?>#uk" class="submenu-link"><span>イギリス</span></a></li>
                                <li><a href="<?php echo home_url('/destination/'); ?>#others" class="submenu-link"><span>その他の国</span></a></li>
                            </ul>
                        </li>
                        <li class="sidemenu-item has-submenu">
                            <div class="sidemenu-parent">
                                <a href="<?php echo home_url('/simcard/'); ?>#SIM-all" class="sidemenu-link">
                                    <span>SIMカード</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/SIMnew.png" alt="SIMカード" height="31" width="22">
                                </a>
                                <button class="submenu-toggle">
                                    <span class="icon-plus"></span>
                                </button>
                            </div>
                            <ul class="submenu-list">
                                <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-america" class="submenu-link"><span>アメリカSIM</span></a></li>
                                <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-kanada" class="submenu-link"><span>カナダSIM</span></a></li>
                                <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-australia" class="submenu-link"><span>オーストラリアSIM</span></a></li>
                                <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-uk" class="submenu-link"><span>イギリスSIM</span></a></li>
                                <li><a href="<?php echo home_url('/simcard/'); ?>#SIMothers" class="submenu-link"><span>その他の国のSIM</span></a></li>
                            </ul>
                        </li>
                        <li class="sidemenu-item has-submenu">
                            <div class="sidemenu-parent">
                                <a href="<?php echo home_url('/eSIM/'); ?>#eSIM-all" class="sidemenu-link">
                                    <span>eSIM</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/eSIMnew.png" alt="eSIM" height="26" width="26">
                                </a>
                                <button class="submenu-toggle">
                                    <span class="icon-plus"></span>
                                </button>
                            </div>
                            <ul class="submenu-list">
                                <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-america" class="submenu-link"><span>アメリカeSIM</span></a></li>
                                <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-kanada" class="submenu-link"><span>カナダeSIM</span></a></li>
                                <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-australia" class="submenu-link"><span>オーストラリアeSIM</span></a></li>
                                <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-uk" class="submenu-link"><span>イギリスeSIM</span></a></li>
                                <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-others" class="submenu-link"><span>その他の国のeSIM</span></a></li>
                            </ul>
                        </li>
                        <li class="sidemenu-item has-submenu">
                            <div class="sidemenu-parent">
                                <a href="<?php echo home_url('/device/'); ?>#dev-all" class="sidemenu-link">
                                    <span>スマートフォン</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/スマホnew.png" alt="スマートフォン" height="34" width="22">
                                </a>
                                <button class="submenu-toggle">
                                    <span class="icon-plus"></span>
                                </button>
                            </div>
                            <ul class="submenu-list">
                                <li><a href="<?php echo home_url('/device/'); ?>#dev-iPhone" class="submenu-link"><span>iPhone</span></a></li>
                                <li><a href="<?php echo home_url('/device/'); ?>#dev-Android" class="submenu-link"><span>Android</span></a></li>
                                <li><a href="<?php echo home_url('/device/'); ?>#dev-net" class="submenu-link"><span>ポケットWi-Fi</span></a></li>
                                <li><a href="<?php echo home_url('/device/'); ?>#dev-tablet" class="submenu-link"><span>タブレット</span></a></li>
                            </ul>
                        </li>
                        <li class="sidemenu-item">
                            <a href="<?php echo home_url('/feature-tips/'); ?>" class="sidemenu-link">
                                <span>機能&tips</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/機能＆tipsnew.png" alt="スマホ豆知識" height="37" width="22">
                            </a>
                        </li>
                        <li class="sidemenu-item">
                            <a href="<?php echo home_url('/movie/'); ?>" class="sidemenu-link">
                                <span>動画</span><img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/動画new.png" alt="動画" height="26" width="34">
                            </a>
                        </li>
                    </ul>
                    <div class="sidemenu-search-wrap">
                        <input type="text" name="s" data-id="" value="" placeholder="" class="l-sidemenu-search">
                        <a href="#" class="sidemenu-search-btn"></a>
                    </div>
                    <ul class="sidemenu-sns">
                        <li><a href="https://x.com/yellowmobile_jp?s=21&t=GKPUDikvMJZ_JZ45LIW8ZA"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="https://www.instagram.com/yellow_mobile_japan/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="https://www.youtube.com/channel/UC5I-WwlgJp1wxuDRsGN-QDQ"><ion-icon name="logo-youtube"></ion-icon></a></li>
                        <li><a href="https://www.tiktok.com/@official_yellowmobile"><ion-icon name="logo-tiktok"></ion-icon></a></li>
                    </ul>
                    <div class="sidemenu-contact-links">
                        <a href="https://www.yellowmobile.jp/view/company" target="_blank" rel="noopener noreferrer">会社概要</a>
                        <a href="https://www.yellowmobile.jp" target="_blank" rel="noopener noreferrer">公式ホームページ</a>
                        <a href="https://h2o.yellowmobile.jp/gc" target="_blank" rel="noopener noreferrer">お問合わせ</a>
                    </div>
                    <div class="hamburger">                      
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="hum-back"></div>
                    </div>
                </nav>
            </div> 
        </div>
    </header>
            <div id="sticky-trigger" style="height: 1px;"></div>
            <div class="header_bottom-nav">
                <h3 class="category-title">＼ カテゴリー ／</h3>
                <nav class="category-nav">
                   <ul class="category-list">
                        <li class="category-item">
                            <a href="<?php echo home_url('/destination/'); ?>#dest-all" class="item-link">
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/行き先new.png" alt="行き先" height="37" width="52">
                                </div>
                                <p>行き先</p>
                            </a>
                            <div class="sub-tab">
                                <ul class="sub-list">
                                    <li><a href="<?php echo home_url('/destination/'); ?>#america">アメリカ</a></li>
                                    <li><a href="<?php echo home_url('/destination/'); ?>#kanada">カナダ</a></li>
                                    <li><a href="<?php echo home_url('/destination/'); ?>#australia">オーストラリア</a></li>
                                    <li><a href="<?php echo home_url('/destination/'); ?>#uk">イギリス</a></li>
                                    <li><a href="<?php echo home_url('/destination/'); ?>#others">その他の国</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="category-item">
                            <a href="<?php echo home_url('/simcard/'); ?>#SIM-all" class="item-link">
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/SIMnew.png" alt="SIMカード" height="41" width="29">
                                </div>
                                <p>SIMカード</p>
                            </a>
                            <div class="sub-tab">
                                <ul class="sub-list">
                                    <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-america">アメリカSIM</a></li>
                                    <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-kanada">カナダSIM</a></li>
                                    <li><a href="<?php echo home_url('/simcard/'); ?>#SIM-australia">オーストラリアSIM</a></li>
                                    <li><a href="<?php echo home_url('/simcard/'); ?>#uk">イギリスSIM</a></li>
                                    <li><a href="<?php echo home_url('/simcard/'); ?>#others">その他の国のSIM</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="category-item">
                            <a href="<?php echo home_url('/eSIM/'); ?>#eSIM-all" class="item-link">
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/eSIMnew.png" alt="eSIM" height="38" width="38">
                                </div>
                                <p>eSIM</p>
                            </a>
                            <div class="sub-tab">
                                <ul class="sub-list">
                                    <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-america">アメリカeSIM</a></li>
                                    <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-kanada">カナダeSIM</a></li>
                                    <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-australia">オーストラリアeSIM</a></li>
                                    <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-uk">イギリスeSIM</a></li>
                                    <li><a href="<?php echo home_url('/eSIM/'); ?>#eSIM-others">その他の国のeSIM</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="category-item">
                            <a href="<?php echo home_url('/device/'); ?>#dev-all" class="item-link">
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/スマホnew.png" alt="スマートフォン" height="45" width="28">
                                </div>
                                <p>スマートフォン</p>
                            </a>
                            <div class="sub-tab">
                                <ul class="sub-list">
                                    <li><a href="<?php echo home_url('/device/'); ?>#dev-iPhone">iPhone</a></li>
                                    <li><a href="<?php echo home_url('/device/'); ?>#dev-Android">Android</a></li>
                                    <li><a href="<?php echo home_url('/device/'); ?>#dev-net">ポケットWi-Fi</a></li>
                                    <li><a href="<?php echo home_url('/device/'); ?>#dev-tablet">タブレット</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="category-item">
                            <a href="<?php echo home_url('/feature-tips/'); ?>" class="item-link">
                                
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/機能＆tipsnew.png" alt="スマホ豆知識" height="49" width="28">
                                </div>
                                <p>機能&tips</p>
                            </a>
                        </li>
                        <li class="category-item">
                            <a href="<?php echo home_url('/movie/'); ?>" class="item-link">
                                <div class="icon-box">
                                    <img src="https://gigaplus.makeshop.jp/yemoba4818/YM-articlesaite/image/動画new.png" alt="動画" height="35" width="45">
                                </div>
                                <p>動画</p>
                            </a>
                        </li>
                         </ul>
                </nav>
            </div>
        </div>