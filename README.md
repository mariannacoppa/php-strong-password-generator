Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator
*Descrizione*
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
*Milestone 1*
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php.
In Allegato avete un esempio di form nel caso non aveste fantasia.
*Milestone 2*
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*Milestone 3 (BONUS)*
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*Milestone 4 (BONUS)*
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

Pseudocodice

1 creo la struttura statica del form
2 imposto il campo input in moo che possa accettare solo valoi numerici
3 creo un array contenente le lettere dell'alfabeto, le cifre da 0 a 9 ed i caratteri speciali
4 imposto una funzione che attinga dall'array di cui sopra un numero di caratteri corrispondente a quello impostato dall'utente
5 creo un array vuoto atto a contenere il codice generato dalla funzione
6 stampo il codice generato (fine milestone 1)
7 copio i passaggi scritti nel file php nel file functions.php, inserendoli in funzioni
8 collego il file functions al file index (fine milestone 2)