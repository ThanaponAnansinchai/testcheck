<div id="main" class="content-area group">
    <header>
     
            <?php echo validation_errors();?>
            <?=form_open('main/form_submit');?>
            <div class="form" style="line-height: 1.8;">
            <div >
                <label><strong> Topic</strong></label>
                <?php
                    $data = array(
                        'name'  => 'topic',
                        'id'    => 'topic',
                        'size'  => '30'
                    );
                    echo form_input($data);
                ?>
            </div>
            <div >
                <label><strong> Topic 2</strong></label>
                <?php
                    $data = array(
                        'name'  => 'topic2',
                        'id'    => 'topic2',
                        'size'  => '30'
                    );
                    echo form_input($data);
                ?>
            </div>
            </div>
            <div >
                <?php
                    $data = array(
                        'value' => 'Check',
                    );
                    echo form_submit($data);
                ?>

                <?php
                    $data = array(
                        'value' => 'ยกเลิก',
                    );
                    echo form_reset($data);
                ?>
            </div>
            <?=form_close();?>
    </header>
</div>
<!-- end contain area-->