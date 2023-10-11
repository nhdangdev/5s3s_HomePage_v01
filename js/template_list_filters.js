// [102305Tuan] add responsive template list
// [102306Tuan] fix bug filter
// [102311Tuan] version 2 template list

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /* When an item is clicked, update the original select box,
        and the selected item: */
      var y, i, k, s, h, sl, yl;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];

      //this.innerHTML = selected value
      //pass selected value to filter function
      //call filter function
      // myFilter(this.innerHTML,s.id);
      myFilter2(this.innerHTML,s.id);

      sl = s.length;
      h = this.parentNode.previousSibling;
      for (i = 0; i < sl; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");
          yl = y.length;
          for (k = 0; k < yl; k++) {
            y[k].removeAttribute("class");
          }
          this.setAttribute("class", "same-as-selected");
          break;
        }
      }
      h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x,
    y,
    i,
    xl,
    yl,
    arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);

function myFilter2(value, filterField) {

  var viewItemList = document.querySelectorAll(".view-item");
  //hidden all items
  viewItemList.forEach((item) => (item.classList.add("hidden")));
  viewItemArr = Array.from(viewItemList);

  //call fulter function for subject
  var val;
  if(filterField == "filter-subject"){
    val = value;
  }
  else{
    val = document.querySelector('.nav-link--active').getAttribute("data-view");
    console.log(val);
  }
  
  viewItemArr = switchFilter2("filter-subject", viewItemArr, val);

  // call filter function for ratios, date
  document.querySelectorAll(".custom-select").forEach((filterDiv) => {
    var selectId = filterDiv.querySelector("select").id;
    
    var currentSelectValue =
      filterDiv.querySelector(".select-selected").innerText;
    if (selectId === filterField)
    {viewItemArr = switchFilter2(selectId, viewItemArr, value);}

    else {viewItemArr = switchFilter2(selectId, viewItemArr, currentSelectValue); };
  });
 

  viewItemArr.forEach((item) => {
    item.classList.remove("hidden")
  });
}

function switchFilter2(filterField, viewItemArr, value) {
  switch (filterField) {
    case "filter-ratios":
      if (value === "All Ratios" || value === "Ratios") {
        viewItemArr.forEach((item) => {
          item.querySelectorAll(".view-item__ratios .ratio-card").forEach(
            (ratioCard) => {
              ratioCard.classList.remove("ratio-card--alert")
            }
          );
        });
        break;
      };
      //get all item that support the selected ratio
      viewItemArr = viewItemArr.filter((item) => {
        let listRatioCard = item.querySelectorAll(".view-item__ratios .ratio-card");
        let flag = false;
        Array.from(listRatioCard).forEach((ratioCard) => {
          ratioCard.classList.remove("ratio-card--alert")
            if (ratioCard.innerText.trim() === value)
              {ratioCard.classList.add("ratio-card--alert"); flag = true;}
        })
        return flag;
      });
      // console.log('after filter ratios ',viewItemArr);

      break;
      case "filter-subject":
        if (value === "All Subjects" || value === "Home") break;
        //get all item that support the selected subject
        viewItemArr = viewItemArr.filter((item) => {
        let subject = item.querySelector(".view-item__subject p")?.innerHTML;
        return subject === value;
      });
      // console.log('after filter subjects',viewItemArr);
      break;
    default:
      break;
  }
  return viewItemArr;
}

var navLinks = document.querySelectorAll(".nav-link");
navLinks.forEach((navLink) => {
  navLink.addEventListener("click",function(){
    navLinks.forEach((navLink) => {navLink.classList.remove("nav-link--active");});
    navLink.classList.add("nav-link--active");
    myFilter2(navLink.getAttribute("data-view"),'filter-subject');
  });
})