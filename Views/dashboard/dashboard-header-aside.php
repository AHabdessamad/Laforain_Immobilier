<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="add-post.css" />
    <script src="js/lamarti.js" defer></script>
    <title>Dashboard</title>
  </head>
  <body>
    <div class="container">
      <header class="header">
        <div class="logo">
          <a href="index.html">
            <img src="../images/LOGO WHITE.png" alt="logo" width="150" />
          </a>
        </div>
        <form class="search-bar">
          <i class="fas fa-search"></i>
          <input
            type="text"
            placeholder="Rechercher ou taper une commande..."
          />
        </form>
        <div class="log-out">
          <button type="submit"><i class="fas fa-plus"></i> Create</button>
        </div>
        <div class="admin">
          <img
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
            alt="admin-pic"
          />
          <div class="admin-info">
            <a href="#profile">profile</a>
            <a href="#account-settings">paramètres du compte</a>
            <a href="#logout">Se déconnecter</a>
          </div>
        </div>
      </header>
      <article class="article">
        <aside class="aside-bar">
          <a href="#home"> <i class="fas fa-home"></i> Accueil</a>
          <div class="posts">
            <div class="posts-top top-element">
              <div>
                <i class="fas fa-gem"></i>
                <a class="sidebar-add" href="#">Posts </a>
              </div>
              <a href="add-post.php"><i class="fas fa-plus"></i></a>
              <i class="fas fa-chevron-down arrow"></i>
            </div>
            <div class="post-data">
              <a href="add-post.php">Ajouter Un post</a>
              <a href="#view-all-post">Voir tous les post</a>
            </div>
          </div>
          <a href="#users"><i class="fas fa-user"></i> Clients</a>
          <a href="#logout"
            ><i class="fas fa-right-from-bracket"></i> Se déconnecter</a
          >
        </aside>