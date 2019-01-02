<!--User story creation-->

<!DOCTYPE html> 
<html> 

<head>
<link rel="stylesheet" type="text/css" href="css/main_bryan.css">
</head>

<body> 
<h1>创建用户故事</h1> 
<hr />

<?php 
//echo "Hello World!\n"; 
$story_roles=array("系统管理员","项目经理","PMO","项目成员","管理层","测试");
echo "作为<select>";
foreach ($story_roles as $value)
{
   print "<option value=$value>$value</option>\n";
}

echo "</select>角色";
?> 

</body> 
</html>