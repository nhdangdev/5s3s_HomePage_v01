<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="../css/select_template.css">';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Select Template</title>
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
                    <h2>Choose your template</h2>
                    <div class="grid">
                        <div class="row">
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_3" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_3.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 3
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_4" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_4.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 4
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_5" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_5.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 5
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_6" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_3.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 6
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_7" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_4.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 7
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_8" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_5.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 8
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_9" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_3.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 9
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col c-6 m-6 l-3">
                                <a href="./add_template_data.php?template=temp_pho_1" class="template-item-link">
                                    <div class="template-item">
                                        <div class="template-item__thumb">
                                            <img src="../asset/img/temp_pho_4.png">
                                        </div>
                                        <div class="template-item__name">
                                            Template Pho 1
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>