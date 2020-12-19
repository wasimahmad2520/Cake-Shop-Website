<?php include "./checkAccess.php"; ?>

<?php 
    if(!isset($_SESSION))
    {
        session_start();
    }
    
    if(isset($_SESSION['fname'])){
        $href = 'checkAccount.php';
    } else {
        $href = 'login.php';
    }
?>

<header class="main-header-media1200">
    <nav class="nav-media1200 main-nav-media1200">

        <h1 class="business-name-media1200"><a href="index.php" class="animate__animated animate__backInDown">Malako</a></h1>

        <ul class="animate__animated animate__backInDown">
            <li><a href="index.php" class="<?php if($page == 'index'){echo 'active';}?>">HOME</a></li>
            <li><a href="products.php" class="<?php if($page == 'products'){echo 'active';}?>">PRODUCTS</a></li>
            <li><a href="makeyourcake.php" class="<?php if($page == 'makeyourcake'){echo 'active';}?>">MAKE YOUR CAKE</a></li>
            <li><a href="about.php" class="<?php if($page == 'about'){echo 'active';}?>">ABOUT</a></li>
            <li><a href="contact.php" class="<?php if($page == 'contact'){echo 'active';}?>">CONTACT US</a></li>
            <li><a href="#" class="user-button"><i class="bx bx-cart nav__cart"></i></a></li>
            <li><a href="<?php echo $href;?>" class="<?php if($page == 'login'){echo 'active';}?> user-button"><i class="far fa-user-circle"></i></a></li>
        </ul>
    </nav>
</header>