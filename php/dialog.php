<div class="dialog" style="width: 500px;">
    <div class="dialog__header">
        <div class="dialog__title"><?=$dialog_title?></div>
        <button class="dialog__close-btn" onclick="hideDialog()">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>
    <div class="dialog__body">
        <?=$dialog_content?>
    </div>
    <div class="dialog__footer">
        <?=$dialog_action_btns?>
        <!-- <button class="dialog__action-btn" onclick="hideDialog()">
            Cancle
        </button>
        <button class="dialog__action-btn dialog__action-btn--primary">
            Submit
        </button> -->
    </div>
</div>