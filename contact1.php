<?php
$title = "AREVE - Contact";
include 'components/header.php';
?>

<div class="container-fluid mt-2">
	<div class="row">
		<div class="col-md-4 contactAside shadow p-3 bg-white">
			<h3 class="greenUp mt-4">nous joindre</h3>

			<div class="row phone mt-3 mb-1">
				<div class="col">
					<span class="d-inline">
						<i class="fas fa-phone fa-2x mr-2"></i>
						<span class="d-inline">
							<h2 class="d-inline pr-1">0 808 800 083</h2>
							<!-- <br> -->
							<i>(Appel non surtaxé)</i>
						</span>
					</span>
				</div>
			</div>

			<h5 class="greenUp pt-4">horaires d'ouverture</h5>
			<p>Du lundi au vendredi, 8h30-12h | 13h30-17h30 (17h le vendredi)
			</p>
			<a class="btn btn-primary btn-sm mb-3" href="https://outlook.office365.com/owa/calendar/AREVE@areve83.fr/bookings/" target="_blank">Prendre rendez-vous</a>

			<h5 class="greenUp pt-3">adresses</h5>
			<p class="pl-2">Immeuble Insula <br> Angle rue de l'Estérel / Rue du Maréchal Gallieni
				<br><b>83 600 Fréjus</b>
				<br><a href="https://g.page/AREVE83?share" target="_blank"><i class="fas fa-map-marker-alt pr-2 pt-2"></i>Plan d'accès</a>
			</p>

			<p class="pl-2 pt-2">Pépinière d'entreprise - Bât. B
				<br>169 Avenue de la 1ère Armée
				<br><b>83 300 Draguignan</b>
				<br><a href="https://goo.gl/maps/DWgkhkSf8n7DFtTu6" target="_blank"><i class="fas fa-map-marker-alt pr-2 pt-2"></i>Plan d'accès</a>
			</p>

			<h5 class="greenUp pt-3">permanences</h5>

			<b>Fayence</b><br>
			<p>2ème mercredi du mois
				<br><b>Prochaine permanence : mercredi 13 octobre 2021</b>
				<br>Lieu : Maison France Service
				<br>9h - 12h : sans RDV
				<br>13h30 - 16h : sur RDV uniquement (Tél : 0 808 800 083)
				<br><a href="https://goo.gl/maps/kdgHrBnUiPCLi9K49" target="_blank">Plan d'accès</a>
			</p>
			<b>Roquebrune-sur-Argens</b><br>
			<p>1er mercredi du mois (après-midi)
				<br><b>Prochaine permanence : mercredi 6 octobre 2021</b>
				<br>Lieu : Hôtel de Ville (service urbanisme)
				<br>13h30 - 17h : sur RDV uniquement (Tél : 0 808 800 083)
				<br>
				<a href="https://goo.gl/maps/stBiXc7qgWPuiRud8" target="_blank">Plan d'accès</a>
			</p>

			<h5 class="greenUp pt-3">rester informé</h5>
			<p>Si vous souhaitez connaître les dernières informations locales sur la rénovation énergétique et les actions de l'AREVE, inscrivez-vous à notre newsletter.</p>

			<a class="btn btn-primary btn-sm mt-1 mb-4" href="https://sibforms.com/serve/MUIEAIzcnEDrjtfPs3WMAU-NkVkwfjkEhqEPrcsTmrz3ng525PsuFINDLCOhwQXr65aAKniNUPtzTZH5D9D_0yKVlumYWUCLMfM3LWeMs55ZnYjLMyj2J8hDlu9iEnMkqMnFZxn3fZcb7g1JjcLZ_e726Kzzumt_zeSUyqFOhZCWMfJQiJw2OYATy6wBjySmLGmrVYwSaYB6TI4u">Inscription Newsletter</a>

		</div>
		<div class="col-md-8" style="padding:10px 30px 10px 30px">
			<h2 class="greenUp text-center mt-4">Contactez-nous par email</h3>
				<h5 class="text-center text-primary mb-5">* Champs requis</h5>

				<form id="contact" name="contactform" method="post" action="contact2.php" accept-charset="utf-8">
					<div class="form-row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="prenom">Prénom *</label>
								<input type="text" class="form-control" id="prenom" name="prenom" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="nom">Nom *</label>
								<input type="text" class="form-control" id="nom" name="nom" required>
							</div>
						</div>
						<!-- </div>
				<div class="form-row"> -->
						<div class="col-md-4">
							<div class="form-group">
								<label for="ville">Ville *</label>
								<select class="form-control" name="ville" id="ville" required>
									<optgroup label="CAVEM">
										<option value="Les Adrets-de-l'Esterel">Les Adrets de l'Esterel</option>
										<option value="Fréjus">Fréjus</option>
										<option value="Puget-sur-Argens">Puget-sur-Argens</option>
										<option value="Roquebrune-sur-Argens">Roquebrune-sur-Argens</option>
										<option value="Saint-Raphael">Saint-Raphael</option>
									</optgroup>
									<optgroup label="Dracénie">
										<option value="Ampus">Ampus</option>
										<option value="Bargeme">Bargème</option>
										<option value="Bargemon">Bargemon</option>
										<option value="Callas">Callas</option>
										<option value="Chateaudouble">Châteaudouble</option>
										<option value="Claviers">Claviers</option>
										<option value="Comps-sur-Artuby">Comps-sur-Artuby</option>
										<option value="Draguignan">Draguignan</option>
										<option value="Figanieres">Figanières</option>
										<option value="Flayosc">Flayosc</option>
										<option value="La Bastide">La Bastide</option>
										<option value="La Motte">La Motte</option>
										<option value="La Roque Esclapon">La Roque Esclapon</option>
										<option value="Le Muy">Le Muy</option>
										<option value="Les Arcs-sur-Argens">Les Arcs-sur-Argens</option>
										<option value="Lorgues">Lorgues</option>
										<option value="Montferrat">Montferrat</option>
										<option value="Saint-Antonin du Var">Saint-Antonin du Var</option>
										<option value="Salernes">Salernes</option>
										<option value="Sillans-la-Cascade">Sillans-la-Cascade</option>
										<option value="Taradeau">Taradeau</option>
										<option value="Trans-en-Provence">Trans-en-Provence</option>
										<option value="Vidauban">Vidauban</option>
									</optgroup>
									<optgroup label="Pays de Fayence">
										<option value="Bagnols-en-Forêt">Bagnols-en-Forêt</option>
										<option value="Callian">Callian</option>
										<option value="Fayence">Fayence</option>
										<option value="Mons">Mons</option>
										<option value="Montauroux">Montauroux</option>
										<option value="Saint-Paul-en-Forêt">Saint-Paul-en-Forêt</option>
										<option value="Seillans">Seillans</option>
										<option value="Tanneron">Tanneron</option>
										<option value="Tourettes">Tourettes</option>
									</optgroup>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="email">Email *</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="tel">Téléphone *</label>
								<input type="text" class="form-control" id="tel" name="tel" required>
							</div>
						</div>

					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" id="message" rows="3" name="message"></textarea>
					</div>
					<button name="envoi" type="submit" class="btn btn-primary btn-block mt-2 mb-4">Envoyer</button>
				</form>

				<i>Nous vous rappelons que l'AREVE est un service public à destination des habitants de l'Est Var. Si vous résidez dans une autre commune, vous trouverez votre conseiller FAIRE à <a href="https://www.faire.fr/">cette adresse.</a></i>

		</div>
	</div>
</div>

<?php include 'components/footer.php'; ?>