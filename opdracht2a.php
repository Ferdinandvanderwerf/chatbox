<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Opdracht</title>
  </head>

<body>
<?php
        $ages = [10,50,39,40,67,99,7,2,10,88];
        

        function getAverageAge($ages, $sum=0) {
			
          for($i=0; $i<count($ages); $i++) {
            $sum += $ages[$i];
          }

          return $sum / count($ages);
        }

        echo getAverageAge($ages);
?>
		</body>
</html>
