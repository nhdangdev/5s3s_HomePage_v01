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
    <script src="../js/user_template_management.js" type="module"></script>
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
                                <select name="ratio" class="select-box" id="ratio-selectbox">
                                    <option value="all" selected>All ratio</option>
                                    <option value="16:9">16:9</option>
                                    <option value="16:10">16:10</option>
                                    <option value="21:9">21:9</option>
                                    <option value="32:9">32:9</option>
                                    <option value="4:3">4:3</option>
                                </select>
                                <select name="Subject" class="select-box" id="subject-selectbox">
                                    <option value="all" selected>All subject</option>
                                    <option value="pho">Pho</option>
                                    <option value="nail">Nail</option>
                                    <option value="restaurant">Restaurant</option>
                                </select>
                                <a id="add-template-button" href="./select_template.php">
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
                                <tbody id="template-rows">
                                </tbody>
                            </table>
                        </div>
                        <div class="data-table__footer">
                            <div class="data-table__items-per-page">
                                <select name="items-per-page" id="items-per-page" class="select-box">
                                    <option value="5" selected>5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                                <span style="margin-left: .5rem;">
                                    Items per page
                                </span>
                            </div>
                            <div class="data-table__pagination">
                                <div class="pagination">
                                    <button class="pagination__prev-btn" id="prev-page-btn">
                                        <span class="material-symbols-outlined">
                                            chevron_left
                                        </span>
                                    </button>
                                    <div class="pagination__page-count" id="page-count">
                                        1-5 of 100
                                    </div>
                                    <button class="pagination__next-btn" id="next-page-btn">
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
    <template id="template-row-template">
        <tr v-for="template of templates">
            <td>
                {{template.id}}
            </td>
            <td>{{template.name}}</td>
            <td>{{template.title}}</td>
            <td>{{template.ratios.join(' / ')}}</td>
            <td>{{template.subject}}</td>
            <td>{{template.status}}</td>
            <td>{{template.created}}</td>
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
                    @click="copyToClipboard(`https:\/\/template.com/${template.id}`)">
                    <span class="material-symbols-outlined">
                        content_copy
                    </span>
                </button>
            </td>
        </tr>
    </template>
</body>

</html>