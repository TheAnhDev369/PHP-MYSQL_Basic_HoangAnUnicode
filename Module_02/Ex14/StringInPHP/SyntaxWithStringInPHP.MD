› Nếu chuỗi đặt trong dấu nháy kép ("") thì các ký tự nháy kép phía trong chuỗi
phải có ký tự escape (\) phía trước

› Ví dụ: echo "Trung tâm đào tạo \"Unicode\" — Đào tạo lập trình PHP";

› Nếu chuỗi được đặt trong dấu nháy kép mà có biến thì không cần phải nối chuỗi

› Ví dụ: echo "Trung tâm đào tạo $cornpany - Đào tạo lập trình PHP";

› Nếu chuỗi đặt trong dấu nháy đơn ('') thì các ký tự nháy đơn phía trong chuỗi
phải có ký tự escape (\) phía trước

› Ví dụ: echo 'Trung tâm \'Unicode\' — Đào tạo lập trình PHP';

Nếu chuỗi có dấu nháy đơn hoặc nháy kép mà không muốn dùng dấu \ thì ta có thể đổi dấu linh hoạt, bên ngoài '' thì bên trong " và ngược lại.

=› Kết luận: Trùng dấu thì phải có escape (\), nếu không phải đổi dấu .