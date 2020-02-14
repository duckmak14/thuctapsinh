# Cơ bản trong CSS 
1. Outline 
- Là phần bên ngoài bao quanh các `element` tạo ra để làm nổi bật nội dung bên trong nó 
- Trong CSS sẽ có các thuộc tính của `outline` như sau:
    - outline-style : Các kiểu outline
    - outline-color : Các loại màu của outline
    - outline-width : Chiều rộng của outline được tính theo đơn vị (px; pt; in; cm; em; etc) hay còn 3 loại `thin`(1px); `medium`(3px); `thick`(5px)
    - outline-offset : sẽ tạo ra một khoảng trắng ở giữa outline và `border` của `element`
- `outline` khác với lại `border`. `Border` là viền ngoài của `element` và có thể bị ghi đè lên phần nội dung khác. Các định nghĩa được khai báo chiều dài và chiều rộng của `element` không ảnh hưởng tới `outline`.
- Các kiểu `outline-style` bao gồm dưới đây
    - Dotted
    - dashed
    - solid
    - none
    - double 
    - groove 
    - ridge 
    - inset 
    - outset 
    - hidden
2. Text

Trong CSS thì có rất nhiều thuộc tính sẽ tác động lên các dòng text. Bao gồm các thuộc tính:
- color	: Được sử dụng để cài đặt màu của text. Được biểu thị bằng tên hoặc giá trị HEX và RGB
- direction	: chỉnh hướng của văn bản. ký tự nhập vào được ghi từ phải qua trái hoặc ngược lại 
- letter-spacing : Giúp tăng hoặc giảm khoảng trắng giữa các ký tự 
- line-height : Cài đặt chiều cao của dòng
- text-align : Chỉ định căn chỉnh lề của dòng. Văn bản được bắt đầu với sát phải; sát trái hoặc là ở giữa 
- text-decoration : Thường được sử dụng để xóa `decoration` khỏi văn bản. ví dụ như gắn link sẽ có dấu gạch chân ở dưới, dùng `text-decoration: none` để không sử dụng nó
- text-indent : Lùi đầu dòng một khoảng mỗi khi bắt đầu văn bản
- text-shadow : Được sử dụng để thêm bóng cho văn bản (text-shadow: 3px(bóng ngang) 2px(bóng dọc) red(màu bóng);)
- text-transform : Được sử dụng để xác định chữ hoa và chữ thường. Có 3 giá trị (uppercase: biến tất cả thành chữ hoa; lowercase: tất cả là chữ thường; capitalize: Mỗi chữ được viết hoa chữ cái đầu)
- text-overflow	: Tràn chuỗi trong văn bản chỉ được sử dụng trong firefox
- unicode-bidi : 
- white-space : Định nghĩa cách xử lý của khoảng trắng trong một `element`. Ví dụ như hiểu thị như nguyên văn bản nhập vào hoặc là hiển thị hết dòng rồi tiếp tục xuống dòng tiếp theo,... Các giá trị trong white-space (inherit;initial;pre-wrap;pre-line;pre;nowrap;normal)
```
đầu vào là như sau 
<p>
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
</p>
```
```
white-space: pre;
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.
This is some text. This is some text. This is some text.

white-space: normal;
This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. This is some text.
```
- word-spacing : Khoảng cách giữa các từ được tính theo các đơn vị 

3. Fonts (phông chữ)
- Các thuộc tính của font xác định: Phông chữ, độ đậm, kích thước và kiểu của văn bản
- Trong CSS có 2 kiểu của phông chữ 
    - generic family: Một nhóm phông chữ giống như "Serif" or "Monospace"
    - font family: Một nhóm phông chữ giống như "Times New Roman" or "Arial"

Trong Fonts có các thuộc tính 
- font : Các cài đặt nằm trong một khai báo
- font-family	: Chỉ ra một trong 2 kiểu family
- font-size	: Chỉ ra size của phông chữ 
- font-style	: Chỉ ra kiểu phông chữ cho văn bản có các kiểu (normal;italic;oblique;initial;inherit)
- font-variant	: tất cả chữ cái đều được viết hoa. Nhưng chữ cái được viết hoa theo bình thường sẽ được viết to hơn
- font-weight :  Chỉ ra độ đậm của phông chữ 

4. Link 
- Gắn link trong CSS có thể kết hợp được với rất nhiều thuộc tính (color; background;...)
- Các liên kết có thể được tạo kiểu khác nhau với trạng thái của nó. Có tổng cộng 4 kiểu gắn link
    - a:link : Hiển thị bình thường 
    - a:visited : Liên kết người dùng đã truy cập 
    - a:hover : hiển thị khi di con trỏ chuột đến 
    - a:active : Kích hoạt khi nó được nhấp vào 


5. List 
- Để tạo danh sách trong HTML thì có hai loại:
    - unordered lists`<ul>` : Các mục được đánh dấu bằng các ký tự đặc biệt
    - ordered lists `<ol>` : Các mục được đánh đấu bằng số 

- Còn trong CSS có thể đánh dấu bằng  :
    - Đánh dấu bằng ký tự đặc biệt
    - Đánh dấu bằng số 
    - Đặt màu nền vào danh sách liệt kê
    - chỉ định hình ảnh làm điểm đánh dấu 
- Trong CSS các thuộc tính có trong đó là 
    - list-style : cài đặt tất cả thuộc tính trong một khai báo 
    - list-style-images : Chỉ định hình ảnh
    - list-styleposition : chỉ định vị trí điểm đánh dấu 
    - list-style-type : Chỉ định loại đánh dấu mục danh sách

6. Table 
- Trong CSS thì việc tạo bảng đã được cải thiện nhiều hơn so với HTML 
- Để sử dụng đường viền trong table sử dụng thuộc tính `border`. Đường viền ta có thể tạo ra các đường viền riêng biệt của 4 phía 
    - border-bottom
    - border-top
    - border-left
    - border-right
```
table, th, td {
  border: 1px solid black;
}
```

Ví dụ trên chỉ định viền đen có đồ dày `1px` xung quanh các nội dung thẻ `<table>`; `<th>`; `<td>`

- Như ví dụ trên thì mõi một ô đều có đường viền riêng biệt. Muốn gộp chung lại thì ta sẽ sử dụng `border-collapse`
```
table, th, td {
  border: 1px solid black;
}
```
- Còn nếu muốn chỉ muốn đường viên vây quanh bảng chỉ khai báo thẻ `table`
```
table {
  border: 1px solid black;
}
```
- Chiều rộng và chiều dài được xác định bằng trường `width` và `height`
- Căn chỉnh trong văn bản của các ô trong bảng sẽ có căn ngang và căn dọc tương ứng với `text-align` và `vertical-align`
- Trong việc tạo bảng có thể kết hợp được với nhiều thẻ khác:
    - padding
    - margin 
    - color 
    - background
- Khi mà thông tin bảng có chiều rộng lớn thì sử dụng thẻ `style` cùng với trường `overflow-x:auto` để có thể có thanh kéo trượt
```
<div style:overflow-x:auto>
Nội dung của bảng 
</div>
```
