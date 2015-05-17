$(document).ready(function() {
	var data = {"exercise":[
					{"question":"1+1=","answer":{"A":"1","B":"2","C":"3"},"correct":"A"},
					{"question":"1+2=","answer":{"A":"1","B":"2","C":"3"},"correct":"A"},
					{"question":"1+2=","answer":{"A":"1","B":"3","C":"5"},"correct":"B"},
					{"question":"1+2=","answer":{"A":"1","B":"2","C":"3"},"correct":"C"},
					{"question":"1+2=","answer":{"A":"1","B":"2","C":"3"},"correct":"A"},
					{"question":"A+B=","answer":{"A":"1","B":"2","C":"3"},"correct":"C"}
				]};
	count(data);
});

function addExercise(data){
	var questoin_html="";
	for (var i = 1,len = data.exercise.length; i <=len; i++) {
		questoin_html = questoin_html + "<div class='panel panel-primary'><div id='question"+i+"' class='panel-heading'>第"+i+"题:"+ data.exercise[i-1].question+"</div><div class='panel-body'><input type='radio' name='"+i+"' value='A' placeholder=''>&nbsp;&nbsp;&nbsp;A:"+data.exercise[i-1].answer.A+"<br /><input type='radio' name='"+i+"' value='B' placeholder=''>&nbsp;&nbsp;&nbsp;B:"+data.exercise[i-1].answer.B+"<br /><input type='radio' name='"+i+"' value='C' placeholder=''>&nbsp;&nbsp;&nbsp;C:"+data.exercise[i-1].answer.C+"<br /></div></div>";
	}
	questoin_html = questoin_html + "<button id='submit' type='button' class='btn btn-primary btn-lg' style='float:right;'>交&nbsp;&nbsp;卷</button>"
	$('#exercise').html(questoin_html);
}

function judge(data){
	var arr = new Array(data.exercise.length);
	$('input:checked').each(function(){
		var i =Number($(this).attr('name'))-1;
		if($(this).val() == data.exercise[i].correct){
			arr[i] = "yes";
		}else{
			arr[i] = "no";
		}
	});
	return arr;
}

function count(data){
	//统计结果
	var arr,result=0;
	addExercise(data);
	$('#submit').click(function() {
		arr = judge(data);
		if(arr != undefined && arr != null)
		{
			for (var i = 0,len = arr.length; i < len; i++) {
				if(arr[i] == "yes")
					result++;
			};
			alert("做对题数:"+result+"\n正确率:"+result/arr.length*100+"%");
			// sendToPhp(result,arr.length);
		}
	});
}

function sendToPhp(result,total){
	var url = 'php/test.php?result='+result + '&total=' + total;
	$.get(url,function(data){
		alert(data);
	});
}





