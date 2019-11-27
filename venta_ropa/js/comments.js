"use strict";
// event listeners
document.querySelector("#form-comment").addEventListener('submit', addComment);
document.querySelectorAll("[class=btn-eliminar]").forEach( function(elem) {
    alert(elem);
});
// define la app Vue
let app = new Vue({
    el: "#template-vue-comments",
    data: {
        subtitle: "Estos comentarios se renderizan desde el cliente usando Vue.js",
        comments: [],
        auth: true
    }
});

function deleteComment(e){
  e.preventDefault();
  alert(this);
}

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getComments() {

    fetch("../api/comments")
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
