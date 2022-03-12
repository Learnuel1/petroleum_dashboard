<?php
session_start();
if(!isset($_SESSION["LoggedIn"])){
  header("Location:./login.php");
}

$message="";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>pupprice</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" > 
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="nav"> 
        <a class="logo-icon" href="../index.php"><img src="../icons/pumprice-icon-3.png"> </a> 
    <div class="log-infor"> 
    </div> 
    </section>
 
    <section class="main-content"> 
        <div class="side-bar">
            <div class="user-details">
                <div class="text">
                    <h4 class="text-heading"><strong>Email</strong> </h4>
                    <h3 class="text-details"> 
                      <?php echo $_SESSION["Email"]; ?></h4>
                    <h4 class="text- heading"> <strong>Username</strong></h4>
                </div> 
            </div>
            <a class="logout-icon" href="../index.php">Logout </a>
           
            <div class="items">
                <ul class="btn">
                    <li class="btn-list active-btn" id="dashboard">
                        <a class=" btn-list-item active-list" href="./dashboard.php" >Dashboard</a>
                    </li> 
                    <li class="btn-list"  >
                        <a class="btn-list-item"  id="addProduct">New product</a>
                    </li>
                    <li class="btn-list" id="">
                        <a class="btn-list-item" href="./#">Update price</a>
                    </li>
                    <li class="btn-list"id="">
                        <a class="btn-list-item" href="./#">Market</a>
                    </li>
                    <li class="btn-list"id="">
                        <a class="btn-list-item" href="./#">Profile</a>
                    </li>
                    <li class="btn-list"id="">
                        <a class="btn-list-item" href="./#">Account</a>
                    </li>
                </ul>
            </div>
        </div> 
        <div class="content">
        <div class="notification">
        <h6 class="notify-text" id="login-error"><small></small></h6>
        </div>
        <div class="card">
            <div class="card-body">
               <p class="heading-text">
                <strong>Current price of products</strong> 
               </p>  
               <table class="table">
  <thead>
    <tr> 
      <th scope="col">Product</th>
      <th scope="col">Symbol</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    
    <tr > 
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr> 
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
     
  </tbody>
</table>
            </div>
        </div>
         
        </div>
        </div> 
    </section>
    
  <!-- Button trigger modal -->
  <button type="button" id="addProduct_model" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable ">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="staticBackdropLabel">Add Product</h4> 
          <button type="button" id="btn-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="form-group1"> 
        <h5 class="mb-2 text-muted">Create new product details</h5>
                         <lable for="InputEmail">Product name</lable>
                         <input type="text"class="form-control" id="ProductName" aria-describedby="ProductName" placeholder="Enter product name" name="product"> 
        </div>
        <div class="form-group1"> 
              <label for="Symbols">Select symbol</label>
              <select id="symbols" class="form-control">
                  <option value="select">Select</option>
                  <option value="AGO">AGO</option>
                  <option value="DSK">DSK</option>
                  <option value="Kero">Kero</option>
                  <option  value="Oil">OiL</option>
              </select> 
            </div>
            <div class="form-group1"> 
            <lable for="checkbox">Status </lable>
          <input class="form-check-input" type="checkbox"  id="status" value="Avaliable" checked> 
          <label class="form-check-label" for="flexSwitchCheckDefault">Avaliable</label>
            </div>
            <div class="form-group1"> 
                  <lable for="InputPrice">Price</lable>
                    <input type="number" class="form-control" id="Price" aria-describedby="price" placeholder="Enter product price" name="price">   
            </div> 
            <div class="form-group1">
               <h6 class="form-group1" id="error"><small></small></h6> 
              </div>
              <div class="form-group1">
              <button type="button" id="btn-save-product" class="btn btn-primary btn-block" name="save">Save</button>   
              </div> 
        </div>
        
      </div>
      </div>
    </div>
  </div> 


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="notification_model" data-bs-toggle="modal" data-bs-target="#notification_modal"></button>

<!-- Modal -->
<div class="modal fade" id="notification_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Completed</h5>
        
      </div>
      <div class="modal-body">
        <h5>Product added successfully</h5>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-notification" class="btn btn-secondary custome" data-bs-dismiss="modal">Ok</button> 
      </div>
    </div>
  </div>
</div>
 
     
  <section class="footer-section">
      <footer class="footer">
            <div class="footer-content">
              <p class="copyright">
                copyright &copy;2021 final year project by 19h/0051/cs-
                All Rights Reserved.
              </p>
              
            </div>
            <div class="social-link">
              <a class="icons"  href="www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a> 
                <a class="icons" href="www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a> 
                <a class="icons"href="www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a> 
              </div>
        </footer>
      </section>
          
          <script>

                  window.onload=
            

            $(document).ready(function(){
              var message= document.querySelector("#addProduct_model");
              var notification= document.querySelector("#notification_model");
              message.style.display='none';
              notification.style.display='none'; 
              var error="";
              loadproduct();
             var status=$("#status").val(); 
             $("#status").on('change',function(){ 
                if($(this).prop('checked')){
                  status=$("#status").val(); 
                }else{
                  status="Not";
                } 
             });
              $("#addProduct").on('click',function(){ 
                $("#addProduct_model").trigger('click');
              });
 

              $("#btn-save-product").on('click',function(){ 
                var product=$("#ProductName").val(); 
                var symbol=$("#symbols").val(); 
                var price=$("#Price").val(); 
                var usertype ="<?php echo $_SESSION["UserType"]; ?>";

                 if(product =="" || product==null){
                   error="Provide product name";
                 }else if(symbol=="select"){
                   error="Select product symbol";
                 }else if(price=="" ||price==null){
                   error="Provide product price";
                 }else if(price<=0){
                   error="invalid price";
                 }else if(Number.isNaN(price)){
                    error="Invalid character";
                 } else{
                  const input = $('#Price')[0]
                      var dotPos = null;
                      input.oninput = function(e) {
                      if (e.data === '.') {
                        dotPos = input.value.length
                      }
                      }
                      
                      var value = input.value
                      if (value.includes('.')) {
                        dotPos = value.indexOf('.')
                      } else if (!value.includes('.') && dotPos === null) {
                        input.value += '.00'
                      }
                      if (dotPos !== null) {
                        var sliced = value.slice(dotPos + 1)
                        if (sliced.length > 2) {//round up to 2dp
                        input.value = Number(value).toFixed(2)
                        } else if (sliced.length === 1) {
                        input.value += '0'
                        } else if (sliced.length === 0) {
                        input.value += '.00'
                        }
                      }
                    
                 }
  
                if(error!=""){
                  $("#error").html(error);
                  error="";
                }else{
                    $.ajax({
                        url:'../functions/Helper.php',
                        method:'POST',
                        data:{
                          add_product:1,
                          product:product,
                          symbol:symbol,
                          status:status,
                          price:price,
                          usertype:usertype 
                        },
                        success:function(response){
                            if(response.Success){ 
                              $("#notification_model").trigger('click');
                            } else if (response.Error) {
                              $("#error").html(response.Error);
                            }
                        },
                        dataType:'json'
                     });

                }
              });
              $("#ProductName").on('keydown',function(){ 
                erro="";
                $("#error").html(error);
              });
              $("#symbols").on('click',function(){ 
                erro="";
                $("#error").html(error);
              });
              $("#Price").on('click',function(){ 
                erro="";
                $("#error").html(error);
              });
              $("#btn-close").on('click',function(){ 
                erro="";
                $("#error").html(error);
              });
              //clear input fields
              $("#btn-notification").on('click',function(){
                 $("#ProductName").value=""; 
                 $("#symbols").value="select"; 
                 $("#Price").value=""; 
                 loadproduct();
              });

              //load products
              function loadproduct() {
              var userid="<?php echo $_SESSION["UserType"];  ?>";
                
                $.ajax({ //from this block down is not running
                  url:'../functions/Helper.php',
                  method:'POST',
                  data:{load_product:1, 
                    userid:userid
                     },

                  success:function(response){
                    console.log(response); 
                    if(response.Error){

                    }else{ 
                       for(const res in response){
                         for(const data in res){
                      var row ="<tr><td>" +data.Name+ "</td><td>" + data.Symbol+ "</td><td" +data.Price +"</td><td>"+data.Status +"</td></tr>"; 
                       $("table tbody").append(row);
                         }
                        }
                      }
                       
                  },
                  dataType:'json'
                });
              }
            }); 
          </script>
          <script src="../js/bootstrap.min.js"></script>
</body>
</html>