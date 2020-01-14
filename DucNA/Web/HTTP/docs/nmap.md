# Tìm hiểu về Lệnh nmap
## 1. Khái niệm 
nmap (Network Mapper) là một tool open source đươc sử dụng để quét các cổng và phát hiện các lỗ hổng mạng. Nmap được sử dụng để xác định các thiết bị đang chạy trên hệ thống, cũng như kiểm tra các máy chủ có sẵn và các dịch vụ đang chạy trên các máy chủ này, đồng thời dò tìm các port đang mở và từ đó phát hiện ra các nguy cơ về bảo mật.

## Một số tính năng của nmap
* Lập bản đồ mạng(Network mapping): Nmap được sử dụng để xác định các thiết bị đang hoạt động như server, bộ định tuyến và cách chúng được kết nối vật lý với nhau như thế nào.
* Phát hiện hệ điều hành (OS detection): Nmap xác định được OS của các thiết bị đang chạy trên mạng, đồng thời cung cấp thông tin về nhà cung cấp, hệ điều hành cơ sở, phiên bản phần mềm và thậm chí có thể ước tính được thời gian họat động của thiết bị.
* Dò tìm dịch vụ(Service discovery): Nó có thể xác định các service đang được hoạt động trên một server(ví dụ mail, web ,...) cũng như có thể các ứng dụng và các phiên bản cụ thể của những phần mềm liên quan mà chúng đang chạy.
* Kiểm tra bảo mật(Security auditing): Nmap có thể tìm ra các phiên bản của hệ điều hành và các ứng dụng nào đang chạy trên server, từ đó cho phép người quản trị có thể xác định được những lỗ hổng cụ thể. (Ví dụ nhà sản xuất thông báo một hệ điều hành đang có một lỗ hổng từ đó kẻ tấn công có thể scan ra được các server đang chạy HĐH này mà chưa kịp nâng cấp từ đó có thể tấn công thông qua đây).

## Một số option của nmap 
