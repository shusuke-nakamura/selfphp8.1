# selfphp8.1

☆ php.iniのパス
/opt/anyenv/envs/phpenv/versions/8.1.5/etc/php.ini

☆ mariadbのユーザ作成
GRANT ALL PRIVILEGES ON selfphp.* TO selfusr@"%" IDENTIFIED BY 'selfpass';

☆ Xdebug
sudo vi /opt/anyenv/envs/phpenv/versions/8.1.5/etc/conf.d/xdebug.ini
以下の2行を末尾に追加して、apacheを再起動
xdebug.mode=debug
xdebug.start_with_request=yes

☆ sendmailの設定(php.ini)
mbstring.language = Japanese
sendmail_path = /usr/sbin/sendmail -t -i

(※)
sudo service sendmail start

☆ Prettier
setting.json
{
    "[php]": {
        "editor.formatOnSave": true
    }
}
