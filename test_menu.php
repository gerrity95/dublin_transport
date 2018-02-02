<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<script type="text/javascript">
window.onload=function() {
var other = document.getElementById('other');
other.style.display = 'none';
document.form1.select1.onchange = function() {
    other.style.display =(this.value=='other')? '' : 'none';
    };
};
</script>

<style type="text/css">
* {margin:0;padding:0;}
</style>

</head>
<body>
<form action="#" method="post" name="form1">
<div>
<select name="select1">
<option value="foo">foo</option>
<option value="bar">bar</option>
<option value="other">other</option>
</select>
<label id="other">other<input type="text" name="other"></label>
</div>
</form>
</body>
</html>
