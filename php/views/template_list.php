<!DOCTYPE html>
<html lang="en">
  <head>  
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Template List</title>
      <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      
      <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
      />
      <link rel="stylesheet" href="../css/grid.css" />
      <link rel="stylesheet" href="../css/main.css" />
      <link rel="stylesheet" href="../css/template_list.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script
        src="https://kit.fontawesome.com/70d145d8f0.js"
        crossorigin="anonymous"
      ></script>
    <script src="../js/main.js"></script>
    <script src="../js/sidebar.js"></script>
  </head>
  <body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="grid wrapper">
      <div class="row no-gutters">
        <!-- sidebar take 20% screen width -->
        <div class="col m-4 l-2">
          <?php include_once("./sidebar.php") ?>
        </div>
        <!-- content -->
        <div class="col c-12 m-8 l-10">
          <div class="dashboard-content">
            <h2>Templates</h2>
            <!-- begin: view header -->
            <div class="row view-header">
              
    
              <ul class="view-select">
                <li
                  class="view-select__option view-select__option--active"
                  data-view="list-view"
                >
                  <i class="fa-solid fa-bars"></i>
                </li>
                <li class="view-select__option" data-view="grid-view">
                  <i class="fa-solid fa-grip"></i>
                </li>
              </ul>
    
              <div class="search">
                <i class="fa-solid fa-magnifying-glass search__icon"></i>
                <input
                  type="search"
                  id="search__input"
                  name="search-input"
                  placeholder="Search"
                />
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
                  <div class="header-thumbnail"><h4>Thumbnail</h4></div>
                  <div claass="header-template-name"><h4>Temp name</h4></div>
                  <div class="header-title"><h4>Title</h4></div>
                  <div class="header-ratios"><h4>Ratios</h4></div>
                  <div class="header-subject"><h4>Subject</h4></div>
                  <div class="header-status"><h4>Status</h4></div>
                  <div class="header-created"><h4>Created</h4></div>
                </div>
    
                <div class="view-item">
                  <div class="view-item__thumbnail">
                    <img
                      src="../asset/img/temp_nail_1_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__name">
                    <p>Nail 1</p>
                  </div>
                  <div class="view-item__title">
                    <p>Lorem ispum</p>
                  </div>
                  <div class="view-item__ratios">
                    <p>16:9 16:10 21:9 32:9</p>
                  </div>
                  <div class="view-item__subject">
                    <p>Nail salon</p>
                  </div>
                  <div class="view-item__status">
                    <p>OK</p>
                  </div>
                  <div class="view-item__created">
                    <p>26/09/23</p>
                  </div>
                </div>
    
                <div class="view-item">
                  <div class="view-item__thumbnail">
                    <img
                      src="../asset/img/temp_nail_2_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__name">
                    <p>Nail 2</p>
                  </div>
                  <div class="view-item__title">
                    <p>Lorem ispum</p>
                  </div>
                  <div class="view-item__ratios">
                    <p>4:3 16:9 16:10 21:9</p>
                  </div>
                  <div class="view-item__subject">
                    <p>Nail salon</p>
                  </div>
                  <div class="view-item__status">
                    <p>OK</p>
                  </div>
                  <div class="view-item__created">
                    <p>26/09/23</p>
                  </div>
                </div>
    
                <div class="view-item">
                  <div class="view-item__thumbnail">
                    <img
                      src="../asset/img/temp_nail_3_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__name">
                    <p>Nail 3</p>
                  </div>
                  <div class="view-item__title">
                    <p>Lorem ispum</p>
                  </div>
                  <div class="view-item__ratios">
                    <p>4:3 16:9 16:10 21:9 32:9</p>
                  </div>
                  <div class="view-item__subject">
                    <p>Nail salon</p>
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
                    <img
                      src="../asset/img/temp_nail_1_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__title">Tempnail 1 Title</div>
                  <div class="view-item__ratios">
                    <div class="ratio-card">4:3</div>
                    <div class="ratio-card">16:9</div>
                    <div class="ratio-card">16:10</div>
                    <div class="ratio-card">21:9</div>
                    <div class="ratio-card">32:9</div>
                  </div>
                  <div class="view-item__name">Nail 1</div>
    
                  <div class="row">
                    <div class="col c-6 view-item__created">26/09/23</div>
                    <div class="col c-4 view-item__subject">Nail salon</div>
                    <!-- <div class="col view-item__status"> Run OK</div> -->
                  </div>
                </div>
    
                <div class="view-item">
                  <div class="view-item__thumbnail">
                    <img
                      src="../asset/img/temp_nail_2_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__title">Tempnail 2 Title</div>
                  <div class="view-item__ratios">
                    <div class="ratio-card">4:3</div>
                    <div class="ratio-card">16:9</div>
                    <div class="ratio-card">16:10</div>
                    <div class="ratio-card">21:9</div>
                    <div class="ratio-card">32:9</div>
                  </div>
                  <div class="view-item__name">Nail 2</div>
    
                  <div class="row">
                    <div class="col c-6 view-item__created">26/09/23</div>
                    <div class="col c-4 view-item__subject">Nail salon</div>
                    <!-- <div class="col view-item__status"> Run OK</div> -->
                  </div>
                </div>
    
                <div class="view-item">
                  <div class="view-item__thumbnail">
                    <img
                      src="../asset/img/temp_nail_3_ratio_16_9.jpg"
                      alt="thumbnail"
                    />
                  </div>
                  <div class="view-item__title">Tempnail 3 Title</div>
                  <div class="view-item__ratios">
                    <div class="ratio-card">4:3</div>
                    <div class="ratio-card">16:9</div>
                    <div class="ratio-card">16:10</div>
                    <div class="ratio-card">21:9</div>
                    <div class="ratio-card">32:9</div>
                  </div>
                  <div class="view-item__name">Nail 3</div>
    
                  <div class="row">
                    <div class="col c-6 view-item__created">26/09/23</div>
                    <div class="col c-4 view-item__subject">Nail salon</div>
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
    <script src="../js/custom_select_input.js"></script>
    <script src="../js/grid_list_view.js"></script>
  </body>
</html>
