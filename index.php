<?php include __DIR__. '/template/header.php'; ?>
<!-- <?php include __DIR__. '/database.php'; ?> -->
    <div id="root">
        <div class="container">
         <!-- intestazione -->
            <header class="flex">
               <a href="#"><img src="img/download.png" alt="logo"></a>
            </header>
            <!-- /intestazione -->
            <!-- corpo -->
            <main class="flex">
                <section class="lista-dischi" v-show="dischi.length > 0">
                    <ul class="flex">
                        <?php foreach($albums as $album) { ?>
                            <li>
                                <div class="card flex">
                                    <div class="cover">
                                        <img src="<?php echo $album['poster'];?>">
                                    </div>
                                    <p class="titolo-disco"> <small><?php echo $album['title'];?></small></p>
                                    <p class="autore-disco"> <small><?php echo $album['author'];?></small></p>
                                    <p class="anno-disco"> <small><?php echo $album['year'];?></small></p>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </section>
            </main>
        </div>
        <!-- /corpo -->
    </div>
        
<?php include __DIR__. '/template/footer.php'; ?>
