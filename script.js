// Aボタン・Bボタン・Cボタンを取得
const buttonA = document.getElementById('a_btn');
const buttonB = document.getElementById('b_btn');
const buttonC = document.getElementById('c_btn'); // 追加

// A画面・B画面・C画面を取得
const screenA = document.querySelector('.a_screen');
const screenB = document.querySelector('.b_screen');
const screenC = document.querySelector('.c_screen'); // 追加

// --- Aボタンをクリックした時 ---
buttonA.addEventListener('click', function() {
    buttonA.classList.remove('active');     // 自分に付ける
    buttonB.classList.remove('active');
    buttonC.classList.remove('active');  // 追加
    screenA.classList.remove('active');     // 自分に付ける
    screenB.classList.remove('active');
    screenC.classList.remove('active');  // 追加
});

// --- Bボタンをクリックした時 ---
buttonB.addEventListener('click', function() {
    buttonA.classList.add('active');
    buttonB.classList.add('active');     // 自分に付ける
    buttonC.classList.remove('active');  // 追加
    screenA.classList.add('active');
    screenB.classList.add('active');     // 自分に付ける
    screenC.classList.remove('active');  // 追加
});

// --- Cボタンをクリックした時（新規追加） ---
buttonC.addEventListener('click', function() {
    buttonA.classList.add('active');
    buttonB.classList.remove('active');
    buttonC.classList.add('active');     // 自分に付ける
    screenA.classList.add('active');
    screenB.classList.remove('active');
    screenC.classList.add('active');     // 自分に付ける
});



var show = 6; //最初に表示する件数
var num = 3;  //clickごとに表示したい件数
var contents = '.list li'; // 対象のlist
$(contents + ':nth-child(n + ' + (show + 1) + ')').addClass('is-hidden');
$('.more').on('click', function () {
  $(contents + '.is-hidden').slice(0, num).removeClass('is-hidden');
  if ($(contents + '.is-hidden').length == 0) {
    $('.more').fadeOut();
  }
});