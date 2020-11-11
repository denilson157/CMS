<div class="wrap">
    <h1>Configurations My plugin</h1>
    <form method="post" action="options.php">

        <?php
            settings_fields('configs-exemplo');
            do_settings_sections('configs-exemplo');
        ?>

        <label for="token_api">Token da API</label>
        <input type="text" name="api-token" id="api-token" value="<?php echo get_option('api-token');?>">
        <br><br>
        <label for="url_api">URL da API</label>
        <input type="text" name="api-url" id="api-url" value="<?php echo get_option('api-url');?>">
        <br><br>

        <?php submit_button() ?>

    </form>
</div>