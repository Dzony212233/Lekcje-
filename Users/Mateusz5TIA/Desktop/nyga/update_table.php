<?php
$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
if(mysqli_query($conn, $sql)) {
    echo "Record update successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

