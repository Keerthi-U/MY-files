<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <title>Document</title>
    <style>
        :root{
    --link-color: #6C4BB4;
    --primary-color-opacity: #e9d5ff;
    --white-shade: #f0f8ff;
    --secondary-color:#1e293b;
    --primary-padding: 8px;
    --pilled-shape-radius: 10px;
    --color1: #36EB84;
    --color2: #2BCDB5;
    --primary-gradient: linear-gradient(to right,var(--color2), var(--color1))
}
.javascript-max {
    display: flex;
    width: 100%;
    justify-content: center;
    height: 100vh;
    align-items: center;
    text-align: center;
}
.add_more {
    width: 50%;
    background: aliceblue;
    padding: 68px;
    text-align: left;
}
input[type="text"], input[type="password"]{
    padding: var(--primary-padding);
    width: 222px;
    border-radius: var(--pilled-shape-radius);
    border: none;
    background: #bfe1cd;
    color: var(--secondary-color);
    outline: none;
    border: 1px solid transparent;
}
@media only screen and (max-width: 300px) {
    input[type="text"], input[type="password"] {
        width: 200px;
    }
  }
        </style>
</head>
<body>
    <div class="javascript-max">
      
    <div class="add_more">
          <h2>JS CALCULATOR</h2>
        <table id="myTable" class="table table-bordered">
       
       <td> <input type="text" id="txtfirst" name="name[]"  placeholder="Weight"  onchange="updateInput()"  class="form-control input-sm "/></td>
     
       <td>  <input type="text" id="txtfirst" name="age[]"   placeholder="Quantity"  class="form-control1 input-sm "  /></td>
       <td>  <button onClick="insertRow()">add More</button></td>
        </table>
        <br>
<button id="button" value="Add" onClick="sum_total();">Submit</button>
<br>
<br>
<div class="resultq">
    
</div>
<div class="result">
 
    <label> Weight </label>
    <input name="total" type="text" id="total" value="" >
   

    <label> Quantity </label>
    <input name="total" type="text" id="total1" value="">

   <label> Max value </label>
   <input name="total" type="text" id="maxvalue" value="">





</div>

</div>
</div>




<script>

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
                    t1.setAttribute( "onchange", "updateInput()" );
                    t1.setAttribute("placeholder", "Weight");
                    
                  

    

                    cell1.appendChild(t1);

                    var cell2=row.insertCell(1);

                    var t2=document.createElement("input");
                 
                    t2.id = "txtsecond"+index;
                    t2.setAttribute("name", "age");
                    t2.setAttribute("type", "text");
                    t2.setAttribute("class", "form-control1");
                    t2.setAttribute("id", "txtsecond");
                    t2.setAttribute("placeholder", "Quantity");
                    cell2.appendChild(t2);
 
               }

    
 

    </script>
 <script type="text/javascript">

function updateInput() {
 
  var titles = $('input[name^=name]').map(function(idx, elem) {
               
    var result = 0;
                          $(elem).val();
                return   result = result + +elem.value;
            }).get();
// Array.from(document.querySelectorAll('.form-control')).map(x => x.value)
alert(titles);
 



  
//   for(var i = 0; i < x_names.length; i++) {
//     alert(x_names[i].value)
    // sum += parseInt(document.getElementsByName('name' + i)[0].value);
    // sum += parseInt(x_names[i].value);  

  }
//   alert(sum);
//   document.getElementById('total').value=sum;


//   var x_names1 = document.getElementsByClassName("form-control1");
//   var sum1 = 0;

// for(var j = 0; j < x_names1.length; j++) {
//     alert(x_names1[j].value)

//     sum1+= parseInt(x_names1[j].value);  
// }
//   alert(sum1);

//   document.getElementById('total1').value=sum1;
//   document.getElementById('maxvalue').value = Math.max(sum,sum1);






</script>


</body>

</html>