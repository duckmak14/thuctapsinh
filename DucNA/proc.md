# Khắc phục sự cố bằng hệ thống tập tin Proc 
- Các tệp tin quan trọng trong proc cung cấp thông tin về các quy trình đang chạy sẽ giúp gỡ lỗi và khắc phục sự cố . Nó là một folder quan trọng của linux mà chúng ta không thể bỏ qua được 
- Proc là một tập tin ảo cung cấp giao diện cho cấu trúc dữ liệu kernel. Nó là một folder nằm trên memory chứ không phải nằm trên disk nó được tự động gắn với `root folder` 
- Bởi vì nó như là một hệ thống tệp tin bình thường trên linux nên chúng ta có thể thao tác với thư mục bằng các lệnh bình thường 

1. Cách sử dụng cơ bản 
- khi di chuyển vào thư mục `/proc` thì ta sẽ thấy có rất nhiều thư mục có số. Đó chính là PID của các tiến trình đang được thực thi.
- Các file có tên là các file chung dùng trên toàn hệ thống không liên quan đến một tiến trình cụ thể nào đó.
- Cụ thể như là file `/proc/cpuinfo` sẽ hiển thị ra thông tin CPU của hệ thống 

```
cat /proc/cpuinfo
```
- Thông tin về memory 
```
cat /proc/meminfo
```
- Xem về thông tin của tất cả các module đã được load 
```
cat /proc/modules
```
- Xem tất cả các hệ thống được hỗ trợ 
```
cat /proc/filesystems
```

2. Tìm hiểu file trên mỗi folder. 
- Bật terminal và chạy lệnh `echo $$`. Để tìm ra giá trị PID của tiến trình chạy `terminal` 
```
anhduc@anhduc:~$ echo $$
2579
```
- Di chuyển vào thư mục đó thì ta thấy rằng danh sách `file` `folder` giống như `PID = 1` 
```
anhduc@anhduc:/proc/2579$ ls
arch_status  clear_refs       cwd      gid_map    maps        net        oom_score_adj  root       smaps         status         uid_map
attr         cmdline          environ  io         mem         ns         pagemap        sched      smaps_rollup  syscall        wchan
autogroup    comm             exe      limits     mountinfo   numa_maps  patch_state    schedstat  stack         task
auxv         coredump_filter  fd       loginuid   mounts      oom_adj    personality    sessionid  stat          timers
cgroup       cpuset           fdinfo   map_files  mountstats  oom_score  projid_map     setgroups  statm         timerslack_ns
```
- Bật một `terminal` và chạy lệnh lệnh 
```
anhduc@anhduc:~$ tty
/dev/pts/1
anhduc@anhduc:~$ cat

```
- Lệnh cat sẽ đợi bạn nhập dữ liệu để có thể chạy. Sau đó dùng lệnh `pgrep` để sử dụng tìm PID của lệnh cat 
```
anhduc@anhduc:/proc/2579$ pgrep cat
2661
```
- Ta di chuyển vào thư mục và đọc file trong đó. Ví dụ tìm lệnh tên command của PID đấy 
```
cat /proc/24335/cmdline
```
- Tìm thư mục đang thực hiện lệnh đó
```
anhduc@anhduc:/proc/2579$ ls -l  /proc/2661/cwd
lrwxrwxrwx 1 anhduc anhduc 0 Thg 4 21 09:48 /proc/2661/cwd -> /home/anhduc
```
- Nếu như một nhị phân được thực thi thì. một số file sẽ được sinh ra trong quá trình theo mặc định. 
```
anhduc@anhduc:/proc/2579$ ls -l  /proc/8301/fd
total 0
lrwx------ 1 anhduc anhduc 64 Thg 4 21 12:46 0 -> /dev/pts/1
lrwx------ 1 anhduc anhduc 64 Thg 4 21 12:46 1 -> /dev/pts/1
lrwx------ 1 anhduc anhduc 64 Thg 4 21 12:46 2 -> /dev/pts/1
```
- Đường dẫn đến tệp nhị phân của lệnh được thực thi. Trong trường hợp này là lệnh cat 
```
anhduc@anhduc:/proc/2579$ ls -l  /proc/8301/exe
lrwxrwxrwx 1 anhduc anhduc 0 Thg 4 21 10:59 /proc/8301/exe -> /bin/cat
```
- Tương tự nếu bạn gửi file `environ` bạn có thể biết được các biến môi trường sử dụng trong lệnh cat
```
cat /proc/24335/environ
```

3. Một số thư mục và file  quan trọng khác

| File | description | 
|---|---|
| File của tiến trình | Một số file quan trọng của một tiến trình |
| /proc/$pid/io | Chứa số liệu thống kê I/O cho process |
| /proc/$pid/limits | Hiện thị giới hạn tài nguyên cho tiến trình |
| /proc/$pid/maps | Hiển thị vùng bộ nhớ và quyền được truy cập |
| /proc/$pid/stack | Dấu vết của hàm gọi trong stack kernel của tiến trình |
| /proc/$pid/stat | Thông tin trạng thái về tiến trình |
| /proc/$pid/task/  | Thư mục chứa thống tin về các luồng | 
| File của hệ thống | Một số file quan trọng của một hệ thống |
| /proc/partitions | Thông tin về phân vùng của hệ thống |
| /proc/swaps | Hiển thị thông tin về swaps của hệ thống |
| /proc/self | hiển thị về quá trình truy cập đến folder proc của hệ thống |
| /proc/slabinfo  | Thông tin về kernel caches |
| /proc/sys | Các tệp và các biến trong thư mục con trong biến kernel | 