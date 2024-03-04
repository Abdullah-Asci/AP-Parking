<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "	<head>\n";
    echo "		<link rel=\"stylesheet\" type=\"text/css\" href=\"Style_index.css\">\n";
    echo "		<nav>\n";
    echo "			<ul>\n";
    echo "				<li><a href=\"index.html\">Accueil</a></li>\n";
    echo "				<li><a href=\"BTS SIO.html\">BTS SIO</a></li>\n";
    echo "				<li><a href=\"CV.html\">CV</a></li>	\n";
    echo "				<li><a href=\"Réa_Pro.html\">Realisation Pro</a></li>\n";
    echo "				<li><a href=\"Veille.html\">Veille</a></li>\n";
    echo "			</ul>			\n";
    echo "		</nav>\n";
    echo "	</head>\n";
    echo "	<body>\n";
    echo "		<center>\n";
    echo "		<h6></h6>\n";
    echo "		<h1>Bienvenue dans mon portfolio</h1>\n";
    echo "		<h6></h6>\n";
    echo "		<br>\n";
    echo "		<h2>Je suis actuellement étudiant en 2ère année d’un BTS SIO (Services Informatiques aux Organisations)<br>\n";
    echo "			option SLAM (solution logiciel et application métier).<br>\n";
    echo "			au sein de l’établissement Charles de Foucauld situé dans le 18ème arrondissement de Paris (75018).<br>\n";
    echo "			Et ce après avoir obtenue un baccaloréat STI2D (sciences et technologies de l\'industrie et du développement durable)<br>\n";
    echo "			option SIN (Système d\'Information et Numérique).<br>\n";
    echo "			au Lycée Polyvalent Jean Jaurès de Châtenay-Malabry (92290).<br>\n";
    echo "			<br>\n";
    echo "			Dans ce portfolio, vous trouverez toutes les informations nécessaires<br>\n";
    echo "			concernant mon parcours afin d’obtenir mon diplôme du BTS.\n";
    echo "		</h2>\n";
    echo "<p style=\"color: green; font-size: 18px;\">test</p>\n";
    echo "		<br>\n";
    echo "		<br>\n";
    echo "		<div id=\"menu\"><ul><li><a href=\"BTS SIO.html\">En savoir plus</a></li></ul></div>\n";
    echo "		<footer>\n";
    echo "			<div class=\"colonne\">\n";
    echo "				<h3>Contact</h3>\n";
    echo "				<p>chantraine.vincent@gmail.com</p>\n";
    echo "				<p>4 Allée du gros châtaignier, 92350 Plessis Robinson</p>\n";
    echo "				<p>0651937957</p>\n";
    echo "			</div>\n";
    echo "			<div class=\"colonne\">\n";
    echo "				<h3>Mon établissement</h3>\n";
    echo "				<p>UFA Charles de Foucauld</p>\n";
    echo "				<p>9 Rue des Roses, 75018 Paris</p>\n";
    echo "				<p>BTS : SIO - NDRC - MCO</p>\n";
    echo "			</div>\n";
    echo "			<div class=\"colonne\">\n";
    echo "				<h3>Compétence</h3>\n";
    echo "				<p>Langage : Python, C, PHP, HTML, CSS, JAVA</p>\n";
    echo "				<p>Base de donnée : SGBD Access, MySQL</p>\n";
    echo "				<p>Cybersécurité</p>\n";
    echo "			</div>\n";
    echo "		</footer>\n";
    echo "		</center>\n";
    echo "	</body>\n";
    echo "</html>\n";
    
});
