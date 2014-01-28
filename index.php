<?php $title='Snake-spel'; include(__DIR__ . '/incl/header.php'); ?>
 
<div id="flash">
<p class="middle">Används pilknapparna i tangentbordet för att styra ormen. Undvik att krocka mot väggarna. </p>
<canvas id="canvas"></canvas>
<p id="score">Score: 0</p>
<p id="tillbaka"><a href='http://www.student.bth.se/~rapr13/javascript/projekt/snake/about.php'>Till startsidan</a></p>


</div>

<div id="reMenu">
	<h1 id="snake2">Klassisk snake 2 spel</h1>
	<p id="info2">Game Over</p>
	<a href="javascript: void(0)" id="restart" onclick="reset()" >Restart</a> 	
	
</div>

<div id="menu">
	<h1 id="snake">Klassisk snake 2 spel</h1>      	
	<a href="javascript: void(0)" id="start" onclick="init()" >Start</a>
	
	
</div>



<!-- Audio -->
<audio id="main_music" loop>
	<source src="audio/main.mp3" type="audio/mp3" />
	
</audio>

<audio id="gameOver">
	<source src="audio/gameover.mp3" type="audio/mp3" />
</audio>

<audio id="food">
	<source src="audio/food.mp3" type="audio/mp3" />
</audio>



<?php $path=__DIR__; include(__DIR__ . '/incl/footer.php'); ?>

