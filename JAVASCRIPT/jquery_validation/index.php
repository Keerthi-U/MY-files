<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
.card-title {
font-weight: 300;
background: var(--blue);
padding: 17px;
font-size: 20px;
color: white;
}

#errordiv:after {
content: "\002A";
color: red;
padding-left: 3px;
font-weight: 800;
}
input.error{
    border:1px dotted red!important;
}
.error {
    color: red;
    margin-bottom: 0;
}
#imageNamee{
  display:none;
}
input:valid {
  color: navy;
}
input:invalid {
  color: red;
}
</style>
  <div class="forms">
            <div class="global-container">
                <div class="card login-form">
                  <div class="card-body cb">
                      <h3 class="card-title text-center"> <img src="Images/key.png" class="key"> Registration for Fresh Application</h3>
                       <div class="card-text card_content">
                       <form action="#" name="registration" id="registration" enctype="multipart/form-data">
                           <!-- <div class="form-row">
                                <div class="form-group col-sm-6"> 
                                <label for="first-name" class="frequried"  id="errordiv"> First Name</label>
                                    <input type="text" class="form-control form-control-sm" name="first_name" id="firstname" Placeholder="First Name">
                                </div>
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"> Last Name</label>
                                    <input type="text" class="form-control form-control-sm" name="last_name" id="lastname" Placeholder="Last Name">
                                </div>
                            </div> -->
                            <div class="form-row">
                                <div class="form-group col-sm-12"> 
                                <label for="first-name" class="erequried" id="errordiv">User Name</label>
                                    <input type="text" class="form-control form-control-sm" name="number"  id="number" Placeholder="User Name">
                                    <input type="number" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
                                    <input type="number" pattern="[1-9]{1}[0-9]{9}\d{10}"  maxlength="10" 
                                    
                                        required>
                                        <input type="number" maxlength="10"  pattern=[0-9]{1}[0-9]{9} title="Please enter exactly 10 digits" />
                                        <input class="form-control  input-md text-box single-line" id="ContactNumber" max="9999999999" min="1000000000" name="ContactNumber" required="required" type="number"  >
                                      
 <input type="text" pattern="\d{10}" title="Error: 10 digits are required." maxlength="10" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57"  />
                    
                                      </div>
                            </div>
                      


<input type="text" class="form-control"  pattern="[0-9]*" maxlength="10" minlength="10" onkeypress="return (event.charCode == 8 || event.charCode == 0) ? null : event.charCode &gt;= 48 && event.charCode &lt;= 57" >


<input type="text" class="form-control" ng-model="ticketPin" pattern="[0-9]{10}">
                            <!-- <div class="form-row">
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"  class="prequried" id="errordiv"> Password</label>
                                    <input type="text" class="form-control form-control-sm" name="password" id="password" Placeholder="Password">
                                </div>
                                <div class="form-group col-sm-6"> 
                                <label for="first-name"> Confrim Password</label>
                                    <input type="text" class="form-control form-control-sm" name="cpassword" id="cpassword" id="exampleInputEmail1" Placeholder="Confrim Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12"> 
                                   <label for="user_profile" id="label_input_image"> <p> User Profile</p>
                                    <div class=" img_input">
                                     <span class=" form-control form-control-sm" id="ch_imm"> Choose image</span>
                                     <input id="user_profile" name="user_profile"  type="file"/>
                                     <br/>
                                     <span id="imageNamee" class=" form-control form-control-sm"> </span>
                                   </div>
                                 </label>
                                </div>
                            </div> -->
                            <div class="btn-bl">
                            <button type="submit"  id="submit" class="btn btn-primary btn-block" value="Submit">Register</button>
                            </div>
                            <div class="sign-up">
                                Have already In Account <a href="login.php"> Login Here?</a>
                            </div>
                          </form>
                       </div>
                  </div>
                </div>
            </div>
         </div>
<script>
$(document).ready(function () {
//   jQuery.validator.addMethod("alphanumeric", function(value, element) {
//     return this.optional(element) || /^[^\w\d]*(([0-9]+.*[A-Za-z]+.*)|[A-Za-z]+.*([0-9]+.*))+$/i.test(value);
// }, "Letters, numbers, and underscores only please");

// $('#registration').validate({ // initialize the plugin
//     rules: {
//       first_name:{
//         required: true,
        
       
//       },
//       lastname: "required",
//       username: {
//         required: true,
//         alphanumeric: true,
       
//       }, 
//       user_profile: {
//         required: true,
       
//       },      
//       number: {
//         required: true,
//        number:true,
//         maxlength:10
//       }
//     },
//     messages: {
//       first_name: {
//       required: "Enter first name",

//      },      
//      password: {
//       required: "Enter password name",
//      },   
//      user_profile: {
//       required: "Upload User photo",
         
//      },   
//      number: {
//       required:  "Enter username ",
//       number:"Please enter numbers Only",
     
//      },
     
//     },
// });
   
// $("#submit").click(function(e){

// e.preventDefault();
// alert('hi');  // capture the click
// if($("#registration").valid()){   // test for validity
//    alert('yes');
//    var formdata = new FormData(document.getElementById('registration'));
  // alert(formdata);
//    $.ajax({
//   url: 're_insert.php',
//   data: formdata,
//   processData: false,
//   contentType: false,
//   type: 'POST',
//   success: function(data){
//     alert(data);
//           swal({ 
//           button:false,
//           icon: "Images/gif.gif",
//           timer: 2000}).then(function(){
//             // alert("test");
//             swal({ title:"Your Registeration Form Submitted Successfully",
//               icon: "success",
//               button:false,
//               timer: 2000

//             }).then(function(){
//                 window.location = "Elite.php";
//             });
//           });
//   }
// });

} else {
    // do stuff if form is not valid
}
});
    

});
</script>
  <!-- IMAGE FILE SCRIPT  -->
<!-- <script>
  let input = document.getElementById("user_profile");
  let imageNamee = document.getElementById("imageNamee");

  input.addEventListener("change", ()=>{
      let inputImage = document.querySelector("input[type=file]").files[0];
      var str =  inputImage.name;
      if (str.length > 15) {
      imgname = str.substr(0, 7) + '...' + str.substr(-7);
  }
     imageNamee.innerText = imgname;
     document.getElementById("imageNamee").style.display = "block";
  })
</script>
  -->