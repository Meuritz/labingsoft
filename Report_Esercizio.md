Questo è il report di quello che ho fatto per creare il form:

1. Ho creato il file LocationDTO, il DTO per location, i dto vengono usati per trasferire dati da una parte all'altra di un applicazione, ed ho eseguito la maggior parte dei controlli
2. Creato il relativo LocationDTOForm, ed ho creato la struttura del form con i vari campi, specifando se devono essere obbligatori oppure no
3. Modificato il LocationController, con una nuova route per il form, e alcuni controlli sui campi e lo collegata a create.html.twig(di location)
4. Creato il templete twig per il form di inserimento delle location, collegando il form creato in precedenza 
