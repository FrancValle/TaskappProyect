<h1><?=lang('password.email_sunject') ?></h1>

<p><?=lang('password.reset_email_body') ?></p>

<p><a href="<?= site_url("/$locale/password/reset/$token") ?>"><?=lang('password.reset_password') ?></a></p>