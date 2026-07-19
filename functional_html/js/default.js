function openPopup(div_id){
	downimg_change(1);
	$("#"+div_id).bPopup();
}
function closePopup(){
	$("#layer_1").bPopup().close();
	$("#layer_2").bPopup().close();
	$("#down_chk").val("0");
}


function layer_1_open(div_id) {	
	var down_chk = $("#down_chk").val();
	if(down_chk==0){
		openPopup(div_id);
		$("#down_chk").val("1");
		setTimeout("down_loading(1)",500);
	}
}


/* layer.html 의 다운로드 */
function downimg_change(num){
	var file_speed = ["","11.2MB","11.5MB","12.2MB","12.6MB","12.6MB","13.1MB","13.0MB","13.8MB"];
	var file_cnt = ["","0/2","1/2","1/2","1/2","2/2","2/2","2/2","2/2"];
	var file01_down = ["","1.3MB","2.3MB","4.1MB","5.4MB","6.2MB","6.2MB","6.2MB","6.2MB"];
	var file02_down = ["","1.3MB","1.8MB","2.1MB","2.9MB","3.23MB","4.3MB","4.9MB","5MB"];

	$("#down_bar").attr("src","images/down_bar_"+num+".jpg");
	$("#file_speed").html(file_speed[num]);
	$("#file_cnt").html(file_cnt[num]);
	$("#file01_down").html(file01_down[num]);
	$("#file02_down").html(file02_down[num]);
	
}

function down_loading(counter){
	if(counter < 8){
		setTimeout(function(){
			counter++;
			downimg_change(counter);
			down_loading(counter);
		}, 300);
	}
	if(counter==8){
		setTimeout(function(){
			openPopup('layer_2');
		},1000);
	}
}
/* // layer.html 의 다운로드 */


/* 동전 내려오는 효과 */
function money_move(){
	$('.money_bg').animate(
		{'top':'0px','left':'0px'},2000,"easeOutBounce"
	)
}