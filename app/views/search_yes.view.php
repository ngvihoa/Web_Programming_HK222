<div id="cvList">
            <?php if(is_array($data['searchValue'])): ?>      
                <?php foreach($data['searchValue'] as $row): ?>
                <div id="cvDetail">
                <a href="<?php echo ROOT."/" . "cvdetails/" .$row->cvid;?>" target="_blank">
                    <img src="<?php echo ROOT ?>/assets/images/user.jpg" loading='lazy' alt="avatar">
                    <div class="secondColumn">
                        <div><span><?= $row->firstname.' '.$row->lastname; ?></span></div>
                        <div><span><?= $row->jobtitle;?></span></div>
                        <div class="country"><?= $row->city.' '.$row->country;?></div>
                    </div>
                </a>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>


        <!-- <div class="pagination"> -->
        <?php
            $page= new \Core\Pager;
            $page->display();
        ?>    
        <!-- </div> -->