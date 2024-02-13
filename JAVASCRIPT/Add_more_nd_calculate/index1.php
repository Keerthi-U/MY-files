<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

      </style>
</head>
<body>
<form id="form">
<table id="myTable" class="table table-bordered">
  <!-- firstname: <input name="name[]" value=""  id="txtfirst"  onchange="myFunction(this.value)"  type=text> -->
  <!-- <br>lastname: <input name=firstn value="b" type=text>
  <br>zipcode: <input name=zip value="c" type=text>
  <br>ip: <input name=ip value="127.0.0.1" type=text disabled> -->
  <input type="text" id="txtfirst"   name="fruits[]">

<button id="button">Click</button>
  <br><input onclick="process()" name=button type=button value="register">
 <button onClick="insertRow()">add More</button></td>
        </table>
</form>

<script>
var fruits;

document.getElementById("button").addEventListener("click", () => {

   //fruits is now a NodeList
   var content = document.elements["name[]"].value;

for (var i = 0; i < content.length; i++) {
  alert(content[i].value);
};
});
</script>

<script>
// function  () 
// {
//   alert('ki');
//   var inputs = Array.from(input.elements)

//   const names = inputs.map(e => e.name)

//   alert(names)
// }
// function myFunction(){

//   alert();

//   for(var i=0; i<val[i].length; i++){
//     alert(val[i].value);
//   }
// }
var index = 0;
    function insertRow(){
        alert('hi');
        index += 1;
                var table=document.getElementById("myTable");
                var row=table.insertRow(table.rows.length);
                 row.id="rows"+index+"";

                   var cell1=row.insertCell(0);
                 
                   var t1=document.createElement("input");
                  
                    t1.id = "txtfirst"+index;
                   
                    t1.setAttribute("class", "form-control");
                    t1.setAttribute("name", "name");
                    t1.setAttribute("id", "txtfirst");
                    t1.setAttribute("type", "text");
                    t1.setAttribute("placeholder", "Weight");
                    
                  

    

                    cell1.appendChild(t1);

                    
    }
</script>
</body>
</html>