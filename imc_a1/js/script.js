/* twinkling */
const colors = ["#6cff6c","#fff"];
const colors2 = ["#6cff6c","#111"];
const colors3 = ["#fff","#111"];
let i = 0;

// 버튼 색상 변경
function changeColor() {
    $(".btn-white a").css("background-color", colors[i]);
    $(".content-1 span").css("color", colors2[i]);
    $(".content-1 span").css("-webkit-text-stroke-color", colors3[(i + 1) % colors.length]);
    // $(".btn-white a").css("color", colors[(i + 1) % colors.length]); < 폰트 색상 변경 필요시 사용하려고 주석으로 남겨둠
    i = (i + 1) % colors.length;
    setTimeout(changeColor, 500);
}
changeColor();

/* JQuery */
$(document).ready(function(){
  let startValue = 0;
  let maxValue = 92;

  function increaseNumber() {
  let percentSpan = $('#percent');
  let currentValue = parseInt(percentSpan.text());

  if (currentValue < maxValue) {
    percentSpan.text(currentValue + 1);
    setTimeout(increaseNumber, 5);
  } else {
    setTimeout(function () {
      percentSpan.parent().css('transform', 'scale(1.3)');
    }, 100);

    Promise.all([
      startCounting(4581.3, '#count1', 14.2),
      startCounting(219.8, '#count2', 0.8),
      startCounting(643318, '#count3', 1954)
    ]).then(function () {
      percentSpan.parent().css('transform', 'scale(1)');
    });
  }

}

function startCounting(num, countBoxSelector, speed) {
  return new Promise(function (resolve) {
    let count = 0;
    let countBox = $(countBoxSelector);

    function increaseCount() {
      if (count >= num) {
        count = num;
        clearInterval(counting);
        countBox.text(new Intl.NumberFormat().format(count.toFixed(2)));
        resolve();
      } else {
        count += speed;
        countBox.text(new Intl.NumberFormat().format(count.toFixed(2)));
      }
    }

    let counting = setInterval(increaseCount, 3);
  });
}
increaseNumber();

/* Scroll Event */
  let animationStarted = false;

$(window).on('scroll', async function () {
    let scrollTop = $(window).scrollTop();
    console.log(scrollTop);

    if (scrollTop >= 600 && scrollTop <= 1800 && !animationStarted) {
        animationStarted = true;

        $('.graph .g01').delay(0).queue(function (next) {
            $(this).css({ 'height': '45%' });
            next();
        });
        $('.graph .g02').delay(500).queue(function (next) {
            $(this).css({ 'height': '53%' });
            next();
        });
        $('.graph .g03').delay(1000).queue(function (next) {
            $(this).css({ 'height': '58%' });
            next();
        });
        $('.graph .g04').delay(1500).queue(function (next) {
            $(this).css({ 'height': '100%' });
            next();
        });

        await new Promise(resolve => $('.graph .g04').delay(100).queue(function (next) {
            $(this).css({ 'height': '100%' });
            next();
            resolve();
        }));

        $('#members').css({
            'visibility': 'visible',
            'animation': 'blinking 1s infinite'
        });
    } else if (scrollTop < 700 || scrollTop > 2000) {
        animationStarted = false; // Reset the flag if outside the specified range
        $('.graph li').css({ 'height': '0%' });
        $('#members').css('visibility', 'hidden');
    }
});

  $(window).scroll(function() {
    let windowHeight = $(window).height();
    let scrollPos = $(window).scrollTop();
    if ($('.content-3 .sentence').offset().top < (scrollPos + windowHeight*0.7)){
      $('.content-3 .sentence').animate({opacity: 1}, 1000);
    }
    if ($('.content-3 .btn-green').offset().top < (scrollPos + windowHeight*0.7)){
      $('.content-3 .btn-green').animate({opacity: 1}, 1000);
    }
    if ($('.content-4-sentence').offset().top < (scrollPos + windowHeight*0.7)){
      $('.content-4-sentence').animate({opacity: 1}, 1000);
    }
    if ($('.btns').offset().top < (scrollPos + windowHeight*0.7)){
      $('.btns').animate({opacity: 1}, 1000);
    }
    if ($('.content-4-sentence2').offset().top < (scrollPos + windowHeight*0.7)){
      $('.content-4-sentence2').animate({opacity: 1}, 1000);
    }
    if ($('.btn-white').offset().top < (scrollPos + windowHeight*0.7)){
      $('.btn-white').animate({opacity: 1}, 1000);
    }
    if ($('.content-4').offset().top < (scrollPos + windowHeight*0.5)){
      $('<style>.content-4:before { opacity: 0.7; }</style>').appendTo('head');
    }
  });

  $(".btn-green a, .content-4 .btns li, .btn-white a").click(function(){
    $(".modal").fadeIn();
    return false
  });
  $(".btn-close").click(function(){
    $(".modal").fadeOut();
  });

  window.onload = function(){
    const checkAll = document.getElementById('chkAll');
    const chks = document.querySelectorAll('.chk');
    const chkBoxLength = chks.length;

    checkAll.addEventListener('click', function(event){
      if(event.target.checked){
        chks.forEach(function(value){
        value.checked=true;
          })
      }else{
        chks.forEach(function(value){
        value.checked=false;
      })
    }
  });

  for(chk of chks){
    chk.addEventListener('click',function(){
      let count = 0;
      chks.forEach(function(value){
    if(value.checked == true){
      count++;
    }
    })
    if(count !== chkBoxLength){
      checkAll.checked = false;
    }else{
      checkAll.checked = true;
    }
    })
    }
  }
});

document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('.btn-guide').addEventListener('click', function (event) {
      let chkAll = document.getElementById('chkAll');
      if (!chkAll.checked) {
          alert("아래 전체약관에 동의해야 합니다.");
          event.preventDefault(); // 링크 클릭 이벤트 중지
          return false;
      }

      let chkBoxes = document.querySelectorAll('.chk');
      for (let i = 0; i < chkBoxes.length; i++) {
          if (!chkBoxes[i].checked) {
              alert(chkBoxes[i].closest('label').textContent.trim() + "에 동의해야 합니다.");
              event.preventDefault();
              return false;
          }
      }

      let nameInput = document.querySelector('input[name="name"]');
      let nameValue = nameInput.value.trim();
      if (nameValue === "") {
          alert("이름을 입력해주세요.");
          event.preventDefault();
          return false;
      }
      
      if (!/^[가-힣]+$/.test(nameValue)) {
        alert("한글을 입력해주세요.");
        event.preventDefault();
        return false;
    }

      let telInput = document.querySelector('input[name="tel2"]');
      let telValue = telInput.value.trim();
      if (telValue === "") {
          alert("전화번호를 입력해주세요.");
          event.preventDefault();
          return false;
      }

      if (!/^\d+$/.test(telValue)) {
        alert("전화번호는 숫자만 입력해주세요.");
        event.preventDefault();
        return false;
      }

      let option1Checked = false;
      let option2Checked = false;

      let option1RadioButtons = document.querySelectorAll("input[name='option1']");
      let option2RadioButtons = document.querySelectorAll("input[name='option2']");

      option1RadioButtons.forEach(function (radioButton) {
          if (radioButton.checked) {
              option1Checked = true;
          }
      });

      option2RadioButtons.forEach(function (radioButton) {
          if (radioButton.checked) {
              option2Checked = true;
          }
      });

      if (!option1Checked || !option2Checked) {
          event.preventDefault();
          alert("투자유형 및 투자금액을 선택해주세요.");
          return false;
      }

      document.querySelector('.modal-form').submit();

      // window.location.href = 'success.html';
  });
});

