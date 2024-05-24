<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            'nombre' => 'El imperio Final',
            'fecha_salida' => '2006-07-17',
            'paginas' => '688',
            'imagen' => 'imperiofinal.jpg',
            'synopsis' => 'Durante mil años los skaa han sido esclavizados y viven en la  miseria, sumidos en un miedo inevitable. Durante mil años el Lord  Legislador ha reinado con poder absoluto, dominando gracias al terror, a  sus poderes y a su inmortalidad, ayudado por «obligadores» e «inquisidores», junto a la poderosa magia de la alomancia.
            Pero los nobles a menudo han tenido trato sexual con jóvenes skaa y,  aunque la ley lo prohíbe, algunos de sus bastardos han sobrevivido y  heredado los poderes alománticos: son los «nacidos de la bruma» (mistborn).
            Ahora, Kelsier, el «superviviente», el único que ha logrado huir de los  Pozos de Hathsin, ha encontrado a Vin, una pobre chica skaa con mucha  suerte... Tal vez los dos, con el mejor equipo criminal jamás reunido,  unidos a la rebelión que los skaa intentan desde hace mil años, logren  cambiar el mundo y acabar con la atroz mano de hierro del Lord Legislador.',
            'genero_id' => '1',
            'escritor_id' => '1',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'El pozo de la ascension',
            'fecha_salida' => '2007-08-21',
            'paginas' => '784',
            'imagen' => 'pozoascension.jpg',
            'synopsis' => 'Durante mil años nada ha cambiado: han caído las cenizas, los skaa han  sido esclavizados y el Lord Legislador ha dominado el mundo. Pero lo  imposible ha sucedido. El Lord Legislador ha muerto. Sin embargo, vencer  y matarlo fue la parte sencilla. El verdadero desafío será sobrevivir a las consecuencias de su caída.

            Tomar el poder tal vez resultó fácil, pero ¿qué ocurre después?, ¿cómo  se utiliza? La tarea de reconstruir el mundo, ahora que Kelsier no está,  ha quedado en manos de Vin. Y las brumas, desde que el Lord Legislador cayó, se han vuelto cada vez más impredecibles...
            
            A medida que el asedio se intensifica, la antigua leyenda del Pozo de la Ascensión ofrece un único rayo de esperanza.
            
            En ese mundo de aventura épica, la estrategia política y religiosa debe  lidiar con los siempre misteriosos poderes de la alomancia...',
            'genero_id' => '1',
            'escritor_id' => '1',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'El heroe de las eras',
            'fecha_salida' => '2008-10-14',
            'paginas' => '760',
            'imagen' => 'heroeras.jpg',
            'synopsis' => 'Durante mil años nada ha cambiado: han caído las cenizas, los skaa han  sido esclavizados y el Lord Legislador ha dominado el mundo. Kelsier, el  «superviviente», el único que ha logrado huir de los Pozos de Hathsin,  junto a Vin, una pobre chica skaa, se une a la rebelión. Y por fin lo  imposible sucede: por fin la revolución ha triunfado. Pero acabar con el  Lord Legislador es la parte sencilla. El verdadero desafío consistirá en  sobrevivir a las consecuencias de su caída... sin Kelsier.

            Vin y el Rey Elend buscan en los últimos escondites de recursos del Lord  Legislador y, engañado, el Rey libera del Pozo de la Ascensión algo que  debería haber quedado oculto para siempre. Un enorme peligro acecha a la  humanidad, y la verdadera pregunta es si conseguirán detenerlo a tiempo.
            
            EnEl héroe de las eras se comprende el porqué de la niebla y las  cenizas, las tenebrosas acciones del Lord Legislador y la naturaleza del  Pozo de la Ascensión. Esta aventura lleva a la trilogía a un clímax dramático y sorprendente.',
            'genero_id' => '1',
            'escritor_id' => '1',
           
        ]);
       
        DB::table('libros')->insert([
            'nombre' => 'El hobbit',
            'fecha_salida' => '1937-09-21',
            'paginas' => '310',
            'imagen' => 'hobbit.jpg',
            'synopsis' => 'Un gran clásico moderno y el preludio de las vastas y poderosas mitologías de El Señor de los Anillos
            Smaug parecía profundamente dormido cuando Bilbo espió una vez más desde la entrada. ¡Pero fingía estar dormido! 
            ¡Estaba vigilando la entrada del túnel!... Sacado de su cómodo agujero-hobbit por Gandalf y una banda de enanos, Bilbo se encuentra de pronto en medio de una conspiración que pretende apoderarse del tesoro de Smaug el Magnífico, un enorme y muy peligroso dragón...',
            'genero_id' => '1',
            'escritor_id' => '2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'La comunidad del anillo',
            'fecha_salida' => '1954-07-29',
            'paginas' => '576',
            'imagen' => 'comunidadanillo.jpg',
            'synopsis' => 'En la adormecida e idílica Comarca, un joven hobbit recibe un encargo: custodiar el Anillo Único y emprender el viaje para su destrucción en la Grieta del Destino. Acompañado por magos, hombres, elfos y enanos, atravesará la Tierra Media y se internará en las sombras de Mordor, perseguido siempre por las huestes de Sauron, el Señor Oscuro, dispuesto a recuperar su creación para establecer el dominio definitivo del Mal.',
            'genero_id' => '1',
            'escritor_id' => '2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Las dos torres',
            'fecha_salida' => '1954-11-11',
            'paginas' => '480',
            'imagen' => 'dostorres.jpg',
            'synopsis' => 'La misión parece abocada al fracaso pero la aventura continua...
            La Compañía se ha disuelto y sus integrantes emprenden caminos separados. Frodo y Sam continúan solos su viaje a lo largo del río Anduin, perseguidos por la sombra misteriosa de un ser extraño que también ambiciona la posesión del Anillo. Mientras, hombres, elfos y enanos se preparan para la batalla final contra las fuerzas del Señor del Mal.',
            'genero_id' => '1',
            'escritor_id' => '2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'El retorno del rey',
            'fecha_salida' => '1955-10-20',
            'paginas' => '608',
            'imagen' => 'retornorey.jpg',
            'synopsis' => 'La última parte del viaje de Frodo y Sam
            Los ejércitos del Señor Oscuro van extendiendo cada vez más su maléfica sombra por la Tierra Media. Hombres, elfos y enanos unen sus fuerzas para presentar batalla a Sauron y sus huestes. Ajenos a estos preparativos, Frodo y Sam siguen adentrándose en el país de Mordor en su heroico viaje para destruir el Anillo de Poder en las Grietas del Destino.',
            'genero_id' => '1',
            'escritor_id' => '2',

           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Juego de tronos',
            'fecha_salida' => '1996-08-1',
            'paginas' => '800',
            'imagen' => 'juegotronos.jpg',
            'synopsis' => '"Cuando se juega al juego de tronos, solo se puede ganar o morir. No hay puntos intermedios."

 
            En un mundo diferente al nuestro, en el que los veranos y los inviernos duran generaciones, un gran conflicto está a punto de estallar. Robert Baratheon ocupa el Trono de Hierro en el cálido y opulento sur de Poniente. Se lo arrebató tras una sangrienta guerra al último rey loco de la dinastía Targaryen, señores de dragones.
            
             
            Sin embargo, ahora su poder se ve amenazado: en el norte, el Muro erigido para proteger el reino de las bestias y de los extraños se tambalea',
            'genero_id' => '1',
            'escritor_id' => '3',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Choque de reyes',
            'fecha_salida' => '1998-11-16',
            'paginas' => '936',
            'imagen' => 'choquereyes.jpg',
            'synopsis' => '«Llegará un día en el que te sientas segura y feliz, y de repente tu alegría se te convertirá en cenizas en la boca, y ese día sabrás que la deuda ha quedado saldada.»


            En el cielo sobre los Siete Reinos, que se hallan asolados por una guerra devastadora, aparece un siniestro cometa color sangre. ¿Acaso se trata de otro augurio terrible sobre las catástrofes que están por llegar?
            
            
            El verano ha terminado, y cuatro líderes se disputan el Trono de Hierro. Mientras tanto, al otro lado del mar, la orgullosa princesa exiliada Daenerys Targaryen está dispuesta a arriesgarlo todo con tal de recuperar la corona que le pertenece por derecho. Puede que, para ella, el cometa de sangre no sea un mal presagio, sino el heraldo de la venganza.
            
            
            Y mientras la batalla continúa, al norte, más allá del Muro, las fuerzas oscuras se vuelven cada vez más poderosas.',
            'genero_id' => '1',
            'escritor_id' => '3',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Tormenta de espadas',
            'fecha_salida' => '2000-08-8',
            'paginas' => '1176',
            'imagen' => 'tormentaespadas.jpg',
            'synopsis' => '"Se Acerca el Invierno, anunciaba el lema de los Stark, y sin duda había caído con crueldad sobre ellos."

            El juego de alianzas, traiciones y engaños para hacerse con el Trono de Hierro se vuelve más despiadado tras la muerte del joven rey Renly Baratheon. Aunque la ambición de los que se disputan la victoria no conoce límites, la amenaza más terrible acecha tanto a los cuatro reyes como a un Poniente devastado por el conflicto.
            
             
            Desde el lejano norte, una horda de bárbaros y gigantes se cierne lentamente sobre los Siete Reinos. Sin embargo, junto al pueblo l',
            'genero_id' => '1',
            'escritor_id' => '3',

           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Festin de curvos',
            'fecha_salida' => '2005-08-17',
            'paginas' => '872',
            'imagen' => 'festincuervos.jpg',
            'synopsis' => '¿Que es lo que más desea nuestro corazón?preguntó Arianne, entrecerrando los ojos.
            Venganza.Hablaba en voz baja, como si temiera que pudieran oírlo. Justicia."
            
             
            Entre campos de batalla llenos de fantasmas y lúgubres fortalezas en ruina, entre ciudades convertidas en cementerios y tierras reducidas a osarios, la guerra de los Cinco Reyes toca a su fin.
            
             
            La casa Lannister y sus aliados parecen haber salido victoriosos. Sin embargo, algo se remueve en las entrañas de los Siete Reinos y, mientras cuervos en forma',
            'genero_id' => '1',
            'escritor_id' => '3',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Danza de dragones',
            'fecha_salida' => '2011-07-12',
            'paginas' => '1136',
            'imagen' => 'danzadragones.jpg',
            'synopsis' => '"Mata al niño, Jon Nieve. El invierno se nos echa encima. Mata al niño y que nazca el hombre."

            La victoria de los leones Lannister ha dejado tras de sí un interminable reguero de sangre: lord Tywin yace enterrado, asesinado por mano de su propio hijo; la reina Cersei está encadenada y el pequeño rey Tommen ocupa un trono que podría matarlo. El destino de Poniente pende de un hilo.
            
             
            En el Muro, Jon Nieve se ve obligado a consolidar por la espada su rango como lord comandante de la Guardia de la Noche. Mientras, al otro lado del mar Angosto, Daenerys Targaryen,',
            'genero_id' => '1',
            'escritor_id' => '3',

           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Nimona',
            'fecha_salida' => '2015-05-12',
            'paginas' => '266',
            'imagen' => 'nimona.jpg',
            'synopsis' => 'Surgida originalmente como un comic web (una historieta publicada en la red), llega ahora la versión impresa de Nimona, extraordinaria novela 
            gráfica capaz de fascinar a jóvenes y adultos por igual. Un libro que ha lanzado al estrellato a su jovencísima autora, Noelle Stevenson. Esta obra combina 
            aventura, acción y humor en un contexto donde cabe lo mismo la fantasía heroica que la ciencia ficción. Todo ello desde una perspectiva rabiosamente contemporánea.
             Nimona es una joven deslenguada y bravucona, con la habilidad de cambiar de forma a voluntad. Sin pensárselo dos veces, la chica decide convertirse en ayudante del 
             Señor Ballister Blackheart, un villano con un oscurísimo pasado. Ambos personajes vivirán una aventura que sorprenderá a los lectores por sus inesperados giros argumentales.',
            'genero_id' => '1',
            'escritor_id' => '4',

           
        ]);
       
    
        DB::table('libros')->insert([
            'nombre' => 'Nuncanoche',
            'fecha_salida' => '2018-05-10',
            'paginas' => '560',
            'imagen' => 'nuncanoche.jpg',
            'synopsis' => 'En una tierra en la que ninguno de sus tres soles llega jamás a ponerse,  la joven asesina Mia Corvere acaba de unirse a la banda más mortífera de la República.

            De niña, Mia escapó de milagro de la rebelión fallida de su padre, que  murió ejecutado por traición. Su mundo se vino abajo y, sola  y sin  amigos, tuvo que huir de enemigos implacables. Pero su insólito don para conversar con las sombras la llevó por un camino más oscuro de lo que jamás hubiera podido imaginar.
            
            Ahora, años más tarde, emprende un arriesgado viaje para demostrar su  valía en la Iglesia Roja. Los pasillos de esta escuela de asesinos están repletos de peligros mortales. Aquí y allá amenaza la traición, pero, para llegar a ser una adversaria sin par, Mia debe   sobrevivir a la iniciación.
            
            Solo así estará un paso más cerca de lo único que desea...
            
            Venganza.',
            'genero_id' => '1',
            'escritor_id' => '6',
    
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Anhelo',
            'fecha_salida' => '2020-09-22',
            'paginas' => '672',
            'imagen' => 'anhelo.jpg',
            'synopsis' => 'Tu nueva obsesión. Lo vas a devorar.Una historia de vampiros más adictiva que Crepúsculo.
            «Mi mundo cambió en el instante en el que pisé el instituto Katmere. Aquí todo resulta extraño: la escuela,
            los alumnos, las asignaturas; y yo no soy más que una simple mortal entre ellos, dioses... o monstruos.
            Todavía no sé a qué bando pertenezco, si es que pertenezco a alguno, sólo sé que lo que parece unirlos 
            a todos es su odio hacia mí. Pero entre ellos está Jaxon Vega, un vampiro que esconde oscuros secretos y
            que no ha sentido nada durante un siglo. Algo en él me atrae, apenas lo conozco, pero sé que hay algo
            roto en su interior que de alguna manera encaja con lo que hay roto en mí. Acercarme a él puede significar
            el fin del mundo, pero empiezo a sospechar que alguien me ha traído a este lugar a propósito, y tengo que descubrir por qué.»',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);

        DB::table('libros')->insert([
            'nombre' => 'Furia',
            'fecha_salida' => '2021-03-17',
            'paginas' => '800',
            'imagen' => 'furia.jpg',
            'synopsis' => '«He vuelto al Instituto Katmere, pero me siento extraña, me atormentan cosas que no recuerdo haber vivido,
            y sigo luchando por comprender quién o qué soy realmente. Cuando empiezo a sentirme segura de nuevo, Hudson reaparece con 
            sus ideas de venganza, insiste en que hay secretos que no conozco, secretos que pueden abrir una brecha entre Jaxon y yo
            para siempre. Pero enemigos mucho peores nos están esperando…» «Con el Círculo atrapado en una jugada de poder y
            la Corte de Vampiros tratando de arrastrarme hacia su mundo, lo único que todos tenemos claro es dejar Katmere significaría
            mi muerte segura. Tengo que luchar, no solo por mi vida, sino por la de todos. Solo sé que salvar a las personas que amo
            requerirá sacrificio. Quizás más de lo que puedo dar.»',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Ansia',
            'fecha_salida' => '2021-09-01',
            'paginas' => '896',
            'imagen' => 'ansia.jpg',
            'synopsis' => '«Siento que estoy a punto de llegar al límite. Si intentar graduarme en una escuela para seres sobrenaturales
            ya era suficientemente estresante, ahora resulta que el estado de mi relación ha pasado de ser complicado a ser un imposible? 
            Y por si no fuera suficiente Bloodletter ha decidido lanzarnos una bomba de proporciones épicas a todos...
            Pero bueno, si lo piensas, ¿cuándo algo en Katmere Academy ha sido normal? No dejan de suceder cosas: Jaxon se ha vuelto más 
            frío que un invierno de Alaska. El Círculo no está preparado para mi próxima coronación y, como si las cosas no pudieran empeorar,
            ahora hay una orden de arresto por los supuestos delitos que cometimos Hudson y yo, lo que implica una sentencia de prisión de por
            vida con una maldición mortal e inquebrantable.
            Habrá que tomar decisiones... y me temo que no todos sobrevivirán.»',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Fulgor',
            'fecha_salida' => '2022-03-02',
            'paginas' => '960',
            'imagen' => 'fulgor.jpg',
            'synopsis' => 'Nadie sobrevivió ileso a la última batalla. Flint está enfadado con el mundo, Jaxon se está convirtiendo en algo que 
            no reconozco, y Hudson ha levantado un muro que no estoy segura de poder romper.
            Ahora se acerca una guerra y no estamos listos. Necesitaríamos un ejército para tener alguna esperanza de ganar. Pero antes de eso necesito
            encontrar respuestas a las incógnitas sobre mis antepasados. Respuestas que podrían revelar quién es el verdadero monstruo entre nosotros… 
            en un mundo lleno de vampiros sedientos de sangre, gárgolas inmortales y una antigua batalla entre dos dioses.
            No hay garantía de que nadie se quede en pie cuando el polvo se asiente, pero si queremos salvar este mundo, no tengo otra opción. Tendré que 
            abrazar cada parte de mí... incluso las partes que más temo.',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Hechizo',
            'fecha_salida' => '2023-03-15',
            'paginas' => '800',
            'imagen' => 'hechizo.jpg',
            'synopsis' => 'Después de Katmere, no debería sorprenderme nada. Aquí estoy, atrapada con el peor de los seres sobrenaturales, aquel al que temen 
            incluso los demás monstruos: Hudson Vega. Puede que sea el hermano de Jaxon y puede que sea increíblemente atractivo, pero es una auténtica pesadilla para mí.
            Me está robando el corazón…
            Es una verdad universalmente conocida, al menos según Grace, que todo es culpa mía. Pero tengo la pequeña sospecha de que Grace no es tan humana como cree y de
            que es ella la que nos ha encerrado aquí. Ahora tenemos que trabajar juntos, no solo para sobrevivir, sino para salvar a todos aquellos a los que consideramos nuestra familia.
            Porque hay algo que nos conecta, algo más fuerte que el miedo… Y mucho más peligroso.
            Ya forma parte de ti.',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Extasis',
            'fecha_salida' => '2023-10-04',
            'paginas' => '768',
            'imagen' => 'extasis.jpg',
            'synopsis' => 'Han pasado tres meses desde que mis amigos y yo derrotamos a Cyrus. Tres meses en los que mi mayor temor ha sido lo que vendrá después…
             Debería haber sabido que esto era demasiado bueno para durar, y ahora todo se está rompiendo en mil pedazos.
            No me queda otra opción que volver al Reino de las Sombras y enfrentarme a la terrible reina que casi acaba con todos nosotros. Debo hacer un pacto con
             ella para salvar a Mekhi, pero esta vez me llevaré a mis poderosos amigos conmigo, y también a Hudson, aunque siento que le pasa algo raro; nos está ocultando un secreto, incluso a mí.
            Lo único que sé es que nuestras vidas corren peligro, y todo es culpa mía porque aún le debo un favor a la Anciana… y claramente ha venido a buscarlo.',
            'genero_id' => '1',
            'escritor_id' => '7',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Una corte de rosas y espinas',
            'fecha_salida' => '2016-05-24',
            'paginas' => '456',
            'imagen' => 'cortespinas.jpg',
            'synopsis' => ' Feyre está desesperada, su vida y la de su familia dependen de ella. Enfrentada al hambre más absoluto,
            no dudará en ir al bosque prohibido y matar si es necesario. Pero su osadía la convierte en prisionera del misterioso 
            Tamlin, quien a pesar de su aparente frialdad la hará descubrir una ardiente pasión que marcará su destino.
            Lejos de su familia y su mundo, Feyre tendrá que tomar una decisión capital para salvar todo lo que ama.',
            'genero_id' => '1',
            'escritor_id' => '5',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Una corte de niebla y furia',
            'fecha_salida' => '2016-04-22',
            'paginas' => '592',
            'imagen' => 'corteniebla.jpg',
            'synopsis' => 'Feyre está destrozada. Y aunque tiene a Tamlin por fin a su lado sano y a salvo, no sabe cómo podrá dejar atrás los recuerdos que la acechan... ni cómo mantendrá en secreto el oscuro pacto que hizo con Rhysand, que la mantiene intensamente unida a él y la confunde.
            Feyre ya no puede seguir siendo la de antes. Ahora es fuerte y debe romper con todo lo que la ata. Su corazón necesita libertad.',
            'genero_id' => '1',
            'escritor_id' => '5',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Una corte de alas y ruina',
            'fecha_salida' => '2017-05-02',
            'paginas' => '672',
            'imagen' => 'cortealas.jpg',
            'synopsis' => 'Feyre ha vuelto a la Corte Primavera decidida a desvelar las artimañas de Tamlin y las razones del rey que amenaza Prythian. Pero para hacerlo, tendrá que jugar al mortal juego del engaño…un solo paso en falso podría condenarla, no solo a ella sino a todo su mundo. La guerra se cierne sobre todos, y Feyre tendrá que elegir muy bien en quién confiar.',
            'genero_id' => '1',
            'escritor_id' => '5',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Una corte de helo y estrellas',
            'fecha_salida' => '2018-05-01',
            'paginas' => '272',
            'imagen' => 'cortehielo.jpg',
            'synopsis' => 'Feyre, Rhys y su círculo más íntimo se encuentran reconstruyendo la Corte de la Noche y su mundo. Pero el Solsticio de Invierno finalmente llega... y con toda su fuerza. Aún su atmosfera festiva no puede contrarrestar que las sombras del pasado acechen en el presente. Feyre se da cuenta que los que más quiere guardan heridas del pasado de las que no era consciente. Cicatrices que tendrán un gran impacto en el futuro de su Corte.',
            'genero_id' => '1',
            'escritor_id' => '5',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'Una corte de llamas plateadas',
            'fecha_salida' => '2021-02-16',
            'paginas' => '688',
            'imagen' => 'cortellamas.jpg',
            'synopsis' => 'Desde que fue forzada a meterse en el Caldero y se convirtió en alta fae en contra de su voluntad, Nesta Archeron lucha por encontrar su propio lugar dentro del extraño y letal mundo en el que habita. A su temperamento irascible se suma la dificultad para superar los horrores de la guerra con Hybern y todo lo que perdió en ella.
            Mientras que Cassian, miembro de la Corte Noche de Rhysand y Feyre, es designado para entrenar a la incontrolable Nesta y entre ellos se enciende el más ardiente de los fuegos, las traidoras reinas humanas forjan una nueva y peligrosa alianza que amenaza la frágil paz establecida entre los reinos. Y la clave para detenerlas podría depender de que Cassian y Nesta logren superar sus inquietantes pasados. 
            En un mundo arrasado por la guerra, Nesta y Cassian deberán enfrentarse tanto a sus monstruos interiores como a los que acechan en el exterior, y buscarán la aceptación–y la curación–en brazos del otro.',
            'genero_id' => '1',
            'escritor_id' => '5',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'La verdad sobre el caso Harry Quebert',
            'fecha_salida' => '2012-09-19',
            'paginas' => '672',
            'imagen' => 'harry.jpg',
            'synopsis' => 'Quien mató a Nola Kellergan es la gran incógnita a desvelar en esta incomparable historia policíaca cuya experiencia de lectura escapa a cualquier tentativa de descripción.
            Intentemoslo:
            Una novela de suspense a tres tiempos -1975, 1998 y 2008- acerca del asesinato de una joven de quince años en la pequeña ciudad de Aurora, en New Hampshire.
            En 2008, Marcus Goldman, un joven escritor, visita a su mentor -Harry Quebert, autor de una aclamada novela- y descubre que este tuvo una relación secreta con Nola Kellergan. Poco despues, Harry es arrestado y acusado de asesinato al encontrarse el cadáver de Nola enterrado en su jardín.
            Marcus comienza a investigar y a escribir un libro sobre el caso. Mientras busca demostrar la inocencia de Harry, una trama de secretos sale a la luz. La verdad solo llega al final de un largo, intrincado y apasionante recorrido.',
            'genero_id' => '6',
            'escritor_id' => '8',
           
        ]); 
        DB::table('libros')->insert([
            'nombre' => 'La bruja Negra',
            'fecha_salida' => '2017-05-02',
            'paginas' => '608',
            'imagen' => 'brujanegra.jpg',
            'synopsis' => 'Carnissa Gardner, la última Bruja Negra, rechazó a las fuerzas enemigas y salvó a su pueblo durante la Guerra del Reino. Fue una de las más grandes magas Gardnerianas. Elloren Gardner, de 17 años, es la viva imagen de su famosa abuela, ahora ya muerta, aunque no tiene poderes mágicos, y eso no es bueno en una sociedad que premia las habilidades mágicas por encima de las demás.
            Despues de la muerte de sus padres, Elloren y sus hermanos son criados por su tío en una aldea en el bosque. Elloren quiere ir a la Universidad Verpax para convertirse en boticaria, pero su intrigante tía política quiere que se case con Lukas Gray, un poderoso mago y aliado político de su tía. Elloren rechaza la propuesta de Lukas, y descubre que la influencia de su tía se extiende y hace que su vida en la universidad pueda estar llena de peligros.',
            'genero_id' => '1',
            'escritor_id' => '9',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'La flor de hierro',
            'fecha_salida' => '2020-03-12',
            'paginas' => '608',
            'imagen' => 'florhierro.jpg',
            'synopsis' => 'Mientras la Resistencia lucha para contraatacar las duras decisiones del Consejo de Magos, más y más soldados gardnerianos aparecen en la Universidad, ahora dirigida por Lukas Gray, comandante de una base militar cercana. Aunque Elloren intenta mantenerlo a distancia, Lukas está decidido a unirse a ella, aún convencido de que ella es la heredera del poder de la Bruja Negra, un legado de magia que decidirá el futuro de todos los Erthia. Cuando su propia magia la llama, tratando de despertar una fuerza oscura en su interior, a Elloren le resulta cada vez más difícil creer en su valía.

            Atrapada entre sus sentimientos crecientes por el rebelde Yvan Guriel y el poder seductor de Lukas, Elloren deberá encontrar una manera de mantenerse fiel al bien común para proteger a todos los que ama... incluso si eso significa protegerse de sí misma.',
            'genero_id' => '1',
            'escritor_id' => '9',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'La varita negra',
            'fecha_salida' => '2022-04-20',
            'paginas' => '640',
            'imagen' => 'varitanegra.jpg',
            'synopsis' => 'Elloren Gardner esconde el más poderoso secreto de toda Erthia: ella es la Bruja Negra de la Profecía, y está destinada a triunfar o bien a ser utilizada como la última arma de destrucción.

            Separada de todos aquellos a los que ama, deberá recurrir a la última persona en la que puede confiar: su compañero Lukas Gray. Con las fuerzas de Gardneria preparadas para conquistar Erthia, Elloren no tendrá más remedio que aliarse con Lukas para protegerse de las garras del líder gardneriano.
            
            Con solo unas pocas semanas para entrenarse y convertirse en guerrera, y sin control sobre su propia magia, Elloren encontrará aliados inesperados entre aquellos que aparentemente están destinados a matarla. Ha llegado el momento de dar un paso al frente, de defenderse y de seguir adelante antes de que la destrucción sea todavía mayor.',
            'genero_id' => '1',
            'escritor_id' => '9',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([
            'nombre' => 'La marea Negra',
            'fecha_salida' => '2023-04-13',
            'paginas' => '600',
            'imagen' => 'mareanegra.jpg',
            'synopsis' => 'Ahora que todo el mundo sabe que ella es la Bruja Negra de la profecía, Elloren Gardner ha huido sin saber si en su camino hallará amigos o enemigos. Ahora que su pareja, Lukas Grey, puede estar muerto o en manos del Gran Mago Marcus Vogel, Elloren sabe que la única forma de darle la vuelta a la guerra que se avecina es encontrar aliados dispuestos a escucharla en lugar de asesinarla a sangre fría.

            En el Reino de Oriente, la fae de agua Tierney Calix y Trystan, el hermano de Elloren, se han unido al wyvernguard, y se están preparando para el ataque de Vogel. Pero Trystan lucha en dos frentes distintos, pues es el miembro de la guardia más odiado y del que todos desconfían. Y el vínculo de Tierney con el río más poderoso de Erthia ha desvelado un peligro más aterrador que la inminente guerra.
            
            La Bruja Negra ha vuelto y la profecía ha llegado. Es hora de luchar. Pero Vogel todavía tiene una revelación crucial para todos.',
            'genero_id' => '1',
            'escritor_id' => '9',
            'subgenero_id'=>'2',
           
        ]);
        DB::table('libros')->insert([ 
            'nombre' => 'Memorias de una geisha',
             'fecha_salida' => '1997-09-27',
             'paginas' => '552',
             'imagen' => 'geisha.jpg',
             'synopsis' => 'En Memorias de una geisha Arthur Golden abre una ventana a al hermético y misterioso mundo de las geishas de Kyoto, donde la sensualidad y la belleza se dan la mano con la degradación y el sometimiento. Poco antes de su muerte, Sayuri relata a un amigo su atribulada y fascinante vida: cómo, desde una mísera infancia, llegó a convertirse en una de las geishas más famosas del Japón de entreguerras, un país en el que aún resonaban los ecos feudales y donde las tradiciones ancestrales empezaban a convivir con los modos del mundo moderno.',
             'genero_id' => '7',
             'escritor_id' => '10',
                ]);
            
             DB::table('libros')->insert([
             'nombre' => 'La catedral del mar',
             'fecha_salida' => '2006-10-15',
             'paginas' => '672',
             'imagen' => 'catedral.jpg',
             'synopsis' => 'Siglo XIV. La ciudad de Barcelona se encuentra en su momento de mayor prosperidad; ha crecido hacia la Ribera, el humilde barrio de los pescadores, cuyos habitantes deciden construir, con el dinero de unos y el esfuerzo de otros, el mayor templo mariano jamás conocido: Santa María de la Mar.
            
            Una construcción que es paralela a la azarosa historia de Arnau, un siervo de la tierra que huye de los abusos de su señor feudal y se refugia en Barcelona, donde se convierte en ciudadano y, con ello, en hombre libre.
            
             
            El joven Arnau trabaja como palafrenero, estibador, soldado y cambista. Una vida extenuante, siempre al amparo de la catedral de la mar, que le iba a llevar de la miseria del fugitivo a la nobleza y la riqueza. Pero con esta posición privilegiada tambien le llega la envidia de sus pares, que urden una sórdida conjura que pone su vida en manos de la Inquisición...',
             'genero_id' => '4',
             'escritor_id' => '11',
            
                ]);
             DB::table('libros')->insert([
             'nombre' => 'Belladona',
             'fecha_salida' => '2022-08-30',
             'paginas' => '352',
             'imagen' => 'belladona.jpg',
             'synopsis' => 'Huerfana desde que era un bebe, Signa ha crecido con una serie de tutores,ácada cual de ellos más interesado en su fortuna que en su bienestar. Yátodos han tenido un final prematuro. Los únicos familiares que le quedanáson los esquivos Hawthorne, una familia excentrica que vive en ThornáGrove, una finca tan reluciente como sombría. Su patriarca lamenta laáperdida de su mujer celebrando fiestas salvajes, mientras que su hijo luchaápor controlar la reputación de la familia, que está en decadencia, y su hijaásufre una enfermedad misteriosa.
            
            Pero cuando el espíritu inquieto de su madre aparece reivindicando queála envenenaron, Signa se da cuenta de que la familia de la que dependeápodría correr un grave peligro, y consigue la ayuda de un hosco mozo deácuadra para atrapar al culpable.
            
            La mejor opción para descubrir al asesino es que Signa se alíe conáMuerte, una sombra fascinante y peligrosa que nunca se ha alejado deásu lado. A pesar de haber convertido su vida en un infierno, Muerte leámuestra a Signa que su creciente conexión quizás sea más poderosaá(y más irresistible) de lo que había imaginado.',
             'genero_id' => '1',
             'escritor_id' => '12',
             'subgenero_id'=>'2',
            
                ]);
            
             DB::table('libros')->insert([
             'nombre' => 'El encuadernador',
             'fecha_salida' => '2020-01-23',
             'paginas' => '480',
             'imagen' => 'encuadernador.jpg',
             'synopsis' => 'Imagina que los libros no solo contienen historias.
            
            Imagina que puedes ocultar entre sus páginas tus mayores miedos, tu  dolor más profundo, tus secretos más oscuros. A todo el mundo. Incluso a ti mismo. Para siempre.
            
            Emmett Farmer, después de un largo día de trabajo en el campo, recibe  una misteriosa carta que le cita a incorporarse como aprendiz  de  encuadernador. Es una profesión que despierta miedo y superstición en su  entorno. Sin embargo, como humilde campesino sin recursos, no le queda más remedio que abandonar la granja familiar.
            
            En la casa aislada donde vive su maestra, la anciana Seredith, Emmett  aprenderá a elaborar libros que, más allá de tener unos acabados muy  cuidados, son tomos mágicos que conservan los recuerdos de las personas y atesoran secretos del pasado.
            
            Quien quiere olvidarse de algún episodio del pasado, puede acudir al  lugar donde los encuadernadores encierran estas vivencias en volúmenes  que guardan en una cripta bajo el taller: una suerte de biblioteca del  olvido en la que todo permanece a la espera. Pero un día Emmett descubre su nombre en uno de esos libros...',
             'genero_id' => '8',
             'escritor_id' => '13',
             'subgenero_id'=>'2',
            
                ]);
            
            
             DB::table('libros')->insert([
             'nombre' => 'El imperio del vampiro',
             'fecha_salida' => '2023-01-18',
             'paginas' => '944',
             'imagen' => 'imperiovampiro.jpg',
             'synopsis' => 'Durante casi tres décadas, los vampiros han luchado contra los humanos, cimentando su imperio eterno mientras el nuestro se desangraba. Ahora los que sobrevivimos somos solo unas chispas de luz en un mar de oscuridad creciente.
            Gabriel de León es el último miembro de la Orden de Plata, dedicada a defender el reino y la iglesia antes de que los arrasaran. Su destrucción fue imparable cuando la luz del día nos abandonó.
            
            Condenado a muerte por el asesinato del rey vampírico, el último miembro de la hermandad sagrada se ve obligado a contar la historia de su vida. Una historia que abarca años, desde su juventud en el monasterio de San Michon y el amor prohibido que presagió su ruina hasta la traición que aniquiló su orden. Una historia de batallas legendarias con criaturas de la noche, de fe perdida y aliados improbables, de las guerras de la sangre, del Rey Eterno y de la última esperanza que le quedaba a la humanidad antes de que los monstruos nos redujeran a cenizas.
            
            Porque las últimas palabras de Gabriel serán, en definitiva, nuestro epitafio.',
             'genero_id' => '1',
             'escritor_id' => '6',
            
                ]);
            
             DB::table('libros')->insert([
             'nombre' => 'Asistente del villano',
             'fecha_salida' => '2023-10-05',
             'paginas' => '464',
             'imagen' => 'asistentevillano.jpg',
             'synopsis' => 'SE BUSCA ASISTENTE: Célebre villano de alta categoría busca asistente leal y sensata para llevar a cabo tareas administrativas no especificadas y ofrecer asistencia al resto del personal en las situaciones caóticas y terroríficas que puedan surgir, entre otros Asuntos Siniestros En General. Se requiere discreción. Excelentes condiciones. 
            
            Dado que Evie Sage es quien debe encargarse de mantener a su hermana y a su padre enfermo, su situación laboral no es meramente importante; es vital. Así que, cuando un percance con el Villano más infame de Rennedawn acaba en una oferta de empleo, no tiene más remedio que aceptar. Ningún trabajo es perfecto, claro, pero menos aún cuando te enamoras de tu terrorífico, temperamental e innegablemente atractivo jefe. No encuentres al mal tan atractivo, Evie. 
            
            Justo cuando se está acostumbrando a ver cabezas cortadas colgando del techo y a la extraña sensación de pisar un globo ocular extraviado mientras anda, Evie empieza a sospechar que entre esas mazmorras se esconde una enorme rata... y no solo en sentido literal. Algo podrido está emergiendo en el reino de Rennedawn, y alguien quiere acabar con El Villano y con todo su perverso imperio. Ahora Evie no solo va a tener que evitar babear por su jefe, sino también que averiguar quién es exactamente la persona que lo está saboteando para que él pueda hacérselo pagar. 
            
            Pero es que, claro, cuesta mucho encontrar un buen trabajo. ',
             'genero_id' => '1',
             'escritor_id' => '14',
             'subgenero_id'=>'2',
                ]);
            
            
             DB::table('libros')->insert([
            
             'nombre' => 'Novia',
             'fecha_salida' => '2024-03-14',
             'paginas' => '432',
             'imagen' => 'novia.jpg',
             'synopsis' => 'Misery Lark, la única hija del consejero vampírico más poderoso del suroeste, es, de nuevo, una marginada. Los días de anonimato entre los humanos se le han acabado: su padre recurre a ella para poder llevar a cabo una alianza de paz histórica entre los vampiros y sus enemigos mortales, los licántropos, por lo que no le queda más remedio que resignarse al intercambio. Otra vez...Los licántropos son despiadados e impredecibles, y su alfa, Lowe Moreland, no es la excepción. Lidera a su manada con total autoridad, pero siempre de forma justa y, a diferencia del consejo vampírico, con compasión. Por el modo en que no pierde de vista a Misery, está claro que no se fía de ella. Y bien que hace...Porque Misery tiene sus motivos para haber accedido a ese matrimonio de conveniencia, motivos que nada tienen que ver con la política ni con ninguna alianza, sino con lo único que le ha importado en la vida. Y está dispuesta a hacer lo que haga falta para recuperar lo que ha perdido, incluso si para ello debe vivir a solas en territorio licántropo; a solas con el lobo.',
             'genero_id' => '2',
             'escritor_id' => '15',
             'subgenero_id'=>'1',
                ]);
            
             DB::table('libros')->insert([
             'nombre' => 'Baile de ladrones',
             'fecha_salida' => '2022-10-10',
             'paginas' => '544',
             'imagen' => 'baileladrones.jpg',
             'synopsis' => 'Una ladrona imparable con una misión.
            
             
            El nuevo líder de una dinastía prohibida.
            
             
            Un paso adelante, un paso atrás.
            
             
            Un baile que les puede costar la vida  y el corazón.
            
             
            Cuando el patriarca de la familia Ballenger muere, su hijo Jase se  convierte en el nuevo líder de este clan de forajidos. Pero una nueva  era está por llegar, y mantener el poder de su familia no le será fácil.
            
             
            Kazi es una exladrona legendaria, enviada por su reino a investigar unos  ataques en la frontera. Cuando Kazi llega a la tierra prohibida de los  Ballenger, descubre que Jase es mucho más de lo que ella creía. A medida  que las tramas ocultas  se van desvelando, Kazi y Jase entrarán en un  juego de lealtades y secretos que cambiará sus vidas para siempre.',
             'genero_id' => '1',
             'escritor_id' => '16',
            
                ]);
            
            
             DB::table('libros')->insert([
             'nombre' => 'Palabra de ladrones',
             'fecha_salida' => '2023-01-19',
             'paginas' => '520',
             'imagen' => 'palabraladrones.jpg',
             'synopsis' => 'Una ladrona legenaria.
            Un rey ex proscrito.
            ¿Qué les depara el destino?
            
            No te pierdas la segunda parte de Danza de Ladrones, una aventura a la que no te podrás resistir.
            
            Kazi y Jase han sobrevivido, ahora con más fuerza y más enamorados que nunca. Su nueva vida los espera: los Ballenger dejarán de ser unos proscritos, la Atalaya de Tor será un reino, y Kazi y Jase se enfrentarán a todos los desafíos juntos por fin.
            
            Pero un aviso inquietante les arruinará su viaje de vuelta, y pronto se verán capturados y envueltos en una red tejida con los engaños de sus mayores enemigos. Un lugar donde las traiciones son más complejas y letales de lo que hubieran creído posible, y donde las ambiciones atemporales amenazan con destruirlos.',
             'genero_id' => '1',
             'escritor_id' => '16',
             'subgenero_id'=>'9',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Powerless',
             'fecha_salida' => '2023-07-20',
             'paginas' => '600',
             'imagen' => 'powerless.jpg',
             'synopsis' => 'Ella es lo que el ha pasado toda su vida cazando.
            
             
            Él es todo lo que ella ha pasado la vida fingiendo ser.
            
             
            Solo lo extraordinario pertenece al reino de Ilya: los excepcionales, los poderosos, los elites.
            
             
            Aquellos que nacieron vulgares son solo eso: vulgares. Y cuando el rey decreta que todos los vulgares serán eliminados para preservar su sociedad de elite, carecer de poder se vuelve un crimen, convirtiendo a Paedyn Gray en una criminal por destino y en una ladrona por necesidad. Se hace pasar por psíquica en la ciudad real, pasando desapercibida para seguir viva y fuera de peligro.
            
             
            Cuando Paedyn inesperadamente salva a uno de los príncipes de Ilya, se ve arrojada a las Pruebas de la Purga. La brutal competición existe para exhibir los poderes de los elites, algo de lo que Paedyn carece. Si la Purga y sus rivales no la matan, lo hará el príncipe cuando descubra lo que ella es en realidad...',
             'genero_id' => '1',
             'escritor_id' => '17',
             'subgenero_id'=>'9',
            
                ]);
            
             DB::table('libros')->insert([
             'nombre' => 'Rivales divinos',
             'fecha_salida' => '2023-10-10',
             'paginas' => '448',
             'imagen' => 'rivalesdivinos.jpg',
             'synopsis' => 'DOS RIVALES
            
            DOS HISTORIAS
            
            DOS CORAZONES
            
            UN DESTINO
            
            Tras permanecer dormidos durante siglos,álos dioses vuelven a la guerra...
            
            Lo único que la joven periodista Iris Winnow desea es manteneráunida a su familia. Con un hermano obligado a luchar en el bandoáde los dioses y desaparecido del frente de batalla y una madre que seáahoga en su pena, la mejor opción de Iris es obtener el ascenso a columnistaádel Oath Gazette.
            
            Pero cuando las cartas de Iris a su hermano caen en las manosáequivocadas -las del apuesto pero frío Roman Kitt, su rival en el periódico-,áse crea una extraña conexión mágica.
            
            Inmersos en el centro de una guerra mística, armados con susámáquinas de escribir, ¿podrá su vínculo superar la lucha por el destinoáde la humanidad y, lo que es más importante, de su amor?
            
            Una novela de fantasía, un enemies to loversáepico lleno de esperanza, de tristeza yádel incomparable poder del amor.',
             'genero_id' => '1',
             'escritor_id' => '18',
             'subgenero_id'=>'2',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Promesas Crueles',
             'fecha_salida' => '2024-03-12',
             'paginas' => '576',
             'imagen' => 'promesascrueles.jpg',
             'synopsis' => 'DOS CORAZONES
            
            DOS CAMINOS
            
            DOS ELECCIONES
            
            UN DESTINO
            
            Un final epico para la historia profundamenteáromántica y maravillosamente escrita que comenzóácon Rivales divinos.
            
            Han pasado dos semanas desde que Iris regresó del frente, herida yácon el corazón roto, pero la guerra dista mucho de haber terminado.
            
            Roman está en paradero desconocido, perdido tras las líneas enemigas, sin recuerdos de su pasado o de Iris. Con la esperanza de recobrarála memoria, vuelve a escribir de nuevo, pero esta vez para el enemigo.
            
            Cuando una extraña carta llega a traves de la puerta de su armario,áempieza a intercambiar mensajes con una amiga por correspondenciaáque le resulta a la vez misteriosa. y curiosamente familiar.
            
            A medida que su vínculo se consolida, ambos arriesgarán sus corazones y su futuro para cambiar las tornas de la guerra.',
             'genero_id' => '1',
             'escritor_id' => '18',
             'subgenero_id'=>'2',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El rey Oscuro',
             'fecha_salida' => '2022-05-17',
             'paginas' => '448',
             'imagen' => 'reyoscuro.jpg',
             'synopsis' => 'La oscuridad SE ALZA.
            
            ¿Quienes MORIRÁN?
            
            ¿Quienes SOBREVIVIRÁN?
            
            El rey oscuro es el comienzo de una trilogía epica,en donde los heroes y villanos de una guerra olvidada renacen y comienzan a trazar nuevas líneas de batalla.
            
            Es mucho más que una fantasía de altaáintriga: es trepidante, está llena de acción y sorprende a cada página. A los lectores les encantará explorar el rico entorno del Londres del siglo XIX. No hay dudaáde que esta emocionante historia de amistad, engaño, lealtad y traición encontrará un público apasionado.
            
            
            
            Will, un joven de dieciseis años que trabajaáen el puerto, está huyendo, perseguido por los hombres que mataron a su madre. Luego,áun viejo sirviente le revela que su destino es luchar junto a los Guardianes, quienes han jurado proteger a la humanidad si el Rey Oscuro alguna vez regresa.
            
            Will se ve inmerso en unámundo de magia, donde empieza a entrenarápara desempeñar un papel fundamental en laábatalla que se avecina contra la Oscuridad.
            
            Mientras Londres se ve amenazada y algunasáantiguas enemistades resurgen, Will deberá apoyaráa los últimos heroes de la Luz para evitaráque el destino que destruyó su mundo regrese para destruir el suyo.
            
            ',
             'genero_id' => '1',
             'escritor_id' => '19',
             'subgenero_id'=>'4',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Como las luciernagas en central park',
             'fecha_salida' => '2024-03-18',
             'paginas' => '400',
             'imagen' => 'luciernagas.jpg',
             'synopsis' => 'Acompaña a Ana en este divertido y especial recorrido por Nueva York en esta comedia romántica que te hará sonreír y suspirar.
            
            Llevo soñando con conocer Nueva York desde que era una niña. Así que, cuando un despiadado aparato de aire acondicionado me recordó lo efímera que es la existencia, decidí que no tenía tiempo que perder. 
            
            Y ahora aquí estoy, dispuesta a devorar cada rincón de la Gran Manzana.
            
            La suerte ha querido que me cruzara con una anciana maravillosa y dos hermanos con los que he acabado compartiendo techo.
            
            Y luego está Jake, el inspector que ha aceptado acompañarme a recorrer la ciudad por culpa de su sentido del deber. Aunque a veces, cuando me mira, tengo la sensación de que…
            
            No, no puede ser. Jake y yo solo somos amigos. Me da igual lo generoso, amable y guapo que sea. Puedo ignorar sus increíbles ojos azules y esos hoyuelos tan perfectos.
            
            Porque dejarme llevar con él podría complicar demasiado este viaje. Y yo no he venido a Nueva York a esto… ¿Verdad?',
             'genero_id' => '2',
             'escritor_id' => '20',
             'subgenero_id'=>'10',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Dune',
             'fecha_salida' => '1965-08-01',
             'paginas' => '784',
             'imagen' => 'dune.jpg',
             'synopsis' => 'En el desertico planeta Arrakis, el agua es el bien más preciado y llorar a los muertos, el símbolo de máxima prodigalidad. Pero algo hace de Arrakis una pieza estrategica para los intereses del Emperador, las Grandes Casas y la Cofradía, los tres grandes poderes de la galaxia. Arrakis es el único origen conocido de la melange, preciosa especia y uno de los bienes más codiciados del universo.
            
            Al duque Leto Atreides se le asigna el gobierno de este mundo inhóspito, habitado por los indómitos Fremen y monstruosos gusanos de arena de centenares de metros de longitud. Sin embargo, cuando la familia es traicionada, su hijo y heredero, Paul, emprenderá un viaje hacia un destino más grande del que jamás hubiese podido soñar.
            
             
            Mezcla fascinante de aventura, misticismo, intrigas políticas y ecologismo, Dune se convirtió,desde el momento de su publicación, en un fenómeno de culto y en la mayor epopeya de ciencia-ficción de todos los tiempos.',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El mesias de dune',
             'fecha_salida' => '1969-06-15',
             'paginas' => '304',
             'imagen' => 'mesiasdune.jpg',
             'synopsis' => 'Arrakis, tambien llamado Dune: un mundo desierto en pos del sueño  de convertirse en un paraíso, cuna de mil guerras que se han extendido  por todo el universo y de un anhelo mesiánico que intenta alcanzar el sueño más antiguo de la humanidad...
            
             
            Paul Atreides: un personaje mítico, perturbado por la cercana  presencia de una sombra dominante: su hermana Alia. Y frente a ellos,  los grandes intereses económicos, políticos y religiosos que sacuden los  espacios interestelares: la CHOAM, la Cofradía espacial, el Landsraad, la Bene Gesserit...',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Hijos de dune',
             'fecha_salida' => '1976-01-01',
             'paginas' => '608',
             'imagen' => 'hijosdune.jpg',
             'synopsis' => 'Leto Atreides, el hijo de Paul -el mesías de una religión que arrasó el  universo, el mártir que, ciego, se adentró en el desierto para morir-, tiene ahora nueve años. Pero es mucho más que un niño, porque dentro de el laten miles de vidas que lo arrastran a un implacable destino. Él y su hermana gemela, bajo la regencia de su tía Alia, gobiernan un planeta que se ha convertido en el eje de todo el universo. Arrakis, más conocido como Dune.
            
             
            Y en este planeta, centro de las intrigas de una corrupta clase política  y sometido a una sofocante burocracia religiosa, aparece de pronto un predicador ciego, procedente del desierto. ¿Es realmente Paul Atreides, que regresa de entre los muertos para advertir a   la humanidad del peligro más abominable?',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Dios emperador de dune',
             'fecha_salida' => '1981-05-28',
             'paginas' => '568',
             'imagen' => 'diosemperador.jpg',
             'synopsis' => 'Esta cuarta entrega de la saga «Dune» centra su trama en la figura mesiánica de Leto Atreides II (hijo de Paul Atreides, héroe cuya estirpe hunde sus raíces en la legendaria casa griega de los Atridas) y nos lleva, a través de diversos dilemas éticos, a comprender los mitos que necesita la humanidad y a los héroes que los encarnan. El futuro, en el mundo de Dune, pertenece solo a los que son capaces de pensar por sí mismos.',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Herejes de dune',
             'fecha_salida' => '1984-08-14',
             'paginas' => '677',
             'imagen' => 'herejesdune.jpg',
             'synopsis' => 'Esta quinta entrega de la serie prosigue con las aventuras de la estirpe de los Atreides en el fascinante planeta de arena. Nos hallamos en el futuro respecto a la acción de Dios emperador de Dune.
            
            La expansión galáctica que siguió a la muerte de Leto ha terminado. Todos regresan al planeta madre, convertido de nuevo en el mundo inhóspito y seco de sus orígenes. El delicado equilibro entre las antiguas fuerzas está a punto de romperse. En este marco aparece un nuevo personaje: Sheeana, una chica que tiene el poder de invocar, controlar y conducir a Shaihulud, el gigantesco gusano de arena...',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Casa capitular',
             'fecha_salida' => '1985-09-09',
             'paginas' => '673',
             'imagen' => 'casacapitular.jpg',
             'synopsis' => 'Las Honorables Madres se enfrentan, con sus terribles poderes, a la secular Bene Gesserit. Las revenidas Madres, ocultas y fortificadas en su planeta Casa Capitular, intentan revivir el viejo orden que les dio su antiguo poder en todo el universo. Un ghola de Miles Teg está siendo adiestrado para superar incluso a su poderoso antecesor.
            
            La unión de Duncan Idaho y Murbella, cautivos ambos en la no-nave, puede arrojar luz sobre el traumático fenómeno de la Dispersión.',
             'genero_id' => '5',
             'escritor_id' => '21',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Cazadores de dune',
             'fecha_salida' => '2006-08-22',
             'paginas' => '619',
             'imagen' => 'cazadoresdune.jpg',
             'synopsis' => 'Al final de Casa Capitular, sexto volumen de la saga y la última novela que escribió Frank Herbert, una nave en la que viajaban el ghola de Duncan Idaho, Sheeana (la joven que podría controlar a los gusanos de arena) y una tripulación de refugiados huía a los confines de la galaxia, escapando de las temibles Honoradas Matres, las oscuras homólogas de la Hermandad Bene Gesserit. Aunque también las Matres habían tenido que adentrarse en el universo conocido, al ser expulsadas de su planeta original por un temible enemigo.
            
            Años después, este enemigo extraño e implacable sigue asediando la nave de Duncan Idaho. Para ser más fuertes que él, los fugitivos han tenido que recurrir a la tecnología genética del último de los maestros Tleilaxu: así podrán revivir las figuras míticas del pasado, incluidos Paul Muad Dib y su amada Chani, lady Jessica, Stilgar, Thufir Hawat y el doctor Wellington Yueh. Cada uno de ellos deberá usar sus habilidades especiales para hacer frente a los desafíos que se les presentan.',
             'genero_id' => '5',
             'escritor_id' => '22',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Gusanos de arena de dune',
             'fecha_salida' => '2007-08-07',
             'paginas' => '605',
             'imagen' => 'gusanosarena.jpg',
             'synopsis' => 'Durante veinte años la nave Ítaca ha navegado por los confines del universo huyendo de un enemigo implacable. En ella viajan Duncan Idaho, Sheanna, los últimos gusanos de arena que pudieron salvar de Casa Capitular, un grupo de refugiados y -revividos gracias al último de los maestros Tleilaxu- los ghola de personajes míticos como Paul Muad Dib y su amada Chani, lady Jessica, Stilgar, Thufir Hawat y el doctor Wellington Yueh.
            
            Entre ellos se oculta un traidor, pero también el auténtico kwisatz haderach, el mesías de la humanidad.',
             'genero_id' => '5',
             'escritor_id' => '22',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Los jardines de la luna',
             'fecha_salida' => '1999-04-01',
             'paginas' => '776',
             'imagen' => 'jardinesluna.jpg',
             'synopsis' => 'Tras guerras interminables y amargas luchas internas, el descontento se ha apoderado del Imperio de Malaz. Incluso las tropas imperiales, siempre ansiosas por derramar sangre, necesitan un respiro. Sin embargo, las pretensiones expansionistas de la emperatriz Laseen no tienen límites, más aun cuando son reforzadas por sus temibles agentes de la Garra.
            
             
            El sargento Whiskeyjack y su escuadrón necesitan tiempo para llorar los muertos del último asedio, pero Darujhistan, la última de las Ciudades Libres de Genabackis, los espera; en ella ha puesto la emperatriz su mirada depredadora.
            
             
            El Imperio no está solo en este juego. Las fuerzas siniestras conspiran dentro y fuera de las sendas mágicas, y entretanto, hasta los dioses se preparan para la batalla...',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Las puertas de la casa de la muerte',
             'fecha_salida' => '2000-09-01',
             'paginas' => '880',
             'imagen' => 'casamuerte.jpg',
             'synopsis' => 'Debilitado por los acontecimientos en Darujhistan, el Imperio de Malaz se halla al borde de la anarquía. En el vasto dominio de las Siete Ciudades, en el desierto Santo Raraku, la vidente Sha ik y sus seguidores se preparan para el Torbellino, la sublevación profetizada desde hace mucho tiempo. Será un brote de fanatismo que envolverá al imperio en un salvajismo y una sed de sangre sin precedentes. Estallará uno de los conflictos más sangrientos de su historia y surgirán nuevos destinos y leyendas...
            
            En las minas de otaralita, Felisin sueña con vengarse de su hermana, que la condenó a una vida de esclava. Los ahora-proscritos Abrasapuentes, Violín y el asesino Kalam han jurado devolver a Apsalar a su patria y matar a la emperatriz Laseen.
            
            Mientras tanto, Coltaine, el carismático comandante malazano, conduce a sus soldados a una última batalla para salvar la vida de treinta mil refugiados. Y a esa tierra arruinada llegan dos viejos conocidos, Mappo y el jaghut Icarium, portadores de un secreto devastador que amenaza con liberarse de sus cadenas...',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Memorias de hielo',
             'fecha_salida' => '2001-12-06',
             'paginas' => '1184',
             'imagen' => 'memoriashielo.jpg',
             'synopsis' => 'Una fuerza aterradora ha surgido en el continente asolado de Genabackis. Como una marea de sangre corrompida, el Dominio Painita cruza el continente como lava hirviente que consume a todos los que no escuchan la palabra de su profeta, el Vidente Painita. En su camino se interpone una alianza incómoda: la hueste de Dujek Unbrazo y los veteranos Abrasapuentes de Whiskeyjack, junto con antiguos adversarios: el caudillo Caladan Brood, Anomander Rake y sus tiste andii. Superados en número y desconfiando de todo y de todos, deben hacer llegar el mensaje a cualquier posible aliado, incluyendo las Espadas Grises, una hermandad mercenaria que ha jurado defender a toda costa la ciudad sitiada de Capustan.
            
            Pero son más los clanes antiguos que se están reuniendo. Los t#lan imass se alzan para responder a una antigua llamada primitiva. Algo maligno amenaza este mundo: las sendas están envenenadas y abundan los rumores sobre un dios que se ha deshecho de sus cadenas y está empeñado en vengarse...',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La casa de cadenas',
             'fecha_salida' => '2002-01-29',
             'paginas' => '944',
             'imagen' => 'casacadenas.jpg',
             'synopsis' => 'Este volumen comienza en el norte de Genabackis, el día que empieza el extraordinario destino de Karsa Orlong, uno de los tres guerrerossalvajes que descienden las montañas para atacar las tierras del sur. Pasados unos años, Tavore, la inexperta consejera de la emperatriz, debe adiestrar a doce mil soldados para convertirlos en una fuerza capaz de desafiar a las hordas de la elegida, Sha ik, que aguardan en el desierto. Allí, sus caudillos están enzarzados en una lucha de poder que amenaza al alma de la rebelión, mientras que Sha ik se obsesiona con la que cree que es su mayor enemiga: su hermana.',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Mareas de medianoche',
             'fecha_salida' => '2004-03-01',
             'paginas' => '896',
             'imagen' => 'mareasmedianoche.jpg',
             'synopsis' => 'Después de décadas de guerras intestinas, las tribus de los Tiste Edur al fin se han unido bajo el mando del Rey Warlock.
            
            Hay paz, pero el precio ha sido terrible: un pacto hecho con un poder oculto cuyos motivos son, en el mejor de los casos, sospechosos, y, en el peor, mortales. Al sur, el rapaz reino de Lether, impaciente por ver cumplido el papel que profetizaron para él largo tiempo atrás como imperio renacido, ha esclavizado a sus vecinos menos civilizados. Es decir, a todos salvo a los Tiste Edur. El destino ha decretado que también ellos han de caer. Y, sin embargo, la lucha inminente que librarán estos dos pueblos no es más que un pálidoreflejo de un conflicto más primitivo. Se están reuniendo antiguas fuerzas y con ellas la herida todavía abierta de una vieja traición y un ansia de venganza...',
             'genero_id' => '1',
             'escritor_id' => '23',      
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Los cazahuesos',
             'fecha_salida' => '2006-03-01',
             'paginas' => '1120',
             'imagen' => 'cazahuesos.jpg',
             'synopsis' => 'La rebelión de Siete Ciudades ha sido aplastada. Queda una última fuerza rebelde oculta en la ciudad de Y’Ghatan bajo el mando fanático de Leoman de los Mayales. La perspectiva de sitiar esta antigua fortaleza inquieta al agotado Decimocuarto Ejército de Malaz. Fue allí donde cayó asesinado el mejor paladín del Imperio y se derramó una marea de sangre malazana. Pero eso no es más que una distracción. Hay agentes de un conflicto mucho mayor que ya han empezado a hacer sus primeros movimientos. Al dios Tullido se le ha concedido un lugar en el panteón y amenaza con abrirse un cisma. Hay que elegir bando. Pero decida lo que decida cada dios, las reglas han cambiado, y la primera sangre que caerá será en el mundo de los mortales...',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La tempestad del segador',
             'fecha_salida' => '2007-05-07',
             'paginas' => '1168',
             'imagen' => 'tempestadsegador.jpg',
             'synopsis' => 'En el imperio letherii reina el desconcierto. Mientras el emperador Rhulad Sengar, rodeado de aduladores y comisionados de su maquiavélico canciller, se precipita a la locura, los agentes secretos letherii llevan a cabo una campaña de terror contra su propia gente. El Errante, en otro tiempo un dios clarividente, parece ahora incapaz de ver el futuro. Las conspiraciones recorren el palacio y el imperio, manejado por corruptos e interesados, está al borde de una guerra sin precedentes con los reinos vecinos.
            
            Por otra parte, la flota Edur se encuentra cada vez más cerca. Entre sus guerreros se hallan Karsa Orlong e Icarium Robavida, cuya mera presencia significa que correrá sangre. Pero una pequeña banda de fugitivos está decidida a escapar del imperio y salvar al emperador. Se aproxima un ajuste de cuentas y su magnitud será inimaginable.',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Doblan por los mastines',
             'fecha_salida' => '2008-06-30',
             'paginas' => '1168',
             'imagen' => 'doblanmastines.jpg',
             'synopsis' => 'En Darujhistan, la ciudad del fuego azul, se dice que el amor y la muerte llegarán bailando. Transcurre el verano y el calor es sofocante, pero al hombre redondo y pequeño con el chaleco rojo desteñido le molesta algo más que el sol. Las cosas no van bien. Funestos presagios plagan sus noches y acechan las calles de la ciudad como demonios de las sombras. Los asesinos acechan por los callejones, pero han cambiado las tornas y los cazadores son presas.
            
            Unas manos ocultas rompen las ataduras de la tiranía. Mientras los bardos cantan sus trágicas historias, en algún lugar lejano se oye el aullido de los mastines... Y en la distante ciudad de Coral Negro, donde gobierna el Hijo de la Oscuridad, hay sed de venganza. Parece que el amor y la muerte van a llegar de la mano... y bailando.',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Polvo de sueños',
             'fecha_salida' => '2009-08-18',
             'paginas' => '1168 ',
             'imagen' => 'polvosueños.jpg',
             'synopsis' => 'En el continente Letherii, el ejército exiliado malazano, comandado por la consejera Tavore, comienza la marcha hacia los eriales del este para combatir por una causa desconocida contra un enemigo que jamás ha sido visto. El destino que aguarda a los Cazahuesos es por demás incierto. Nada saben del enemigo y la única arma que merece ser empuñada es el coraje.
            
            En la guerra todos pierden, y esta certeza se percibe en la mirada de cualquier soldado. El último gran ejército del Imperio de Malaz busca una batalla final en nombre de la redención, pero quedan por responder algunas preguntas finales...',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El Dios Tullido',
             'fecha_salida' => '2011-02-15',
             'paginas' => '1168',
             'imagen' => 'diostullido.jpg',
             'synopsis' => 'Masacrados por los k chain nah ruk, los Cazahuesos marchan hacia Kolanse, donde les aguarda un destino desconocido. El ejército está al filo del motín, pero la consejera Tavore no cede. Queda un acto final. Tavore pretende desafiar a los dioses, pero sus tropas pueden matarla a ella antes. Los forkrul assail esperan a Tavore y a sus aliados; son los árbitros finales de la humanidad. Ansían aniquilar a todos los humanos para comenzar de nuevo.
            
            En el reino de Kurald Galain, una muchedumbre de refugiados se reúne en la Primera Orilla. Liderados por Yedan Derryg, esperan la fractura de Cascada de Luz y la llegada de los tiste liosan. Es una guerra que no pueden ganar, y morirán en nombre de una ciudad vacía y de una reina sin súbditos.',
             'genero_id' => '1',
             'escritor_id' => '23',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El silmarillon',
             'fecha_salida' => '1977-09-15',
             'paginas' => '448',
             'imagen' => 'silmarillon.jpg ',
             'synopsis' => 'El Silmarillion cuenta la historia de la Primera Edad, el antiguo drama del que hablan los personajes de El Señor de los Anillos, y en cuyos acontecimientos algunos tomaron parte, como Elrond y Galadriel...',
             'genero_id' => '1',
             'escritor_id' => '2',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Historias de mujeres samurais',
             'fecha_salida' => '2023-10-10',
             'paginas' => '166',
             'imagen' => 'mujeressamurai.jpg',
             'synopsis' => 'El arte del combate y el noble código de los samuráis japoneses son objeto de fascinación en todo el mundo. Sin embargo, apenas se conoce que existieron también algunas guerreras formidables, mujeres extraordinarias que desafiaron su destino y escaparon del rol que la sociedad les reservaba. Tras un largo y esmerado proceso de investigación, Benjamin Lacombe y Sébastien Perez nos ofrecen en este libro siete relatos inspirados en las historias reales o legendarias de siete mujeres samuráis; como la emperatriz Jingu, que se cuenta que conquistó tres reinos enemigos en el siglo III, o Nagano Takeko, que lideró un ejército de mujeres en el siglo XIX.
            
            Una magnífica propuesta literaria y visual que nos acerca de nuevo a la cultura japonesa y nos descubre la existencia de estas extraordinarias y desconocidas guerreras que se atrevieron a desafiar su destino.',
             'genero_id' => '4',
             'escritor_id' => '24',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Historias de fantasmas de japon',
             'fecha_salida' => '2019-10-01',
             'paginas' => '175',
             'imagen' => 'fantasmasjapon.jpg',
             'synopsis' => 'Lafcadio Hearn, nacido en la isla griega de Léucade en 1850 y fallecido en Tokio en 1904, fue el primer gran japonólogo de la literatura occidental, por sus relatos de fantasmas y sus libros de divulgación. Gracias a su mujer nipona conoció los cuentos tradicionales sobre espectros y apariciones, que se encargó de convertir en nuevos relatos tras someterlos a un cuidado proceso de reescritura y reelaboración. 
            Esta edición reúne 11 de esas inquietantes historias, pobladas de fantasmas, espíritus y otros seres sobrenaturales.',
             'genero_id' => '4',
             'escritor_id' => '25',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Espiritus y criaturas de japon',
             'fecha_salida' => '2021-03-22',
             'paginas' => '162',
             'imagen' => 'criaturasjapon.jpg',
             'synopsis' => 'Lafcadio Hearn, nacido en la isla griega de Léucade en 1850 y fallecido en Tokio en 1904, fue el primer gran japonólogo de la literatura occidental, por sus relatos de fantasmas y sus libros de divulgación.
            Gracias a su mujer nipona conoció los cuentos tradicionales sobre espectros y apariciones, que se encargó de convertir en nuevos relatos tras someterlos a un cuidado proceso de reescritura y reelaboración.
            En este nuevo volumen, tras el gran éxito de Historias de fantasmas de Japón, Benjamin Lacombe vuelve a encontrarse con la voz de Hearn para ilustrar otros nueve relatos tradicionales nipones que nos descubren criaturas tan intimidantes y fascinantes como el samébito, los kitsune o los oshidori.',
             'genero_id' => '4',
             'escritor_id' => '25',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Dando vueltas por tu interior',
             'fecha_salida' => '2021-04-29',
             'paginas' => '112',
             'imagen' => 'dandovueltas.jpg',
             'synopsis' => 'Dando vueltas por tu interior es un libro íntimo y  maravilloso en  que el ilustrador Inkoherente, a traves de sus sutiles  viñetas, nos entrega un mensaje profundo de autoconocimiento y una perspectiva distinta, o que todavía no hemos visto, para enfrentar la vida.
            
            ¿Que es lo que me pasa?
            
             
            ¿Lo podre lograr? ¿Pasa algo si no?
            
             
            ¿Está bien sentir lo que siento?  ',
             'genero_id' => '11',
             'escritor_id' => '26',
             'subgenero_id'=>'10',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Donde surgen las sombras',
             'fecha_salida' => '2006-09-22',
             'paginas' => '248',
             'imagen' => 'surgensombras.jpg',
             'synopsis' => 'Una novela de misterio en la que, en el juego de la vida, la amistad es la única posibilidad de salvación.
            Álex, un adolescente aficionado a los videojuegos, no parece tener ningún problema... hasta que un día desaparece sin dar explicaciones. Sus amigos inician una búsqueda a contrarreloj salpicada de dificultades y atroces asesinatos. 
            ¿Qué o quién está detrás de esas muertes? Una novela de misterio que destaca la fuerza de la amistad en la superación de dificultades.',
             'genero_id' => '8',
             'escritor_id' => '27',
             'subgenero_id'=>'7',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El sobrino del mago',
             'fecha_salida' => '1955-05-02',
             'paginas' => '160',
             'imagen' => 'sobrinomago.jpg',
             'synopsis' => 'Narnia… donde los bosques son tupidos y frescos, donde animales parlantes cobran vida… un nuevo mundo donde comienza la aventura.
            
            Digory y Polly se conocen y se hacen amigos durante un frío y húmedo verano en Londres. Su vida se llena de aventuras cuando el tío de Digory, Andrew, quien se cree mago, los envía a… otro lugar. Allí encuentran el camino a Narnia, que acaba de surgir con la canción del león, y se encuentran con la malvada hechicera Jadis, para luego regresar finalmente a casa.',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El leon,la bruja y el armario',
             'fecha_salida' => '1950-10-16',
             'paginas' => '202',
             'imagen' => 'leonbruja.jpg',
             'synopsis' => 'Abrieron una puerta, y entraron a un nuevo mundo.
            
            Narnia ... la tierra que se encuentra más allá del ropero, el país secreto que sólo conocen Pedro, Susana, Edmundo y Lucía . . . el lugar donde empieza la aventura.
            
            Lucía es la primera en encontrar el ropero secreto en la vieja y misteriosa casa del profesor. Al comienzo, nadie le cree cuando habla de sus aventuras en la tierra de Narnia. Pero muy pronto, Edmundo, Pedro y Susana descubren la magia y conocen al Gran León Aslan. En un abrir y cerrar de ojos, sus vidas cambian para siempre.',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            ]);
            
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El caballo y el muchacho',
             'fecha_salida' => '1954-09-06',
             'paginas' => '286',
             'imagen' => 'caballomuchacho.jpg',
             'synopsis' => 'Galopando Hacia La Libertad
            
            Narnia… donde los caballos hablan… donde se prepara una traición… donde aguarda el destino.
            
            Embarcados en un viaje desesperado, dos fugitivos se encuentran y deciden unir fuerzas. Aunque sólo buscan escapar de las dificultades que plagan sus vidas, pronto se encuentran en medio de una peligrosa batalla. Una batalla que determinará su propio destino y el de la tierra de Narnia.',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El principe Caspian',
             'fecha_salida' => '1951-10-15',
             'paginas' => '288',
             'imagen' => 'principecaspian.jpg',
             'synopsis' => 'Narnia ha permanecido en paz desde que Pedro, Susana, Edmundo, y Lucia derrotaron a la malvada Bruja pero ahora que los niños han regresado a su mundo real, una obscura presencia se apodera de esta magica ciudad una vez mas.Mientras el malevolo Rey Miraz somete a Narnia con su perverso regimen, el Principe Caspian se niega a colaborar con su tio, pierde su derecho al trono, y decide juntar un ejercito para liberar sus tierras. Pero en ultimas, sera una batalla de honor entre los dos hombres, la que terminara¡ decidiendo el destino del mundo entero. ',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La travesia del viajero del alba',
             'fecha_salida' => '1952-09-15',
             'paginas' => '320',
             'imagen' => 'viajeroalba.jpg',
             'synopsis' => 'Un Viaje Al Fin Del Mundo
            
            Narnia. . . donde un dragón despierta... donde las estrellas rondan la tierra... donde cualquier cosa puede suceder.
            
            Un rey y unos compañeros inesperados se embarcan en un viaje que los llevará más allá de toda tierra conocida. A medida que navegan más y más lejos de aguas conocidas, descubren que su búsqueda es más enorme de lo que jamás se habían imaginado y que el fin del mundo es solo el principio.',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La silla de plata',
             'fecha_salida' => '1953-09-07',
             'paginas' => '368',
             'imagen' => 'sillaplata.jpg',
             'synopsis' => 'A través de peligros inauditos y cavernas profundas, marcha un noble grupo de amigos al rescate de un príncipe cautivo.
            Sin embargo, su misión en la Tierra Inferior los lleva a enfrentarse cara a cara con una maldad más hermosa y letal de lo que habrían esperado encontrar jamás. ',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La ultima batalla',
             'fecha_salida' => '1956-09-04',
             'paginas' => '176',
             'imagen' => 'ultimabatalla.jpg',
             'synopsis' => 'El unicornio afirma que los humanos son traídos a Narnia cuando allí hay agitación y problemas. Y Narnia está en problemas ahora: Un falso Aslan vaga por la tierra. La única esperanza es que Eustace y Jill, viejos amigos de Narnia, puedan encontrar al verdadero Aslan y devolverle la paz a la tierra. Su tarea es difícil pues, como dice el centauro: «Las estrellas no mienten nunca, pero los hombres y las bestias sí». ¿Quién es el verdadero Aslan y quién el impostor? .',
             'genero_id' => '1',
             'escritor_id' => '28',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El valle de los lobos',
             'fecha_salida' => '2000-09-09',
             'paginas' => '271',
             'imagen' => 'vallelobos.jpg',
             'synopsis' => 'Dana creció junto a sus hermanos llevando una vida normal. El día que el Maestro la llevó con él a la Torre, en el Valle de los Lobos, no se imaginaba que su vida cambiaría para siempre y que se convertiría en la depositaria de secretos tan mágicos como antiguos. ¿Qué aventuras le depara el destino a nuestra joven heroína? Fantástico libro donde nos acercamos a un mundo poblado de seres mágicos y criaturas sobrenaturales.',
             'genero_id' => '1',
             'escritor_id' => '29',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La maldicion del maestro',
             'fecha_salida' => '2001-06-14',
             'paginas' => '239',
             'imagen' => 'maldicionmaestro.jpg',
             'synopsis' => 'Dana, la actual Señora de la Torre, deberá enfrentarse nuevamente al Maestro; junto a Fenris, el elfo, tendrá que impedir que se cumpla la venganza del Amo de la Torre. ¿Conseguirán nuestros héroes que triunfe su rebelión? Imaginación y fantasía se unen en esta historia de luchas y seres mágicos.',
             'genero_id' => '1',
             'escritor_id' => '29',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La llamada de los muertos',
             'fecha_salida' => '2003-03-06',
             'paginas' => '239',
             'imagen' => 'llamadamuertos.jpg',
             'synopsis' => 'Tras la llegada a la Torre de Saevin, un muchacho con unos poderes excepcionales, Dana siente que algo extraño está a punto de suceder y decide viajar a la Ciudad Olvidada para visitar el Templo Sin Nombre y consultar al oráculo. La aterradora profecía que sale de su boca y en la que se verán implicadas once personas la inquieta todavía más. Pero ¿existe alguien capaz de manipular los designios del destino?',
             'genero_id' => '1',
             'escritor_id' => '29',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Fenris, el elfo',
             'fecha_salida' => '2004-02-18',
             'paginas' => '322',
             'imagen' => 'fenris.jpg',
             'synopsis' => 'Fenris es un elfo muy especial, tiene poderes inexplicables y en las noches de luna llena se transforma en un ser extraordinario; su amor por Shi-Mae y su enfrentamiento con personajes poderosos del Reino de los Elfos marcarán sus aventuras. ¿Cumplirá su destino y llegará a la Torre, situada en el Valle de los Lobos? Libro que muestra fantásticas batallas entre seres sobrenaturales.',
             'genero_id' => '1',
             'escritor_id' => '29',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El prohibido libro bondadoso',
             'fecha_salida' => '2012-02-10',
             'paginas' => '160',
             'imagen' => 'librobondadoso.jpg',
             'synopsis' => 'Fede y Betty son dos hadas un poco particulares, a quienes el gran Magnus Myst ha encargado la misión de encontrar el más poderoso objeto mágico: el Elemental. Pero solo lo pueden conseguir con tu ayuda, querido lector. A lo largo de las páginas de este libro encontrarás las claves para descubrir el misterio. Pero debes de tener mucho cuidado: cualquier error puede ser fatal.',
             'genero_id' => '1',
             'escritor_id' => '30',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'El medallon perdido',
             'fecha_salida' => '2001-09-26',
             'paginas' => '176',
             'imagen' => 'medallonperdido.jpg',
             'synopsis' => 'Benjamín va a pasar el verano a África, a la casa de su tío Sebastián, cerca de la zona donde dos años antes murió su padre en un accidente de avión. Durante su estancia en Gabón, Benjamín recupera la memoria de su padre, aprende a conocerse a sí mismo y a los demás, y vive su primera historia de amor. Como le dice su tío, África cambia a las personas, y él no es una excepción.',
             'genero_id' => '7',
             'escritor_id' => '31',
             'subgenero_id'=>'9',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ola de calor',
             'fecha_salida' => '2009-09-29',
             'paginas' => '360',
             'imagen' => 'olacalor.jpg',
             'synopsis' => ' Nikki Heats se enfrenta a un desafío inesperado cuando el inspector jefe le asigna de compañero al famoso periodista Jameson Rook, ganador de un premio Pulitzer, quien deberá acompañarla en una investigación para escribir uno de sus artículos.
            
            El caso que deben investigar es misterioso y complicado: un magnate inmobiliario del estado de Nueva York ha muerto desplomado sobre una de las aceras de la ciudad; una esposa florero con un sombrío pasado ha escapado de milagro a un descarado ataque; los principales sospechosos de las agresiones, gánsteres y hombres de negocios con poder con motivos de sobra para asesinar, recitan de memoria sus coartadas. Y, en medio de una sofocante ola de calor, un nuevo homicidio tiene lugar y da comienzo a un tenso viaje por los pequeños y oscuros secretos de los ricos.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Calor desnudo',
             'fecha_salida' => '2011-02-16',
             'paginas' => '528',
             'imagen' => 'calordesnudo.jpg',
             'synopsis' => 'Cuando la columnista de cotilleos más despiadada de Nueva York, Cassidy Towne, aparece muerta, Nikki Heat descubre toda una galería de posibles sospechosos, y todos tienen motivos de peso para haber asesinado a la más temida destapadora de escándalos de Manhattan.
            
            La investigación del asesinato de Nikki se complica con la reunión sorpresa que tiene con el famoso periodista Jameson Rook. Su ruptura todavía está muy reciente y Nikki prefiere no tener que cargar con ese áspero bagaje emocional. Aunque la intromisión en el caso del atractivo y sobradamente intelectual escritor, ganador de un premio Pulitzer, la obligará a formar equipo con él una vez más. Los residuos no resueltos de su conflicto romántico y la creciente tensión sexual llena todo el aire mientras Nikki y Jameson se embarcan en la búsqueda de un criminal entre famosos y gánsteres, cantantes y prostitutas, atletas profesionales y políticos avergonzados.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Aumenta el calor',
             'fecha_salida' => '2012-09-15',
             'paginas' => '424',
             'imagen' => 'aumentacalor.jpg',
             'synopsis' => 'El insólito asesinato de un sacerdote en un club sadomasoquista neoyorquino abre el caso más apasionante y peligroso de Nikki Heat hasta el momento, en el que tendrá que hacer frente al narcotraficante más corrupto de Nueva York, a un arrogante asesor externo de la CIA y a un misterioso escuadrón de la muerte decidido a acabar con ella a tiros. Y eso es solo la punta de un iceberg que destapa una siniestra conspiración que salpica a las más altas esferas de la policía de Nueva York.
            
            Pero en el momento en que se acerca demasiado a la verdad, Nikki es desprestigiada, despojada de su placa y abandonada a su suerte como blanco perfecto de unos asesinos, sin nadie en quien confiar. Salvo quizáen el único hombre de su vida que no es policía: el periodista Jameson Rook. En pleno invierno neoyorquino, el más frío de los últimos cien años, hay algo que Nikki está decidida a demostrar: que aumenta el calor.',
             'genero_id' => '12',
             'escritor_id' => '32',

            
                ]);
            
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Calor helado',
             'fecha_salida' => '2013-04-10',
             'paginas' => '480',
             'imagen' => 'calorhelado.jpg',
             'synopsis' => 'La detective de homicidios del departamento de policía de Nueva York, Nikki Heat llega a su última escena del crimen en la que aparece una mujer desconocida apuñalada hasta la muerte y metida en una maleta abandonada en una calle de Manhattan. Nikki entra en un gran shock cuando se da cuenta de que este asesinato está conectado a la muerte no resuelta de su propia madre. Una vez más, junto a su compañero sentimental y de investigación, el periodista Jameson Rook, Heat volverá a trabajar para resolver el misterio del cuerpo de la maleta mientras se ve obligada a enfrentarse a los resquicios desconocidos de la vida de su madre.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Calor mortal',
             'fecha_salida' => '2013-09-17',
             'paginas' => '432',
             'imagen' => 'calormortal.jpg',
             'synopsis' => 'La detective de homicidios del Departamento de Policía de Nueva York Nikki Heat está determinada a atrapar al escurridizo agente de la CIA que ordenó la ejecución de su madre hace más de una década. Para dar caza al asesino, Heat se une una vez más a su pareja, el periodista de investigación Jameson Rook. Pero su búsqueda del antiguo espía y el motivo del asesinato desvela un alarmante complot terrorista que no es para nada cosa del pasado. Es letal. Es ahora. Y ya ha comenzado su cuenta atrás.
            
            Para complicar aún más la misión de llevar al espía ante la justicia y frustrar la amenaza terrorista que se avecina, un asesino en serie atemoriza a la ciudad y la brigada de homicidios está bajo presión para detenerlo, y pronto. El asesino no solo ha señalado a Nikki como destinataria exclusiva de sus mensajes insultantes, sino que también ha puesto nombre a su próxima víctima: la detective Heat.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Calor asfixiante',
             'fecha_salida' => '2015-11-05',
             'paginas' => '448',
             'imagen' => 'calorasfixiante.jpg',
             'synopsis' => 'Un inmigrante ilegal cae aparentemente del cielo. La investigación sobre esta extraña muerte es asignada a la detective de Homicidios Nikki Heat y atrae irresistiblemente la atención de su novio, el periodista Jameson Rook. Cuando decide trabajar en el caso con ella para convertirlo en su próximo gran reportaje, Nikki se alegra de poder pasar tiempo juntos. Hasta que las pesquisas de Rook concluyen en que Heat ha arrestado al hombre equivocado por el asesinato.
            
            Compaginar su exigente trabajo con una tormentosa relación ha sido todo un reto para Nikki desde que se enamoró de Jameson. Ahora, a causa del caso más arriesgado de su carrera, su relación ha pasado de ser complicada a conflictiva. Mientras el huracán Sandy amenaza con arrasar Nueva York, Heat se enfrenta a poderosos enemigos, lucha contra un grupo de mercenarios urbanos, y choca con el hombre al que ama. Heat sabe que su trabajo es aclarar asesinatos. Ahora su temor es que resolver este provoque la muerte de su relación.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Calor extremo',
             'fecha_salida' => '2016-03-17',
             'paginas' => '496',
             'imagen' => 'calorextremo.jpg',
             'synopsis' => 'En la séptima entrega de la serie protagonizada por Nikki Heat, la detective se despierta su primera mañana como capitán de la policía de Nueva York con la terrible noticia de que su psiquiatra ha aparecido muerto en el río Hudson. Y eso no es todo, porque pronto descubrirá que su novio, el periodista Jameson Rook, ha estado entrevistando en secreto a su terapeuta como parte de la investigación para un nuevo y explosivo artículo.
            
            El sentimiento de traición de Heat se agrava con la negativa de Rook a compartir información confidencial sobre la víctima. Su relación de pareja no pasa por su mejor momento y, sin el apoyo de su psiquiatra para afrontar las dudas que le surgen sobre su compromiso matrimonial, Nikki está cada vez más confusa.
            
            Y, mientras tanto, sobre la mesa de su despacho tiene nada menos que diez sospechosos en la investigación por el asesinato...',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Mas calor',
             'fecha_salida' => '2016-11-10',
             'paginas' => '416',
             'imagen' => 'mascalor.jpg',
             'synopsis' => 'La comisaria de la policía de Nueva York ha recibido un vídeo tan horrible como impactante: la decapitación de una periodista por un grupo terrorista que afirma pertenecer al Estado Islámico. Pero lo peor está por llegar cuando los verdugos declaran que su siguiente objetivo es el famoso reportero Jameson Rook.
            
            Desesperada por garantizar su seguridad, Heat intenta contactar a Rook, que se encuentra fuera escribiendo un reportaje sobre el candidato presidencial Piernas Kline, repentino favorito en la carrera a la Casa Blanca. Cuando, para su desesperación, Rook resulta ilocalizable, Heat se da cuenta de que solo hay una manera de evitar que los asesinos hagan daño a su marido: atraparlos antes.
            
            Pero, como si este caso no fuera suficiente para poner su vida patas arriba, Nikki comienza a verse perseguida por la imagen de una mujer que se ha cruzado casualmente en la calle y que podría jurar que es su madre... que murió hace casi veinte años.',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Tormenta de calor',
             'fecha_salida' => '2017-05-18',
             'paginas' => '432',
             'imagen' => 'tormentacalor.jpg',
             'synopsis' => 'La comisaria de la policía de Nueva York Nikki Heat y el detective Derrick Storm unen fuerzas por primera vez para salvar a la madre de Nikki, Cynthia, que, tras fingir su muerte, lleva escondida más de 17 años. En su camino deberán enfrentarse a un grupo de empresarios chinos sin escrúpulos conocidos como los Siete de Shanghái, que emplearán todos los recursos, y la crueldad, necesarios para detenerlos.
            
            ',
             'genero_id' => '12',
             'escritor_id' => '32',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Assasin Creed:Renaissance',
             'fecha_salida' => '2009-11-11',
             'paginas' => '496',
             'imagen' => 'renaissance.jpg',
             'synopsis' => '"Buscaré la venganza contra aquellos que traicionaron a mi familia. Soy Ezio Auditore di Firenze. Soy un assassin…" 
            
            Traicionado por las familias que gobiernan Florencia, Venecia y Roma en la Italia del Renacimiento, el joven Ezio Auditore se embarca en una épica lucha por erradicar la corrupción y restaurar el honor de su familia. Para ello deberá aprender el arte de la muerte. 
            
            En su camino de venganza y lucha se encontrará con las grandiosas mentes de Leonardo da Vinci y Maquiavelo; deberá decidir entre el amor y su destino y descubrirá que este último es mucho más complejo y elevado de lo que nunca imaginó. 
            
            Para sus aliados, Ezio se convertirá en la fuerza que les guiará en pos de la libertad y la justicia. Para sus enemigos, en una amenaza consagrada a la destrucción de los tiranos que abusan del pueblo italiano. 
            
            Una historia épica de poder y venganza en la que la verdad se escribirá con sangre. ',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La hermandad',
             'fecha_salida' => '2010-11-25',
             'paginas' => '400',
             'imagen' => 'hermandad.jpg',
             'synopsis' => '«Viajaré hasta el corazón negro de un imperio corrupto para acabar con mis enemigos. Pero Roma no se construyó en un día y no será un asesino solitario el que la restablezca. Soy Ezio Auditore da Firenze. Esta es mi hermandad.»
            
            Roma, que una vez fue poderosa, está en ruinas. La ciudad está plagada de sufrimiento y degradación, y sus habitantes viven a la sombra de la implacable familia Borgia. Tan sólo un hombre puede liberar al pueblo de la tiranía de los Borgia: Ezio Auditore, el maestro asesino.
            
            La búsqueda de Ezio le pondrá a prueba. Cesare Borgia, un hombre más infame y peligroso que su padre el Papa, no descansará hasta conquistar Italia. Y en una época tan traicionera, la conspiración está en todas partes, incluso dentro de la misma Hermandad',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'La cruzada secreta',
             'fecha_salida' => '2012-05-15',
             'paginas' => '352',
             'imagen' => 'hermandadsecreta.jpg',
             'synopsis' => 'Nicolás Polo, padre de Marco, por fin revelará la historia que ha mantenido en secreto toda su vida: la historia de Altaïr, uno de los Asesinos más extraordinarios de la Hermandad.   Altaïr se embarca en una formidable misión que le lleva por Tierra Santa y le muestra el verdadero significado del Credo de los Asesinos. Para demostrar su compromiso, Altaïr debe derrotar a nueve enemigos mortales, incluido el líder templario, Robert de Sablé.   Por primera vez, se cuenta la vida de Altaïr: un viaje que cambiará el curso de la historia; su batalla continua con la conspiración templaria; una vida familiar tan trágica como reveladora; y la máxima traición de un viejo amigo.    ',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Revelations',
             'fecha_salida' => '2013-02-05',
             'paginas' => '400',
             'imagen' => 'revelations.jpg',
             'synopsis' => 'Mayor, más sabio y letal que nunca, el Maestro Asesino Ezio Auditore se embarca en un viaje épico para encontrar la biblioteca perdida de Altaïr, una biblioteca que tal vez tenga la clave para derrotar a los Templarios de una vez por todas. Sin embargo, le aguarda un horrible descubrimiento. La biblioteca no sólo contiene conocimiento oculto sino el secreto más inquietante que el mundo jamás haya conocido; un secreto que los Templarios esperan usar para controlar el destino de la humanidad. Se necesitan cinco llaves para acceder a la biblioteca y para encontrarlas Ezio debe viajar a la agitada ciudad de Constantinopla, donde un ejército de Templarios cada vez mayor amenaza con desestabilizar el Imperio otomano.Siguiendo los pasos de su predecesor, Altaïr, Ezio debe derrotar a los Templarios por última vez. Nunca había habido tanto en juego y lo que empezó como una peregrinación se ha convertido en una carrera contra reloj…',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            DB::table('libros')->insert([
             'nombre' => 'Forsaken',
             'fecha_salida' => '2015-01-13',
             'paginas' => '480',
             'imagen' => 'forsaken.jpg',
             'synopsis' => '«Soy un experto espadachín y tengo una gran habilidad en el manejo de la muerte. No es una habilidad que me aporte placer pero se me da bien, simplemente».
            
            
            
            
            
            1735. Londres. 
            
            
            
            Haytham Kenway ha aprendido a manejar la espada desde que era un niño y fue capaz de sostener el peso del arma. Cuando su hogar sufre un terrorífico ataque en el que su padre es asesinado y su hermana secuestrada, Haytham se ve obligado a defender a los suyos del único modo que sabe: matando. Un misterioso tutor se hace cargo de él y le enseña a convertirse en un asesino letal. Consumido por la sed de venganza, Haytham inicia la búsqueda que le lleve hasta aquellos que acabaron con su familia, sin confiar en nadie, poniendo en duda todo aquello que aprendió y conoció de niño.
            
            
            
            La conspiración y la traición le envuelven mientras se sumerge más y más en la larga batalla entre Asesinos y Templarios, una batalla que se remonta al principio de los tiempos.',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            DB::table('libros')->insert([
             'nombre' => 'Black flag',
             'fecha_salida' => '2015-02-17',
             'paginas' => '392',
             'imagen' => 'blackflag.jpg',
             'synopsis' => 'Estamos en la edad de oro de la piratería y el Nuevo Mundo está en plena efervescencia. Edward Kenway el intrépido hijo menor de un comerciante de lana que sueña con hacerse rico se siente profundamente atraído por la gloria de la vida en altamar. Cuando la finca de su familia sufre un terrible ataque, llega para él el momento de escapar y, muy pronto, Kenway se convierte en uno de los corsarios más temibles de su tiempo. Pero la avaricia, la ambición y la traición le siguen muy de cerca y cuando la evidencia de una gigantesca conspiración sale a la luz, amenazando con destruir aquello que más ama, Kenway no puede vencer sus ansias de venganza. Así es como Edward se sumergirá en la eterna batalla entre Asesinos y Templarios.',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            DB::table('libros')->insert([
             'nombre' => 'Unity',
             'fecha_salida' => '2014-11-06',
             'paginas' => '488',
             'imagen' => 'unity.jpg',
             'synopsis' => '1789. La gloriosa ciudad de París asiste al amanecer de la Revolución Francesa. Las calles adoquinadas están cubiertas de sangre y la gente se alza contra una aristocracia opresiva. Pero la justicia revolucionaria implica pagar un precio muy alto...
            
            En un tiempo en el que la brecha entre pobres y ricos es extrema y la nación se parte en dos, un hombre y una mujer luchan para vengar todo aquello que han perdido.Muy pronto, Arno y Élise se ven abocados a la batalla que Asesinos y Templarios mantienen desde tiempo inmemorial.',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Underworld',
             'fecha_salida' => '2015-11-05',
             'paginas' => '424',
             'imagen' => 'underworld.jpg',
             'synopsis' => 'En 1862, con Londres en plena Revolución Industrial, se está construyendo el primer tren subterráneo del mundo. Cuando un cadáver es descubierto en la excavación, saltará la chispa que desate el último capítulo mortal en la antigua y centenaria batalla entre Asesinos y Templarios.
            
            En la más profunda clandestinidad, hay un asesino que esconde oscuros secretos y recibe la misión de acabar con el dominio templario en la capital de la nación.Muy pronto la Hermandad lo conocerá como Henry Green, mentor de Jacob y Evie Frye. Pero, por ahora, él es simplemente El Fantasma.',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Desert oath',
             'fecha_salida' => '2018-11-27',
             'paginas' => '400',
             'imagen' => 'desertoath.jpg',
             'synopsis' => '«Buscaré la venganza contra aquellos que traicionaron a mi familia. Soy Ezio Auditore di Firenze. Soy un Asesino…» Tras sufrir la traición de las familias que gobiernan Florencia, Venecia y Roma en la Italia del Renacimiento, el joven Ezio Auditore se embarca en una épica lucha para poner fin a la corrupción y restaurar el honor de su familia. Para ello deberá aprender el arte de la muerte.
            
            En su camino de venganza y lucha se encontrará con las grandiosas mentes de Leonardo da Vinci y Maquiavelo; deberá decidir entre el amor y su destino, y descubrirá que este último es mucho más complejo y elevado de lo que nunca imaginó. Para sus aliados, Ezio se convertirá en la fuerza que les guiará en la búsqueda de la libertad y la justicia. Para sus enemigos, en una amenaza consagrada a la destrucción de los tiranos que abusan del pueblo italiano. Una historia épica de poder y venganza en la que la verdad se escribirá con sangre.',
             'genero_id' => '13',
             'escritor_id' => '33',
             'subgenero_id'=>'4',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Heresy',
             'fecha_salida' => '2017-06-20',
             'paginas' => '368',
             'imagen' => 'heresy.jpg',
             'synopsis' => 'Simon Hathaway, un Templario de alto rango, revive los recuerdos de su antepasado Gabriel Laxart, quien luchó al lado de Juana de Arco. A través de ellos  irá descubriendo poco a poco secretos del pasado que podrían impactar peligrosamente en su presente... y en el de toda la Orden Templaria.
            
            Un conflicto interminable.Un antiguo malentendido.
            Una nueva revelación.Y la verdad más peligrosa de todas: quién es el hereje? y quién el verdadero creyente.',
             'genero_id' => '13',
             'escritor_id' => '34',
             'subgenero_id'=>'4',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Assasin Creed Odyssey',
             'fecha_salida' => '2018-10-30',
             'paginas' => '384',
             'imagen' => 'odyssey.jpg',
             'synopsis' => 'Grecia, siglo V a.C. Kassandra es una mercenaria de sangre espartana, condenada a muerte por su familia, al exilio. Ahora se embarcará en un viaje epico para convertirse en una heroína legendaria y descubrir la verdad sobre su misterioso linaje.',
             'genero_id' => '13',
             'escritor_id' => '35',
             'subgenero_id'=>'4',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad de Hueso',
             'fecha_salida' => '2007-03-27',
             'paginas' => '512',
             'imagen' => 'ciudadhueso.jpg',
             'synopsis' => 'En el Pandemonium, la discoteca de moda de Nueva York, Clary sigue a un atractivo chico de pelo azul hasta que presencia su muerte a manos de tres jóvenes cubiertos de extraños tatuajes. Desde esa noche, su destino se une al de esos tres cazadores de sombras, guerreros dedicados a liberar a la tierra de demonios y, sobre todo, al de Jace, un chico con aspecto de ángel y tendencia a actuar como un idiota...',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad de ceniza',
             'fecha_salida' => '2008-03-25',
             'paginas' => '464',
             'imagen' => 'ciudadceniza.jpg',
             'synopsis' => 'Clary Fray desearía que su vida volviera a la normalidad. Si pudiera dejar atrás el mundo de los cazadores de sombras, tendría más tiempo para Simon, su mejor amigo, que se está convirtiendo en algo más... Pero el mundo subterráneo que acaba de descubrir no está preparado para dejarla ir; en especial ese apuesto y exasperante Jace el cual supuestamente es su hermano y no la quiere fuera de su vida. Para complicar las cosas, una ola de asesinatos sacude la ciudad. Clary cree que Valentine está detrás de esas muertes para obtener la Copa Mortal.',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad de cristal',
             'fecha_salida' => '2024-04-29',
             'paginas' => '535',
             'imagen' => 'ciudadcristal.jpg',
             'synopsis' => 'Para salvar la vida de su madre, Clary debe viajar hasta la Ciudad de Cristal, el hogar ancestral de los cazadores de sombras. Por si fuera poco, Jace no quiere que vaya y Simon ha sido encarcelado por los propios Cazadores de Sombras, que no se fían de un vampiro resistente al sol. Mientras, Clary traba amistad con Sebastián, un misterioso cazador de sombras que se alía con ella. Valentine está dispuesto a acabar con todos los cazadores de sombras: la única opción que les queda a éstos es aliarse con sus mortales enemigos pero ¿podrán hombreslobo, vampiros y otras criaturas del submundo dejar a un lado sus diferencias con los cazadores de sombras?',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad de los angeles caidos',
             'fecha_salida' => '2011-04-05',
             'paginas' => '416',
             'imagen' => 'cidadangeles.jpg',
             'synopsis' => 'Alguien está dando muerte a los Cazadores de Sombras del círculo de Valentine, y esas muertes enemistan de nuevo a los Cazadores de Sombras con los subterráneos. Sólo Simon, ahora convertido en vampiro, podrá evitar el enfrentamiento. Mientras, Clary y Jace descubrirán un misterio que les llevará a fortalecer su relación o  destruirla para siempre.',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad de las almas perdidas',
             'fecha_salida' => '2012-05-08',
             'paginas' => '512',
             'imagen' => 'ciudadalmas.jpg',
             'synopsis' => 'Jace es ahora un sirviente del mal, vinculado a Sebastian por toda la eternidad. Sólo un pequeño grupo de Cazadores de Sombras cree posible su salvación. Para lograrla, deben desafi ar al Cónclave, y deben actuar sin Clary. Porque Clary está jugando a un juego muy peligroso por su propia cuenta y riesgo. Si pierde, el precio que deberá pagar no consiste tan solo en entregar su vida, sino también el alma de Jace. Clary está dispuesta a hacer lo que sea por Jace',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            
            
            
            DB::table('libros')->insert([
             'nombre' => 'Ciudad del fuego celestial',
             'fecha_salida' => '2014-05-27',
             'paginas' => '768',
             'imagen' => 'ciudad fuego.jpg',
             'synopsis' => 'La oscuridad vuelve al mundo de los Cazadores de Sombras. Mientras su sociedad se está derrumbando a su alrededor, Clary, Jace, Simon y sus amigos deben unirse para luchar con el mayor mal que los Nefilim nunca han enfrentado: El hermano de Clary.
            
            En este el último libro de la saga los cazadores de sombras se enfrentan a Sebastian, que quiere eliminar a toda la raza nefilim y crear una nueva con vinculación demoniaca. pero Clary, Jace y sus amigos se aventuran a otra dimensión para detenerlo.',
             'genero_id' => '9',
             'escritor_id' => '36',
             'subgenero_id'=>'1',
            
                ]);
            

        
    }
}
