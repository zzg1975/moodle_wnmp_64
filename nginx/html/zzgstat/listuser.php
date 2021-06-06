<?php
    //本程序由宁波职业技术学院曾棕根老师编写，由【Moodle亚洲开发群】（QQ群号：263569269）群员共同智慧研发，研发时间：2021年2月3日~2021年2月4日
    //本程序应用于“Moodle网上课堂”，网址 https://mood.nbpt.edu.cn/
    //本程序可自由传播，请不要删除上述开发者信息
    
    require_once('../config.php');  //加载moodle系统配置文件
    require_login($courseorid = null, $autologinguest = false); //查检是否登录，没登录，自动跳转到登录界面。登录后，可以直接调用这些moodle的全局变量：$USER、$CFG、$COURSE等。

    //使用范例：
    //[1]查年当前登录用户的全部分量
    //var_dump($USER)."<br>";

    //[2]查年当前登录用户的某个分量
    //echo $USER->id."<br>";
    //echo $USER->username."<br>"; 
    //echo $USER->firstname."<br>";
    //echo $USER->lastname."<br>";
    //echo $USER->email."<br>";

    //如果是访客，则重定向到登录界面
    if($USER->username=='guest')
    {
        require_logout();//直接登出guest访客账号，不用点确认登出按钮
        echo "<META HTTP-EQUIV=  \"Refresh\" CONTENT=\"0;  URL=../login/index.php\"  >";
        die('');
    }

    echo "<a href=$CFG->wwwroot>返回Moodle网站首页</a><br>";


    //[3]列出moodle数据库中所有用户
    //$link_id=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport, $dbsocket);
    $link_id=mysqli_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname, $CFG->dboptions['dbport'],NULL);
    //$link_id=mysqli_connect(NULL,"root","123",NULL,NULL,"/dev/shm/mysql.sock");
    //$link_id=mysqli_connect(NULL,$CFG->dbuser,$CFG->dbpass,NULL,NULL,"/dev/shm/mysql.sock");
    //$link_id=mysqli_connect("127.0.0.1:3366","root","");
    mysqli_select_db($link_id,$CFG->dbname);
    //mysqli_select_db($link_id,"moodle");


    //找出表中总记录数，放在$n变量中
    $str_sql = "select count(id) from mdl_user"; //总记录数，使用SQL聚合函数count()
    $result=mysqli_query($link_id,$str_sql);//执行SQL命令，指针指向记录集的第0条记录处
    mysqli_data_seek($result,0);//将记录集指针移动到第1行，即第0条记录处
    $r=mysqli_fetch_array($result);//获取当前指针处记录对象
    $n=$r[0];//记录总数

    //设置每页显示记录数目
    $pagesize=30;

    //计算总页数,采用ceil函数，进一取整法，但如果整数，则不会向前进1
    $totalpage=ceil($n / $pagesize);

    //显示跳页码的超链接
    echo "<table width=800 border=0 ><tr><td>";
    echo "总记录数：<font color=red>" . $n . "</font>条，";
    echo "总页数：" . $totalpage . "页，";
    echo "每页显示：" . $pagesize . "条记录，";

    //决定现在要显示哪一页？
    if(!isset($_GET["mypageno"]))$pageno=1; //isset判断是否定义mypageno参数，如果没定义，则返回FALSE。isset()函数，来判断一个变量是否存在。
    else $pageno=$_GET['mypageno'];

    echo "当前页：" . $pageno . "&nbsp;&nbsp;";
    if($pageno!=1) echo "<a href=listuser.php?mypageno=1>第一页</a>&nbsp;&nbsp;";
    if($pageno>1) echo "<a href=listuser.php?mypageno=" . ($pageno-1) . ">上一页</a>&nbsp;&nbsp;";
    if($pageno<$totalpage) echo "<a href=listuser.php?mypageno=" . ($pageno+1) . ">下一页</a>&nbsp;&nbsp;";
    if($pageno!=$totalpage && $totalpage!=0) echo "<a href=listuser.php?mypageno=" . $totalpage . ">最后页</a>";
    echo "</td></tr></table>";

    //select * from info limit 0,5    $pageno=1：从表第0条开始，连续抓5条 0 1 2 3 4
    //select * from info limit 5,5    $pageno=2：从表第5条开始，连续抓5条 5 6 7 8 9
    //select * from info limit 10,5  $pageno=3：从表第10条开始，连续抓5条 10 11 12 13 14
    $str_sql = "select mdl_user.id,mdl_user.username,mdl_user.firstname,mdl_user.lastname,mdl_user.email,mdl_user.timemodified from mdl_user ORDER BY mdl_user.id ASC limit " . ($pageno-1)*$pagesize . "," . $pagesize; //升序排列，要把DESC改为ASC
    $result=mysqli_query($link_id,$str_sql);

    //显示moodle中所有的用户名单
    echo "用户名单<br>";
    echo '<table border=1>';
    echo '<tr><td align=center>序号</td><td align=center>ID号</td><td align=center>账号</td><td align=center>名</td><td align=center>姓</td><td align=center>邮箱</td><td align=center>修改时间</td></tr>';

    mysqli_data_seek($result,0);

    if(!isset($_GET["mypageno"]))$i=0;
    else $i=($_GET['mypageno']-1)*$pagesize;

    while($record=mysqli_fetch_object($result))
    {
      $i++;
      printf("<tr><td align=center>%d</td><td align=center>%d</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td></tr>",$i,$record->id,$record->username,$record->firstname,$record->lastname,'-',date('Y-m-d H:i:s',$record->timemodified));
    }

    echo '</table>';

    echo "<br><br>";

    mysqli_close($link_id);