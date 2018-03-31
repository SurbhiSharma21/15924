
<?php   echo str_repeat('&nbsp;', 10);?>

<label> Employee Name:<input  class="t4" type="text" placeholder="Middle Name" id="mname" name="mname" value="<?php echo $row['emp_name']; ?>" required /></label>

<?php   echo str_repeat('&nbsp;', 12);?>
<label> Last Name:<input  class="t5" type="text" placeholder="Last Name" id="lname" name="lname" required/></label>

<br />

<label> Date Of Birth:<input  class="t6" type="text" placeholder="DD/MM/YYYY" id="dob" name="dob" value="<?php echo $row['emp_dob']; ?>"  required/></label>

<?php   echo str_repeat('&nbsp;', 10);?>

<label > Gender:<input class="t7" type="text" name="gender" id="gender" value="male" value="<?php echo $row['gender']; ?>"  required/> Male
               
<br/>
              
  <label> Nationality:</label><input type="text" id="national" name="national" value="<?php echo $row['nationality']; ?>" />

<?php   echo str_repeat('&nbsp;', 10);?>
<label> Email:<input  class="t11" type="text" placeholder="Email" id="email" name="email" value="<?php echo $row['email']; ?>"  required/></label> 
<?php   echo str_repeat('&nbsp;', 12);?>
<label>Phone:<input  class="t12" type="text" placeholder="Contact No." id="phone" name="phone" value="<?php echo $row['phone']; ?>"  required/></label> 

 <br />

<label> Designation:<input  class="t13" type="text" placeholder="Job Title" id="designation" name="designation" value="<?php echo $row['designation']; ?>"  required/></label>
<?php   echo str_repeat('&nbsp;', 10);?>
<label> Organization:<input  class="t14" type="text" placeholder="Your Organization" id="organization" name="organization" value="<?php echo $row['organization']; ?>" required/></label>
 <?php   echo str_repeat('&nbsp;', 10);?> 
<label>Department:<input  class="t15" type="text" placeholder="Your Department" id="department" name="department" value="<?php echo $row['emp_dept']; ?>"  required/></label> 
 <br />

<label>Address:<textarea class="t16" placeholder="Your Address" id="address" name="address" rows="5" cols="120" value="<?php echo $row['address']; ?>"  required/></textarea></label>   <br />      


<p align="left"><b><font size="5" color="#8a1c1c">Qualification Details</font></b></p>




 
<label>Graduation:<input  class="t23" type="text" placeholder="Major Subject/Degree" id="graduation" name="graduation" value="<?php echo $row['emp_qualification']; ?>" required/></label>

