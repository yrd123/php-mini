<?php
require '../vendor/autoload.php';  
// Creating Connection  
$con = new MongoDB\Client("mongodb://localhost:27017");  
// Creating Database  
$collection = (new MongoDB\Client)->test->users;
//$collection->drop();
echo "<br><b>-------------INSERTION ---------------</b><br>";
$insertManyResult = $collection->insertMany([
    [
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ],
    [
        'username' => 'test',
        'email' => 'test@example.com',
        'name' => 'Test User',
    ],
	 [
        'username' => 'leena',
        'email' => 'leena@example.com',
        'name' => 'User -Leena',
    ],
    [
        'username' => 'xyz',
        'email' => 'xyz@example.com',
        'name' => 'XYZ User',
    ],
]);
echo "<br><b>-------------DATA in DB---------------</b><br>";
$cursor = $collection->find([]);
//$cursor = $collection->find(['username' => 'leena']);

foreach ($cursor as $document) {
	echo "<u><b>";
    echo $document['username'], "</b></u><br>";
	echo $document['email'], "<br>";
	echo $document['name'], "<br>";
}  

echo "<br><b>-------------UPDATION in DB---------------</b><br>";
$updateResult = $collection->updateMany(['username' => 'leena'],
['$set' => ['name' => 'Leena Sahu']]);

$cursor = $collection->find(['username' => 'leena']);

foreach ($cursor as $document) {
    echo $document['username'], "<br>";
	echo $document['email'], "<br>";
	echo $document['name'], "<br>";

}
echo "<br><b>-------------DELETION in DB---------------</b><br>";
$deleteResult = $collection->deleteMany(['username' => 'xyz']);
$cursor = $collection->find([]);
printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
foreach ($cursor as $document) {
	echo "<br>---Record----<br>";
    echo $document['username'], "<br>";
	echo $document['email'], "<br>";
	echo $document['name'], "<br>";

}
?>