<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsanasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asanas')->insert([
            [
                'name' => 'Sirshasana',
                'name_spanish' => 'Postura sobre la cabeza',
                'image' => 'sirshasana.jpg',
                'description' => 'Debido a todos estos beneficios recibe el nombre de rey de las ásanas entre las 840.000 que existen.',
                'contraindication' => ''
            ],
            [
                'name' => 'Sarvangasana',
                'name_spanish' => 'Postura sobre los hombros',
                'image' => 'sarvangasana.jpg',
                'description' => '...',
                'contraindication' => ''
            ],
            [
                'name' => 'Halasana',
                'name_spanish' => 'Postura del arado',
                'image' => 'halasana.jpg',
                'description' => 'Completa y amplifica los beneficios de la postura sobre los hombros. Dobla y estira al máximo la espalda hacia delante',
                'contraindication' => ''
            ],
            [
                'name' => 'Matsyasana',
                'name_spanish' => 'Postura del pez',
                'image' => 'matsyasana.jpg',
                'description' => 'Ésta es la postura contraria a la de los hombros y del arado. La sangre y el prana se concentran en la zona del corazón y pulmones (anahata chakra), cuello y hombros (paratiroides) y región lumbar. Dobla y estira la columna vertebral hacia atrás',
                'contraindication' => ''
            ],
            [
                'name' => 'Paschimothanasana',
                'name_spanish' => 'Postura de la cabeza en las rodillas',
                'image' => 'paschimothanasana.jpg',
                'description' => 'Se estira la columna vertebral hacia adelante. Dirige sangre y prana principalmente a la región del abdomen (manipura chakra), zona lumbar, órganos genitales y sistema reproductivo (swadhistana chakra). Esta ásana se debe armar lentamente, sin dar tirones y sin hacer rebotes al intentar alcanzar los pies. Esta excelente ásana hace fluir la respiración por el sushuma nadi (meridiano central del cuerpo), prende el fuego gástrico (mejora la digestión), adelgaza y remueve todas las enfermedades. (Hatha Yoga Pradipika).',
                'contraindication' => 'Problemas cervicales graves (por ejemplo, hernia discal), dolor de columna, lesiones de oídos, desprendimiento de retina, tensión alta en crisis, contractura de hombros o de cuello.'
            ],
            [
                'name' => 'Bhujangasana',
                'name_spanish' => 'Cobra',
                'image' => 'bhujangasana.jpg',
                'description' => 'En esta ásana estiramos y doblamos la espalda (especialmente la parte alta) hacia atrás concentrando la sangre y el prana en la región abdominal (manipura chakra) y en la zona del pecho y garganta (anahata y vishuddha chakras). El Gerunda Samhita, un libro clásico de hatha yoga, dice que esta ásana, que recuerda a una cobra con la cabeza alzada, “incrementa la temperatura corporal, destruye enfermedades y con la práctica de esta ásana se despierta la serpiente de oro (kundalini)”.',
                'contraindication' => ''
            ],
            [
                'name' => 'Salabhasana',
                'name_spanish' => 'Postura del saltamontes ',
                'image' => 'salabhasana.jpg',
                'description' => 'Esta postura se llama así porque recuerda a un saltamontes. En esta ásana tonificamos la espalda baja y estiramos la parte alta hacia atrás, sirviendo como postura contraria al arado y a la de cabeza a las rodillas. La sangre y el prana se concentran en la región abdominal (manipura chakra), en la zona de la garganta (vishuddha chakra) y en la lumbar y sacral (swadhishtana chakra). De esto se deducen muchos de sus efectos.',
                'contraindication' => 'Embarazo, constipación severa, hipertensión, problemas coronarios, hernia discal y hernia hiatal.'
            ],
            [
                'name' => 'Dhanurasana',
                'name_spanish' => 'Postura del arco',
                'image' => 'dhanurasana.jpg',
                'description' => 'Esta ásana da la apariencia de un arco. Dobla y estira toda la espalda hacia atrás combinando y amplificando los efectos de la cobra y el saltamontes. Estas tres ásanas forman las posturas contrarias a la del arado y a la de cabeza a las rodillas. La sangre y el prana se concentran en la región abdominal (manipura chakra), sacral (swadhishtana chakra) y en la zona del pecho y garganta (anahata y vishuddha chakras).',
                'contraindication' => 'Embarazo, problemas lumbares, hernia de disco, hernia hiatal, escoliosis, hipertensión, trastornos severos de corazón.'
            ],
            [
                'name' => 'Ardha matsyendrasana',
                'name_spanish' => 'Media torsión espinal',
                'image' => 'ardha-matsyendrasana.jpg',
                'description' => 'Después de estirar la columna hacia elante y hacia atrás, esta asana da un estiramiento lateral a las vértebras, a las espaldas y a a las caderas. Ésta es la primera elasticidad que perdemos cuando envejecemos. La sangre y  prana se dirigen a la base de la columna vertebral (muladhara chakra), a la zona del abdomen (manipura chakra) y a la cabrza (ajna y sahasrara chakras). Su nombre lo toma del gran sabio Matsyendrasana, uno de los primeros profesores de yoga.',
                'contraindication' => ''
            ],
            [
                'name' => 'Kakasana',
                'name_spanish' => 'El cuervo',
                'image' => 'kakasana.jpg',
                'description' => 'La sangre y el prana se dirigen a los brazos, a la cabeza (ajna chakra) y al abdomen (plexo solar). El cuervo y el pavo real son excelentes ásanas para mejorar el equilibrio físico que está ligado al equilibrio mental. Cuando incrementamos el equilibrio físico, mejoramos automáticamente el equilibrio mental. Aunque todas las ásanas están diseñadas para preparar el cuerpo y a la mente para la meditación, las ásanas que requieren equilibrio y balance como el cuervo, el pavo real y la parada sobre la cabeza son las que más demandan concentración y por lo tanto son especialmente buenas para este propósito',
                'contraindication' => ''
            ],
            [
                'name' => 'Mayurasana',
                'name_spanish' => 'El pavo real',
                'image' => 'mayurasana.jpg',
                'description' => 'La sangre y el prana se dirigen a los brazos, a la zona abdominal (debido a la presión que ejercen los codos en el abdomen) y a la cabeza (ajna chakra). Es conocido que los pavos reales en la selva luchan constantemente con cobras y las matan. Y aunque durante la pelea casi siempre son mordidos por éstas, gracias a su buen sistema digestivo e inmunológico son inmunes al veneno e incluso se comen la cobra. Esta ásana produce estos mismos efectos en nosotros. Ésta es una ásana de balance y equilibrio. Iyenger, un yogui, decía: Has de mantener la estabilidad mediante la inteligencia del cuerpo, por el instinto o el sentido del equilibrio (no por la fuerza). Cuando el equilibrio se mantiene por la fuerza es una acción física; cuando lo mantienes por la inteligencia del cuerpo es relajación en acción.',
                'contraindication' => 'Embarazo, presión arterial alta, hernia, úlcera estomacal , patologías serias de reumatismo en los brazos, inflamación de los músculos o tendones de los brazos. y síndrome del túnel carpiano.'
            ],
            [
                'name' => 'Padahastasana',
                'name_spanish' => 'Flexión delante de pie ',
                'image' => 'padahastasana.jpg',
                'description' => 'Permite nuevamente una flexión de toda la espalda hacia adelante. La sangre y el prana se dirigen hacia las piernas, la cabeza (sahasrara chakra) y a la base de la columna vertebral. Tiene los mismos beneficios de la postura de la cabeza a las rodillas más los de las posturas invertidas. En yoga se dice que padahastasana es la postura de la eterna juventud.',
                'contraindication' => ''
            ],
            [
                'name' => 'Trikonasana',
                'name_spanish' => 'El triángulo',
                'image' => 'trikonasana.jpg',
                'description' => 'La última ásana de la serie es el triángulo, postura que provee una flexión lateral de la columna, dándole completa flexibilidad y vitalidad a la misma. Completa y amplifica los efectos de la torsión espinal ayudando a purificar el cuerpo. La sangre y el prana se dirigen al sushumna nadi y a todos los chakras al mismo tiempo. Tonifica las piernas',
                'contraindication' => ''
            ],
        ]);
    }
}
