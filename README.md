## OOP
Thực hiển bởi: Lê Anh Đức.
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
- Open/Closed principle (OCP) : Có thể mở rộng 1 class nhưng không được sửa đổi bên trong class đó (open for extension
  but closed for modification)
- Liskov substitution principe (LSP) : Bất cứ instance nào của class cha cũng có thể được thay thế bởi instance của
  class con của nó mà không làm thay đổi tính đúng đắn của chương trình.
- Interface segregation principle (ISP) : Thay vì dùng 1 interface lớn, ta nên tách thành nhiều interface nhỏ, với nhiều
  mục đích cụ thể Client không nên phụ thuộc vào interface mà nó không sử dụng.
- Dependency inversion principle (DIP) : 1. Các module cấp cao không nên phụ thuộc vào các modules cấp thấp. Cả 2 nên
  phụ thuộc vào abstraction. 2. Abstraction không nên phụ thuộc vào chi tiết, mà ngược lại.

## PHP Magic Methods ?

1. Construct và Destruct

- Method __construct() dùng để tự động gọi khi một object được khởi tạo. Điều đó có nghĩa là bạn có thể chèn ác
  parameters và dependancies khi khởi tạo object. Ví dụ:

```
public function __construct($id, $text)
{
    $this->id = $id;
    $this->text = $text;
}

$tweet = new Tweet(123, 'Hello world');
```

- Khi một object bị destroy bởi __destruct() method. Một lần nữa với __construct() method sẽ tự động kích hoạt giống như
  là PHP sẽ xử lý nó giúp bạn.

```
public function __destruct()
{
    $this->connection->destroy();
}
```

2. Getting và Setting

- __get() method lắng nghe requests cho các thuộc tính mà không được public:

```
public function __get($property)
{
    if (property_exists($this, $property)) {
        return $this->$property;
    }
}

```

- __set() method set một thuộc tính không thể truy cập

```
public function __set($property, $value)
{
    if (property_exists($this, $property)) {
        $this->$property = $value;
    }
}
```

3. Checking to see if a property is set (kiểm tra xem thuộc tính đã được set hay chưa)

```
public function  __isset($property)
{
    return isset($this->$property);
}
```

4. Unsetting a property (bỏ set một thuộc tính)

```
public function __unset($property)
{
    unset($this->$property);
}
```

5. To String __toString() method cho phép bạn trả về object như một string:

```
public function __toString()
{
    return $this->text;
}
```

6. Sleep và Wakeup

__sleep() method cho phép bạn định nghĩa những thuộc tính nào của object nên serialize vì có thể bạn không muốn
serialize bất kỳ loại nào bên ngoài object có thể sẽ không phù hợp khi bạn unserialize nó.

7. Cloning

- Khi tạo một bản sao của một object trong PHP, nó vẫn liên kết tới object gốc.
- Điều này có nghĩa là nếu tạo một thay đổi trong object gốc thì object bản sao cũng sẽ thay đổi theo:
```
$sheep1 = new stdClass;
$sheep2 = $sheep1;
 
$sheep2->name = "Polly";
$sheep1->name = "Dolly";
 
echo $sheep1->name; // Dolly
echo $sheep2->name; // Dolly
```

8. Invoke __invoke() magic method cho phép sử dụng một object như thể nó là một function:

```
class User {
 
	protected $name;
	protected $timeline = array();

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function addTweet(Tweet $tweet)
	{
		$this->timeline[] = $tweet;
	}
}

class Tweet {

	protected $id;
	protected $text;
	protected $read;

	public function __construct($id, $text)
	{
		$this->id = $id;
		$this->text = $text;
		$this->read = false;
	}

	public function __invoke($user)
	{
		$user->addTweet($this);
		return $user;
	}

}
 
$users = array(new User('Ev'), new User('Jack'), new User('Biz'));
$tweet = new Tweet(123, 'Hello world');
$users = array_map($tweet, $users);
 
var_dump($users);

```

## call_user_func(): có thể gọi hàm do người dùng xác định được cung cấp bởi tham số "hàm".

```
<?php
    $func = "str_replace";
    $output_single = call_user_func($func, "monkeys", "giraffes", "Hundreds and thousands of monkeys\n");
    echo $output_single; //Hundreds and thousands of giraffes
?>
```
