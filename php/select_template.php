<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/select_template.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/select_template.js" type="module"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Select Template</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <h2 style="margin-bottom: 0;">Add your template data</h2>
            <br>
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
                <h5 style="margin: 0;">Choose a template and your data</h5>
                <button type="button" class="primary-btn" id="next-step" onclick="nextStep()">Next step</button>
            </div>
            <div class="grid">
                <div class="row no-gutters" id="template-item-list">
                </div>
            </div>
        </div>
    </div>

    <template id="template-item-template">
        <div v-for="(template, index) of templates" class="col c-6 m-6 l-3">
            <div class="template-item">
                <input type="radio" name="select_template" :id="template.id" class="template-item__radio"
                    :checked="index===0">
                <label :for="template.id" class="template-item__label">
                    <div class="template-item__thumb">
                        <img :src="template.thumb">
                    </div>
                    <div class="template-item__name">
                        {{template.name}}
                    </div>
                </label>
            </div>
        </div>
    </template>
    <script>
        function nextStep() {
            const selectedTemplae = document.querySelector('.template-item__radio:checked')
            const selectedTemplaeId = selectedTemplae?.id || ''
            if (!selectedTemplaeId) { return }

            const searchParams = new URLSearchParams()
            searchParams.set('template', selectedTemplaeId)
            window.location.href = `./add_template_data2.php?${searchParams.toString()}`
        }
    </script>
</body>

</html>