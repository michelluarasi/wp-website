<?php
/*
Template Name: Template Legal
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package michelluarasi
 */
global $body_class_extra, $current_page;
$current_page = "menu";
$body_class_extra = "legal";

get_header();?>

  <div class="detail-content">
    <div class="detail-content__body">



        <div class="one-column">

        <h1>Legal Disclosure</h1>
        <p class="lead">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Lorem dolorsit amet, consectetur adipiscing elit.</p>

        <h2>Imprint</h2>
        <h3>Responsibility</h3>
        <p>Person responsible for this website and its contents, according to <a href="https://www.admin.ch/opc/de/classified-compilation/19860391/index.html#a3" title="Art. 3 Section 1s UWG" target="_blank">Art.3 §1s UWG</a> is <strong>Michel Luarasi</strong>, as long as not written in a different way directly below articles and pages.</p>


        <h3>Contact Information</h3>
        <p>
            Michel Luarasi</br>
            Engelstrasse 7</br>
            CH-8004 Zurich</br>
            <a href="tel:+41787225079" title="Mobile" >+41 78 722 50 79</a></br>
            <a href="mailto:michel@luarasi.com" title="E-Mail">michel@luarasi.com</a></br>
        </p>

        <h3>VAT number</h3>
        <p>My VAT is based on the Swiss BID number: <strong>CHE-483.486.033</strong></p>

        <hr>

        <h2>Disclaimer</h2>
        <h3>Accountability for content</h3>
        <p>Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Alle Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</p>

        <h3>Accountability for link</h3>
        <p>Responsibility for the content of external links (to web pages of third parties) lies solely with the operators of the linked pages. No violations were evident to me at the time of linking. Should any legal infringement become known to me, I will remove the respective link immediately.</p>

        <h3>Copyright</h3>
        <p>Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien auf der Website gehören ausschliesslich der Firma Michel Luarasi oder den speziell genannten Rechtsinhabern. Für die Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im Voraus einzuholen.</p>

        <h3>Privacy</h3>
        <p>Gestützt auf <a href="https://www.admin.ch/opc/en/classified-compilation/19995395/index.html#a13" title="Art. 3 Section 1s UWG" target="_blank">Art. 13 Swiss Federal Constitution</a> und die datenschutzrechtlichen Bestimmungen des Bundes (Datenschutzgesetz) hat jede Person Anspruch auf Schutz ihrer Privatsphäre sowie auf Schutz vor Missbrauch ihrer persönlichen Daten. Wir halten diese Bestimmungen ein. Persönliche Daten werden streng vertraulich behandelt und weder an Dritte verkauft noch weiter gegeben. In enger Zusammenarbeit mit unseren Hosting-Providern bemühen wir uns, die Datenbanken so gut wie möglich vor fremden Zugriffen, Verlusten, Missbrauch oder vor Fälschung zu schützen. Beim Zugriff auf unsere Webseiten werden folgende Daten in Logfiles gespeichert: IP-Adresse, Datum, Uhrzeit, Browser-Anfrage und allg. übertragene Informationen zum Betriebssystem resp. Browser. Diese Nutzungsdaten bilden die Basis für statistische, anonyme Auswertungen, so dass Trends erkennbar sind, anhand derer wir unsere Angebote entsprechend verbessern können.</p>

        <h3>Google Analytics</h3>
        <p>This site uses Google Analytics. Google Analytics is a web analysis service provided by Google Inc. (“Google”). Google utilizes the Data collected to track and examine the use of this Application, to prepare reports on its activities and share them with other Google services. Google may use the Data collected to contextualize and personalize the ads of its own advertising network. This integration of Google Analytics anonymizes your IP address. It works by shortening Users' IP addresses within member states of the European Union or in other contracting states to the Agreement on the European Economic Area. Only in exceptional cases will the complete IP address be sent to a Google server and shortened within the US.</p>

        <h2>Sources</h2>
        <h3>Code</h3>
        <p>The WebGL animation on the homepage is based on the open-source code of <a href="https://github.com/spite/codevember-2016" title="Codevember-2016" target="_blank">Codevember-2016</a> and adapted for my purposes.

        <hr>

        <p class="footnote">Last update: January 2017</p>
</div>


    </div>
  </div>

<?php
  // include (get_template_directory()."/get_in_touch.php"); 
  get_footer(); 
?>
