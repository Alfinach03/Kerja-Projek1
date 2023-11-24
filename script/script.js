// Toggle class active

const navbarnav = document.querySelector('.dropdown-menu');


// Saat sidebar klik
document.querySelector('#sidebar').onclick = () => {
    navbarnav.classList.toggle('active');
}

// diluar sidebar
const sdbar = document.querySelector('#sidebar');

document.addEventListener('click', function(e) {
    if(!sdbar.contains(e.target) && !navbarnav.contains(e.target)) {
        navbarnav.classList.remove('active');
    }
});

document.addEventListener('DOMContentLoaded', function() {
  // Get modal element
  const itemDetailModal1 = document.querySelector('#item-detail-modal1');

  // Get close icon element inside modal
  const closeIcon1 = document.querySelector('.close-icon1');

  // Get all buttons that open the modal
  const itemDetailButtons1 = document.querySelectorAll('.item-detail-button1');

  // Open modal when a button is clicked
  itemDetailButtons1.forEach((btn) => {
    btn.onclick = (e) => {
      itemDetailModal1.style.display = 'flex';
      e.preventDefault(); // Prevent default link behavior
    };
  });

  // Close modal when close icon is clicked
  if (closeIcon1) {
    closeIcon1.onclick = (e) => {
      itemDetailModal1.style.display = 'none';
      e.preventDefault(); // Prevent default link behavior
    };
  }

  // Close modal when clicking outside the modal
  window.onclick = (e) => {
    if (e.target === itemDetailModal1) {
      itemDetailModal1.style.display = 'none';
    }
  };
});



document.addEventListener('DOMContentLoaded', function() {
  // Get modal element
  const itemDetailModal = document.querySelector('#item-detail-modal2');

  // Get close icon element inside modal
  const closeIcon = document.querySelector('.close-icon2');

  // Get all buttons that open the modal
  const itemDetailButtons = document.querySelectorAll('.item-detail-button2');

  // Open modal when a button is clicked
  itemDetailButtons.forEach((btn) => {
    btn.onclick = (e) => {
      itemDetailModal.style.display = 'flex';
      e.preventDefault(); // Prevent default link behavior
    };
  });

  // Close modal when close icon is clicked
  if (closeIcon) {
    closeIcon.onclick = (e) => {
      itemDetailModal.style.display = 'none';
      e.preventDefault(); // Prevent default link behavior
    };
  }

  // Close modal when clicking outside the modal
  window.onclick = (e) => {
    if (e.target === itemDetailModal) {
      itemDetailModal.style.display = 'none';
    }
  };
});