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
        

        
    }
}
