<html>
<body>
<?php
$serverName = "tcp:aalicensemanager.database.windows.net,1433";
$connectionOptions = array(
    "Database" => "AALicenseManager",
    "Uid" => "aalicensemanager",
    "PWD" => "AAfyp2018"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
$tsql= "SELECT TOP 20 	Title , FirstName
        FROM [SalesLT].[Customer] pc
        ";
$getResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
 echo ($row['Title'] . " " . $row['FirstName'] . PHP_EOL);
}
sqlsrv_free_stmt($getResults);
?>
	</body>
	</html>
	