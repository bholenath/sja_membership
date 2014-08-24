<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>           : Member Preview Content :         </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.auto-style1 {
	font-size: small;
}
</style>
</head>
<body>
<center><table width='100%' cellpadding='0' cellspacing="0" >
<tr>
<th width='90%' style="background-color: #495A69">
<font color="#FFFFFF"><h2>SJA Alumni Association - Online Membership Form 
Preview</h2></font>
</th>
</tr>
</table>
</center>
<center>
<br>
<table style="background-color:#999999;" width="750" cellpadding="3" cellspacing="2" border="1" height="717">
<tr>
<td width="750" valign="middle" colspan="2" style="color: #003399" height="20"><font color="#000000">
Your Uploaded Photo</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<? $aExtraInfo = getimagesize($_FILES["file2"]["tmp_name"]);
       $sImage = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES["file2"]["tmp_name"]));
	   echo '<img src="' . $sImage . ' " width="170" height="120" alt="" />'; ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399" height="22"><font color="#000000">Name</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo strtoupper($_POST['name']) ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Father/Husband Name</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo strtoupper($_POST['f/h_name']) ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Postal Address</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo strtoupper($_POST['postal_address']." ".$_POST['postal_address2']
.",".$_POST['city'].",".$_POST['state'].",".$_POST['postal_code'].".".$_POST['country']) ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Permanent Address</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo strtoupper($_POST['p_name']." ".$_POST['p_name2']
.",".$_POST['city1'].",".$_POST['state1'].",".$_POST['postal_code1'].".".$_POST['country1']) ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Date of Birth</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo strtoupper($_POST['day']." / ".$_POST['month']." / ".$_POST['year']) ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Mail Id</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['email'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Phone No.</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['std']."-".$_POST['phone'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Mobile No.</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['countrycode']."-".$_POST['m_phone'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Tenure at SJA</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['from1']."-".$_POST['to1'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Class Studied</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['from']."-".$_POST['to'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Qualification Attained</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['qualification']!=" ")
{
echo strtoupper($_POST['qualification']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Occupation</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['occupation']!=" ")
{
echo strtoupper($_POST['occupation']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Amount Paid</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['amount']=="1286.75")
{
echo "<div align='left'><b>Membership Fee + Annual Subscription 	          1200.00</b><br>
	   Payment Gateway Charges	              		      77.21<br>
	   Service Tax on Gateway Charges(incl. Cess)	      9.54<br>
	 <b>Net Amount to be charged	        			  1286.75</b></div>";
	 }
	 else
	 {
echo "<div align='left'><b>Membership Fee + Annual Subscription 	          2500.00</b><br>
	    Payment Gateway Charges	              		      160.84<br>
	    Service Tax on Gateway Charges(incl. Cess)	      19.88<br>
	 <b>Net Amount to be charged	        			  2680.72</b></div>";	 
	 }
 ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Name of Spouse</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['married']!="No")
{
echo strtoupper($_POST['spouse']);
}
else echo "N/A"; ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Anniversary Date</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['married']!="No")
{
echo strtoupper($_POST['txtDate']);
}
else echo "N/A"; ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Children Name</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['married']!="No")
{
echo strtoupper($_POST['child1'] ."   ". $_POST['child2']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Index No. of School Leaving Certificate</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['yr']!=" ")
{
echo strtoupper($_POST['yr']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Self Information</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['self']!=" ")
{
echo strtoupper($_POST['self']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="300" style="color: #003399"height="22"><font color="#000000">Specialization</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['specialization']!=" ")
{
echo strtoupper($_POST['specialization']);
}
else echo "N/A"; ?> 
</td>
</tr>
<tr>
<td width="750" valign="middle" colspan="2" style="color: #003399"height="20"><font color="#000000">School Leaving 
Proof</font>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<? $aExtraInfo1 = getimagesize($_FILES['file1']['tmp_name']);
    $sImage1 = "data:" . $aExtraInfo1["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['file1']['tmp_name']));
    echo '<img src="' . $sImage1 . '" width="260" height="150" alt="" />'; ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">MerchantRefNo</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? echo $_POST['reference_no'] ?>
</td>
</tr>
<tr>
<td width="200" style="color: #003399"height="22"><font color="#000000">Membership</font></td>
<td align="left" style="color: #003399" width="500" height="22">&nbsp;&nbsp;<? if($_POST['amount']=="1286.75")
{
$membr="ANNUAL MEMBERSHIP SUBSCRIPTION";
}
else
$membr="LIFE TIME MEMBERSHIP SUBSCRIPTION"; echo $membr; ?>
</td>
</tr>
<strong>
<?php
	if (($_FILES["file2"]["type"] == "image/jpeg")
	|| ($_FILES["file2"]["type"] == "image/jpg")
	&& ($_FILES["file2"]["size"] < 100000))
	{
	if(file_exists("certificate/".$_FILES["file1"]["name"]))
	{
	echo $_FILES["file1"]["name"]." ". "already exists, kindly change your filename and upload ";
	echo "<a href=billing.php>Go Back</a>";
	exit();
	}
	else if (file_exists("upload/" . $_FILES["file2"]["name"]))
	{
	echo $_FILES["file2"]["name"] ." ". " already exists, kindly change your filename and upload. ";
	echo "<a href=billing.php>Go Back</a>";
	exit();
	}
	else
	{
	move_uploaded_file($_FILES['file1']['tmp_name'],"certificate/" .$_FILES['file1']['name']);
	move_uploaded_file($_FILES['file2']['tmp_name'],"upload/" .$_FILES['file2']['name']);
	}
	}
	else
	{
	echo "<br><br><h4><center><font color=red>Oops! Photo Size should be less than 100kb or upload the Picture in Correct Format.Please GO Back.</font></center></h4> ";
	exit();
	}
	?>
</strong>
<?php
$name2=strtoupper($_POST['name']);
$fhname2=strtoupper($_POST['f/h_name']);
if($_POST['married']!="No")
{
$spouse1=strtoupper($_POST['spouse']);
}
else $spouse1= "N/A";
if($_POST['married']!="No")
{
$anvdate=strtoupper($_POST['txtDate']);
}
else $anvdate= "N/A";
if($_POST['married']!="No")
{
$chld=strtoupper($_POST['child1'] ."   ". $_POST['child2']);
}
else $chld= "N/A";
if($_POST['occupation']!=" ")
{
$occ=strtoupper($_POST['occupation']);
}
else $occ= "N/A"; 
if($_POST['qualification']!=" ")
{
$qua= strtoupper($_POST['qualification']);
}
else $qua= "N/A"; 
if($_POST['yr']!=" ")
{
$index=strtoupper($_POST['yr']);
}
else $index= "N/A"; 
if($_POST['self']!=" ")
{
$sel=strtoupper($_POST['self']);
}
else $sel= "N/A";
if($_POST['specialization']!=" ")
{
$spe= strtoupper($_POST['specialization']);
}
else $spe= "N/A"; 
$image1=$_FILES['file2']['name'];
$image2=$_FILES['file1']['name'];
$db=$_POST['day']." / ".$_POST['month']." / ".$_POST['year'];
$address2=strtoupper($_POST['postal_address']." ".$_POST['postal_address2']
.",".$_POST['city'].",".$_POST['state'].",".$_POST['postal_code'].".".$_POST['country']);
$address3=strtoupper($_POST['p_name']." ".$_POST['p_name2']
.",".$_POST['city1'].",".$_POST['state1'].",".$_POST['postal_code1'].".".$_POST['country1']);
$phone1=strtoupper($_POST['std']."-".$_POST['phone']);
$mobile=strtoupper($_POST['countrycode']."-".$_POST['m_phone']);
$trns=strtoupper($_POST['reference_no']);
$email1=$_POST['email'];
$amount="Rs.".($_POST['amount']);
if($amount=="1286.75")
{
$membr="ANNUAL MEMBERSHIP SUBSCRIPTION";
}
else
$membr="LIFE TIME MEMBERSHIP SUBSCRIPTION";
$message="  											
<html>
<head></head>
<body>
<table width='730' style='background-color:#999999;' border='1' cellpadding='3' cellspacing='0' bordercolor='#E2E2E3'>
		  <tr><th style='background-color: #495A69' colspan='2' height='35' width='100%'><strong><font color='#F85745'><h2>  SJA ALUMNI ASSOCIATION - ONLINE MEMBERSHIP FORM  </h2></font></strong></th></tr>
		  <tr><td width='730' colspan='2' height='35'><strong>Uploaded Photo : </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''> <img src='http://sjaalumni.com/upload/".$image1." '/></a></td></tr>
		  <tr><td width='200' height='22'><strong>Name : </strong></td><td align='left' width='450'>&nbsp;".$name2."</td></tr>
		  <tr><td width='200' height='22'><strong>Father/Husband Name : </strong></td><td align='left' width='450'>&nbsp;".$fhname2."</td></tr>
          <tr><td width='200' height='22'><strong>Date of Birth : </strong></td><td align='left' width='450'>&nbsp;".$db."</td></tr>
		  <tr><td width='200' height='22'><strong>Postal Address : </strong></td><td align='left' width='450'>&nbsp;".$address2."</td></tr>
		  <tr><td width='200' height='22'><strong>Permanent Address : </strong></td><td align='left' width='450'>&nbsp;".$address3."</td></tr>
          <tr><td width='200' height='22'><strong>Mail Id : </strong></td><td align='left' width='450'>&nbsp;".$email1."</td></tr>
          <tr><td width='200' height='22'><strong>Phone No. : </strong></td><td align='left' width='450'>&nbsp;".$phone1."</td></tr>
		  <tr><td width='200' height='22'><strong>Mobile No. : </strong></td><td align='left' width='450'>&nbsp;".$mobile."</td></tr>
		  <tr><td width='200' height='22'><strong>Occupation : </strong></td><td align='left' width='450'>&nbsp;".$occ."</td></tr>
		  <tr><td width='200' height='22'><strong>Qualification : </strong></td><td align='left' width='450'>&nbsp;".$qua."</td></tr>
		  <tr><td width='200' height='22'><strong>Spouse Name : </strong></td><td align='left' width='450'>&nbsp;".$spouse1."</td></tr>
		  <tr><td width='200' height='22'><strong>Anniversary Date : </strong></td><td align='left' width='450'>&nbsp;".$anvdate."</td></tr>
		  <tr><td width='200' height='22'><strong>Children Name : </strong></td><td align='left' width='450'>&nbsp;".$chld."</td></tr>
		  <tr><td width='750' colspan='2' height='35'><strong>School Leaving Certificate : </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=''> <img src='http://sjaalumni.com/certificate/".$image2." '/></a></td></tr>
		  <tr><td width='220' height='22'><strong>Index No. of School Leaving Certificate : </strong></td><td align='left' width='450'>&nbsp;".$index."</td></tr>
		  <tr><td width='200' height='22'><strong>Tenure at SJA : </strong></td><td align='left' width='450'>&nbsp;".$_POST['from1']."-".$_POST['to1']."</td></tr>
		  <tr><td width='200' height='22'><strong>Class Studied : </strong></td><td align='left' width='450'>&nbsp;".$_POST['from']."-".$_POST['to']."</td></tr>
		  <tr><td width='200' height='22'><strong>Specialization : </strong></td><td align='left' width='450'>&nbsp;".$spe."</td></tr>
		  <tr><td width='200' height='22'><strong>About Self : </strong></td><td align='left' width='450'>&nbsp;".$sel."</td></tr>
		  <tr><td width='200' height='22'><strong>Amount Paid : </strong></td><td align='left' width='450'>&nbsp;".$_POST['amount']."</td></tr>
	      <tr><td width='200' height='22'><strong>MerchantRefNo : </strong></td><td align='left' width='450'>&nbsp;".$trns."</td></tr>
		  <tr><td width='200' height='22'><strong>Membership : </strong></td><td align='left' width='450'>&nbsp;".$membr."</td></tr>
		  </table><br>
</body>
</html>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: info@sjaalumni.com' . "\r\n";
mail("harshitbhatt14@yahoo.com, treasurer@sjaalumni.com, secretary@sjaalumni.com , juneja@lawyer.com, praveenchandhok@gmail.com","Alumni Information",$message,$headers);
?>
<tr>
<td valign="middle" colspan="2" height="24" align="center"  width="750">
<form name="form2" action="" target="_blank" method="post">
<input type="button" name="submit" onclick="window.print()" value=" Print " style="background-color:#0000CC; font-weight:bold; color:#FFFFFF;">
</form>
<form name="form3" action="https://secure.ebs.in/pg/ma/sale/pay" method="post" enctype="multipart/form-data">
<input name="account_id" type="hidden" value="<? echo $_POST['account_id'] ?>">
<input name="f/h_name" type="hidden" value="<? echo $_POST['f/h_name'] ?>">
<input name="p_name" type="hidden" value="<? echo $_POST['p_name'] ?>">
<input name="m_phone" type="hidden" value="<? echo $_POST['m_phone'] ?>">
<input name="qualification" type="hidden" value="<? echo $_POST['qualification'] ?>">
<input name="occupation" type="hidden" value="<? echo $_POST['occupation'] ?>">
<input name="from" type="hidden" value="<? echo $_POST['from'] ?>">
<input name="to" type="hidden" value="<? echo $_POST['to'] ?>">
<input name="file1" type="hidden" value="<? echo $_POST['file1'] ?>">
<input name="month" type="hidden" value="<? echo $_POST['month'] ?>">
<input name="day" type="hidden" value="<? echo $_POST['day'] ?>">
<input name="year" type="hidden" value="<? echo $_POST['year'] ?>">
<input name="married" type="hidden" value="<? echo $_POST['married'] ?>">
<input name="spouse" type="hidden" value="<? echo $_POST['spouse'] ?>">
<input name="children" type="hidden" value="<? echo $_POST['child1'] ?>">
<input name="specialization" type="hidden" value="<? echo $_POST['specialization'] ?>">
<input name="self" type="hidden" value="<? echo $_POST['self'] ?>">
<input name="file2" type="hidden" value="<? echo $_POST['file2'] ?>">
<input name="name" type="hidden" maxlength="255" value="<? echo strtoupper($_POST['name']) ?>" />
<input name="email" type="hidden" size="60" value="<? echo $_POST['email']?>" />
<input name="phone" type="hidden" maxlength="255" value="<? echo $_POST['std']."-".$_POST['phone'] ?>" />
<input name="yr" type="hidden" maxlength="255" value="<? echo $_POST['yr'] ?>" />
<input name="class" type="hidden" maxlength="255" value="<? echo $_POST['class'] ?>" />
<input name="address" type="hidden" maxlength="255" value="<? if($_POST['postal_address2']!=" ")
{
$pa=$_POST['postal_address'].",".$_POST['postal_address2'];
}
else
$pa=$_POST['postal_address']; echo strtoupper($pa); ?>"/>
<input name="postal_address" maxlength="255" type="hidden" value="<? echo $pa; ?>">
<input name="city" type="hidden" maxlength="255" value="<? echo strtoupper($_POST['city']) ?>" />
<input name="state" type="hidden" maxlength="255" value="<? echo strtoupper($_POST['state']) ?>" />
<input name="postal_code" type="hidden" maxlength="255" value="<? echo $_POST['postal_code'] ?>" />
<input name="country" type="hidden" maxlength="255" value="<? $cnt=$_POST['country'];
$l=strlen($cnt);
$rest = substr("$cnt", 0, -($l-2));
$link="http://sjaalumni.com/response.php?DR={DR}";
echo strtoupper ($rest); ?>" />
<input name="return_url" type="hidden" size="60" value="<? echo $link; ?>" />
<input name="mode" type="hidden" size="60" value="<? echo $_POST['mode']?>" />
<input name="amount" type="hidden" value="<? echo $_POST['amount']?>"/>
<input name="reference_no" type="hidden" value="<? echo  $_POST['reference_no'] ?>" />
<input name="description" type="hidden" value="<? echo $_POST['description'] ?>" /> 
<input name="secure_hash" type="hidden" size="60" value="<? $hash = "e3fe9560ae619cd0e6b6d6e33da364e3"."|".$_POST['account_id']."|".$_POST['amount']."|".$_POST['reference_no']."|"."http://sjaalumni.com/response.php?DR={DR}"."|".$_POST['mode'];
$secure_hash = md5($hash);
echo $secure_hash;?>"
<td valign="baseline" colspan="2" height="24" align="center"  width="750">
<font size="-1"> By clicking on Submit,you</font><span class="auto-style1">
	</span>
<font size="-1"> 
	 <font size="-1" class="auto-style1">agree to the
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=107&amp;Itemid=82">Terms & Conditions</a>, 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=104&amp;Itemid=82">Disclaimer</a>, 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=105&amp;Itemid=82">Privacy Policy</a> and 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=103&amp;Itemid=82">Cancellation & Refund Policy</a> of SJA Alumni Association. The Managing Committee shall scrutinise your 
	form and once accepted a Membership Number will be allotted. Simple payment 
	of Membership/Joining Fee and Annual/Life Time Subscription shall not make 
	you a member automati</font><span class="auto-style1">cally. The decision of 
	the Managing Committee Shall be final and binding</span>.</font><br>
<input type="submit" name="submit" value=" Submit " style="background-color:#0000CC; font-weight:bold; color:#FFFFFF;">
</td>
</tr>
</table>
</form>
</center>
</body>
</html>
