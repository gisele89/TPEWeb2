"use strict";
// event listeners
if(document.querySelector("#form-comment")){
  document.querySelector("#form-comment").addEventListener('submit', addComment);
}

let auth = document.querySelector("input[name=is_admin]").value;// define la app Vue
let app = new Vue({
    el: "#template-vue-comments",
    data: {
        subtitle: "Estos comentarios se renderizan desde el cliente usando Vue.js",
        comments: [],
        auth: auth
    },
    methods: {
        deleteComment: function(id) {
          let url = "../api/comments/" + id;
          fetch(url, {
              method: 'DELETE'
           })
           .then(response => {
               getComments();
           })
           .catch(error => console.log(error));  //removeComment(id);
        }
    }
});

/*function removeComment(id){
  var url = "../api/comments/" + id;
  fetch(url, {
      method: 'DELETE'
   })
   .then(response => {
       getComments();
   })
   .catch(error => console.log(error));
}*/

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getComments() {
    let idProducto = document.querySelector("input[name=id_producto]").value;
    var url = "../api/products/"+idProducto+"/comments";
    fetch(url)
    .then(response => response.json())
    .then(comments => {
        app.comments = comments; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function addComment(e) {
    e.preventDefault();
    var date = new Date();
    let data = {
        comment:  document.querySelector("textarea[name=comment]").value,
        puntuacion:  document.querySelector("input[name=puntuacion]:checked").value,
        id_producto: document.querySelector("input[name=id_producto]").value,
        id_usuario: document.querySelector("input[name=id_usuario]").value,
        fecha: date.toUTCString()
    }

    data = JSON.stringify(data);

    fetch('../api/comments', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: data
     })
     .then(response => {
         getComments();
     })
     .catch(error => console.log(error));
}
// obtiene las tareas al iniciio
getComments();
