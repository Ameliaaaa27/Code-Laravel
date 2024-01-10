<div class="container_login">
    <form id="form_login" name="form_login" method="post" action="<?php echo APP_URL . '/login/process'; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" />
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />
        <input type="submit" name="login" id="login" value="login" />
    </form>
    <?php echo $this->session->get('error_login_message') ?? ''; ?>
</div>
