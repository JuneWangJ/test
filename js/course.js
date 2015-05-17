$(document).ready(function() {

	$(function(){
		var time = 3600;
		
		var interval = setInterval(timeChange,1000);

		function timeChange(){
			if(time==-1)
			{
				clearInterval(interval);
				time = 3600;
			}
			$("#time").text(" "+Math.floor((Math.floor(time/60))/10) +Math.floor((Math.floor(time/60))%10) + ":" + Math.floor((time%60)/10) +(time%60)%10);
			time--;
		}
	});

	$("ul#menu_page li a").click(function(){
		var text = $(this).text();
		$("#menu_btn").html(text+'<span class="caret"></span>');
		var index = $(this).parent().index()+1;
		var html = "test"+index+".html";
		$("#iframe1").attr('src',"./course/"+index+".html");
	});

	$("#iframe2_1").hide();
	$("#iframe2_2").hide();
	$("#iframe2_3").hide();

	$("#btn-note").click(function() {
		$("#iframe2_1").slideToggle();
		$("#iframe2_2").hide();
		$("#iframe2_3").hide();
	});

	$("#btn-question").click(function() {
		$("#iframe2_1").hide();
		$("#iframe2_2").slideToggle();
		$("#iframe2_3").hide();
	});

	$("#btn-test").click(function() {
		$("#iframe2_1").hide();
		$("#iframe2_2").hide();
		$("#iframe2_3").slideToggle();
	});


	$("#cls-back").click(function(){
		alert("返回课程!");
	});

	$("#btn-start").click(function() {
		$('#iframe3');
		var url = window.location.href;
		$("#iframe3").attr('src',"http://"+url.split("/")[2]+":6080/vnc_auto.html");
	});

	$("#btn-back").click(function(){
		$("#iframe3").attr('src','./hello.html');
	});

});