<?php
session_start();
$dept=$_POST['tcode'];
/*******EDIT LINES 3-8*******/
$DB_Server = "localhost"; //MySQL Server    
$DB_Username = "root"; //MySQL Username     
$DB_Password = "";             //MySQL Password     
$DB_DBName = "new_gnct_db";         //MySQL Database Name  
$DB_TBLName = "training_applicant"; //MySQL Table Name   
$filename = "applicant";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection
   
$sql = "SELECT * FROM $DB_TBLName WHERE t_id='".$dept."'";
$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database   
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());   
//execute query 
$result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    
$file_ending = "xls";
$reals=array();
//header info for browser
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
    $type = mysql_field_type($result,$i);
    echo mysql_field_name($result,$i) . "\t";
    if ($type == "real")
    {
        $reals[] = $i;
    }
}
echo "<pre>";
print("\n");    
//end of printing column names  
//start while loop to get data
while($row = mysql_fetch_row($result))
{
    $schema_insert = "";
    for($j=0; $j<mysql_num_fields($result);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != ""){
            if (in_array($j, $reals)){
                $schema_insert .= str_replace(".",",","$row[$j]").$sep;
            } else {
                $schema_insert .= "$row[$j]".$sep;
            }
        }
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}   
echo "</pre>";
?>