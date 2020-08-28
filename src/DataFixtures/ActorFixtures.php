<?php

namespace App\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class ActorFixtures extends Fixture implements DependentFixtureInterface
{
    const ACTORS = [
        'Andrew Lincoln' => [

            'picture' => 'http://fr.web.img5.acsta.net/r_1920_1080/pictures/16/10/25/11/49/315640.jpg',

            'biography' => 'Fils d’un père ingénieur et d’une mère infirmière, Andrew Lincoln grandit en Angleterre. Sa scolarité terminée, le jeune homme ambitionne de devenir acteur. C’est dans cette optique qu’il s’inscrit à la célèbre "Royal Academy of Dramatic Art", une université prestigieuse située à Londres.  Andrew Lincoln trouve son premier rôle important dans la série britannique La Vie en face (1996-1997), qui suit les débuts dans le monde des affaires de quatre jeunes diplômés. Il poursuit avec plusieurs petits rôles, à la télévision et au cinéma, comme par exemple dans Human Traffic, sorte de Trainspotting plus soft. En 2003, le comédien gagne en notoriété grâce à sa participation à la comédie romantique à succès Love Actualy.  Acteur de séries avant tout, il campe ensuite deux professeurs : le premier dans "Teachers" (2001-2003), centrée sur le quotidien d’enseignants, et le second dans la série fantastique Afterlife (2005-2006), où il a du mal à croire à tout ce qui touche au paranormal. Andrew n’abandonne pas pour autant le grand écran, puisqu’il se glisse dans la peau du séduisant futur marié de Vanessa Paradis dans L’Arnacoeur de Pascal Chaumeil, gros carton de l’année 2010 en France.  C’est également en 2010 que sa carrière prend un tournant fondamental, lorsqu’il est choisi pour se glisser dans la peau du personnage principal de la série zombiesque The Walking Dead. Père de famille courageux cherchant à survivre dans un monde post-apocalyptique peuplé de zombies, le comédien crève l’écran aux côtés de pointures de la petite lucarne comme Sarah Wayne Callies ou Jon Bernthal',
        ],

        'Norman Reedus' => [

            'picture' => 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/19/09/25/09/52/1052084.jpg',

            'biography' => 'Né à Hollywood, Norman Reedus affiche un parcours professionnel atypique. Artiste accompli, il s’essaie à la peinture, la photographie, mais également à la sculpture et la réalisation. Tout lui réussit, jusqu’à devenir le modèle de la marque Prada. Pourtant, le jeune homme est encore plein de ressources et cherche à s’imposer dans le monde du 7ème Art.   Il commence sa carrière dans des pièces de théâtre, avant d’être repéré par Guillermo Del Toro, qui lui propose le rôle de Jeremy dans le film d’horreur Mimic en 1999. Norman s’illustre ensuite dans Sous influence, en incarnant Harry Odum, un jeune garçon dont la vie bascule dans la violence. Il enchaîne avec Blade II, Un Crime ou encore American Gangster. En 2005, il décroche le rôle principal dans Antibodies, de Christian Alvart, dans lequel il prête ses traits à un policier allemand aux prises avec un serial killer.   Dix ans après le premier volet, il retrouve en 2009 Sean Patrick Flanery dans la suite des Anges de Boston, où il interprétait Murphy MacManus. Réalisé et écrit par Troy Duffy, le thriller met en scène deux jumeaux traqués par le FBI.   Norman ne s’illustre pas seulement dans les films d’action. Il décroche en effet quelques petits rôles dans des séries télévisées comme New York : Unité Spéciale ou encore les Maîtres de l\'Horreur. Il participe notamment au pilote du remake d’Hawai 5-0 après avoir été Nate Parks dans deux épisodes de la saison 5 de Charmed.   En 2010, la chaîne AMC adapte à la télévision le célèbre comic The Walking Dead. Norman décide de tenter sa chance et participe aux auditions. Robert Kirkman le remarque et crée le personnage de Daryl Dixon, le frère de Merle, alors absent de la bande dessinée. Le succès est au rendez-vous et de nouvelles portes s’ouvrent pour le jeune homme qui apparaît également dans le clip de Lady Gaga, Judas, en 2013. Les producteurs de la série de zombies, admirant le travail de Norman, lui proposent le rôle principal dans Air, un nouveau film apocalyptique.   Parallèlement à la série, l\'acteur se voit proposer des rôles plus consistants au cinéma. Il rejoint ainsi la prestigieuse distribution du violent polar Triple 9 et donne la réplique à Diane Kruger dans le road movie Sky.',
        ],

        'Lauren Cohan' => [

            'picture' => 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/15/07/28/16/04/503040.jpg',

            'biography' => 'Née à Philadelphie, Lauren Cohan passe son enfance dans le New Jersey, avant de déménager en Angleterre. Elle y étudie la littérature britannique et l’art dramatique à l\'université, et en profite pour monter une troupe de théâtre. Ses premiers pas face à la caméra, elle les fait tardivement, à l\'âge de 23 ans, aux côtés de Heath Ledger, dans un rôle secondaire pour Casanova, du réalisateur suédois Lasse Hallström. L\'année suivante, elle apparaît dans Van Wilder 2: Sexy Party, ou encore dans le soap Amour, gloire et beauté. Alors que la CW cherche à apporter une une touche féminine dans sa troisième saison de Supernatural, elle manque le rôle de Ruby obtenu par Katie Cassidy. En consolation, la chaîne lui confie, pour quelques épisodes, le personnage de Bela Talbot, une voleuse qui va quelque peu déranger les frères Winchester.  En 2008, alors qu\'elle commence doucement à se faire connaître, la jeune femme interprète Emily, la fille de Ray (Gregory Itzin), qui va tout faire pour sauver la relation de ses parents dans la comédie dramatique Float. L\'actrice enchaîne jusqu\'en 2010 les différents plateaux dans plusieurs petits rôles pour des séries. Nous la retrouvons, le temps d\'un épisode, dans la saison 2 de Life, dans Les Experts : Manhattan ou encore Cold Case, et comme réceptionniste pour Modern Family. Grâce à ces diverses apparitions, l\'équipe de Vampire Diaries la veut dans son équipe pour se glisser dans la peau de Rose, un vampire de plus de 500 ans, qui est à l\'origine de la transformation de Katherine. Dans le même temps, elle enfile la combinaison de l\'hôtesse de course mortelle dans Death Race 2, accompagnée de Sean Bean, Luke Goss, ainsi que Ving Rhames.  CBS la contacte en 2011 pour sa nouveauté Heavenly, mettant en scène une drôle d\'alliance entre une avocate et un ange devenu humain qui vont faire équipe pour sauver la vie de leurs clients. Malheureusement, le projet ne dépassera pas de la case pilote. Elle rejoint alors Zachary Levi et Yvonne Strahovski pour la fin de saison 4 de Chuck. Lauren s\'engage pour cinq épisodes et devient un proche de Chuck avant de le trahir. Mais en octobre, alors que The Walking Dead, du créateur Frank Darabont, surprend l’Amérique, la chance lui est offerte d\'endosser le rôle de Maggie Greene. Fille aînée d\'Hershel, elle vit dans une ferme où se réfugiera la bande de Rick lors de la seconde saison. Sa relation avec Glenn lui permet de gagner de l\'importance au sein du groupe et d\'aller au combat lorsque cela s\'avère nécessaire.  Lauren Cohan varie ses activités entre deux épisodes en apparaissant dans New York Unité spéciale, ou encore en prêtant sa voix à Juliana, femme infidèle et sexy dans la série d\'animation Archer. Sa carrière commençant à décoller, elle obtient une place en 2014 aux côtés des impressionnants Terry Crews et Sylvester Stallone dans Reach Me.',
        ],

        'Danai Gurira' => [

            'picture' => 'http://fr.web.img5.acsta.net/r_1920_1080/pictures/20/02/24/13/14/1429893.jpg',

            'biography' => 'Née dans l’Iowa, Danai Gurira déménage au Zimbabwe, pays d’origine de ses parents, à l’âge de cinq ans. Benjamine d’une fratrie de quatre enfants, elle a un grand frère et deux sœurs ainées. Sa mère est bibliothécaire universitaire et son père professeur de chimie. A 19 ans, elle retourne aux Etats-Unis, étudie la psychologie sociale dans le Minnesota, puis l’art et le théâtre à l’université de New York.  Danai obtient son premier rôle à l’écran dans un épisode de New York Section Criminelle en 2004. Deux ans plus tard, elle co-écrit et joue dans In Continuum, une pièce qui traite des problèmes sociaux et politiques du Zimbabwe. Son travail lui vaut de nombreuses revues élogieuses et plusieurs récompenses. En 2007, elle tourne aux côtés de Richard Jenkins et Hiam Abbass dans The Visitor, film acclamé par la critique qui reçoit le grand prix du Festival du cinéma américain de Deauville en 2008. Elle apparaît également dans La Ville fantôme, comédie dramatique avec Ricky Gervais et Téa Leoni.  Par la suite, Danai Gurira joue dans plusieurs séries : Life on Mars en 2008, Lie To Me et New York Police Judiciaire l’année suivante. Elle incarne Jill durant six épisodes de Treme, une production HBO qui se déroule à La Nouvelle-Orléans, trois mois après le passage de l’ouragan Katrina.  En parallèle, la jeune femme poursuit sa carrière sur les planches. Elle est Isabella dans la pièce de William Shakespeare Mesure pour Mesure en 2011. L’année suivante, elle écrit The Convert, une pièce explorant l’histoire du Zimbabwe au travers du regard d’une femme.  Au cinéma, Danai Gurrira est applaudie pour son rôle dans le film américano-nigérien Ma’ George. Mais c’est sur le petit écran que l’actrice se fait vraiment connaître auprès du grand public. En 2012, elle est choisie pour interpréter le personnage de Michonne dans la série d’AMC The Walking Dead, adaptation télévisée du comic du même nom. Pour incarner cette tueuse de zombie, l’actrice apprend à se battre avec des katanas, l’arme de prédilection de l’héroïne.',
        ],

        'Emma Roberts' => [

            'picture' => 'http://fr.web.img2.acsta.net/r_1920_1080/pictures/16/08/09/10/43/532457.jpg',

            'biography' => 'Enfant, Emma Roberts passe beaucoup de temps sur les plateaux avec sa tante avant de tenter avec succès une audition à neuf ans pour le film Blow de Ted Demme en 2001, lui permettant de jouer la fille de Johnny Depp. Elle enchaine ensuite avec des seconds rôles dans des petits films avant de se voir offrir le rôle qui va la lancer : elle sera pendant trois saisons Allie Singer dans la série du même nom. Son personnage de jeune chanteuse la propulse au rang d’idole adolescente (elle sort même un album de chansons autour de la série). Forte de sa popularité chez la jeunesse américaine, elle obtient ensuite des premiers rôles dans des films pour teenagers comme Aquamarine (qui lui vaut un Young Artist Award), Nancy Drew ou encore Palace pour chiens.  C’est en 2010 qu’elle perce véritablement au cinéma. On la retrouve ainsi à côté d’un casting de stars (Anne Hathaway, Bradley Cooper et sa tante Julia Roberts) dans la comédie romantique Valentine\'s Day et elle joue dans le drame Twelve qui met en scène une jeunesse dorée désœuvrée qui touche à toutes sortes de drogues, bien loin de son image un peu mièvre des débuts. Une image qu’elle continuera à briser en 2011 en incarnant la cousine de Neve Campbell dans le quatrième volet de la saga horrifique Scream.  Après cette incursion dans le genre horrifique, Emma se ressource en tombant sous le charme de Freddie Highmore dans la comédie romantique Le Jour où je l\'ai rencontrée. La sensuelle comédienne rejoint ensuite le casting des Miller, une famille en herbe en 2013. Dans cette comédie, elle incarne Casey, une ado débrouillarde couverte de tatouages et de piercings aux côtés de Jennifer Aniston et Jason Sudeikis. L\'année suivante, Emma tient le rôle principal de Palo Alto, premier long-métrage de Gia Coppola, fille de Francis Ford. Elle prête ses traits au personnage d\'April, une adolescente en mal de sensations fortes, testant ses limites dans la drogue, l\'alcool et le sexe.  La comédienne intègre par la suite le casting de la série d\'épouvante American Horror Story à parir de la saison 3. Elle s\'illustre également sur le petit écran aux côtés de Jamie Lee Curtis dans Scream Queens. En 2016, Emma brille dans la peau de Vee, une lycéenne qui se retrouve plongée au coeur d\'un jeu en ligne mortel dans Nerve, un The Game 2.0.',
        ],

        'Travis Fimmel' => [

            'picture' => 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/16/05/27/14/23/039049.jpg',

            'biography' => 'Avant de faire ses preuves en tant qu’acteur dans diverses productions cinématographiques et télévisuelles, l’australien Travis Fimmel connaît plusieurs carrières. Il manque d’abord de peu de devenir footballeur professionnel dans l’équipe de son pays. Une blessure à la jambe l’empêche de débuter la saison. Il décide alors de se tourner vers l’architecture en intégrant l’université de Melbourne mais lorsqu’une agence de mannequin le repère, il est séduit par l’idée de voyager à travers le monde et abandonne ses études.   Le jeune homme débarque fauché à Los Angeles en 2002 et réussit l’exploit de signer un contrat à 6 chiffres avec la célèbre marque Calvin Klein. Son visage et son corps sont utilisés pour promouvoir le parfum de la marque ainsi que sa ligne de sous-vêtements. Il devient alors le modèle homme le plus demandé de la planète. A la même époque, la série Sex & The City s’inspire de son parcours pour créer le personnage de Smith Jerrod, incarné par Jason Lewis, qui fait tourner la tête de la frivole Samantha Jones (Kim Cattrall). Devenu une star, le mannequin enchaîne les couvertures de magazine et les apparitions sur les plateaux de télévision. Il figure même dans deux clips : celui de Someone to call my lover de Janet Jackson et celui de I’m Real de Jennifer Lopez. Fimmel souhaite désormais orienter sa carrière vers le cinéma et s’adjoint les services d’un coach qui le fait travailler d’arrache-pied pendant deux ans.   A l’automne 2003, il fait ses premiers pas de comédien dans la série événement de la chaîne pour ados The WB : Tarzan & Jane. Aux côtés de Sarah Wayne Callies dans le rôle de sa dulcinée, il revisite le célèbre mythe de l’homme singe, mâtiné ici d’enquêtes policières. Ce mélange hasardeux ne séduit pas les jeunes téléspectateurs. Seulement huit épisodes sur les treize commandés sont ainsi diffusés. Cet échec met un frein à sa carrière. Il faut attendre 2006 pour le revoir sur le petit écran dans le téléfilm Southern Comfort, où il donne la réplique à Madeleine Stowe. En 2008, il décroche son premier rôle au cinéma dans le film d’horreur Soumission, qui passe inaperçu, puis dans la comédie Surfer, Dude, avec Matthew McConaughey et Woody Harrelson, qui fonctionne au box-office.   En 2009, il est le co-équipier de Patrick Swayze dans le show policier de la chaîne câblée A&E The Beast. Le décès de ce dernier au terme de la première saison conduit à son annulation. Fimmel repasse alors par la case cinéma grâce à The Experiment en 2010, où il remplace au pied levé Elijah Wood qui s’est désisté quelques jours avant le tournage. Dans ce remake du film allemand éponyme, il interprète un gardien de prison brutal aux côtés d’Adrian Brody et Forest Whitaker. La même année, il retourne sur ses terres natales pour les besoins du film d’horreur australien Needle puis il participe à deux épisodes de la série Chase.   Après avoir côtoyé Peter Fonda dans le thriller Harodim en 2012, il connait son premier vrai grand succès à la télévision dans la saga Vikings, initiée par la très sérieuse History Channel. Elle retrace l’ascension du héros viking Ragnar Lothbrok, auquel il prête ses traits. Parallèlement, Travis Fimmel est choisi pour camper le personnage principal du blockbuster Warcraft: Le commencement, l\'adaptation du jeu Warcraft, la célèbre licence du studio Blizzard.',
        ],

        'Katheryn Winnick' => [

            'picture' => 'http://fr.web.img6.acsta.net/r_1920_1080/pictures/20/01/06/13/39/1908403.jpg',

            'biography' => 'Originaire du Canada, Katheryn Winnick débute sa carrière en 1999 dans un épisode de Psi Factor, chroniques du paranormal qui lui permet de se faire remarquer à la télévision. Elle participe alors à Student Bodies et multiplie les rôles dans des téléfilms, et surtout dans les séries à succès New York Section criminelle, Oz, Les experts, Missing: disparus sans laisser de trace, Esprits Criminels ou encore Dr House qui lui assurent une certaine reconnaissance auprès du public américain.  Au début des années 2000, la jeune femme joue dans des comédies romantiques populaires, aux côtés d’acteurs de renom tel que Hugh Grant et Sandra Bullock dans L’amour sans préavis, ou Adam Sandler et Drew Barrymore pour Amour & amnésie. Son talent de comédienne se confirme, et elle enchaîne alors les romcoms grand public en 2010 avec Ashton Kutcher et Katherine Heigl dans Kiss & Kill, ou encore les prestigieux Jake Gyllenhaal et Anne Hathaway pour Love, et autres drogues. La canadienne revient la même année à la télévision pour interpréter Hannah Burley, la journaliste et petite amie de l’agent spécial Seeley Booth, dans la sixième saison de Bones. Elle participe également aux séries d’action Nikita et Le Transporteur adapté du film éponyme produit par Luc Besson. Mais l’actrice a aussi joué les victimes dans des films d’horreurs, et notamment dans le huitième opus de l’une des sagas les plus cultes du cinéma d’épouvante, à savoir Hellraiser.  En 2012, elle est repérée par Roman Coppola pour interpréter Ivana dans Dans la tête de Charles Swan III, rôle qui confirme son talent de séductrice. Cette importante expérience cinématographique lui permet de rejoindre Al Pacino et Christopher Walken dans Les derniers affranchis, de Fisher Stevens (Lost - Les disparus). L’année suivante, elle incarne Lola dans The Art of the Steal, un film de gangsters parodique avec Kurt Russell et Matt Dillon.  Mais l’actrice doit sa célébrité à la série Vikings dans laquelle elle incarne la guerrière Lagertha, l’épouse de Ragnar Lothbrok joué par Travis Fimmel.',
        ],
    ];

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');

        foreach (self::ACTORS as $nameActor => $wiki) {
            $actor = new Actor();
            $actor->setName($nameActor);
            $actor->setPicture($wiki ['picture']);
            $actor->setBiography($wiki ['biography']);

            $manager->persist($actor);
            $actor->addProgram($this->getReference('program_0'));
        }

        for ($i = 0; $i<=50; $i++){
            $actor = new Actor();
            $actor->setName($faker->name(10));
            $actor->setPicture($faker->image(null,640,480,null,true,true,null));
            $actor->setBiography($faker->text(100));

            $manager->persist($actor);
            $actor->addProgram($this->getReference('program_' . rand(0,5)));
        }


        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies()
    {
        return [ProgramFixtures::class];
    }
}