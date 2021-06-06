@echo off&color 0a
chcp 65001
title 退出闪电Moodle的WNMP运行架构
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
echo Stopping mysql...
net stop zzg_mysql
mariadb\bin\mysqld --remove zzg_mysql

echo.
echo Stopping nginx...
taskkill /F /IM nginx.exe > nul

echo.
echo Stopping PHP FastCGI...
taskkill /F /IM xxfpm.exe > nul

echo.
echo WNMP架构已经停止运行，你能关闭掉这台电脑了。
rem pause
exit