<div class="card card-horizontal">
    <img src="<?= $data['image'];?>" class="card-img-top card__image" />
    <div class="card-body">
        <div class="card-header">
            <h5 class="card-header__id">#<?= $data['id'];?></h5>
        </div>
        <div class="card-type">
            <span class="circle"></span>
            <span><?= $data['type'];?></span>
        </div>
        <div class="cart-action">
            <button class="cart-action__button btn-view">
                <i class="fa-regular fa-eye"></i>
                <span>View Detail</span>
            </button>
            <button class="cart-action__button btn-edit">
                <i class="fa-solid fa-pencil"></i>
                <span>Edit</span>
            </button>
            <button class="cart-action__button btn-delete">
                <i class="fa-solid fa-trash-can"></i>
                <span>Delete</span>
            </button>
        </div>
    </div>
</div>