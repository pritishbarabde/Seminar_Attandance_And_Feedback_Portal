<?php
$conn = new mysqli('localhost','root','','specialguest');
include_once 'record.php';
$sql = "DELETE FROM specialform WHERE fname='" . $_GET["fname"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
