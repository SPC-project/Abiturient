<body>

<form>

 <p align="center"> <h1>Укажите Ваши балы ЗНО:</h1> </p> <hr>
 
 Украинский язык и литература: <input type="text" align=MIDDLE id="input">  <hr>
 Иностранный язык:             <input type="text" id="input1"> <hr>
 Математика:                   <input type="text" id="input2"> <hr>
 физика:                       <input type="text" id="input3"> <hr>

 
 
 <p align="center"> <h1>Школьный аттестат:</h1> </p> <hr>
 
 Средний бал аттестата:             <input type="text" id="input4"> <hr>
 


<p align="center"> <h1>Личные успехи:</h1> </p> <hr>

Я победитель олимпиад 4-го ур.:     <input type="checkbox" id="input5"> <hr>
Я победитель МАН 3-го уровня:       <input type="checkbox" id="input6"> <hr>
Прохождение ЦДП ХПИ:                <input type="text" id="input7"> <hr>

<div id="error"></div>

</br>

<INPUT TYPE="SUBMIT" VALUE ="Нажми меня" onclick=result()>


</form>




  
  
 <script>
 
 function result() {
var ukr=document.getElementById("input").value;
var fori=document.getElementById("input1").value;
var matan=document.getElementById("input2").value;
var fiz=document.getElementById("input3").value;
var atestat=document.getElementById("input4").value;
var cours=document.getElementById("input7").value;
console.log("qwerty"+ukr);
alert("qwerty"+ukr);
}

 </script>
 
 
</body>
