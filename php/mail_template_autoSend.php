<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = $_POST["email"]; // Địa chỉ email người A
  $subject = "Xác nhận đặt hàng"; // Chủ đề email

  // Nội dung email
  $message = "Xin chào " . $_POST["name"] . ",<br><br>";
  $message .= "Cảm ơn bạn đã đặt hàng. Dưới đây là thông tin đơn hàng của bạn:<br><br>";
  $message .= "Họ và tên: " . $_POST["name"] . "<br>";
  $message .= "Email: " . $_POST["email"] . "<br>";
  $message .= "Địa chỉ: " . $_POST["address"] . "<br><br>";
  $message .= "Chúng tôi sẽ xử lý đơn hàng của bạn trong thời gian sớm nhất.<br>";
  $message .= "Xin cảm ơn!<br>";

  // Gửi email
  $headers =  "From: nguoiB@example.com" . "\r\n" .
              "Reply-To: nguoiB@example.com" . "\r\n" .
              "Content-Type: text/html; charset=UTF-8" . "\r\n" .
              "X-Mailer: PHP/" . phpversion();
  
  mail($to, $subject, $message, $headers);

  // Hiển thị thông báo gửi thành công
  echo "Đơn hàng đã được gửi thành công!";
}
?>