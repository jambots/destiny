<?php
// PHP code goes here
 $rnd=base64_encode($_POST['reportName']);
 $chunkNum=$_POST['chunkNum'];
 $pdf = base64_decode($_POST['pdfData']);
 $fname = "reports/" .$_POST['reportName'] . "_" . $rnd . ".pdf"; // name the file
 if($chunkNum=="0"){$file = fopen($fname, 'w');} // open the file write
 else{$file = fopen($fname, 'a');}// append chunk
 fwrite($file, $pdf); //save data
 fclose($file);
 echo '{"file":"' . $fname . '", "chunkNum":"' . $chunkNum . '"}';
?>