<?php $title='Om spelet'; include(__DIR__ . '/incl/header.php'); ?>
 
<div id="info">
<h1>Klassiska snake 2</h1>
<div id='infop'>
<h2>Vad är klassisk snake 2 spel?</h2>
<br><p>Klassiska snake 2 är ett litet, enkelt canvas spel som går ut på att spelaren ska styra "ormen" för att äta upp maten som är utlagd dvs. blåa punkten. 
Ormen styrs med hjälp av pilknapparna på tangentbordet och spelaren får en poäng per uppäten matbit. Spelet slutar då ormen kolliderar mot väggen.</p>
<p>Spelet är skapat av Rattana Prasith som läser kurspaketet "Databaser, HTML, CSS, JavaScript och PHP" vid Blekinge tekniska högskola. Spelet är gjort med hjälp av <a href="http://cssdeck.com/labs/classic-snake-game-with-html5-canvas">den här tutorialen</a></p>
<br>

<h2>Produktanalys</h2>
<br><p>Klassisk snake 2 spelet kan vara i sig en likelse till det klassiska orm spelet. Många av detta spelet bygger på samma grundidén men de kan se annorlunda ut och innehåller olika funktioner.</p>
<p>För att hitta likheter och olikheter mellan mitt spel och dessa spel har jag valt att analysera två stycken konkurrenter, <a href="http://betamos.se/bloggen/spela-snake-med-html5">Snake JS</a> och <a href="http://www.megaspel.se/spela/snake/snake+classic.html">klassisk orm spel.</a></p>

<b>Snake JS</b>
<br><p>Snake JS är det första spelet som jag valde att analysera. Spelidén bygger på det gamla spelet snake då spelet går ut på att styra ormen och samla alla föremål i banan. Ormen styrs med piltangenterna vilket jag tycker att Snake JS har samma principer som mitt spel. </p>
<p>Skillnaden mellan mitt och det spelet är att Snake JS innehåller fler funktioner. Man kan låta ormen gå ut över kanten och den kan komma in då vid den motsatta kanten. Ormens längd växer med en enhet för varje gång den når föremål. Ormfiguren ser ut och känns precis som en riktig orm medan min ormfigur ritas mycket enkelt med raka linjer.</p>
<p>Trots spelet har fler funktioner än mitt men av någon anledning så upplevde jag att mitt spel är bättre än detta spel. Snake JS har inget ljud över huvud taget medan mitt spel har tre ljudeffekter: bakgrundsmusik, mat-ljud och game over-ljud, vilket ger ytterligare liv åt spelet. Dessutom inser jag att mitt spels layout är betydligt snyggare. Klassisk snake 2 spelet är presenterad på en färgglad medan Snake JS spelet har bara två färger. Detta gör att spelet känns tråkigt efter ett tag.  </p>

<b>Det klassisk orm spelet</b>
<br><p>Det klassisk orm spelet är det andra spelet som jag har analyserat. Detta spel är betydligt mer avancerat än mitt klassisk snake 2 spel. I det klassisk orm spelet kan man väjla tre olika hastighet: sakta, medium och snabb. Man kan när som helst pausa spelet genom att trycka på "P-knappen" eller på mellanslagstangenten. Spelet bygger på samma grundidén som mitt spel, ormen styrs med piltangenterna och spelet slutar då ormen krockar med väggarna och sig själv.</p>
<p>Vidare inser jag att spelet har ingen bakgrundsmusik, däremot så har det game over-ljud istället. Slutligen så tycker jag fortfarande att mitt spels layout är snyggare än det klassisk spelet.
</p>

<br><b>Sammmanfattning</b>
<br><p>Efter att ha gjort analysen så känner jag mig nöjd med mitt spel. Något som jag vill utveckla vidare i mitt spel är att lägga till fler funktioner för att kunna öka spelupplevelsen. En extra funktion för att välja olika hastighet, kunna pausa spelet genom att trycka på tangentbordet och en highscore. </p>

<p align="right"><a href="http://www.student.bth.se/~rapr13/javascript/projekt/snake/index.php">Klicka här för att komma till spelet</a></p>
</div>
</div>


<?php $path=__DIR__; include(__DIR__ . '/incl/footer.php'); ?>
