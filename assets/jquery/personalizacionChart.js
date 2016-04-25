var data = {
    labels: [],
    datasets: [
        {
            label: "Temperatura",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};

var data2 = {
    labels: [],
    datasets: [
        {
            label: "Viento",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};
var data3 = {
    labels: [],
    datasets: [
        {
            label: "Direccion Viento",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};
var data4 = {
    labels: [],
    datasets: [
        {
            label: "Presion",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};
var data5 = {
    labels: [],
    datasets: [
        {
            label: "Humedad",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};
var data6 = {
    labels: [],
    datasets: [
        {
            label: "Lluvia",
            fillColor: "rgba(220,220,220,0.5)",
            strokeColor: "black",
            pointColor: "black",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "black",
            data: []
        },
    ]
};
var ctx = $("#1").get(0).getContext("2d");
var chart1 = new Chart(ctx).Line(data,{
  responsive : true,
  //scaleOverride : true,
  //scaleSteps : 10,
  //scaleStepWidth : 4,
  //scaleStartValue : 0,
  pointDot : false
});
var ctx1 = $("#2").get(0).getContext("2d");
var chart2 = new Chart(ctx1).Line(data2,{
  responsive : true,
  //scaleOverride : true,
  //scaleSteps : 10,
  //scaleStepWidth : 10,
  //scaleStartValue : 0,
  pointDot : false
});
var ctx2 = $("#3").get(0).getContext("2d");
var chart3 = new Chart(ctx2).Line(data3, {
        responsive : true,
        scaleOverride : true,
        scaleSteps : 10,
        scaleStepWidth : 36,
        scaleStartValue : 0,
        pointDot : false
    });
var ctx3 = $("#4").get(0).getContext("2d");
var chart4 = new Chart(ctx3).Line(data4,{
  responsive : true,
  //scaleOverride : true,
  //scaleSteps : 12,
  //scaleStepWidth : 5,
  //scaleStartValue : 980,
  pointDot : false
});
var ctx4 = $("#5").get(0).getContext("2d");
var chart5 = new Chart(ctx4).Line(data5,{
  responsive : true,
  //scaleOverride : true,
  //scaleSteps : 10,
  //scaleStepWidth : 10,
  //scaleStartValue : 0,
  pointDot : false
});
var ctx5 = $("#6").get(0).getContext("2d");
var chart6 = new Chart(ctx5).Line(data6,{
  responsive : true,
  //scaleOverride : true,
  //scaleSteps : 10,
  //scaleStepWidth : 2,
  //scaleStartValue : 0,
  pointDot : false
});
