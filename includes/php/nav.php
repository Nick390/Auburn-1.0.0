<?php
include_once __DIR__ . '/../source/session.php';
if(!isset($_SESSION['user_name'])): header("location: /");?>

      <?php else: ?>

      <?php endif ?>
<!--You can add more pages through this page-->

<div class="d-flex" id="wrapper">

<!-- Sidebar -->

<div class="bg-light border-right navbar-light" id="sidebar-wrapper">
  <div class="sidebar-heading">
    <a class="navbar-brand text-dark" href="/admin/dashboard.php" title="<?php echo $lang['LogoTitle'] ?>">
    <img src="/admin/files/logo.svg" width="30" height="30" class="d-inline-block align-top" loading="lazy">
    Auburn 
  </a>
</div>
  
  <div class="list-group list-group-flush" >
    <a href="/admin/dashboard.php" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['ControlpanelTitle'] ?>"><i class="fas fa-tachometer-alt"></i> <?php echo $lang['Controlpanel'] ?></a>
    <a href="/admin/settings.php" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['SettingsTitle'] ?>"> <i class="fas fa-cogs"></i> <?php echo $lang['Settings'] ?></a>
    <a href="#" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['PagesTitle'] ?>"><i class="fas fa-clone"></i> <?php echo $lang['Pages'] ?></a>
    <a href="#" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['ThemesTitle'] ?>"><i class="fas fa-pencil-ruler"></i> <?php echo $lang['Themes'] ?></a>
    <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#dropdown-Gallery"   title="<?php echo $lang['GalleryTitle'] ?>"><i class="fas fa-photo-video"></i> <?php echo $lang['Gallery'] ?>
    <i class="fas fa-caret-down"></i></a>
        <!-- Dropdown level 1 -->
						<div id="dropdown-Gallery" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
                  <li><a class="list-group-item list-group-item-action bg-light" href="/admin/gallery.php"><?php echo $lang['All Files'] ?></a></li>
									<li><a class="list-group-item list-group-item-action bg-light" href="/admin/UploadMultipleFiles.php"><?php echo $lang['Upload New File'] ?></a></li>
                </ul>
              </div>
            </div>
    <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#dropdown-Plugins"  title="<?php echo $lang['PluginsTitle'] ?>"><i class="fas fa-puzzle-piece"></i> <?php echo $lang['Plugins'] ?>
    <i class="fas fa-caret-down"></i></a>
						<!-- Dropdown level 1 -->
						<div id="dropdown-Plugins" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
                  <li><a class="list-group-item list-group-item-action bg-light" href="/admin/plugins.php"><?php echo $lang['All Plugins']; ?></a></li>
									<li><a class="list-group-item list-group-item-action bg-light" href="/admin/submit-a-new-notification.php"><?php echo $lang['Send New Notification']; ?></a></li>
                  <li><a class="list-group-item list-group-item-action bg-light" href="/admin/view-all-notification.php"><?php echo $lang['View All Notifications']; ?></a></li>
                </ul>
              </div>
            </div>
    <a class="list-group-item list-group-item-action bg-light" data-toggle="collapse" href="#dropdown-posts" title="<?php echo $lang['PostsTitle'] ?>"><i class="fas fa-newspaper"></i> <?php echo $lang['Posts'] ?> <i class="fas fa-caret-down"></i></a>
    						<!-- Dropdown level 1 -->
                <div id="dropdown-posts" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
                  <li><a class="list-group-item list-group-item-action bg-light" href="/admin/submit_posts.php"><?php echo $lang['All posts']; ?></a></li>
									<li><a class="list-group-item list-group-item-action bg-light" href="/admin/submit_posts.php"><?php echo $lang['Submit posts']; ?></a></li>
                  <li><a class="list-group-item list-group-item-action bg-light" href="/admin/view-all-notification.php"><?php echo $lang['View All Notifications']; ?></a></li>
                </ul>
              </div>
            </div>
    <a href="/admin/users-dashboard.php" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['UsersTitle'] ?>"><i class="fas fa-users"></i> <?php echo $lang['Users'] ?></a>
    <a href="/admin/view-account.php" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['AccountTitle'] ?>"><i class="fas fa-id-card-alt"></i> <?php echo $lang['Account'] ?></a>
    <a href="#" class="list-group-item list-group-item-action bg-light" title="<?php echo $lang['UserGuideTitle'] ?>"><i class="fas fa-book"></i> <?php echo $lang['UserGuide'] ?></a>
   

  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button type="button" class="btn" id="menu-toggle" title="<?php echo $lang['NavbarTogglerTitle'] ?>">
  <span class="fas fa-bars" id="menu-toggle"></span>
  </button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav <?php echo $lang['Margin']; ?> mt-2 mt-lg-0">
        <li class="nav-item active" title="<?php echo $lang['MainTitle'] ?>">
          <a class="nav-link" href="dashboard.php"><?php echo $lang['Main'] ?></a>
        </li>
        <li class="nav-item active" title="<?php echo $lang['ViewTheSiteTitle'] ?>">
          <a class="nav-link" href="../pages/dashboard.php" target="_blank"><?php echo $lang['ViewTheSite'] ?></a>
        </li>


        <li class="nav-item dropdown active" title="<?php echo $lang['AdminThemeTitle'] ?>">
          <a class="nav-link ropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-adjust"></i></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <div class="custom-control custom-switch d-flex justify-content-center" aria-labelledby="navbarDropdown">
          <input type="checkbox" class="custom-control-input" id="darkSwitch" />
          <label class="custom-control-label" for="darkSwitch"><?php echo $lang['Dark Mode Switch'] ?></label>
          <script src="/scripts/theme_switcher.js"></script>
        </div>
        </div>
        </li>


        <li class="nav-item dropdown active" title="<?php echo $lang['langTitle'] ?>">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-language"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="?lang=en"><?php echo $lang['lang_en'] ?></a>
          <a class="dropdown-item" href="?lang=ar"><?php echo $lang['lang_ar'] ?></a>
        </div>
      </li>
      </ul>
      <a href="/index.php?logout"><button title="<?php echo $lang['LogOutTitle'] ?>" class="btn btn-outline-danger my-2 my-sm-0"><?php echo $lang['LogOut'] ?></button><a/>
    </div>
  </nav>
  <div class="container">
  <div class="row m-2">