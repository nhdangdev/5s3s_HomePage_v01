<div class="card">
    <img src="<?= $data['image'];?>" class="card-img-top card__image" />
    <div class="card-body" style="padding: unset; margin-top: 12px">
        <div class="card-header">
            <h5 class="card-header__id">#<?= $data['id'];?></h5>
            <div class="card-header__menu dropend">
                <i class="fa-solid fa-ellipsis"></i>
                <ul class="dropdown-menu shadow bg-body">
                    <li class="dropdown-item btn-view">View detail</li>
                    <li class=" dropdown-item">Edit</li>
                    <li class="dropdown-item">Delete</li>
                </ul>
            </div>
        </div>
        <div class="card-type">
            <span class="circle"></span>
            <span><?= $data['type'];?></span>
        </div>
    </div>
</div>