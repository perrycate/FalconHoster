<?php
// The *only* point of this file is to make sure users can't see the base
// uploads directory.
header('Location: ../index.php');
die();
