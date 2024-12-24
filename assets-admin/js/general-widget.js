"use strict";

// order chart
var options2 = {
  series: [{
    name: 'Daily',
    data: [2.15, 3, 1.5, 2, 2.4, 3, 2.4,
      2.8, 1.5, 1.7, 3, 2.50, 3, 2, 2.15, 3, 1.10
    ] 
  },
  {
    name: 'Weekly',
    data: [-2.15, -3, -1.5, -2, -2.4, -3, -2.4,
    -2.8, -1.5, -1.7, -3, -2.50, -3, -2, -2.15, -3, -1.10
    ]
  },
  {
    name: 'Monthly',
    data: [-2.25, -2.35, -2.45, -2.55, -2.65, -2.75, -2.85,
    -2.95, -3.00, -3.10, -3.20, -3.25, -3.10, -3.00, -2.95, -2.85, -2.75
    ]
  },
  {
    name: 'Yearly',
    data: [2.25, 2.35, 2.45, 2.55, 2.65, 2.75, 2.85,
    2.95, 3.00, 3.10, 3.20, 3.25, 3.10, 3.00, 2.95, 2.85, 2.75
    ]
  }
  ],
  chart: {
    type: 'bar',
    width: 180,
    height: 120,
    stacked: true,
    toolbar: {
      show: false
    },
  },
  plotOptions: {
    bar: {
      vertical: true,
      columnWidth: '40%',
      barHeight: '80%',
      startingShape: 'rounded',
      endingShape: 'rounded'
    },
  },
  colors: [RihoAdminConfig.primary , RihoAdminConfig.primary , "#F2F3F7", "#F2F3F7"],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: 0,
  },
  legend: {
    show: false,
  },
  grid: {
    xaxis: {
        offsetX: -2,
      lines: {
        show: false
      }
    },
    yaxis: {
      lines: {
        show: false
      }
    },
  },
  yaxis: {
    min: -5,
    max: 5,
    show: false,
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    
  },
  tooltip: {
    shared: false,
    x: {
          show: false,
      },
      y: {
          show: false,
      },
      z: {
          show: false,
      },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug',
      'Sep', 'Oct', 'Nov', 'Dec'
    ],
    offsetX: 0,
    offsetY: 0,
    labels: {
      offsetX: 0,
    offsetY: 0,
      show: false
    },
    axisBorder: {
        offsetX: 0,
    offsetY: 0,
      show: false
    },
    axisTicks: {
        offsetX: 0,
    offsetY: 0,
      show: false
    }

  },
  responsive: [{
          breakpoint: 1760,
          options: {
            chart: {
              width: 160,
            }
          },
        },
        {
          breakpoint: 1601,
          options: {
            chart: {
              height: 110,
            }
          },
        },
        {
          breakpoint: 1560,
          options: {
            chart: {
              width: 140,
            }
          },
        },
        {
          breakpoint: 1460,
          options: {
            chart: {
              width: 120,
            }
          },
        },
        {
          breakpoint: 1400,
          options: {
            chart: {
              width: 150,
            }
          },
        },
        {
          breakpoint: 1110,
          options: {
            chart: {
              width: 200,
            }
          },
        },
        {
          breakpoint: 700,
          options: {
            chart: {
              width: 150,
            }
          },
        },
        {
          breakpoint: 576,
          options: {
            chart: {
              width: 220,
            }
          },
        },
        {
          breakpoint: 420,
          options: {
            chart: {
              width: 150,
            }
          },
        },
      ]
};

// profit chart

  // radial chart js
function radialCommonOption(data) {
  return {
      series: data.radialYseries,
      chart: {
        height: 130,
        type: 'radialBar',
        dropShadow: {
            enabled: true,
            top: 3,
            left: 0,
            blur: 10,
            color: data.dropshadowColor,
            opacity: 0.35
        }
    },
    plotOptions: {
        radialBar: {
            hollow: {
                size: '60%',
            },
            track: {
                strokeWidth: '60%',
                opacity: 1,
                margin: 5,
            },
            dataLabels: {
                showOn: "always",
                value: {
                    color: "var(--body-font-color)",
                    fontSize: "14px",
                    show: true,
                    offsetY: -10,
                }
            }
        },
    },
    colors: data.color,
    stroke: {
        lineCap: "round",
    },
    responsive: [
      {
        breakpoint: 1500,
        options:{
            chart: {
              height: 130,
            }
        }
      },
    ]
  }
}

// radial 4 
const radial4 = {
  color: ["#FF3364"],
  dropshadowColor:"#FF3364",
  radialYseries: [80],
};

const radialchart4 = document.querySelector('#radial-youtube');
if (radialchart4) {
  var radialprogessChart4 = new ApexCharts(radialchart4, radialCommonOption(radial4));
  radialprogessChart4.render();
}

// radial 5 
const radial5 = {
  color: ["var(--theme-deafult)"],
  dropshadowColor:"var(--theme-deafult)",
  radialYseries: [70],
};

const radialchart5 = document.querySelector('#radial-chart');
if (radialchart5) {
  var radialprogessChart5 = new ApexCharts(radialchart5, radialCommonOption(radial5));
  radialprogessChart5.render();
}

// radial 6 
const radial6 = {
  color: ["var(--theme-secondary)"],
  dropshadowColor:"var(--theme-secondary)",
  radialYseries: [60],
};

const radialchart6 = document.querySelector('#radial-chart1');
if (radialchart6) {
  var radialprogessChart6 = new ApexCharts(radialchart6, radialCommonOption(radial6));
  radialprogessChart6.render();
}

// bitcoin widget charts
function widgetCommonOption(data) {
  return {
    series: [{
        data: data.widgetYseries
    }],
    chart: {
        width: 120,
        height: 120,
        type: 'line',
        toolbar: {
            show: false
        },
        offsetY: 10,
        dropShadow: {
            enabled: true,
            enabledOnSeries: undefined,
            top: 6,
            left: 0,
            blur: 6,
            color: data.dropshadowColor,
            opacity: 0.3
        }
},
grid: {
    show: false
},
colors: data.color,
stroke: {
    width: 2,
    curve: 'smooth'
},
labels: data.label,
markers: {
    size: 0
},
xaxis: {
    // type: 'datetime',
    axisBorder: {
        show: false
    },
    axisTicks: {
        show: false
    },
    labels: {
        show: false
    },
    tooltip: {
        enabled: false
    }
},
yaxis: {
    axisBorder: {
        show: false
    },
    axisTicks: {
        show: false
    },
    labels: {
        show: false
    }
},
legend: {
    show: false
},
tooltip: {
     marker: {
          show: false,
      },
    x: {
          show: false,
      },
      y: {
          show: false,
          labels: {
            show: false
          }
      },
    },
responsive: [
  {
    breakpoint: 1790,
    options:{
        chart: {
          width: 100,
          height: 100,
        }
    }
  },
  {
    breakpoint: 1661,
    options:{
        chart: {
          width: "100%",
          height: 100,
        }
    }
  },
]
}
}


const widget1 = {
  color: ["#FFA941"],
  dropshadowColor:"#FFA941",
  label: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul',
    'aug', 'sep', 'oct', 'nov'],
  widgetYseries: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
};

const widgetchart1 = document.querySelector('#currency-chart');
if (widgetchart1) {
  var bitcoinChart1 = new ApexCharts(widgetchart1, widgetCommonOption(widget1));
  bitcoinChart1.render();
}

// widget 2
const widget2 = {
  color: ["var(--theme-deafult)"],
  dropshadowColor:"var(--theme-deafult)",
  label: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul',
    'aug', 'sep'],
  widgetYseries: [30, 25, 30, 25, 64, 40, 59, 52, 64],
};

const widgetchart2 = document.querySelector('#currency-chart2');
if (widgetchart2) {
  var bitcoinChart2 = new ApexCharts(widgetchart2, widgetCommonOption(widget2));
  bitcoinChart2.render();
}


// Total-Order 
var options = {
    series: [{
    name: 'sale-1',
    data: [16, 28, 45, 43, 32, 44, 35 ,30]
  }, {
    name: 'sale-2',
    data: [22, 32, 42, 20, 35, 42, 25 ,45]
  }],
  fill: {
    gradient:{
        opacityFrom: 0.5,
        opacityTo: 0,
        shadeIntensity: 0.2,
    },
  }, 
    colors:['#006666', '#006666'],
    chart: {
    height: 145,
    type: 'area',
    offsetY: -17,
    toolbar: {
        show: false,
    },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'smooth',
    width: 1,
    dashArray: [0, 4]
  },
  xaxis: {
    show: false,
    labels:{
        show: false,
    },
    lines: { 
        show: false, 
    } 
  },
  grid:{
    show: false,
  },
  yaxis:{
    show: false,
    lines: { 
        show: false,
    },
  },
  legend:{
    show: false, 
  },
  tooltip: { 
    x: {
      format: 'dd/MM/yy HH:mm'
    },
  },

};
var totalOrderWidget = new ApexCharts(document.querySelector("#totalOrderWidget"), options);
totalOrderWidget.render();

/*=======/ sales-widgets chart /=======*/
var options = {
  series: [{
  name: 'Revenue', 
  data: [1000, 3900, 2500, 7400, 5800, 8000, 4200]
}, {
  name: 'Orders',
  data: [3800, 4300, 3400, 3300, 3000, 1800, 5900]
}],
  chart: { 
  type: 'area'
},
colors: ['#006666','#FFAE1A'],
chart: {
  height: 350,
  type: 'area',
  toolbar: {
    tools: {
      zoom: false,
      zoomin: false, 
      zoomout: false, 
      reset: false,
      pan: false,
      download: false,  
    },
  },
  dropShadow: {
    enabled: false,
    enabledOnSeries: undefined,
    top: 2,
    left: 1,
    blur: 2, 
    color: ['rgba($primary-color,0.6)', 'rgba($warning-color,0.6)'],
  },
},
legend: {
  show: false,
},
dataLabels: {
  enabled: false 
},
stroke: {
  curve: 'smooth',
  width: 2,
},
fill: {
  gradient:{
      opacityFrom: 0.5,
      opacityTo: 0,
      shadeIntensity: 0.2,
  },
},
grid: {
  strokeDashArray: 5,
},
yaxis:{
  labels: {
      style: {
          colors:['var(--body-font-color)'],
      }
  },
  dataLabels:{
      value: {
          show: true,
          formatter: function (val) {
            return val + 'k';
          }
      }
  }
},
xaxis: {
  categories: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July"],
      labels: { 
          style: {
              colors: ['var(--body-font-color)',['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'] ]  ,
          }
      },
},
tooltip: {
  x:{
    format: 'dd/MM/YYYY',
    show: 'true',
  },
  custom: function ({
      series,
      seriesIndex,
      dataPointIndex,
    }) {
      return '<div class="px-4 py-1 position-relative">' + '<span class="fs-2">' + 'K' + series[seriesIndex][dataPointIndex] + '</span>' + '<br>' + '<span class="align-middle text-content">' + 'Orders' + '</span>' + '</div>';
    },
},
};
var saleschart = new ApexCharts(document.querySelector("#saleschart"), options);
saleschart.render();
 
// Total-Revenue-chart

var options = {
  series: [{
  name: 'Net Profit',
  data: [80, 45, 70, 100, 87, 90, 80, 87, 85 ,100 ,100 ,75]
  },{ 
    name: 'Revenue',
    data: [40, 55, 35, 50, 61, 45, 50, 20, 50 , 85 ,50, 100]
  },],
    colors:['#006666', '#E6E9EB'],
    chart: {
    type: 'bar', 
    height: 160,
    offsetY: -20, 
    zoom: {
        enabled: false,
    },
    toolbar: {
        show: false,
    } 
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '77%',
      endingShape: 'rounded',
      borderRadius: 1, 
    },
  },
  grid: {
    show: false,
      padding: {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0
  },

  margin: {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0
  },
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ['transparent']
  },
  legend:{
    show: false, 
  },
  xaxis: {
    show: false,
    labels:{
        show: false,
    },
    lines: {
        show: false,
    },
    axisTicks:{
        show: false,
    },
  },
  yaxis: {
    show: false,
    lines: { 
        show: false,
    }
  },
  fill: {
    opacity: 1
  },
};

var revenueWidget= new ApexCharts(document.querySelector("#revenueWidget"), options);
revenueWidget.render();

  //  visitsCharts
  
  var options = {
    series: [{
    name: 'Chrome',
    data: [44, 55, 41, 37, 22, 43, 21]
  }, {
    name: 'Firefox',
    data: [53, 32, 33, 52, 13, 43, 32]
  }, { 
    name: 'Firefox',
    data: [12, 17, 11, 9, 15, 11, 20]
  }],
    colors:['var(--theme-deafult)' ,'#80B3B3' ,'#CCE0E0'],
    chart: { 
    type: 'bar',
    height: 325,
    stacked: true, 
    toolbar: {
      show: false,
      tools: {
        download: false,
      }
    }, 
    zoom: {
      enabled: true,
    } 
  },
    responsive: [{
      breakpoint: 480,
      options: {
        legend: {
          position: 'bottom',
          offsetY: 2,
        }
      } 
    }], 
    plotOptions: {
      bar: {
        horizontal: true,
        barHeight: '28%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    xaxis: {
      categories: ['Mon', 'Tue', 'Wed', 'Thu','Fri', 'Sat' ,'Sun'
      ],
      labels:{
        show: false,
      },
      axisTicks:{
        show: false,
      },
    },
    legend: {
      show: false,
    },
    fill: { 
      opacity: 1 
    }, 
    grid: {
      show: false, 
    }
  }; 
  var  visitswidgetCharts = new ApexCharts(document.querySelector("#visitswidgetCharts"), options);
   visitswidgetCharts.render();
  