<!DOCTYPE HTML PUBLIC "-W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/tr/html4/loose.dtd"> 
<html> 
<head> 
<title> �����������</title> 
<meta http-equiv="Content-Type" content="text/html; 
charset=windows-1251"> 
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
a.button:active { 
top: 1px; 
color: #ffdead; 
box-shadow: inset #ebab00 0 -1px 1px, inset 0 1px 1px #ffbf00, #cc7722 0 0 0 1px, 0 10px 10px -9px #000; 
} 

 </style>


</head>

<body>

<form>

 <p align="center"> <h1>������� ���� ���� ���:</h1> </p> <hr>
 
 ���������� ���� � ����������: <input type="text" align=MIDDLE id="input">  <hr>
 ����������� ����:             <input type="text" id="input1"> <hr>
 ����������:                   <input type="text" id="input2"> <hr>
 ������:                       <input type="text" id="input3"> <hr>
 �����:                       <input type="text" id="input8"> <hr>
 ������� �������:                       <input type="text" id="input9"> <hr>

 
 
 <p align="center"> <h1>�������� ��������:</h1> </p> <hr>
 
 ������� ��� ���������:             <input type="text" id="input4"> <hr>
 


<p align="center"> <h1>������ ������:</h1> </p> <hr>

� ���������� �������� 4-�� ��.:     <input type="checkbox" id="input5"> <hr>
� ���������� ��� 3-�� ������:       <input type="checkbox" id="input6"> <hr>
����������� ��� ���:                <input type="text" id="input7"> <hr>

<div id="error"></div>

</br>

<INPUT TYPE="SUBMIT" VALUE ="����� ����" onclick=result()>
<!-- <a align="center" <button class="button">��������� ���� �� �����������</button> </a>  --> 

</form>



<script>
input.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};

input1.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input1.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};
input2.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input2.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};
input3.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input3.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};

input4.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input4.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};

input8.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input8.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};


input9.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input9.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};

input7.onblur = function() {
  if (isNaN(this.value)) { // ������� �� �����
    // �������� ������
    this.className = "error";
    error.innerHTML = '�� ����� �� �����. ���������, ����������.'
  }
};

input7.onfocus = function() {
  if (this.className == 'error') { // �������� ��������� "������", ���� ��� ����
    this.className = "";
    error.innerHTML = "";
  }
};

</script>
  
  
 <script>
 
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


alert ("��� ���������� ��� - " + all_sum);

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
alert ("� 2013 ���� �� � 1 �������");
}
if( place >= 10 && place <= 20)
{
alert ("� 2013 ���� �� � 2 �������");
}
if( place > 20 )
{
alert ("� 2013 ���� �� ����� �� ���������");
}

if( place1 <= 10)
{
alert ("� 2014 ���� �� � 1 �������");
}
if( place1 >= 10 && place1 <= 20)
{
alert ("� 2014 ���� �� � 2 �������");
}
if( place1 > 20 )
{
alert ("� 2014 ���� �� ����� �� ���������");
}


if( place2 <= 10)
{
alert ("� 2015 ���� �� � 1 �������");
}
if( place2 >= 10 && place2 <= 20)
{
alert ("� 2015 ���� �� � 2 �������");
}
if( place2 > 20 )
{
alert ("� 2015 ���� �� ����� �� ���������");
}



place_of_all = year2013.length;
place1_of_all = year2014.length;
place2_of_all = year2015.length;


}

 </script>
 
 
</body>
</html>