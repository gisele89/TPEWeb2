<?php
require_once("./model/CommentsModel.php");
require_once("./api/jsonView.php");
class CommentsApiController{
  private $model;
  private $view;
  private $data;

  function __construct(){
    $this->model= new CommentModel();
    $this->view= new JSONView();
    $this->data= file_get_contents("php://input");
  }

  function get_data(){
    return json_decode($this->data);
  }

  function getComments($params=null){
    $comments = $this->model->GetComments();
    $this->view->response($comments,200);
  }
  function getComment($params=null){
    $id=$params[':id'];
    $comment= $this->model->GetComment($id);
    if($comment){
      $this->view->response($comment,200);
    } else $this->view->response("El comentario no existe",404);
  }

  function getCommentsForProduct($params=null){
    $id_product = $params[':id'];
    $comment= $this->model-> GetCommentsByProduct($id_product);
    if($comment){
      $this->view->response($comment,200);
    } else $this->view->response("El comentario no existe",404);
  }

  function addComment($params=null){
    $body= $this->get_data();
  //  $this->view->response($body,200);
    $idComment = $this->model->addComment($body->comment, $body->fecha,$body->puntuacion, $body->id_usuario, $body->id_producto);
    $comment= $this->model->GetComment($idComment);
    if($comment){
      $this->view->response("Comentario agregado",200);
    }else $this->view->response("Comentario no agregado",500);
  }

  function deleteComment($params=null){
    $id=$params[':id'];
    $comment= $this->model->GetComment($id);
    if($comment){
      $this-> model->deleteComment($id);
      $this->view->response("Comentario borrado",200);
    }else {
      $this->view->response("Comentario no borrado",404);
    }
  }
}
?>
