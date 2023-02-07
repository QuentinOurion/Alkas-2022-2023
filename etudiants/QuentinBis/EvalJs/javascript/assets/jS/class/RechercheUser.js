export default class RechercheUser {


    lienAjax = 'https://randomuser.me/api/?nat=fr&results=10'


    constructor(el) {
        this.el = el
    }


  init(){
      // this.input = document.getElementById('rechercheUser').value
  }


    ajax() {
        fetch(this.lienAjax).then((reponse) => {
            if (reponse.ok) {
                reponse.json().then((json) => {
                    this.show(json)
                    this.rechercheUser(json)
                })
            }
        })
    }

    show(json)
    {
for (let i = 0; i < json.results.length  ; i++){
        this.el.innerHTML+=`
<section class="rechercheUser">
    <div class="card" style="width: 18rem;">
        <figure class="card-img-top" alt="Card image cap "><img class="imgUser" src="${json.results[i].picture.large}">
        </figure>
        <div class="card-body">
            <h5 id="CivNomPrenomUser"class="card-title">${json.results[i].name.title} ${json.results[i].name.last} ${json.results[i].name.first} </h5>
            <h6 id="email"class="card-title"> ${json.results[i].email}</h6>
            <h6 id="tel"class="card-title">${json.results[i].phone}</h6>
        </div>
    </div>
</section>`
}
    }


    rechercheUser(json)
    {
        let input = document.getElementById('rechercheUser').value
        input.addEventListener("input", e => {
            console.log(e.target.value)
            // const element = e.target.value.toLowerCase()
            // const newUser = users.filter(user =>
            //     user.login.toLowerCase().includes(element)
            // )
            //
            // showUsers(newUser)
        })


    }

}