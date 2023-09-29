<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/user_template_management.css">
    <script src="../js/main.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="../js/user_template_management.js"></script>
    <title>User Template Management</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="grid">
        <div class="row no-gutters">
            <div class="col m-4 l-2">
            <?php include_once("./sidebar.php") ?>
            </div>
            <div class="col c-12 m-8 l-10">
                <div class="dashboard-content">
                    <h1>User Template Management</h1>
                    <div class="data-table">
                        <div class="data-table__header">
                            <h2 class="data-table__title">Templates</h2>
                            <div class="data-table__filter-group">
                                <select name="ratio" class="select-box">
                                    <option value="all" selected>All ratio</option>
                                    <option value="16:9">16:9</option>
                                    <option value="16:10">16:10</option>
                                    <option value="21:9">21:9</option>
                                    <option value="32:9">32:9</option>
                                    <option value="4:3">4:3</option>
                                </select>
                                <select name="Subject" class="select-box">
                                    <option value="all" selected>All subject</option>
                                    <option value="pho">Pho</option>
                                    <option value="nail">Nail</option>
                                    <option value="restaurant">Restaurant</option>
                                </select>
                                <a id="add-template-button" href="./select_template.html">
                                    <span class="material-symbols-outlined" style="font-size: 1rem; font-weight: bold;">
                                        add
                                    </span>
                                    <span>Add template</span>
                                </a>
                            </div>
                        </div>
                        <div class="data-table__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Template Name</th>
                                        <th>Title</th>
                                        <th>Ratios</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Created date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>restaurant_1</td>
                                        <td>Restaurant 1</td>
                                        <td>Restaurant 1</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Restaurant</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/restaurant_1')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>restaurant_2</td>
                                        <td>Restaurant 2</td>
                                        <td>Restaurant 2</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Restaurant</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/restaurant_2')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>restaurant_3</td>
                                        <td>Restaurant 3</td>
                                        <td>Restaurant 3</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Restaurant</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/restaurant_3')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>restaurant_4</td>
                                        <td>Restaurant 4</td>
                                        <td>Restaurant 4</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Restaurant</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/restaurant_4')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>restaurant_5</td>
                                        <td>Restaurant 5</td>
                                        <td>Restaurant 5</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Restaurant</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/restaurant_5')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>pho_1</td>
                                        <td>Pho 1</td>
                                        <td>Pho 1</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Pho</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/pho_1')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>pho_2</td>
                                        <td>Pho 2</td>
                                        <td>Pho 2</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Pho</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/pho_2')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>pho_3</td>
                                        <td>Pho 3</td>
                                        <td>Pho 3</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Pho</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/pho_3')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>pho_4</td>
                                        <td>Pho 4</td>
                                        <td>Pho 4</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Pho</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/pho_4')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>pho_5</td>
                                        <td>Pho 5</td>
                                        <td>Pho 5</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Pho</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/pho_5')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nail_1</td>
                                        <td>Nail 1</td>
                                        <td>Nail 1</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Nail</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/nail_1')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nail_2</td>
                                        <td>Nail 2</td>
                                        <td>Nail 2</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Nail</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/nail_2')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nail_3</td>
                                        <td>Nail 3</td>
                                        <td>Nail 3</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Nail</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/nail_3')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nail_4</td>
                                        <td>Nail 4</td>
                                        <td>Nail 4</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Nail</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/nail_4')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>nail_5</td>
                                        <td>Nail 5</td>
                                        <td>Nail 5</td>
                                        <td>16:9 / 16:10 / 4:3</td>
                                        <td>Nail</td>
                                        <td>Active</td>
                                        <td>26/09/2023</td>
                                        <td>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined delete-btn">
                                                    delete
                                                </span>
                                            </button>
                                            <button class="data-table__act-btn">
                                                <span class="material-symbols-outlined">
                                                    edit
                                                </span>
                                            </button><button class="data-table__act-btn"
                                                onclick="copyToClipboard('https:\/\/template.com/nail_5')">
                                                <span class="material-symbols-outlined">
                                                    content_copy
                                                </span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="data-table__footer">
                            <div class="data-table__items-per-page">
                                <select name="items-per-page" id="items-per-page" class="select-box">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15" selected>15</option>
                                    <option value="20">20</option>
                                </select>
                                <span style="margin-left: .5rem;">
                                    Items per page
                                </span>
                            </div>
                            <div class="data-table__pagination">
                                <div class="pagination">
                                    <button class="pagination__prev-btn">
                                        <span class="material-symbols-outlined">
                                            chevron_left
                                        </span>
                                    </button>
                                    <div class="pagination__page-count">
                                        1-15 of 100
                                    </div>
                                    <button class="pagination__next-btn">
                                        <span class="material-symbols-outlined">
                                            chevron_right
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>