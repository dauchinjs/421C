<?php
$rowIndex = $_POST['rowIndex'];

$html = '<tr>' .
    '<td><input type="text" id="id_name_' . $rowIndex . '" name="name[]" /></td>' .
    '<td><input type="text" id="id_email_' . $rowIndex . '" name="email[]" /></td>' .
    '<td><input type="text" id="id_phone_' . $rowIndex . '" name="phone[]" /></td>' .
    '</tr>';

echo json_encode(array('html' => $html));