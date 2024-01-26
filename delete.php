<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'row_id' parameter is set
    if (isset($_POST['row_id'])) {
        include('mysqldemo.php');
        $rowId = filter_var($_POST['row_id'], FILTER_SANITIZE_NUMBER_INT);
        $query = $db->prepare("DELETE FROM expense WHERE id = :rowId");
        $query->bindParam(':rowId', $rowId);
        $query->execute();
        header('Location: '.'index.php');
        
    } else {
        echo "Invalid request. 'row_id' not set.";
    }
} else {
    echo "Invalid request method. Use POST.";
}
?>
