@echo off&color 0a	
chcp 65001
title 启动闪电Moodle的WNMP运行架构
if exist "%SystemRoot%\SysWOW64" path %path%;%windir%\SysNative;%SystemRoot%\SysWOW64;%~dp0
bcdedit >nul
if '%errorlevel%' NEQ '0' (goto UACPrompt) else (goto UACAdmin)
:UACPrompt
%1 start "" mshta vbscript:createobject("shell.application").shellexecute("""%~0""","::",,"runas",1)(window.close)&exit
exit /B
:UACAdmin
cd /d "%~dp0"
echo	****************** Begin ************************
echo [当前路径]：%CD%
echo 已取得管理员权限
echo [系统版本]: 
ver
echo	****************** End **************************

@echo off
echo.
echo Startting MySQL...
mariadb\bin\mysqld.exe --install zzg_mysql --defaults-file=C:\moodle_wnmp_64\mariadb\bin\my.ini
net start zzg_mysql

echo Startting nginx...
c:\moodle_wnmp_64\nginx\RunHiddenConsole.exe c:\moodle_wnmp_64\nginx\nginx.exe -p c:\moodle_wnmp_64\nginx

echo.
echo Startting PHP FastCGI...
c:\moodle_wnmp_64\nginx\RunHiddenConsole.exe c:\moodle_wnmp_64\xxfpm\bin\xxfpm.exe "c:/moodle_wnmp_64/php/php-cgi.exe -c c:/moodle_wnmp_64/php/php.ini" -n 8 -i 127.0.0.1 -p 9000

echo.
echo WNMP架构成功启动，请在浏览器中运行 http://127.0.0.1 来打开Moodle网站！
rem pause
exit