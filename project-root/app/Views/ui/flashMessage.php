<?php if (session()->has('success')) : ?>

    <div id="success-alert" class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
        <p>
            <?= esc(session()->get('success')) ?>
        </p>
        <button id="delete-alert-success-btn" class="btn btn-danger">
            X
        </button>
    </div>

<?php endif; ?>

<?php if (session()->has('error')) : ?>

    <div id="error-alert" class="alert alert-success d-flex justify-content-between align-items-center" role="alert">
        <p>
            <?= esc(session()->get('error')) ?>
        </p>
        <button id="delete-alert-error-btn" class="btn btn-danger">
            X
        </button>
    </div>

<?php endif; ?>