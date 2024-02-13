//values

//button

var addMoreBtn = document.getElementById('addMore');

var Alltotal = document.getElementById('Alltotal')

var inputdiv =document.getElementById('input-div')



//event function

var input =''

var i =0;

addMoreBtn.addEventListener('click',function(e){
  
 i +=1

    console.log(i)
  
//create Element
var Inputdivsion = document.createElement('div')

var inputElement1 = document.createElement('input')

var inputElemnt2 = document.createElement('input')

var inputElemnt3 = document.createElement('input')

var inputElemntTotal = document.createElement('input')


//adding Classes

Inputdivsion.classList.add('d-flex','my-2')


inputElement1.classList.add('form-control','value');
inputElemnt2.classList.add('form-control','value');
inputElemnt3.classList.add('form-control','value');
inputElemntTotal.classList.add('form-control','value','total-box');

//adding id


Inputdivsion.id="inputs"+i+"";

inputElement1.id="demo1";
inputElemnt2.id="demo2";
inputElemnt3.id="demo3";

inputElemntTotal.id="total"+i+"";




//function 

inputElement1.setAttribute("onkeyup","sum"+i+"()")
inputElemnt2.setAttribute("onkeyup","sum"+i+"()")
inputElemnt3.setAttribute("onkeyup","sum"+i+"()")

inputElemntTotal.value=0






//append Child

Inputdivsion.appendChild(inputElement1);

Inputdivsion.appendChild(inputElemnt2);

Inputdivsion.appendChild(inputElemnt3);

Inputdivsion.appendChild(inputElemntTotal);




inputdiv.appendChild(Inputdivsion)

console.log(inputdiv.appendChild(Inputdivsion))
  




})





//sum


function sum(){
  
  for (let i = 0; i <= 15; i++) {

    console.lo
   
  var total = document.querySelector('#inputs'+i+' #total1')



  var test = document.querySelector("#inputs"+i+" #demo1").value;
  var test1 = document.querySelector("#inputs1"+i+" #demo2").value;
  var test2 = document.querySelector("#inputs1"+i+" #demo3").value;
  
  var result =parseInt(test)+parseInt(test1)+parseInt(test2);
  
  
  if(!isNaN(result)){
   total.value = result
  
  vul = parseInt(test)+parseInt(test1)+parseInt(test2)
  
  console.log(vul)
  
  Alltotal.value=vul
  }
  
  
  }
    
  }

var vul =0;


function sum1(){
  var total = document.querySelector('#inputs1 #total1')

  
console.log(total)


var test = document.querySelector("#inputs1 #demo1").value;
var test1 = document.querySelector("#inputs1 #demo2").value;
var test2 = document.querySelector("#inputs1 #demo3").value;

var result =parseInt(test)+parseInt(test1)+parseInt(test2);


if(!isNaN(result)){
 total.value = result

vul = parseInt(test)+parseInt(test1)+parseInt(test2)

console.log(vul)

Alltotal.value=vul
}


}

//sum1
// var vul1 =0;
// function sum2(){
//   var total = document.querySelector('#inputs2 #total2')

  
// console.log(total)


// console.log("#inputs2 .demo1")
// var test = document.querySelector("#inputs2 #demo1").value;
// var test1 = document.querySelector("#inputs2 #demo2").value;
// var test2 = document.querySelector("#inputs2 #demo3").value;

// var result =parseInt(test)+parseInt(test1)+parseInt(test2);

// if(!isNaN(result)){
//  total.value = result

//  vul1=result

//  console.log()

//  Alltotal.value=vul+vul1

// }
// }

//sum2

// var vul2=0;
// function sum3(){
//   var total = document.querySelector('#inputs3 #total3')

  
// console.log(total)


// console.log("#inputs3 .demo1")
// var test = document.querySelector("#inputs3 #demo1").value;
// var test1 = document.querySelector("#inputs3 #demo2").value;
// var test2 = document.querySelector("#inputs3 #demo3").value;

// var result =parseInt(test)+parseInt(test1)+parseInt(test2);


// if(!isNaN(result)){
//  total.value = result

//  vul2=result

//  Alltotal.value=vul+vul1+vul2;

 
// }
// }

 

//sum3

// var vul3=0;
// function sum4(){
//   var total = document.querySelector('#inputs4 #total4')

  
// console.log(total)


// console.log("#inputs4 .demo4")
// var test = document.querySelector("#inputs4 #demo1").value;
// var test1 = document.querySelector("#inputs4 #demo2").value;
// var test2 = document.querySelector("#inputs4 #demo3").value;

// var result =parseInt(test)+parseInt(test1)+parseInt(test2);


// if(!isNaN(result)){
//  total.value = result
//  vul3=result

//  Alltotal.value=vul+vul1+vul2+vul3;


 
// }
// }







//total


function total(){

  var total=0;
  var loop = document.getElementsByClassName('total-box')

  for (let i = 0; i < loop.length; i++) {
    console.log(loop[i].value)
    total += parseInt(loop[i].value) 

    Alltotal.value = total    
    
  }
}

