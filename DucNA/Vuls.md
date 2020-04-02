# Tìm hiểu về Vuls 
## I. Khái niệm 
- `Vuls`(vulnerability scanner) là một công cụ được sử dụng để  quét các lỗ hỏng. Nó được viết bằng ngôn ngữ `GO`
- Nó có thể tự động phân tích các lỗ hỏng bảo mật của các phần mềm được cài đặt trên hệ thống. 
- `Vuls` sử dụng nhiều vulnerability databases ví dụ như National Vulnerability Database(NVD); FREEBSD; OVAL;...
- `Vuls` có khả năng quét nhiều hệ thống cùng một lúc và có thể gửi cảnh báo qua e-mail và slack.
- `Vuls` có 3 chế độ được sử dụng để scan: 
    - fast
    - fast root
    - deep 
- `Vuls` không thể kiểm soát lưu lượng mạng hoặc là bảo vệ các cuộc tấn công login 
- Nhưng mà nó có thể tự động báo cáo các lỗ hỏng cho các gói được cài trong linux 
- Khi mà DB của `Vuls` đưa ra việc khắc phục lỗ hỏng được phát hiện thì nó cũng đưa vào tin cảnh báo 
- Khi tạo cảnh báo thì `Vuls` sẽ ưu tiên mức độ cảnh báo đã được thiết lập sẵn 

1. Mục tiêu của bài hướng dẫn 
- Trong hướng dẫn này sẽ sử dụng `Vuls` trên ubuntu 18.04 server. 
- Cài đặt cấu hình scan và cảnh báo về slack. 

2. Chuẩn bị 
- Hai máy ubuntu 18.04 tối thiểu 2G RAM. Được chạy dưới quyền root và tài khoản user thường 
 
## II. Thực hiện 
1.  Cài đặt môi trường 
- Tạo thư mục để lưu trữ dữ liệu của  `Vuls`
``` 
sudo mkdir /usr/share/vuls-data
```
- Thay quyền sở hữu cho user thường 
```
sudo chown -R sammy /usr/share/vuls-data
```
- Update các gói 
```
sudo apt update
```
- Cài đặt các gói cần thiết 
```
sudo apt install sqlite git debian-goodies gcc make wget
```
- Cài đặt ngôn ngữ GO. Dùng snap để có thể download được phiên bản mới nhất của GO 
```
wget https://dl.google.com/go/go1.14.1.linux-amd64.tar.gz

tar -C /usr/local -xzf go1.14.1.linux-amd64.tar.gz
```
- Tạo file `/etc/profile.d/go-env.sh`. Nó sẽ tự chạy mỗi khi máy mở. Chức năng của nó là tạo ra các biến môi trường 
```
sudo vi /etc/profile.d/go-env.sh
```
với nội dung sau 
```
export GOPATH=$HOME/go
export PATH=$PATH:/usr/local/go/bin
```
- Cấp quyền cho thư mục 
```
sudo chmod +x /etc/profile.d/go-env.sh
```
- Chạy để thực thi file để tránh phải đăng nhập lại 
```
source /etc/profile.d/go-env.sh
```

2. Cài đặt và chạy gói `go-cve-dictionary`
- Gói này sẽ cung cấp quyền truy cập NVD(National Vulnerability Database)
- NVD là kho lưu trữ vulnerabilities và public lớn nhất. Nó có sẵn định dạng cho máy đọc 
- Tạo thư mục để lưu trữ `go-cve-dictionary`
```
mkdir -p $GOPATH/src/github.com/kotakanbe
```
- Di chuyển đến thư mục 
```
cd $GOPATH/src/github.com/kotakanbe
```
- clone `go-cve-dictionary`
```
git clone https://github.com/kotakanbe/go-cve-dictionary.git
```
- Cài đặt `go-cve-dictionary`
```
cd go-cve-dictionary
make install
```
- Để hệ thống có sẵn copy nó vào thư mục của hệ thống
```
sudo cp $GOPATH/bin/go-cve-dictionary /usr/local/bin
```
- Tạo thư mục log cho nó và cấp quyền cho thư mục 
```
sudo mkdir /var/log/vuls

sudo chmod 700 /var/log/vuls

sudo chown -R sammy /var/log/vuls
```
- Download dữ liệu từ NVD 
```
for i in `seq 2002 $(date +"%Y")`; do sudo go-cve-dictionary fetchnvd -dbpath /usr/share/vuls-data/cve.sqlite3 -years $i; done
```
