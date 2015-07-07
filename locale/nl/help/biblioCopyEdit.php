<h1>Nieuwe exemplaar en bewerk exemplaar:</h1>

<br><br>

Helponderdelen:
<ul>
  <li><a href="#desc">Veldbeschrijvingen</a></li>
  <li><a href="#barc">Barcodenummers ingeven vanuit een externe nummeringsstructuur</a></li>
  <li><a href="#auto">Barcodenummers - automatisch genereren</a></li>
  <li><a href="#seri">Serienummers voor exemplaarën geïntegreerd in barcodenummers</a></li>
</ul>
<br><br>

<a name="desc">
Volgende tabel geeft beschrijvingen voor de velden op de 'nieuwe exemplaar' en 'bewerk'-pagina's.</a>
<br><br>

<table class="primary">
  <tr><th>Veld</th><th>Beschrijving</th></tr>
  <tr>
    <td class="primary" valign="top">Barcodenummer</td>
    <td class="primary" valign="top">Unieke code die een exemplaar identificeert, moet alfanumeriek zijn en maximum 20 tekens tellen. Dit veld is vereist omdat hiermee de exemplaar geïdentificeerd wordt in de circulatieformulieren (uitlenen, terugnemen, reserveren).
<br>See also: 
<a href="../shared/help.php?page=barcodes">Barcodes begrijpen</a>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">Beschrijven</td>
    <td class="primary" valign="top">Korte tekst die de specifieke eigenschappen van een exemplaar beschrijft.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">Status</td>
    <td class="primary" valign="top"><b>Enkel in 'bewerk exemplaar'</b>.
<br>See also: 
<a href="../shared/help.php?page=status">Statuswijzigingen begrijpen</a>
    </td>
  </tr>
</table>
<br><br>

<a name="barc">Barcodenummers ingeven vanuit een externe nummeringsstructuur</a>:
<ul>
  <li>Geef het barcodenummer manueel in of gebruik een barcodelezer als de exemplaar al een label heeft,</li>
  <li>Bewaren (Geen vinkje bij 'Barcode automatisch genereren').</li>
</ul>
<br>

<a name="auto">
Door een nieuw exemplaar in te sturen met de <input name="autobarco" type="checkbox" checked> Barcode automatisch genereren</a> 
-optie voor het barcodeveld aangevinkt, probeert Openbiblio een uniek nummer automatisch toe te kennen aan jouw nieuw exemplaar. Hiervoor worden de regels van de interne nummeringsstructuur gevolgd:<ul>
  <li>Het eerste deel wordt berekend uit het <i>bibid</i> waardoor de bibliografie intern bekend is door Openbiblio, met voorloopnullen. De standaard lengte is 5 tekens. Dit kan gewijzigd worden door de waarde voor $nzeros in biblio_copy_new.php te bewerken</li>
  <li>Het laatste deel is gelijk aan <i>copyid</i> van het exemplaar.</li>
</ul>
<br><br>

<a name="seri">
Exemplaar serienummers geïntegreerd in barcodenummers</a> maken het mogelijk om informatie te kopiëren van een eenvoudig kaartensysteem wanneer er geen unieke nummers toegewezen zijn, enkel serienummers voor meerdere exemplaren van een titel. 
<br>
De 'Barcode zoeken'-pagina geeft informatie over
<a href="../shared/help.php?page=opacLookup#seri">herkennen van exemplaar serienummers in automatisch gegenereerde barcodenummers</a>.
<br>
Wanneer je exemplaren wil toevoegen met serienummeridentificatie moet je:
<ul>
  <li>Barcode automatisch genereren inschakelen,</li>
  <li>Nieuwe exemplaren ingeven tot het exemplaar serienummer overeenkomt met de laatste tekens van de automatisch gegenereerde barcode,</li>
  <li>Verwijder onbestaande exemplaren, bewerk de status van de andere exemplaren.</li>
</ul>
<br><br>
