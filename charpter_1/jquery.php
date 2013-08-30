<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JQuery</title>
<meta http-equiv=Content-Type content="text/html;charset=utf-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">
</script>	
</head>
<script type="text/javascript">
function del_blacklist(id) {
	$('.div1').remove();
	return false;
}

</script>

<div id='div1'>
<p>哈哈</p>
<a href="javascript:void(0);" class="retry" onclick="if(confirm('确定删除该黑名单用户吗？')) del_blacklist(1);">解封</a>
</div>
<div id='div2'>
<p>呵呵</p>
<a href="javascript:void(0);" class="retry" onclick="if(confirm('确定删除该黑名单用户吗？')) del_blacklist(2);">解封</a>
</div>
</html>
