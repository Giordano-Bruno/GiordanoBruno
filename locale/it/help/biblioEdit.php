<h1>Nuova Bibliografia e modifica:</h1>
La nuova bibliografia e la pagina modifica (Edit-Basic) sono basate sul formato standard 
<a href="javascript:popSecondaryLarge('http://www.loc.gov/marc')">MARC 21</a>.<br>
solo un piccolo sottoinsieme delle centinaia di campi MARC sono inclusi in questa pagina di modifica di base<br>
per rendere più facile aggiungere bibliografie. <br>
Una volta che è stata aggiunta una bibliografia quindi è possibile aggiungere qualsiasi campo MARC 21 con la pagina di modifica MARC.
<br>
Dopo aver aggiunto una nuova bibliografia è necessario aggiungere copie di questa bibliografia prima che sia disponibile per il prestito.
<br><br>
Sottosezione aiuto:
<ul>
  <li><a href="#desc">Campo di descrizione</a></li>
  <li><a href="#samp">Dati di esempio</a></li>
</ul>
<br><br>
<a name="desc">
La tabella seguente offre una descrizione per il campo situato nel menù di mofdifica di base.</a>
<br><br>

I campi marcati con * sono richiesti.</font>
<table class="primary">
  <tr>
    <th colspan="2" valign="top" nowrap="yes" align="left">
      Aggiungere nuova Bibliografia:
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <sup>*</sup> Tipo dei materiali:
    </td>
    <td valign="top" class="primary">
<select id="materialCd" name="materialCd" onChange="matCdReload()">
<option value="1">audio casette</option>
<option value="3">cd audio</option>
<option value="4">cd software</option>
<option value="5">attrezzature</option>
<option value="2" selected>libri</option>
<option value="7">mappe</option>
<option value="6">Riviste</option>
<option value="8">video/dvd</option>
</select>
	  </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <sup>*</sup> Collezioni:
    </td>
    <td valign="top" class="primary">
      <select id="collectionCd" name="collectionCd" onChange="modified=true" >
<option value="3" >Cassette</option>
<option value="4" >CD</option>
<option value="1" >Fiction per adulti</option>
<option value="7" >Fiction per giovani</option>
<option value="6" >Lettura Facilitata</option>
<option value="2" >Non fiction per adulti</option>
<option value="8" >Non fiction per giovani</option>
<option value="9" >Novità</option>
<option value="5" >PC Software</option>
<option value="10" >Periodici</option>
<option value="11" >Referenze</option>
<option value="12" >Video e DVD</option>
</select>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      <sup>*</sup> Numero di ingresso:
    </td>
    <td valign="top" class="primary">
      <input type="text" name="callNmbr1" size="20" maxlength="20" style="visibility: visible" onChange="modified=true" /><br>
      <input type="text" name="callNmbr2" size="20" maxlength="20" style="visibility: visible" onChange="modified=true" /><br>
      <input type="text" name="callNmbr3" size="20" maxlength="20" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary" valign="top">
      Mostrare in OPAC:
    </td>
    <td valign="top" class="primary">
      <input type="checkbox" name="opacFlg" value="CHECKED"
        CHECKED >
    </td>
  </tr>

  <tr>
    <td colspan="2" nowrap="true" class="primary">
      <b>Campi USMarc:</b>
    </td>
  </tr>
  <tr><td class="primary" valign="top">
<sup>*</sup> Titolo:
</td>
<td valign="top" class="primary">
<input type="text" name="values[245a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="245a" >
<input type="hidden" name="tags[245a]" value="245" >
<input type="hidden" name="subfieldCds[245a]" value="a" >
<input type="hidden" name="fieldIds[245a]" value="" >
<input type="hidden" name="requiredFlgs[245a]" value="1" >
</td></tr>
  <tr><td class="primary" valign="top">
Resto del titolo:
</td>
<td valign="top" class="primary">
<input type="text" name="values[245b]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="245b" >
<input type="hidden" name="tags[245b]" value="245" >
<input type="hidden" name="subfieldCds[245b]" value="b" >
<input type="hidden" name="fieldIds[245b]" value="" >
<input type="hidden" name="requiredFlgs[245b]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Dichiarazione di responsabilità, etc.:
</td>
<td valign="top" class="primary">
<input type="text" name="values[245c]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="245c" >
<input type="hidden" name="tags[245c]" value="245" >
<input type="hidden" name="subfieldCds[245c]" value="c" >
<input type="hidden" name="fieldIds[245c]" value="" >
<input type="hidden" name="requiredFlgs[245c]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
<sup>*</sup> Nome Personale:
</td>
<td valign="top" class="primary">
<input type="text" name="values[100a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="100a" >
<input type="hidden" name="tags[100a]" value="100" >
<input type="hidden" name="subfieldCds[100a]" value="a" >
<input type="hidden" name="fieldIds[100a]" value="" >
<input type="hidden" name="requiredFlgs[100a]" value="1" >
</td></tr>
    <td nowrap="true" class="primary">
      Selezionare il file autore da caricare.<sup>(5)</sup>: 
    </td>
      <td colspan="2" nowrap="true" class="primary">

	<input type="file" name="file_autor"   onChange="File_AutorReload()">
  </td>
    <tr><td class="primary" valign="top">
File immagine dell'autore:
</td>
<td valign="top" class="primary">
<input type="text" name="values[902c]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="902c" >
<input type="hidden" name="tags[902c]" value="902" >
<input type="hidden" name="subfieldCds[902c]" value="c" >
<input type="hidden" name="fieldIds[902c]" value="" >
<input type="hidden" name="requiredFlgs[902c]" value="" >
</td></tr>
  </td>
<br/>
  <tr><td class="primary" valign="top">
Nome geografico come elemento di ingresso:
</td>
<td valign="top" class="primary">
<input type="text" name="values[650a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="650a" >
<input type="hidden" name="tags[650a]" value="650" >
<input type="hidden" name="subfieldCds[650a]" value="a" >
<input type="hidden" name="fieldIds[650a]" value="" >
<input type="hidden" name="requiredFlgs[650a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Nome geografico come elemento di ingresso 2:
</td>
<td valign="top" class="primary">
<input type="text" name="values[650a1]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="650a1" >
<input type="hidden" name="tags[650a1]" value="650" >
<input type="hidden" name="subfieldCds[650a1]" value="a" >
<input type="hidden" name="fieldIds[650a1]" value="" >
<input type="hidden" name="requiredFlgs[650a1]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Nome geografico come elemento di ingresso 3:
</td>
<td valign="top" class="primary">
<input type="text" name="values[650a2]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="650a2" >
<input type="hidden" name="tags[650a2]" value="650" >
<input type="hidden" name="subfieldCds[650a2]" value="a" >
<input type="hidden" name="fieldIds[650a2]" value="" >
<input type="hidden" name="requiredFlgs[650a2]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Nome geografico come elemento di ingresso 4:
</td>
<td valign="top" class="primary">
<input type="text" name="values[650a3]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="650a3" >
<input type="hidden" name="tags[650a3]" value="650" >
<input type="hidden" name="subfieldCds[650a3]" value="a" >
<input type="hidden" name="fieldIds[650a3]" value="" >
<input type="hidden" name="requiredFlgs[650a3]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Nome geografico come elemento di ingresso 5:
</td>
<td valign="top" class="primary">
<input type="text" name="values[650a4]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="650a4" >
<input type="hidden" name="tags[650a4]" value="650" >
<input type="hidden" name="subfieldCds[650a4]" value="a" >
<input type="hidden" name="fieldIds[650a4]" value="" >
<input type="hidden" name="requiredFlgs[650a4]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Edizione:
</td>
<td valign="top" class="primary">
<input type="text" name="values[250a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="250a" >
<input type="hidden" name="tags[250a]" value="250" >
<input type="hidden" name="subfieldCds[250a]" value="a" >
<input type="hidden" name="fieldIds[250a]" value="" >
<input type="hidden" name="requiredFlgs[250a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Numero di controllo LC:
</td>
<td valign="top" class="primary">
<input type="text" name="values[010a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="010a" >
<input type="hidden" name="tags[010a]" value="10" >
<input type="hidden" name="subfieldCds[010a]" value="a" >
<input type="hidden" name="fieldIds[010a]" value="" >
<input type="hidden" name="requiredFlgs[010a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Numero di bibliografia nazionale:
</td>
<td valign="top" class="primary">
<input type="text" name="values[020a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="020a" >
<input type="hidden" name="tags[020a]" value="20" >
<input type="hidden" name="subfieldCds[020a]" value="a" >
<input type="hidden" name="fieldIds[020a]" value="" >
<input type="hidden" name="requiredFlgs[020a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Library of congress call number (Numero di Classificazione):
</td>
<td valign="top" class="primary">
<input type="text" name="values[050a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="050a" >
<input type="hidden" name="tags[050a]" value="50" >
<input type="hidden" name="subfieldCds[050a]" value="a" >
<input type="hidden" name="fieldIds[050a]" value="" >
<input type="hidden" name="requiredFlgs[050a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Library of congress call number (numero elemento):
</td>
<td valign="top" class="primary">
<input type="text" name="values[050b]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="050b" >
<input type="hidden" name="tags[050b]" value="50" >
<input type="hidden" name="subfieldCds[050b]" value="b" >
<input type="hidden" name="fieldIds[050b]" value="" >
<input type="hidden" name="requiredFlgs[050b]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Numero classificazione decimale Dewey (numero di Classificazione):
</td>
<td valign="top" class="primary">
<input type="text" name="values[082a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="082a" >
<input type="hidden" name="tags[082a]" value="82" >
<input type="hidden" name="subfieldCds[082a]" value="a" >
<input type="hidden" name="fieldIds[082a]" value="" >
<input type="hidden" name="requiredFlgs[082a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Numero classificazione decimale Dewey (Numero di edizione):
</td>
<td valign="top" class="primary">
<input type="text" name="values[0822]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="0822" >
<input type="hidden" name="tags[0822]" value="82" >
<input type="hidden" name="subfieldCds[0822]" value="2" >
<input type="hidden" name="fieldIds[0822]" value="" >
<input type="hidden" name="requiredFlgs[0822]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Luogo di pubblicazione, distribuzione, etc.:
</td>
<td valign="top" class="primary">
<input type="text" name="values[260a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="260a" >
<input type="hidden" name="tags[260a]" value="260" >
<input type="hidden" name="subfieldCds[260a]" value="a" >
<input type="hidden" name="fieldIds[260a]" value="" >
<input type="hidden" name="requiredFlgs[260a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Nome dell\'editore, del distribtore, etc.:
</td>
<td valign="top" class="primary">
<input type="text" name="values[260b]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="260b" >
<input type="hidden" name="tags[260b]" value="260" >
<input type="hidden" name="subfieldCds[260b]" value="b" >
<input type="hidden" name="fieldIds[260b]" value="" >
<input type="hidden" name="requiredFlgs[260b]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Data di pubblicazione, distribuzione, etc.:
</td>
<td valign="top" class="primary">
<input type="text" name="values[260c]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="260c" >
<input type="hidden" name="tags[260c]" value="260" >
<input type="hidden" name="subfieldCds[260c]" value="c" >
<input type="hidden" name="fieldIds[260c]" value="" >
<input type="hidden" name="requiredFlgs[260c]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Sommario, note, etc.:
</td>
<td valign="top" class="primary">
<input type="text" name="values[520a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="520a" >
<input type="hidden" name="tags[520a]" value="520" >
<input type="hidden" name="subfieldCds[520a]" value="a" >
<input type="hidden" name="fieldIds[520a]" value="" >
<input type="hidden" name="requiredFlgs[520a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Descrizione fisica (Estensione):
</td>
<td valign="top" class="primary">
<input type="text" name="values[300a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="300a" >
<input type="hidden" name="tags[300a]" value="300" >
<input type="hidden" name="subfieldCds[300a]" value="a" >
<input type="hidden" name="fieldIds[300a]" value="" >
<input type="hidden" name="requiredFlgs[300a]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Descrizione fidsica (Altri dettagli fisici):
</td>
<td valign="top" class="primary">
<input type="text" name="values[300b]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="300b" >
<input type="hidden" name="tags[300b]" value="300" >
<input type="hidden" name="subfieldCds[300b]" value="b" >
<input type="hidden" name="fieldIds[300b]" value="" >
<input type="hidden" name="requiredFlgs[300b]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Descrizione fidsica (Dimensioni):
</td>
<td valign="top" class="primary">
<input type="text" name="values[300c]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="300c" >
<input type="hidden" name="tags[300c]" value="300" >
<input type="hidden" name="subfieldCds[300c]" value="c" >
<input type="hidden" name="fieldIds[300c]" value="" >
<input type="hidden" name="requiredFlgs[300c]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Descrizione fidsica (Accompagnamento della materia):
</td>
<td valign="top" class="primary">
<input type="text" name="values[300e]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="300e" >
<input type="hidden" name="tags[300e]" value="300" >
<input type="hidden" name="subfieldCds[300e]" value="e" >
<input type="hidden" name="fieldIds[300e]" value="" >
<input type="hidden" name="requiredFlgs[300e]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Terminidi disponibilità:
</td>
<td valign="top" class="primary">
<input type="text" name="values[020c]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="020c" >
<input type="hidden" name="tags[020c]" value="20" >
<input type="hidden" name="subfieldCds[020c]" value="c" >
<input type="hidden" name="fieldIds[020c]" value="" >
<input type="hidden" name="requiredFlgs[020c]" value="" >
</td></tr>
  <tr><td class="primary" valign="top">
Prezzo di acquisto:
</td>
<td valign="top" class="primary">
<input type="text" name="values[541h]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="541h" >
<input type="hidden" name="tags[541h]" value="541" >
<input type="hidden" name="subfieldCds[541h]" value="h" >
<input type="hidden" name="fieldIds[541h]" value="" >
<input type="hidden" name="requiredFlgs[541h]" value="" >
</td></tr>
    <td nowrap="true" class="primary">
      Selezionare file della cpertina<sup>(2)</sup>: 
    </td>
      <td colspan="2" nowrap="true" class="primary">
	<input type="file" name="file_portada"   onChange="File_ReloadK()">
    <tr><td class="primary" valign="top">
File immagine della copertina:
</td>
<td valign="top" class="primary">
<input type="text" name="values[902a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="902a" >
<input type="hidden" name="tags[902a]" value="902" >
<input type="hidden" name="subfieldCds[902a]" value="a" >
<input type="hidden" name="fieldIds[902a]" value="" >
<input type="hidden" name="requiredFlgs[902a]" value="" >
</td></tr>
  </td>
  </td>
<br/>
    <td nowrap="true" class="primary">
      Selezionare file della controcopertina<sup>(3)</sup>: 
    </td>
      <td colspan="2" nowrap="true" class="primary">
	<input type="file" name="file_contra_portada"   onChange="File_ContReload()">
  </td>
    <tr><td class="primary" valign="top">
File immagine della controcopertina:
</td>
<td valign="top" class="primary">
<input type="text" name="values[902b]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="902b" >
<input type="hidden" name="tags[902b]" value="902" >
<input type="hidden" name="subfieldCds[902b]" value="b" >
<input type="hidden" name="fieldIds[902b]" value="" >
<input type="hidden" name="requiredFlgs[902b]" value="" >
</td></tr>
  </td>
<br/>
    <td nowrap="true" class="primary">
      Selezionare file digitale da caricare<sup>(4)</sup>: 
    </td>
      <td colspan="2" nowrap="true" class="primary">
	<input type="file" name="digital"   onChange="File_DigReload()">
  </td>
    <tr><td class="primary" valign="top">
Materiale digitale:
</td>
<td valign="top" class="primary">
<input type="text" name="values[903a]" size="20" maxlength="300" value="" ><input type="hidden" name="indexes[]" value="903a" >
<input type="hidden" name="tags[903a]" value="903" >
<input type="hidden" name="subfieldCds[903a]" value="a" >
<input type="hidden" name="fieldIds[903a]" value="" >
<input type="hidden" name="requiredFlgs[903a]" value="" >
</td></tr>
  </td>
<br/>
  </td>
    <tr><td class="primary" valign="top">
Caratteristiche del file:
</td>
<td valign="top" class="primary">
<input type="text" name="values[256a]" size="20" maxlength="300" value="" ><sup>(6)</sup><input type="hidden" name="indexes[]" value="256a" >
<input type="hidden" name="tags[256a]" value="256" >
<input type="hidden" name="subfieldCds[256a]" value="a" >
<input type="hidden" name="fieldIds[256a]" value="" >
<input type="hidden" name="requiredFlgs[256a]" value="" >
</td></tr>
  </td>

<br/>
  <tr>
    <td align="center" colspan="2" class="primary">
   <p><sup>(2)</sup>L\'immagine della copertina deve essere localizzata in /media/covers.</p>
   <p><sup>(3)</sup>L\'immagine della controcopertina deve essere localizzata in /media/covers.</p>
   <p><sup>(4)</sup>Los materiales digitales deben estar en la carpeta, libros  /openbiblio/libros/.</p>
   <p><sup>(5)</sup>Los materiales digitales deben estar en la carpeta, libros  /openbiblio/libros/.</p>
   <p><sup>(6)</sup>Non modificare, è automatico.</p>
<p><sup>(Nota: )</sup>Se il file dell\'autore si chiama nomecognome.jpg viene unito automaticamente</p>
<p><sup>(Nota2: )</sup>Sono accettate solo immagini jpg, tif, png</p>
      <input type="submit" value="Enviar" class="button" name="enviar">
      <input type="button" onClick="self.location='../catalog/index.php'" value="Cancelar" class="button">
    </td>
  </tr>
</table>
<font face="Arial, Helvetica, sans-serif" size="1" color="#000000"><br>
</font>
    </td>
  </tr>
</table>

