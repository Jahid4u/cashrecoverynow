<?php
if(session_id() == ''){
    session_start( ) ;
}
//=========List of Passwords ==============
$report_11 = "4450";

$report_12 = "2260";

$report_13 = "7780";

$report_14 = "6690";

$report_15 = "3370";

$report_16 = "1160";

$report_17 = "8870";

//=========Ends List of Passwords ==============

if(isset($_POST["curr_file"])){
    
   if($_POST["curr_file"]=="report-11.php"){
       if($_POST["password"]==$report_11){
           $_SESSION["report_11"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }elseif($_POST["curr_file"]=="report-12.php"){
       if($_POST["password"]==$report_12){
           $_SESSION["report_12"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }if($_POST["curr_file"]=="report-13.php"){
       if($_POST["password"]==$report_13){
           $_SESSION["report_13"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }if($_POST["curr_file"]=="report-14.php"){
       if($_POST["password"]==$report_14){
           $_SESSION["report_14"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }if($_POST["curr_file"]=="report-15.php"){
       if($_POST["password"]==$report_15){
           $_SESSION["report_15"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }if($_POST["curr_file"]=="report-16.php"){
       if($_POST["password"]==$report_16){
           $_SESSION["report_16"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }if($_POST["curr_file"]=="report-17.php"){
       if($_POST["password"]==$report_17){
           $_SESSION["report_17"] = 1;
           header( "location:../".$_POST["curr_file"]) ;
       }else{
           $_SESSION["msg"] = "Invalid Password";
           header( "location:../".$_POST["curr_file"]) ;
       }
       
   }
}


function display_form($curr_file){
   $msg =""; 
   if(isset($_SESSION["msg"])){
       $msg= "<div style='text-align:center; color:red;margin-bottom:10px'>".$_SESSION["msg"]."</div>";
       unset($_SESSION["msg"]);
   }
    
   $form = '
       <tr>
            <td colspan="3" style="text-align:center"> 
             <form action="common/report_pass.php" method="post">  
                <br>
                <h3>Please enter the password listed in your letter to view your report!</h3> '.$msg.'
                <input type="password" name="password" style="width:300px;height:27px;" placeholder="Enter Password"><br/><br/>
                <input type="hidden" value="'.$curr_file.'" name="curr_file">
                <input type="submit" value="Submit" class="btn"> <br><br>
             </form>
            </td>
      </tr>      
  ';
   return $form;
}


?>