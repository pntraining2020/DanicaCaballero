window.setInterval(ut, 1000);

function ut() {
  var d = new Date();
  document.getElementById("time").innerHTML = d.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'});;

}
function clockIn() {
    var d = new Date();
    document.getElementById("showTime").innerHTML = d.getHours() + ":" + d.getMinutes(navigator.language, {minute:'2-digit'});
  }
function clockOut(){
    document.getElementById("out").disabled = true;
}
// $(document).ready(function(){
//     $('#in').click(function){
//         var d = new Date();
//     document.getElementById("showTime").innerHTML = d.getHours() + ":" + d.getMinutes(navigator.language, {minute:'2-digit'});

//     }
// })