<?php 

if(isset($_GET['action']) && $_GET['action'] == 'download'){
header('Content-disposition:attachment; filename=CvMichielsLynn.pdf');
header('Content-type:application/pdf');
readfile('files/CvMichielsLynn.pdf');
   download('files/CvMichielsLynn');
    }
