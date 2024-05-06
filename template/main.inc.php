<main>
        <figure>
            <img src="./public/asset/cover.svg" alt="cover php">
            <figcaption>
                <h2>
                    PHP <?= " version $version" ?>
                </h2>
                <p>
					Votre répertoire il est dans ce chemin : <?= $path ?>
				</p>
            </figcaption>
        </figure>
		<section>
			<h2>Nous sommes le : <?= $date ?></h2>
			<p>
				Votre navigateur est : <?= $navigator ?> <br>
				Votre adress IP est le : <?= $add_ip ?>
				<br>Signature serveur
				
			</p>
			<?= $sign ?>
		</section>
		<section>
			<h2>PHP : langage de programmation</h2>
			<?php include_once "./model/bdd.inc.php"; ?>
		</section>
	</main>