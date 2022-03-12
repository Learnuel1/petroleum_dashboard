<?php 
 include_once("../Config/Accessdata.php");

  class Product{
    public $Error_log=null;

//check product exist
public function product_exist($product,$usertype,$conn){
    $result=$conn->query("SELECT Name FROM products WHERE Regid='$usertype' AND Name='$product'");
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
}
//check if symbol exist
public function symbol_exist($symbol,$usertype,$conn){
    $result=$conn->query("SELECT Name FROM products WHERE Regid='$usertype' AND Symbol='$symbol'");
        if($result->num_rows>0){
            return true;
        }else{
            return false;
        }
}

public function save($product,$symbol,$status,$price,$usertype,$conn){
    $query="CALL add_product('$product','$usertype','$symbol','$status','$price') "; 

    if (mysqli_query($conn, $query)) { 
                $this->Error_log=null;
    } else {
        $this->Error_log= $query . "<br>" . mysqli_error($conn);
    }

   
}
    //GET CURRENT PRICE OF PRODUCTS
    public function current_price($usertype,$conn){
        $product =$conn->query("SELECT DISTINCT Proid FROM view_product WHERE Userid='$usertype'");
        if($product->num_rows>0){
             $rows= $product->fetch_assoc();
            foreach($rows as $row){

            }
        } 
  }

  public function get_product($usertype,$conn){
    //$product=$conn->query("CALL sp_get_products('$usertype')"); 
    $product=$conn->query("SELECT * FROM  view_product WHERE Userid='$usertype'");
     
    if($product->num_rows>0){ 
       
        while($row = $product->fetch_assoc()){ 
                $result[] =array("Proid"=> $row["Proid"], "Name"=>$row["Name"],"Status"=>$row["Status"],"Price"=>$row["Cost"],"Symbol"=>$row["Symbol"]);
        } 
        return $result;
          } else{
            return $this->Error_log= mysqli_error($conn);;
          }
        }
}
?>