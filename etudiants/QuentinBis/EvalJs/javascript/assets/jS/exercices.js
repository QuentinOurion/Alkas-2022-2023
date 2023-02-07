import Event from "./class/Event.js";
import ToDoList from "./class/ToDoList.js";
import Calculatrice from "./class/Calculatrice.js";
import Meteo from "./class/Meteo.js";
import RechercheUser from "./class/RechercheUser.js";


let event = new Event(document.querySelector('article'))
event.init()
event.affichageItem()


let toDoList = new ToDoList(document.querySelector("#blocToDolist"))
toDoList.init()
toDoList.show()


let calculatrice = new Calculatrice(document.querySelector('article'))
calculatrice.init()

let meteo = new Meteo(document.querySelector('section .meteo'))
meteo.init()
meteo.ajax()


let rechercheUser = new RechercheUser(document.querySelector('#test'))
rechercheUser.init()
rechercheUser.ajax()


















