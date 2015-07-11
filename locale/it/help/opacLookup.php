<h1>pagina di ricerca per codice a barre:</h1>
<br><br>
Nel collegamento della ricerca nel formato orario di uscita, di arrivo e prenotazione si apre una finestra pop-up secondaria praticamente identica al
catalgo dell'Accesso al Catalogo on-line (OPAC). Nelle pagine dei risultati di ricerca, ogni copia del codice a barre ha collegamenti aggiuntivi
(Rivedere uscite/entrate | prenotare). Quando si seleziona questa ricerca della finestra comparsa  restituisce il codice a barre del modulo corrispondente, pronto per essere utilizzato.
<br><br>

Sottosezione aiuto:
<ul>
  <li><a href="#exam">Esempio: Selezionare un numero di codice a barrae a partire dai risultati di una ricerca</a></li>
  <li><a href="#seri">Riconoscere il numero di serie delle copie dai numeri di codici a barre autogenerati</a></li>
</ul>
<br><br>

<a name="exam">
Nel seguente esempio i risultati della ricerca mostrano i collegamenti per selezionare un numerio di codice a barre.</a> 
Se il browser mostra i suggerimenti, l'azione del mouse spiegherà il significato del link.
<br><br>

<!--**************************************************************************
    *  Printing result table EXAMPLE ALMOST COMPLETELY TRANSLATED BY $loc->getText 
    ************************************************************************** -->
<table class="primary">
  <tbody><tr>
    <th colspan="3" align="left" nowrap="yes" valign="top">
      <?php echo $loc->getText("biblioSearchResults"); ?>:
    </th>
  </tr>
  
  <tr>

    <td class="primary" rowspan="2" align="center" nowrap="true" valign="top">
      1.<br>
      <a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">
      <img src="../images/book.gif" alt="book" align="bottom" border="0" height="20" width="20"></a>
    </td>
    <td class="primary" colspan="2" valign="top">
      <table class="primary" width="100%">
        <tbody><tr>

          <td class="noborder" valign="top" width="1%"><b><?php echo $loc->getText("biblioSearchTitle"); ?>:</b></td>
          <td class="noborder" colspan="3"><a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">Ribsy</a></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><b><?php echo $loc->getText("biblioSearchAuthor"); ?>:</b></td>
          <td class="noborder" colspan="3">Cleary,Beverly</td>
        </tr>

        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchMaterial"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">book</font></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCollection"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">Juvenile Fiction</font></td>

        </tr>
        <tr>
          <td class="noborder" nowrap="yes" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCall"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">JF Cle </font></td>
        </tr>
      </tbody></table>
    </td>
  </tr>

        <tr>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000051          
            <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>
                  </font></td>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
      </tr>

    
  <tr>
    <td class="primary" rowspan="2" align="center" nowrap="true" valign="top">
      2.<br>
      <a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">
      <img src="../images/book.gif" alt="book" align="bottom" border="0" height="20" width="20"></a>
    </td>
    <td class="primary" colspan="2" valign="top">
      <table class="primary" width="100%">

        <tbody><tr>
          <td class="noborder" valign="top" width="1%"><b><?php echo $loc->getText("biblioSearchTitle"); ?>:</b></td>
          <td class="noborder" colspan="3"><a href="#exam" title="<?php echo $loc->getText("biblioSearchDetail"); ?>">Henry Huggins</a></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><b><?php echo $loc->getText("biblioSearchAuthor"); ?>:</b></td>
          <td class="noborder" colspan="3">Cleary,Beverly</td>

        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchMaterial"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">book</font></td>
        </tr>
        <tr>
          <td class="noborder" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCollection"); ?>:</b></font></td>

          <td class="noborder" colspan="3"><font class="small">Juvenile Fiction</font></td>
        </tr>
        <tr>
          <td class="noborder" nowrap="yes" valign="top"><font class="small"><b><?php echo $loc->getText("biblioSearchCall"); ?>:</b></font></td>
          <td class="noborder" colspan="3"><font class="small">JF Cle </font></td>
        </tr>
      </tbody></table>

    </td>
  </tr>
        <tr>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000061          
            <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>
                  </font></td>
        <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>

      </tr>
              <tr>
            <td class="primary" align="center" nowrap="true" valign="top"><font class="small">
              3.
            </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000062              
                <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>

                          </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
          </tr>
                    <tr>
            <td class="primary" align="center" nowrap="true" valign="top"><font class="small">
              4.
            </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyBCode"); ?></b>: 000063              
                <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Chk"); ?>"><?php echo $loc->getText("biblioSearchOutIn"); ?></a> | <a href="#exam" title="<?php echo $loc->getText("biblioSearchBCode2Hold"); ?>"><?php echo $loc->getText("biblioSearchHold"); ?></a>

                          </font></td>
            <td class="primary" nowrap="true"><font class="small"><b><?php echo $loc->getText("biblioSearchCopyStatus"); ?></b>: checked in</font></td>
          </tr>
            </tbody>
</table><br>

<a name="seri">
Nell'esempio dei risultati della ricerca per codice a barre precedente, solo le ultime cifre del codice a barre della bibliografia sono diverse.</a>
Dipende dal fatto che furono assegnate come
<a href="../shared/help.php?page=biblioCopyEdit#seri">Copia Numeri di serie integrati nei numeri del codice a barre</a>
quando sono state aggiunte le copie.
<br>
Questo ed altre informazioni sull'aggiunta delle copie è spiegato nella sezione di aiuto
<a href="../shared/help.php?page=biblioCopyEdit">Nuova copia e modifica delle pagine</a>.
<br><br>
Si noti che la numerazione dei risultati della ricerca, colonna sinistra, è indipendente dal numero seriale di copia integrato nel numero del codice a barre, questo è solo un numero indicativo.