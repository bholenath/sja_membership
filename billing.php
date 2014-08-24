<HTML>
<HEAD>
<TITLE>E-Billing Solutions Pvt Ltd - Payment Page</TITLE>
<style type="text/css">
<!--
.error {
	color: #E12D3A;
}
-->
</style>
</HEAD>
<script language="JavaScript">
function validate(){
	var frm = document.frmTransaction;
	var aName = Array();
	aName['name'] = 'Name';
	aName['email'] = 'Email-ID';
	aName['phone'] = 'Telephone No';
	aName['m_phone']='Mobile No';
	aName['qualification']='Qualification';
	aName['occupation']='Occupation';
	aName['specialization']='Specialization';
	aName['from']='From';
	aName['to']='To';
	aName['from1']='From';
	aName['to1']='To';
	aName['yr'] = 'Index No. of School Leaving Examination';
	aName['p_name']= 'Permanent Address';
	aName['file1']='Copy of School Leaving Certificate';
	aName['postal_address']='Postal Address';
	aName['month']='Month';
	aName['day']='Day';
	aName['year']='Year';
	aName['married']='Married';
	aName['spouse']='Name of Spouse';
	aName['child1']='Name(s) of Children';
	aName['countrycode']='Country Code';
	aName['f/h_name']='Father/Husband Name';
	aName['city'] = 'City';
	aName['std']= 'Std No.';
	aName['self']= 'Self';
	aName['state'] = 'State';
	aName['postal_code'] = 'Postal Code';
	aName['country'] = 'Country';
	aName['reference_no'] = 'Reference No';
	aName['description'] = 'Description';
	aName['amount'] = 'Amount';
	aName['country1']='Country';
	aName['file2']='Photo';
	aName['txtDate']='Anniversary Date';
	aName['city1']='City';
	aName['state1']='State';
	aName['postal_code1']='Postal Code';
	
	
	
	
		
		
		for(var i = 0; i < frm.elements.length ; i++){
	
		if((frm.elements[i].value == "" )||(frm.elements[i].value=="Select Country"))
		{
						if((frm.elements[i].name=='country')||(frm.elements[i].name=="ship_country"))
					alert("Select the " + " "+ aName[frm.elements[i].name]);
					else if(frm.elements[i].name=='file1')
					alert("Please Attach " + " " + aName[frm.elements[i].name]);
					else if(frm.elements[i].name=='file2')
					alert("Please Upload " + " " + aName[frm.elements[i].name]);
					else
					alert("Enter the" + " " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
		}
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="---Select---"))
		{
						if(frm.elements[i].name=='married')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Month"))
		{
						if(frm.elements[i].name=='month')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Day"))
		{
						if(frm.elements[i].name=='day')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="Year"))
		{
						if(frm.elements[i].name=='year')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="From"))
		{
						if(frm.elements[i].name=='from')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="From"))
		{
						if(frm.elements[i].name=='from1')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="To"))
		{
						if(frm.elements[i].name=='to')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			
			if((frm.elements[i].value.length == 0)||(frm.elements[i].value=="To"))
		{
						if(frm.elements[i].name=='to1')
					alert("Select the " + aName[frm.elements[i].name]);
					else
					alert("Enter the " + aName[frm.elements[i].name]);
				frm.elements[i].focus();
				return false;
			}
			if(frm.elements[i].name=='account_id'){
			
			if(!validateNumeric(frm.elements[i].value)){
					alert("Account Id must be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}
			
			if(frm.elements[i].name=='amount'){
			if(!validateNumeric(frm.elements[i].value)){
					
			alert("Amount should be NUMERIC");
			
			frm.elements[i].focus();
			
			return false;
			}
			}
		
 
			if(frm.elements[i].name=='m_phone'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Please Enter Valid Mobile No");
			frm.elements[i].focus();
			return false;
			}
			}			
			if((frm.elements[i].name=='postal_code')||(frm.elements[i].name == 'ship_postal_code'))
			{
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}	
			
		   
			if((frm.elements[i].name=='std')){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Enter a Valid STD Number");
			frm.elements[i].focus();
			return false;
			}
			}
			
			if((frm.elements[i].name=='phone')||(frm.elements[i].name =='ship_phone')){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Enter a Valid Telephone Number");
			frm.elements[i].focus();
			return false;
			}
			}		
    	if((frm.elements[i].name == 'name')||(frm.elements[i].name == 'ship_name'))
		{
		
		if(validateNumeric(frm.elements[i].value)){
					alert("Enter your Name");
			frm.elements[i].focus();
			return false;
			}
		}
		
				
		if(frm.elements[i].name=='ship_postal_code'){
			if(!validateNumeric(frm.elements[i].value)){
					alert("Postal code should be NUMERIC");
			frm.elements[i].focus();
			return false;
			}
			}		
    
			
							
		if(frm.elements[i].name == 'email')
		{
				if(!validateEmail(frm.elements[i].value))
				{
					alert("Invalid input for " + aName[frm.elements[i].name]);
					frm.elements[i].focus();
					return false;
				}
				}
				}
	   if(frm.agree.checked != true)
	   {
	   		   alert("Please Agree to the Conditions");
			   frm.agree.focus();
			   return false;
	   }
		
		return true;
			
	 }

	function validateNumeric(numValue){
		if (!numValue.toString().match(/^[-]?\d*\.?\d*$/)) 
				return false;
		return true;		
	}

	function validateEmail(email) {
    //Validating the email field
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	//"
    if (! email.match(re)) {
        return (false);
    }
    return(true);
	}

	
	Array.prototype.inArray = function (value)
	// Returns true if the passed value is found in the
	// array.  Returns false if it is not.
	{
    var i;
    for (i=0; i < this.length; i++) {
        // Matches identical (===), not just similar (==).
        if (this[i] === value) {
            return true;
        }
    }
    return false;
	};

</script>
<script language="javascript">

function showfield(name){
  if(name=="Yes"){
  document.getElementById('div1').innerHTML='Anniversary  Date :&nbsp;<input name="txtDate" value=" " onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20" />(mm/dd/yyyy)';
  document.getElementById('div2').innerHTML='Name  Of   Spouse :&nbsp;<input name="spouse" value=" " onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20"/>';
  document.getElementById('div3').innerHTML='Name Of Child1 :&nbsp;&nbsp;<input name="child1" value=" " onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20"/>';
  document.getElementById('div4').innerHTML='Name Of Child2 :&nbsp;&nbsp;<input name="child2" value=" " onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20"/>';
  }
  else
  {
  document.getElementById('div1').innerHTML='';
  document.getElementById('div2').innerHTML='';
  document.getElementById('div3').innerHTML='';
  document.getElementById('div4').innerHTML='';
}
}
</script>
<script language="javascript">
	
	function FillBilling() {
	var form = document.getElementById("frmTransaction");
  	if(form.same.checked == true) {
    form.p_name.value = form.postal_address.value;
	document.getElementById("p_name").readOnly = true;
	form.p_name2.value = form.postal_address2.value;
	document.getElementById("p_name2").readOnly = true;
	form.city1.value=document.getElementById("city").value;
	document.getElementById("city1").readOnly = true;
	form.state1.value=document.getElementById("state").value;
	document.getElementById("state1").readOnly = true;
	form.postal_code1.value=document.getElementById("postal_code").value;
	document.getElementById("postal_code1").readOnly = true;
	var drop1=document.getElementById("country");
	var drop=document.getElementById("country1");
	var ind=drop1.options[drop1.selectedIndex].value;
	drop.value=ind;
	drop.setAttribute('readonly', 'ind');
	exit();
  }
  else 
  {
  	form.p_name.value="";
	document.getElementById("p_name").readOnly = false;
	form.p_name2.value="";
	document.getElementById("p_name2").readOnly = false;
	form.city1.value="";
	document.getElementById("city1").readOnly = false;
	form.state1.value="";
	document.getElementById("state1").readOnly = false;
	form.postal_code1.value="";
	document.getElementById("postal_code1").readOnly = false;
	drop.value="Select Country";
	exit();
  }
}

</script>
<script type="text/javascript">
function blank(a) { if(a.value == a.defaultValue) a.value = ""; }
function unblank(a) { if(a.value == "") a.value = a.defaultValue; }
</script>
<BODY bgcolor="#DEE1D7" >
<center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr>
   <th width='90%' style="background-color: #495A69">
   <font color="#FFFFFF"><h2 class='co'>ONLINE PAYMENT</h2></font></th></tr>
  </table>
</center>
  <br>
	  <center><img src="../logo.png" width="140" height="125"><h3><font color="#FF0000">SJA Alumni Association</font></H3></center>  
       <center>
	   <table width="752" height="35" border="0" cellpadding="2" cellspacing="2">
	   <tr>
           <th height="53" width="600" style="background-color: #FCA116;"><div align="center">
             <font color="#FFFFFF" size="4"><center>NEW MEMBERSHIP REGISTRATION FORM</center></font></div></th>
         </tr>    
	</table>
  </center>
<form  method="post" action="preview.php" name="frmTransaction" id="frmTransaction" target="_blank" onSubmit="return validate()" enctype="multipart/form-data">
  <center><div title="New Membership Registration Form">
  <table style="background-color:#DCDF5E;" width="750" cellpadding="3" cellspacing="2" border="1" height="717">
 <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Name</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
	<input name="name" title="Name is Required" type="text" maxlength="255" size="20"  /><font color="#000000">
    </font> </td>
  </tr>
  <tr>
    <td class="fieldName" width="490" height="22"><font color="#000000"><span class="error">*</span>Father/Husband Name</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input name="f/h_name" title="Father or Husband Name is Required" type="text"  maxlength="255" size="20"  /><font color="#000000">
    </font> </td>
  </tr>
  
 <tr>
    <td class="fieldName" width="300" height="22"><font color="#000000"><span class="error">*</span>Postal Address (<font size="2">used for communication</font>)</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
    <input name="postal_address" title="Postal Address is required" type="text" maxlength="255" size="50"/><font color="#000000">
    </font><br>
	<input name="postal_address2" value=" " onfocus="blank(this)" onblur="unblank(this)" title="Postal Address is not necessary" type="text" maxlength="255" size="30"/>(Optional)<font color="#000000">
    </font></td>
	
  </tr>
  <tr>
    <td class="fieldName" width="200" height="22"><font color="#000000"><span class="error">*</span>City</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input name="city" id="city" title="City is Required" type="text" size="20" /><font color="#000000">
    </font></td>
  </tr>
   <tr>
    <td class="fieldName" width="200" height="22"><font color="#000000"><span class="error">*</span>State/Province</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input name="state" id="state" title="State is Required" type="text" size="20" /><font color="#000000">
    </font>    </td>
  </tr>
  <tr>
    <td class="fieldName" width="200" height="22"><font color="#000000"><span class="error">*</span>ZIP/Postal Code</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input name="postal_code" title="Postal Code is necessary" id="postal_code" type="text" maxlength="8" size="20" /><font color="#000000">
    </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="450" height="22"><font color="#000000"><span class="error">*</span>Country</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
    <select name="country" id="country" title="Country is Required">
            <option value="Select Country">Select Country</option>
            <option value="A" disabled="disabled" style="font-size:x-small; text-align:center; ">A</option>
			<option value="Afghanistan" >Afghanistan</option>
			<option value="Albania" >Albania</option>
			<option value="Algeria"> Algeria</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola" >Angola</option>
			<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
			<option value="Argentina" >Argentina</option>
			<option value="Armenia" >Armenia</option>
			<option value="Australia" >Australia</option>
			<option value="Austria" >Austria</option>
			<option value="Azerbaijan" >Azerbaijan</option>
			<option value="B" disabled="disabled" style="font-size:x-small;text-align:center; ">B</option>
			<option value="Bahamas, The">Bahamas, The</option>
			<option value="Bahrain" >Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belarus" >Belarus</option>
			<option value="Belgium" >Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bhutan">Bhutan</option></option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and herzegovina">Bosnia and Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Brazil" >Brazil</option>
			<option value="Brunei" >Brunei</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burma" >Burma</option>
			<option value="Burundi">Burundi</option>
			<option value="C" disabled="disabled" style="font-size:x-small;text-align:center; ">C</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada" >Canada</option>
			<option value="Chad" >Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Columbia">Columbia</option>
			<option value="Congo">Congo</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Cote d Ivoire">Cote d'Ivoire</option>
			<option value="Croatia" >Croatia</option>
			<option value="Cuba" >Cuba</option>
			<option value="Cyprus" >Cyprus</option>
			<option value="Czech Republic" >Czech Republic</option>
			<option value="D" disabled="disabled" style="font-size:x-small;text-align:center;">D</option>
			<option value="Denmark">Denmark</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="E" disabled="disabled" style="font-size:x-small;text-align:center;">E</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="F" disabled="disabled" style="font-size:x-small;text-align:center;">F</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="G" disabled="disabled" style="font-size:x-small;text-align:center;">G</option>
			<option value="Gabon">Gabon</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Greece">Greece</option>
			<option value="Grenada">Grenada</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guyana">Guyana</option>
			<option value="H" disabled="disabled" style="font-size:x-small;text-align:center;">H</option>
			<option value="Haiti">Haiti</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="I" disabled="disabled" style="font-size:x-small;text-align:center;">I</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran">Iran</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="J" disabled="disabled" style="font-size:x-small;text-align:center;">J</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="K" disabled="disabled" style="font-size:x-small;text-align:center;">K</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Korea, North">Korea, North</option>
			<option value="Korea, South">Korea, South</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="L" disabled="disabled" style="font-size:x-small;text-align:center;">L</option>
			<option value="Laos">Laos</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="M" disabled="disabled" style="font-size:x-small;text-align:center;">M</option>
			<option value="Macau">Macau</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mexico">Mexico</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Morocco">Morocco</option>
			<option value="N" disabled="disabled" style="font-size:x-small;text-align:center;">N</option>
			<option value="Namibia">Namibia</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherlands">Netherlands</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nigeria">Nigeria</option>
			<option value="Norway">Norway</option>
			<option value="North Korea">North Korea</option>
			<option value="O" disabled="disabled" style="font-size:x-small;text-align:center;">O</option>
			<option value="Oman">Oman</option>
			<option value="P" disabled="disabled" style="font-size:x-small;text-align:center;">P</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Panama">Panama</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Philippines">Philippines</option>
			<option value="Portugal">Portugal</option>
			<option value="Q" disabled="disabled" style="font-size:x-small;text-align:center;">Q</option>
			<option value="Qatar">Qatar</option>
			<option value="R" disabled="disabled" style="font-size:x-small;text-align:center;">R</option>
			<option value="Romania">Romania</option>
			<option value="Russia">Russia</option>
			<option value="S" disabled="disabled" style="font-size:x-small;text-align:center;">S</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Singapore">Singapore</option>
			<option value="South Africa">South Africa</option>
			<option value="South Korea">South Korea</option>
			<option value="Spain ">Spain </option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="T" disabled="disabled" style="font-size:x-small;text-align:center;">T</option>
			<option value="Taiwan">Taiwan</option>
			<option value="Thailand ">Thailand </option>
			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
			<option value="Turkey">Turkey</option>
			<option value="U" disabled="disabled" style="font-size:x-small;text-align:center;">U</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States of America">United States of America</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="V" disabled="disabled" style="font-size:x-small;text-align:center;">V</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Y" disabled="disabled" style="font-size:x-small;text-align:center;">Y</option>
			<option value="Yemen">Yemen</option>
			<option value="Z" disabled="disabled" style="font-size:x-small;text-align:center;">Z</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe ">Zimbabwe </option>
			<option value=" "> </option>
			<option value="Other">Other</option>
		 
         </select></td>
  </tr>
  <tr>
    <td class="fieldName" width="200" height="22" colspan="2"><center>Same As Above<input type="checkbox" name="same" value="Yes" onclick="FillBilling()"></center></td></tr>
    <td class="fieldName" width="200" height="22"><font color="#000000"><span class="error">*</span>Permanent Address</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input type="text" name="p_name" title="Address is Required" id="p_name" size="50"/><br>
	<input name="p_name2" value=" " onfocus="blank(this)" onblur="unblank(this)" title="Postal Address is not necessary" id="p_name2" type="text" maxlength="255" size="30"/>(Optional)<font color="#000000">
    </font></td>
	</td></tr>
  	<tr>
    <td class="fieldName" width="400" height="22"><font color="#000000"><span class="error">*</span>City</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input type="text" name="city1" id="city1" title="City is Required" size="20" /><font color="#000000">
    </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="200" height="22"><font color="#000000"><span class="error">*</span>State/Province</font></td>
    <td align="left" style="color: #003399" width="500" height="22">
	<input name="state1" id="state1" type="text" title="State is Required" size="20" /><font color="#000000">
    </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>ZIP/Postal Code</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
	<input name="postal_code1" id="postal_code1" title="Postal Code is Required" type="text" size="20" /><font color="#000000">
    </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Country</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
    <select name="country1" id="country1" title="Country is Required">
      <option value="Select Country">Select Country</option>
            <option value="A" disabled="disabled" style="font-size:x-small;text-align:center; ">A</option>
			<option value="Afghanistan" >Afghanistan</option>
			<option value="Albania" >Albania</option>
			<option value="Algeria"> Algeria</option>
			<option value="Andorra">Andorra</option>
			<option value="Angola" >Angola</option>
			<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
			<option value="Argentina" >Argentina</option>
			<option value="Armenia" >Armenia</option>
			<option value="Australia" >Australia</option>
			<option value="Austria" >Austria</option>
			<option value="Azerbaijan" >Azerbaijan</option>
			<option value="B" disabled="disabled" style="font-size:x-small;text-align:center; ">B</option>
			<option value="Bahamas, The">Bahamas, The</option>
			<option value="Bahrain" >Bahrain</option>
			<option value="Bangladesh">Bangladesh</option>
			<option value="Barbados">Barbados</option>
			<option value="Belarus" >Belarus</option>
			<option value="Belgium" >Belgium</option>
			<option value="Belize">Belize</option>
			<option value="Benin">Benin</option>
			<option value="Bhutan">Bhutans</option>
			<option value="Bolivia">Bolivia</option>
			<option value="Bosnia and herzegovina">Bosnia and Herzegovina</option>
			<option value="Botswana">Botswana</option>
			<option value="Brazil" >Brazil</option>
			<option value="Brunei" >Brunei</option>
			<option value="Bulgaria">Bulgaria</option>
			<option value="Burkina Faso">Burkina Faso</option>
			<option value="Burma" >Burma</option>
			<option value="Burundi">Burundi</option>
			<option value="C" disabled="disabled" style="font-size:x-small;text-align:center; ">C</option>
			<option value="Cambodia">Cambodia</option>
			<option value="Cameroon">Cameroon</option>
			<option value="Canada" >Canada</option>
			<option value="Chad" >Chad</option>
			<option value="Chile">Chile</option>
			<option value="China">China</option>
			<option value="Columbia">Columbia</option>
			<option value="Congo">Congo</option>
			<option value="Costa Rica">Costa Rica</option>
			<option value="Cote d Ivoire">Cote d'Ivoire</option>
			<option value="Croatia" >Croatia</option>
			<option value="Cuba" >Cuba</option>
			<option value="Cyprus" >Cyprus</option>
			<option value="Czech Republic" >Czech Republic</option>
			<option value="D" disabled="disabled" style="font-size:x-small;text-align:center;">D</option>
			<option value="Denmark">Denmark</option>
			<option value="Dominican Republic">Dominican Republic</option>
			<option value="E" disabled="disabled" style="font-size:x-small;text-align:center;">E</option>
			<option value="Ecuador">Ecuador</option>
			<option value="Egypt">Egypt</option>
			<option value="El Salvador">El Salvador</option>
			<option value="Estonia">Estonia</option>
			<option value="Ethiopia">Ethiopia</option>
			<option value="F" disabled="disabled" style="font-size:x-small;text-align:center;">F</option>
			<option value="Fiji">Fiji</option>
			<option value="Finland">Finland</option>
			<option value="France">France</option>
			<option value="G" disabled="disabled" style="font-size:x-small;text-align:center;">G</option>
			<option value="Gabon">Gabon</option>
			<option value="Georgia">Georgia</option>
			<option value="Germany">Germany</option>
			<option value="Ghana">Ghana</option>
			<option value="Greece">Greece</option>
			<option value="Grenada">Grenada</option>
			<option value="Guatemala">Guatemala</option>
			<option value="Guyana">Guyana</option>
			<option value="H" disabled="disabled" style="font-size:x-small;text-align:center;">H</option>
			<option value="Haiti">Haiti</option>
			<option value="Honduras">Honduras</option>
			<option value="Hong Kong">Hong Kong</option>
			<option value="Hungary">Hungary</option>
			<option value="I" disabled="disabled" style="font-size:x-small;text-align:center;">I</option>
			<option value="Iceland">Iceland</option>
			<option value="India">India</option>
			<option value="Indonesia">Indonesia</option>
			<option value="Iran">Iran</option>
			<option value="Iraq">Iraq</option>
			<option value="Ireland">Ireland</option>
			<option value="Israel">Israel</option>
			<option value="Italy">Italy</option>
			<option value="J" disabled="disabled" style="font-size:x-small;text-align:center;">J</option>
			<option value="Jamaica">Jamaica</option>
			<option value="Japan">Japan</option>
			<option value="Jordan">Jordan</option>
			<option value="K" disabled="disabled" style="font-size:x-small;text-align:center;">K</option>
			<option value="Kazakhstan">Kazakhstan</option>
			<option value="Kenya">Kenya</option>
			<option value="Korea, North">Korea, North</option>
			<option value="Korea, South">Korea, South</option>
			<option value="Kuwait">Kuwait</option>
			<option value="Kyrgyzstan">Kyrgyzstan</option>
			<option value="L" disabled="disabled" style="font-size:x-small;text-align:center;">L</option>
			<option value="Laos">Laos</option>
			<option value="Latvia">Latvia</option>
			<option value="Lebanon">Lebanon</option>
			<option value="Lithuania">Lithuania</option>
			<option value="Luxembourg">Luxembourg</option>
			<option value="M" disabled="disabled" style="font-size:x-small;text-align:center;">M</option>
			<option value="Macau">Macau</option>
			<option value="Madagascar">Madagascar</option>
			<option value="Malaysia">Malaysia</option>
			<option value="Maldives">Maldives</option>
			<option value="Mali">Mali</option>
			<option value="Mauritius">Mauritius</option>
			<option value="Mexico">Mexico</option>
			<option value="Monaco">Monaco</option>
			<option value="Mongolia">Mongolia</option>
			<option value="Morocco">Morocco</option>
			<option value="N" disabled="disabled" style="font-size:x-small;text-align:center;">N</option>
			<option value="Namibia">Namibia</option>
			<option value="Nepal">Nepal</option>
			<option value="Netherlands">Netherlands</option>
			<option value="New Zealand">New Zealand</option>
			<option value="Nigeria">Nigeria</option>
			<option value="Norway">Norway</option>
			<option value="North Korea">North Korea</option>
			<option value="O" disabled="disabled" style="font-size:x-small;text-align:center;">O</option>
			<option value="Oman">Oman</option>
			<option value="P" disabled="disabled" style="font-size:x-small;text-align:center;">P</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Panama">Panama</option>
			<option value="Paraguay">Paraguay</option>
			<option value="Philippines">Philippines</option>
			<option value="Portugal">Portugal</option>
			<option value="Q" disabled="disabled" style="font-size:x-small;text-align:center;">Q</option>
			<option value="Qatar">Qatar</option>
			<option value="R" disabled="disabled" style="font-size:x-small;text-align:center;">R</option>
			<option value="Romania">Romania</option>
			<option value="Russia">Russia</option>
			<option value="S" disabled="disabled" style="font-size:x-small;text-align:center;">S</option>
			<option value="Saudi Arabia">Saudi Arabia</option>
			<option value="Singapore">Singapore</option>
			<option value="South Africa">South Africa</option>
			<option value="South Korea">South Korea</option>
			<option value="Spain ">Spain </option>
			<option value="Sri Lanka">Sri Lanka</option>
			<option value="Sweden">Sweden</option>
			<option value="Switzerland">Switzerland</option>
			<option value="T" disabled="disabled" style="font-size:x-small;text-align:center;">T</option>
			<option value="Taiwan">Taiwan</option>
			<option value="Thailand ">Thailand </option>
			<option value="Trinidad and Tobago">Trinidad and Tobago</option>
			<option value="Turkey">Turkey</option>
			<option value="U" disabled="disabled" style="font-size:x-small;text-align:center;">U</option>
			<option value="United Arab Emirates">United Arab Emirates</option>
			<option value="United Kingdom">United Kingdom</option>
			<option value="United States of America">United States of America</option>
			<option value="Uzbekistan">Uzbekistan</option>
			<option value="V" disabled="disabled" style="font-size:x-small;text-align:center;">V</option>
			<option value="Venezuela">Venezuela</option>
			<option value="Vietnam">Vietnam</option>
			<option value="Y" disabled="disabled" style="font-size:x-small;text-align:center;">Y</option>
			<option value="Yemen">Yemen</option>
			<option value="Z" disabled="disabled" style="font-size:x-small;text-align:center;">Z</option>
			<option value="Zambia">Zambia</option>
			<option value="Zimbabwe ">Zimbabwe</option>
		    <option value=" "> </option>
			<option value="Other">Other</option>
		 
         </select></td>
  
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Email-ID</font></td>
    <td align="left" style="color: #003399" width="600" height="22"><input name="email" title="E-Mail is Required" type="text" size="20" /><font color="#000000">
    </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Telephone No(Res.)</font></td>
    <td align="left" style="color: #003399" width="600" height="22"><font color="#400040">Std Code*</font>
	<input name="std" type="text" title="Telephone No. is Required" maxlength="8" size="10"/>
	&nbsp;&nbsp;<font color="#400040">Phone*</font>
	<input name="phone" type="text" maxlength="20" size="20"/></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000">(Office)</font></td>
    <td align="left" style="color: #003399" width="600" height="22"><font color="#400040">Std Code&nbsp;&nbsp;</font>
	<input name="std1"  value=" "  onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="8" size="10"/>
	&nbsp;&nbsp;<font color="#400040">Phone&nbsp;&nbsp;</font>
	<input name="phone1" title="Telephone No. is Not Necessary" value=" "  onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20"/></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Mobile No.(with Country Code)</font></td>
    <td align="left" style="color: #003399" width="600" height="22"><input name="countrycode" type="text" maxlength="4" size="5"/>&nbsp;&nbsp;
	<input name="m_phone" title="Mobile No. is Required" type="text" maxlength="15" size="20"/></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000">Qualification</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
	<input name="qualification" title="Qualification is Not Necessary" value=" "  onfocus="blank(this)" onblur="unblank(this)" type="text" maxlength="20" size="20"/></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000">Occupation</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
	<input name="occupation" value=" "  onfocus="blank(this)" onblur="unblank(this)" title="Occupation is Not Necessary" type="text" maxlength="20" size="20"/></td>
  </tr>
  <tr>
  <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Studied at SJA from Class</font></td>
  </td>
  <td align="left" style="color: #003399" width="600" height="22">
    
	<select name="from" title="Joining Class is Required" style="height:25px; width:55px; ">
	<option value="From">From</option>
	<option value="LKG">LKG</option>
	<option value="UKG">UKG</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
 	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select>
	&nbsp;-&nbsp;
	<select name="to" title="Leaving Class is Required" style="height:25px; width:50px; ">
	<option value="To">To</option>
	<option value="LKG">LKG</option>
	<option value="UKG">UKG</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
 	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	</select>
  </td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Tenure at SJA</font></td>
  </td>
  <td align="left" style="color: #003399" width="600" height="22">
    
	<select name="from1" title="Joining Year is Required" style="height:25px; width:55px; ">
	<option value="From">From</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
 	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
    </select>
	&nbsp;-&nbsp;
	<select name="to1" title="Leaving Year is Required" style="height:25px; width:50px; ">
	<option value="To">To</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
 	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	</select>
  </td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000">Index No. of School Leaving Examination</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
    <input name="yr" type="text" value=" " title="Index No. is Not Necessary" onfocus="blank(this)" onblur="unblank(this)" maxlength="20" size="20"/></td>
  </tr>
  <tr>
  <td class="fieldName" width="450" height="22"><font color="#000000"><span class="error">*</span>Please attach copy of School Leaving Certificate</font></td>
  <td align="left" style="color: #003399" width="600" height="22">
  <input type="file" title="School Leaving Certificate is Required" name="file1" /></td>
  </tr>
  <tr>
  <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Date of Birth</font></td>
  <td align="left" style="color: #003399" width="600" height="22">
  <select name="month" title="Birth Month is Required" style="height:25px; width:60px; ">
  <option value="Month">Month</option>
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option></select>
  <select name="day" title="Birth Day is Required" style="height:25px; width:50px; ">
  <option value="Day">Day</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option></select>
  <select name="year" title="Birth Year is Required" style="height:25px; width:55px; ">
  <option value="Year">Year</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
 	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>
	<option value="1982">1982</option>
	<option value="1981">1981</option>
	<option value="1980">1980</option>
	<option value="1979">1979</option>
	<option value="1978">1978</option>
	<option value="1977">1977</option>
	<option value="1976">1976</option>
	<option value="1975">1975</option>
	<option value="1974">1974</option>
	<option value="1973">1973</option>
	<option value="1972">1972</option>
	<option value="1971">1971</option>
	<option value="1970">1970</option>
	<option value="1969">1969</option>
	<option value="1968">1968</option>
	<option value="1967">1967</option>
	<option value="1966">1966</option>
	<option value="1965">1965</option>
	<option value="1964">1964</option>
	<option value="1963">1963</option>
	<option value="1962">1962</option>
	<option value="1961">1961</option>
	<option value="1960">1960</option>
	<option value="1959">1959</option>
	<option value="1958">1958</option>
	<option value="1957">1957</option>
	<option value="1956">1956</option>
	<option value="1955">1955</option>
	<option value="1954">1954</option>
	<option value="1953">1953</option>
	<option value="1952">1952</option>
	<option value="1951">1951</option>
	<option value="1950">1950</option>
	<option value="1949">1949</option>
	<option value="1948">1948</option>
	<option value="1947">1947</option>
	<option value="1946">1946</option>
	<option value="1945">1945</option>
	<option value="1944">1944</option>
	<option value="1943">1943</option>
	<option value="1942">1942</option>
	<option value="1941">1941</option>
	<option value="1940">1940</option>
	<option value="1939">1939</option>
	<option value="1938">1938</option>
	<option value="1937">1937</option>
	<option value="1936">1936</option>
	<option value="1935">1935</option>
	<option value="1934">1934</option>
	<option value="1933">1933</option>
	<option value="1932">1932</option>
	<option value="1931">1931</option>
	<option value="1930">1930</option>
	<option value="1929">1929</option>
	<option value="1928">1928</option>
	<option value="1927">1927</option>
	<option value="1926">1926</option>
	<option value="1925">1925</option>
	<option value="1924">1924</option>
	<option value="1923">1923</option>
	<option value="1922">1922</option>
	<option value="1921">1921</option>
	<option value="1920">1920</option>
	<option value="1919">1919</option>
	<option value="1918">1918</option>
	<option value="1917">1917</option>
	<option value="1916">1916</option>
	<option value="1915">1915</option>
	<option value="1914">1914</option>
	<option value="1913">1913</option>
	<option value="1912">1912</option>
	<option value="1911">1911</option>
	<option value="1910">1910</option>
	<option value="1909">1909</option>
	<option value="1908">1908</option>
	<option value="1907">1907</option>
	<option value="1906">1906</option>
	<option value="1905">1905</option>
	</select>
  </td>
  </tr>
  <tr>
      <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Married</font></td>
	    <td align="left" style="color: #003399" width="600" height="22">
		<select name="married" title="Marriage Status is Required" style="width:100px; " onchange="showfield(this.options[this.selectedIndex].value)">
		<option value="---Select---">---Select---</option>
		<option value="Yes">Yes</option>
		<option value="No">No</option></select>
		<div id="div1"></div>
		<div id="div2"></div>
		<div id="div3"></div>
		<div id="div4"></div>
		
		</td>
		</tr>
		
   <tr>
    <td class="fieldName" width="350" height="22"><font color="#000000">Area of Interests/Specialization</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
    <input type="text" value=" " title="Specialization is Not Necessary" onfocus="blank(this)" onblur="unblank(this)" title="Specialization is Not Necessary" name="specialization"  size="70" maxlength="70" ></td>
  </tr>
   <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000">Any Other Information About Self</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
    <input type="text" value=" " title="Self Information is Not Necessary" onfocus="blank(this)" onblur="unblank(this)" name="self" title="Info. about Yourself is Not Necessary" size="70" maxlength="70" ></td>
  </tr>
  <tr>
  <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Please Upload Photo</font></td>
  <td align="left" style="color: #003399" width="600" height="22">
  <input type="file" title="Photograph is Required" name="file2" ><br>(<font color="red">Photo Size should be less than 100kb.Upload pics in Jpg/Jpeg format only.</font>)</td>
  </tr>
    
  <tr>
    <td class="fieldName" width="100" height="14"></td>
    <td  align="left" width="600" height="14">
    </td>
  </tr>
  <tr>
  <tr>
    <th colspan="2" width="592" height="24"><div align="center"><span class="style2">
      <font size="3"><u>Transaction Details</u></font></span></div></th>
  </tr>
  <tr>
    <td class="fieldName" width="650" colspan="2" height="14"></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="14">
    <font color="#000000">
    <span class="error">*</span>Amount</font></td>
    <td  align="left" width="600" style="color: #003399" height="14">
    <input type="radio" value="1286.75" title="Select the Amount" name="amount" checked><font color="#000000"><b>1286.75 INR </b><br> 1200 INR <font size="1">
    (Membership Fee + Annual Subscription)</font> + 77.21 INR <font size="1">(Payment Gateway Charges)</font> + 9.54 INR <font size="1">(Service Tax on Gateway Charges(incl. Cess))</font></font><br><p>
    <input type="radio" value="2680.72" title="Select the Amount" name="amount"><font color="#000000"><b>2680.72 INR </b><br> 2500 INR <font size="1">
	(Membership Fee + Life Time Subscription)</font> + 160.84 INR <font size="1">(Payment Gateway Charges)</font> + 19.88 INR <font size="1">(Service Tax on Gateway Charges(incl. Cess))</font></font><br>
    <p align="justify"><font color="#000000" size="-1">Note: </font>
    <font size="2" color="#000000">Membership Fee is <b>1000 INR</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Annual Subscription is <b>200 INR </b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Life Time Subscription is <b>1500 INR</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Payment Gateway Charges <b> 6% </b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Service Tax and Cess <b> 12.36% </b>(on Gateway Charges)</font></p></td>
  </tr>
  
    <input name="account_id" value="10554" readonly="readonly" type="hidden" size="20"><font color="#000000"> </font>
   
   
    
    <input name="mode" value="LIVE" readonly="readonly" type="hidden" size="20"><font color="#000000"> </font>
   
  <tr>
    <td class="fieldName" width="100" height="22"> <span class="error">*</span>Transaction Number <font size="-1">
	(Please Note this Transaction No. for Future Reference)</font></td>
    <td align="left" style="color: #003399" width="600" height="22">
    <input name="reference_no" title="Transaction No. is Provided" type="text" size="20" readonly="readonly" value="<?php
  echo (time()+ rand(0,9))?>" /><font color="#000000"> </font></td>
  </tr>
  <tr>
    <td class="fieldName" width="100" height="22"><font color="#000000"><span class="error">*</span>Description</font></td>
    <td  align="left" width="600" height="22"style="color: #003399">
    <input name="description" type="text" size="30" title="Description is Provided" readonly="readonly" value="SJA ALUMNI MEMBERSHIP" /><font color="#000000">
    </font> </td>
  </tr>
  <tr>
    <td colspan="2" align="justify" width="450" style="color: #003399" height="14">
	<input name="agree" type="checkbox">
	<font size="-1">
	<font size="-1" class="auto-style1">Tick if you agree to the
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=107&amp;Itemid=82">Terms & Conditions</a>, 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=104&amp;Itemid=82">Disclaimer</a>, 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=105&amp;Itemid=82">Privacy Policy
	</a>and 
	<a href="http://sjaalumni.com/index.php?option=com_content&amp;view=article&amp;id=103&amp;Itemid=82">Cancellation & Refund Policy
	</a>of SJA Alumni Association. The Managing Committee shall scrutinise your 
	form and once accepted a Membership Number will be allotted. Simple payment 
	of Membership/Joining Fee and Annual/Life Time Subscription shall not make 
	you a member automati</font><span class="auto-style1">cally. The decision of 
	the Managing Committee Shall be final and binding.</span></font>
   </td>
   </tr>
<tr>
<td valign="middle" align="center" colspan="2" width="750" height="25">
<input name="preview" value="Preview" type="submit" />&nbsp;
<input name="reset" value="Reset" type="reset"/><font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</font>
</td>
</tr>
<tr>
<th height="24" align="left" colspan="2" width="592">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="style2">*<font size="2">DENOTES
</font></span><em><font size="2">mandatory fields</font></em></a></th>
</tr>
</table></div></font>
</form>
</center>
</body>
</html>