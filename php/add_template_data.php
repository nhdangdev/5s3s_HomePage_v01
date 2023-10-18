<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/add_template_data.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/add_template_data.js"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Add Template Data</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <h2>Add your template data</h2>
            <form action="#" method="post" id="template-data-form">
                <h4>Category</h4>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="category-image-1" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="category-img-preview-1">
                                    <input type="file" name="category-image[]" id="category-image-1"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#category-img-preview-1">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="category-name-1">
                                        Category name:
                                    </label>
                                    <input type="text" name="category-name[]" id="category-name-1">
                                </div>
                                <div class="template-data-item__key">
                                    Category 1
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="category-image-2" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="category-img-preview-2">
                                    <input type="file" name="category-image[]" id="category-image-2"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#category-img-preview-2">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="category-name-2">
                                        Category name:
                                    </label>
                                    <input type="text" name="category-name[]" id="category-name-2">
                                </div>
                                <div class="template-data-item__key">
                                    Category 2
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="category-image-3" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="category-img-preview-3">
                                    <input type="file" name="category-image[]" id="category-image-3"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#category-img-preview-3">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="category-name-3">
                                        Category name:
                                    </label>
                                    <input type="text" name="category-name[]" id="category-name-3">
                                </div>
                                <div class="template-data-item__key">
                                    Category 3
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="category-image-4" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="category-img-preview-4">
                                    <input type="file" name="category-image[]" id="category-image-4"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#category-img-preview-4">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="category-name-4">
                                        Category name:
                                    </label>
                                    <input type="text" name="category-name[]" id="category-name-4">
                                </div>
                                <div class="template-data-item__key">
                                    Category 4
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h4>Product</h4>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="product-image-1" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="product-img-preview-1">
                                    <input type="file" name="product-image[]" id="product-image-1"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#product-img-preview-1">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="product-name-1">
                                        Product name:
                                    </label>
                                    <input type="text" name="product-name[]" id="product-name-1">
                                </div>
                                <div class="template-data-item__control">
                                    <label for="product-price-1">
                                        Product price:
                                    </label>
                                    <input type="text" name="product-price[]" id="product-price-1">
                                </div>
                                <div class="template-data-item__key">
                                    Product 1
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="product-image-2" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="product-img-preview-2">
                                    <input type="file" name="product-image[]" id="product-image-2"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#product-img-preview-2">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="product-name-2">
                                        Product name:
                                    </label>
                                    <input type="text" name="product-name[]" id="product-name-2">
                                </div>
                                <div class="template-data-item__control">
                                    <label for="product-price-2">
                                        Product price:
                                    </label>
                                    <input type="text" name="product-price[]" id="product-price-2">
                                </div>
                                <div class="template-data-item__key">
                                    Product 2
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="product-image-3" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="product-img-preview-3">
                                    <input type="file" name="product-image[]" id="product-image-3"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#product-img-preview-3">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="product-name-3">
                                        Product name:
                                    </label>
                                    <input type="text" name="product-name[]" id="product-name-3">
                                </div>
                                <div class="template-data-item__control">
                                    <label for="product-price-3">
                                        Product price:
                                    </label>
                                    <input type="text" name="product-price[]" id="product-price-3">
                                </div>
                                <div class="template-data-item__key">
                                    Product 3
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="product-image-4" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="product-img-preview-4">
                                    <input type="file" name="product-image[]" id="product-image-4"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#product-img-preview-4">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__control">
                                    <label for="product-name-4">
                                        Product name:
                                    </label>
                                    <input type="text" name="product-name[]" id="product-name-4">
                                </div>
                                <div class="template-data-item__control">
                                    <label for="product-price-4">
                                        Product price:
                                    </label>
                                    <input type="text" name="product-price[]" id="product-price-4">
                                </div>
                                <div class="template-data-item__key">
                                    Product 4
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Image</h4>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="image-image-backgroundimage" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="image-img-preview-backgroundimage">
                                    <input type="file" name="image-image[]" id="image-image-backgroundimage"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url=""
                                        data-image-preview-selector="#image-img-preview-backgroundimage">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__key">
                                    Background Image
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="image-image-1" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="image-img-preview-1">
                                    <input type="file" name="image-image[]" id="image-image-1"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#image-img-preview-1">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__key">
                                    Image 1
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="image-image-2" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="image-img-preview-2">
                                    <input type="file" name="image-image[]" id="image-image-2"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#image-img-preview-2">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__key">
                                    Image 2
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <label for="image-image-3" class="template-data-item__img">
                                    <img src="../asset/img/no-image.png" alt="No image"
                                        class="template-data-item__img-preview" id="image-img-preview-3">
                                    <input type="file" name="image-image[]" id="image-image-3"
                                        class="template-data-item__img-file" onchange="handlePickImageFile(this)"
                                        data-old-image-url="" data-image-preview-selector="#image-img-preview-3">
                                    <div class="template-data-item__img-picker">
                                        <span class="material-symbols-outlined">
                                            add_a_photo
                                        </span>
                                    </div>
                                </label>
                                <div class="template-data-item__key">
                                    Image 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="primary-btn" id="add-template-data-btn">Add template data</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>