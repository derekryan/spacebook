  <div id="loginform">  
    <p>
    <?=form_open('login/loguserin');?>
      <p>
        username <?=form_input('username');?>
      </p>
      <p>
        password <?=form_password('password');?>
      </p>
      <?=form_submit('submit', 'Login'); ?>
      <?=form_close(); ?>
    </p>
  </div>