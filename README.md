
# 闪电Moodle 3.11.4终结版

## 软件简介

***于1998.6与Moodle相遇，至今一直坚守，凝聚全球智慧***

***无需安装，一键运行；学习、研究、开发Moodle的利器***

***本软件包是WNMP + Moodle架构，用于科研和小规模试用***

***运行Moodle的生产环境是LNMP + Moodle架构***

***LNMP + Moodle架构的样板工程：https://mood.nbpt.edu.cn/***

- 闪电Moodle 3.11.4终结版
- Lightning Moodle 3.11.4 development version.

**作者：曾棕根 老师**

- 2021-11-29  于宁波市北仑区
- 邮箱：461932968@qq.com
- 手机：18757462581
- Moodle亚洲开发群：QQ群号263569269

## 教材与专著

- 1、教材《Moodle网络课程平台》，网购地址：
  http://product.dangdang.com/20859884.html
- 2、专著《慕课开源平台建设与应用--Moodle 2大规模在线考试研究与实践》，网购地址：
  http://product.dangdang.com/23630482.html

## 技术公开

- 本闪电Moodle包中的WNMP/LNMP架构技术改进已经写成论文发表在全国中文核心期刊《计算机应用与软件》杂志，分别是：
- （1）2018年4月15发表，论文名称《便携式高性能WNMP架构的研制》，论文查询网址www.cnki.net。

- （2）2021年6月15发表，论文名称《LNMP生产服务器技术改进》，论文查询网址www.cnki.net。

## 适用环境

- Windows 7、Windows 10或Windows 2012 Server等之后版本的64位操作系统，同一年代的Windows服务器版本操作系统也能正常运行。
- 特别注意：如果在windows 7、windows 8等较老的操作系统中，使用记事本编辑了nginx.conf这样的配置文件，以UTF-8编码格式保存后nginx会无法启动，这是因为记事本将nginx.conf的文件格式由原先的（不带BOM头的）UTF-8编码格式保存为了“带有BOM的UTF-8”，即在UTF-8文件最前面加了“EF BB BF”三个字节。采使用UltraEdit超编辑器打开nginx.conf，另存为“不带BOM的UTF-8”文件即可，会自动将文件最开头的“EF BB BF”三个字节去掉，这时，nginx就能正常启动了。另外，windows 10中的记事本，在保存时，已将UTF-8和带BOM的UTF-8编辑格式区分开来了，所以，不会出现这个奇怪的问题。

## 本次重大改进：

- 1. 加载了php_xmlrpc.dll，我是从http://pecl.php.net/package/xmlrpc中下载的。
- 2. Moodle主页地址一直转向127.0.0.1，现在修正为无需设置形式。
- 3. 不能以windows管理员权限安装zzg_mysql服务。现在已经解决了。鼠标直接双击startwnmp.bat和stopwnmp.bat，会直接以管理员权限运行。
- 4. 彻底解决了Moodle发邮件问题。已经开启了注册用户功能，能直接能发送邮件，无需进行任何设置。
- 5. 内置了coderunner插件，可以直接连接到国外jobe服务器判题，但每小时有判题次数限制。生产环境下，必须自己安装一部jobe服务器。
- 6. 彻底解决了备份课程时出现的“写入数据库时发生错误”的问题和mysqldump导出数据库时由于某行数据量太大而造成导出失败问题。
- 7. 彻底解决了WNMP架构下不能加载php_intl.dll模块的难题。
      C:\moodle_wnmp_64\php>php.exe -m
      PHP Warning:  PHP Startup: Unable to load dynamic library 'php_intl.dll' 。
- 8. 找到了System进程占用80端口的问题。
- 9. 彻底解决了Moodle不能正常下载大于4GB文件的问题（从PHP 7.4.22和PHP 8.0.9版本开始解决的，2021-07-29。PHP 7.3及以下版本修改情况未知）。
- 10. PHP 8在Windows中开启JIT后，cron.php不能正常运行。而CentOS下开启JIT后，cron.php能正常运行。
- 11. 彻底解决了使用电信或其它运营商的网络专线接入到学校或公司的主路由器固定公网IP在公网上访问局域网内部Moodle服务器的问题(默认80等默认端口是封死了的)。
- 12. 彻底解决了H5P互动内容不能正常运行的问题。PHP 8.0.10版本太高，H5P相关代码不能正常运行，降低为PHP 7.3.31后就没问题了。
- 13. 评分人身份下查看成绩的表头文字由横向显示变成垂直显示，极大地改善了老师查看学生成绩的视觉体验。
- 14. 实现了google字体本地化，再也不会发生页面尤其是编辑器打不开的情况了。
- 15. 实现了考试监视功能：（1）考生电脑上的摄像头会定时拍照；（2）考生屏幕被定时截图；（3）考前或考后可对考生人脸识别验证。

## 组件版本

- 【Nginx版本】1.20.2 stable
- 【PHP版本】7.3.33 stable【PHP 8.0.10会使H5P互动内容活动无下从H5P hub下载内容类型; PHP 7.4.24会使瓷砖课程格式Tiles Course Format运行错误】
- 【MariaDB版本】10.4.19 stable【注意：10.5.10版本不能在Windows 7上运行，在 Windows 10上能运行，故没有使用这个版本】
- 【Moodle 版本】3.11.4 (Build: 20211108)

## 集成的Moodle开发工具

免责声明：下面几个工具是从官网上下载的，集成在这里，方便用户使用，如果有异议，请官方邮件联系我删除！

- 1、C:\moodle_wnmp_64\navicat150_mysql_en_x64.exe   :  Mysql数据库可视化Client端

## 集成的Moodle统计功能开发样例

- C:\moodle_wnmp_64\nginx\html\zzgstat\listetc.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\listuser.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\ listtodaylogin.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\listmyscore.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\listmyquizanswer.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\listm3p.php
- C:\moodle_wnmp_64\nginx\html\zzgstat\listcc.php

## 本Moodle运行包具体使用步骤    

**********************************************************************

- 1、本包的运行环境是Windows 7或Windows 10 64位操作系统，或同一年代的Windows服务器版本的操作系统。
- 2、Windows操作系统中内存至少为2GB，否则本闪电包WNMP架构无法启动。若要作为生产环境使用，内存至少要4GB，32GB内存就更好了。
- 3、本闪电包中的Nginx运行在80端口，所以要先检查80端口是否已被占用，如果被占用，那必须先停用80号端口。以管理员的身份进入命令行窗口，运行命令【netstat -ano】，查看80号端口是否处于LISTENING监听状态。如果没有找到80端口，恭喜你，本步操作到此为止。如果发现80号端口处于LISTENING监听状态，则记下它对应的PID即进程ID号，再打开任务管理器，在详细信息页中通过该PID列找到对应的映像名称。如果映像名称是XAMPP、Tomcat之类的Web运行框架，请先卸载它或禁用它；如果是IIS微软Web服务器，也请停用它。如果映像名称是System即被系统进程占用，那么应该不会是真正的系统，而是微软的其余系列产品的进程在运行，那么请按这两种方法之一解除占用，推荐使用第（1）种方法：
  （1）Win10中，控制面板-程序-启用或关闭Windows功能-Internet Information Services-万维网服务：关闭；.NET Framework 4.8 Advanced Services-WCF服务-HTTP激活：关闭；.NET Framework 4.8 Advanced Services-ASP.NET 4.8：关闭。这种方法关闭，不会影响打印机服务。
  （2）以管理员身份运行cmd，再在命令行窗口中输入【net stop http】，如果提示是否真的需要停止这些服务，则选择”Y“，完成后输入【sc config http start=disabled】，再重启win10操作系统，再在命令行中运行【netstat -ano】，发现80号端口已经没有被占用了。但是，一旦使用了【sc config http start=disabled】这个命令，Print Spooler服务无法启动，先前安装好的打印机找不到了，无法进行打印。若要恢复设置，则需要以管理员身份运行cmd,输入【sc config http start= demand & net start http】，这时候发现Print Spooler服务可以启动了，之前安装好的打印机能正常打印了。

- 4、从github上下载moodle_wnmp_64-main.zip到C盘根目录下，解压缩后目录名称是【C:\moodle_wnmp_64-main】,请一定要把所在目录名称修改为【C:\moodle_wnmp_64】,否则无法运行本架构。本架构默认在【C:\moodle_wnmp_64】这个固定目录中运行。
    从gitee上下载zzg1975-moodle_wnmp_64-main.zip到C盘根目录下，解压缩后目录名称是【C:\moodle_wnmp_64】，无需修改。
- 5、安装Visual C++ Redistributable for Visual Studio 2015、2017 和 2019， 
  运行压缩包根目录下software文件夹内的VC_redist.x64-2015-2019.exe进行安装。因为php 8是用VC15 或者 VS16编译的。
  如果不安装它，启动PHP时，出现“由于找不到 VCRUNTIME140.dll，无法继续执行代码。”的错误信息，且PHP的php_intl.dll模块无法加载！ 
  该程序是从这里下载的 
  https://aka.ms/vs/16/release/VC_redist.x64.exe

​       可能无法升级，主要是操作系统有些补丁没打上，安装时确保windows更新被打开了
​       如果提示安装失败，请先把之前已安装的全部的Visual C++ Redistributable for Visual Studio 2015卸载！

- 6、 先关闭正在运行的安全软件，如360安全卫士、360杀毒等安全软件，它们会阻止创建zzg_mysql服务；再用鼠标直接双击startwnmp.bat和stopwnmp.bat来运行和停止启动nginx、PHP和MariaDB服务或进程。如果当前用户不是Administrator账号登录，这两个命令会先叫你输入Administrator账号的密码，否则WNMP架构不能运行！
  这时，在任务管理器中，就能看到zzg_mysql服务的ID号了，说明mysql数据库服务安装成功，且在运行状态中。
  startwnmp.bat的功能是创建zzg_mysql开机自动启动的服务，并立即启动这项服务，这项服务有对应的MySQL进程。
  可以从Windows的【控制面板-管理工具-服务】中看到zzg_mysql服务及其进行ID号。

  如果大家使用阿里云，请一定记住，内存2GB太小了，无法使闪电包运行顺畅。至少要4GB的内存资源，这样mysql的innodb缓存开到2GB数据库才能展开，性能才会好。内存增大后的配置，请看本文件后面的Q4。

- 7、再在浏览器（Firefox浏览器、Chrome浏览器为最佳）中输入【http://127.0.0.1/】或【这台服务器的内网IP】或【这台服务器的外网IP】或【这台服务器的域名】即开始运行Moodle。
  Moodle超级管理员账号是admin，密码是123
  其中MySQL数据库账号为root，密码为空，端口为3366

- 8、若要停止并删除zzg_mysql服务，则需运行stopwnmp.bat。 
  需要注意的是，运行stopwnmp.bat后，会从Windows的【控制面板-管理工具-服务】中
  直接停止并删除zzg_mysql服务，因此，重新启动Windows后，mysql就不会自动启动了，还需要运行一次startwnmp.bat。 

- 9、若要关闭或重启Windows操作系统，请务必先运行C:\moodle_wnmp_64\stopwnmp.bat；开机后，请务运行一次C:\moodle_wnmp_64\startwnmp.bat。

- 10、若要测试moodle的并发能力，请运行下面这条指令：
  C:\moodle_wnmp_64\software>.\ab.exe -c 100 -n -k 10000 http://127.0.0.1/index.php

*******************************************************************************

## FAQ

### Q1：本安装包会生成哪几个服务和哪几个进程？

支持startwnmp.bat后，会注册并生成 zzg_mysql服务，在管理工具-服务窗口中可以管理它们；
并生成对应的进程：nginx.exe（3个进程，1个父进程，2个子进程）、mysqld.exe、php-cgi.exe（8个PHP FastCGI进程）、xxfpm.exe（8个PHP FastCGI进程的管理进程）。
运行stopwnmp.bat后，会停止并注销上述服务，同时杀死nginx.exe、xxfpm.exe、php-cgi.exe、mysqld.exe进程。

### Q2：您在哪里修.改了端口？

nginx端口为80，修.改文件：\nginx\conf\nginx.conf
MySQL端口为3366，修.改文件：\mariadb\bin\my.ini 和 \php\php.ini
MySQL账号为root，密码为空。

### Q3：我不想让闪电Moodle包在C:\moodle_wnmp_64目录下运行，想放在其它盘里行吗？

可以的，举例说明。若把moodle_wnmp_64文件夹放在E盘根目录中，处理过程如下 ：

- （1）先把moodle_wnmp_64文件夹拷贝到E盘根目录下。
- （2）用记事本打开E:\moodle_wnmp_64\startwnmp.bat，把【C:\】全部替换为【E:\】，再把【C:/】全部替换为【E:/】。
- （3）用记事本打开E:\moodle_wnmp_64\php\php.ini，把【C:\moodle_wnmp_64】全部替换为【E:\moodle_wnmp_64】。
- （4）用记事本打开E:\moodle_wnmp_64\mariadb\bin\my.ini，把【C:/】全部替换为【E:/】。
- （5）用记事本打开E:\moodle_wnmp_64\nginx\html\config.php，把【C:】全部替换为【E:】。
  再用鼠标双击E:\moodle_wnmp_64\startwnmp.bat，就能发现闪电Moodle架构能正常运行了。

### Q4：您现在的配置是2GB内存的最佳配置，如果我内存增大了，应当修.改哪里？

请将\mariadb\bin\my.ini：innodb_buffer_pool_size = 64M  的64MB内存设置为你电脑内存的50%~80%大小。
例如，你内存为32GB，则可以设置为：\mariadb\bin\my.ini：innodb_buffer_pool_size = 16G，如果内存再大，注意不要超过16GB。

用记事本打开\nginx\conf\nginx.conf，将最顶上的【worker_processes  2;】修.改为你CPU的核数。
用记事本打开\startwnmp.bat，将 【-n 8】修.改为16、32、64、128等值，最大不要超过128。

上述配置完成后，需要重新启动nginx和MySQL，即先运行stopwnmp.bat，再运行startwnmp.bat，配置生效。

### Q5：如何升级Moodle？

Moodle官方每周会发布一个新的Moodle安装包，因此最好每周跟着升级一次。具体方法：
先把C:\moodle_wnmp_64\nginx\html文件夹重命名为html_old;
再从https://download.moodle.org/下载最新版本lastest后，解压缩它到C:\moodle_wnmp_64\nginx\html文件夹；
再把C:\moodle_wnmp_64\nginx\html_old文件夹里的config.php拷贝到解压缩的C:\moodle_wnmp_64\nginx\html文件夹里；
再把C:\moodle_wnmp_64\nginx\html_old\lib\default.ttf文件拷贝到解压缩的C:\moodle_wnmp_64\nginx\html\lib文件夹里，覆盖原来的default.ttf文件；
再打开浏览器，用超级用户登录到Moodle系统，浏览器会指导你一步一步完成Modole的升级；
升级成功后，删除C:\moodle_wnmp_64\nginx\html_old文件夹；
整个升级完成。

### Q6：如何管理Moodle数据库？

请运行C:\moodle_wnmp_64\software\navicat150_mysql_en_x64.exe程序来管理数据库，MariaDB数据库服务地址为localhost，用户名为root，密码为空，端口为3366。

### Q7：忘记Moodle超级用户如admin的密码怎么办？ 

在Windows命令行提示符窗口中，进入C:\moodle_wnmp_64\mariadb\bin文件夹后，使用【mysql -uroot -P3366】登录MariaDB服务器后，运行【use moodle;】命令，再运行【UPDATE mdl_user SET password= '$2y$10$jPgGmDWGQr7kSpl/BgxvF.ZdJZV/ZTDbtLBFVGW0S3kfUrrOb4DL2' WHERE username='admin'】命令后，运行stopwnmp.bat，再运行startwnmp.bat即可。

### Q8：Moodle安装完毕后，如何让Windows隔1分钟运行一次http://127.0.0.1/admin/cron.php这个Moodle心跳程序？

Moodle运行过程中的数据统计工作需要不断执行http://127.0.0.1/admin/cron.php程序来完成。
先在浏览器中用超级用户登录Moodle，再在“首页/网站管理/安全/网站策略”中不勾选“Cron仅通过命令行执行”，并设置访问远程Cron的密码为abc（请你修.改掉这个密码，这里只是个样例），
再运行本压缩包中software文件夹内的MoodleCron-Setup.exe，安装该定时执行任务服务，设定每隔1分钟运行一次http://127.0.0.1/admin/cron.php?password=abc。
当然，你也可以随时在浏览器中运行http://127.0.0.1/admin/cron.php?password=abc来完成Moodle的数据统计工作。
如果你的Moodle改用了具体的IP地址，那到将127.0.0.1修.改为该具体IP地址即可。

### Q9：Moodle里如何设置发送邮件功能？

假设Moodle的admin管理员的邮箱是3545251198@qq.com，
首先在3545251198@qq.com这个QQ邮箱中开启SMTP服务；再在Moodle的“网站管理-服务器-电子.邮件-发送邮件设置”中设置：
SMTP主机：smtp.qq.com:465
SMTP 安全：SSL
SMTP认证类型：LOGIN
SMTP用户名：3545251198@qq.com
SMTP密码：dwqryqxbdmuydbcd       (第三方客户端登录时，登录密码输入的授权密码)
不要回复的地址：3545251198@qq.com
其余不用修.改，直接保存，发现Moodle就能通过【3545251198@qq.com】来转发Moodle里的一切邮件了。

### Q10：Forefox下自动播放mp4文件，有声音，又无视频，如何解决？

进入firefox浏览器，在地址栏输入about:config 后回车，进入firefox的设置界面，找到media.autoplayl.enabled，双击此条目，其值就从true修.改为false了，即不自动播放视频。

### Q11：如何把Moodle访问地址修.改为我自己的IP地址或域名？

现在无需修.改任何配置，现在直接支持这四种方式访问moodle的方式：
在浏览器（firefox浏览器为最佳）中输入【http://127.0.0.1/】或【这台服务器的内网IP】或【这台服务器的外网IP】或【这台服务器的域名】即开始运行Moodle。感谢【浙江省平阳县第二职业学校钟维磊老师】贡献了此项最佳应用实践。

以前的修.改方式是（现在完全无需这样去处理了）：
用记事本打开C:\moodle_wnmp_64\nginx\html\config.php文件，直接修.改 $CFG->wwwroot   = 'http://127.0.0.1'; 即可，例如，修.改为：

```php
$CFG->wwwroot   = 'http://61.16_4.87.150';
或域名形式：
$CFG->wwwroot   = 'http://fmoodle.top';
或：
$CFG->wwwroot   = 'http://snmple.net';
```

### Q12：可以修.改moodledata的位置吗？

当然可以，举例，若moodledata放在D盘根目录下了，只需用记事本打开

```php
C:\moodle_wnmp_6_4\nginx\html\config.php文件，直接修.改 $CFG->dataroot  = 'C:\\moodle_wnmp_6_4\\nginx\\moodledata'; 这句为你当前的：
$CFG->dataroot  = 'D:\\moodledata'; 即可.
```

### Q13：如何将moodle网址中的80端口修.改为8081？

先运行stopwnmp.bat停止WNMP架构，再将 nginx/conf/nginx.conf中的这句修.改掉即可：
  将【listen 80;】中的【80】修.改为【8081】；
再将nginx/html/config.php中的IP地址中的8081去掉：
  将【$CFG->wwwroot='http://127.0.0.1';】修.改为【$CFG->wwwroot='http://127.0.0.1:8081';】；
最后再运行startwnmp.bat启动wnmp架构，这样，直接通过【http://127.0.0.1:8081】来访问你的moodle网站了。

### Q14：生产环境里，至少需要有8GB内存，请问如何配置WNMP各部件？

  假如8GB内存，mysql的innodb分配5GB（具体操作看Q4）。其余3GB空着，留给php-cgi 1.5GB(php-cgi开64个，具体操作是，用记事本打开startwnmp.bat,找到“-n 8”，修.改为“-n 64”)，留给windows操作系统1.5GB.    你的moodle肯定不卡了。

### Q15：怎样把其它架构中运行的moodle网站迁移到当前的闪电Moodle运行包中？

 约定：其它架构是B架构，闪电Moodle架构是L架构。

- （1）删除L架构nginx目录下面的moodledata文件夹

- （2）删除L架构nginx目录下的html文件夹

- （3）把B架构下的moodledata文件夹和html文件夹拷贝到L架构的nginx的文件夹中

- （4）运行C:\moodle_wnmp_64\software\navicat150_mysql_en_x64.exe，把里面的moodle数据库彻底删除

- （5）利用C:\moodle_wnmp_64\software\navicat150_mysql_en_x64.exe把B架构中的moodle数据库导出来，如moodle.sql文件名

- （6）运行C:\moodle_wnmp_64\software\navicat150_mysql_en_x64.exe，在里面创建一个moodle空数据库

- （7）将moodle.sql导入到空的moodle空数据库中

- （8）运行闪电moodle包，发现以前的moodle完整地迁移到闪电Moodle架构中了

- （9）将老架构B彻底卸载，开始享用高性能、超稳定、能与LNMP架构媲美的闪电Moodle架构吧

### Q16：怎么打开用户注册账号的功能？

  使用管理员账号登录Moodle平台后，在【个人主页-网站管理-插件-身份认证-管理身份认证】中，将“自助注册”设置为“基于电子.邮件的自助注册”后，保存即可。当然，Moodle里要先设置好，能发送邮件才行。

### Q17：哪里有Moodle开发视频教程学习？

  我会把Moodle使用、开发的视频教程分享在B站上，如[Moodle网上课堂“老师开课统计”的开发](https://www.bilibili.com/video/BV1454y1Y7BL)。请大家关注我的B站实名账号。

### Q18：LNMP架构的闪电Moodle样板工程在哪里？

  请大家点击[宁波职业技术学院Moodle网上课堂](https://mood.nbpt.edu.cn/)，本闪电包的Moodle代码和这个平台里是完全一样的。

### Q19：Moodle制作题库与检测使用方法的视频教程在哪里？

  使用moodle_quiz_v21制作题库和moodle检测的使用方法，请点击这里查看[https://mood.nbpt.edu.cn/course/view.php?id=383](https://mood.nbpt.edu.cn/course/view.php?id=383) 



## 感谢网友

**重庆市大足区米粮小学老师李寿菊lnmper（QQ:3132474478）报告Windows 7和Windows 10上运行错误**；

**新疆乌鲁木齐市实验学校高中化学老师穆楠（QQ:732502423）报告Windows 2008R2上的运行错误**；

**山西吕梁人张晶晶（QQ：2971780608）发现了上传用户功能无法正常运行和不能发送邮件问题**；

**浙江师范大学教师教育学院张家华老师（QQ：67809780）发现了安全软件会阻止创建zzg_mysql服务；**

**陕西人马小安（QQ:694085493）花一天时间精心指导，使得闪电Moodle成功在github和gitee上发布，让全球师生受益；同时分享了Moodle插入公式的方法，文章放在paper文件夹中；**

**湖南益阳沅江市职业中专文笔老师（QQ：10076707）进行了中国大陆首个闪电Moodle 2021 开发版真实互联网环境应用；** 

**浙江省温州市平阳县第二职业学校钟维磊（QQ：7122926）提出【$CFG->wwwroot = 'http://'.$_SERVER['HTTP_HOST'];】的通用访问形式；**

**河南省洛阳市孟津育才实验学校刘宏川老师（QQ：390551157）发现手机端使用浏览器登录Moodle在moove主题下能完美实现考试，boost主题不方便；**

**广西玉林师范学院教育技术学2017班黄金妮同学（QQ：2647597527）发现必须先卸载电脑上安装的XAMPP或停用IIS微软Web服务器，本闪电包才能正常运行，原因是占用了80端口；**

**宁夏大学2017级云计算2班王莉同学（QQ：1351040710）发现了Windows 10的80号被系统端口占用而导致闪电包中的Nginx不能正常运行；**

**中国石油大学（华东）张学辉老师（QQ：2458171）提供了jobe判题服务器的架设与调用方法，文章收录在本闪电包的paper目录中。**

**爱心网友GrayBear（QQ：532121）分享了由江西省信丰中学黎忠东老师发表的备份课程时出现“写入数据库时发生错误”的问题的解决方法；**

**重庆市大足中学陈显富老师（QQ：394380496，乐渔）发现Nginx缓存权限出错会造成Moodle界面无法在浏览器中正常显示；**

**四川宜宾学院胡先志老师（QQ：273013936）发现了QQ邮箱发邮件存在问题；**

**网友”moodle二次开发（晨曦，QQ：1129332567）“发现了角色分配表与课程编号之间的关系，这点对理解Moodle数据表设计至关重要。**

**宁波职业技术学院周明德老师发现了CodeRunner在PHP 8.x下不能正常运行。**

**网友西安云适配吴涛（QQ：zero 1085351739）和翌日科技霍晨云（QQ：太阳 3398858230）发现了H5P互动内容插件不能正常从H5P hub安装内容类型。**

**网友北京科莱特信息技术有限公司：廖汉真（网名Martin Liao，ＱＱ号84120890），广东河源人，2021年9月27日，分享了评分人身份下查看成绩的表头文字由横向显示变成垂直显示的代码，极大改善了全球使用Moodle的老师查看学生成绩的视觉体验，善莫大焉。**

