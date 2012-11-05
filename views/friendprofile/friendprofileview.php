    <div id="maincontent">
      <div id="primary">    
        <p> 
          <?=$memberprofiletext;?>
        </p> 
        <?=form_open("profile/leavemessage/$membername");?>
           <?php $msgbox = array('name'  => 'message',
                                 'rows'  => '2',
                                 'cols'  => '30');?>
           <?=form_textarea($msgbox);?>
           <?=form_submit('submit', 'Leave Message'); ?>
        <?=form_close(); ?> 
      </div>  
      <div id="secondary">
        <div id="messages">
          <h2> Messages </h2>
          <ul>
            <?php foreach($messages as $message):?>
              <li><?=$message['from']?> says...: "<?=$message['message']?>"</li>      
            <?php endforeach?>
          </ul>
        </div>
      </div>
    </div>