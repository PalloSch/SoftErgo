<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>SE BITV</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">

    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!-- ACHTUNG: Respond.js funktioniert nicht, wenn du die Seite über file:// aufrufst -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 jombotron">
                <h1>BITV Test</h1>
                <p>Testen Sie Ihre Website!</p>
            </div>
        </div>
        <div class="row table-responsive">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                        <th>Aktueller Stand</th>
                        <th>Punktabzug</th>
                        <th>Noch erreichbar</th>
                        <th>Erreichbare Bewertung</th>
                    </tr>
                    <tr>
                        <td>0 von 100</td>
                        <td>-5 Punkte</td>
                        <td>10 Punkte</td>
                        <td>100%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </header>
    <main class="container">
        <div class="wrapper">
            <div id="fragebogen" class="row">
                <div>Fragebogen</div>
            </div>
            <form>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">1.1 - Für jeden Nicht-Text-Inhalt sind Alternativen in Textform bereitzustellen, die an die Bedürfnisse der Nutzerinnen und Nutzer angepasst werden können.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=12" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.1.1a Alternativtexte für Bedienelemente</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Grafische Bedienelemente haben sinnvolle Alternativtexte.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Grafische Bedienelemente sind nicht vorhanden.</div>

                        <div class="form-group">
                            <label for="1.1.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.1.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.1.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.1.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;img src="briefkasten.gif"<br> alt="Kontakt" /&gt;</pre>
                            </div>
                            <div>Beim Verwenden von Bildern ist es wichtig, einen alternativen Text zu vergeben.</div>

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=13" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.1.1b Alternativtexte für Grafiken und Objekte</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Informative Grafiken und Bilder haben sinnvolle Textalternativen. Objekte wie Video- und Audio-Dateien sowie Applets haben zumindest kurze beschreibende Textalternativen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Informative Grafiken und Bilder sowie Multimedia-Objekte (Video- und Audio-Dateien, Applets) sind nicht vorhanden.</div>

                        <div class="form-group">
                            <label for="1.1.1b-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.1.1b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.1.1b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.1.1b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Grafiken Alternativtexte geben</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=14" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.1.1c Leere alt-Attribute für Layoutgrafiken</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Layoutgrafiken haben leere alt-Attribute.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Layoutgrafiken sind nicht vorhanden.</div>

                        <div class="form-group">
                            <label for="1.1.1c-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.1.1c-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1c-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.1.1c-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1c-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.1.1c-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;img src="pflanze1.png" <br>alt="" /&gt;</pre>
                            </div>
                            <div>Layoutgrafiken benötigen keinen Alternativtext jedoch ein leeres Alternativattribut, damit Screenreader nicht den Bildtitel o.ä. lesen.</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=15" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.1.1d Alternativen für CAPTCHAs</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Der Alternativtext des Bildes in einem bildbasierten CAPTCHA beschreibt dessen Zweck. Mindestens eine nicht bildbasierte CAPTCHA-Alternative ist vorhanden. </div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Bildbasierte CAPTCHAs sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.1.1d-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.1.1d-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1d-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.1.1d-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.1.1d-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.1.1d-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;img src="captcha.php"&gt;<br>alt="Geben sie die im Bild<br> dargestellte Zeichenfolge ein" /&gt;</pre>
                            </div>
                            <div>Beschreibung des CAPTCHAs.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">1.2 - Für zeitgesteuerte Medien sind Alternativen bereitzustellen.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=16" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.2.1a Alternativen für Audiodateien und stumme Videos</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Audiodateien und stumme Videodateien haben gleichwertige Medienalternativen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Weder Audiodateien noch stumme Videodateien sind vorhanden.</div>
                        <div class="form-group">
                            <label for="1.2.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.2.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.2.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.2.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.2.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.2.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>Alternative Medien bereitstellen. Für stumme Video werden Audio oder Texte benötigt. Audiodateien sollten für Hörbehinderte transkripiert werden.</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=17" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.2.2a Videos mit Untertiteln</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Videos und Live-Übertragungen haben synchrone Untertitel.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Es sind weder Videos noch Live-Übertragungen vorhanden.</div>
                        <div class="form-group">
                            <label for="1.2.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.2.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.2.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.2.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.2.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.2.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>Untertitel für (live)Videos bereitstellen. Dies kommt Menschen mit Hörbehinderung als auch Menschen ohne die jeweiligen Sprachkenntnissen zugute.</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=28" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.2.3a Audiodeskription für Videos</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Videos sind mit Audiodeskription versehen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Videos sind nicht vorhanden oder auch ohne synchrone Audiodeskription zugänglich.</div>
                        <div class="form-group">
                            <label for="1.2.3a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.2.3a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.2.3a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.2.3a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.2.3a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.2.3a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>Audiodiskreption vermitteln das Bildgeschehen von Videos und sind daher empfohlen einzusetzen.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">1.3 - Inhalte sind so zu gestalten, dass sie ohne Informations- oder Strukturverlust in unterschiedlicher Weise präsentiert werden können.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=29" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1a HTML-Strukturelemente für Überschriften</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Seiteninhalte sind durch Überschriften erschlossen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Überschriften sind nicht erforderlich.</div>
                        <div class="form-group">
                            <label for="1.3.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;h1&gt;Erste Überschrift&lt;/h1&gt;<br>&lt;h2&gt;Zweite Überschrift&lt;/h2&gt;<br>&lt;h3&gt;Dritte Überschrift&lt;/h3&gt;<br>usw</pre>
                            </div>
                            <div>Strukturelemente sollten nicht zur erzeugung unterschiedlicher Schriftgrößen benutzt werden.
                                <br> Das Auslassen einer Hierarchiefolge muss kein Fehler sein, wenn es inhaltlich gerechtfertigt ist.</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=30" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1b HTML-Strukturelemente für Listen</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Listen (einschließlich Menüs) sind mit den vorgesehenen HTML-Strukturelementen ausgezeichnet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Listen sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.3.1b-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;ol&gt;<br> &lt;li&gt;Ein Listenelement&lt;/li&gt;<br>&lt;/ol&gt;</pre>
                            </div>
                            <div>Für Listen die richtigen Listenelemente verwenden wie zum Beispiel &lt;ol&gt; oder &lt;ul&gt; und innerhalb dieser dann &lt;li&gt;.</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=31" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1c HTML-Strukturelemente für Zitate</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Als eigenständige Abschnitte gefasste Zitate sind mit blockquote ausgezeichnet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Als eigenständige Abschnitte gefasste Zitate sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.3.1c-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1c-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1c-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1c-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1c-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1c-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=32" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1d Inhalte gegliedert</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Absätze, Gruppen von Formularelementen und Texthervorhebungen sind mit geeigneten Strukturelementen ausgezeichnet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Die Seite enthält keinen zu gliedernden Text und keine Formulare.</div>
                        <div class="form-group">
                            <label for="1.3.1d-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1d-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1d-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1d-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1d-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1d-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=33" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1e Datentabellen richtig aufgebaut</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Datentabellen sind richtig aufgebaut und ausgezeichnet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Datentabellen sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.3.1e-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1e-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1e-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1e-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1e-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1e-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=34" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1f Zuordnung von Tabellenzellen</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> In komplexen Datentabellen ist der Bezug von Überschriften und Inhalten (über scope oder über id und headers) definiert, Zuordnungen von Überschriften in einfachen Datentabellen sind korrekt.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Komplexe Datentabellen sind nicht vorhanden, in einfachen Datentabellen sind Überschriften nicht zugeordnet.</div>
                        <div class="form-group">
                            <label for="1.3.1f-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1f-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1f-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1f-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1f-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1f-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=35" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.1g Kein Strukturmarkup für Layouttabellen</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Für Datentabellen vorgesehenes Mark-up wird nicht für Layouttabellen verwendet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Tabellen werden nicht für Layoutfunktionen verwendet.</div>
                        <div class="form-group">
                            <label for="1.3.1g-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.1g-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1g-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.1g-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.1g-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.1g-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=36" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.2a Layouttabellen linearisierbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Layouttabellen können linearisiert werden, ohne dass der Sinnzusammenhang des Inhalts verloren geht.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Layouttabellen sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.3.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=37" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.2b Sinnvolle Reihenfolge</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Eingeblendete Inhalte sowie dynamisch eingefügte oder geänderte Inhalte erscheinen an sinnvoller Stelle im Quelltext.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Es werden keine Stylesheets verwendet und keine Elemente dynamisch eingefügt oder verändert.</div>
                        <div class="form-group">
                            <label for="1.3.2b-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.2b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.2b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.2b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.2b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.2b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=38" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.3.3a Ohne Bezug auf sensorische Merkmale nutzbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Die Wahrnehmung von Farben, Formen, Position von Elementen oder Tönen ist für die Bedienung oder das Verständnis der Inhalte nicht erforderlich.</div>
                        <div class="form-group">
                            <label for="1.3.3a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.3.3a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.3.3a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.3.3a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.3.3a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.3.3a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">1.4 - Nutzerinnen und Nutzern ist die Wahrnehmung des Inhalts und die Unterscheidung zwischen Vorder- und Hintergrund so weit wie möglich zu erleichtern.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=39" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.2a Ton abschaltbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Automatisch abgespielte Tonelemente dauern nicht länger als drei Sekunden, lassen sich abschalten, oder unabhängig von der Systemlautstärke herunter regeln.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Die Seite hat keine Tonelemente, die automatisch abgespielt werden.</div>
                        <div class="form-group">
                            <label for="1.4.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=40" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.3a Kontraste von Texten ausreichend</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Texte haben ausreichende Helligkeitskontraste.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Texte sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.4.3a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.3a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.3a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.3a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=41" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.3b Kontraste von Grafiken ausreichend</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Grafische Bedienelemente und informative Grafiken haben ausreichende Kontraste.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Grafische Bedienelemente oder informative Grafiken sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.4.3b-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.3b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.3b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.3b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=42" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.3c Inhalte bei benutzerdefinierten Farben erkennbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Grafische Bedienelemente und informative Grafiken sowie Text sind vor wechselndem Hintergrund erkennbar.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Grafische Bedienelemente oder informative Grafiken sowie Texte sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.4.3c-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.3c-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3c-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.3c-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.3c-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.3c-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=52" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.4a Schriftgröße variabel</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Bei Nur-Text-Vergrößerung auf 150% in Firefox beziehungsweise "sehr groß" im Internet Explorer sind alle Inhalte lesbar und alle Funktionen nutzbar.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Texte sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="1.4.4a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.4a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.4a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.4a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.4a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.4a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=53" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.4b Bei Zoom auf 200% benutzbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Bei Zoom auf 200% sind alle Inhalte lesbar und alle Funktionen nutzbar.</div>
                        <div class="form-group">
                            <label for="1.4.4b-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.4b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.4b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.4b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.4b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.4b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=54" target="_blank" title="ausführliche Beschreibung (neues Fenster)">1.4.5a Verzicht auf Schriftgrafiken</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Schriftgrafiken werden nicht verwendet.</div>
                        <div class="form-group">
                            <label for="1.4.5a-Bewertung">Bewertung</label>
                            <select class="form-control" id="1.4.5a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="1.4.5a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="1.4.5a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="1.4.5a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="1.4.5a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">2.1 - Für die gesamte Funktionalität ist Zugänglichkeit über die Tastatur sicherzustellen.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=18" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.1.1a Ohne Maus nutzbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Auch ohne Maus können alle wesentlichen Funktionen und Inhalte genutzt werden.</div>
                        <div class="form-group">
                            <label for="2.1.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.1.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.1.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.1.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.1.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.1.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">2.2 - Den Nutzerinnen und Nutzern ist ausreichend Zeit zu geben, um Inhalte zu lesen und zu verwenden.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=19" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.2.1a Zeitbegrenzungen anpassbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Zeitbegrenzungen sind nicht vorhanden, abschaltbar oder verlängerbar.</div>
                        <div class="form-group">
                            <label for="2.2.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.2.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.2.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.2.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.2.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.2.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=20" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.2.2a Bewegte Inhalte abschaltbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Bewegte oder blinkende Inhalte sind nicht vorhanden, stoppen spätestens nach 5 Sekunden, oder es gibt eine Möglichkeit, die Bewegung/das Blinken anzuhalten, zu beeenden oder auszublenden.</div>
                        <div class="form-group">
                            <label for="2.2.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.2.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.2.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.2.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.2.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.2.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">2.3 - Inhalte sind so zu gestalten, dass keine epileptischen Anfälle ausgelöst werden.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=21" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.3.1a Verzicht auf Flackern</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Webseiten enthalten kein Flackern.</div>
                        <div class="form-group">
                            <label for="2.3.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.3.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.3.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.3.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.3.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.3.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">2.4 - Der Nutzerin oder dem Nutzer sind Orientierungs- und Navigationshilfen sowie Hilfen zum Auffinden von Inhalten zur Verfügung zu stellen.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=22" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.1a Inhaltsbereiche strukturiert</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Seitenbereiche sind durch Überschriften oder Sprunglinks erschlossen, Frames und Iframes haben sinnvolle Titel. Prüfschritt nicht anwendbar: Überschriften oder Sprunglinks sind nicht erforderlich, denn die Seite hat keine unterschiedlichen Bereiche.</div>
                        <div class="form-group">
                            <label for="2.4.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=55" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.2a Sinnvolle Dokumenttitel</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Dokumenttitel sind eindeutig, sie bezeichnen Site und Seiteninhalt.</div>
                        <div class="form-group">
                            <label for="2.4.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=43" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.3a Schlüssige Reihenfolge bei der Tastaturbedienung</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Links, Formularelemente und Objekte werden mit der Tabulatortaste in einer schlüssigen Reihenfolge angesteuert. Prüfschritt nicht anwendbar: Links, Formularelemente oder Objekte sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="2.4.3a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.3a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.3a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.3a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.3a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.3a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=44" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.4a Aussagekräftige Linktexte</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Linktexte sind durch den Linktext selbst oder über den programmatisch ermittelbaren Kontext aussagekräftig. Prüfschritt nicht anwendbar: Links sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="2.4.4a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.4a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.4a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.4a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.4a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.4a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=56" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.4b Links informieren über Dateiformat</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Links, die nicht auf HTML-Seiten verweisen, geben Auskunft über das Dateiformat.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Links, die nicht auf HTML-Seiten verweisen, sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="2.4.4b-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.4b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.4b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.4b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.4b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.4b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=58" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.5a Alternative Zugangswege</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Zwei unterschiedliche Zugangswege zu den Inhalten des Angebots sind vorhanden.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Das Webangebot ist nicht informationsorientiert oder es besteht nur aus einer Seite.</div>
                        <div class="form-group">
                            <label for="2.4.5a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.5a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.5a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.5a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.5a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.5a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=57" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.6a Title-Attribut für Symbole</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Symbole sind mit title-Attribut versehen, wenn ihre Bedeutung nicht aus dem Kontext hervorgeht.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Symbole sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="2.4.6a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.6a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.6a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.6a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.6a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.6a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=45" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.7a Aktuelle Position des Fokus deutlich</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Der Tastaturfokus ist deutlich zu sehen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Es gibt keine Links auf der Seite.</div>
                        <div class="form-group">
                            <label for="2.4.7a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.7a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.7a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.7a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.7a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.7a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=48" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.8a Position im Webauftritt klar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Das Webangebot zeigt dem Besucher, wo er sich gerade befindet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Das Webangebot ist nicht informationsorientiert oder es besteht nur aus einer Seite.</div>
                        <div class="form-group">
                            <label for="2.4.8a-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.8a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.8a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.8a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.8a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.8a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=46" target="_blank" title="ausführliche Beschreibung (neues Fenster)">2.4.8b Zweck der Alternativversion einleuchtend</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Der Zweck der Alternativversion ist einleuchtend und der Zusammenhang zur Standardversion nachvollziehbar.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Alternativ-Versionen werden nicht angeboten.</div>
                        <div class="form-group">
                            <label for="2.4.8b-Bewertung">Bewertung</label>
                            <select class="form-control" id="2.4.8b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="2.4.8b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="2.4.8b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="2.4.8b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="2.4.8b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">3.1 - Texte sind lesbar und verständlich zu gestalten.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=23" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.1.1a Hauptsprache angegeben</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Die Hauptsprache der Webseite(n) ist angegeben.</div>
                        <div class="form-group">
                            <label for="3.1.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.1.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.1.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.1.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.1.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.1.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=24" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.1.2a Anderssprachige Abschnitte ausgezeichnet</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Anderssprachige Abschnitte sind mit dem lang-Attribut ausgezeichnet.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Anderssprachige Abschnitte sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="3.1.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.1.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.1.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.1.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.1.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.1.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=25" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.1.2b Anderssprachige Wörter ausgezeichnet</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Anderssprachige Wörter sind nicht vorhanden oder mit dem lang-Attribut ausgezeichnet.</div>
                        <div class="form-group">
                            <label for="3.1.2b-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.1.2b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.1.2b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.1.2b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.1.2b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.1.2b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">3.2 - Webseiten sind so zu gestalten, dass Aufbau und Benutzung vorhersehbar sind.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=26" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.2.1a Kein Öffnen neuer Fenster beim Laden der Seite</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Beim Laden einer Seite werden keine zusätzlichen Fenster geöffnet.</div>
                        <div class="form-group">
                            <label for="3.2.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.2.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.2.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.2.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.2.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.2.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=47" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.2.2a Keine unerwartete Kontextänderung bei Eingabe</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Formulareingaben führen nicht zu unerwarteten Kontextänderungen.</div>
                        <div class="form-group">
                            <label for="3.2.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.2.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.2.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.2.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.2.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.2.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=63" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.2.3a Navigation einheitlich</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Die Navigationsmechanismen sind üblich und einheitlich.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Das Webangebot ist nicht informationsorientiert oder es besteht nur aus einer Seite.</div>
                        <div class="form-group">
                            <label for="3.2.3a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.2.3a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.2.3a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.2.3a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.2.3a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.2.3a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">3.3 - Zur Fehlervermeidung und -korrektur sind unterstützende Funktionen für die Eingabe bereitzustellen.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=50" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.3.1a Fehlermeldungen hilfreich</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Wird ein Eingabefehler automatisch festgestellt, wird das fehlerhafte Element aufgezeigt und der Fehler wird in Textform beschrieben. Wo sinnvoll, werden Korrekturvorschläge gemacht.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Die Seite hat keine Formulare oder es gibt keine Fehlerbehandlung.</div>
                        <div class="form-group">
                            <label for="3.3.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.3.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.3.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.3.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.3.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.3.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=61" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.3.2a Formularfelder richtig beschriftet</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Beschriftungen von Formularfeldern stehen vor den Eingabefeldern, Label sind richtig verknüpft.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Formularfelder sind nicht vorhanden.</div>
                        <div class="form-group">
                            <label for="3.3.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.3.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.3.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.3.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.3.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.3.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=51" target="_blank" title="ausführliche Beschreibung (neues Fenster)">3.3.4a Fehlervermeidung wird unterstützt</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Verpflichtende Dateneingaben können rückgängig gemacht oder vor dem Abschicken überprüft und korrigiert werden.</div>
                        <div class="form-group">
                            <label for="3.3.4a-Bewertung">Bewertung</label>
                            <select class="form-control" id="3.3.4a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="3.3.4a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="3.3.4a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="3.3.4a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="3.3.4a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="ueberschrift">
                        <div class="col-md-11 col-xs 11">4.1 - Die Kompatibilität mit Benutzeragenten, einschließlich assistiver Technologien, ist sicherzustellen.
                        </div>
                        <div class=" col-md-1 col-xs-1"> Plus </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=27" target="_blank" title="ausführliche Beschreibung (neues Fenster)">4.1.1a Valides HTML</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Das Prüfergebnis des W3C-HTML-Validators ist positiv.</div>
                        <div class="form-group">
                            <label for="4.1.1a-Bewertung">Bewertung</label>
                            <select class="form-control" id="4.1.1a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="4.1.1a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="4.1.1a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="4.1.1a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="4.1.1a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=49" target="_blank" title="ausführliche Beschreibung (neues Fenster)">4.1.1b Verzicht auf veraltete Elemente und Attribute</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> In HTML 4.01 als veraltet eingestufte Elemente und Attribute werden nicht verwendet.</div>
                        <div class="form-group">
                            <label for="4.1.1b-Bewertung">Bewertung</label>
                            <select class="form-control" id="4.1.1b-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="4.1.1b-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="4.1.1b-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="4.1.1b-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="4.1.1b-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-7 col-xs-12">
                        <h4><a href="http://testen.bitv-test.de/index.php?a=di&iid=49" target="_blank" title="ausführliche Beschreibung (neues Fenster)">4.1.2a Name und Rolle von Bedienelementen verfügbar</a></h4>
                        <div><span class="bold">Prüfschritt erfüllt:</span> Interaktive Bedienelemente wie Links und Schaltflächen haben programmatisch ermittelbare Namen und Rollen.</div>
                        <div><span class="bold">Prüfschritt nicht anwendbar:</span> Die Seite enthält keine interaktiven Bedienelemente.</div>
                        <div class="form-group">
                            <label for="4.1.2a-Bewertung">Bewertung</label>
                            <select class="form-control" id="4.1.2a-Bewertung" required>
                                <option value="" disabled selected>bitte wählen</option>
                                <option value="1">ja</option>
                                <option value="2">eher erfüllt</option>
                                <option value="3">teilweise erfüllt</option>
                                <option value="4">eher nicht erfüllt</option>
                                <option value="5">nein</option>
                                <option value="6">nicht anwendbar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="4.1.2a-Anmerkung">Anmerkungen</label>
                            <textarea class="form-control animated" id="4.1.2a-Anmerkung" rows="3" placeholder="Bitte schreiben sie hier Ihre Anmerkungen hinein."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="4.1.2a-Bild">Bild hochladen</label>
                            <input type="file" class="form-control-file" id="4.1.2a-Bild" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Sie können Ihrer Anmerkung ein Bild anhängen.</small>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12">
                        <div class="empfehlung panel">
                            <div>Empfehlung</div>
                            <div>
                                <pre>&lt;a href="kontakt.html"&gt;<br>&lt;img src="briefkasten.gif" <br>alt="Kontakt" /&gt;&lt;/a&gt;</pre>
                            </div>
                            <div>Was, wie und warum wird geprüft?</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <button type="button" onclick="speichern()" name="auswerten" id="auswerten" class="btn btn-primary pull-right" style="margin-left:10px;">Auswerten</button>
                        <button type="submit" onclick="submitform()" name="speichern" id="speichern" class="btn btn-secondary pull-right">Speichern</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
<!-- jQuery (wird für Bootstrap JavaScript-Plugins benötigt) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
<script src="js/bootstrap.min.js"></script>
<script src="js/textAreaAutoSize.js"></script>
<script language="javascript" type="text/javascript">
    $(function() {
        $('.normal').autosize();
        $('.animated').autosize({
            append: "\n"
        });
    });
    document.getElementById('testform').onsubmit = function(e) {
        e.preventDefault();
    }

    function auswerten() {
        var wert1 = document.getElementById("1.1.1a-Bewertung").value;
        console.log("Wert 1", wert1);
    }
    document.getElementById("auswerten").onclick = auswerten;

</script>

</html>
