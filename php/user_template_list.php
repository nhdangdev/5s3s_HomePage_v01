<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/user_template_list.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/user_template_list.js" type="module"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>User Template Management</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <h1>User Template List</h1>
            <!-- template table -->
            <div class="data-table" id="template-table">
            </div>
        </div>
    </div>
    <template id="template-table-template">
        <div class="data-table__header">
            <h2 class="data-table__title">Templates</h2>
            <div class="data-table__filter-group">
                <select name="ratio" class="select-box" v-model="filter.ratio" @change.self="handleChangeRatioFilter">
                    <option value="all" selected>All ratio</option>
                    <option value="16:9">16:9</option>
                    <option value="16:10">16:10</option>
                    <option value="21:9">21:9</option>
                    <option value="32:9">32:9</option>
                    <option value="4:3">4:3</option>
                </select>
                <select name="Subject" class="select-box" v-model="filter.subject"
                    @change.self="handleChangeSubjectFilter">
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
                <tbody>
                    <tr v-for="template of paginatedTemplates">
                        <td>
                            {{template.id}}
                        </td>
                        <td>{{template.name}}</td>
                        <td>{{template.title}}</td>
                        <td>
                            <div class="ratios">
                                <div v-for="ratio of template.ratios" class="ratios__item">
                                    {{ratio}}
                                </div>
                            </div>
                        </td>
                        <td>{{template.subject}}</td>
                        <td>{{template.status}}</td>
                        <td>{{template.created}}</td>
                        <td>
                            <button class="data-table__act-btn" title="Delete template">
                                <span class="material-symbols-outlined delete-btn">
                                    delete
                                </span>
                            </button>
                            <button class="data-table__act-btn" title="Edit template">
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                            </button>
                            <button class="data-table__act-btn"
                                @click="copyToClipboard(`https:\/\/template.com/${template.id}`)"
                                title="Copy template link">
                                <span class="material-symbols-outlined">
                                    link
                                </span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="data-table__footer">
            <div class="data-table__items-per-page">
                <select name="items-per-page" class="select-box" v-model="paginationConfig.itemsPerPage"
                    @change.self="handleChangeItemsPerPage">
                    <option :value="5" selected>5</option>
                    <option :value="10">10</option>
                    <option :value="15">15</option>
                    <option :value="20">20</option>
                </select>
                <span style="margin-left: .5rem;">
                    Items per page
                </span>
            </div>
            <div class="data-table__pagination">
                <div class="pagination">
                    <button class="pagination__prev-btn" :disabled="paginationConfig.page===1" @click="handlePrevPage">
                        <span class="material-symbols-outlined">
                            chevron_left
                        </span>
                    </button>
                    <div class="pagination__page-count" id="page-count">
                        {{paginationConfig.startIndex + 1}}-{{paginationConfig.endIndex}} of
                        {{paginationConfig.itemCount}}
                    </div>
                    <button class="pagination__next-btn"
                        :disabled="paginationConfig.endIndex === paginationConfig.itemCount" @click="handleNextPage">
                        <span class="material-symbols-outlined">
                            chevron_right
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </template>
</body>

</html>