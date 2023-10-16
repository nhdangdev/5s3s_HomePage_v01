<!-- [102305Tuan] add responsive template list -->
<!-- [102310Tuan] version 2 template list -->
<?php
$api_url = 'http://localhost:3000/templates'; 
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Template List</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/grid.css" />
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/components/sidebar_template_list.css" />

  <link rel="stylesheet"  type="text/css"  href="../css/template_list.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/70d145d8f0.js" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script src="../js/sidebar.js"></script>
  <script src="../js/lazy_loading.js" defer></script>

</head>

<body>
  <?php include_once("./loading_screen.php") ?>
  <div class="grid wrapper">
    <div class="row no-gutters">
      <!-- sidebar take 20% screen width -->
      <div class="col c-2 m-1 l-2">
          <?php 
          include_once("./components/sidebar_template_list.php") 
          ?>
        </div>
      <!-- content -->
      <div class="col c-10 m-11 l-10">
        <div class="dashboard-content">
          <!-- begin: view header -->
          <div class="row view-header">
            <ul class="view-select">
              <li class="view-select__option view-select__option--active" data-view="list-view">
                <i class="fa-solid fa-bars"></i>
              </li>
              <li class="view-select__option" data-view="grid-view">
                <i class="fa-solid fa-grip"></i>
              </li>
            </ul>

            <div class="search">
              <i class="fa-solid fa-magnifying-glass search__icon"></i>
              <input type="search" onkeyup="search_view_item()" id="search__input" name="search-input" placeholder="Search" />
            </div>
            <!-- <div class="custom-select filter__subject">
              <select name="" id="filter-subject">
                <option value="0">Subjects</option>
                <option value="1">All Subjects</option>
                <option value="2">Nail salon</option>
                <option value="3">Pho</option>
                <option value="4">Restaurant</option>
              </select>
            </div> -->
            <div class="custom-select filter__ratios">
              <select name="" id="filter-ratios">
                <option value="0">Ratios</option>
                <option value="1">All Ratios</option>
                <option value="2">4:3</option>
                <option value="3">16:9</option>
                <option value="4">16:10</option>
                <option value="5">21:9</option>
                <option value="6">32:9</option>
              </select>
            </div>
            <div class="custom-select filter__date">
              <select name="" id="filter-date">
                <option value="0">Dates</option>
                <option value="1">All dates</option>
                <option value="2">28/9/23</option>

              </select>
            </div>

          </div>
          <!-- end: view header -->

          <div class="view-main">
            <!-- begin: list view -->
            <div class="view-wrap list-view" style="display: block">
              <div class="list-view__header">
                <div class="header-thumbnail">
                  <h4>Thumbnail</h4>
                </div>
                <div class="header-template-name">
                  <h4>Temp name</h4>
                </div>
                <div class="header-title">
                  <h4>Title</h4>
                </div>
                <div class="header-ratios">
                  <h4>Ratios</h4>
                </div>
                <div class="header-subject">
                  <h4>Subject</h4>
                </div>
                <div class="header-status">
                  <h4>Status</h4>
                </div>
                <div class="header-created">
                  <h4>Created</h4>
                </div>
              </div>
              <!-- [102309Tuan] detach view item into separate module -->
              <?php 
                $availabeRatios = array("4:3","16:9","16:10","21:9","32:9");
                require_once('./components/view_item.php');
                foreach ($response_data as &$template){
                  $thumbnail = rand(0,1) == 0 ? "../asset/img/temp_nail_".rand(1,4)."_ratio_16_9.jpg"
                  :'../asset/img/temp_pho_'.rand(3,5).'.png';
                  $arrayRatios = explode("/",$template->ratios);
                  $viewItem = new ViewItem($template->name, $thumbnail, $template->id,  $arrayRatios, $template->category, $template->status, $template->created);
                  $viewItem->buildListViewItem();
                }
              ?>
            </div>
            <!-- end: list view -->

            <!-- begin: grid view -->
            <div class="view-wrap grid-view" style="display: none">
              <!-- [102309Tuan] detach view item into separate module -->
              <?php 
                // $availabeRatios = array("4:3","16:9","16:10","21:9","32:9");
                require_once('./components/view_item.php');              
                foreach ($response_data as &$template){
                  $thumbnail = rand(0,1) == 0 ? "../asset/img/temp_nail_".rand(1,4)."_ratio_16_9.jpg"
                  :'../asset/img/temp_pho_'.rand(3,5).'.png';
                  $arrayRatios = explode("/",$template->ratios);
                  $viewItem = new ViewItem($template->name, $thumbnail, $template->id,  $arrayRatios, $template->category, $template->status, $template->created);
                  $viewItem->buildGridViewItem();
                }
              ?>
            </div>
            <!-- end: grid view -->

            <!-- <button>Load more...</button> -->
          </div>
        </div>

      </div>
      <!-- content -->
    </div>
  </div>
  <script src="../js/template_list_filters.js"></script>
  <script src="../js/grid_list_view.js"></script>
  <script src="../js/template_list_mobile.js"></script>
  <script src="../js/template_list_search_bar.js"></script>
  
</body>

</html>