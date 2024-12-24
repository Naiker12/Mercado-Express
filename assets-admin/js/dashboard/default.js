(function () {
    // profit chart

          var options = {
              series: [{
              name: 'Revenue', 
              data: [1000, 3900, 2500, 7400, 5800, 8000, 4200, 5800, 3100, 7100, 1000, 8200]
              }, {
                name: 'Orders',
                data: [3800, 4300, 3400, 3300, 3000, 1800, 5900, 5600, 4200, 6000, 3900, 8400]
              }],
                chart: { 
                type: 'area'
              },
              colors: [RihoAdminConfig.primary,'#FFAE1A'],
              chart: {
                height: 280,
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
              annotations :{
                yaxis: [
                  {
                    x: 5800,
                    // borderColor: '#00E396',                    
                    label: {
                      borderColor: '#00E396',
                      style: {
                        color: '#fff',
                        background: '#00E396'
                      }, 
                      // text: '-axis annotation on 8800'
                    }
                  }
                ]
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
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sep", "Oct", "Nov" ,"Dec"],
                    labels: {
                        style: {
                            colors: ['var(--body-font-color)',['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'],['var(--body-font-color)'] ]  ,
                        }
                    }, 
                    axisTicks: {
                      show: false
                    },
                    axisBorder: {
                      show: false  
                    },
                    tooltip: {
                      enabled: false,
                    },
              },
              responsive: [{
                  breakpoint: 480,
                  options: {
                      series: [{ 
                          name: 'Revenue', 
                          data: [1000, 3900, 2500, 7400, 5800, 8000, 4200]
                          }, {
                          name: 'Orders',
                          data: [3800, 4300, 3400, 3300, 3000, 1800, 5900]
                      }],
                  }
              }], 
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
                      return '<div class="px-4 py-1 position-relative ">' + '<span class="fs-3">' + 'K' + series[seriesIndex][dataPointIndex] + '</span>' + '<br>' + '<span class="align-middle text-content">' + 'Orders' + '</span>' + '</div>';
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
  }, {
    name: 'Revenue',
    data: [40, 55, 35, 50, 61, 45, 50, 20, 50 , 85 ,50, 100]
  },],
    colors:[RihoAdminConfig.primary, '#E6E9EB'],
    chart: { 
    type: 'bar',
    height: 120,
    width: 145,
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
    // categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
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
    responsive: [{
        breakpoint: 1599,
        options: {
            chart: {
                width: 140
            }, 
        }
    }],
  };

  var revenue= new ApexCharts(document.querySelector("#revenue"), options);
  revenue.render();

// Top Revenue Product chart

var options = {
    series: [60000, 10000, 90000, 80000],
    chart: { 
    height: 240,
    type: 'donut',
  }, 
  stroke: {
    width: 0,
  },  
  labels: ['Women Jeans','Women T-shirts' ,'Women Shoes' ,'Kurtas & Kurti'],
  colors: ['var(--theme-secondary)','#80b3b3','var(--theme-deafult)','#FFAE1A'],
  dataLabels: { 
    enabled: false,
  },
  responsive: [{
    breakpoint: 480,
    options: {
      chart: { 
        height : 280,
      },
    },
  }],
  legend: {
    show: false,
    offsetY: 0, 
  },
  plotOptions: {
    pie: {
      donut: {
        size: '80%',
        labels: {
          show: true,
           name: {
          show: true,
          color: '#dfsda',
          offsetY: 16
        },
        value: {
          show: true,
          color: undefined,
          offsetY: -25,
          formatter: function (val) {
            return val
          }
        },
          total: {
          show: true,
          label: 'Total',
          color: '#86909C',
          formatter: function (w) {
            return w.globals.seriesTotals.reduce((a, b) => {
              return a + b
            }, 0)
          }
        }
        }
      }
    }
  },
  };
  var revenueproduct = new ApexCharts(document.querySelector("#revenueproduct"), options);
  revenueproduct.render();
  // Total Order
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
    colors:[RihoAdminConfig.primary, RihoAdminConfig.primary],
    chart: {  
    height: 120,  
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
    responsive: [{
        breakpoint: 1499,
        options: {
            chart: {
                width: 140
            }, 
        }
    }],
  };

  var totalOrder = new ApexCharts(document.querySelector("#totalOrder"), options);
  totalOrder.render();

})();
