# selfphp8.1

☆ php.iniのパス
/opt/phpenv/versions/8.1.0/etc/php.ini

☆ mariadbのユーザ作成
GRANT ALL PRIVILEGES ON selfphp.* TO selfusr@"%" IDENTIFIED BY 'selfpass';

☆ Xdebug
sudo vi /opt/phpenv/versions/8.1.0/etc/conf.d/xdebug.ini
以下の2行を末尾に追加して、apacheを再起動
xdebug.mode=debug
xdebug.start_with_request=yes