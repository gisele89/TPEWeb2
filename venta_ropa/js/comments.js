"use strict"

// event listeners
document.querySelector("#form-tarea").addEventListener('submit', addTask);

// define la app Vue
let app = new Vue({
    el: "#template-vue-tasks",
    data: {
        subtitle: "Estas tareas se renderizan desde el cliente usando Vue.js",
        tasks: [],
        auth: true
    }
});

/**
 * Obtiene la lista de tareas de la API y las renderiza con Vue.
 */
function getComments() {
    fetch("api/comments")
    .then(response => response.json())
    .then(tasks => {
        app.comments = comments; // similar a $this->smarty->assign("tasks", $tasks)
    })
    .catch(error => console.log(error));
}

/**
 * Inserta una tarea usando la API REST.
 */
function addComment(e) {
    e.preventDefault();

    let data = {
        comment:  document.querySelector("input[name=comment]").value,
        puntuacion:  document.querySelector("input[name=puntuacion]").value,
    }

    fetch('api/comments', {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(data)
     })
     .then(response => {
         getComments();
     })
     .catch(error => console.log(error));
}

// obtiene las tareas al iniciio
getComments();
