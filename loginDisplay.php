<?php 
// connects us to the connect styring thta connects us to the db
require_once 'fetch.php';

//$selectUsers ="SELECT * FROM students";// variable sql statement to pick data from table
// variable result which associates using the query built in function to  connect string to the  sql stmnt variable we created
//$result = $connect->query($selectUsers);//the one in () is the sql stnmt we want to execute
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <h2>RECENTLY VISITED  SITES</h2>  
  <section id="prominent-destinations">
    <h2 class="title">YOUR RECENT SITES.</h2>
    <div class="about-section">
    <div class="column right-column">
    
    <ul>
        <li>
            <h3>Murchison Falls National Park</h3>
            <p>Experience the power and beauty of the Nile River as it thunders through a narrow gorge at Murchison Falls, where visitors can enjoy game drives, boat safaris, and birdwatching.</p>
        </li>
        <li>
            <h3>Queen Elizabeth National Park</h3>
            <p>Explore diverse ecosystems, including savannah grasslands and wetlands, and spot a variety of wildlife such as elephants, lions, hippos, and birds.</p>
        </li>
        <li>
            <h3>Bwindi Impenetrable National Park</h3>
            <p>Home to half of the world's population of mountain gorillas, Bwindi offers unforgettable gorilla trekking experiences in its dense rainforests.</p>
        </li>
    </ul></div>
    <div class="column left-column">
      
    <img src="cam.jpg" alt="elephant Image" style="width:100%" />
  </div>
  
    </div> 

    
</section>

</body>
</html>