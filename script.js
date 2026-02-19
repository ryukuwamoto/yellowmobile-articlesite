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



// タブ切り替え
$(function () {
    $('.category-list2 .button').on('click', function () {
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
    });

//「もっと見る」の制御
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


//アーカイブ制御
/*document.addEventListener('DOMContentLoaded', function() {
    const archiveSelect = document.getElementById('archives-dropdown-4');

    if (archiveSelect) {
        archiveSelect.addEventListener('change', function() {
            const url = this.value;
            if (url) {
                window.location.href = url;
            }
        });
    }
});*/



// ハンバーガーメニュー
$(function() {
  $('.hamburger').click(function() {
    $('.menu').toggleClass('open');
    $(this).toggleClass('active');
  });
});



// スライダー
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





// サイドメニュー開閉
    $(function() {
    $('.submenu-toggle').on('click', function() {
        const $parent = $(this).closest('.has-submenu');
        const $list = $parent.find('.submenu-list');

        $list.slideToggle(300);
        
        $parent.toggleClass('is-open');
    });
});