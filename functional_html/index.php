<?
header('Content-Type: text/html; charset=UTF-8');

if($_POST["Update_type"]=="Update_now")
{
	$_POST["name"]=strip_tags($_POST["name"]);
	$_POST["tel"]=strip_tags($_POST["tel"]);
	$_POST["tel2"]=strip_tags($_POST["tel2"]);
	$_POST["tel3"]=strip_tags($_POST["tel3"]);
	$_POST["option1"]=strip_tags($_POST["option1"]);
	$_POST["option2"]=strip_tags($_POST["option2"]);
	$_POST["time"]=strip_tags($_POST["time"]);
	
	$SEND_DATA_ary=array();
	$SEND_DATA_ary["ITEM"]="20";
	$SEND_DATA_ary["DBname"]=$_POST["name"];
	$SEND_DATA_ary["DBphone"]=$_POST["tel"]."-".$_POST["tel2"]."-".$_POST["tel3"];
	$SEND_DATA_ary["DBfild1"]=$_POST["option1"];
	$SEND_DATA_ary["DBfild2"]=$_POST["option2"];
	$SEND_DATA_ary["DBfild3"]=$_POST["time"];
	$SEND_DATA_ary["DBip"]=$_SERVER["REMOTE_ADDR"];

	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL,"http://anonymus.kr/api/"); //전달할할 URL 
	curl_setopt ($ch, CURLOPT_HEADER, false);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt ($ch, CURLOPT_POST, 1);
	curl_setopt ($ch, CURLOPT_POSTFIELDS, $SEND_DATA_ary);
	curl_setopt ($ch, CURLOPT_TIMEOUT, 5);
	curl_exec ($ch);
	curl_close ($ch);
?>
	<script>
	// alert("금등 종복 받아보기 신청이 완료되었습니다.");
	location.href="success.html";
	</script>
<?
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=640, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>타이틀</title>
</head>

<link href="css/default.css?ver=6" rel="stylesheet" />
<link href="css/default_m.css?ver=6" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" >
<script src="js/default.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.bpopup.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>



<body>
<!-- 비디오 BG -->

<div class="parent-element-to-video">
    <video loop muted autoplay class="fullscreen-bg__video">
        <source src="images/motion_bg.mp4" type="video/mp4">
    </video>
</div>

<!-- 전체박스 -->
<div class="main_container">


<!-- 800px 컨텐츠 박스 -->

<div class="content_box">

	<div class="main_top">
		<img src="images/main_top.png" >
	</div>
	<div class="main_top_text">
		실시간 종목현황 <span>급등 종목</span> 받기
	</div>
	<div class="main_file_box" style="position:relative; z-index:5;">
		<div class="file_list">
			<div class="file_text" onclick="layer_1_open('layer_1');">
				<span class="img"><img src="images/icon_zip.png"></span>
				<span class="text">글로벌코리아빅엔터테인먼트코리아_11월3일_분석자료.zip</span>
				<span class="dimg"><img src="images/icon_down.png"></span>
			</div>
		</div>
		<div class="height_empty"></div>
		<div class="file_list">
			<div class="file_text" onclick="layer_1_open('layer_1');">
				<span class="img"><img src="images/icon_egg.png"></span>
				<span class="text">10월_급등주_스익률_현황.EGG</span>
				<span class="dimg"><img src="images/icon_down.png"></span>
			</div>
		</div>
	</div>

	<div class="main_mid_text">
		실시간 <span>시황분석알림</span>은 필수
	</div>


	<div class="main_news_box" style="padding:0px 30px; z-index:2;">
		<div id="slider-div" style="display:inline-block;">		
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">1월 3일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">1월 2일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">1월 1일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">2월 15일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 10일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 12일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 20일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 22일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 26일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
			<div class="news_list" onclick="layer_1_open('layer_1');">
				<span class="news_content">
					<p class="title">3월 30일 헤븐의 장전 브리핑</p>
					<p class="info">코로나 재확산 관련 피해 입송이 부진해 다우 지수는 하락하는 등 혼자마감</p>
				</span>
				<span class="news_more">+</span>				
			</div>
		</div>
	</div>


</div>

<!-- 800px 컨텐츠 박스 -->




<!-- layer1 -->
<div class="layer_box" id="layer_1" style="display:none;">
	<input type="hidden" value="0" id="down_chk" >
	<div><img src="images/download_top.jpg" class="down_top" onclick="javascript:down_loading(1);"></div>
	<div class="down_box">
		<div class="bar_box">
			<span class="title">전체전송</span>
			<span><img src="images/down_bar_1.jpg" id="down_bar"></span>
		</div>
		
		<div class="speed_box">
			<ul>
				<li class="li_1">전체파일</li>
				<li class="li_2"><span id="file_cnt">0/2</span></li>
				<li class="li_1">전송속도</li>
				<li class="li_2"><span id="file_speed">11.2MB</span></li>
			</ul>
			<ul>
				<li class="li_1">저장위치</li>
				<li class="li_2">C:\Program Files\Download</li>
				<li class="li_1">서버상태</li>
				<li class="li_2 state">
					<span class="state_text">-</span>
					<span class="state_btn"><img src="images/downfolder_open.jpg"></span>
				</li>
			</ul>
		</div>

		<div class="downlist_box">
			<img src="images/download_title.jpg">
			<ul class="hol on">
				<li class="filename">
					<span class="icon"><img src="images/icon_zip.png"></span>
					<span>삼성전자_11월_분석자료.zip</span>
				</li>
				<li class="filesize"><span id="file01_down">1.3MB</span>/6.3MB</li>
				<li class="filestate">ON</li>
			</ul>
			<ul class="jjak">
				<li class="filename">
					<span class="icon"><img src="images/icon_egg.png"></span>
					<span>삼성전자_10월_분석자료.zip</span>
				</li>
				<li class="filesize"><span id="file02_down">1.3MB</span>/5MB</li>
				<li class="filestate">ON</li>
			</ul>
			<ul class="hol">
				<li class="filename">
					<span class="icon">&nbsp;</span>
					<span>&nbsp;</span>
				</li>
				<li class="filesize">&nbsp;</li>
				<li class="filestate">&nbsp;</li>
			</ul>
			<ul class="jjak">
				<li class="filename">
					<span class="icon">&nbsp;</span>
					<span>&nbsp;</span>
				</li>
				<li class="filesize">&nbsp;</li>
				<li class="filestate">&nbsp;</li>
			</ul>
			<ul class="hol">
				<li class="filename">
					<span class="icon">&nbsp;</span>
					<span>&nbsp;</span>
				</li>
				<li class="filesize">&nbsp;</li>
				<li class="filestate">&nbsp;</li>
			</ul>
		</div>
	</div>
	<div onclick="openPopup('layer_2');" class="down_bot"><img src="images/download_bot.jpg"></div>
</div>
<!-- //layer1 -->





	



<!-- layer2 -->
<div class="layer_box2" id="layer_2" style="display:none;">
	<div class="content_box">		
		<div class="top_container">
			<span class="logo"><img src="images/layer2_logo.png"></span>		
			<span class="btn"><img src="images/close_btn.png" width="30" onclick="closePopup('');"></span>
		</div>
		
		<p class="content_title">실시간 <span>급등 종목 분석</span> 받기</p>
		<p class="sub_title">* 해당 정보를 입력하시면 분석된 종목을 제공해드립니다.</p>
	
		
		<div class="input_box">
			<ul>
				<li class="input_name">
					<input type="text" placeholder="* 이름을 입력해주세요" >
				</li>
			</ul>
			<ul>
				<li class="input_name">
					<input type="text" placeholder="전화번호를 입력해주세요(숫자만)" >
				</li>
			</ul>
		</div>
		<div class="agree_box">
			<p><label class="checkbox-wrap"><input type="checkbox" name="transportation[]" checked ><i class="check-icon"></i> 개인정보 수집 및 활용동의(필수)</label> <b>[보기]</b></p>
			<p><label class="checkbox-wrap"><input type="checkbox" name="transportation[]" checked ><i class="check-icon"></i> 개인정보 제3자 제공동의(필수)</label> <b>[보기]</b></p>
			<p><label class="checkbox-wrap"><input type="checkbox" name="transportation[]" checked ><i class="check-icon"></i> 광고성 문자메세지 수신동의</label></p>
		</div>

		<div class="btn_box">
			<img src="images/layer2_btn.png">
		</div>
	</div>
</div>
<!-- //layer2 -->






<!-- 동전 BG -->
<div class="money_bg"><img src="images/money_bg.png" width="100%"></div>
<!-- //동전 BG -->












<!-- 푸터 -->
<div class="foot_container">
	<div class="footer">
		<p>회사명:(주) 헤븐컴퍼니 | 대표자:천지훈 | 주소:서울특별시 강남구 도산대로 540, 8층</p>
		<p>사업자등록번호:756-86-01111 | 개인정보관리자:김태용</p>
		<p>대표번호 : 1644-9177</p>
		<p>이메일 : investment@heaven2011.co.kr</p>
		<p><b>COPYRIGHT @ GOSUECOTV All Rights Reserved.</b></p>
	</div>
</div>
<!-- //푸터 -->

</div>
<!-- //전체박스 -->

</body>
</html>


<script>
$(function(){
	$('#slider-div').slick({
		arrows:false,
		slide: 'div',		//슬라이드 되어야 할 태그 ex) div, li 
		zIndex:10,
		infinite : true, 	//무한 반복 옵션	 
		slidesToShow : 3,		// 한 화면에 보여질 컨텐츠 개수
		slidesToScroll : 1,		//스크롤 한번에 움직일 컨텐츠 개수
		speed : 1000,	 // 다음 버튼 누르고 다음 화면 뜨는데까지 걸리는 시간(ms)
		autoplay : true,			// 자동 스크롤 사용 여부
		autoplaySpeed : 2000, 		// 자동 스크롤 시 다음으로 넘어가는데 걸리는 시간 (ms)
		pauseOnHover : false,		// 슬라이드 이동	시 마우스 호버하면 슬라이더 멈추게 설정
		vertical : true,		// 세로 방향 슬라이드 옵션				
		verticalSwiping:true,
		waitForAnimate:false,
		draggable : true 	//드래그 가능 여부 
	});
})
 $( document ).ready( function() {
	$('.file_list').hover(function(){
		$(this).addClass("file_list_on");
		$(this).find(".dimg > img").attr("src","images/icon_down_on.png");
	}, function () {
		$(this).removeClass("file_list_on");
		$(this).find(".dimg > img").attr("src","images/icon_down.png");
	});

	$('file_list').click(function(){
		$(this).addClass("file_list_on");
		$(this).find(".dimg > img").attr("src","images/icon_down_on.png");
	});

	//setTimeout("money_move()",700);	
	//setTimeout("layer_1_open('layer_1')",10000);
});



/*
window.onload = function(){	
	setTimeout("money_move()",700);	
	setTimeout("layer_1_open('layer_1')",10000);
}
*/
</script>