<?php
$status = $_GET['status'] ?? 'erro';
if ($status === 'sucesso') {
    header('Location: sucesso.php');
} else {
    header('Location: erro.php');
}
exit;
?>
