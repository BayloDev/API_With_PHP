<?php
echo '<pre/>';

echo 'Course1 : variables';
echo '<br/>';
echo '============';
echo '<br/>';


$my_name = "bilal";
echo 'my name is : ' . $my_name;
echo '<br/>';
echo '<br/>'; ?>
<?php


echo 'Course2 : if statements';
echo '<br/>';
echo '============';
echo '<br/>';


$age = 25;
if ($age > 25) {
    echo 'age > 25';
} else if ($age < 25) {
    echo 'age < 25';
} else {
    echo 'age = 25';
}
echo '<br/>';
echo '<br/>';
?>

<?php
echo 'Course3 : loops';
echo '<br/>';
echo '============';
echo '<br/>';


echo ' while : ';
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}
echo '<br/>';
echo 'do... while : ';
$j = 0;

do {
    echo $j;
    $j++;
} while ($j < 10);
echo '<br/>';
$t = 0;
echo 'for : ';
for ($t = 0; $t < 10; $t++) {
    echo $t;
}
echo '<br/>';
echo '<br/>'; ?>

<?php
echo 'Course4 :Functions ';
echo '<br/>';
echo '============';
echo '<br/>';
$global_name = 'nouh';

function printLocalName(
    $name
) {
    echo 'print local variable: ' . $name;
};
printLocalName('bilal');
function function1()
{
    global $global_name;
    echo 'print global variable inside a function method1: ' . $global_name;
};
echo '<br/>';


function1();
function function2()
{
    echo 'print global variable inside a function method2: ' . $GLOBALS['global_name'];
};
echo '<br/>';


function2();
function function3()
{
    $GLOBALS['name3'] = "younes";
    //echo 'print local variable outside a function';
};
echo '<br/>';


function3();
echo 'print local variable outside a function: ' . $name3;
echo '<br/>';
echo '<br/>'; ?>


<?php
echo 'Course5 : Arrays ';
echo '<br/>';
echo '============';
echo '<br/>';
echo 'There are 2 types of arrays: indexed like list in dart and associative like map';
echo '<br/>';
echo 'Indexed array : ';
$list_name =  array('bilal', 'mohamed', 'nouh');

for ($i = 0; $i < count($list_name); $i++) {
    echo '<br/>';
    echo $list_name[$i];
}
echo '<br/>';
echo '<br/>';
echo 'Associative array : ';
echo '<br/>';
$info_name = array(
    'bilal' => array(
        'age' => 35,
        'tall' => 1.80
    ),
    'Nouh' => array(
        'age' => 13,
        'tall' => 1.5
    ),
    'younes' => array(
        'age' => 22,
        'tall' => 1.9
    ),
);
foreach ($info_name as $key => $value) {
    echo $key;
    echo ' : ';
    print_r($value);
    echo '<br/>';
}
echo '<br/>';
echo '<br/>'; ?>

<?php
echo 'Course 6: Post and Get';
echo '<br/>';
echo '============';
echo '<br/>';
print_r($_GET);
print_r($_POST);
echo '<br/>';
echo '<br/>'; ?>

<?php
echo 'Course 7 : Connect to database and fetch data';
echo '<br/>';
echo '============';
echo '<br/>';

include 'connect.php';

$stmnt = $connect->prepare('SELECT * FROM userinfo');
$stmnt->execute();
$user = $stmnt->fetchAll(PDO::FETCH_ASSOC);// fetch all data
//$user = $stmnt->fetch(PDO::FETCH_ASSOC);// fetch one user data
//$user = $stmnt->fetchColumn();// fetch one column for exmp email
print_r($user);
$isDataExist = $stmnt-> rowCount();//if equal to 0 means no data exixts
echo 'Number of user : ' . $isDataExist;
echo '<br/>';
echo 'convert it to json: ';
echo json_encode($user);

echo '<br/>';
echo '<br/>'; ?>


<?php
echo 'Course 8 : Insert user ';
echo '<br/>';
echo '============';
echo '<br/>';
include 'connect.php';

$add=$connect-> prepare("INSERT INTO `userinfo` (`username`, `email`) VALUES ('mohamed', 'mohamed@gmail.com')");
$add-> execute();
$isSuccess= $add ->rowCount();
if ($isSuccess>0) {
    echo 'Added successfuly';
}else{
    echo 'added fail';

}
echo '<br/>';
echo '<br/>'; ?>


<?php
echo 'Course 8 : Update user ';
echo '<br/>';
echo '============';
echo '<br/>';
include 'connect.php';

$update=$connect-> prepare("UPDATE `userinfo` SET `username`='nada',`email`='nada@gmail.com' WHERE username = 'mohamed'");
$update-> execute();
$isSuccess= $update ->rowCount();
if ($isSuccess>0) {
    echo 'updated successfuly';
}else{
    echo 'updated fail';

}
echo '<br/>';
echo '<br/>'; ?>

<?php
echo 'Course 8 : delete user ';
echo '<br/>';
echo '============';
echo '<br/>';
include 'connect.php';

$delete=$connect-> prepare("DELETE FROM `userinfo` WHERE username = 'nada'");
$delete-> execute();
$isSuccess= $delete ->rowCount();
if ($isSuccess>0) {
    echo 'deleted successfuly';
}else{
    echo 'deleted fail';

}
echo '<br/>';
echo '<br/>'; ?>
<?php
echo 'Course : ';
echo '<br/>';
echo '============';
echo '<br/>';


echo '<br/>';
echo '<br/>'; ?>






