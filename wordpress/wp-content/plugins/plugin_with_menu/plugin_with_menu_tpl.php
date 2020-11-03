<div class="wrap">
    <h1>Configurations My plugin</h1>
    <form method="post" action="options.php">
        <div class="row">
            <label for="token_api">Token da API</label>
            <input type="text" name="token_api" id="token_api">
            <br><br>
            <label for="url_api">URL da API</label>
            <input type="text" class="form-control form-control-sm" name="url_api" id="url_api">
            <br><br>
        </div>

        <?php submit_button() ?>

    </form>
</div>