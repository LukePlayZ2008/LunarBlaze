<?php
// Your Telegram Bot API token
$botToken = "8369381995:AAGBc-ss0cVCoG9axms2VhuORBuPm2-9uBQ";

// Your Telegram chat ID
$chatId = "5510096443";

// Visitor info
$visitorIP = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d H:i:s");

// Message to send
$message = "🌍 New Visitor Alert!\n\n".
           "🕒 Time: $time\n".
           "📍 IP: $visitorIP\n".
           "💻 User-Agent: $userAgent";

// Send to Telegram
$send = file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($message));

// Optional: Redirect back to home page
header("Location: index.html");
exit();
?>
