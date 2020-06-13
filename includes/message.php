<?php

    if (isset($_GET['success']) && $_GET['success']=='1') {
        echo'
        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your information has been submitted. We will be in touch with you as soon as posible 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    } 
    else if (isset($_GET['success']) && !$_GET['success']) {
        echo '
        <div id="alert"class="alert alert-warning alert-dismissible fade show " role="alert">
            <strong>Error!</strong> Failed to send your information. Try again later
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    }

    if (isset($_GET['update_success']) && $_GET['update_success']=='1') {
        echo'
        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Information has been updated
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    } 
    else if (isset($_GET['update_success']) && !$_GET['update_success']) {
        echo '
        <div id="alert"class="alert alert-warning alert-dismissible fade show " role="alert">
            <strong>Error!</strong> Failed to update information
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    }

    if (isset($_GET['update_error']) && $_GET['update_error'=='1']) {
        echo '
        <div id="alert"class="alert alert-warning alert-dismissible fade show " role="alert">
            <strong>Error!</strong> Information does not exist on database. Please refresh your browser
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    }

    if (isset($_GET['delete_success']) && $_GET['delete_success']=='1') {
        echo'
        <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Information has been deleted
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    } 
    else if (isset($_GET['delete_success']) && !$_GET['delete_success']) {
        echo '
        <div id="alert"class="alert alert-warning alert-dismissible fade show " role="alert">
            <strong>Error!</strong> Failed to delete information
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    }

    if (isset($_GET['delete_error']) && $_GET['delete_error'=='1']) {
        echo '
        <div id="alert"class="alert alert-warning alert-dismissible fade show " role="alert">
            <strong>Error!</strong> Information does not exist on database. Please refresh your browser
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div><br>';
    }
?>