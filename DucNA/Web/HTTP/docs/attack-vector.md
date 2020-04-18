# Tìm hiểu về các cuộc attack vector 
1. Khái niệm 
- Attack vector là một phương thức tấn công được sử dụng để một attacker có quyền truy cập vào mạng máy tính local hoặc là remote network hay môt máy tính. 
- Nó được sử dụng để miêu tả con đường hay là cách thức được sử dụng đến tấn công 

2. Phân loại 
- Tấn công vào thông tin đăng nhập: Đây là một phương pháp được sử dụng phổ biến nhất để tấn công vào một hệ thống. Các con đường mà dẫn tới việc một hệ thống bị tấn công vào bằng thông tin đăng nhập có thể do thói quen đặt mật khẩu yếu, dùng một mật khẩu cho nhiều tài khoản, bị lộ thông tin đăng nhập, bị lừa đảo hoặc là phần mềm độc hại 
- `Phishing`( lừa đảo ): Là một cách truyền thống và thường được sử dụng khá nhiều. Nó đơn thuần là một tin hay một link bài viết hoặc là một mail trông rất giống thật. Mục đích của nó là được sử dụng để lừa có được thông tin đăng nhập của cá nhân 
- `Unpatched vulnerabilities` : còn được dịch là những lỗ hỏng chưa được update. Nó được sử dụng để tấn công xâm nhập vào các hệ thống và phần mềm. Để bảo vệ vấn đề này khá dễ dàng tìm ra các bản vá và bản cập nhật của nó. Đòi hỏi các quản trị viên phải update thông tin thường xuyên đối với các ứng dụng quan trọng
- ` poor encryption`(mã hóa yếu) : Đến hiện giờ vẫn có một vài người sử dụng các phiên truyền dữ liệu bằng FTP không được mã hóa dữ liệu hoặc là sử dụng HTTP mà không cài TLS. hoặc là sử dụng mã hóa SSL/TLS encryption phiên bản cũ dễ dàng bị bắt và đọc được. phải update phiên bản của SSL/TLS encryption để có thể trách được các cuộc tấn công trung gian 
- `Misconfiguration` : Cài đặt cấu hình sai. Vấn đề sử dụng cấu hình mặc định hoặc là cài đặt cấu hình sai thì có thể dẫn đến một lỗ hỏng của dịch vụ sẽ bị khai thác. thực hiện tốt vào cách cấu hình và phần cứng tốt thì là cách hiệu quả nhất để ngăn chặn các sự cố này. Hoặc là cài đặt một hệ thống giám sát tốt cũng có thể phát hiện được vấn đề cấu hình của các dịch vụ 
- `Malicious insiders`: Một attacker có thể là nhân viên làm việc bên trong công ty hoặc là có liên quan đến đến bên thứ 3 có mục đích gây thiệt hại cho công ty
- `Ransomware` : Các cuộc tấn công về `Ransomware` đang dần được gia tăng. Nó là một hình thức tống tiền trên internet thông qua các mối đe dọa. Phương pháp phổ biến được sử dụng thường là chặn và mã hóa dữ liệu từ hard drive và yêu cầu trả tiền để giải mã hóa 
- `Third-party vendors` : Thuê bên thứ 3 là một biện pháp khá tốt nhưng mà nó có thể là nguyên do để lộ thông tin và vi phạm an ninh 

3. Sự khác biệt giữa attack vector và attack surface 
- Như đã nói thì attack vector là một định nghĩa về cuộc tấn công khai thác và truy cập hệ thống hoặc mạng. 
- Và attack surface được sử dụng để định nghĩa tổng số attack vector có thể được sử dụng để tấn công hệ thống của bạn 
- Từ đó bạn có thể tổng hợp lại được tất cả các điểm attack vector lại để xem một cách tổng thể 

4. Các giải pháp có thể được sử dụng để chống lại các cuộc tấn công phổ biến 
- Phổ biến cho nhân viên về vấn đề an ninh mạng và đề phòng các cuộc tấn công lừa đảo, ransomware và các vấn đề về bảo vệ thông tin xâm nhập. 
- Thực hiện tốt các cấu hình phần cứng, ứng dụng phần mềm và máy chủ để tránh các cuộc tấn công `Misconfiguration` và bộ phần liên quan đến IT và bảo mật hệ thống, và quản trị hệ thống cần tuân theo các phương pháp và đề xuất tốt nhất được áp dụng.
- Sử dụng kiểm tra attack surface để có thể nhìn thấy các điểm attack vector có thể xảy ra để đề phòng một cách nhanh hơn. Khi nhắc đến quản lý attack surface thì có ứng dụng [ASR-Attack surface reduction](https://securitytrails.com/attack-surface-reduction) là một ứng dụng tốt 

5. Các tính năng của sản phần ASR-Attack surface reduction

- Tổng quan : Khi sử dụng `ASR` bạn sẽ nhận được một cái nhìn tổng quan về hệ thống của bạn, tổng số tên miền, tổng số IP, tổng lỗ hỏng được tìm thấy 
- Bạn có thể truy cập tùy chọn để tải xuống danh sách tất cả IP và tên miền phụ của bạn xuống 
- Nó sẽ tìm hiểu tất cả các cách thức và thời điểm mà các tài nguyên của bạn được thêm bao gồm các bản ghi DNS, chứ chỉ SSL và IP,... tất cả chúng được sắp xếp theo thời gian. 
- `ASR Explorer` là nơi điều khiển chính cho nhiệm vụ `exploration` trong hệ thống của bạn. Nó đi sâu vào tất cả tài nguyên của bạn từ một nơi duy nhất. 
- `IP tool` được sử dụng cho phép bạn nhanh chóng tìm kiếm được các port được mở, lịch sử cổng, tên miền được lưu trữ, định vị vị trí, nhà cung cấp dịch vụ lưu trữ web...
- `Scan lỗ hỏng` được sử dụng để phát hiện ra những lỗ hỏng chưa đưuọc update và nó vẫn được sử dụng trên tài nguyên. Nó là một việc làm có lợi ích rất lớn trong việc ngăn chặn mọi rủi ro trước khi chúng trở thành điểm để attack 
- Có thể kiểm tra được có tổng cộng bao nhiêu mẫu phát hiện lỗ hỏng `CVEs` hoạt động trên hệ thống 
- Phạm vi hoạt động của log. Nó sẽ tìm thông tin chi tiết về mọi thứ đxa được thêm vào: bản ghi DNS, URL scheme, tên máy chủ lưu trữ, port được mở, giá trị bản ghi, timestamp....