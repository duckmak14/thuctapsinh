# Tìm hiểu một số thẻ cơ bản trong CSS
1. DISPLAY
- Thuộc tính hiển thị là một thuộc tính quan trọng nhât trong việc tạo bố cục của CSS 
- `display` nó sẽ chỉ định một `element` hiển thị. Thường thì có giá trị mặc định cho mỗi `element` trong HTML thì thường sẽ có hai kiểu đó là `block` và `inline` 
- `Block-element` : là các phần tử sẽ là một khối khi bắt đầu. Theo mặc định khố sẽ ở hình dạng chiều rộng toàn màn hình và screen sẽ được xuống dòng. Ví dụ một số thẻ ở dạng `block`
    - `<div>`
    - `<h1> - <h6>`
    - `<p>`
    - `<form>`
    - `<header>`
    - `<footer>`
    - `<section>`
- `Inline Elements` : Là loại thẻ chỉ chiếu một lượng chiều rộng cần thiết cho mục đích của nó. một số thẻ thuộc dạng này là
    - `<span>`
    - `<a>`
    - `<img>`
- Cũng có một loại thuộc tính giống `display:none` nhưng mà nó chỉ ẩn tầm nhìn và vẫn chiếm khoảng không gian đó là `visibility:hidden`
```
<p>This is a visible heading</p>
<p style="display:none;">This is a hidden heading</p>
<p>Notice that the h1 element with display: none; does not take up any space.</p>
```
kết quả hiển thị 
```
This is a visible heading
Notice that the h1 element with display: none; does not take up any space
```
```
<p>This is a visible heading</p>
<p style="visibility:hidden;">This is a hidden heading<p>
<p>Notice that the h1 element with display: none; does not take up any space.</p>
```
```
This is a visible heading

Notice that the h1 element with display: none; does not take up any space
```
Sẽ có 1 khoảng trống do sử dụng `visibility:hidden` Sẽ vẫn chiếm khoảng không gian của khối đó những nó sẽ không hiển thị. Còn `display:none` sẽ không chiếm không gian của nó(thường được sử dụng cho js)

2. Max-width 
- Theo mặc định thì trong một `block-element` sẽ sử dụng hết chiều dài của màn hình. 
- sự khác nhau giữa `max-width` và `width` là việc khi thay đổi chiều dài của màn hình hiển thị thì chiều dọc của `max-width` sẽ kéo dài xuống nếu nội dung của nó dài hơn so với màn hình hiển thị. Còn `width` sẽ bị mất đi nội dung muốn hiển thị  

3. position 
- Được sử dụng để xác định vị trí của `element`. Có 5 loại được sử dụng để xác định vị trí 
    - static (được sử dụng làm mặc định cho các `element`)
    - relative
    - fixed
    - absolute
    - sticky
- Thuộc tính `position` được xác định bằng khoảng cách 4 chiều `top`; `right`; `left`; `bottom` nhưng mà phải xác định kiểu của nó trước. Nếu không xác định kiểu của nó trước thì không thể sử dụng được thuộc tính 4 giá trị kia
- `position: static` Được sử dụng mặc định và không bị ảnh hưởng bởi 4 thuộc tính trên vì nó sẽ mặc đinh đi theo sự sắp xếp của hàng 
- `position: relative` Xác định theo vị trí bình thường của nó và sẽ ảnh hưởng bởi 4 thuộc tính trên để thay đôi so với vị trí ban đầu
- `position: sticky` Đoạn văn bản sử dụng trường giá trị này sẽ không có tác dụng khi ta chưa kéo đến vị trí nó chiếm trong bố cục. Nó sẽ luôn hiển thị lên đầu trang nếu ta kéo trang web xuống dưới vị trí mà nó chiếm trong bố cục 
- `position: fixed` : Đoạn văn bản sử dụng trường giá trị này sẽ luôn được ghim vào vị trí mà nó đã được chọn 
- Các thuộc tính để xác định trong trường này 
    - bottom	
    - clip	
    - left	
    - position	
    - right	
    - top	
    - z-index

4. inline-block
- Trong `display` mà ta nói ở mục 1 thì có 2 giá trị thường được sử dụng cho các `element` theo mặc định là `block` và `inline`
- Ta còn có thể cài đặt cho nó nhận một trường giá trị khác là `inline-block` 
- Sự khác biệt chính giữa `inline-block` và `inline` là khi sử dụng `inline-block` ta được phép thiết lập chiều cao và chiều dài của `element` theo cách mà ta muốn
- Còn sự khác biệt chính giữa `block` và `inline-block` là khi sử dụng `block` thì mặc định nó sẽ có dấu ngắt dòng ở cuối. Thế nên khi hai `element` được viết cạnh nhau nó sẽ mặc định bắt đầu `element` ở dòng tiếp theo mà không phải ở bên cạnh 

5. overflow
- `overflow` trong css được sử dụng để điều chỉnh việc hiển thị nội dung khi mà nội dung quá lớn so với màn hình hiển thị 
- Trong thuộc tính `overflow` có tất cả 4 giá trị:
    - visible : Nội dung tràn ra ngoài block-element sẽ không bị cắt đi mà hiển thị tràn sang block-element khác 
    - scroll : Nội dung tràn ra ngoài sẽ bị cắt bớt và bị ẩn đi 
    - auto : Nội dung tràn ra ngoài và nó sẽ thêm thanh kéo trượt để kéo xem nội dung bị tràn ra ngoài. Nhưng mà nếu không cần thiết nó sẽ không có thanh kéo 
    - hidden : Mặc định luôn hiển thị thanh kéo dù `block-element` có hiển thị đủ trong ô được chi định hay là không 

6. Float 
- `Float` trong CSS được sử dụng để xác định cách mà một `element` hiển thị lên 
-   Thuộc tính `float` có tổng cộng 4 giá trị 
    -  left : nó sẽ hiển thị sát bên trái của `element` chứa nó ví dụ image sẽ hiển thị bên trái `div`
    - right : nó sẽ hiển thị sát bên phải của `element` chứa nó
    - none : Nó sẽ hiển thị tại điểm nó được xuất hiện trong văn bản. 
    - inheri : Nó sẽ thừa kế `element` chứa nó 

7. Clear 
- Thuộc tính `clear` trong CSS được sử dụng để xác định xem `element` nào có thể nổi bên cạnh `element` sử dụng thuộc tính này 
- Thuộc tính có các giá trị sau 
    - none : cả 2 phía đều cho phép phần nội dung tràn vào 
    - left : Không cho phép các `element` nổi ở bên trái 
    - right : Không cho phép các `element` nổi ở bên phải 
    - both  : Không cho phép các `element` nổi ở cả 2 phía 
    - inherit   : Thừa kế `element` chứa nó 