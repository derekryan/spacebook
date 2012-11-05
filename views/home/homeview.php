    <div id="maincontent">
      <div id="primary">     
        <h2> Friends </h2> 
        <ul> 
          <?php foreach($friends['mutual'] as $name):?>
            <li>
              <?=anchor("profile/view/$name", $name)?>, (<?=anchor("home/drop/$name", 'drop')?>)
            </li>
          <?php endforeach?>
        </ul>
        <h2> Following </h2> 
          <ul> 
            <?php foreach($friends['following'] as $name):?>
              <li>
                <?=anchor("profile/view/$name", $name)?>, (<?=anchor("home/drop/$name", 'drop')?>)
              </li>
            <?php endforeach?>
          </ul>
        <h2> Followers </h2> 
          <ul> 
            <?php foreach($friends['followers'] as $name):?>
              <li>
                <?=anchor("profile/view/$name", $name)?>
              </li>
            <?php endforeach?>
          </ul>
      </div> 
      <div id="secondary">
        <h2> Messages </h2> 
        <ul> 
          <li>marge says..."Hey there Homer, when are you going to work?"</li>      
          <li>lisa says..."Move off the couch dad##"</li>     
        </ul>      
      </div>
    </div>