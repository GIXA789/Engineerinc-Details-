<?php
    $Date=$_POST["Date"];
    $Project_Name=$_POST["Project_Name"];
    $Project_Address=$_POST["Project_Address"];
    $Contractor=$_POST["Contractor"];
    $Contractor_Address=$_POST["Contractor_Address"];
    $Applicable_Code=$_POST["Applicable_Code"];
    $Ground_Snow_Load=$_POST["Ground_Snow_Load"];
    $PV_Dead_Load=$_POST["PV_Dead_Load"];
    $Wind_Speed=$_POST["Wind_Speed"];
    $Risk_Category=$_POST["Risk_Category"];
    $Exposure_Category=$_POST["Exposure_Category"];
    $Live_Load=$_POST["Live_Load"];
    $Basic_Wind_Speed=$_POST["Basic_Wind_Speed"];
    $Wind_Direction_Factor=$_POST["Wind_Direction_Factor"];
    $Topography_Factor=$_POST["Topography_Factor"];
    $Ground_Elevation_Factor=$_POST["Ground_Elevation_Factor"];
    $Guest_Effect_Factor=$_POST["Guest_Effect_Factor"];
    $PV_Load=$_POST["PV_Load"];
    $Snow_Load=$_POST["Snow_Load"];

    $Module_Type=$_POST["Module_Type"];
    $Module_Quantity=$_POST["Module_Quantity"];
    $Module_Model_Number=$_POST["Module_Model_Number"];
    $Ulit_Wind_Speed=$_POST["Ulit_Wind_Speed"];
    $Exposure_Cat=$_POST["Exposure_Cat"];
    $Ground_Snow=$_POST["Ground_Snow"];
    $Ground_Mount_Total_Length=$_POST["Ground_Mount_Total_Length"];
    $Horizontal_Beam_Spacing=$_POST["Horizontal_Beam_Spacing"];
    $Canteliver_span_Beam_Length=$_POST["Canteliver_span_Beam_Length"];
    $Column_Maximum_Height=$_POST["Column_Maximum_Height"];
    $Mid_Span_Beam_Length=$_POST["Mid_Span_Beam_Length"];
    $Ground_Mount_Tilt_Angle=$_POST["Ground_Mount_Tilt_Angle"];

    $Steel_Column_Size=$_POST["Steel_Column_Size"];
    $Steel_Beam_Size=$_POST["Steel_Beam_Size"];
    $Footing_Diameter=$_POST["Footing_Diameter"];
    $Footing_Depth=$_POST["Footing_Depth"];
    $Design_Material=$_POST["Design_Material"];
    $Steel_Fy=$_POST["Steel_Fy"];
    $Steel_E=$_POST["Steel_E"];
    $Soil_Pressure=$_POST["Soil_Pressure"];
    $SizeListC=$_POST["SizeListC"];
    $SizeListB=$_POST["SizeListB"];


    
    $host="localhost";
    $dbname="lkfokifu_groundmount_db";
    $username="cpses_lkccr978wk@localhost";
    $password="";

    $conn=mysqli_connect(hostname: $host,
                         username: $username,
                         database: $dbname,
                         password: $password);

      if(mysqli_connect_errno()){
        die("Connection error :" .mysqli_connect_error());
         }

        $sql="INSERT INTO message(Date,Project_Name,Project_Address,Contractor,Contractor_Address,Applicable_Code,Ground_Snow_Load,PV_Dead_Load,Wind_Speed,Risk_Category,Exposure_Category,Live_Load,Basic_Wind_Speed,Wind_Direction_Factor,
        Topography_Factor,Ground_Elevation_Factor,Guest_Effect_Factor,PV_Load,Snow_Load,Module_Type,Module_Quantity,Module_Model_Number,Ulit_Wind_Speed,Exposure_Cat,
        Ground_Snow,Ground_Mount_Total_Length,Horizontal_Beam_Spacing,Canteliver_span_Beam_Length,Column_Maximum_Height,Mid_Span_Beam_Length,Ground_Mount_Tilt_Angle,
        Steel_Column_Size,Steel_Beam_Size,Footing_Diameter,Footing_Depth,Design_Material,Steel_Fy,Steel_E,Soil_Pressure,SizeListC,SizeListB)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt=mysqli_stmt_init($conn);
                                                           
if(! mysqli_stmt_prepare($stmt,$sql)){
    die(mysqli_error($conn));
}
                                                                      
mysqli_stmt_bind_param($stmt,"issssssssssssssssssssssssssssssssssssssss",
$Date,
$Project_Name,
$Project_Address,
$Contractor,
$Contractor_Address,
$Applicable_Code,
$Ground_Snow_Load,
$PV_Dead_Load,
$Wind_Speed,
$Risk_Category,
$Exposure_Category,
$Live_Load,
$Basic_Wind_Speed,
$Wind_Direction_Factor,
$Topography_Factor,
$Ground_Elevation_Factor,
$Guest_Effect_Factor,
$PV_Load,
$Snow_Load,

$Module_Type,
$Module_Quantity,
$Module_Model_Number,
$Ulit_Wind_Speed,
$Exposure_Cat,
$Ground_Snow,
$Ground_Mount_Total_Length,
$Horizontal_Beam_Spacing,
$Canteliver_span_Beam_Length,
$Column_Maximum_Height,
$Mid_Span_Beam_Length,
$Ground_Mount_Tilt_Angle,
$Steel_Column_Size,
$Steel_Beam_Size,
$Footing_Diameter,
$Footing_Depth,
$Design_Material,
$Steel_Fy,
$Steel_E,
$Soil_Pressure,
$SizeListC,
$SizeListB
);

mysqli_stmt_execute($stmt);
    echo"Record saved";
?>