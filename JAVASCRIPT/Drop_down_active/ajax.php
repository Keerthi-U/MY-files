<?php
include_once('header.php');
?>

<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
  
    <!-- INCLUDING JQUERY-->
    <script src=
"https://code.jquery.com/jquery-3.5.1.js">
    </script>
  
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 
                'Gill Sans MT', ' Calibri', 
                'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    
    <section>
        <h1>GeeksForGeeks</h1>
  
        <!-- TABLE CONSTRUCTION-->
        <table id='table'>
            <!-- HEADING FORMATION -->
            <tr>
                <th>GFG UserHandle</th>
                <th>Practice Problems</th>
                <th>Coding Score</th>
                <th>GFG Articles</th>
            </tr>
  
            <script>
                $(document).ready(function () {
  
          
                    $.getJSON("dat.json", 
                            function (data) {
                           
                                $.each(data, function(index, element) {
           {
                alert(index);
              

             

            }
        });
            
//  $.each(data, function(i, item) {

//     console.log(data);
// //   if (item.date[1]) {
// //       alert(item.data.name);
// //    }
// });


                                var tbl=$("<table/>").attr("id","mytable");
    $("#div1").append(tbl);

    // for(var i=0;i<hh.length;i++)
    // {
    //     var tr="<tr>";
    //     var td1="<td>"+hh[i]["student_id"]+"</td>";
    //     var td2="<td>"+hh[i]["name"]+"</td>";
    //     var td3="<td>"+hh[i]["email"]+"</td>";
    //     var td4="<td>"+hh[i]["course"]+"</td></tr>";

    //    $("#table").append(tr+td1+td2+td3+td4); 

    // } 

                                
                    });


   
  
                });
                var data = [
  {
    "products": "Cars",
    "brands_values" : [
      {"brand":"fiat","value":1},
      {"brand":"bmw","value":2}
    ]
}];

$.each(data, function(i, item) {
  if (item.products) {
    //   alert(item.products);
   }
});

            </script>
    </section>
</body>
  
</html>