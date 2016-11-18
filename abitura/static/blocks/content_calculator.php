<table border="1">
   <tr>
    <th><img src="../static/images/img_calculator/emblema.jpg" width="200" height="100" alt="USA"></th>
    
	 <th colspan="2"><?php echo $Lang["chances"]; ?></th>
 <th> <img src="../static/images/img_calculator/sputnik.jpg" width="200" height="100" alt="sputnik"> </th>
   </tr>
   <tr>
    <td></td>
    <td> <h1> <pre><?php echo $Lang["zno"]; ?></h1>  <hr>
 
 <?php echo $Lang["language"]; ?> <input type="text" align=MIDDLE id="input">  <hr>
 <?php echo $Lang["flanguage"]; ?> <input type="text" id="input1"> <hr>
 <?php echo $Lang["mathematics"]; ?> <input type="text" id="input2"> <hr>
 <?php echo $Lang["physics"]; ?> <input type="text" id="input3"> <hr>
 <?php echo $Lang["chemistry"]; ?> <input type="text" id="input8"> <hr>
 <?php echo $Lang["hu"]; ?> <input type="text" id="input9"> <hr>

 
 
 <p align="center"> <?php echo $Lang["school_certificate"]; ?> </p> <hr>
 
 <?php echo $Lang["average_certificate"]; ?> <input type="text" id="input4"> <hr>
 


<p align="center"> <?php echo $Lang["personal_achievements"]; ?>  </p> <hr>

<?php echo $Lang["winner1"]; ?> <input type="checkbox" id="input5"> <hr>
<?php echo $Lang["winner"]; ?> <input type="checkbox" id="input6"> <hr>
<?php echo $Lang["passing"]; ?> <input type="text" id="input7"> <hr>

<div id="error"></div>

</br>

<INPUT TYPE="SUBMIT" VALUE ="<?php echo $Lang["click"]; ?>" onclick=result()></td>
	<td><p align="center"> <?php echo $Lang["note"]; ?> </p>
 
  
<p align="justify">
<?php echo $Lang["text"]; ?>
 </p></td>
	<td></td>
  </tr>
 </table>