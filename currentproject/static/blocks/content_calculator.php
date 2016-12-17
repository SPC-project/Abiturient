<head>
<style>
.class1{
    border:1px solid #ccc;
}
.foc{
    border:1px solid red;
}.
no_foc{
    border:1px solid #fff;
}
 .error { border-color: red; } 
 
a.button { 
position: relative; 
font-weight: bold; 
color: white; 
text-decoration: none; 
text-shadow: 0 -1px 1px #cc5500; 
user-select: none; 
padding: .8em 2em; 
outline: none; 
border-radius: 1px; 
background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31); 
background-size: 100% 100%, auto; 
background-position: 50% 50%; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px; 
transition: 0.2s; 
} 
a.button:hover { 
background-size: 140% 100%, auto; 
} 
a.button:active { 
top: 1px; 
color: #ffdead; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000; 
} 

a.button { 
position: relative; 
font-weight: bold; 
color: white; 
text-decoration: none; 
text-shadow: 0 -1px 1px #cc5500; 
user-select: none; 
padding: .8em 2em; 
outline: none; 
border-radius: 1px; 
background: linear-gradient(to left, rgba(0,0,0,.3), rgba(0,0,0,.0) 50%, rgba(0,0,0,.3)), linear-gradient(#d77d31, #fe8417, #d77d31); 
background-size: 100% 100%, auto; 
background-position: 50% 50%; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, #000 0 10px 15px -10px; 
transition: 0.2s; 
} 
a.button:hover { 
background-size: 140% 100%, auto; 
}
h1{ 
text-align:center; 
margin-top:0px; 
margin-bottom:1em; 
color:#A52A2A; 
font-family:Arial, Helvetica, Verdana, Sans-Serif; 
text-shadow: 5px 5px 5px #FF0000; 
font-size:200%; 
font-weight:bold; 
} 
a.button:active { 
top: 1px; 
color: #ffdead; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000; 
}
</style>
</head>
<body><br><br><br><br>
<table border="1">
   <tr>
    <th><img src="../static/images/img_calculator/emblema.jpg" width="200" height="100" alt="USA"></th>
    
	 <th colspan="2"><?php echo $Lang["chances"]; ?></th>
 <th> <img src="../static/images/img_calculator/sputnik.jpg" width="200" height="100" alt="sputnik"> </th>
   </tr>
   <tr>
    <td></td>
    <td> <h1> <pre><?php echo $Lang["zno"]; ?></h1>  <hr>
 
 <?php echo $Lang["language"]; ?> <input type="number" maxlength="3" min = "1" max = "200" id="input">  <hr>
 <?php echo $Lang["flanguage"]; ?> <input type="number" min = "1" max = "200"id="input1"> <hr>
 <?php echo $Lang["mathematics"]; ?> <input type="number" min = "1" max = "200"id="input2"> <hr>
 <?php echo $Lang["physics"]; ?> <input type="number" min = "1" max = "200"id="input3">  <hr>
 <?php echo $Lang["chemistry"]; ?> <input type="number" min = "1" max = "200"id="input8">  <hr>
 <?php echo $Lang["hu"]; ?> <input type="number" min = "1" max = "200" id="input9"> <hr>

 
 
 <p align="center"> <?php echo $Lang["school_certificate"]; ?> </p> <hr>
 
 <?php echo $Lang["average_certificate"]; ?> <input type="number" min = "1" max = "200" id="input4"> <hr>
 


<p align="center"> <?php echo $Lang["personal_achievements"]; ?>  </p> <hr>

<?php echo $Lang["winner1"]; ?> <input type="checkbox" id="input5"> <hr>
<?php echo $Lang["winner"]; ?> <input type="checkbox" id="input6"> <hr>
<?php echo $Lang["passing"]; ?> <input type="text" id="input7"> <hr>

<div id="error"></div>

</br>

<input TYPE="SUBMIT" VALUE ="<?php echo $Lang["click"]; ?>" onclick=result()></td>
	<td><p align="center"> <?php echo $Lang["note"]; ?> </p>
 
  
<p align="justify">
<?php echo $Lang["text"]; ?>
 </p></td>
	<td></td>
  </tr>
 </table>
<br><br><br><br>
<script>
input.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 

input1.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input1.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 
input2.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input2.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 
input3.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input3.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 

input4.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input4.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 

input8.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input8.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 


input9.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input9.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 

input7.onblur = function() { 
if (this.value > 200 || this.value < 1) { // введено не число 
// показать ошибку 
this.className = "error"; 
error.innerHTML = 'Вы ввели дохера. Исправьте, пожалуйста.' 
} 
}; 

input7.onfocus = function() { 
if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть 
this.className = ""; 
error.innerHTML = ""; 
} 
}; 

function result() {
 
var ukr=document.getElementById("input").value;
var fori=document.getElementById("input1").value;
var matan=document.getElementById("input2").value;
var fiz=document.getElementById("input3").value;
var atestat=document.getElementById("input4").value;
var cours=document.getElementById("input7").value;
var himia=document.getElementById("input8").value;
var istoria=document.getElementById("input9").value;

matan=matan * 0.45;
ukr = ukr * 0.2;
cours = cours * 0.05;
atestat = atestat * 0.1;

var place = 0;
var place1 = 0;
var place2 = 0;

var place_of_all = 0;


var the_best_mark = 0;

if(the_best_mark < fori)
{
the_best_mark = fori;
}
if(the_best_mark < fiz)
{
the_best_mark = fiz;
}
if(the_best_mark < himia)
{
the_best_mark = himia;
}
if(the_best_mark < istoria)
{
the_best_mark = istoria;
}

the_best_mark = the_best_mark * 0.2;

var all_sum;
all_sum = ukr + matan;
all_sum = all_sum + the_best_mark;
all_sum = all_sum + cours;
all_sum = all_sum + atestat;


alert ("Ваш конкурсный бал - " + all_sum);

var year2013 = [ 190, 180, 170, 160,150, 184, 130, 120,110, 109, 108, 107, 106, 105];
var year2014 = [ 200, 200, 200, 200,200, 200, 200, 200,200, 200, 200, 200, 200, 200];
var year2015 = [ 150, 160, 140, 150 ];

for (var i = 0; i < year2013.length; i++) 
{

if (year2013[i] > all_sum)
{
	place = i;
	
}
}


for (var i = 0; i < year2014.length; i++) 
{

if (year2014[i] > all_sum)
{
	place1 = i;
	
}
}


for (var i = 0; i < year2015.length; i++) 
{

if (year2015[i] > all_sum)
{
	place2 = i;
	
}
}


if( place <= 10)
{
alert ("В 2013 году вы в 1 десятке");
}
if( place >= 10 && place <= 20)
{
alert ("В 2013 году вы в 2 десятке");
}
if( place > 20 )
{
alert ("В 2013 году вы вобще не поступили");
}

if( place1 <= 10)
{
alert ("В 2014 году вы в 1 десятке");
}
if( place1 >= 10 && place1 <= 20)
{
alert ("В 2014 году вы в 2 десятке");
}
if( place1 > 20 )
{
alert ("В 2014 году вы вобще не поступили");
}


if( place2 <= 10)
{
alert ("В 2015 году вы в 1 десятке");
}
if( place2 >= 10 && place2 <= 20)
{
alert ("В 2015 году вы в 2 десятке");
}
if( place2 > 20 )
{
alert ("В 2015 году вы вобще не поступили");
}
}

place_of_all = year2013.length;
place1_of_all = year2014.length;
place2_of_all = year2015.length;

</script>
</body>