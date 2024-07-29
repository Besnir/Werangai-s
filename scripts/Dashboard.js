let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}

//Copy and Share affiliate link

function copyLink() {
  const link = document.querySelector('.loweraffiliateLink').innerText;
  const linkbtnText = document.getElementById('linkbtn').innerHTML;
  navigator.clipboard.writeText(link).then(() => {
    linkbtnText = 'Copied'
      alert('Link copied to clipboard!');
  }).catch(err => {
      console.error('Error copying link: ', err);
  });
}

function shareLink() {
  const link = document.querySelector('.loweraffiliateLink').innerText;
  if (navigator.share) {
      navigator.share({
          title: 'Check out my referral link!',
          url: link
      }).then(() => {
          console.log('Thanks for sharing!');
      }).catch(err => {
          console.error('Error sharing link: ', err);
      });
  } else {
      alert('Sharing not supported on this browser.');
  }
}