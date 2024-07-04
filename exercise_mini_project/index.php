<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            padding: 1rem;
        }
        table{
            width: 50%;
            min-width: 500px;
        }
        th,table,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: .5rem;
        }
        .income {
            color:green;
        }
        .expense{
            color: red;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check #</th>
                <th>Description</th>    
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
              <?php 
// expense tracking application
//parse- one or multiple csv files extract transactions from them
//store them in memory : array
//display it in a table
if(!file_exists("transactions.csv")){
    echo "this file does not exist";
    return;
}
$transactions_file = fopen("transactions.csv","r");
$transaction_data = [];
$total_expense = 0;
$total_income = 0;
$net_income = 0;

while(($line = fgetcsv($transactions_file)) !== false){
    array_push($transaction_data,$line);
}
//  echo "<pre>";
//  print_r($transaction_data);
//  echo "</pre>";

foreach ($transaction_data as $row) {
    echo "<tr>";
foreach ($row as $key => $value) {
    if ($key === 3){
        $value_num = (int) str_replace("$","",$value);
        if($value_num > 0){
            echo "<td class='income'>",$value===""?"-":$value,"</td>";
            continue;
        }
        if($value_num < 0){
            echo "<td class='expense'>",$value===""?"-":$value,"</td>";
            continue;
        }
    }
    echo "<td>",$value===""?"-":$value,"</td>";
}
echo "</tr>";
}
foreach ($transaction_data as   $row) {

$value = (int) str_replace("$","",$row[3]);

if($value > 0){
    $total_income +=  $value;
    continue;
}
$total_expense +=  $value;
}
$net_income = $total_income - $total_expense;


echo "<tr>";
echo "<td colspan='3'>Total Income </td>";
echo "<td>",$total_income,"</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='3'>Total Expense </td>";
echo "<td>",$total_expense,"</td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan='3'>Net Income </td>";
echo "<td>",$net_income,"</td>";
echo "</tr>";
?>
        </tbody>
    </table>
    
  
</body>
</html>
