  <div id="signupform">  
    <p>
    <?=form_open('signup/register');?>
      <p>
        username <?=form_input('username');?>
      </p>
      <p>
        password <?=form_password('password');?>
      </p>
      <?=form_submit('submit', 'Register'); ?>
      <?=form_close(); ?>
    </p>
  </div>