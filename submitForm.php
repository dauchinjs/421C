<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $html = '<table>';
    $html .= '<tr><th>Name</th><th>Email</th><th>Phone</th></tr>';
    foreach ($name as $index => $value) {
        $html .= '<tr>';
        $html .= '<td>' . $value . '</td>';
        $html .= '<td>' . $email[$index] . '</td>';
        $html .= '<td>' . $phone[$index] . '</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';

    echo $html;
}