<?php

$page = $page ?? 404;

include BASE_DIR . '/includes/header.php';
include BASE_DIR . '/includes/nav.php';

?>

<div class="container-fluid d-flex justify-content-center align-items-center error-template">
    <div class="d-flex flex-column justify-content-center align-items-center text-center mb-3" style="width: 18rem;">
        <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <h5 class="card-title fw-bold text-404 fnt-col">404</h5>
            <p class="card-text text-error-msg fnt-col">Whoops... page not found</p>
            <a href="/" class="btn btn-primary">Go Home</a>
        </div>
    </div>
</div>
