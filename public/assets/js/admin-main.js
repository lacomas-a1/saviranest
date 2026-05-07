(function () {
    // Sidebar & logout
    const menuBtn = document.getElementById('menuToggleBtn');
    const sidebar = document.getElementById('adminSidebar');
    const overlay = document.getElementById('sidebarOverlay');
    function openSidebar() { sidebar.classList.add('open'); overlay.classList.add('show'); document.body.style.overflow = 'hidden'; }
    function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('show'); document.body.style.overflow = ''; }
    if (menuBtn) menuBtn.addEventListener('click', openSidebar);
    if (overlay) overlay.addEventListener('click', closeSidebar);
    window.addEventListener('resize', () => { if (window.innerWidth > 992 && sidebar.classList.contains('open')) closeSidebar(); });
    // document.getElementById('logoutBtn')?.addEventListener('click', () => alert('Logout demo (admin session)'));

    // initial filter
    filterTableRows();
})();

const ctx = document.getElementById('bookingChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Bookings',
            data: [28, 34, 42, 48, 62, 71],
            backgroundColor: '#F9A826',
            borderRadius: 12,
            barPercentage: 0.6,
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        plugins: { legend: { position: 'top' } }
    }
});

// const menuBtn = document.getElementById('menuToggleBtn');
// const sidebar = document.getElementById('adminSidebar');
// const overlay = document.getElementById('sidebarOverlay');

// function openSidebar() { sidebar.classList.add('open'); overlay.classList.add('show'); document.body.style.overflow = 'hidden'; }
// function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('show'); document.body.style.overflow = ''; }
// menuBtn.addEventListener('click', openSidebar);
// overlay.addEventListener('click', closeSidebar);
// window.addEventListener('resize', function () { if (window.innerWidth > 992 && sidebar.classList.contains('open')) closeSidebar(); });

// Logout button demo
// document.getElementById('logoutBtn').addEventListener('click', function () {
//     alert('Logout demo: redirect to login page');
    // window.location.href = 'login.html';
// });

// Reports
// Mock data for bookings and transactions
let allBookings = [
    { id: 1, guestName: "James K.", property: "Watamu Beach Resort", amount: 42500, status: "confirmed", date: "2025-06-10" },
    { id: 2, guestName: "Sarah M.", property: "Mara Serena Lodge", amount: 66000, status: "completed", date: "2025-05-20" },
    { id: 3, guestName: "David O.", property: "Lamu Swahili House", amount: 28500, status: "pending", date: "2025-07-01" },
    { id: 4, guestName: "Linda W.", property: "Diani Reef Resort", amount: 36000, status: "confirmed", date: "2025-06-25" },
    { id: 5, guestName: "Michael K.", property: "The Sands at Nomad", amount: 28000, status: "completed", date: "2025-06-18" },
    { id: 6, guestName: "Alice N.", property: "Watamu Beach Resort", amount: 42500, status: "completed", date: "2025-07-12" },
    { id: 7, guestName: "Brian O.", property: "Masai Mara Sopa Lodge", amount: 54000, status: "completed", date: "2025-08-05" },
    { id: 8, guestName: "Cynthia W.", property: "Diani Reef Resort", amount: 36000, status: "confirmed", date: "2025-08-20" },
    { id: 9, guestName: "Daniel K.", property: "Watamu Beach Resort", amount: 42500, status: "completed", date: "2025-09-10" },
    { id: 10, guestName: "Eunice M.", property: "Mara Serena Lodge", amount: 66000, status: "completed", date: "2025-10-05" }
];

let allTransactions = [
    { id: 1, bookingRef: "BKG-001", amount: 42500, status: "completed", date: "2025-06-10" },
    { id: 2, bookingRef: "BKG-002", amount: 66000, status: "completed", date: "2025-05-20" },
    { id: 3, bookingRef: "BKG-003", amount: 28500, status: "pending", date: "2025-07-01" },
    { id: 4, bookingRef: "BKG-004", amount: 36000, status: "completed", date: "2025-06-25" },
    { id: 5, bookingRef: "BKG-005", amount: 28000, status: "failed", date: "2025-06-18" },
    { id: 6, bookingRef: "BKG-006", amount: 42500, status: "completed", date: "2025-07-12" },
    { id: 7, bookingRef: "BKG-007", amount: 54000, status: "completed", date: "2025-08-05" },
    { id: 8, bookingRef: "BKG-008", amount: 36000, status: "completed", date: "2025-08-20" },
    { id: 9, bookingRef: "BKG-009", amount: 42500, status: "completed", date: "2025-09-10" },
    { id: 10, bookingRef: "BKG-010", amount: 66000, status: "completed", date: "2025-10-05" }
];

let bookingsChart, revenueChart;

function filterDataByDate(startDateStr, endDateStr) {
    const start = new Date(startDateStr);
    const end = new Date(endDateStr);
    end.setHours(23, 59, 59, 999);
    const filteredBookings = allBookings.filter(b => {
        const bDate = new Date(b.date);
        return bDate >= start && bDate <= end;
    });
    const filteredTransactions = allTransactions.filter(t => {
        const tDate = new Date(t.date);
        return tDate >= start && tDate <= end;
    });
    return { filteredBookings, filteredTransactions };
}

function updateReports() {
    const startDate = document.getElementById('startDate').value;
    const endDate = document.getElementById('endDate').value;
    const { filteredBookings, filteredTransactions } = filterDataByDate(startDate, endDate);

    // Stats
    const totalBookings = filteredBookings.length;
    const totalRevenue = filteredBookings.reduce((sum, b) => sum + b.amount, 0);
    const avgBookingValue = totalBookings > 0 ? (totalRevenue / totalBookings).toFixed(0) : 0;
    const completedPayments = filteredTransactions.filter(t => t.status === 'completed').length;

    document.getElementById('totalBookings').innerText = totalBookings;
    document.getElementById('totalRevenue').innerText = totalRevenue.toLocaleString();
    document.getElementById('avgBookingValue').innerText = `KES ${parseInt(avgBookingValue).toLocaleString()}`;
    document.getElementById('completedPayments').innerText = completedPayments;

    // Monthly aggregation (for charts)
    const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
    const monthlyBookings = new Array(12).fill(0);
    const monthlyRevenue = new Array(12).fill(0);

    filteredBookings.forEach(b => {
        const month = new Date(b.date).getMonth();
        monthlyBookings[month]++;
        monthlyRevenue[month] += b.amount;
    });

    // Update charts
    if (bookingsChart) bookingsChart.destroy();
    if (revenueChart) revenueChart.destroy();

    const ctxBookings = document.getElementById('bookingsChart').getContext('2d');
    const ctxRevenue = document.getElementById('revenueChart').getContext('2d');

    bookingsChart = new Chart(ctxBookings, {
        type: 'bar',
        data: { labels: months, datasets: [{ label: 'Number of Bookings', data: monthlyBookings, backgroundColor: '#F9A826', borderRadius: 10 }] },
        options: { responsive: true, maintainAspectRatio: true, plugins: { legend: { position: 'top' } } }
    });

    revenueChart = new Chart(ctxRevenue, {
        type: 'line',
        data: { labels: months, datasets: [{ label: 'Revenue (KES)', data: monthlyRevenue, borderColor: '#1E88E5', backgroundColor: 'rgba(30,136,229,0.1)', fill: true, tension: 0.3 }] },
        options: { responsive: true, maintainAspectRatio: true, plugins: { tooltip: { callbacks: { label: (ctx) => `KES ${ctx.raw.toLocaleString()}` } } } }
    });

    // Top performing stays
    const stayStats = new Map();
    filteredBookings.forEach(b => {
        if (!stayStats.has(b.property)) stayStats.set(b.property, { bookings: 0, revenue: 0 });
        const stat = stayStats.get(b.property);
        stat.bookings++;
        stat.revenue += b.amount;
    });
    const sortedStays = Array.from(stayStats.entries()).sort((a, b) => b[1].revenue - a[1].revenue).slice(0, 5);
    const topStaysBody = document.getElementById('topStaysTable');
    topStaysBody.innerHTML = '';
    sortedStays.forEach(([name, stats]) => {
        const row = `<tr><td>${name}</td><td>${stats.bookings}</td><td>KES ${stats.revenue.toLocaleString()}</td></tr>`;
        topStaysBody.insertAdjacentHTML('beforeend', row);
    });
    if (sortedStays.length === 0) {
        topStaysBody.innerHTML = '<tr><td colspan="3" class="text-center">No data in selected range</td></tr>';
    }
}

// Apply filter button
document.getElementById('applyFilterBtn').addEventListener('click', updateReports);

// Sidebar & logout
// const menuBtn = document.getElementById('menuToggleBtn');
// const sidebar = document.getElementById('adminSidebar');
// const overlay = document.getElementById('sidebarOverlay');
// function openSidebar() { sidebar.classList.add('open'); overlay.classList.add('show'); document.body.style.overflow = 'hidden'; }
// function closeSidebar() { sidebar.classList.remove('open'); overlay.classList.remove('show'); document.body.style.overflow = ''; }
// menuBtn.addEventListener('click', openSidebar);
// overlay.addEventListener('click', closeSidebar);
// window.addEventListener('resize', () => { if (window.innerWidth > 992 && sidebar.classList.contains('open')) closeSidebar(); });
// document.getElementById('logoutBtn').addEventListener('click', () => alert('Logout demo'));

// Initial load
updateReports();