<h1>Copia e modifica di nuove pagine :</h1>
<center>
  <font class="error">Non modificare copie che sono in prestito!
(<a href="http://sourceforge.net/tracker/index.php?func=detail&aid=1162251&group_id=50071&atid=458474">
Bug 1162251</a>).</font>
</center>
<br><br>

Sottosezione di aiuto:
<ul>
  <li><a href="#desc"></a> Descrizione dei Campi </a></li>
  <li><a href="#barc"></a> <a href="#barc">Numero di codici a barre inserendo una struttura numerazione esterna</a> </li>
  <li><a href="#auto">Autogenerazione codici a barre </a></li>
  <li><a href="#seri"></a> <a href="#seri">Copiare numeri di serie integrati nei numeri di codice a barre</a></li>
</ul>
<br><br>

<a name="desc"></a>La seguente tabella fornisce le descrizioni dei campi per copiare e modificare le pagine.
<br>
<br>

<table class="primary" border ='1'>
  <tr>
    <th>Campo</th>
    <th>Descrizione</th>
  </tr>
  <tr>
    <td class="primary" valign="top">Numero del codice a barre o codice di copia</td>
    <td class="primary" valign="top">Codice di identificazione di una copia (anche conosciuto come numero di serie), devono essere tutti caratteri alfanumerici e/o numerici,
per un massimo di 20 caratteri.<br>
Questo campo è obbligatorio, identifica la copia al momento del prestito<br>
(ora di uscita, di rientro, prenotazione)

<br><br>Vedi anche: 
<a href="../shared/help.php?page=barcodes">Capire i codici a barre</a>
    </td>
  </tr>
  <tr>
    <td class="primary" valign="top">Descrizione</td>
    <td class="primary" valign="top">Testo breve con le caratteristiche uniche della copia.</td>
  </tr>
  <tr>
    <td class="primary" valign="top">Stato</td>
    <td class="primary" valign="top"><b>Unicamente in modifica delle copie</b>.
<br>Vedi anche: 
<a href="../shared/help.php?page=status">Capire i cambi di stato delle bibliografie</a>
    </td>
  </tr>
</table>
<br><br>

<a name="barc">Numero di codice a barre proveniente da numerazione esterna (tramite lettori o scanner)</a>:
<ul>
  <li>Inserire il numero di codice a barre manualmente, oppure utilizzare uno scanner di codici a barre se la copia è etichettata,</li>
  <li>Inviare (genera automaticamente senza controlli) .</li>
</ul>
<br>

<a name="auto">
Mediante l'attivazione dell'opzione di verifica della nuova copia.  
<input name="autocodigo de barras" type="checkbox" checked> Genera automaticamente </a> 
<br><br>
  Se selezionata, GiordanoBruno assegnerà un numro di codice a barre univoco automaticamente, seguendo le regole della struttura interna di numerazione:
<ul>
  <li>La prima parte si calcola a partire dal <i>bibid</i> (numero interno di controllo della base dati) dato che la bibliografia è inviata internamente a GiordanoBruno, con gli zeri a sinistra. 
La lunghezza predeterminata è di 5 cifre, questo può essere cambiato modificando il valore di --  $nzeros nel file biblio_copy_new.php --.</li>
  <li>L'ultima parte è uguale al valore interno <i>copyid</i> della copia.</li>
</ul>
<br><br>

<a name="seri">il numero di serie della copia viene generato in modo integrato con il numero di codice a barre </a>
per facilitare l'introduzione di informazioni della copia quando il numero unico non è stato assegnato, ma solo i numeri di serie di copie multiple di un titolo.
<br>
La pagina di ricerca del codice a barre contiene informazioni sopra 
<a href="../shared/help.php?page=opacLookup#seri">Riconoscere il numero di serie delle copie nel numero del codice a barre autogenerato</a>.
<br>
Aggiungendo copie marcate con la identificazione del numero di serie di una bibliografiaa:
<ul>
  <li>Selezionare Autogenerare,</li>
  <li>mostrare nuove copie finché il numero di serie corrisponde con il numero di codice a barre generato automaticamente al'lultima cifra,</li>
  <li>eliminare le copie le rende non disponibili, modificare lo stato delle altre copie.</li>
</ul>
<br><br>
