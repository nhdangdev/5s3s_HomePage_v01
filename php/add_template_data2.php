<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include_once('./config.php');
        $extend_head = '<link rel="stylesheet" href="'.$cms_asset_path.'/css/add_template_data2.css">';
        $extend_head .= '<script src="'.$cms_asset_path.'/js/add_template_data.js"></script>';
        include_once($cms_views_path.'/head.php');
    ?>
    <title>Add Template Data 2</title>
</head>

<body>
    <?php include_once("./loading_screen.php") ?>
    <?php include_once("./mobile_header.php") ?>
    <div class="dashboard">
        <?php include_once("./sidebar.php") ?>
        <div class="dashboard__content">
            <h2>Add your template data</h2>
            <br>
            <form action="#" method="post" id="template-data-form">
                <h3>Category</h3>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Category 1
                                </div>
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
                                    <input type="text" name="category-name[]" id="category-name-1"
                                        placeholder="Category name 1">
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Category 2
                                </div>
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
                                    <input type="text" name="category-name[]" id="category-name-2"
                                        placeholder="Category name 2">
                                </div>
                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Category 3
                                </div>
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
                                    <input type="text" name="category-name[]" id="category-name-3"
                                        placeholder="Category name 3">
                                </div>

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Category 4
                                </div>
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
                                    <input type="text" name="category-name[]" id="category-name-4"
                                        placeholder="Category name 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Product</h3>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Product 1
                                </div>
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
                                    <input type="text" name="product-name[]" id="product-name-1"
                                        placeholder="Product name 1">
                                </div>
                                <div class="template-data-item__control">
                                    <!-- <label for="product-price-1">
                                    Product price:
                                </label> -->
                                    <input type="text" name="product-price[]" id="product-price-1"
                                        placeholder="Product price 1">
                                </div>

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Product 2
                                </div>
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
                                    <!-- <label for="product-name-2">
                                    Product name:
                                </label> -->
                                    <input type="text" name="product-name[]" id="product-name-2"
                                        placeholder="Product name 2">
                                </div>
                                <div class="template-data-item__control">
                                    <!-- <label for="product-price-2">
                                    Product price:
                                </label> -->
                                    <input type="text" name="product-price[]" id="product-price-2"
                                        placeholder="Product price 2">
                                </div>

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Product 3
                                </div>
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
                                    <!-- <label for="product-name-3">
                                    Product name:
                                </label> -->
                                    <input type="text" name="product-name[]" id="product-name-3"
                                        placeholder="Product name 3">
                                </div>
                                <div class="template-data-item__control">
                                    <!-- <label for="product-price-3">
                                    Product price:
                                </label> -->
                                    <input type="text" name="product-price[]" id="product-price-3"
                                        placeholder="Product price 3">
                                </div>

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Product 4
                                </div>
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
                                    <!-- <label for="product-name-4">
                                    Product name:
                                </label> -->
                                    <input type="text" name="product-name[]" id="product-name-4"
                                        placeholder="Product name 4">
                                </div>
                                <div class="template-data-item__control">
                                    <!-- <label for="product-price-4">
                                    Product price:
                                </label> -->
                                    <input type="text" name="product-price[]" id="product-price-4"
                                        placeholder="Product price 4">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Image</h3>
                <div class="grid">
                    <div class="row no-gutters">
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Background Image
                                </div>
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

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Image 1
                                </div>
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

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Image 2
                                </div>
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

                            </div>
                        </div>
                        <div class="col c-6 m-6 l-3">
                            <div class="template-data-item">
                                <div class="template-data-item__key">
                                    Image 3
                                </div>
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

                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" id="add-template-data-btn">Add template data</button>
            </form>
        </div>
    </div>
</body>

</html>