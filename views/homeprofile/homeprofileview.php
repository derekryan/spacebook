<div id="maincontent">
      <div id="primary">    
        <p> 
          <img src="homerwalk.gif"/> 
        </p> 
        <form action="homeprofile/upload" method="post" enctype="multipart/form-data">  
          <input type="file" name="userfile" value=""  />     
          <input type="submit" name="submit" value="upload"  />  
        </form>  
      </div>  
      <div id="secondary">
        <p>
          <?=$profileText;?>
        </p>
        <p>
          <?=form_open('homeprofile/changetext');?>
          <?php $msgbox = array(
              'name'  => 'profiletext',
              'rows'  => '8',
              'cols'  => '30',
            );?>
          <?=form_textarea($msgbox);?>
        </p>
        <p>
          <?=form_submit('submit', 'Change'); ?>
          <?=form_close(); ?>
        </p>
      </div>
    </div>