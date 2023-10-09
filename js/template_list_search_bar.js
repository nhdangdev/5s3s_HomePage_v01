function search_view_item(){
    let input = document.getElementById('search__input').value;
    input = input.toLowerCase();
    var regexPattern = /\s+/g;
    input = input.replace(regexPattern, " ");
    let x = document.getElementsByClassName('view-item');
    
    for(i=0;i<x.length;i++){
        if(!x[i].innerHTML.toLowerCase().includes(input)){
            x[i].classList.add("hidden");
        }
        else{
            x[i].classList.remove("hidden");
        }
    }
}   