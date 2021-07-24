 <!-- main -->
 <section class="two container">
             <?php
            $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
            $listaproiz->prikazi_sve_proizvode($grupa);
            ?>
    </section>