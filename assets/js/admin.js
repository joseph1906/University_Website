// Sidebar Toggle Functions
let sidebarOpen = false;
const sidebar = document.querySelector(".sidebar");

function openSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}

// Close sidebar when clicking on a menu item on mobile
document.querySelectorAll(".sidebar-list-item").forEach(item => {
    item.addEventListener("click", () => {
        if (window.innerWidth < 768) {
            closeSidebar();
        }
    });
});

// Material Design 3 Color Palette
const mdColors = {
    primary: '#2962FF',
    secondary: '#625B71',
    tertiary: '#1565C0',
    success: '#28A745',
    error: '#D32F2F',
    warning: '#FF9800',
    light1: '#E8EAFF',
    light2: '#F8F7FF',
    light3: '#F3EEF9',
    dark: '#1C1B1F',
    textSecondary: '#49454E',
    textTertiary: '#79747E'
};

// Chart Theme Configuration
const chartTheme = {
    mode: 'light',
    palette: 'palette1',
    monochrome: {
        enabled: false
    }
};

// ApexCharts for Student Enrollment (Bar Chart)
var barChartOptions = {
    series: [{
        name: 'Enrollment',
        data: [120, 150, 180, 200, 250, 300, 350, 400, 450, 500, 550, 600]
    }],
    chart: {
        type: 'bar',
        height: 380,
        fontFamily: 'Roboto, sans-serif',
        sparkline: {
            enabled: false
        },
        toolbar: {
            show: true,
            tools: {
                download: true,
                selection: true,
                zoom: true,
                zoomin: true,
                zoomout: true,
                pan: false,
                reset: true
            }
        }
    },
    colors: [mdColors.primary],
    plotOptions: {
        bar: {
            borderRadius: 8,
            borderRadiusApplication: 'end',
            horizontal: false,
            columnWidth: '55%',
            dataLabels: {
                position: 'top'
            }
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        axisBorder: {
            show: true,
            color: '#E7E0EC'
        },
        axisTicks: {
            show: true,
            color: '#E7E0EC'
        },
        labels: {
            style: {
                colors: Array(12).fill(mdColors.textTertiary),
                fontSize: '13px',
                fontFamily: 'Roboto'
            }
        }
    },
    yaxis: {
        title: {
            text: 'Number of Students',
            style: {
                color: mdColors.textSecondary,
                fontSize: '14px',
                fontWeight: 500
            }
        },
        labels: {
            style: {
                colors: Array(10).fill(mdColors.textTertiary),
                fontSize: '12px'
            }
        }
    },
    fill: {
        opacity: 1,
        colors: [mdColors.primary]
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " students"
            }
        },
        theme: 'light',
        style: {
            fontSize: '12px',
            fontFamily: 'Roboto'
        }
    },
    grid: {
        show: true,
        borderColor: '#E7E0EC',
        strokeDashArray: 0,
        position: 'back',
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: true
            }
        }
    }
};

var chart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
chart.render();

// ApexCharts for Students by Department (Line Chart)
var barChartOptions2 = {
    series: [{
        name: 'Students Count',
        data: [20, 55, 60, 65, 70, 55, 70]
    }],
    chart: {
        type: 'area',
        height: 380,
        fontFamily: 'Roboto, sans-serif',
        toolbar: {
            show: true,
            tools: {
                download: true,
                selection: true,
                zoom: true,
                zoomin: true,
                zoomout: true,
                pan: false,
                reset: true
            }
        }
    },
    colors: [mdColors.tertiary],
    fill: {
        type: 'gradient',
        gradient: {
            shadeIntensity: 1,
            opacityFrom: 0.45,
            opacityTo: 0.05,
            stops: [20, 100, 100, 100]
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        curve: 'smooth',
        width: 3,
        colors: [mdColors.tertiary]
    },
    markers: {
        size: 6,
        colors: [mdColors.tertiary],
        strokeWidth: 2,
        strokeColors: '#fff',
        hover: {
            size: 8
        }
    },
    xaxis: {
        categories: ['Computer Science', 'Business', 'Engineering', 'Medicine', 'Law', 'Arts', 'Education'],
        axisBorder: {
            show: true,
            color: '#E7E0EC'
        },
        axisTicks: {
            show: true,
            color: '#E7E0EC'
        },
        labels: {
            style: {
                colors: Array(7).fill(mdColors.textTertiary),
                fontSize: '12px',
                fontFamily: 'Roboto'
            },
            trim: true
        }
    },
    yaxis: {
        title: {
            text: 'Number of Students',
            style: {
                color: mdColors.textSecondary,
                fontSize: '14px',
                fontWeight: 500
            }
        },
        labels: {
            style: {
                colors: Array(10).fill(mdColors.textTertiary),
                fontSize: '12px'
            }
        }
    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val + " students"
            }
        },
        theme: 'light',
        style: {
            fontSize: '12px',
            fontFamily: 'Roboto'
        }
    },
    grid: {
        show: true,
        borderColor: '#E7E0EC',
        strokeDashArray: 0,
        position: 'back',
        xaxis: {
            lines: {
                show: false
            }
        },
        yaxis: {
            lines: {
                show: true
            }
        }
    }
};

var chart2 = new ApexCharts(document.querySelector("#bar-chart-2"), barChartOptions2);
chart2.render();

// Make charts responsive on window resize
window.addEventListener('resize', () => {
    if (chart) chart.reflow();
    if (chart2) chart2.reflow();
});