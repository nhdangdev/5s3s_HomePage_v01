let isInsidePanel = false;

// Show Notification
function showNotificationPanel() {
  const notificationPanel = document.getElementById("notification-panel");
  notificationPanel.classList.remove("hidden");
}

// Hide Notification
function hideNotificationPanel() {
  const notificationPanel = document.getElementById("notification-panel");
  if (!isInsidePanel) {
    notificationPanel.classList.add("hidden");
  }
}

// Close Notification Panel
function closeNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  notificationPanel.classList.add('hidden');
}

// Move Mouse to Notification Panel
document.getElementById('notification-panel').addEventListener('mouseenter', () => {
  isInsidePanel = true;
});

document.getElementById('notification-panel').addEventListener('mouseleave', () => {
  isInsidePanel = false;
  hideNotificationPanel();
});

document
  .getElementById("notification-panel")
  .addEventListener("mouseenter", () => {
    isInsidePanel = true;
  });

document
  .getElementById("notification-panel")
  .addEventListener("mouseleave", () => {
    isInsidePanel = false;
    hideNotificationPanel();
  });

// Toast function
function toast({
  title = "",
  message = "",
  type = "error",
  duration = 3000
}) {
  const main = document.getElementById("toast");
  if (main) {
    const toast = document.createElement("div");

    // Auto remove toast
    const autoRemoveId = setTimeout(function () {
      main.removeChild(toast);
    }, duration + 1000);

    //Remove toast when clicked
    toast.onclick = (e) => {
      if (e.target.closest('.toast__close')) {
        main.removeChild(toast);
        clearTimeout(autoRemoveId);
      }
    };

    const icons = {
      // success: 'bg-[#47d864]',
      // error: 'bg-[#ff623d]', 
      success: 'text-green-500',
      error: 'bg-red-500',
    };

    const icon = icons[type];
    const delay = (duration / 1000).toFixed(2);

    toast.classList.add("toast", `toast--${type}`);
    toast.style.animation = `slideInLeft ease 0.3s, fadeOut linear 1s ${delay}s forwards`
    toast.innerHTML = `
    <div class="toast__icon">
      <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="w-6 h-6 ${icon} rounded-full text-black"
    >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
      
      />
    </svg>
  </div>
    <div class="toast__grow">
      <h3 class="toast__title title-1-text-bold">${title}</h3>
      <p class="toast__msg">${message}</p>
    </div>
    <div class="toast__close px-4">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6 text-xl text-gray-500"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18 18 6M6 6l12 12"
        />
      </svg>
    </div>`;
    main.appendChild(toast);
  }
}

function showSuccessToast() {
  toast({
    title: "Success",
    message: "Order successfully",
    type: "success",
    duration: 50000,
  });

  // Change button Order to Payment and update quantity 
  const orderButton = document.getElementById('order-button');
  orderButton.textContent = 'Payment has been successful';
  orderButton.style.backgroundColor = 'green';
  orderButton.style.color = 'white';

  // const productCount = document.querySelectorAll('.delete-button').length;
  // document.getElementById('product-count').textContent = productCount;

  // const paymentText = document.getElementById('payment-text');
  // paymentText.textContent = 'Payment';
  // paymentText.classList.remove('not-implemented-text');

}
function showErrorToast() {
  toast({
    title: "Error",
    message: "Opps!!! You have canceled your order",
    type: "error",
    duration: 5000,
  });
}
// Show/ hide Sidebar
function openNav() {
  document.getElementById("openNav").style.width = "250px";
  document.getElementById("openNav_main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("closeNav").style.width = "0";
  document.getElementById("openNav_main").style.marginLeft = "0";
}

// Timeline
// Bước 1: Lấy dữ liệu từ localStorage (nếu có)
let comments = [];
if (localStorage.getItem('comments')) {
  comments = JSON.parse(localStorage.getItem('comments'));
}

// Bước 2: Hiển thị dữ liệu đã lưu trong DOM
const timeline = document.getElementById('timeline');
comments.forEach(comment => {
  const timelineItem = createTimelineItem(comment);
  timeline.appendChild(timelineItem);
});

// Bước 3: Lắng nghe sự kiện khi có bình luận
const commentInput = document.getElementById('comment-input');
const submitButton = document.getElementById('submit-button');

submitButton.addEventListener('click', function (event) {
  event.preventDefault();

  const comment = commentInput.value;
  comments.push(comment);

  const timelineItem = createTimelineItem(comment);
  timeline.appendChild(timelineItem);

  // Lưu dữ liệu vào localStorage
  localStorage.setItem('comments', JSON.stringify(comments));

  commentInput.value = '';
});

// Bước 4: Tạo nút xóa cho mỗi mục trong timeline
function createTimelineItem(comment) {
  const timelineItem = document.createElement('div');
  timelineItem.classList.add('flex', 'items-center', 'w-full', 'my-6', '-ml-1.5');

  const icon = document.createElement('div');
  icon.classList.add('w-1/12', 'z-10');
  const iconDot = document.createElement('div');
  iconDot.classList.add('w-3.5', 'h-3.5', 'bg-blue-600', 'rounded-full');
  icon.appendChild(iconDot);

  const content = document.createElement('div');
  content.classList.add('w-11/12');
  const title = document.createElement('p');
  title.classList.add('text-sm');
  title.textContent = comment;

  const time = document.createElement('p');
  time.classList.add('text-xs', 'text-gray-500');
  time.textContent = getTimeAgo(new Date());
  content.appendChild(title);
  content.appendChild(time);

  const deleteButton = document.createElement('button');
  deleteButton.classList.add('text-xs', 'text-red-500');
  deleteButton.textContent = 'Delete';
  deleteButton.addEventListener('click', function () {
    timeline.removeChild(timelineItem);
    comments = comments.filter(item => item !== comment);
    localStorage.setItem('comments', JSON.stringify(comments));

    // Ẩn biểu tượng dấu chấm xanh
    iconDot.style.display = 'none';
  });

  timelineItem.appendChild(icon);
  timelineItem.appendChild(content);
  timelineItem.appendChild(deleteButton);

  return timelineItem;
}
// Hàm tính toán khoảng thời gian
function getTimeAgo(timestamp) {
  const now = new Date();
  const diff = Math.round((now - timestamp) / 1000); // Đổi thành giây

  if (diff < 60) {
    return diff + ' seconds ago';
  } else if (diff < 3600) {
    const minutes = Math.floor(diff / 60);
    return minutes + ' minutes ago';
  } else if (diff < 86400) {
    const hours = Math.floor(diff / 3600);
    return hours + ' hours ago';
  } else {
    const days = Math.floor(diff / 86400);
    return days + ' days ago';
  }
}

// Xóa sản phẩm và cập nhật số lượng sản phẩm
function deleteProduct(button) {
  const productContainer = button.parentNode;
  productContainer.remove();

  const remainingProducts = document.querySelectorAll('#product-container > div');
  const defaultImage = document.getElementById('default-image');

  if (remainingProducts.length === 0) {
    // Nếu không còn sản phẩm, ẩn các sản phẩm còn lại và hiển thị hình ảnh mặc định
    defaultImage.classList.remove('hidden');
  } else {
    // Nếu còn sản phẩm, ẩn hình ảnh mặc định và hiển thị các sản phẩm còn lại
    defaultImage.classList.add('hidden');
  }
}

// Render danh sách sản phẩm
function renderProductList(products) {
  const productListContainer = document.getElementById('product-list');
  productListContainer.innerHTML = '';

  if (products.length === 0) {
    // Nếu không có sản phẩm, hiển thị hình ảnh mặc định
    const defaultImage = document.getElementById('default-image');
    defaultImage.classList.remove('hidden');
  } else {
    // Nếu có sản phẩm, tạo các phần tử HTML tương ứng
    const defaultImage = document.getElementById('default-image');
    defaultImage.classList.add('hidden');

    products.forEach((product) => {
      const totalPrice = parseFloat(product.price) * parseInt(product.quantity);

      const productElement = `
        <div class="flex flex-col md:flex-row gap-3 justify-between items-start border border-gray-300 p-4">
          <div class="flex flex-row gap-6 items-center">
            <div class="w-28 h-28">
              <img class="w-full h-full" src="${product.image}" />
            </div>
            <div class="flex flex-col">
              <p class="text-lg text-blue-600 font-semibold">${product.name}</p>
            </div>
          </div>
          <div class="self-center text-center">
            <p class="text-gray-600 title-1-text">
              ${product.price}
              <span class="ml-4">$</span>
              <span class="ml-4">x</span>
              <span class="ml-4">${product.quantity}</span>
            </p>
          </div>
          <p class="self-center lg:mr-2 title-1-text">${product.totalPrice} $</p>
          <button class="self-center text-black hover:opacity-80 delete-button text-sm" onclick="deleteProduct(this)">
            Delete
          </button>
        </div>
      `;
      productListContainer.insertAdjacentHTML('beforeend', productElement);
    });
  }
}

const apiData = [
  {
    image: '../asset/img/food/hamburger.jpg',
    name: 'Hamburger with Meat',
    price: '50.00',
    quantity: '1',
    totalPrice: '50',
  },
  {
    image: '../asset/img/food/hamburger.png',
    name: 'Hamburger with Meat',
    price: '60.00',
    quantity: '2',
    totalPrice: '50',
  },
];

// Gọi hàm renderProductList với dữ liệu từ API
renderProductList(apiData);