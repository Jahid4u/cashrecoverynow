<?php session_start( ) ; ?>
<!doctype html>
<html>
<head>
<title>About Us - Cash Recovery Now</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/about.css">

<link rel="stylesheet" href="css/common.css">

<link href='https://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>

</head>

<!--________________________

HTML markup by Zeshan Ahmed.

	fiverr: www.fiverr.com/zeshanshani
	facebook: www.facebook.com/zak.donnay
	website: www.zeshanahmed.com 
	email: premiumsrapidshares@gmail.com

 ___________________________-->

<body>
<div id="container"><!-- header starts here -->
<div class="header">
<div class="top-header center"></div>
<!-- /.top-header -->
<div class="clearfix main-header center">
<h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="Cash Recovery Now" /></a></h1>
<ul class="navbar">
<li><a href="index.html">Home</a></li>
<li><a href="is-this-real.html">Is This Real?</a></li>
<li ><a>Our Company</a></li>
<li><a href="received_a_letter.html">Received a Letter?</a></li>
<li><a href="faq.html">FAQ's</a></li>
<li><a href="cash_guarantee.html">Our Agreement</a></li>
<li><a href="news.html">News</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>

<div class="clearfix main-header center report_links" >
    Report 
    <a href="report-11.php">11 </a>,
    <a href="report-12.php">12 </a>,
    <a href="report-13.php">13 </a>,
    <a href="report-14.php">14 </a>,
    <a href="report-15.php">15 </a>,
    <a href="report-16.php">16 </a>,
    <a href="report-17.php">17 </a>
</div>

<!-- /.main-header --></div>
    
<?php include 'common/report_pass.php'; ?>    
    
<!-- header ends here --><!-- main starts here -->
<div class="main center clearfix">
<div class="content-area">
    <p></p>
    <h2>Report 11</h2>
    <table id="customers">
        <tr>
          <th>Claimant</th>
          <th>Address</th>
          <th>Amount</th>
        </tr>
        <?php 
        if(!isset($_SESSION["report_11"])){ 
        
            print display_form("report-11.php");
            
        }else{    
        ?>
        
        <tr>
          <td width="30%">Michael P Damaso</td>
          <td> 1877 Rising Glen Road Los Angeles, CA 90069 </td>
          <td width="15%">$52,400</td>
        </tr>
        <tr>
          <td>St Joseph Health Medical Center</td>
          <td>3345 Michelson Dr Ste 100 Irvine, CA 92612</td>
          <td>$63,900</td>
        </tr>
        
        <tr>
          <td>Torrance Memorial Medical Center</td>
          <td>5000 Airport Plaza Dr, Suite 150 Long Beach, CA 90815 </td>
          <td>$35,500</td>
        </tr>
        
                <tr>
          <td>Emquies, Moise and Carol A Trustees</td>
          <td>2407 La Mesa Dr Santa Monica, CA 90402 </td>
          <td>$33,600</td>
        </tr>

        <tr>
          <td>Boston Scientific Corp</td>
          <td>100 Boston Scientific Way Marlborough, MA 01752 </td>
          <td>$95,300</td>
        </tr>
        
                <tr>
          <td>Flavor Producers Inc</td>
          <td>2429 East Kemper Road Sharonvillee, OH 45241 </td>
          <td>$16,100</td>
        </tr>

        <tr>
          <td>City Charter School</td>
          <td>11625 Pico Blvd Los Angeles, CA 90064 </td>
          <td>$35,000</td>
        </tr>

        <tr>
          <td>Value Schools</td>
          <td>680 Wilshire Pl No 315 Los Angeles, CA 90017 </td>
          <td>$25,000</td>
        </tr>

        <tr>
          <td>Freeman Decorating Company</td>
          <td>1201 S Figueroa St Los Angeles, Ca 90015 </td>
          <td>$26,900</td>
        </tr>
        
                <tr>
          <td>East La Community Corp</td>
          <td>530 S Boyle Ave Los Angeles, CA 90033 </td>
          <td>$18,400</td>
        </tr>
        
        <tr>
          <td>Douglas / Hicks Law, APC</td>
          <td>8484 Wilshire Blvd., Suite 548 Beverly Hills, CA 90211</td>
          <td>$15,000</td>
        </tr>
        
        <tr>
          <td>Susan A Manley</td>
          <td>520 Guadalupe Ave No C Redondo Beach, CA 90277</td>
          <td>$14,000</td>
        </tr>
        
        
        <?php } ?>
    </table>
    

</div>
<!-- /.content-area --></div>
<!-- Main ends here --> <!-- footer starts here -->
<div class="footer">
<div class="footer-inner center clearfix">
<div class="footer-logo">
<h3>CashRecovery<span>Now</span></h3>
</div>
<!-- /.footer-logo -->
<div class="footer-credits">
<p>&copy; 2012-2021&nbsp;<strong><a href="https://CashRecoveryNow.com"> Cash Recovery Now </a></strong> All rights reserved.</p>
<p>Phone: <strong><span class="ph-no">(800) 579-5050</span></strong> <span class="f-email">Email: <strong><a href="mailto: NickCellino@CashRecoveryNow.com">NickCellino@CashRecoveryNow.com</a></strong></span></p>
</div>
<!-- /.footer-credits --></div>
</div>
<!-- footer ends here --></div>
<!-- container ends here -->
<p></p>
</body>
</html>