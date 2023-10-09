// list view javascript
var listItem = document.querySelectorAll('.list-view .view-item');

listItem.forEach((item) => {
    var dropDownButton = item.querySelector('.view-item__name span')
    
    
    var attributeNeedtoDisplay = item.querySelectorAll('.view-item__ratios, .view-item__created, .view-item__subject,.view-item__title,.view-item__status');
    if(dropDownButton) {
        dropDownButton.addEventListener('click',myFN);
        dropDownButton.attributeNeedtoDisplay = attributeNeedtoDisplay;
    }
});

function myFN(event) {
    // console.log(event.currentTarget.attributeNeedtoDisplay);
    event.currentTarget.attributeNeedtoDisplay.forEach(
        (attribute) => attribute.style.display = attribute.style.display == 'flex' ? 'none' : 'flex'
    );
    event.currentTarget.querySelector('i').classList.toggle("drop-down-btn--active")
}