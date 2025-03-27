# Dự Án Stripe Demo

Dự án này minh họa cách tích hợp Stripe để xử lý thanh toán.

## Hướng Dẫn Cài Đặt

Thực hiện các bước sau để thiết lập dự án:

1. **Lấy api key từ stripe**
   - Đăng ký tài khoản stripe
   - Vào trang https://dashboard.stripe.com/test/apikeys
   - Bật chế độ TEST MODE
   - Lấy Secret key

2. **Cài Đặt Các Thư Viện Phụ Thuộc**
   Đảm bảo bạn đã cài đặt [Composer](https://getcomposer.org/).
   ```bash
   composer install
   ```
   Hoặc
   ```bash
   composer require stripe/stripe-php
   ```

3. **Cấu Hình Dự Án**
   - Tạo file index.php ( File này là giao diện hiển thị )
   - Tạo file checkout.php ( File này để xử lý request )
   - Tạo file success.php ( File này để xử lý lúc stripe thanh toán thành công và chuyển hướng về )
   - Tạo file cancel.php ( File này để xử lý lúc stripe thanh toán KHÔNG thành công và chuyển hướng về )

4. **Logic tại checkout.php**
  - Khai báo success_url: $base_url.'/success.php?session_id={CHECKOUT_SESSION_ID}' (stripe sẽ chuyển hướng url này khi thành công, CHECKOUT_SESSION_ID để stripe truyền về giá trị )
  - Khai báo cancel_url: stripe sẽ chuyển hướng url này khi không thành công
  - line_items: khai báo các sản phẩm để thanh toán
  - unit_amount: giá thanh toán * 100
  - Khi gọi \Stripe\Checkout\Session::create sẽ trả về đối tượng gồm transaction id và url ( Url này dùng cho user thanh toán )
  - Xử lý chuyển hướng để qua trang thanh toán stripe
5. **Logic tại success.php**
   - Lấy giá trị session_id trên url
   - Dùng phương thức \Stripe\Checkout\Session::retrieve để lấy thông tin transaction
   - In biến $session để xem toàn bộ giá trị trả về

## Ghi Chú Bổ Sung
- 

