class ViewItem{
    constructor(name, thumbnail, title, ratios, subject, status, created){
        this.name = name;
        this.thumbnail = thumbnail;
        this.title = title;
        this.ratios = ratios;
        this.subject = subject;
        this.status = status;
        this.created = created;
    }

    buildViewItem(){
        const viewItem = document.createElement("div");
        viewItem.classList.add('view-item');
        const thumbnail = document.createElement("div");
        thumbnail.classList.add('view-item__thumbnail');
        const title = document.createElement("div");
        title.classList.add('view-item__title');
        const subject = document.createElement("div");
        subject.classList.add('view-item__subject');
        const created = document.createElement("div");
        created.classList.add('view-item__created');
        const status = document.createElement("div");
        status.classList.add('view-item__status');

    }
}

// import { html, render } from 'https://unpkg.com/lit-html?module';

// var listView = document.querySelector('.list-view')
// console.log(listView)

// const myTemplate = (name, thumbnail, title, subject, status, created) =>
//   html`
//   <div class="view-item">
//   <div class="view-item__thumbnail">
//     <img src="${thumbnail}" alt="thumbnail" />
//   </div>
//   <div class="view-item__name">
//     <p>${name} <span><i class="fa-solid fa-caret-down fa-lg"></i> </span></p>
//   </div>
//   <div class="view-item__title">
//     <span>Title: </span>
//     <p>${title}</p>
//   </div>
//   <div class="view-item__ratios">
//     <span>Ratios: </span>
//     <div class="ratio-card">4:3</div>
//     <div class="ratio-card">16:9</div>

//   </div>
//   <div class="view-item__subject">
//     <span>Subject: </span>
//     <p>${subject}</p>
//   </div>
//   <div class="view-item__status">
//     <span>Status: </span>
//     <p>${status}</p>s
//   </div>
//   <div class="view-item__created">
//     <span>Created created: </span>
//     <p>${created}</p>
//   </div>
// </div>
//   `;

// render(myTemplate('nail1','../asset/img/temp_nail_1_ratio_16_9.jpg', 'nail 1' ,'Nail salon','Ok','10/12/2023'), listView);