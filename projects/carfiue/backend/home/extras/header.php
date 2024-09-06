<?php session_start() ?>
<?php $_SESSION['id'] ?? header("location: /M%20IAWD%202401/projects/carfiue/auth/sign-in.php") ?>
<?php include "../../config/db.php";

$explode = explode('/', $_SERVER['PHP_SELF']);
// $id = $_SESSION['author_id'];
$link = end($explode);

$id = $_SESSION['id'];
$query = "SELECT image FROM users WHERE id = '$id'";
$image = mysqli_fetch_assoc(mysqli_query($db_connection, $query))['image'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="stacks" />
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet" />
    <link href="../../assets/plugins/pace/pace.css" rel="stylesheet" />

    <!-- Theme Styles -->
    <link href="../../assets/css/main.min.css" rel="stylesheet" />
    <link href="../../assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../../public/backend/assets/plugins/pace/pace.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <?php if ($image == 'default.png') { ?>
                            <img src="../../public/upload/default/default.png" ; />
                        <?php } else { ?>

                            <img src="../../public/upload/profile/<?php echo $image; ?>" />
                        <?php } ?>
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">hhp
                            <?php echo $_SESSION['username'] ?? "" ?><br /><span class="user-state-info">On a
                                call</span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">Apps</li>
                    <li class="<?= ($link == 'dashboard.php') ? 'active-page' : '' ?>">
                        <a href="dashboard.php" class="active"><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= ($link == 'settings.php') ? 'active-page' : '' ?>">
                        <a href="settings.php" class="active"><i
                                class="material-icons-two-tone">settings</i>Settings</a>
                    </li>
                    <li class="<?= ($link == 'services.php') ? 'active-page' : '' ?>">
                        <a href="services.php" class="active"><i
                                class="material-icons-two-tone">medical_services</i>services</a>
                    </li>
                    <li class="<?= ($link == 'testimonial.php') ? 'active-page' : '' ?>">
                        <a href="testimonial.php" class="active"><i
                                class="material-symbols-outlined"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368">
                                    <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z" />
                                </svg></i>testimonial</a>
                    </li>
                    <li class="<?= ($link == 'protfolio.php') ? 'active-page' : '' ?>">
                        <a href="protfolio.php"><i class="material-icons-two-tone">design_services</i>Portfolios</a>
                    </li>
                    <li class="<?= ($link == 'fact.php') ? 'active-page' : '' ?>">
                        <a href="fact.php">

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-half">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                    <path d="M12 22V2" />
                                </svg>
                            </i>
                            <span class="pt-1 d-inline-block"> fact</span>

                        </a>
                    </li>
                    <li class="<?= ($link == 'brand.php') ? 'active-page' : '' ?>">
                        <a href="brand.php">

                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-slack">
                                    <rect width="3" height="8" x="13" y="2" rx="1.5" />
                                    <path d="M19 8.5V10h1.5A1.5 1.5 0 1 0 19 8.5" />
                                    <rect width="3" height="8" x="8" y="14" rx="1.5" />
                                    <path d="M5 15.5V14H3.5A1.5 1.5 0 1 0 5 15.5" />
                                    <rect width="8" height="3" x="14" y="13" rx="1.5" />
                                    <path d="M15.5 19H14v1.5a1.5 1.5 0 1 0 1.5-1.5" />
                                    <rect width="8" height="3" x="2" y="8" rx="1.5" />
                                    <path d="M8.5 5H10V3.5A1.5 1.5 0 1 0 8.5 5" />
                                </svg>
                            </i>
                            <span class="pt-1 d-inline-block">brand</span>

                        </a>
                    </li>
                    <!-- <li>
                        <a href="mailbox.html"><i class="material-icons-two-tone">inbox</i>Mailbox<span
                                class="badge rounded-pill badge-danger float-end">87</span></a>
                    </li>
                    <li>
                        <a href="file-manager.html"><i class="material-icons-two-tone">cloud_queue</i>File
                            Manager</a>
                    </li>
                    <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span
                                class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li>
                        <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">star</i>Pages<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="pricing.html">Pricing</a>
                            </li>
                            <li>
                                <a href="invoice.html">Invoice</a>
                            </li>
                            <li>
                                <a href="settings.html">Settings</a>
                            </li>
                            <li>
                                <a href="#">Authentication<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="sign-in.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="sign-up.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="lock-screen.html">Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="error.html">Error</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="sidebar-title">UI Elements</li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">color_lens</i>Styles<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="styles-typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="styles-code.html">Code</a>
                            </li>
                            <li>
                                <a href="styles-icons.html">Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">grid_on</i>Tables<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="tables-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">DataTable</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="material-icons-two-tone">sentiment_satisfied_alt</i>Elements<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li>
                                <a href="ui-avatars.html">Avatars</a>
                            </li>
                            <li>
                                <a href="ui-badge.html">Badge</a>
                            </li>
                            <li>
                                <a href="ui-breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="ui-button-groups.html">Button Groups</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-dropdown.html">Dropdown</a>
                            </li>
                            <li>
                                <a href="ui-images.html">Images</a>
                            </li>
                            <li>
                                <a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui-popovers.html">Popovers</a>
                            </li>
                            <li>
                                <a href="ui-progress.html">Progress</a>
                            </li>
                            <li>
                                <a href="ui-spinners.html">Spinners</a>
                            </li>
                            <li>
                                <a href="ui-toast.html">Toast</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">card_giftcard</i>Components<i class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="components-accordions.html">Accordions</a>
                            </li>
                            <li>
                                <a href="components-block-ui.html">Block UI</a>
                            </li>
                            <li>
                                <a href="components-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="components-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="components-countdown.html">Countdown</a>
                            </li>
                            <li>
                                <a href="components-lightbox.html">Lightbox</a>
                            </li>
                            <li>
                                <a href="components-lists.html">Lists</a>
                            </li>
                            <li>
                                <a href="components-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="components-tabs.html">Tabs</a>
                            </li>
                            <li>
                                <a href="components-session-timeout.html">Session Timeout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="material-icons-two-tone">widgets</i>Widgets</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">edit</i>Forms<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="forms-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="forms-input-groups.html">Input Groups</a>
                            </li>
                            <li>
                                <a href="forms-input-masks.html">Input Masks</a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">Form Layouts</a>
                            </li>
                            <li>
                                <a href="forms-validation.html">Form Validation</a>
                            </li>
                            <li>
                                <a href="forms-file-upload.html">File Upload</a>
                            </li>
                            <li>
                                <a href="forms-text-editor.html">Text Editor</a>
                            </li>
                            <li>
                                <a href="forms-datepickers.html">Datepickers</a>
                            </li>
                            <li>
                                <a href="forms-select2.html">Select2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">analytics</i>Charts<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="charts-apex.html">Apex</a>
                            </li>
                            <li>
                                <a href="charts-chartjs.html">ChartJS</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">Layout</li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_agenda</i>Content<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="content-page-headings.html">Page Headings</a>
                            </li>
                            <li>
                                <a href="content-section-headings.html">Section Headings</a>
                            </li>
                            <li>
                                <a href="content-left-menu.html">Left Menu</a>
                            </li>
                            <li>
                                <a href="content-right-menu.html">Right Menu</a>
                            </li>
                            <li>
                                <a href="content-boxed-content.html">Boxed Content</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">menu</i>Menu<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="menu-off-canvas.html">Off-Canvas</a>
                            </li>
                            <li>
                                <a href="menu-standard.html">Standard</a>
                            </li>
                            <li>
                                <a href="menu-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li>
                                <a href="menu-hover-menu.html">Hover Menu</a>
                            </li>
                            <li>
                                <a href="menu-colored-sidebar.html">Colored Sidebar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">view_day</i>Header<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="header-basic.html">Basic</a>
                            </li>
                            <li>
                                <a href="header-full-width.html">Full-width</a>
                            </li>
                            <li>
                                <a href="header-transparent.html">Transparent</a>
                            </li>
                            <li>
                                <a href="header-large.html">Large</a>
                            </li>
                            <li>
                                <a href="header-colorful.html">Colorful</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-title">Other</li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">bookmark</i>Documentation</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons-two-tone">access_time</i>Change Log</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search" />
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li>
                                            <a class="dropdown-item" href="#">New Workspace</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Create Project</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu"
                                        aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing
                                                    and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i
                                                            class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text
                                                    of the printing
                                                    and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">
                                                Create new repository
                                            </button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="logout.php">
                                        Logout
                                    </a>
                                </li>
                                <!-- <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link active" href="#">Applications</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Reports</a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a class="nav-link" href="#">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a
                                        class="nav-link language-dropdown-toggle"
                                        href="#"
                                        id="languageDropDown"
                                        data-bs-toggle="dropdown"><img src="../../assets/images/flags/us.png" alt="" /></a>
                                    <ul
                                        class="dropdown-menu dropdown-menu-end language-dropdown"
                                        aria-labelledby="languageDropDown">
                                        <li>
                                            <a class="dropdown-item" href="#"><img
                                                    src="../../assets/images/flags/germany.png"
                                                    alt="" />German</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><img
                                                    src="../../assets/images/flags/italy.png"
                                                    alt="" />Italian</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><img
                                                    src="../../assets/images/flags/china.png"
                                                    alt="" />Chinese</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item hidden-on-mobile">
                                    <a
                                        class="nav-link nav-notifications-toggle"
                                        id="notificationsDropDown"
                                        href="#"
                                        data-bs-toggle="dropdown">4</a>
                                    <div
                                        class="dropdown-menu dropdown-menu-end notifications-dropdown"
                                        aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span
                                                            class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">
                                                            Donec tempus nisi sed erat vestibulum, eu
                                                            suscipit ex laoreet
                                                        </p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span
                                                            class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">
                                                            Quisque ligula dui, tincidunt nec pharetra eu,
                                                            fringilla quis mauris
                                                        </p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span
                                                            class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>
                                                            Nulla id libero mattis justo euismod congue in
                                                            et metus
                                                        </p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img
                                                                src="../../assets/images/avatars/avatar.png"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>
                                                            Praesent sodales lobortis velit ac pellentesque
                                                        </p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img
                                                                src="../../assets/images/avatars/avatar.png"
                                                                alt="" />
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>
                                                            Praesent lacinia ante eget tristique mattis. Nam
                                                            sollicitudin velit sit amet auctor porta
                                                        </p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">