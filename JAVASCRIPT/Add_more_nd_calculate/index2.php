<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table id="mytable"   class="table table-striped">
 
</table>
<script>

let users = [
{
  id : "1",
  FirstName : "Zack",
  LastName  :"Zakir",
  Phone_Number :"7010223343"
},
{
  id : "2",
  FirstName : "Keerthi",
  LastName  :"U",
  Phone_Number :"7010701012"
},
{
  id : "3",
  FirstName : "Deepi",
  LastName  :"Puppy",
  Phone_Number :"7056454456"
},
{
  id : "4",
  FirstName : "Elephant",
  LastName  :"Z",
  Phone_Number :"7767543243"
},
{
  id : "5",
  FirstName : "Romeo",
  LastName  :"Z",
  Phone_Number :"7010224443"
}
];
// let table ='<table border="1">';
// table += `<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>PHONE NUMBER</th></tr>`;
// users.map(function(element){
//   table = table + `<tr>`;
//   table = table + `<td> ${element.id}</td>`;
//   table = table + `<td> ${element.FirstName}</td>`;
//   table = table + `<td> ${element.LastName}</td>`;
//   table = table + `<td> ${element.Phone_Number} </td>`;
//   table +=  `</tr>`;
//   table += "</table>": 
// })


// document.getElementById("mytable").innerHTML=table;
let table;
table += `<tr><th>ID</th><th>FIRST NAME</th><th>LAST NAME</th><th>PHONE NUMBER</th></tr>`;
users.map(function(element){


        table = table + `<tr>`;
        table = table + `<td> ${element.id}</td>`;
        table = table + `<td> ${element.FirstName} </td>`;
        table = table + `<td> ${element.LastName}</td>`;
        table = table + `<td> ${element.Phone_Number}</td>`;
        table += `</tr>`;
       

    })

    document.getElementById("mytable").innerHTML=table;

    </script>
</body>
</html>
