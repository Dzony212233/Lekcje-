<?php = "DELETE FROM MyGuestes WHERE id=3";
if(mysqli_query($conn, $sql)) {
    echo "Record delete successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn); 
}
?>