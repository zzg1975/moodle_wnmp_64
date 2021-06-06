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

    //列出moodle数据库中所有老师开的所有课程，按最近开课时间排序
    //$link_id=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport, $dbsocket);
    $link_id=mysqli_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname, $CFG->dboptions['dbport'],NULL);
    //$link_id=mysqli_connect(NULL,"root","123",NULL,NULL,"/dev/shm/mysql.sock");
    //$link_id=mysqli_connect(NULL,$CFG->dbuser,$CFG->dbpass,NULL,NULL,"/dev/shm/mysql.sock");
    //$link_id=mysqli_connect("127.0.0.1:3366","root","");
    mysqli_select_db($link_id,$CFG->dbname);
    //mysqli_select_db($link_id,"moodle");

    //显示moodle中所有的用户名单
    echo "教师创建课程清单（按教师角色指定的最近时间排序）<br>";
    echo '<table border=1>';
    echo '<tr><td align=center>序号</td><td align=center>账号</td><td align=center>名字</td><td align=center>课程ID</td><td align=center>课程全称</td><td align=center>课程类别</td><td align=center>课程创建时间</td><td align=center>教师角色指定时间</td></tr>';
    $result=mysqli_query($link_id,"SELECT mdl_user.username AS un,  mdl_user.firstname AS ufn,  mdl_course.id AS cid, mdl_course.fullname AS cfn,  mdl_course_categories.`name` AS cc,  mdl_course.timecreated AS ct,  mdl_role_assignments.timemodified AS trct FROM ( ( ( ( mdl_role_assignments JOIN mdl_user ON ( mdl_role_assignments.userid = mdl_user.id ) ) JOIN mdl_context ON ( mdl_role_assignments.contextid = mdl_context.id ) ) JOIN mdl_course ON ( mdl_context.instanceid = mdl_course.id ) ) JOIN mdl_course_categories ON ( mdl_course.category = mdl_course_categories.id ) ) WHERE mdl_role_assignments.roleid = 3 ORDER BY mdl_role_assignments.timemodified DESC");  //升序排列，要把DESC改为ASC
    mysqli_data_seek($result,0);
    $i=0;
    while($record=mysqli_fetch_object($result))
    {
      $i++;
      printf("<tr><td align=center>%d</td><td align=center>%s</td><td align=center>%s</td><td align=center>%d</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td></tr>",$i,$record->un,$record->ufn,$record->cid,$record->cfn,$record->cc,date('Y-m-d H:i:s',$record->ct),date('Y-m-d H:i:s',$record->trct));
    }

    echo '</table>';

    echo "<br><br>";

    mysqli_close($link_id);