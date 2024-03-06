<?php

    header("Content-type: application/pdf");
        header("Content-Disposition: inline; filename=book.pdf");
        readfile("book.pdf");

?>