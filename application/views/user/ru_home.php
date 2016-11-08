
<div class="ui grid centered grid">
    <div class="row">
        <!---  right column  --->
        <div class="ui grid three wide column">
            <!--- left top medium advertising--->
            <div class="ui medium rectangle test ad" data-text="Medium Rectangle"></div>
            <!--- end advertising--->
        </div>
        <!--- end of right column  --->
        <!-------------------------------------------------------------------------------------------------------------------------------
                                <!--- center column  --->
        <div class="ui grid ten wide column ">
            <div  class="ui container">
                <div class="row">
                    <!--- language div ---->
                    <div class="ui grid mini horizontal divided list left floated">
                        <!----  arm language  ---->
                        <div class="item">
                            <a href='<?php echo base_url();?>'>
                            <i class="am flag"></i>
                            <div class="content">
                                <div class="header">Հայ</div>
                            </div>
                        </a>
                        </div>
                        <!----  rus language  ---->
                        <div class="item">
                            <i class="ru flag"></i>
                            <div class="content">
                                <div class="header">Рус</div>
                            </div>
                        </div>
                    </div>
                    <!--- end language div ---->
                    <!---- Search   ---->
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="inverted circular search link icon"></i>
                        <i class="inverted circular search link icon"></i>
                    </div>
                    <!----end  Search---->
                </div>
                <!----  menu  ---->
                <div class="ui grid stackable menu">
                    <div class="item one wide column">
                        <img src="<?php echo base_url();?>img/logo.png">
                    </div>
                    <a class="item two wide column"><i class="home icon"></i>Главное</a>
                    <a class="item two wide column"><i class="info circle icon"></i>О нас</a>
                    <a class="item two wide column"><i class="first aid icon"></i>Лекарство</a>
                    <a class="item two wide column"><i class="add square icon"></i>Аптеки</a>
                    <a class="item three wide column"><i class="hospital icon"></i>Болницы</a>
                    <a class="item three wide column"><i class="mail icon"></i>Обратная связь</a>
                </div>
                <!--- end menu ---->
                <?php foreach ($categoriya as $item ): ?>
                    <h3 class="ui block header"><?=$item['nameRU']; ?> </h3>
                    <div class="ui label"><i class="upload icon"></i><div class="detail"><?=$item['date']; ?></div>
                    </div>
                    <div class="ui blurring segment">
                        <div class="ui dimmer"></div>
                        <p>                 <?=$item['textRU']; ?></p>
                        <button class="ui facebook button"><i class="facebook icon"></i> Facebook </button>
                        <button class="ui twitter button"><i class="twitter icon"></i> Twitter </button>
                    </div>

                <?php endforeach;?>
            </div>
        </div>
        <!--- end of center column  --->
        <!-------------------------------------------------------------------------------------------------------------------------------
                                <!----  left column  ---->
        <div class="ui grid three wide column">
            <!--- left top medium advertising--->
            <div class="ui medium rectangle test ad" data-text="Medium Rectangle"></div>
            <!--- end advertising--->
            <!--- Navigation bar--->
            <div class="ui mini horizontal divided list">
                <?php foreach ($categoriya as $item ): ?>
                    <div class="item">
                        <div class="content">
                            <a class="header"><?=$item['nameRU']; ?></a>
                        </div>
                    </div>
                <?php endforeach;?>
                <!--- end Navigation bar--->
            </div>

        </div>
        <!----  end of left column  --->
    </div>
</div>