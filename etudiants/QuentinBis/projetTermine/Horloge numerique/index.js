setInterval(showTime, 1000);
function showTime(){
  let time = new Date()
  let heures = time.getHours()
  let minutes = time.getMinutes()
  let secondes = time.getSeconds()
  let amPm = "  AM"

  if(amPm > 12){
    heures += 12;
    amPm = "  PM"
  }

  if(amPm == 0){
  heures = 12
  amPm = "  AM"
 }

 heures = heures < 10 ? "0" + heures : heures;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    secondes = secondes < 10 ? "0" + secondes : secondes;
 
    let currentTime = heures + ":"
            + minutes + ":" + secondes + amPm;
 
    document.getElementById("clock")
            .innerHTML = currentTime;
}
showTime();


