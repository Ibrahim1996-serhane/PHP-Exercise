
<!DOCTYPE html>
     <html>
         <head>
              <title>part-3 </title>      
         </head>
    <body>
  	        <h2>Palindrome</h2>
            <form method="post">
         	<div class="input-group">
  		    <label>Please Enter a Word </label>
  	     	<input type="text" name="word" required value="" > 
        	</div>
  	        <div class="input-group">
  		    <button type="submit" class="btn" name="submit">Enter</button>
  	        </div>
              <?php
               function reverse($palindrome){
                   $rev = strrev($palindrome);
                   if ($rev == $palindrome)
                   echo "this is a palindrome ";
                   else {
                    echo "Is not  a palindrome ";  
                   }             
                 }    
                 if(isset($_POST['submit'])){
                     reverse($_POST ['word']);
                 }          
                  ?>
			<p></p>
			</form>
         </section>
       </div>
    </body>
  </html>