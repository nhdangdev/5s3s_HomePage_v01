<?php 
    $temp_datas = array(
        array(
            "id" => "1",
            "type" => "product",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "2",
            "type" => "category",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "3",
            "type" => "image",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "4",
            "type" => "image",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "5",
            "type" => "product",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "6",
            "type" => "image",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "7",
            "type" => "product",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "8",
            "type" => "product",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "9",
            "type" => "category",
            "image" => "https://picsum.photos/200/300",
        ),
        array(
            "id" => "10",
            "type" => "image",
            "image" => "https://picsum.photos/200/300",
        )
    )
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include_once('./config.php');
    $extend_head .='<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />';
    $extend_head .='<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />';
    $extend_head .='<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
    $extend_head .= '<link rel="stylesheet" href="'.$cms_asset_path.'/css/dialog.css">';
    $extend_head .= '<link rel="stylesheet" href="'.$cms_asset_path.'/css/card.css">';
    $extend_head .= '<link rel="stylesheet" href="'.$cms_asset_path.'/css/data_management.css">';
    $extend_head .='<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>';
    $extend_head .='<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>';
    $extend_head .= '<script src="'.$cms_asset_path.'/js/dialog.js"></script>';
    $extend_head .= '<title>Data Management</title>';
    include_once($cms_views_path.'/head.php');
?>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <!-- [122329TIN] fix header not overlay item cards -->
            <div class="sticky-header" style="box-shadow: 0 -1.5rem 0 2rem #fff;padding: 0.5rem;">
                <div class="dashboard-header">
                    <div class="dashboard-header__title">
                        <h2 class="dashboard-header__title-heading">Data List</h2>
                        <span class="dashboard-header__title-sub">Where to store data about your products</span>
                    </div>
                    <button class="dashboard-header__primary-btn" onclick="showDialog('#add-data-dialog')">
                        Add Data
                    </button>
                </div>
                <div class="data-management-toolbar" style="margin-top: 1rem;">
                    <div class="data-management-toolbar__left-side">
                        <div class="data-management-toolbar__search">
                            <div class="search-icon" style="margin-bottom: -2px;">
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                            </div>
                            <input type="search" name="search" placeholder="Search ...">
                        </div>
                    </div>
                    <div class="data-management-toolbar__right-side">
                        <span class="material-symbols-outlined">
                            swap_vert
                        </span>
                        <span class="material-symbols-outlined">
                            filter_list
                        </span>
                    </div>
                </div>
            </div>
            <!-- desktop card -->
            <div class="data-management-items data-management-items--desktop" style="margin-top: 1rem;">
                <?php
                foreach ($temp_datas as &$data) {
                    include('components/data-card-horizontal.php');
                }
            ?>
            </div>
            <!-- mobile card -->
            <div class="data-management-items data-management-items--mobile" style="margin-top: .5rem;">
                <?php
                foreach ($temp_datas as &$data) {
                    include('components/data-card.php');
                }
            ?>
            </div>
            <!-- Modal -->
            <div class="modal fade">
                <div class="modal-dialog shadow">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="modal__btn__close" data-bs-dismiss="modal">
                                <i class="bi bi-x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-4">
                                    <span>Image</span>
                                </div>
                                <div class="col-8">
                                    <img src="https://picsum.photos/200/300" alt="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <span>Name</span>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <span>Subname</span>
                                </div>
                                <div class="col-8">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <span>Price</span>
                                </div>
                                <div class="col-8">
                                    <p>$20.0</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <span>Description</span>
                                </div>
                                <div class="col-8">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Ipsam maiores nam quaerat? Doloribus eaque tempora aliquid, ab
                                        dolorem voluptatum ipsa, corporis facere porro sed praesentium
                                        expedita nesciunt numquam explicabo adipisci!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- popup -->
            <div class="dialog dialog--hide" id="add-data-dialog"
                style="max-width: 400px; width: 90dvw; max-height: 90dvh;">
                <div class="dialog__header">
                    <div class="dialog__title">Add New Data</div>
                    <button class="dialog__close-btn" onclick="hideDialog('#add-data-dialog')">
                        <span class="material-symbols-outlined">
                            close
                        </span>
                    </button>
                </div>
                <div class="dialog__body" style="overflow-y: auto;">
                    <div class="data-form">
                        <div class="data-form__wrap">
                            <div class="data-form__datatype-tabs">
                                <label for="category-type" class="data-form__datatype-tab">
                                    <input class="data-form__datatype-tab-control" type="radio" name="type"
                                        id="category-type" value="category" checked>
                                    <span class="data-form__datatype-tab-label">Category</span>
                                </label>
                                <label for="product-type" class="data-form__datatype-tab">
                                    <input class="data-form__datatype-tab-control" type="radio" name="type"
                                        id="product-type" value="product">
                                    <span class="data-form__datatype-tab-label">Product</span>
                                </label>
                                <label for="image-type" class="data-form__datatype-tab">
                                    <input class="data-form__datatype-tab-control" type="radio" name="type"
                                        id="image-type" value="image">
                                    <span class="data-form__datatype-tab-label">Image</span>
                                </label>
                            </div>
                            <div class="data-form__input-wrap" id="datatype-input-wrap" style="margin-top: .5rem;">
                                <!-- <div class="data-form__image-picker">
                                <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
                                <button class="data-form__image-picker-button" type="button">
                                    <span class="material-symbols-outlined">
                                        photo_camera
                                    </span>
                                </button>
                            </div>
                            <div class="data-form__field">
                                <label class="data-form__field-label" for="name">Name</label>
                                <input class="data-form__field-control" type="text" name="name" id="name"
                                    placeholder="Enter name for your product here">
                                <span class="data-form__field-error-message">Please fill a value</span>
                            </div>
                            <div class="data-form__field">
                                <label class="data-form__field-label" for="subName">Subname</label>
                                <input class="data-form__field-control" type="text" name="subName" id="subName"
                                    placeholder="Enter another name for your product here">
                                <span class="data-form__field-error-message">Please fill a value</span>
                            </div>
                            <div class="data-form__field">
                                <label class="data-form__field-label" for="price">Price</label>
                                <input class="data-form__field-control" type="text" name="price" id="price"
                                    placeholder="Enter price for your product">
                                <span class="data-form__field-error-message">Please fill a value</span>
                            </div>
                            <div class="data-form__field">
                                <label class="data-form__field-label" for="description">Description</label>
                                <textarea style="resize: vertical;" class="data-form__field-control" name="description"
                                    id="description" cols="30" rows="10"
                                    placeholder="Enter description for your product here"></textarea>
                                <span class="data-form__field-error-message">Please fill a value</span>
                            </div> -->
                            </div>
                            <div class="data-form__footer">
                                <button class="data-form__submit-btn">
                                    Add Data
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form add data -->
            <!-- <div class="data-form" style="max-width: 400px;">
            <div class="data-form__wrap">
                <div class="data-form__title">Add New Data</div>
                <div class="data-form__datatype-tabs">
                    <label for="category-type" class="data-form__datatype-tab">
                        <input class="data-form__datatype-tab-control" type="radio" name="type" id="category-type"
                            value="category" checked>
                        <span class="data-form__datatype-tab-label">Category</span>
                    </label>
                    <label for="product-type" class="data-form__datatype-tab">
                        <input class="data-form__datatype-tab-control" type="radio" name="type" id="product-type"
                            value="product">
                        <span class="data-form__datatype-tab-label">Product</span>
                    </label>
                    <label for="image-type" class="data-form__datatype-tab">
                        <input class="data-form__datatype-tab-control" type="radio" name="type" id="image-type"
                            value="image">
                        <span class="data-form__datatype-tab-label">Image</span>
                    </label>
                </div>
                <div class="data-form__input-wrap">
                    <div class="data-form__image-picker">
                        <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
                        <button class="data-form__image-picker-button" type="button">
                            <span class="material-symbols-outlined">
                                photo_camera
                            </span>
                        </button>
                    </div>
                    <div class="data-form__field">
                        <label class="data-form__field-label" for="name">Name</label>
                        <input class="data-form__field-control" type="text" name="name" id="name"
                            placeholder="Enter name for your product here">
                        <span class="data-form__field-error-message">Please fill a value</span>
                    </div>
                    <div class="data-form__field">
                        <label class="data-form__field-label" for="subName">Subname</label>
                        <input class="data-form__field-control" type="text" name="subName" id="subName"
                            placeholder="Enter another name for your product here">
                    </div>
                    <div class="data-form__field">
                        <label class="data-form__field-label" for="price">Price</label>
                        <input class="data-form__field-control" type="text" name="price" id="price"
                            placeholder="Enter price for your product">
                    </div>
                    <div class="data-form__field">
                        <label class="data-form__field-label" for="description">Description</label>
                        <textarea style="resize: vertical;" class="data-form__field-control" name="description"
                            id="description" cols="30" rows="10"
                            placeholder="Enter description for your product here"></textarea>
                    </div>
                </div>
                <div class="data-form__footer">
                    <button class="data-form__submit-btn">
                        Add Data
                    </button>
                </div>
            </div>
        </div> -->
        </div>
    </div>
    <!-- image-inputs-template -->
    <template id="image-inputs-template">
        <div class="data-form__image-picker">
            <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
            <button class="data-form__image-picker-button" type="button">
                <span class="material-symbols-outlined">
                    photo_camera
                </span>
            </button>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="name">Name</label>
            <input class="data-form__field-control" type="text" name="name" id="name"
                placeholder="Enter name for your image here">
            <span class="data-form__field-error-message"></span>
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
    </template>
    <!-- product-inputs-template -->
    <template id="product-inputs-template">
        <div class="data-form__image-picker">
            <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
            <button class="data-form__image-picker-button" type="button">
                <span class="material-symbols-outlined">
                    photo_camera
                </span>
            </button>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="name">Name</label>
            <input class="data-form__field-control" type="text" name="name" id="name"
                placeholder="Enter name for your product here">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="subName">Subname</label>
            <input class="data-form__field-control" type="text" name="subName" id="subName"
                placeholder="Enter another name for your product here">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="price">Price</label>
            <input class="data-form__field-control" type="text" name="price" id="price"
                placeholder="Enter price for your product">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="description">Description</label>
            <textarea style="resize: vertical;" class="data-form__field-control" name="description" id="description"
                cols="30" rows="10" placeholder="Enter description for your product here"></textarea>
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
    </template>
    <!-- product-inputs-template -->
    <template id="product-inputs-template">
        <div class="data-form__image-picker">
            <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
            <button class="data-form__image-picker-button" type="button">
                <span class="material-symbols-outlined">
                    photo_camera
                </span>
            </button>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="name">Name</label>
            <input class="data-form__field-control" type="text" name="name" id="name"
                placeholder="Enter name for your product here">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="subName">Subname</label>
            <input class="data-form__field-control" type="text" name="subName" id="subName"
                placeholder="Enter another name for your product here">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="price">Price</label>
            <input class="data-form__field-control" type="text" name="price" id="price"
                placeholder="Enter price for your product">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="description">Description</label>
            <textarea style="resize: vertical;" class="data-form__field-control" name="description" id="description"
                cols="30" rows="10" placeholder="Enter description for your product here"></textarea>
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
    </template>
    <!-- category-inputs-template -->
    <template id="category-inputs-template">
        <div class="data-form__image-picker">
            <img class="data-form__image-picker-preview" src="https://picsum.photos/200/300" alt="">
            <button class="data-form__image-picker-button" type="button">
                <span class="material-symbols-outlined">
                    photo_camera
                </span>
            </button>
        </div>
        <div class="data-form__field">
            <label class="data-form__field-label" for="name">Name</label>
            <input class="data-form__field-control" type="text" name="name" id="name"
                placeholder="Enter name for your category here">
            <span class="data-form__field-error-message">Please fill a value</span>
        </div>
    </template>
    <script>
        const DATA_INPUT_WRAP_ID = 'datatype-input-wrap'
        const DATA_TYPE_TAB_CONTROL_CLASSNAME = 'data-form__datatype-tab-control'
        const datatypeTabControls = document.querySelectorAll('.' + DATA_TYPE_TAB_CONTROL_CLASSNAME)
        const dataInputWrap = document.querySelector('#' + DATA_INPUT_WRAP_ID)
        const inputTemplateIds = {
            'category': 'category-inputs-template',
            'product': 'product-inputs-template',
            'image': 'image-inputs-template',
        }

        for (let datatypeTabControl of datatypeTabControls) {

            // init inputs of data form
            if (datatypeTabControl.checked) {
                handleChangeDataType(datatypeTabControl.value)
            }

            datatypeTabControl.addEventListener('change', (e) => {
                if (!datatypeTabControl.checked) return;
                handleChangeDataType(datatypeTabControl.value)
            })
        }

        function handleChangeDataType(type) {
            const inputTemplateId = inputTemplateIds[type]
            if (!type || !inputTemplateId) return

            const inputTemplate = document.querySelector('#' + inputTemplateId)
            dataInputWrap.innerHTML = inputTemplate.innerHTML
        }

        // Get the button and the modal
        const openModalBtn = $(".btn-view");
        const modal = new bootstrap.Modal($(".modal"));

        // Add click event listener to the button
        openModalBtn.on("click", () => {
            // Open the modal
            modal.show();
        });
    </script>
</body>

</html>