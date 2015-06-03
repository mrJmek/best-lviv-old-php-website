<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "en";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php"
?>

<table style="border-left-width:3px; border-right-width:3px">
<tr>
<td width="100%" style="background-color:#ededed">
<h1>BEST International</h1>
<a target="_blank" href="http://best.eu.org/"><img class="fL" src="../resources/img/logo/best_international_logo.png" alt="International BEST site" width="220" height="110" /></a>
<p><strong>BEST (Board of European Students of Technology)</strong> - is a constantly growing non-profit and non-political organisation. Since 1989 we provide communication, cooperation and exchange possibilities for students all over Europe.</p><br />
<p>94 Local BEST Groups (LBGs) in 32 countries are creating a growing, well organised, powerful, young and innovative student network for cultural diversity and better understanding of European cultures. Conscious students influence on social development, cooperation and communication. Thus, we manage to bring all the partners in the "student - company - university" triangle closer.</p><br/>
<h2>Vision</h2>
<p><strong>Empowered diversity</strong><br />
People understand and respect different cultures and societies. The environment of empowered diversity supports people in applying their full potential and acting responsibly.</p><br/>
<h2>Activities</h2>
<p><strong>Providing complementary education</strong><br />
Bringing a significant added value to the education provided by the universities. BEST creates opportunities for personal development of students and supports them in reaching their full potential.</p><br/>
<h2>Mission</h2>
<p><strong>Developing students</strong><br />
BEST helps students to achieve an international mindset, to reach a better understanding of cultures and societies and to develop the capacity to work in culturally diverse environments.</p>
</td>
</tr>

<tr>
<td width="100%">
<h1>BEST Lviv</h1>
<img class="fR" src="../resources/img/logo/BEST_logo.png" alt="BEST Lviv" width="220" height="110"  />
<p><strong>LBG Lviv</strong> is one of the most productive and biggest LBGs in Ukraine considering the number of its members and organised projects. BEST Lviv was the first founded LBG in Ukraine started its activities in spring 2002 and now develops its activities.</p><br />
<p>In 10 years our organization has become known and active in <a target="_blank" href="http://lp.edu.ua/en">Lviv Polytechnic National University.</a> Comparing with previous years, we increased the number of participants at BEST events. All our projects aim to provide students with the opportunity to take active part in university life and organise huge events by themselves.</p><br />
<p><strong>LBG Lviv</strong> is a member of BEST. Activities of LBG Lviv are ensured by its Executive Board and several working teams. LBG Lviv Board consists of the President, the Treasurer, the Secretary, and the Vice-President for Human Resources, the Vice-President for Corporate relations, the Vice-President for Marketing Communications and Public Relations. Together they are responsible for the correct and complete enactment of the decisions of the association.</p><br />
<h1>Local BEST Group Lviv</h1>

<ul style="padding-left:45px;">
<li class="mark"> non-profitable, non-political students organization;</li>
<li class="mark"> in Lviv LBG is functioning since 2002;</li>
<li class="mark"> 70 active members;</li>
<li class="mark"> cooperating with more than 50 Ukrainian and international companies;</li>
<li class="mark"> acting for 31000 students of Lviv Polytechnic National University;</li></ul><br/>

<h2>Activities of LBG Lviv:</h2>
<ul style="padding-left:45px;">
<li class="mark"> Providing complementary education;</li>
<li class="mark"> Providing  international communication, to reach better understanding of cultures and societies, to develop the capacity to work in culturally diverse environment;</li>
<li class="mark"> Creating opportunities for personal development of each young person and supporting them in reaching their full potential;</li>
<li class="mark"> Cooperating with students, universities, companies.</li></ul><br/>
</td>
</tr>
</table>

<?php
require"../resources/tpl/footer.php";
require"../resources/tpl/body_off.html";
?>