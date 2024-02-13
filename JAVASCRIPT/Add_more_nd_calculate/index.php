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
    // function add(){
    // const input = document.createElement("input");
    // input.setAttribute("type", "text");
    // document.body.appendChild(input);
    // }
    // function add(){
    //  const input = document.createElement("input");
    //  input.setAttribute("type","text");
    //  document.body.appendChild(input);
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
 
               



             
                    // var removebtn = document.createElement('input');
                    // removebtn.classList.add('btn','btn-danger','Removebtn');
                    // removebtn.id="btn"+index;
                    // removebtn.onclick = function remove() {
                    //   document.getElementById("myTable").deleteRow(2);
                    // };
                    
                    //  removebtn.setAttribute("type","button")
                    //  removebtn.setAttribute("value","-")
                    //  cell9.appendChild(removebtn);

                    //  index++;

                    //  var listitems= row.querySelectorAll("input");
       
                    // for (i=0; i<listitems.length; i++) {
                    // listitems[i].setAttribute("oninput", "calculate('"+row.id+"')");
                    // }
                
          
                    }
//                     function sumofunittotal() {
//     var total = 0;
//     var cusid_ele = document.getElementsByClassName('form-control');
//     for (var i = 0; i < cusid_ele.length; ++i) {
//     if (!isNaN(parseInt(cusid_ele[i].value)) )
//     total += parseInt(cusid_ele[i].value);  
//     }
//     document.getElementById('total').value=total;
// }
// function sum_total() {
//     var totalSum = 0;
//     var calcTotalSum = document.getElementsByClassName("form-control");
//     var totalItems = calcTotalSum.length;
//     alert(totalItems);
//     var i = 0;
//     while(i < totalItems) {
//         if (calcTotalSum[i].value !== "") {
//             totalSum = totalSum + parseInt(calcTotalSum[i].value);
//         }
//         i += 1;
//     }
//     if(totalSum > 0) {
//         console.log("Total Sum is: ", totalSum);
//         document.getElementById('total').value=total;
//     }
// }

// function sum_total() {
//     // Creating array
//     // var arr = [4, 8, 7, 13, 12]
  
//     // Creating variable to store the sum
//     var sum = 0;
//     var arr = document.getElementsByClassName("form-control");
//     alert(arr);
//     // Running the for loop
//     for (let i = 0; i < arr.length; i++) {
//         sum += arr[i];
//     }
  
//     document.write("Sum is " + sum) // Prints: 44
// }
 </script>
  <!-- <form class="" action="index.html" method="post">
        <input type="text" name="array[]" value=""  class="form-control"/><br>
        <input type="text" name="array[]" value="" class="form-control"/><br>
        <input type="text" name="array[]" value=""  class="form-control"/><br>
        <input type="text" name="array[]" value="" class="form-control"/><br>
        <input type="text" name="array[]" value="" class="form-control"/><br>
        <button type="button" name="button" onclick="Geeks()">
            Submit
        </button>
    </form> -->
    
 
    <p id="par"></p>
 
    <script type="text/javascript">
    //     var k = "The respective values are :";
    //     function Geeks() {
    //         var calcTotalSum = document.getElementsByClassName("form-control");
    //         var calcTotalSum1 = document.getElementsByClassName("form-control1");
 
    //         // for (var i = 0; i < input.length; i++) {
    //         //     var a = input[i];
    //         //     k = k + "array[" + i + "].value= "
    //         //                        + a.value + " ";
    //         // }
 
    // var totalItems = calcTotalSum.length;
    // var totalItems1 = calcTotalSum1.length;
    // alert(totalItems);
    // alert(totalItems1);
    // var i = 0;
    // var j = 0;

    // while(i < totalItems) {
    //     if (calcTotalSum[i].value !== "") {
    //         totalSum = totalSum + parseInt(calcTotalSum[i].value);
    //     }
    //     i += 1;
    // }

    // document.getElementById("par").innerHTML = totalSum;
          
    //         document.getElementById("po").innerHTML = "Output";
    // //         if(totalSum > 0) {
        
    // // }
    //     }
    </script>
 <script type="text/javascript">
// function sumofunittotal() {
//     var total = 0;
//     var cusid_ele = document.getElementsByClassName('inputtosum');
//     for (var i = 0; i < cusid_ele.length; ++i) {
//     if (!isNaN(parseInt(cusid_ele[i].value)) )
//     total += parseInt(cusid_ele[i].value);  
//     }
//     document.getElementById('total').value=total;
// }

// function onlynumber(e) {
//     if (e.shiftKey === true ) {
//     if (e.which == 9) {
//     return true;
//     }
//     return false;
//     }
//     if (e.which > 57) {
//     return false;
//     }
//     if (e.which==32) {
//     return false;
//     }
//     return true;
// }
function updateInput() {
 
  var titles = $('input[name^=name]').map(function(idx, elem) {
  
                // return $(elem).val() ;
                return parseInt($(elem).val());
            }).get();

           
// alert(titles);


var sum = titles.reduce(function(val1, val2) {
    return val1 + val2;
});
alert(sum);
//   alert(x.value);
//   for(var i = 0; i < x_names.length; i++) {
//     alert(x_names[i].value)
//     sum += parseInt(document.getElementsByName('name' + i)[0].value);
//     sum += parseInt(x_names[i].value);  

//   }
//   alert(sum);
//   document.getElementById('total').value=sum;


//   var x_names1 = document.getElementsByClassName("form-control1");
//   var sum1 = 0;

// for(var j = 0; j < x_names1.length; j++) {
//     alert(x_names1[j].value)

//     sum1+= parseInt(x_names1[j].value);  
}
//   alert(sum1);

//   document.getElementById('total1').value=sum1;
//   document.getElementById('maxvalue').value = Math.max(sum,sum1);






</script>


</body>

</html>