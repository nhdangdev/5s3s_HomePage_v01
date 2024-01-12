// Show/ hide Notification
let isInsidePanel = false;

function showNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  notificationPanel.classList.remove('hidden');
}

function hideNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  if (!isInsidePanel) {
    notificationPanel.classList.add('hidden');
  }
}

document.getElementById('notification-panel').addEventListener('mouseenter', () => {
  isInsidePanel = true;
});

document.getElementById('notification-panel').addEventListener('mouseleave', () => {
  isInsidePanel = false;
  hideNotificationPanel();
});

// Close Notification Panel

function showNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  notificationPanel.classList.remove('hidden');
}

function hideNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  if (!isInsidePanel) {
    notificationPanel.classList.add('hidden');
  }
}

function closeNotificationPanel() {
  const notificationPanel = document.getElementById('notification-panel');
  notificationPanel.classList.add('hidden');
}

document.getElementById('notification-panel').addEventListener('mouseenter', () => {
  isInsidePanel = true;
});

document.getElementById('notification-panel').addEventListener('mouseleave', () => {
  isInsidePanel = false;
  hideNotificationPanel();
});