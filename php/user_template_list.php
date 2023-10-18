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
            <h2>User Template List</h2>
            <!-- template table -->
            <div class="data-table" id="template-table">
            </div>
        </div>
    </div>
    <div id="dialog">
    </div>
    <template id="template-table-template">
        <template v-if="!isLoadTemplateData">
            <div class="data-table__header">
                <h4 class="data-table__title">Templates</h4>
                <div class="data-table__filter-group" v-if="templates.length > 0">
                    <!-- <select name="ratio" class="select-box" v-model="filter.ratio" @change.self="handleChangeRatioFilter">
                                    <option value="all" selected>All ratio</option>
                                    <option value="16:9">16:9</option>
                                    <option value="16:10">16:10</option>
                                    <option value="21:9">21:9</option>
                                    <option value="32:9">32:9</option>
                                    <option value="4:3">4:3</option>
                                    <span class="material-icons">
                                        expand_more
                                    </span>
                                </select> -->
                    <!-- <select name="Subject" class="select-box" v-model="filter.subject"
                                    @change.self="handleChangeSubjectFilter">
                                    <option value="all" selected>All subject</option>
                                    <option value="pho">Pho</option>
                                    <option value="nail">Nail</option>
                                    <option value="restaurant">Restaurant</option>
                                </select> -->
                    <div class="dropdown" style="width: 128px;">
                        <button class="dropdown__label-btn" type="button">
                            <span v-if="filter.ratio==='all'">
                                All ratio
                            </span>
                            <span v-else>{{filter.ratio}}</span>
                            <span class="material-symbols-outlined dropdown__expand">
                                expand_more
                            </span>
                        </button>
                        <div class="dropdown__item-wrap">
                            <div class="dropdown__item">
                                <label for="ratio_all">All ratio</label>
                                <input value="all" name="ratio" type="radio" id="ratio_all"
                                    @change="handleSelectRatio"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="ratio_16:9">16:9</label>
                                <input value="16:9" name="ratio" type="radio" id="ratio_16:9"
                                    @change="handleSelectRatio"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="ratio_16:10">16:10</label>
                                <input value="16:10" name="ratio" type="radio" id="ratio_16:10"
                                    @change="handleSelectRatio"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="ratio_21:9">21:9</label>
                                <input value="21:9" name="ratio" type="radio" id="ratio_21:9"
                                    @change="handleSelectRatio"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="ratio_32:9">32:9</label>
                                <input value="32:9" name="ratio" type="radio" id="ratio_32:9"
                                    @change="handleSelectRatio"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="ratio_4:3">4:3</label>
                                <input value="4:3" name="ratio" type="radio" id="ratio_4:3"
                                    @change="handleSelectRatio"></input>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown" style="width: 128px;">
                        <button class="dropdown__label-btn" type="button">
                            <span v-if="filter.subject==='all'">
                                All subject
                            </span>
                            <span v-else>{{filter.subject}}</span>
                            <span class="material-symbols-outlined dropdown__expand">
                                expand_more
                            </span>
                        </button>
                        <div class="dropdown__item-wrap">
                            <div class="dropdown__item">
                                <label for="subject_all">All subject</label>
                                <input value="all" name="subject" type="radio" id="subject_all"
                                    @change="handleSelectSubject"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="subject_restaurant">Restaurant</label>
                                <input value="Restaurant" name="subject" type="radio" id="subject_restaurant"
                                    @change="handleSelectSubject"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="subject_pho">Pho</label>
                                <input value="Pho" name="subject" type="radio" id="subject_pho"
                                    @change="handleSelectSubject"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="subject_nail">Nail</label>
                                <input value="Nail" name="subject" type="radio" id="subject_nail"
                                    @change="handleSelectSubject"></input>
                            </div>
                        </div>
                    </div>
                    <a id="add-template-button" class="primary-btn primary-btn--with-icon"
                        href="./select_template.html">
                        <span class="material-symbols-outlined" style="font-size: 1rem; font-weight: bold;">
                            add
                        </span>
                        <span>Add template</span>
                    </a>
                </div>
            </div>
            <div class="data-table__table" v-if="paginatedTemplates.length > 0">
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
                                    <template v-for="ratio of template.ratios">
                                        <div class="ratios__item"
                                            :class="{'ratios__item--selected': filter.ratio === ratio}">
                                            {{ratio}}
                                        </div>
                                    </template>
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
            <div class="data-table-card-wrap" style="margin-top: 1.5rem;" v-if="paginatedTemplates.length > 0">
                <div class="data-table-card" v-for="template of paginatedTemplates">
                    <div class="data-table-card__title">
                        {{template.title}}
                        <button class="data-table-card__link-button"
                            @click="copyToClipboard(`https:\/\/template.com/${template.id}`)"
                            title="Copy template link">
                            <span class="material-symbols-outlined">
                                link
                            </span>
                        </button>
                    </div>
                    <div class="data-table-card__field">
                        <div class="data-table-card__field-name">Name:</div>
                        <div class="data-table-card__field-value">{{template.name}}</div>
                    </div>
                    <div class="data-table-card__field">
                        <div class="data-table-card__field-name">ID:</div>
                        <div class="data-table-card__field-value">{{template.id}}</div>
                    </div>
                    <div class="data-table-card__field">
                        <div class="data-table-card__field-name">Subject:</div>
                        <div class="data-table-card__field-value">{{template.subject}}</div>
                    </div>
                    <div class="data-table-card__field">
                        <div class="data-table-card__field-name">Status:</div>
                        <div class="data-table-card__field-value">{{template.status}}</div>
                    </div>
                    <div class="data-table-card__field">
                        <div class="data-table-card__field-name">Created:</div>
                        <div class="data-table-card__field-value">{{template.created}}</div>
                    </div>
                    <!-- <div class="data-table-card__name">Name: {{template.name}}</div>
                                <div class="data-table-card__id">ID: {{template.id}}</div>
                                <div class="data-table-card__subject">Subject: {{template.subject}}</div>
                                <div class="data-table-card__status">Status: {{template.status}}</div>
                                <div class="data-table-card__created">Created: {{template.created}}</div> -->
                    <div class="ratios">
                        <template v-for="ratio of template.ratios">
                            <div class="ratios__item" :class="{'ratios__item--selected': filter.ratio === ratio}">
                                {{ratio}}
                            </div>
                        </template>
                    </div>
                    <div class="data-table-card__buttons">
                        <button class="data-table-card__button" title="Delete template"
                            @click.prevent="openDeleteDialog(template)">
                            <span class="material-symbols-outlined delete-btn">
                                delete
                            </span>
                            <span>Delete</span>
                        </button>
                        <button class="data-table-card__button" title="Edit template">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                            <span>Edit</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="data-table__no-item" v-if="paginatedTemplates.length <= 0">
                There are no template
            </div>
            <div class="data-table__footer" v-if="paginatedTemplates.length > 0">
                <div class="data-table__items-per-page">
                    <!-- <select name="items-per-page" class="select-box" v-model="paginationConfig.itemsPerPage"
                                    @change.self="handleChangeItemsPerPage">
                                    <option :value="5" selected>5</option>
                                    <option :value="10">10</option>
                                    <option :value="15">15</option>
                                    <option :value="20">20</option>
                                </select> -->
                    <div class="dropdown" style="width: 64px;">
                        <button class="dropdown__label-btn" type="button">
                            <span>{{paginationConfig.itemsPerPage}}</span>
                            <span class="material-symbols-outlined dropdown__expand">
                                expand_more
                            </span>
                        </button>
                        <div class="dropdown__item-wrap dropdown__item-wrap--reverse">
                            <div class="dropdown__item">
                                <label for="itemperpage_5">5</label>
                                <input value="5" name="ratio" type="radio" id="itemperpage_5"
                                    @change="handleSelectItemsPerPage"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="itemperpage_10">10</label>
                                <input value="10" name="ratio" type="radio" id="itemperpage_10"
                                    @change="handleSelectItemsPerPage"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="itemperpage_15">15</label>
                                <input value="15" name="ratio" type="radio" id="itemperpage_15"
                                    @change="handleSelectItemsPerPage"></input>
                            </div>
                            <div class="dropdown__item">
                                <label for="itemperpage_20">20</label>
                                <input value="20" name="ratio" type="radio" id="itemperpage_20"
                                    @change="handleSelectItemsPerPage"></input>
                            </div>
                        </div>
                    </div>
                    <span style="margin-left: .5rem;">
                        Items per page
                    </span>
                </div>
                <div class="data-table__pagination">
                    <div class="pagination">
                        <button class="pagination__prev-btn" :disabled="paginationConfig.page===1"
                            @click="handlePrevPage">
                            <span class="material-symbols-outlined">
                                chevron_left
                            </span>
                        </button>
                        <div class="pagination__page-count" id="page-count">
                            {{paginationConfig.startIndex + 1}}-{{paginationConfig.endIndex}} of
                            {{paginationConfig.itemCount}}
                        </div>
                        <button class="pagination__next-btn"
                            :disabled="paginationConfig.endIndex === paginationConfig.itemCount"
                            @click="handleNextPage">
                            <span class="material-symbols-outlined">
                                chevron_right
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </template>
        <template v-else>
            <div style="min-height: calc(100dvh - 200px); display: flex; align-items: center; justify-content: center;">
                <div class="loader"></div>
            </div>
        </template>
    </template>
    <template id="dialog-template">
        <div class="dialog" style="width: 500px;">
            <div class="dialog__header">
                <div class="dialog__title">{{dialogData.title}}</div>
                <button class="dialog__close-btn" @click="handleCloseDialog()">
                    <span class="material-symbols-outlined">
                        close
                    </span>
                </button>
            </div>
            <div class="dialog__body">
                {{dialogData.content}}
            </div>
            <div class="dialog__footer">
                <button class="dialog__action-btn" @click="handleCancelDialog()">
                    {{dialogData.cancelButtonText || 'Cancel'}}
                </button>
                <button class="dialog__action-btn dialog__action-btn--primary" @click="handleSubmitDialog()">
                    {{dialogData.submitButtonText || 'Submit'}}
                </button>
            </div>
        </div>
    </template>
</body>

</html>