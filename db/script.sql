/* database utente */
CREATE TABLE utente (
    nome VARCHAR NOT NULL,
    cognome VARCHAR NOT NULL,
    email VARCHAR PRIMARY KEY,
    passw VARCHAR NOT NULL,
    indirizzo VARCHAR NOT NULL,
    citta VARCHAR NOT NULL,
    cap VARCHAR NOT NULL
);

CREATE TABLE commenti_anonimi (
    titolo VARCHAR NOT NULL,
    descrizione VARCHAR NOT NULL
);

CREATE TABLE commenti_utente (
    email VARCHAR REFERENCES utente(email),
    titolo VARCHAR NOT NULL,
    descrizione VARCHAR NOT NULL
);

/* database catalogo */
CREATE TABLE catalogo (
    titolo VARCHAR NOT NULL,
    autore VARCHAR NOT NULL,
    prezzo NUMERIC NOT NULL,
    data_pubblicazione DATE NOT NULL,
    trama VARCHAR NOT NULL,
    isbn VARCHAR PRIMARY KEY,
    copertina VARCHAR NOT NULL 
);

CREATE TABLE acquisti_utente (
    email VARCHAR REFERENCES utente(email),
    isbn VARCHAR REFERENCES catalogo(isbn),
    prezzo NUMERIC NOT NULL
);

CREATE TABLE carrello_utente (
    email VARCHAR REFERENCES utente(email),
    isbn VARCHAR REFERENCES catalogo(isbn),
    prezzo VARCHAR NOT NULL
);


INSERT INTO catalogo VALUES ('Crime', 'Irvine Welsh', 18.05, '2022-04-07', 'Sotto la luce impietosa del sole della Florida, Irvine Welsh scandaglia le profondità più innominabili della crudeltà e del rimorso umano, con la sua penna sempre tagliente e anfetaminica.', '9788823530461', 'https://www.lafeltrinelli.it/images/9788823530461_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La stanza delle mele', 'Matteo Righetto', 17.10, '2022-04-07', 'Matteo Righetto conosce profondamente il mondo arcaico della montagna – durissimo e al contempo vivo di profumi, sapori, dialetto e leggende – e ce lo restituisce nel suo romanzo più maturo e incalzante. Leggerlo è una corsa notturna nel bosco, con il cuore in gola.', '9788807034909', 'https://www.lafeltrinelli.it/images/9788807034909_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Stalingrado', 'Vasilij Grossman', 26.00, '2022-04-04', 'Uno dei più grandi romanzi del Novecento – dove i «fatti del mondo e il destino delle persone diventano tutt uno».', '9788845936517', 'https://www.lafeltrinelli.it/images/9788845936517_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Jova Beach Coloring', 'Jovanotti', 9.40, '2022-04-07', 'Jova Beach Party è un grande gioco, dove ognuno mette del suo e le linee creano campi da colorare, attraversare, far vivere. Divertitevi a remixare, immaginare, fantasticare.', '9788807493225', 'https://www.lafeltrinelli.it/images/9788807493225_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Così per sempre', 'Chiara Valerio', 20.90, '2022-04-05', 'L uomo sulla terrazza è antico quasi come la città che sta guardando. Il suo gatto Zibetto, piú nero di tutti i gatti neri, come lui conosce troppe storie. L uomo è il conte Dracula. Ama la scienza, la fragilità degli esseri umani, e una donna dal viso sempre uguale.', '9788806252564', 'https://www.lafeltrinelli.it/images/9788806252564_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Quindici riprese', 'Walter Siti', 19.00, '2022-04-05', 'In questo volume Siti raccoglie finalmente tutti i suoi saggi pasoliniani, dal 1972 a oggi, con scritti ad ampio raggio e altri più specifici o occasionali. Un interpretazione originale e che matura progressivamente di uno dei nostri autori novecenteschi più polemici e discussi, in grado di attrarre, come è stato per Siti, chi voglia riflettere sui rapporti intricati tra letteratura e vita.', '9788817083065', 'https://www.lafeltrinelli.it/images/9788817083065_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Credere', 'Julián Carrón', 16.06, '2022-04-05', 'Una delle personalità cattoliche più interessanti del panorama attuale dialoga con uno dei filosofi e psicanalisti più conosciuti in Italia sul senso profondo della parola credere. Ne scaturisce un confronto di altissimo livello e allo stesso tempo chiaro e illuminante, ricco di suggestioni e possibili declinazioni.', '9788856685022', 'https://www.lafeltrinelli.it/images/9788856685022_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Lontani parenti', 'Veit Heinichen', 17.10, '2022-04-06', 'Due uomini uccisi nel giro di poche ore, entrambi con una freccia tirata da una balestra professionale, ovviamente fanno pensare alla stessa mano. Ma quando gli omicidi vengono collegati ad altri avvenuti negli ultimi mesi in zone più o meno limitrofe, il caso si inserisce in un contesto politico e la prospettiva cambia.', '9788833574486', 'https://www.lafeltrinelli.it/images/9788833574486_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La guerra dei trent anni', 'Filippo Facci', 23.75, '2022-04-07', 'Cosa fu realmente Mani Pulite? Una rivoluzione giudiziaria o una guerra civile tra i poteri dello Stato? Cambiò davvero tutto o fu soltanto una stagione di illusioni perdute? Una ricostruzione dello scandalo che travolse la scena politica. Una testimonianza d eccezione tra narrazione storica e racconto privato.', '9788829713721', 'https://www.lafeltrinelli.it/images/9788829713721_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La strategia dell opossum', 'Roberto Alajmo', 13.30, '2022-04-07', 'La seconda avventura di Giovanni Di Dio, detto Giovà, lo sprovveduto metronotte, investigatore controvoglia, che si colloca a metà tra il siciliano descritto da Giuseppe Tomasi di Lampedusa, che aspira solamente al sonno, e il candido Giufà della tradizione popolare.', '9788838943478', 'https://www.lafeltrinelli.it/images/9788838943478_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('De arte gymnastica', 'Andrea Marcolongo', 15.20, '2022-04-07', 'E se provassimo per una volta a "correre come correvano i Greci"? Amanti del running oppure no, una cosa è certa. Tutto è cambiato dall epoca di Filippide a oggi – la tecnologia, la politica, la scienza, la guerra, il modo di scrivere, di mangiare, di viaggiare, persino il clima –, ma due cose sono rimaste invariate: i nostri muscoli e quei maledettissimi 41,8 km che separano Maratona dall acropoli di Atene. Proprio quelli che ho intenzione di correre.', '9788858147481', 'https://www.lafeltrinelli.it/images/9788858147481_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Rancore', 'Gianrico Carofiglio', 17.58, '2022-03-29', 'Come è morto, davvero, Vittorio Leonardi? Perché Penelope Spada ha dovuto lasciare la magistratura? Un investigazione su un delitto e nei meandri della coscienza. Un folgorante romanzo sulla colpa e sulla redenzione.', '9788806252410', 'https://www.lafeltrinelli.it/images/9788806252410_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Fabbricante di lacrime', 'Erin Doom', 15.10, '2021-05-27', 'Il desiderio di una famiglia, un amore impossibile, una sola certezza: non puoi mentire al Fabbricante di lacrime.', '9791259570277', 'https://www.lafeltrinelli.it/images/9791259570277_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La casa di cielo e aria. Crescent City', 'Sarah J. Maas', 21.76, '2022-04-12', 'In La casa di cielo e aria, secondo romanzo ricco d azione della nuova serie fantasy Crescent City, dopo La casa di terra e sangue, Sarah J. Maas dà ulteriore prova delle sue capacità di intessere l affascinante storia di un mondo sull orlo del baratro, celebrando il coraggio di coloro che faranno di tutto per salvarlo.', '9788804749325', 'https://www.lafeltrinelli.it/images/9788804749325_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La mascella di Caino', 'Torquemada', 17.10, '2022-03-08', 'Sei assassini e sei vittime: chi ha ucciso chi? Il puzzle letterario più diabolico del mondo. Un piccolo gioiello di enigmistica.', '9788804752677', 'https://www.lafeltrinelli.it/images/9788804752677_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La proposta di un gentiluomo', 'Julia Quinn', 13.78, '2021-01-29', 'Sophie Beckett discende da una nobilissima famiglia, ma non ha mai avuto una vita facile. Niente feste, coccole, agi per lei: è infatti la figlia illegittima del conte di Penwood ed è sempre stata trattata come una domestica, soprattutto dopo che il padre, morendo, l ha lasciata sola con la matrigna e le sorellastre. ', '9788804724292', 'https://www.lafeltrinelli.it/images/9788804724292_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Il duca e io. Serie Bridgerton', 'Julia Quinn', 13.78, '2021-01-22', 'Londra, 1813. Simon Arthur Henry Fitzranulph Basset, nuovo duca di Hastings ed erede di uno dei titoli più antichi e prestigiosi d Inghilterra, è uno scapolo assai desiderato. A dire il vero, è letteralmente perseguitato da schiere di madri dell alta società che farebbero di tutto pur di combinare un buon matrimonio per le loro fanciulle in età da marito.', '9788804724278', 'https://www.lafeltrinelli.it/images/9788804724278_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Dimmi cosa vedi tu da lì', 'Guido Maria Brera', 15.68, '2022-04-07', 'Intrecciando l’autofiction più vertiginosa alla confessione più intima, il racconto appassionato al saggio divulgativo, Guido Maria Brera disegna lo scenario della grande guerra tra modelli economici che attraversa i decenni, ci proietta nel mezzo di una battaglia decisiva, pronuncia parole di riscatto e speranza. E se nell’assedio che oggi ci minaccia fosse proprio la voce di Federico Caffè a suonare le trombe di Gerico?', '9788828207443', 'https://www.lafeltrinelli.it/images/9788828207443_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La Russia di Putin', 'Anna Politkovskaja', 13.30, '2022-03-25', '«Siamo solo un mezzo, per lui. Un mezzo per raggiungere il potere personale. Per questo dispone di noi come vuole. Può giocare con noi, se ne ha voglia. Può distruggerci, se lo desidera. Noi non siamo niente. Lui, finito dov’è per puro caso, è il dio e il re che dobbiamo temere e venerare. La Russia ha già avuto governanti di questa risma. Ed è finita in tragedia.', '9788845936920', 'https://www.lafeltrinelli.it/images/9788845936920_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La canzone di Achille', 'Madeline Miller', 11.40, '2019-01-10', 'Dimenticate Troia, gli scenari di guerra, i duelli, il sangue, la morte. Dimenticate la violenza e le stragi, la crudeltà e l orrore. E seguite invece il cammino di due giovani, prima amici, poi amanti e infine anche compagni d armi - due giovani splendidi per gioventù e bellezza, destinati a concludere la loro vita sulla pianura troiana e a rimanere uniti per sempre con le ceneri mischiate in una sola, preziosissima urna.', '9788831780988', 'https://www.lafeltrinelli.it/images/9788831780988_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Cambiare l acqua ai fiori', 'Valérie Perrin', 17.10, '2019-07-10', 'Vincitore nel 2018 del Prix Maison de la Presse, presieduto da Michel Bussi, con la seguente motivazione: “un romanzo sensibile, un libro che vi porta dalle lacrime alle risate con personaggi divertenti e commoventi”', '9788833570990', 'https://www.lafeltrinelli.it/images/9788833570990_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('L’ inverno dei Leoni. La saga dei Florio', 'Stefania Auci', 19.00, '2021-05-24', 'I Florio continuano a vivere, a far battere il cuore di un’isola e di una città. Unici e indimenticabili.', '9788842931546', 'https://www.lafeltrinelli.it/images/9788842931546_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Circe', 'Madeline Miller', 11.40, '2021-01-14', 'Poggiando su una solida conoscenza delle fonti e su una profonda comprensione dello spirito greco, Madeline Miller fa rivivere una delle figure più conturbanti del mito e ci regala uno sguardo originale sulle grandi storie dell antichità.', '9788829705320', 'https://www.lafeltrinelli.it/images/9788829705320_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La profezia dell’armadillo', 'Zerocalcare', 17.10, '2017-04-12', 'Cinque anni dopo l uscita in libreria della versione "colore 8-bit", La profezia dell armadillo di Zerocalcare, che nel frattempo ha venduto centomila copie, torna in libreria in questa bellissima Artist Edition. La storia torna al bianco e nero con retini grigi della versione originale autoprodotta, ma il volume è più grande, per far risaltare meglio i disegni, ed è preceduto da una storia inedita di dodici pagine, in bicromia, che ha l intento di fare da raccordo tra questo classico di Zerocalcare e il suo prossimo libro.', '9788865438534', 'https://www.lafeltrinelli.it/images/9788865438534_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La casa senza ricordi', 'Donato Carrisi', 20.90, '2021-11-29', 'Dopo il successo internazionale della Casa delle voci, il nuovo romanzo di Donato Carrisi: imprevedibile, ipnotico, potente.', '9788830453517', 'https://www.lafeltrinelli.it/images/9788830453517_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Finché il caffè è caldo', 'Toshikazu Kawaguchi', 15.20, '2020-03-12', 'Un tavolino, un caffè, una scelta. Basta solo questo per essere felici.', '9788811608769', 'https://www.lafeltrinelli.it/images/9788811608769_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Niente di nuovo sul fronte di Rebibbia', 'Zerocalcare', 17.10, '2021-11-25', 'Un libro importante, solo apparentemente fatto di storie disgiunte, che raccontano mirabilmente gli ultimi due anni dal punto di vista del fumettista di Rebibbia.', '9788832736571', 'https://www.lafeltrinelli.it/images/9788832736571_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Tre', 'Valérie Perrin', 18.05, '2021-06-28', 'Valérie Perrin ha il dono di cogliere la profondità insospettata delle cose della vita. Seguendo il filo di una vicenda struggente e implacabile, l autrice ci trascina al cuore dell adolescenza, del tempo che passa e separa.', '9788833573625', 'https://www.lafeltrinelli.it/images/9788833573625_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Una vita come tante', 'Hanya Yanagihara', 22.80, '2016-11-20', 'Una storia epica e magistrale sull amicizia e sull amore nel XXI secolo. Caso editoriale del 2015, forse il più importante romanzo letterario dell anno, opera di rara potenza e originalità, Una vita come tante è doloroso e spiazzante, scioccante e magnetico. Vasto come un romanzo ottocentesco, brutale e modernissimo per i suoi temi, emotivo e realistico, ha trascinato lettori e critica per la sua forza narrativa, capace di creare un mondo di profonda, coinvolgente verità.', '9788838935688', 'https://www.lafeltrinelli.it/images/9788838935688_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Per niente al mondo', 'Ken Follett', 25.65, '2021-11-09', 'Più di un thriller, Per niente al mondo è un romanzo ricco di dettagli reali che si muove tra il cuore rovente del deserto del Sahara e le stanze inaccessibili del potere delle grandi capitali del mondo.', '9788804742319', 'https://www.lafeltrinelli.it/images/9788804742319_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('La banalità del male', 'Hannah Arendt', 11.40, '2019-02-03', '«Le azioni erano mostruose, ma chi le fece era pressoché normale, né demoniaco né mostruoso.»', '9788807892974', 'https://www.lafeltrinelli.it/images/9788807892974_0_536_0_75.jpg');
INSERT INTO catalogo VALUES ('Cecità', 'José Saramago', 10.45, '2013-02-25', '«L’angoscia, l’alienazione dei personaggi ci arrivano oggi ancora più autentiche, e riscoprendo un classico come Cecità non possiamo non creare parallelismi con il periodo che stiamo vivendo.» – Viola Patalano per Maremosso', '9788807881572', 'https://www.lafeltrinelli.it/images/9788807881572_0_536_0_75.jpg');