<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rennova</title>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@400;700&display=swap"
    rel="stylesheet">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- CSS Personalizado -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">

  <!-- JS Personalizado -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/js/scripts.js'); ?>">
</head>

<body>

  <div class="d-flex">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-grow-1">
      <div class="main-content">
        <?php include 'header.php'; ?>

        <!-- Content Area -->
        <div class="content-body p-4">
