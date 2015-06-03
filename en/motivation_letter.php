<?php
$lang = isset($_GET["lang"])? $_GET["lang"]: "en";
$array = parse_ini_file($lang.".ini");
require"../resources/tpl/body_on.php";
require"../resources/tpl/header.php"
?>

<table>
<tr>
<td width="100%" style="background-color:#ededed">
<h1>How to write a motivation letter</h1>
<p>Writing the motivation letter is an important step in the application procedure - it is the basis on which the organising group selects their participants!</p><br/>
<p>So, where do you start? What should you say? What shouldn't you say?</p><br/>
<p>These guidelines aim to help you write your motivation letter. However, keep in mind that there are no perfect templates or instructions, therefore these general tips and hints are mainly a starting point just to help you write a good motivation letter, increasing your chances of getting accepted!</p><br/>
<h2>Where to start?</h2>
<ul class="fL">
<li class="mark">Before applying to any event, you should read the information on the webpage very carefully. What will the event be like? What type of participants are the organisers looking for? etc. Reading the Survival Guide can be very useful in this sense!</li>
<li class="mark">Local BEST groups can receive something like four hundred applications to their course! Can you imagine reading all those different motivation letters? If you want your letter to stand out, then try to be creative and funny and capture the attention of your reader.</li>
<li class="mark">Needless to say, the letter must be written in English.</li>
</ul><br/>
<h2>What to write about?</h2>
<ul class="fL">
<li class="mark">Something about yourself - what you study, what you do in your life, what your hobbies are, sports you do, maybe even what languages you speak... BEST courses are always a lot of fun, so the organisers should know that you are a fun person!</li>
<li class="mark">Why do you want to go abroad, and why do you want to go to a BEST event? It is important for the organisers to have internationally minded people.</li>
<li class="mark">Why do you want to go to THIS particular event you're applying for? Why is the topic attractive? How will the knowledge you gain there help you (in your studies, in your future career...)? BEST courses, for example, have a strong academical part (depending on the level of the course), so it's important for the organisers to know if you're actually interested in the topic! Naturally, if you're applying to a Leisure Event, then you can ignore this tip.</li>
<li class="mark">Explain why you want to go to that city or country so badly! It's strongly recommended that you do a small research of the place you're applying to before writing your motivation letters. Famous monuments, typical foods and drinks, traditions etc. Organisers like it when applicants show a real interest for the location they're applying to.</li>
<li class="mark">What do you have to offer to the event? In other words, why should the organisers pick YOU? (like: you're a star in karaoke, you can dance like Michael Jackson, or you know more than 100 jokes).</li>
<li class="mark">Sometimes, it is required to tell the organizers that you have a sufficient knowledge of the topic of the course. Read the course information on the site carefully in order to find out this sort of information.</li>
</ul><br/>
<h2>What not to do?</h2>
<ul class="fL">
<li class="mark">Your motivation letter will be read by students, just like you. Therefore, there is no need for formalities such as "Dear Madam or Sir"!</li>
<li class="mark">A motivation letter is NOT a curriculum vitae (CV). Don't bother enlisting all the schools you've attended, your grades, the jobs you've done... We want to know more about you and what you're like!</li>
<li class="mark">You aren't allowed to insert pictures or links in your motivation letter.</li>
<li class="mark">Be careful, and send the appropriate letter to the appropriate place (don't mix them if you apply for more than one event!).</li>
<li class="mark">Copy-pasting motivation letters isn't very recommended. You should aim to make each motivation letter personal and unique!</li>
<li class="mark">Don't make the letter too long! Half to one A4 page is good, and should be enough for the organisers to get to know you. If the letter is longer than a A4, there is a chance they are not going to read all of it. On they other hand, if it's too short they will think that you are not interested enough in the event! So try to keep the balance.</li>
<li class="mark">Avoid submitting your applications at the very last minute, in order to prevent system crashes.</li></ul><br/>
<p>These are just some general hints - take the ones you want, ignore the ones you don't like, but in any case, use your own imagination and style and be creative!</p>
</td>
</tr>
</table>

<?php
require"../resources/tpl/footer.php";
require"../resources/tpl/body_off.html";
?>