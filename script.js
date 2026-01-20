// --- 1. タブ切り替えの制御 ---
const buttonA = document.getElementById('a_btn');
const buttonB = document.getElementById('b_btn');
const buttonC = document.getElementById('c_btn');

const screenA = document.querySelector('.a_screen');
const screenB = document.querySelector('.b_screen');
const screenC = document.querySelector('.c_screen');

function resetTabs() {
    [buttonA, buttonB, buttonC, screenA, screenB, screenC].forEach(el => {
        el.classList.remove('active');
    });
}

buttonA.addEventListener('click', () => {
    resetTabs();
    // Aはactiveクラスがない時に表示されるCSS設定なので、ここでは何もしない、
    // もしくは以前のロジック通りAボタンにのみ特定の処理が必要なら記述
});

buttonB.addEventListener('click', () => {
    resetTabs();
    buttonA.classList.add('active'); // Aを隠す
    buttonB.classList.add('active'); // Bを出す
    screenA.classList.add('active'); // Aを隠す
    screenB.classList.add('active'); // Bを出す
});

buttonC.addEventListener('click', () => {
    resetTabs();
    buttonA.classList.add('active'); // Aを隠す
    buttonC.classList.add('active'); // Cを出す
    screenA.classList.add('active'); // Aを隠す
    screenC.classList.add('active'); // Cを出す
});

// --- 2. 「もっと見る」の制御（画面ごとに独立） ---
$(function () {
    var show = 4; // 最初に表示する件数
    var num = 4;  // clickごとに表示したい件数

    // 各スクリーンごとに処理を回す
    $('.a_screen, .b_screen, .c_screen').each(function () {
        var $screen = $(this);
        var $listItems = $screen.find('.list li');
        var $moreBtn = $screen.find('.more');

        // 初期表示の設定（4件目以降を隠す）
        $listItems.slice(show).addClass('is-hidden');

        // もし最初から4件以下なら「もっと見る」を隠しておく
        if ($listItems.length <= show) {
            $moreBtn.hide();
        }

        // その画面の中のボタンが押された時の処理
        $moreBtn.on('click', function () {
            var $hiddenItems = $listItems.filter('.is-hidden');
            var $target = $hiddenItems.slice(0, num);

            $target.removeClass('is-hidden').hide().fadeIn(400);

            // 全て表示されたらその画面のボタンだけ消す
            if ($hiddenItems.length <= num) {
                $(this).fadeOut();
            }
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const archiveSelect = document.getElementById('archives-dropdown-4');

    if (archiveSelect) {
        archiveSelect.addEventListener('change', function() {
            const url = this.value;
            if (url) {
                window.location.href = url; // 選択されたURLに移動
            }
        });
    }
});



$(function() {
  $('.hamburger').click(function() {
    // メニューの開閉状態を切り替える
    $('.menu').toggleClass('open');

    // ハンバーガーボタンのアクティブクラスを切り替えて三本線をバツにする
    $(this).toggleClass('active');
  });
});




$(function() {
    var $headerTagline = $('.header-title-bar');
    // 帯が元々ある位置を取得
    var taglineOffset = $headerTagline.offset().top;

    $(window).on('scroll', function() {
        // 1100px以下のときだけ動作
        if (window.innerWidth <= 1100) {
            if ($(window).scrollTop() > taglineOffset) {
                // スクロール量が位置を超えたら固定
                $headerTagline.addClass('is-fixed');
            } else {
                // 上に戻ったら固定解除
                $headerTagline.removeClass('is-fixed');
            }
        } else {
            // PCサイズでは固定を強制解除
            $headerTagline.removeClass('is-fixed');
        }
    });
});




$('.slider').slick({
        autoplay: true,
        dots: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 801,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    const nav = document.querySelector('.header_bottom-nav');
    const trigger = document.querySelector('#sticky-trigger');

    if (nav && trigger) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    nav.classList.add('is-sticky');
                } else {
                    nav.classList.remove('is-sticky');
                }
            });
        }, {
            threshold: 0
        });
        observer.observe(trigger);
    }






    $(function() {
    $('.submenu-toggle').on('click', function() {
        const $parent = $(this).closest('.has-submenu');
        const $list = $parent.find('.submenu-list');

        // リストをスライドで開閉
        $list.slideToggle(300);
        
        // 親要素にクラスを付与して＋と－を切り替え
        $parent.toggleClass('is-open');
    });
});