# 1. Truy vấn Select 
Dùng để lấy dữ liệu trong các bảng của MYSQL.

Cú pháp 
```
SELECT truong1, truong2,...truongN FROM ten_bang
```
ví dụ hiển thị tất cả  dữ liệu trong bang1 thì ta dùng dấu * muốn hiển thị trường nào thì ta chọn từng trường theo cú pháp.

![](../images/MYSQL/screenshot_21.png)

- `Select DISTINCT` là truy vấn dùng để loại bỏ nhưng hàng trùng lặp trong một cột 

![](../images/MYSQL/screenshot_26.png)

- `select min` là truy vấn được sử dụng để  trả về giá trị min của cột chọn. kiểu số sẽ so sánh lớn nhỏ còn kiểu text sẽ so sánh theo bảng chữ cái 
- `select max` giống với `select min` nhưng nó sẽ trả về giá trị max.

![](../images/MYSQL/screenshot_29.png)

- `select count` sẽ trả về số lượng hàng của cột đã chỉ định 

![](../images/MYSQL/screenshot_30.png)

- `select avg` sẽ trả về giá trị trung bình của cột đó. Nếu là kiểu text thì nó sẽ là 0. Chỉ áp dụng với kiểu số

![](../images/MYSQL/screenshot_31.png)

- `select sum` sẽ trả về giá trị tổng của cột đó. Chỉ áp dụng với kiểu số.

![](../images/MYSQL/screenshot_32.png)
# 2. Mệnh đề where
Dùng để thêm điều kiện vào cho câu lệnh

Cú pháp 
```
SELECT truong1, truong2,...truongN FROM ten_bang
[WHERE dieuKien1 [AND [OR]] dieuKien2.....
```
![](../images/MYSQL/screenshot_13.png)

- Đằng trước có thể là `select` hoặc một lệnh khác như  `delete` hay `update`
- Có thể xác định bất kỳ điều kiện nào khi sử dụng mệnh đề where
- Mệnh đề where có thể đi kèm với `and` `or` và `not` ở trong điều kiện

![](../images/MYSQL/screenshot_27.png)

# 3. Truy vấn update
Dùng để sywar đổi dữ liệu trong bảng của mysql 

Cú pháp
```
UPDATE ten_bang SET truong1=giaTri_moi_1, truong2=giaTri_moi_2
[MenhDe WHERE];
```
![](../images/MYSQL/screenshot_15.png)

Khi update thì ở mệnh đề where ta phải ghi điều kiện là khóa chính hoặc khóa ngoại để có thể update chính xác được trường của bản ghi mà ta muốn thay đổi.
# 4. Truy vấn delete
Dùng để  xóa dữ liệu trong bảng chỉ định; hoặc xóa các user...

Cú pháp
```
DELETE FROM ten_bang [Menhde WHERE]
```
![](../images/MYSQL/screenshot_14.png)

# 5. Mệnh đề like
Like thường được sử dụng kết hợp với các mệnh đề khác. Hay được dùng chung với WHERE và được thay thế cho dấu bằng. Có thể dùng ký tự `%` để tìm kiếm giống như `*` trong linux.

# 6. Mệnh đề order by
Dùng để sắp xếp các kết quả trả về sau khi truy vấn 

Cú pháp
```
SELECT truong1, truong2,...truongN FROM ten_bang
ORDER BY truong1, [truong2...] [ASC [DESC]]
```
Với thì thứ tự sẽ được sắp xếp theo 2 loại là ASC (tăng dần) và DESC(giảm dần).


![](../images/MYSQL/screenshot_28.png)

# 7. Sử dụng join
Được sử dụng để lấy dữ liệu từ nhiều bảng và ghép chúng lại với nhau
```
SELECT a.mssv, a.ten, b.hocphi
    FROM sinhvienk60 a RIGHT JOIN hocphik60 b
    where a.ten = b.ten;
```

# 8. Sử dụng Alter 
Dùng để sửa dữ liệu trường của bảng có thể thêm xóa và sửa đổi được trường của bảng 

Cú pháp 
```
ALTER TABLE tên-bảng change truong cũ trường mới;
```
![](../images/MYSQL/screenshot_25.png)
# 9. Sử dụng in
Dùng để thay thế cho lệnh or khi viết điều kiện where trong lệnh

Ví dụ muốn chọn những bạn có điểm thi bằng 8.5 9 và 9.5 thay vì viết 3 or thì ta sử dụng in 
```
SELECT * FROM sinhvienk58 
    WHERE diemthi IN ( 8.50, 9.00, 9.50 );
```

# 10. Dùng between
Dùng để chỉ ra khoảng ở dữ của 2 số 
```
select * from tên-bảng
where diemthi BETWEEN 8 and 10;
```
# 11. Dùng insert 
Dùng để chèn dữ liệu vào trong bảng mà ta Muốn 
```
INSERT INTO ten_bang ( `truong1`, `truong2`,...`truongN` )
                       VALUES
                       ( 'giatri1', 'giatri2',...'giatriN' );
```

# 12. Sử dụng view 
`view` Được dùng để để lưu một truy vấn mặc định nào đó như là một bảng.
Cấu trúc 
```
create view `tên view` as truy vấn
```

ví dụ là ta sẽ tạo ra một view như là một truy vấn bao gồm masonv, hoten, ngaysinh, masodv có cấu trúc như sau 

```
create view `test` as select masonv, hoten, ngaysinh, masodv from quanly.nhanvien
```
sau đó ta đọc view như đọc bảng bằng truy vấn 
```
SELECT * FROM `accounts_v_members`;
```

# LINK THAM KHẢO 
https://www.w3schools.com/sql/sql_select.asp