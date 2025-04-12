document.addEventListener('DOMContentLoaded', function() {
  // Sidebar Toggle
  const sidebarToggle = document.getElementById('sidebar-toggle');
  const sidebar = document.querySelector('.sidebar');
  
  sidebarToggle.addEventListener('click', function() {
    sidebar.classList.toggle('open');
  });

  // Submenu Toggle
  const submenuToggles = document.querySelectorAll('.submenu-toggle');
  
  submenuToggles.forEach(toggle => {
    toggle.addEventListener('click', function(e) {
      e.preventDefault();
      const parent = this.closest('.has-submenu');
      
      // Close all other open submenus
      document.querySelectorAll('.has-submenu.open').forEach(item => {
        if (item !== parent) {
          item.classList.remove('open');
        }
      });
      
      // Toggle current submenu
      parent.classList.toggle('open');
    });
  });

  // Tab Switching
  const tabs = document.querySelectorAll('.tab');
  const tabContents = document.querySelectorAll('.tab-content');
  
  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const tabId = this.getAttribute('data-tab');
      
      // Remove active class from all tabs and contents
      tabs.forEach(t => t.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));
      
      // Add active class to current tab and content
      this.classList.add('active');
      document.getElementById(tabId).classList.add('active');
    });
  });

  // Time Filter Buttons
  const timeFilters = document.querySelectorAll('.time-filters .btn');
  
  timeFilters.forEach(filter => {
    filter.addEventListener('click', function() {
      timeFilters.forEach(f => f.classList.remove('active'));
      this.classList.add('active');
      
      // Here you would typically update the chart data based on the selected time period
      // For this example, we'll just regenerate the chart with random data
      generateChart();
    });
  });

  // Initialize Chart
  generateChart();
  
  // Handle window resize for chart responsiveness
  window.addEventListener('resize', function() {
    if (window.visitorChart) {
      window.visitorChart.resize();
    }
  });
});

// Generate Chart with Random Data
function generateChart() {
  const ctx = document.getElementById('visitorChart').getContext('2d');
  
  // Destroy existing chart if it exists
  if (window.visitorChart) {
    window.visitorChart.destroy();
  }
  
  // Generate dates for June
  const dates = Array.from({ length: 30 }, (_, i) => {
    const date = new Date(2024, 5, i + 1); // June 2024
    return `Jun ${date.getDate()}`;
  });
  
  // Generate random data
  const generateData = (min, max) => {
    return Array.from({ length: 30 }, () => 
      Math.floor(Math.random() * (max - min + 1)) + min
    );
  };
  
  const blueData = generateData(50, 100);
  const greenData = generateData(20, 70);
  
  // Create gradient for blue dataset
  const blueGradient = ctx.createLinearGradient(0, 0, 0, 300);
  blueGradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)');
  blueGradient.addColorStop(1, 'rgba(59, 130, 246, 0.0)');
  
  // Create gradient for green dataset
  const greenGradient = ctx.createLinearGradient(0, 0, 0, 300);
  greenGradient.addColorStop(0, 'rgba(16, 185, 129, 0.5)');
  greenGradient.addColorStop(1, 'rgba(16, 185, 129, 0.0)');
  
  // Chart configuration
  window.visitorChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: dates,
      datasets: [
        {
          label: 'Visitors',
          data: blueData,
          borderColor: 'rgba(59, 130, 246, 1)',
          backgroundColor: blueGradient,
          fill: true,
          tension: 0.4,
          pointRadius: 0,
          pointHoverRadius: 5,
        },
        {
          label: 'Conversions',
          data: greenData,
          borderColor: 'rgba(16, 185, 129, 1)',
          backgroundColor: greenGradient,
          fill: true,
          tension: 0.4,
          pointRadius: 0,
          pointHoverRadius: 5,
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'top',
          labels: {
            color: 'rgb(156, 163, 175)',
          }
        },
        tooltip: {
          mode: 'index',
          intersect: false
        }
      },
      scales: {
        x: {
          grid: {
            display: false
          },
          ticks: {
            color: 'rgb(156, 163, 175)',
            maxRotation: 0,
            autoSkip: true,
            maxTicksLimit: 10
          }
        },
        y: {
          grid: {
            color: 'rgba(75, 85, 99, 0.2)'
          },
          ticks: {
            color: 'rgb(156, 163, 175)'
          },
          beginAtZero: true
        }
      },
      interaction: {
        mode: 'nearest',
        axis: 'x',
        intersect: false
      }
    }
  });
}

// Handle checkboxes in table
document.addEventListener('change', function(e) {
  if (e.target.matches('thead input[type="checkbox"]')) {
    const checked = e.target.checked;
    document.querySelectorAll('tbody input[type="checkbox"]').forEach(checkbox => {
      checkbox.checked = checked;
    });
  }
});

// Add row hover effect
const tableRows = document.querySelectorAll('.data-table tbody tr');
tableRows.forEach(row => {
  row.addEventListener('mouseenter', function() {
    this.style.backgroundColor = 'var(--accent)';
  });
  
  row.addEventListener('mouseleave', function() {
    this.style.backgroundColor = '';
  });
});