## OOP

- OOP ( Object Oriented Programming) – lập trình hướng đối tượng là một phương pháp lập trình dựa trên khái
  niệm về lớp và đối tượng. OOP tập trung vào các đối tượng thao tác hơn là logic để thao tác chúng.
- Đối tượng (Object) gồm 2 thành phần chính: Thuộc tính (Attribute) và Phương thức (Method): là những hành vi mà đối
  tượng có thể thực hiện.
- Lớp :Lớp là sự trừu tượng hóa của đối tượng. Những đối tượng có những đặc tính tương tự nhau sẽ được tập hợp thành một
  lớp. Lớp cũng sẽ bao gồm 2 thông tin là thuộc tính và phương thức.

### 4 đặc tính cơ bản của OOP

1. Tính kế thừa (Inheritance). Ví dụ:

- Lớp Cha là smartphone, có các thuộc tính: màu sắc, bộ nhớ, hệ điều hành…
- Các lớp Con là iPhone, Samsung, Oppo cũng có các thuộc tính: màu sắc, bộ nhớ, hệ điều hành…

3. Tính đa hình (Polymorphism). Ví dụ:

- Ở lớp smartphone, mỗi một dòng máy đều kế thừa các thành phần của lớp cha nhưng iPhone chạy trên hệ điều hành iOS, còn
  Samsung lại chạy trên hệ điều hành Android.
- Chó và mèo cùng nghe mệnh lệnh “kêu đi” từ người chủ. Chó sẽ “gâu gâu” còn mèo lại kêu “meo meo”.

4. Tính trừu tượng (Abstraction) oại bỏ những thứ phức tạp, không cần thiết của đối tượng và chỉ tập trung vào những gì
   cốt lõi, quan trọng. Ví dụ:
- Quản lý nhân viên thì chỉ cần quan tâm đến những thông tin như: Họ tên, Ngày sinh, Giới tính
- Chứ không cần phải quản lý thêm thông tin về: Chiều cao, Cân nặng, Sở thích, Màu da

## SOLID:

- Single responsibility priciple (SRP) : một class chỉ nên giữ một trách nhiệm duy nhất.
- Open/Closed principle (OCP) : Có thể mở rộng 1 class nhưng không được sửa đổi bên trong class đó (open for extension but closed for modification)
- Liskov substitution principe (LSP) : Bất cứ instance nào của class cha cũng có thể được thay thế bởi instance của class con của nó mà không làm thay đổi tính đúng đắn của chương trình.
- Interface segregation principle (ISP) : Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều mục đích cụ thể Client không nên phụ thuộc vào interface mà nó không sử dụng.
- Dependency inversion principle (DIP) : 1. Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. Cả 2 nên phụ thuộc vào abstraction. 2. Abstraction không nên phụ thuộc vào chi tiết, mà ngược lại.

##      
- 