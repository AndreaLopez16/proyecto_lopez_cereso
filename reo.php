<?php include ('header.php');?>

	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Reo</h1>
			</div>

			<div class="articulo">
			<article>
					<h2>Reos</h2>
					<br/>
					<p>Un reo es una persona que ha de ser castigada por haber incurrido en un hecho ilícito. Este término se utilizará para calificar tanto a la persona investigada como a la que ya ha sido castigada.</p>
					<br/>
					<h2>¿En qué consiste la figura del reo?</h2>
					<br/>
					<p>Según la Real Academia Española, el concepto de reo cuenta con las siguientes acepciones para el ámbito jurídico:<br>
                   <li>1. m. y f. Persona que por haber cometido una culpa merece castigo.</li>
                   <li>2. m. y f. Der. Demandado en juicio civil o criminal, a distinción del actor.</li>
                   <li>3. adj. Acusado, culpado.</li></p>
					<br/>
					<h2>¿A quiénes se les considera “reos habituales”?</h2>
					<br/>
					<p>A tenor del artículo 94 del Código Penal, los reos habituales son los que hubieren cometido tres o más delitos de los comprendidos en un mismo capítulo, en un plazo no superior a cinco años y hayan sido condenados por ello.</p>
					<br/>
					<h2>¿Qué principio jurídico favorece al reo?</h2>
					<br/>
					<p>El célebre principio de in dubio pro reo es aquel que siempre mirará a favor del reo, de tal forma que si hubiera algún tipo de duda a la hora de escoger la pena a aplicar, se elegirá la menos gravosa para el afectado.</p>
					<br/>
					
					
					<html>
   
   <head>
      <title>PHP Form Validation</title>
   </head>
   
   <body>
      <?php
         
         // define variables and set to empty values
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
   
      <p><b>Ayudanos para saber en que mejorar nuestra pagina</b></p>
      
      <form method = "post" action = "/php/php_form_introduction.htm">
         <table>
            <tr>
               <td>Nombre:</td> 
               <td><input type = "text" name = "name"></td>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
            </tr>       
            
            <tr>
               <td>Observaciones:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>¿Te ayudo en lo <br> que buscabas?</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Si
                  <input type = "radio" name = "gender" value = "male">No
               </td>
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "Enviar" value = "Enviar"> 
               </td>
            </tr>
         </table>
      </form>
          <p><b>Gracias por tu ayuda!!!</b><p>
      
      
   </body>
</html>
		    </article>
			</div>
            <?php include ('sidebar.php');?>
			
		</div>
	</section>
    <?php include ('footer.php');?>
</body>
</html>