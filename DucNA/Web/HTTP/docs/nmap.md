# Tìm hiểu về Lệnh nmap
## 1. Khái niệm 
nmap (Network Mapper) là một tool open source đươc sử dụng để quét các cổng và phát hiện các lỗ hổng mạng. Nmap được sử dụng để xác định các thiết bị đang chạy trên hệ thống, cũng như kiểm tra các máy chủ có sẵn và các dịch vụ đang chạy trên các máy chủ này, đồng thời dò tìm các port đang mở và từ đó phát hiện ra các nguy cơ về bảo mật.

## Một số tính năng của nmap
* Lập bản đồ mạng(Network mapping): Nmap được sử dụng để xác định các thiết bị đang hoạt động như server, bộ định tuyến và cách chúng được kết nối vật lý với nhau như thế nào.
* Phát hiện hệ điều hành (OS detection): Nmap xác định được OS của các thiết bị đang chạy trên mạng, đồng thời cung cấp thông tin về nhà cung cấp, hệ điều hành cơ sở, phiên bản phần mềm và thậm chí có thể ước tính được thời gian họat động của thiết bị.
* Dò tìm dịch vụ(Service discovery): Nó có thể xác định các service đang được hoạt động trên một server(ví dụ mail, web ,...) cũng như có thể các ứng dụng và các phiên bản cụ thể của những phần mềm liên quan mà chúng đang chạy.
* Kiểm tra bảo mật(Security auditing): Nmap có thể tìm ra các phiên bản của hệ điều hành và các ứng dụng nào đang chạy trên server, từ đó cho phép người quản trị có thể xác định được những lỗ hổng cụ thể. (Ví dụ nhà sản xuất thông báo một hệ điều hành đang có một lỗ hổng từ đó kẻ tấn công có thể scan ra được các server đang chạy HĐH này mà chưa kịp nâng cấp từ đó có thể tấn công thông qua đây).

## Một số option của nmap 
1. Kết quả khi thực hiện lệnh nmap 
```
anhduc@anhduc:~$ nmap 10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 12:52 +07
Nmap scan report for 10.10.34.123
Host is up (0.021s latency).
Not shown: 997 closed ports
PORT    STATE SERVICE
22/tcp  open  ssh
80/tcp  open  http
514/tcp open  shell

Nmap done: 1 IP address (1 host up) scanned in 13.52 seconds
```

2. Nmap có thể scan được các địa chỉ như hostname, IP hay một dải mạng 
* -F Sử dụng để scan nhanh các port(sẽ scan ít port hơn khi sử dụng default)
* -d <port ranges> Chỉ scan các port được chỉ định. Ví dụ

scan list port 
```
anhduc@anhduc:~$ nmap -p 22,514 10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 12:55 +07
Nmap scan report for 10.10.34.123
Host is up (0.0049s latency).

PORT    STATE SERVICE
22/tcp  open  ssh
514/tcp open  shell

Nmap done: 1 IP address (1 host up) scanned in 13.07 seconds
```

scan từ 22 đến 81
```
anhduc@anhduc:~$ nmap -p 22-81 10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 12:58 +07
Nmap scan report for 10.10.34.123
Host is up (0.011s latency).
Not shown: 58 closed ports
PORT   STATE SERVICE
22/tcp open  ssh
80/tcp open  http

Nmap done: 1 IP address (1 host up) scanned in 13.10 seconds
```

3. Hoặc chỉ định rõ TCP hoặc UDP 
```
anhduc@anhduc:~$ nmap -p T:22-81 10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 12:59 +07
Nmap scan report for 10.10.34.123
Host is up (0.011s latency).
Not shown: 58 closed ports
PORT   STATE SERVICE
22/tcp open  ssh
80/tcp open  http
```

```
anhduc@anhduc:~$ nmap -p U:22-81 10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 13:00 +07
WARNING: a TCP scan type was requested, but no tcp ports were specified.  Skipping this scan type.
Nmap scan report for 10.10.34.123
Host is up (0.0042s latency).
0 ports scanned on 10.10.34.123

Nmap done: 1 IP address (1 host up) scanned in 13.04 seconds
```

4. `--reason` Hiển thị lý do kết luận trạng thái của port 

```
anhduc@anhduc:~$ nmap --reason  10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 13:04 +07
Nmap scan report for 10.10.34.123
Host is up, received syn-ack (0.020s latency).
Not shown: 997 closed ports
Reason: 997 conn-refused
PORT    STATE SERVICE REASON
22/tcp  open  ssh     syn-ack
80/tcp  open  http    syn-ack
514/tcp open  shell   syn-ack

Nmap done: 1 IP address (1 host up) scanned in 13.52 seconds
```

đánh giá nhờ cơ chế của gửi gói tin syn-ack

5. Kiểm tra xem máy `up` hay `down` 
```
anhduc@anhduc:~$ nmap -sP  10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 13:08 +07
Nmap scan report for 10.10.34.123
Host is up (0.0041s latency).
Nmap done: 1 IP address (1 host up) scanned in 13.01 seconds
```

6. xác định port đang mở, các dịch vụ đang chạy trên các port và version của service đó.

```
anhduc@anhduc:~$ nmap -sV  10.10.34.123

Starting Nmap 7.60 ( https://nmap.org ) at 2020-01-15 13:10 +07
Nmap scan report for 10.10.34.123
Host is up (0.016s latency).
Not shown: 997 closed ports
PORT    STATE SERVICE VERSION
22/tcp  open  ssh     OpenSSH 7.4 (protocol 2.0)
80/tcp  open  http    Apache httpd 2.4.6 ((CentOS))
514/tcp open  shell?

Service detection performed. Please report any incorrect results at https://nmap.org/submit/ .
Nmap done: 1 IP address (1 host up) scanned in 163.78 seconds
```