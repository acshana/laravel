yum install --enablerepo=remi --enablerepo=remi-php56 php php-opcache php-pecl-apcu php-devel php-mbstring php-mcrypt php-mysqlnd php-phpunit-PHPUnit php-pecl-xdebug php-pecl-xhprof php-pdo php-pear php-fpm php-cli php-xml php-bcmath php-process php-gd php-common
yum -y install php-gd curl
yum -y install curl-devel
php -v
lsb_release -a
yum -y install httpd httpd-devel
netstat -ntpl
rpm -qa|grep mysql
yum -y install mysql-server
clear
httpd -V
httpd -v
chkconfig httpd on
clear
reboot 
 rpm -Uvh http://ftp.iij.ad.jp/pub/linux/fedora/epel/7/x86_64/e/epel-release-7-5.noarch.rpm 
 rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
yum list --enablerepo=remi --enablerepo=remi-php56 | grep php
httpd -v
yum -y install mysql mariadb

yum -y install mariadb
systemctl start mariadb
ls /etc/init.d/
systemctl start mariadb 
rpm -qa|grep mysql
clear
ls
vim /etc/httpd/conf/httpd.conf 
clear
cd /etc/httpd/conf/
ls
vim httpd.conf 
cd ..
ls
cd conf.d/
ls
yum -y install nginx
clear
ls
clear
ls
yum -y install php-fpm
clear
mysql -u root -p
rpm -qa|grep maria
systemctl start mariadbd
yum remove mysql mysql-server mysql-libs compat-mysql
clear
yum remove mysql mysql-server mysql-libs compat-mysql
yum install MariaDB-server MariaDB-client
rpm -Uvh http://dev.mysql.com/get/mysql-community-release-el7-5.noarch.rpm
yum -y install php-mysql
rpm -qa|grep mysql
yum repolist enabled | grep "mysql.*-community.*"
yum -y install mysql-community-server
systemctl start mysqld
systemctl enable mysqld
mysql -u root -p
clear
ls
vim /root/account.txt
exit
yum -y install expect
mkpasswd 
xit
exit
clear
vim /etc/httpd/conf/httpd.conf 
systemctl restart httpd
netstat -ntpl
iptables -nL
yum -y install iptables-service
yum -y install iptables
yum install iptables*
vim /etc/sysconfig/iptables
systemctl enable iptables
systemctl restart iptables
echo $?
iptables -nL
clear
cd /var/www/html/
ls
php -V
php -v
mysql -V
clear
ls
tar xf phpMyAdmin-4.5.5.1-all-languages.tar.gz 
ls
mv phpMyAdmin-4.5.5.1-all-languages phpmyadmin
clear
ls
mv phpMyAdmin-4.5.5.1-all-languages.tar.gz ../sr
ls
cd ..
ls
mv sr /usr/local/src/phpMyAdmin-4.5.5.1-all-languages.tar.gz
clear
ls
cd html/
ls
cd phpmyadmin/
ls
vim /etc/selinux/config 
ifconfig 
mysqladmin -uroot -p password root
mysql -u root -p
clear
cd
ls
clear
ls
clear
pwd
cat account.txt 
mv account.txt readme.txt
vim readme.txt 
ls
cat readme.txt 
vim readme.txt 
rm -rf .readme.txt.swp 
clear
ls
vim readme.txt 
ls
cat readme.txt
php -v
php -m
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
ls
php composer-setup.php
php -r "unlink('composer-setup.php');"
composer -v
ls
mv composer.phar /usr/local/bin/composer
composer -v
composer global require "laravel/installer"
composer -v
laravel
ls
type composer
cd /usr/local/bin
ls
cd composer
type .composer
cd 
ls
cd /root/.config/composer/
ls
cd vendor
cd /root/.config/
ls
cd composer/
ls
cd vendor
ls
cd /home/
ls
vi /etc/profile
source /etc/profile
echo $PATH
ls
laravel new blog
cd blog
ls
php artisan serve
ls
php artisan serve
chmod 777 /root/bootstrap
chmod 777 /root/blog/bootstrap
chmod 777 /root/blog/storage
php artisan serve
composer update --no-scripts
php artisan serve
ls
rm -rf vendor
ls
php artisan serve
chmod -R 777 storage/
cd /usr/share/nginx/
ls
composer create-project laravel/laravel myproject dev-master --prefer-dist
composer create-project laravel/laravel myproject --prefer-dist "5.3.*"
chown -R nginx:nginx myproject
ls
cd myproject/
chmod -R 0777 storage/
vim /etc/sysconfig/selinux
cd
setenforce 0
cd /etc/nginx/conf.d/
ls
cd ..
ls
cd conf.d/
ls
cd ..
cd default.d/
ls
cd ..
cd
ls
cd /usr/share/nginx/
ls
cd myproject/
ls
php artisan serve
cd
cd backup/
ls
cat nginx.conf 
cd /etc/nginx/conf.d/
cat default.conf 
service nginx start
systemctl status nginx.service
vi /etc/nginx/conf.d/default.conf
service nginx start
systemctl status nginx.service
vi /etc/nginx/conf.d/default.conf
service nginx start
systemctl status nginx.service
vi /etc/nginx/conf.d/default.conf
service nginx start
systemctl status nginx.service
vi /etc/nginx/conf.d/default.conf
service nginx start
systemctl status nginx.service
ls
cat default.conf 
vi default.conf 
service nginx start
systemctl status nginx.service
cd /etc/
ls
cd nginx/
ls
cd ..
 cd /usr/share/nginx/
ls
cd myproject/
ls
cd config
ls
cd ..
cd public/
ls
cd..
cd ..
ls
php 
cd
cd /usr/share/nginx/myproject/
ls
cd /root/.config/composer/vendor/bin/
ls
cd laravel
cd ..
ls
cp /root/.config/composer/vendor /root/blog/vendor
cp /root/.config/composer/vendor /root/blog
cp vendor /root/blog/vendor
cp vendor /root/blog
cp -r /root/.config/composer/vendor /root/blog
cd /usr/share/nginx/myproject/
ls
cd config
ls
cd /etc/nginx/conf.d/
cp default.conf default.conf.old
ls
cd ..
ls
car nginx.conf
cat nginx.conf
cat nginx.conf.
cat nginx.conf.default 
cd /usr/share/nginx/myproject/
ls
cd public/
ls
cd /etc/nginx/conf.d/
cd ..
ls
cd
ls
mkdir backup
cd /etc/nginx/
ls
cp -r nginx.conf /root/backup/nginx.conf
cd
cd backup/
ls
cd /etc/nginx/
ls
vi nginx.conf
service nginx restart
ls
cd conf.d/
ls
cd ..
cp nginx.conf conf.d/default.conf
service nginx restart
vi nginx.conf
cp /root/backup/nginx.conf nginx.conf

service nginx restart
cat nginx.conf
vi nginx.conf
service nginx restart
cd conf.d/
vi default.conf 
service nginx restart
systemctl status nginx.service
journalctl -xe
sudo dnf install php-fpm
yum install php-fpm
service nginx restart
systemctl enable nginx
service nginx restart
systemctl enable php-fpm
systemctl restart php-fpm
service nginx restart
systemctl status nginx.service
ls
cd ..
ls
cat nginx.conf.default 
cat nginx.conf
cp nginx.conf conf.d/nginx.conf
ls
Cd /
Cd /etc
cd /etc
ls
cd nginx
ls
cd conf.d
ls
cat default.conf
cd /usr/share
ls
cd nginx
ls
吃的html
cd html
ls
cd ..
cd myproject
ls
php artisan serve
ls
cd blog
ls
php artisan serve
cd /usr/share/
;s
ls
cd nginx/
ls
cd myproject/
ls
php artisan serve
cd /usr/share/nginx/
ls
cd html
ls
cd
cd /etc/nginx/conf.d/
ls
cp default.conf default.conf.old
rm -rf default.conf
vim default.conf
service nginx restart
