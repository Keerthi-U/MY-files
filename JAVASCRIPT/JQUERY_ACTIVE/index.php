<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>
    if($("#content li ").hasClass("active")) 
    {
      $("#content li").parent().parent().addClass('active');
      alert("yes");
    }else{
      $("#content li").parent().parent().removeClass('active');
    }
</script>
</body>
</html>