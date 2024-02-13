<?php
include_once('header.php');
?>


<?php
$jsonurl = "./dat.txt";

$json_string = file_get_contents($jsonurl);
$json = json_decode($json_string, true);
var_dump($json['data']);
?>


<h1> Multidimensional Array Search By Value Using PHP </h1>  
<table border="1" width="700">  
    <tr>  
        <td>ID</td>  
        <td>Name</td>  
        <td>Email</td>  
        <td>Address</td>  
    </tr> 

<?php foreach ($json['data']  as $key => $value): ?>  
    <tr>  
        <td><?php echo $value['student_id'] ?></td>  
        <td><?php echo $value['name'] ?></td>  
        <td><?php echo $value['email'] ?></td>  
      
       
        <?php endforeach ?>  
</table> 