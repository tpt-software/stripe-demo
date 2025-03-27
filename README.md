# Dự Án Stripe Demo

Dự án này minh họa cách tích hợp Stripe để xử lý thanh toán.

## Hướng Dẫn Cài Đặt

Thực hiện các bước sau để thiết lập dự án:

1. **Clone Repository**
   ```bash
   git clone <repository-url>
   cd stripe-demo
   ```

2. **Cài Đặt Các Thư Viện Phụ Thuộc**
   Đảm bảo bạn đã cài đặt [Composer](https://getcomposer.org/).
   ```bash
   composer install
   ```

3. **Cấu Hình Môi Trường**
   Sao chép tệp `.env.example` thành `.env` và cấu hình các biến môi trường.
   ```bash
   cp .env.example .env
   ```
   Cập nhật các biến sau trong tệp `.env`:
   - `STRIPE_KEY`: Khóa API Stripe của bạn.
   - `STRIPE_SECRET`: Khóa bí mật Stripe của bạn.

4. **Khởi Chạy Máy Chủ Phát Triển**
   Sử dụng một máy chủ cục bộ như [máy chủ tích hợp của PHP](https://www.php.net/manual/en/features.commandline.webserver.php) hoặc các công cụ như XAMPP.
   ```bash
   php -S 127.0.0.1:8000
   ```

5. **Truy Cập Ứng Dụng**
   Mở trình duyệt và truy cập `http://127.0.0.1:8000`.

## Ghi Chú Bổ Sung

- Đảm bảo tài khoản Stripe của bạn đã được thiết lập và bạn có các khóa API cần thiết.
- Đối với môi trường sản xuất, hãy cấu hình môi trường an toàn và sử dụng HTTPS.

