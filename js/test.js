$(document).ready(function() {
	var data = {"exercise":[
					{"question":"以下哪个参数不用于卸载rpm软件包（  ）。","answer":{"A":"--nodeps","B":"--justdb","C":"--force","D":"--test"},"correct":"C"},
					{"question":"列出包括以“．”开始的隐藏文件在内的所有文件名的命令是（  ）。","answer":{"A":"ls","B":"ls -a","C":"ls -l","D":"ls /"},"correct":"D"},
					{"question":"列出包括以“．”查看主机PCI设备信息的命令（ ）。","answer":{"A":"ext2","B":"ext3 ","C":"vfat","D":"iso9660"},"correct":"D"},
					{"question":"为了查找出当前用户运行的所有进程的信息，我们可以用（   ）命令。","answer":{"A":"ps  -a ","B":"ps  -u","C":"ls -l","D":"cron"},"correct":"A"},
					{"question":"我们一般使用(   )工具来建立分区上的文件系统。","answer":{"A":"mknod ","B":"fdisk","C":"format ","D":"mkfs"},"correct":"D"},
					{"question":"linux系统的运行级别中，哪个是作为保留级别没有定义的","answer":{"A":"2","B":"3","C":"4","D":"5"},"correct":"C"}
				]};
	count(data);
});

function addExercise(data){
	var questoin_html="";
	for (var i = 1,len = data.exercise.length; i <=len; i++) {
		questoin_html = questoin_html + "<div class='panel panel-primary'><div id='question"+i+"' class='panel-heading'>第"+i+"题:"+ data.exercise[i-1].question+"</div><div class='panel-body'><input type='radio' name='"+i+"' value='A' placeholder=''>&nbsp;&nbsp;&nbsp;A:"+data.exercise[i-1].answer.A+"<br /><input type='radio' name='"+i+"' value='B' placeholder=''>&nbsp;&nbsp;&nbsp;B:"+data.exercise[i-1].answer.B+"<br /><input type='radio' name='"+i+"' value='C' placeholder=''>&nbsp;&nbsp;&nbsp;C:"+data.exercise[i-1].answer.C+"<br /><input type='radio' name='"+i+"' value='D' placeholder=''>&nbsp;&nbsp;&nbsp;D:"+data.exercise[i-1].answer.D+"<br /></div></div>";
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





