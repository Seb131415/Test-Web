<?php

function deleteF(){
    if(!empty ($_GET['delete'])) {
        $delete = new delete($_GET['delete']);
        if ($delete->deleteTask()) {
            echo "<div class = 'col-md-9 alert alert-success alert-dismissible fade show' role ='alert'>
                    <strong>You Have Deleted Feedback Successfully</strong>
                    <button type='button' class='btn-close' data-bs-dismmiss='alert' aria-label='Close'</button>
                </div>";
        } else {
            "<div class ='col-md-9 alert alert-success alert-dismissible fade show' role='alert'>
            <strong> Feedback Delete Error! </strong>
            <button type='button' class='btn-close' data-bs-dismmiss='alert' aria-label='Close'</button> 
            </div>";

        }
    }
}

function viewTable() {
    $view = new view();
    $view->viewData();
}

function deleteListener(){
        if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $delete = new delete($id);
        if ($delete->deleteTask()) {
            echo "<div class='alert alert-success'>Task deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Failed to delete the task.</div>";
        }
    }
}

?>