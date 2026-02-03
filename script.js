// リンクづけ
$(function () {
    $('.category-list2 .button').on('click', function (e) {

        e.preventDefault(); 

        const $clickedBtn = $(this);
        const index = $clickedBtn.closest('.item').index();
        const $wrap = $clickedBtn.closest('.article-tabs');
        const $allButtons = $wrap.find('.button');
        const $allScreens = $wrap.find('.screen > div');

        $allButtons.removeClass('active');
        $allScreens.removeClass('active');

        if (index === 0) {

        } else {
            $clickedBtn.addClass('active');
            $('#a_btn').addClass('active');
            $allScreens.eq(0).addClass('active');
            $allScreens.eq(index).addClass('active');
        }

        const hash = $clickedBtn.attr('href');
        history.replaceState(null, null, hash); 
    });

    const initialHash = window.location.hash;
    if (initialHash) {

        $(`.category-list2 .button[href="${initialHash}"]`).trigger('click');
    }
});

$(window).on('hashchange load', function() {
    const hash = window.location.hash;

    if (hash) {

        const $targetBtn = $(`.category-list2 .button[href="${hash}"]`);
        
        if ($targetBtn.length) {

            $targetBtn.trigger('click');
        }
    } else {

        $('#a_btn').trigger('click');
    }
});



$(function () {
    // 1. タブ切り替え（5つになっても自動対応版）
    $('.category-list2 .button').on('click', function () {
        const $clickedBtn = $(this);
        const index = $clickedBtn.closest('.item').index(); // 0:A, 1:B, 2:C...
        const $wrap = $clickedBtn.closest('.article-tabs');
        
        const $allButtons = $wrap.find('.button');
        const $allScreens = $wrap.find('.screen > div');

        // --- 全てを一旦リセット ---
        $allButtons.removeClass('active');
        $allScreens.removeClass('active');

        if (index === 0) {
            // 【修正箇所】新着(A)が押された時
            // 全ての active が外れた状態 = Aボタンがメイン色、A画面が表示される
            // なので、ここではクラスを追加せず「真っさら」な状態にします
        } else {
            // A以外（B, C...）が押された時
            $clickedBtn.addClass('active');   // 押したボタンを活性色に
            $('#a_btn').addClass('active');   // Aボタンを非活性色に
            $allScreens.eq(0).addClass('active'); // A画面を非表示(display:none)に
            $allScreens.eq(index).addClass('active'); // 選んだ画面を表示に
        }
    });

    // 2. 「もっと見る」の制御（共通）
    const show = 4;
    const num = 4;

    $('.screen > div').each(function () {
        const $screen = $(this);
        const $listItems = $screen.find('.list li');
        const $moreBtn = $screen.find('.more');

        $listItems.slice(show).addClass('is-hidden');
        if ($listItems.length <= show) $moreBtn.hide();

        $moreBtn.on('click', function () {
            const $hiddenItems = $listItems.filter('.is-hidden');
            const $target = $hiddenItems.slice(0, num);

            $target.removeClass('is-hidden').hide().fadeIn(400, function() {
                $(this).css('display', 'flex');
            });

            if ($hiddenItems.length <= num) $(this).fadeOut();
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