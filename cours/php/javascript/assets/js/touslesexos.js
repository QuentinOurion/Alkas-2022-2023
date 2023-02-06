import ToDoList from "./class/ToDoList.js";
import CalculatriceB from "./class/CalculatriceB.js";
import Meteo from "./class/Meteo.js";

let elCalculatrice = document.querySelector('#calculatrice .card-body')

const calculatriceB = new CalculatriceB(elCalculatrice)
calculatriceB.init()
calculatriceB.show()

const toDoList = new ToDoList(document.querySelector('#toutdouxliste .card-body'))
toDoList.init()
toDoList.show()

const meteo = new Meteo(document.querySelector('#meteoAlkas .card-body'))
meteo.init()
// meteo.show()