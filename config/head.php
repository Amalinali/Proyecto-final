<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($page_title) ? $page_title : "Sistemas Web "; ?> - DEMO</title>
     <!-- Bootstrap CSS -->
    <link href="libs/css/bootstrap.css" rel="stylesheet" media="screen">
</head>
<body>
 
    <?php include 'nav.php'; ?>
 
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1><?php echo $page_title; ?></h1>
        </div>