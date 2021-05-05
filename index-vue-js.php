  
<?php include __DIR__. '/template/header.php'; ?>
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
                        <li v-for="canzone in dischi">
                            <div class="card flex">
                                <div class="cover">
                                    <img v-bind:src="canzone.poster">
                                </div>
                                <p class="titolo-disco"> <small>{{canzone.title}}</small></p>
                                <p class="autore-disco"> <small>{{canzone.author}}</small></p>
                                <p class="anno-disco"> <small>{{canzone.year}}</small></p>
                            </div>
                        </li>
                    </ul>
                </section>
            </main>
        </div>
        <!-- /corpo -->
    </div>
        
<?php include __DIR__. '/template/footer.php'; ?>