<h1>Begrijpen van statuswijzigingen van exemplaren:</h1>
Onderstaande tabel geeft een lijst van de statusmogelijkheden van een exemplaar.<br><br>
<table class="primary">
  <tr><th>Status</th><th>Beschrijving</th></tr>
  <tr><td class="primary" valign="top">beschikbaar</td><td class="primary">Het exemplaar staat op het rek en is klaar om uitgeleend te worden.</td></tr>
  <tr><td class="primary" valign="top">uitgeleend</td><td class="primary">Het exemplaar is uitgeleend aan een andere bibliotheekgebruiker.</td></tr>
  <tr><td class="primary" valign="top">gereserveerd</td><td class="primary">Het exemplaar is gereserveerd en opzij gehouden voor een bibliotheekgebruiker die het komt ophalen.</td></tr>
  <tr><td class="primary" valign="top">op de kar</td><td class="primary">Het exemplaar ligt op de kar, klaar om terug in het rek te zetten.</td></tr>
  <tr><td class="primary" valign="top">beschadigd</td><td class="primary">Het exemplaar is beschadigd en is weg voor herstelling.</td></tr>
  <tr><td class="primary" valign="top">toonkast</td><td class="primary">Het exemplaar kan niet uitgeleend worden omdat het in de toonkast staat.</td></tr>
  <tr><td class="primary" valign="top">verloren</td><td class="primary">Het exemplaar kan niet uitgeleend worden want het is verloren.</td></tr>
  <tr><td class="primary" valign="top">op bestelling</td><td class="primary">Het exemplaar is besteld en nog niet aangekomen.</td></tr>
</table>
<br>
Het wijzigen van de status is mogelijk op volgende pagina's met volgende regels.<br><br>
<table class="primary">
  <tr><th>Pagina</th><th>Oude status</th><th>Nieuwe status</th><th>Regels</th></tr>
  <tr>
    <td class="primary" valign="top" rowspan="3">Lid zoeken</td>
    <td class="primary" valign="top">beschikbaar</td>
    <td class="primary" valign="top">uitgeleend</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top">uitgeleend</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">gereserveerd</td>
    <td class="primary" valign="top">uitgeleend</td>
    <td class="primary" valign="top">Enkel toegelaten als de bibliotheeksgebruiker voor een bepaald exemplaar de eerste in de reservatiewachtrij is of wanneer de reservatiewachtrij leeg is.</td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="5">Terugnemen</td>
    <td class="primary" valign="top">uitgeleend</td>
    <td class="primary" valign="top">op de kar</td>
    <td class="primary" valign="top">Zal boetes voor te laat berekenen.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">uitgeleend</td>
    <td class="primary" valign="top">gereserveerd</td>
    <td class="primary" valign="top">Zal telaat boetes berekenen en een bericht tonen om het boek op te bergen voor reservatie.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top">op de kar</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">gereserveerd</td>
    <td class="primary" valign="top">op de kar</td>
    <td class="primary" valign="top">Enkel mogelijk als de reservatiewachtrij voor het boek leeg is.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">op de kar</td>
    <td class="primary" valign="top">beschikbaar</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top" rowspan="3">Catalogus -> Zoeken -> bewerk</td>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top">beschikbaar</td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>
  <tr>
    <td class="primary" valign="top">beschikbaar</td>
    <td class="primary" valign="top">andere<sup>*</sup></td>
    <td class="primary" valign="top"></td>
  </tr>

</table>

<font class="small">* - opmerking: 'andere' is bijvoorbeeld de beschadigd, toonkast of verloren.</font>
