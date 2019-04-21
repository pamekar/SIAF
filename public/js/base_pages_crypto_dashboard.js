/*
 *  Document   : base_pages_crypto_dashboard.js
 *  Author     : pixelcave
 */
var BasePagesCryptoDashboard=function(){var t=function(){Chart.defaults.global.defaultFontColor="#999",Chart.defaults.global.defaultFontFamily="Open Sans",Chart.defaults.global.defaultFontStyle="600",Chart.defaults.scale.gridLines.color="transparent",Chart.defaults.global.elements.point.radius=5,Chart.defaults.global.elements.point.hoverRadius=7,Chart.defaults.global.tooltips.titleFontFamily="Source Sans Pro",Chart.defaults.global.tooltips.bodyFontFamily="Open Sans",Chart.defaults.global.tooltips.cornerRadius=3,Chart.defaults.global.legend.labels.boxWidth=15,Chart.defaults.global.legend.display=!1;var t,a,o,r=jQuery(".js-chartjs2-bitcoin"),e=jQuery(".js-chartjs2-ethereum"),l=jQuery(".js-chartjs2-litecoin"),n=[];for(i=0;i<30;i++)n[i]=29===i?"1 day ago":30-i+" days ago";$chart2BitcoinData=[10500,10400,9500,8268,10218,8250,8707,9284,9718,9950,9879,10147,10883,11071,11332,11584,11878,13540,16501,16007,15142,14869,16762,17276,16808,16678,16771,12900,13100,14e3],$chart2EthereumData=[500,525,584,485,470,320,380,580,620,785,795,801,799,750,900,920,930,1300,1250,1150,1365,1258,980,870,860,925,999,1050,1090,1100],$chart2LitecoinData=[300,320,330,331,335,340,358,310,220,180,190,195,203,187,198,258,270,340,356,309,218,230,242,243,250,210,205,226,214,250],jQuery('a[href="#crypto-coins-btc"]',"ul#crypto-tabs").on("shown.bs.tab",function(a){t&&t.destroy(),t=new Chart(r,{type:"line",data:{labels:n,datasets:[{label:"Bitcoin Price",fill:!0,backgroundColor:"rgba(255,193,7,.25)",borderColor:"rgba(255,193,7,1)",pointBackgroundColor:"rgba(255,193,7,1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(255,193,7,1)",data:$chart2BitcoinData}]},options:{maintainAspectRatio:!1,scales:{yAxes:[{ticks:{suggestedMin:6e3,suggestedMax:2e4}}]},tooltips:{intersect:!1,callbacks:{label:function(t,a){return" $"+t.yLabel}}}}})}),jQuery('a[href="#crypto-coins-eth"]',"ul#crypto-tabs").on("shown.bs.tab",function(t){a&&a.destroy(),a=new Chart(e,{type:"line",data:{labels:n,datasets:[{label:"Ethereum Price",fill:!0,backgroundColor:"rgba(111,124,186, .25)",borderColor:"rgba(111,124,186, 1)",pointBackgroundColor:"rgba(111,124,186, 1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(111,124,186, 1)",data:$chart2EthereumData}]},options:{maintainAspectRatio:!1,scales:{yAxes:[{ticks:{suggestedMin:0,suggestedMax:1500}}]},tooltips:{intersect:!1,callbacks:{label:function(t,a){return" $"+t.yLabel}}}}})}),jQuery('a[href="#crypto-coins-ltc"]',"ul#crypto-tabs").on("shown.bs.tab",function(t){o&&o.destroy(),o=new Chart(l,{type:"line",data:{labels:n,datasets:[{label:"Litecoin Price",fill:!0,backgroundColor:"rgba(181,181,181,.25)",borderColor:"rgba(181,181,181,1)",pointBackgroundColor:"rgba(181,181,181,1)",pointBorderColor:"#fff",pointHoverBackgroundColor:"#fff",pointHoverBorderColor:"rgba(181,181,181,1)",data:$chart2LitecoinData}]},options:{maintainAspectRatio:!1,scales:{yAxes:[{ticks:{suggestedMin:0,suggestedMax:400}}]},tooltips:{intersect:!1,callbacks:{label:function(t,a){return" $"+t.yLabel}}}}})}),jQuery('a[href="#crypto-coins-btc"]',"ul#crypto-tabs").tab("show")};return{init:function(){t()}}}();jQuery(function(){BasePagesCryptoDashboard.init()});
