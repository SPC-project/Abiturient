<body>

<form>

 <p align="center"> <h1>������� ���� ���� ���:</h1> </p> <hr>
 
 ���������� ���� � ����������: <input type="text" align=MIDDLE id="input">  <hr>
 ����������� ����:             <input type="text" id="input1"> <hr>
 ����������:                   <input type="text" id="input2"> <hr>
 ������:                       <input type="text" id="input3"> <hr>

 
 
 <p align="center"> <h1>�������� ��������:</h1> </p> <hr>
 
 ������� ��� ���������:             <input type="text" id="input4"> <hr>
 


<p align="center"> <h1>������ ������:</h1> </p> <hr>

� ���������� �������� 4-�� ��.:     <input type="checkbox" id="input5"> <hr>
� ���������� ��� 3-�� ������:       <input type="checkbox" id="input6"> <hr>
����������� ��� ���:                <input type="text" id="input7"> <hr>

<div id="error"></div>

</br>

<INPUT TYPE="SUBMIT" VALUE ="����� ����" onclick=result()>


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
