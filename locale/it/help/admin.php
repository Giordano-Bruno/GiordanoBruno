<h1><font class="li"><font class="title"><B>Aiuto per il modulo di amministrazione:</B></h1>
<br><br>
Sottosezione aiuto:
<ul>
  <li><a href="#Administración" title="Questo modulo permette di configurare e gestire la biblioteca.">
<font class="li">Amministrazione.</font></a></li>
  <li><a href="#Administración de bibliotecarios"><font class="li">Amministrazione dei bibliotecari.</font></a></li>
  <li><a href="#Configuración de la biblioteca"><font class="li">Configurazione della biblioteca.</font></a></li>

  <li><a href="#Grupos de usuarios"><font class="li">Gruppi di utenti.</font></a></li>
  <li><a href="#Grados de usuario"><font class="li">Gradi degli utenti.</font></a></li>
  <li><a href="#Personalización de Campos de datos para las copias"><font class="li">Personalizzazione dei campi dati per le copie.</font></a></li>
  <li><a href="#Tipos de material"><font class="li">Tipi di materiali</font></a></li>
  <li><a href="#Estado de Materiales"><font class="li">Stato dei Materiali.</font></a></li>
  <li><a href="#Colecciones"><font class="li">Collezioni.</font></a></li>
  <li><a href="#Gestionar privilegios"><font class="li">Gestione privilegi.</font></a></li>
  <li><a href="#Búsqueda de portadas"><font class="li">Ricerca copertine.</font></a></li>
  <li><a href="#Opciones Z39.50"><font class="li">Opzioni Z39.50.</font></a></li>
  <li><a href="#Servidores Z39.50"><font class="li">Server Z39.50.</font></a></li>
  <li><a href="#Búsqueda masiva de datos vía ISBN"><font class="li">Ricerca massiva dei dati via ISBN.</font></a></li>
  <li><a href="#Temas de diseño"><font class="li">Aspetto grafico.</font></a></li>
  <li><a href="#Importar/Exportar"><font class="li">Importare/Esportare.</font></a></li>
  <li><a href="#phpinfo.php"><font class="li">phpinfo.php.</font></a></li>
</ul>

<a name="Administración"><B>Amministrazione</B></a></br>

   <link TITLE="" HREF=""> 

<h1>
<P>
Questo modulo permette di configurare e gestire la biblioteca.
</P>
</h1>

Usare il menu a sinistra per selezionare.

<BLOCKQUOTE>
<div CLASS="CHAPTER">
<HR>

<A NAME="Administración de bibliotecarios"><B>Amministrazione dei bibliotecari</B></a></br>


<a href="../admin/staff_new_form.php?reset=Y">Aggiungere nuovo bibliotecario</a><br><br>
<h1>Lista dei bibliotecari:</h1>
<table class="primary">
  <tr>
    <th colspan="3" rowspan="2" valign="top">
      Funzioni    </th>
    <th rowspan="2" valign="top" nowrap="yes">
      Cognome:    </th>
    <th rowspan="2" valign="top" nowrap="yes">
      Nome:    </th>
    <th rowspan="2" valign="top">
      Utente:    </th>
    <th colspan="5">
      Permessi:    </th>
    <th rowspan="2" valign="top">
      Sospeso:    </th>
  </tr>
  <tr>
    <th>
      Prestito    </th>
    <th>
      Aggiornamento utente    </th>
    <th>
      Catalogazione    </th>
    <th>
      Amministrazione    </th>
    <th>
      Stampe    </th>
  </tr>
    <tr>
    <td valign="top" class="primary">
      <a href="../admin/staff_edit_form.php?UID=1" class="primary">modifica</a>
    </td>
    <td valign="top" class="primary">
      <a href="../admin/staff_pwd_reset_form.php?UID=1" class="primary">password</a>
    </td>
    <td valign="top" class="primary">
      <a href="../admin/staff_del_confirm.php?UID=1&amp;LAST=Root+Administrator&amp;FIRST=" class="primary">eliminare</a>
    </td>
    <td valign="top" class="primary">
      Amministratore principale    </td>
    <td valign="top" class="primary">
          </td>
    <td valign="top" class="primary">
      admin    </td>
    <td valign="top" class="primary">
      Sì    </td>
    <td valign="top" class="primary">
      Sì    </td>
    <td valign="top" class="primary">
      Sì    </td>
    <td valign="top" class="primary">
      Sì    </td>
    <td valign="top" class="primary">
      Sì    </td>
    <td valign="top" class="primary">
      No    </td>
  </tr>
  </table>








<A NAME="Configuración de la biblioteca"><B>Configurazione della biblioteca</B></a></br>



<br><br>



<form name="editsettingsform" method="POST" action="../admin/settings_edit.php">
<input type="hidden" name="code" value="">
<table class="primary">
  <tr>
    <th colspan="2" nowrap="yes" align="left">
      Modificare le proprietà della biblioteca:    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Nome della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryName" name="libraryName" value="Biblioteca, Giordano Bruno" size="40" maxlength="128" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL del logo della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryImageUrl" name="libraryImageUrl" value="../images/sampleLogo.png" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Mostrare solo il logo nella intestazione:    </td>
    <td valign="top" class="primary">
      <input type="checkbox" name="isUseImageSet" value="CHECKED"
         >
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Orario della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryHours" name="libraryHours" value="M-F 8am-9pm, Sa noon-5pm, Su 1-5pm" size="40" maxlength="128" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Indirizzo della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryAders" name="libraryAders" value="Calle 5, No 23, Col Sol, México, D. F." size="40" maxlength="40" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Telefono della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryPhone" name="libraryPhone" value="111-222-3333" size="40" maxlength="40" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL della biblioteca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="libraryUrl" name="libraryUrl" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      URL dell\' OPAC:    </td>
    <td valign="top" class="primary">
      <input type="text" id="opacUrl" name="opacUrl" value="../opac/index.php" size="40" maxlength="300" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
     Durata della sessione:    </td>
    <td valign="top" class="primary">
      <input type="text" id="sessionTimeout" name="sessionTimeout" value="20" size="3" maxlength="3" style="visibility: visible" onChange="modified=true" /> minuti    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Risultati della ricerca:    </td>
    <td valign="top" class="primary">
      <input type="text" id="itemsPerPage" name="itemsPerPage" value="10" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />articoli per pagina    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Pulire lo storico della bibliografia:    </td>
    <td valign="top" class="primary">
      <input type="text" id="purgeHistoryAfterMonths" name="purgeHistoryAfterMonths" value="6" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />meses    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Bloccare il prestito in caso di multa:    </td>
    <td valign="top" class="primary">
      <input type="checkbox" name="isBlockCheckoutsWhenFinesDue" value="CHECKED"
        CHECKED >
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Durata massima prenotazione:    </td>
    <td valign="top" class="primary">
      <input type="text" id="holdMaxDays" name="holdMaxDays" value="14" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />giorni    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">
      Lingua:    </td>
    <td valign="top" class="primary">
      <select name="locale">
        <option value="es" selected>Spagnolo</option>
        <option value="en">English</option>
        <option value="it">Italiano</option>
      </select>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Set di caratteri HTML:    </td>
    <td valign="top" class="primary">
      <input type="text" id="charset" name="charset" value="UTF-8" size="20" maxlength="20" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Atributi di etichetta HTML:    </td>
    <td valign="top" class="primary">
      <input type="text" id="htmlLangAttr" name="htmlLangAttr" size="8" maxlength="8" style="visibility: visible" onChange="modified=true" />    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Autoaggiornamento utenti inattivi in:     </td>
    <td valign="top" class="primary">
      <input type="text" id="inactiveMemberAfterDays" name="inactiveMemberAfterDays" value="90" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" />giorni    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Tipo di font:    </td>
    <td valign="top" class="primary">
      <select name="fontNormal"><option value="Code39JK" >Code39JK</option>
<option value="Courier" >Courier</option>
<option value="Courier-Bold" >Courier-Bold</option>
<option value="Courier-BoldOblique" >Courier-BoldOblique</option>
<option value="Courier-Oblique" >Courier-Oblique</option>
<option value="Helvetica" >Helvetica</option>
<option value="Helvetica-Bold" >Helvetica-Bold</option>
<option value="Helvetica-BoldOblique" >Helvetica-BoldOblique</option>
<option value="Helvetica-Oblique" >Helvetica-Oblique</option>
<option value="Symbol" >Symbol</option>
<option value="Times-Bold" >Times-Bold</option>
<option value="Times-BoldItalic" >Times-BoldItalic</option>
<option value="Times-Italic" >Times-Italic</option>
<option value="Times-Roman" >Times-Roman</option>
<option value="ZapfDingbats" >ZapfDingbats</option>
<option value="free3of9x" >free3of9x</option>
<option value="freesans" >freesans</option>
<option value="garuda" >garuda</option>
<option value="helvetica" >helvetica</option>
<option value="th-sarabun" selected="selected">th-sarabun</option>
<option value="ubuntu" >ubuntu</option>
</select>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      Grandezza del font:    </td>
    <td valign="top" class="primary">
      <input type="text" id="fontSize" name="fontSize" value="14" size="2" maxlength="2" style="visibility: visible" onChange="modified=true" /> pt    </td>
  </tr>
  <tr>
    <td align="center" colspan="2" class="primary">
      <input type="submit" value="  Actualizar  " class="button">
    </td>
  </tr>

</table>
      </form>

UTF-8 e ISO-8859-1, sono adatti per mostrare i caratteri spagnoli.
<br><br>






<A NAME="Grupos de usuarios"><B>Gruppi di utenti</B></a></br>


<a title="Logo de la web" alt="Texto alternativo"  href="../admin/mbr_classify_new_form.php?reset=Y">Aggiungere nuovo gruppo di utenti</a><br>
<h1>Gruppi di utenri:</h1>
<table class="primary">
  <tr>
    <th colspan="2" valign="top">Funzione      <font class="small">*</font>
    </th>
    <th valign="top">
      Descrizione    </th>
    <th valign="top">
      Massimo delle multe    </th>
    <th valign="top">
      Utenti    </th>
  </tr>
    <tr>
    <td valign="top" class="primary">
      <a href="../admin/mbr_classify_edit_form.php?code=1" class="primary">Modificare</a>
    </td>
    <td valign="top" class="primary">
      eliminare    </td>
    <td valign="top" class="primary">
      adulti    </td>
    <td valign="top" class="primary">
      0.00    </td>
    <td valign="top" align="center"  class="primary">
      2    </td>
  </tr>
    <tr>
    <td valign="top" class="alt1">
      <a href="../admin/mbr_classify_edit_form.php?code=2" class="alt1">Modificare</a>
    </td>
    <td valign="top" class="alt1">
      eliminare    </td>
    <td valign="top" class="alt1">
      giovani    </td>
    <td valign="top" class="alt1">
      0.00    </td>
    <td valign="top" align="center"  class="alt1">
      1    </td>
  </tr>
  </table>
<br>
<table class="primary"><tr><td valign="top" class="noborder"><font class="small">*Nota:</font></td>
<td class="noborder"><font class="small">La funzione di eliminazione è disponibile solo se la classificazione ha un numero di membri pari a zero. Se si desidera eliminare una classificazione con dei membri presenti alsuo interno, prima spostare i membri ad una altra classificazione.<br></font>
</td></tr></table>








<A NAME="Grados de usuario"><B>Gradi degli utenti</B></a></br>
<A NAME="Personalización de Campos de datos para las copias"><B>Personalizzazione dei campi per le copie</B></a></br>
<A NAME="Búsqueda masiva de datos vía ISBN"><B>Ricerca massiva dei dati via ISBN</B></a></br>
<A NAME="Tipos de material"><B>Tipi di materiali</B></a></br>
<A NAME="Estado de Materiales"><B>Stato dei Materiali</B></a></br>
<A NAME="Colecciones"><B>Collezioni</B></a></br>
<A NAME="Gestionar privilegios"><B>Gestione dei privilegi</B></a></br>
<A NAME="Búsqueda de portadas"><B>Ricerca delle copertine</B></a></br>
<A NAME="Colecciones"><B>Collezioni</B></a></br>
<A NAME="Opciones Z39.50"><B>Opzioni Z39.50</B></a></br>
<A NAME="Servidores Z39.50"><B>Server Z39.50</B></a></br>
<A NAME="Búsqueda masiva de datos vía ISBN"><B>Ricerca massiva dei dati via ISBN</B></a></br>
<A NAME="Temas de diseño"><B>Aspetto grafico</B></a></br>
<A NAME="Importar/Exportar"><B>Importare/Esportare</B></a></br>
<A NAME="phpinfo.php"><B>phpinfo.php</B></a></br>
<A NAME="Ayuda"><B>Aiuto</B></a></br>


<p>Autori di questa sezione:
<ul>
	<li><a href="mailto:joanaga@hotmail.com">José Antonio Lara Galindo</a>
	
</ul>
   Licenza Pubblica GNU
   <link TITLE="Proyecto GNU" HREF="http://www.gnu.org">