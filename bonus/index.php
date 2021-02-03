<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php-ajax-dischi-Bonus</title>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <link rel="stylesheet" href="../dist/css/app.css">
    </head>
    <body>
        <div id="app">
            <!-- header -->
            <header>
                <nav>
                    <img src="../dist/img/logo.png" alt="logo di spotify">
                    <div>
                        <select class="menu" v-model="selected">
                            <option>Tutti</option>
                            <option>Bon Jovi</option>
                            <option>Iron Maiden</option>
                            <option>Eric Clapton</option>
                            <option>Queen</option>
                            <option>Sting</option>
                            <option>Steve Gadd Band</option>
                        </select>
                    </div>
                </nav>
            </header>
            <!-- /header -->

            <!-- main -->
            <main>
                <div class="container_cards">
                    <div class="card" v-for = "dischi in arrayDischi" v-if="selected == dischi.artista || selected == 'Tutti'">
                        <img :src="dischi.poster" >
                        <h3>{{dischi.titolo}}</h3>
                        <div>{{dischi.artista}}</div>
                        <div>{{dischi.anno}}</div>
                    </div>
                </div> 
            </main>
            <!-- /main -->
        </div>              
        <script src="../dist/js/app.js"></script>
    </body>
</html>