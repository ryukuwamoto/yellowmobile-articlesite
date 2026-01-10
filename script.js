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