<?php

/*  save  dalam  server,  then baca.  Cara ni alternative 
untuk avoid user yang ada extension download pdf sahaja*/

//$html2pdf->Output('Resit.pdf', 'I');


/* ___________________________________________Server save Start */
//Save temporary at server
$html2pdf->Output(__DIR__ .'/pdfile/Resit.pdf', 'F');

// The location of the PDF file on the server.
$filename = "pdfile/Resit.pdf";
// Let the browser know that a PDF file is coming.
header("Content-type: application/pdf");
header("Content-Length: " . filesize($filename));
// Send the file to the browser.
readfile($filename);
exit; 
/* ____________________________________________Server save End */

?>