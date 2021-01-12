<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-12">
                <transition name="fade" mode="out-in" appear>
                  <div>
                    <div class="row">
                      <div class="col-12">
                        <h1>Materialien </h1>
                        <p>
                          Wir haben für Sie hier einige Downloads zusammengestellt.
                          Diese Dateien bilden neben Ihrem Fachwissen die Grundlage
                          für Ihre Zielwertschätzungen und sollten vor Beginn der
                          Zielwertschätzung sorgfältig gelesen werden. Falls es
                          Fragen gibt, können Sie sich direkt an
                          <a href="mailto:trautmann@dda-web.de">Sven Trautmann</a> wenden.
                        </p>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-6 border-right">
                          <p>
                            Informationen zu Beständen und Bestandsveränderungen aller für den Indikator zu berücksichtigenden Arten
                            („Vorlage Artunterlagen“)
                          </p>
                          <p>
                            <button type="button" class="btn btn-dark btn-s" name="button">
                              <span class="icon save"></span>&nbsp; Datei herunterladen
                            </button>
                          </p>
                      </div>
                      <div class="col-6">
                          <p>
                            Informationen zu Leitlinien und Strategien zu Veränderungen der Landnutzung. Diese sind unterteilt in ein allgemeines, zusammenfassendes Dokument („Delphi-Verfahren“) und Dokumente für jeden Teilindikator („Arbeitsblatt Agrarlandschaft“, „Arbeitsblatt Wälder“, „Arbeitsblatt Siedlungen“, „Arbeitsblatt Binnengewässer“, „Arbeitsblatt Küsten/Meere“)
                          </p>
                          <p>
                            <button type="button" class="btn btn-dark btn-s" name="button">
                              <span class="icon save"></span>&nbsp; Datei herunterladen
                            </button>
                          </p>                          
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
        name: 'ProjectModuleList',
        data() {
          return {

          }
        },
        methods: {
        },
        mounted() {
            console.log('Materialien mounted...')
        }
    }
</script>
