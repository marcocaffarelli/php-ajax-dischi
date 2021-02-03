<main>
    <div class="container_cards">
        <!-- ciclo foreach per stampare le card -->
        <?php foreach ($dischi as $card) { ?>
            <!-- ciclo foreach per stampare i dati delle card -->
            <?php foreach ($card as $datiCard) { ?>         
                <?php 
                    echo $datiCard;
                ?>
            <?php } ?>
            <!-- /ciclo foreach per stampare i dati delle card -->
        <?php } ?>
        <!-- /ciclo foreach per stampare le card -->
    </div> 
</main>