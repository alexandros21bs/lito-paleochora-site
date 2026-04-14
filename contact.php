<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: index.html');
	exit;
}

function clean_input(string $value): string {
	return trim(strip_tags($value));
}

$lang = clean_input($_POST['lang'] ?? 'el');
$name = clean_input($_POST['name'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$arrival = clean_input($_POST['arrival'] ?? '');
$departure = clean_input($_POST['departure'] ?? '');
$guests = clean_input($_POST['guests'] ?? '');
$room_type = clean_input($_POST['room_type'] ?? '');
$message = clean_input($_POST['message'] ?? '');

if ($name === '' || $email === '') {
	header('Location: index.html#contact');
	exit;
}

$to = 'litopal@yahoo.gr';
$subject = 'New Stay Request - Lito Apartments';

$body = "New stay request received:\n\n";
$body .= "Language: {$lang}\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n";
$body .= "Phone: {$phone}\n";
$body .= "Arrival: {$arrival}\n";
$body .= "Departure: {$departure}\n";
$body .= "Guests: {$guests}\n";
$body .= "Room Type: {$room_type}\n";
$body .= "Message: {$message}\n";

$headers = [];
$headers[] = 'From: Lito Apartments Website <no-reply@yourdomain.gr>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$mailSent = mail($to, $subject, $body, implode("\r\n", $headers));

if ($mailSent) {
	header('Location: thanks.html?lang=' . urlencode($lang));
	exit;
}

header('Location: index.html#contact');
exit;
