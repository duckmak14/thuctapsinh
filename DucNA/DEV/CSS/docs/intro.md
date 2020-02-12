# Giới thiệu cơ bản về CSS 
1. Khái niệm 
- CSS là viết tắt của cụm từ Cascading Style Sheets
- CSS miêu tả HTML trên màn hình, trang web, hoặc là trên các phương tiện khác.
- CSS có thể kiểu soát bố cục nhiều trang web cùng một lúc  
- Thông thường người ta sử dụng một tệp CSS riêng biệt. Trong tệp CSS không được chứa mã code HTML nào và được lưu dưới dạng `.css` ví dụ `example.css`
- Do tệp CSS thường được lưu thành một tệp riêng biệt vì thế muốn thay đổi bố cục trang web chỉ cần thay đổi tên tệp CSS là bố cục sẽ thay đổi 
- CSS được sử dụng với mục đích để xác định kiểu cho các trang web(Bao gồm thiết kế bố cục và cách hiển thị cho các thiếu bị khác nhau)
- Vào lúc HTML 3.2 được phát hành thì các thuộc tính màu sắc được ra đời. Như thế thì các trang web lớn được thêm phông chữ và màu ở mọi chỗ sẽ rất lâu. Cùng với lúc đó CSS đã được tạo ra bởi W3C(World Wide Web Consortium) thay thế cho định dạng style trong HTML 

2. Cấu trúc của CSS 
- Cấu trúc của một câu CSS bao gồm 2 phần: Phần chọn (selector) và phần khai báo (declaration)
```
p {
  color: red;
  text-align: center;
}
```
trong đó:
- `p` : là phần được chọn có nghĩa là các nội dung từ thẻ p 
- ` color` và `text-align` : là phần khai báo. nó được dùng để nói chữ được sử dụng sẽ là màu đỏ và sẽ được ghi ở giữa 

3. Comment trong CSS

Trong CSS để có thể comment lại một lưu ý nào đó thì có cấu trúc như sau
```
/* Nội dung được comment */
```

4. Các `Selector` trong CSS 
- Khi mà sử dụng CSS sẽ chọn ta đối tượng để tác động vào giúp thay đổi style. Trong CSS được chia tất cả thành 5 loại `selectors`
    - `Simple`  : là các loại được chọn dựa trên name, id, class 
    - `Combinators` : Là một selector chứa nhiều `selector simple` gộp lại và bao gồm các tổ hợp. Trong CSS có tổng cộng 4 tổ hợp
    - `pseudo-class` : Được sử dụng để xác định cho một `element` riêng biệt nào đó. 
    - `Pseudo-Elements` : Được sử dụng để xác định cho một phần nhỏ trong `element` ví dụ như là chữ cái đầu của `head`
    - `Attribute Selectors` : Được sử dụng để xác định dựa trên một thuộc tính hoặc giá trị của nó 

5. Chèn file CSS vào HTML 
- Có 3 cách để thêm CSS vào HTML:
    - Bằng cách sử dụng thuộc tính trong thẻ `<style>`
    - Bằng cách sử dụng thẻ `<style>` trong phần `<head>`
    - Bằng cách sử dụng một tệp CSS bên ngoài
- Thông thường CSS sẽ sử dụng tệp bên ngoài để lưu trữ sau đó được chèn vào file HTML để nội dung được bố cục theo CSS đó 

6. Màu trong CSS
- Trong CSS thì cách biểu diễn màu có rất nhiều cách. Chúng ta có thể biểu diễn nó theo tên hoặc giá trị HEX, RGB Value, HSL Value
- Trong CSS sẽ có các loại màu của chữ, của viền và màu nền.

7. Nền (background)
- Các thuộc tính background trong CSS được sử dụng để xác định hình nền cho các `element`
- Có tất cả 5 loại thuộc tính background
    - background-color
    - background-image
    - background-repeat
    - background-attachment
    - background-position

8. Đường viền (Border)
- Thuộc tính `border` trong CSS chỉ định các kiểu dáng đường viền xung quanh một `element`
- đường viền được bắt đầu với thuộc tính là `border-style` có một số giá trị trong thuộc tính `border` là:
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
- Thuộc tính đường viền có thể chọn cùng một lúc 4 giá trị. Điều đó tương ứng với 4 phía của một `element`, các giá trị sẽ tính lần lượt theo thứ tự (trên, phải, dưới, trái)
- Một số thuộc tính của `border` là:
    - border-style
    - border-color
    - border-width
    - border-(left,right,top,bottom)

8. margins
- Thuộc tính `margin` được sử dụng để tạo không gian(khoảng trống) xung quanh cho các `element`
- Trong css có 4 loại `margin` :
    - margin-top
    - margin-right
    - margin-bottom
    - margin-left
- Trong CSS thì giá trị của `margin` sẽ có 4 loại:
    - `auto` : trình duyệt sẽ tự tính toán và căn lề
    - `length`: sẽ được tính theo các giá trị đơn vị (px, pt, cm, etc)
    - `%` : Các giá trị sẽ được tính theo phần trăm element
    - `inherit` : sẽ được kế thừa từa ` parent element`

ví dụ về inherit 
```
div {
  border: 1px solid red;
  margin-left: 100px;
}

p {
  margin-left: inherit;
}
```
như ở đoạn css trên ta thấy rằng thẻ `<div>` sẽ được cách lề trái 100px. và thẻ `<p>` được đặt theo giá trị kế thừa. Khi ta lồng thẻ `<p>` vào trong thẻ `<div>`
```
<div>
<p>Nội Dung</p>
</div>
```
Thì nó sẽ kế thừa giá trị của thẻ `<div>` và cách lề trái một khoảng 100px

9. Padding 
- Rất dễ nhầm lẫn giữa `padding` và `margin`. `padding` được sử dụng để tạo khoảng trống cho một `element` nào đó nhưng mà là ở bên trong một khuông được xác định. còn `margin` là khoảng trống so với màn hình. 
- Trong CSS `padding` cũng có 4 loại:
    - padding-top
    - padding-right
    - padding-bottom
    - padding-left
- Và các giá trị `padding` được tính theo 3 loại sau:
    - `length` : được tính theo đơn vị của (pt, px, cm, etc)
    - `%` : Được tính so với phần trăm của element 
    - `inherit` : được tính theo giá trị thừa kế 

10. Chiều cao (height) và chiều rộng (width)
- Được sử dụng để xác định cho một `element`
- Chiều cao và chiều rộng được tính theo các đơn vị sau:
    - `auto` : được xác định bởi trình duyệt 
    - `length` : được tính theo đơn vị: px, cm etc
    - `%` : xác định theo phần trăm khối chứa nó 
    - `initial` : theo giá trị mặc định
    - `inherit` : mang tính chất thừa kế 
- Các giá trị trong thuộc tính chiều cao chiều rộng:
    - height	
    - max-height	
    - max-width	
    - min-height	
    - min-width	
    - width	
11. Box model 
- Tất cả các `element` trong HTML có thể được gọi là Boxes
- Trong CSS khi nhắc đến `box model` thường người ta nói đến thiết kế và bố cục 
- Trong `box model` bao gồm: margins; padding; borders; và content(là nội dung được hiển thị ví dụ là ảnh hay text)


