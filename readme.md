# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

# Hướng dẫn cài đặt

## Fork project
- Đăng nhập vào bitbucket.org với tài khoản đã tạo
- Chọn Projects/training trên top menu
- Chọn Fork menu bên trái với tên mặc định là "training"

## Cấu hình remote repository của team trên local
- Bật terminal và gõ vào những dòng lệnh sau: 
```bash
$ cd /var/www/html
$ sudo mkdir training
$ sudo chmod -R 777 training
$ cd training
$ git init
```

- Add remote repo của team, ví dụ: 
```bash
$ git remote add team https://vagabondhoang@bitbucket.org/traininggroup/training.git
```

- Tạo branch "develop" và pull code từ server về: 

```bash
$ git checkout -b "develop"
$ git pull team develop
```

## Cấu hình remote repository của mình trên local
- Vào trình duyệt bật bitbucket.org, trên top menu chọn Repositories chọn  "vagabondhoang / training" hoặc "Huyen_Doan / training" tùy theo tài khoản.
- Sang menu bên trái chọn Clone sẽ hiển thị lên modal nhỏ, nếu nhìn thấy "SSH" thì click vào đó chuyển sang "HTTPS" sau đó copy link phía sau bỏ "git clone"
VD: 
```text
$ git clone https://duyliem@bitbucket.org/duyliem/training.git
```
chỉ copy link `https://duyliem@bitbucket.org/duyliem/training.git`

- Quay trở lại terminal gõ lệnh sau: `git remote add ten_minh link_vua_copy`
 VD: 
```bash
$ git remote add AnhHT https://vagabondhoang@bitbucket.org/vagabondhoang/training.git
```
P/S: AnhHT là tên viết tắt của "Hoàng Tuấn Anh"

## Cấu hình virtual host trên local
- Bật terminal và nhập vào những lệnh sau: 
```bash
$ sudo gedit /etc/apache2/sites-available/training.dev.conf
```
- Sau copy nội dung sau paste vào của sổ text editor: 
```text
<VirtualHost *:80>
        ServerAdmin admin@training.dev
        ServerName training.dev
        #ServerAlias www.training.dev
        DocumentRoot /var/www/html/training/public

        <Directory />
                Options FollowSymLinks
                AllowOverride All
        </Directory>

        <Directory /var/www/html/training/public>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```
- Tiếp theo quay trở lại terminal và enable site vừa tạo bằng lệnh:

```bash
$ sudo a2ensite training.dev.conf
$ sudo service apache2 reload
$ sudo gedit /etc/hosts
```
- Tiếp theo add thêm vào đầu file dòng sau (và save lại): 

```text
127.0.0.1 	training.dev
```
 
## Check lại cấu hình file và kiểm tra trên trình duyệt
- Bật trình duyệt và nhập vào: 
```text
training.dev
```
Nếu hiện ra chữ Laravel thì đã ok, nếu chưa được xem lại các bước ở trên.
- Kết quả: 
![](https://i.gyazo.com/cd5de8772ca4a34964e254b23943d16d.png "small image")
//
sửa code ; 
git add . 
git commit -amen 
git push cuongdomanh task_12 -f 
//
cho code trong stash ; 
git add . 
git stash save ; 
// lấy code từ stash ra ;
git stash apply stash@{0}


