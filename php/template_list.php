<!-- [102305Tuan] add responsive template list -->
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/70d145d8f0.js" crossorigin="anonymous"></script>
  <?php
    include_once('./config.php');
    $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/template_list.css">';
    $extend_head .= '<script src="'.$cms_asset_path.'/js/custom_select_input.js" defer></script>';
    $extend_head .= '<script src="'.$cms_asset_path.'/js/grid_list_view.js" defer></script>';
    $extend_head .= '<script src="'.$cms_asset_path.'/js/template_list_mobile.js" defer></script>';
    include_once($cms_views_path.'/head.php');
  ?>
  <title>Template List</title>
</head>

<body>
  <?php include_once("./loading_screen.php") ?>
  <div class="grid wrapper">
    <div class="row no-gutters">
      <!-- sidebar take 20% screen width -->
      <!-- <div class="col m-4 l-2">
          <?php //include_once("./sidebar.php") ?>
        </div> -->
      <!-- content -->
      <div class="col c-12 m-12 l-12">
        <div class="dashboard-content">
          <h2>Templates</h2>
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
              <input type="search" id="search__input" name="search-input" placeholder="Search" />
            </div>
            <div class="custom-select filter__subject">
              <select name="" id="filter-subject">
                <option value="1">All Subjects</option>
                <option value="2">Nail</option>
                <option value="3">Pho</option>
                <option value="4">Restaurant</option>
              </select>
            </div>
            <div class="custom-select filter__ratios">
              <select name="" id="filter-ratios">
                <option value="0">Ratio filter</option>
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
                <div claass="header-template-name">
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

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_1_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__name">
                  <p>Nail 1 <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
                </div>
                <div class="view-item__title">
                  <span>Title: </span>
                  <p>Lorem ispum</p>
                </div>
                <div class="view-item__ratios">
                  <span>Ratios: </span>
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>

                </div>
                <div class="view-item__subject">
                  <span>Subject: </span>
                  <p>Nail salon</p>
                </div>
                <div class="view-item__status">
                  <span>Status: </span>
                  <p>OK</p>
                </div>
                <div class="view-item__created">
                  <span>Created date: </span>
                  <p>26/09/23</p>
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_2_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__name">
                  <p>Nail 2 <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
                </div>
                <div class="view-item__title">
                  <span>Title: </span>
                  <p>nail 2 title</p>
                </div>
                <div class="view-item__ratios">
                  <span>Ratios: </span>
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>

                </div>
                <div class="view-item__subject">
                  <span>Subject: </span>
                  <p>Nail salon</p>
                </div>
                <div class="view-item__status">
                  <span>Status: </span>
                  <p>OK</p>
                </div>
                <div class="view-item__created">
                  <span>Created date: </span>
                  <p>26/09/23</p>
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_3_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__name">
                  <p>Nail 3 <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
                </div>
                <div class="view-item__title">
                  <span>Title: </span>
                  <p>Lorem ispum</p>
                </div>
                <div class="view-item__ratios">
                  <span>Ratios: </span>
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>

                </div>
                <div class="view-item__subject">
                  <span>Subject: </span>
                  <p>Nail salon</p>
                </div>
                <div class="view-item__status">
                  <span>Status: </span>
                  <p>OK</p>
                </div>
                <div class="view-item__created">
                  <span>Created date: </span>
                  <p>26/09/23</p>
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_4_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__name">
                  <p>Nail 4 <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
                </div>
                <div class="view-item__title">
                  <span>Title: </span>
                  <p>Lorem ispum</p>
                </div>
                <div class="view-item__ratios">
                  <span>Ratios: </span>
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>

                </div>
                <div class="view-item__subject">
                  <span>Subject: </span>
                  <p>Nail salon</p>
                </div>
                <div class="view-item__status">
                  <span>Status: </span>
                  <p>OK</p>
                </div>
                <div class="view-item__created">
                  <span>Created date: </span>
                  <p>26/09/23</p>
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_3_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__name">
                  <p>Pho 1</p>
                </div>
                <div class="view-item__title">
                  <p>Lorem ispum</p>
                </div>
                <div class="view-item__ratios">
                  <div class="ratio-card">16:9</div>
                  <div class="ratio-card">16:10</div>
                  <div class="ratio-card">32:9</div>
                </div>
                <div class="view-item__subject">
                  <p>Pho</p>
                </div>
                <div class="view-item__status">
                  <p>OK</p>
                </div>
                <div class="view-item__created">
                  <p>26/09/23</p>
                </div>
              </div>
            </div>
            <!-- end: list view -->

            <!-- begin: grid view -->
            <div class="view-wrap grid-view" style="display: none">
              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_1_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__title">Tempnail 1 Title</div>
                <div class="view-item__name">Nail 1 </div>
                <div class="view-item__ratios">
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>
                  <div class="ratio-card">16:10</div>
                  <div class="ratio-card">21:9</div>
                  <div class="ratio-card">32:9</div>
                </div>

                <div class="row no-gutters">
                  <div class="col c-6 view-item__created">26/09/23</div>
                  <div class="col c-6 view-item__subject">Nail salon</div>
                  <!-- <div class="col view-item__status"> Run OK</div> -->
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_2_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__title">Tempnail 2 Title</div>
                <div class="view-item__name">Nail 2</div>
                <div class="view-item__ratios">
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>
                  <div class="ratio-card">16:10</div>
                  <div class="ratio-card">21:9</div>
                  <div class="ratio-card">32:9</div>
                </div>

                <div class="row no-gutters">
                  <div class="col c-6 view-item__created">26/09/23</div>
                  <div class="col c-6 view-item__subject">Nail salon</div>
                  <!-- <div class="col view-item__status"> Run OK</div> -->
                </div>
              </div>

              <div class="view-item">
                <div class="view-item__thumbnail">
                  <img src="../asset/img/temp_nail_3_ratio_16_9.jpg" alt="thumbnail" />
                </div>
                <div class="view-item__title">Tempnail 3 Title</div>
                <div class="view-item__name">Nail 3</div>
                <div class="view-item__ratios">
                  <div class="ratio-card">4:3</div>
                  <div class="ratio-card">16:9</div>
                  <div class="ratio-card">16:10</div>
                  <div class="ratio-card">21:9</div>
                </div>

                <div class="row no-gutters">
                  <div class="col c-6 view-item__created">26/09/23</div>
                  <div class="col c-6 view-item__subject">Nail salon</div>
                  <!-- <div class="col view-item__status"> Run OK</div> -->
                </div>
              </div>
            </div>
            <!-- end: grid view -->
          </div>
        </div>

      </div>
      <!-- content -->
    </div>
  </div>
</body>

</html>