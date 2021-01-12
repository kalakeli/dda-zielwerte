<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-12">
                <transition name="fade" mode="out-in" appear>
                  <div>
                    <div class="row">
                      <div class="col-12">
                        <h1>Willkommen beim online durchgeführten Delphi-Verfahren </h1>
                        <p>
                          Wir danken Ihnen herzlich für Ihr Interesse und bedanken uns für
                          Ihre Bereitschaft, an der Zielwertbestimmung (Delphi-Verfahren)
                          teilzunehmen. Bitte lesen Sie sich das Word-Dokument „AnleitungOnlineKonsultation “,
                          das Ihnen mit der Einladung zugesandt wurde, sorgfältig durch
                          und gehen Sie schrittweise danach vor. Falls etwas nicht
                          funktionieren sollte oder Ihnen Informationen fehlen, melden
                          Sie sich bitte per E-Mail an
                          <a href="mailto:trautmann@dda-web.de">Sven Trautmann</a>
                          oder unter Tel.
                          <button type="button" name="button" class="btn btn-sm btn-light" disabled>0251 - 21014014</button>
                          (ebenfalls Sven Trautmann).
                        </p>
                        <p>
                          Die Zielwertbestimmung findet in zwei Runden statt. In Runde
                          Eins wird die Artenauswahl fixiert, in Runde Zwei wird
                          die Schätzung erfolgen.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h2>Bestimmung der Artenauswahl</h2>
                        <p>
                          Die Expert*innen für diese Aufgabe werden vom DDA vorgeschlagen
                          und sollen neben Expertise in der Ökologie der Arten in
                          verschiedenen Lebensräumen idealerweise auch Erfahrung im Bereich der
                          Indikatorentwicklung bzw. Artenauswahl für Indikatoren haben.
                          <strong>Es ist daher nicht möglich, sich selbständig zu
                          registrieren und teilzunehmen!</strong>
                        </p>
                        <p>
                          Sie erhalten für jeden Teilindikator
                          (&bdquo;Agrarlandschaft“, „Wälder“, „Siedlungen“, „Binnengewässer“, „Küsten/Meere“)
                          einen Artenvorschlag
                          des DDA als Ausgangsbasis, der bestätigt oder modifiziert
                          (dann zu begründen) werden kann. Bereitgestellte
                          Artenvorauswahlen und Schemata zur Abdeckung der ökologischen
                          Nischen in den einzelnen Teillebensräumen sollen hierbei
                          die Grundlage für die getroffene Artenauswahl bilden.
                          Bereitgestellte Artenvorauswahlen und Schemata zur Abdeckung der
                          ökologischen Nischen in den einzelnen Teillebensräumen sollen
                          hierbei die Grundlage für die getroffene Artenauswahl bilden.
                        </p>
                        <p>
                          Die Artenauswahlen der einzelnen Expert*innen werden
                          je Teilindikator zusammengefasst. Dabei werden die für die
                          vordefinierten Nischen am häufigsten ausgewählten Arten
                          durch den DDA dazu genutzt, außerhalb des Konsultationsportals
                          für jeden Teilindikator ein neues Nischenschema zu erstellen.
                          Dessen Artenzahl soll mindestens der Anzahl in der Vorauswahl
                          entsprechen. Bei der Zusammenstellung der Schemata wird geprüft,
                          ob durch die jeweilige Artenauswahl auch alle relevanten
                          Nischenkombinationen abgedeckt werden. Falls nicht, wird das jeweilige
                          Schema um weitere häufig durch die Expert*innen ausgewählte Arten
                          ergänzt, bis alle Aspekte, denen Arten zugeordnet werden können,
                          abgedeckt sind.
                        </p>
                        <p>
                          Bereits bei der Vorauswahl durch den DDA wird darauf
                          geachtet, dass möglichst wenige Redundanzen entstehen. Die aus
                          der Abstimmung resultierenden Nischenschemata werden nochmals
                          daraufhin geprüft und gegebenenfalls angepasst. Redundante Arten
                          werden, falls nötig, nach projektinterner Rücksprache begründet
                          ausgeschlossen und dann durch die nächsthäufiger gewählte Art, die fehlende
                          Nischenaspekte abdeckt, ergänzt. Derartige Abweichungen von der
                          Auswahl der Expert*innen werden dokumentiert und ihnen
                          abschließend zugeschickt. Dabei wird eine Frist für Rückmeldungen
                          der Expert*innen mit finalen Änderungswünschen gesetzt. Werden
                          innerhalb dieser Frist gut begründete Änderungswünsche eingebracht,
                          werden geprüft und bei positiver Beurteilung umgesetzt.
                        </p>
                        <p>
                          Nicht in der Vorauswahl enthaltene, durch die Expert*innen
                          eingebrachte Artvorschläge werden berücksichtigt, sofern sie
                          zu den o.g. am häufigsten ausgewählten Arten gehören, relevante
                          Nischenaspekte widerspiegeln und nicht basierend auf einander
                          grundsätzlich widersprechenden Begründungen ausgewählt wurden.
                          Letzteres wird anhand der während der Konsultation abgegebenen
                          Kommentare durch den DDA überprüft.
                        </p>
                        <p>
                          Zur Durchführung der Konsultation wird das Online-Portal für
                          den Zeitraum
                          <button type="button" name="button" class="btn btn-success btn-sm" v-if="consultationStart.length>0" v-model="consultationStart" v-html="consultationStart"></button>
                          -
                          <button type="button" name="button" class="btn btn-success btn-sm" v-if="consultationEnd.length>0" v-model="consultationEnd" v-html="consultationEnd"></button>
                          freigeschaltet.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h3>Bereitgestellte Informationen</h3>
                        <p>
                          Durch den DDA werden für jeden Teilindikator die vorbereiteten
                          ökologischen Nischenschemata dargestellt. Zum dafür verwendeten
                           Nischenkonzept werden Hintergrundinfos zur Vorgehensweise und
                           zum Bezug zu den Strategiepapieren von BfÖSS kurz dargestellt.
                           Die kompletten Herleitungen der Schemata der einzelnen
                           Teilindikatoren werden im Menüpunkt
                           <router-link to="/material">Materialien <sup class="icon anchor"></sup> </router-link>
                           für jeden Teilindikator als
                           pdf-Dokumente zum Download bereitgestellt.
                        </p>
                        <p>
                          Auf den Seiten der einzelnen Teilindikatoren wird zudem die
                          durch den DDA getroffene Artenvorauswahl als Liste präsentiert.
                          Unter der Liste werden zusätzlich die Arten (und die von ihnen
                          repräsentierten Nischen) in einer Textbox genannt, die bei der
                          Erstellung der Nischenschemata als Ersatzarten eingestuft wurden.
                        </p>
                        <p>
                          Diese und alle weiteren regelmäßigen Brutvogelarten können bei
                          Bedarf von den Expert*innen in den weiter unten beschriebenen
                          Auswahlfeldern als Ersatz für die vorausgewählten Arten selektiert werden.
                        </p>
                        <p>
                          Für die durch den DDA vorausgewählten - nicht die zusätzlichen -
                          Arten gibt es einzelne Artseiten, die durch Klick auf den Artnamen
                          aufgerufen werden können. Auf diesen werden weitere Informationen
                          zu den Arten abgebildet, insbesondere in Bezug auf Gefährdung,
                          Bestandstrends und -größen sowie eine grundsätzliche Beschreibung
                          der Lebensraumnische der Art (Quellen dazu werden unten auf der
                          jeweiligen Seite genannt). Ebenso werden Infos zur Eignung als
                          Indikatorart (in Form von Einschätzungen durch den DDA oder auch
                          Hinweisen aus dem ersten F+E-Vorhaben zum Indikator) und zu ihrer
                          bisherigen etwaigen Verwendung als Indikatorart auf Bundes- und
                          Landesebene gegeben. Zusätzlich werden - sofern bekannt - wichtige
                          Einflussfaktoren für die Arten genannt.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <h3>Durchführung der Konsultation</h3>
                        <p>
                          Die <strong>Konsultation wird nach den 4 Teilindikatoren
                          Agrarland, Wald,
                          Siedlungen und Binnengewässer gruppiert</strong>. Auf den Seiten der einzelnen
                          Teilindikatoren ist die Artenvorauswahl im jeweiligen Nischenschema
                          abgebildet und jeder Artname steht auf einem auswählbaren Button,
                          der zur jeweiligen Seite mit Artinformationen weiterleitet.
                          Nebenstehend ist der Artname in einem Dropdownmenü vorausgewählt
                          und kann dort durch Auswahl aus einer Liste aller regelmäßigen
                          Brutvogelarten Deutschlands ersetzt werden. Für nicht vorausgewählte
                          Arten gibt es keine eigenen Artseiten, deren Eignung als Indikatorarten
                          soll einzig durch die Kommentare der Expert*innen, die diese
                          Arten auswählen, klarwerden.
                        </p>
                        <p>
                          Jede Änderung der Artenauswahl muss in einem neben dem Feld zur
                          Artauswahl stehenden Kommentarfeld erläutert und kann erst nach
                          Eingabe eines Kommentars über einen Button rechts der Eingabefelder
                          gespeichert werden. Im Kommentarfeld soll erläutert werden, warum
                          eine Art eine andere ersetzen soll. Die im Nischenschema benannten
                          Ersatzarten werden explizit als Alternativen für bestimmte
                          Nischenaspekte benannt,  die Artenauswahl kann allerdings frei
                          aufgrund der gesamten Artenliste erfolgen.
                        </p>
                        <p>
                          Fehler können durch Klick des Buttons „Informationen zurücksetzen“ rückgängig gemacht werden.
                        </p>
                        <p>
                          Unter der Artenliste finden sich unterhalb der Überschrift
                          <em>„Diese Art soll folgende noch nicht (ausreichend) abgedeckte ökologische Nische ergänzen (bitte erläutern):“</em>
                          3 Zeilen mit leeren Auswahl- und Kommentarfeldern.
                          In der Dropdown-Liste
                          kann eine Vogelart aus der Liste aller regelmäßigen
                          deutschen Brutvogelarten ausgewählt werden, um weitere
                          Arten für ökologische Nischen auszuwählen, wenn nach Meinung
                          der Expert*innen ein Nischenschema nicht oder nicht ausreichend
                          abgedeckt ist.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <p>
                          Die Auswahl der Arten kann also nach zwei Gesichtspunkten erfolgen:
                        </p>
                        <ul class="ddaList">
                          <li>
                            <span class="text text-primary">Eine Art wird ausgewählt, um eine der vorausgewählten
                            Arten zu ersetzen, weil sie für die zu besetzenden Nischenaspekte
                            besser geeignet erscheint.</span> <br>
                            Dann wird sie im Dropdown-Menü der Art, die sie ersetzen soll, ausgewählt.
                            Dabei kann entweder eine der „Ersatzarten“ aus der Vorauswahl
                            (diese sind unterhalb der Liste der vorausgewählten Arten in einer Textbox aufgeführt)
                            oder eine andere Art frei aus der Liste ausgewählt werden. Der Austausch
                            einer Art muss begründet und gespeichert werden, ansonsten gehen die
                            Änderungen beim Verlassen der Seite verloren. Ein
                            Hinweis erscheint in diesem Fall, um dies noch mal zu unterstreichen.
                          </li>
                          <li>
                            <span class="text text-primary">Eine Art wird für einen Nischenaspekt zusätzlich ausgewählt, der aus Sicht
                            der Expert*innen noch nicht ausreichend abgedeckt ist.</span> <br>
                            Dann muss begründet werden, weshalb die Art zusätzlich notwendig ist.
                            Die Auswahl geschieht über eines der leeren Auswahlfelder und muss
                            ebenfalls gespeichert werden.
                          </li>
                        </ul>
                        <h4>Kommentare erwünscht</h4>
                        <p>
                          Jegliche Änderung der Artenauswahl soll begründet werden,
                          d.h. es ist ebenso zu erklären, warum eine Art ausgewählt wurde
                          und warum eine vorausgewählte Art abgewählt wurde. <br>
                          Zusätzlich ist ein Kommentar sinnvoll, wenn eine der durch den
                          DDA vorausgewählten Arten zwar mangels Alternativen auch von
                          den Expert*innen ausgewählt wird, letztlich aber nicht
                          als besonders gut geeignet angesehen wird. Das Gleiche gilt für
                          den Fall, dass die Bedeutung des Nischenaspektes angezweifelt wird,
                          für den eine vorausgewählte Art steht.
                        </p>
                        <h4>Speichern nicht vergessen</h4>
                        <p>
                          Am Ende muss die gesamte Auswahl für jeden Teilindikator gespeichert werden.
                          Bitte beachten Sie, dass bei Änderungen der Artenauswahl
                          diese nur gespeichert werden kann, wenn Begründungen für
                          diese Artauswahl vorhanden sind.
                          <strong class="text text-danger">Bitte beachten Sie, dass Sie auch dann den Teilindikator
                          speichern müssen, wenn Sie keine eigenen Anpassungen vornehmen!</strong>
                          Nur so kann sichergestellt werden, dass Sie als Expert*in
                          an der Artauswahl teilgenommen haben.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">

                      </div>
                    </div>
                  </div>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Introduction',
        data() {
          return {
            consultationEnd: '',
            consultationStart: '',
          }
        },
        methods: {
        },
        mounted() {
            console.log('Materialien mounted...')
        }
    }
</script>
