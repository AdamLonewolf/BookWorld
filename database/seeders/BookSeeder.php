<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = new Book();
        $books->image = 'fantastique1.jpg';
        $books->titre = 'Le monde de Narnia';
        $books->resume = "Aslan, le noble lion, a créé ce monde enchanté et tous les êtres qui y vivent. Or, il y a quarante ans, la Sorcière Blanche a plongé Narnia dans un hiver éternel. Depuis, le royaume attend d'être libéré de l'emprise de la superbe et plus-méchante-que-méchante sorcière...";
        $books->prix = 4000 ;
        $books->genre_id = 1;
        $books->auteur_id = 1;
        $books->save();

        $books = new Book();
        $books->image = 'fantastique2.jpg';
        $books->titre = 'Le seigneur des anneaux';
        $books->resume = "'Le seigneur des anneaux' de J.R.R. Tolkien est un roman fantastique épique qui se déroule dans un monde imaginaire appelé Terre du Milieu. Il suit les aventures de Frodon Sacquet, un hobbit, qui doit détruire l'Anneau Unique, un objet maléfique qui pourrait détruire l'univers. Il est accompagné d'une variété de personnages, y compris les elfes, les nains et les hommes.";
        $books->prix = 6000 ;
        $books->genre_id = 1;
        $books->auteur_id = 2;
        $books->save();

        $books = new Book();
        $books->image = 'fantastique3.jpg';
        $books->titre = 'La Prophétie des douze lunes';
        $books->resume = "'La prophétie des douzes lunes' de Crista S. Lockwood est un roman de fantasy qui suit l'histoire d'une jeune fille appelée Kaeldra qui découvre qu'elle est la clé d'une prophétie qui peut sauver ou détruire le monde.";
        $books->prix = 5000 ;
        $books->genre_id = 1;
        $books->auteur_id = 3;
        $books->save();


        $books = new Book();
        $books->image = 'horreur1.jpg';
        $books->titre = 'Derniers Jours';
        $books->resume = "'Derniers jours' d'Adam Nevill est un roman d'horreur qui suit un groupe de personnes qui se retrouvent piégées dans un immeuble abandonné hanté par des forces surnaturelles malveillantes.";
        $books->prix = 4000 ;
        $books->genre_id = 2;
        $books->auteur_id = 4;
        $books->save();


        $books = new Book();
        $books->image = 'horreur2.jpg';
        $books->titre = 'Ne crie pas';
        $books->resume = " 'Ne crie pas' de Blair Daniels est un roman d'horreur psychologique qui suit l'histoire d'une jeune fille qui est confrontée à des forces surnaturelles menaçantes dans une petite ville isolée.";
        $books->prix = 3000 ;
        $books->genre_id = 2;
        $books->auteur_id = 5;
        $books->save();

        $books = new Book();
        $books->image = 'horreur3.jpg';
        $books->titre = 'Ça';
        $books->resume = "'Ça' de Stephen King est un roman d'horreur qui suit une bande d'enfants qui sont confrontés à un clown maléfique appelé Pennywise. Il hante leur ville et se nourrit de leur peur.";
        $books->prix = 4500 ;
        $books->genre_id = 2;
        $books->auteur_id = 6;
        $books->save();

        $books = new Book();
        $books->image = 'horreur4.jpg';
        $books->titre = 'Carrie';
        $books->resume = "'Carrie' de Stephen King est un roman d'horreur qui suit l'histoire d'une jeune fille nommée Carrie White qui découvre qu'elle a des pouvoirs psychiques et est confrontée à la persécution de ses camarades de classe et à une mère abusive.";
        $books->prix = 4500 ;
        $books->genre_id = 2;
        $books->auteur_id = 6;
        $books->save();

        $books = new Book();
        $books->image = 'conte1.jpg';
        $books->titre = 'Le petit prince';
        $books->resume =  "'Le petit prince' de Saint-Exupéry est un conte poétique qui suit les aventures d'un petit prince qui voyage à travers l'espace et rencontre différents personnages sur différentes planètes, apprenant la valeur de l'amitié et de l'amour.";
        $books->prix = 2000 ;
        $books->genre_id = 6;
        $books->auteur_id = 7;
        $books->save();

        $books = new Book();
        $books->image = 'conte2.jpg';
        $books->titre = 'Contes des plus grands ballets';
        $books->resume = "'Contes des plus grands ballets' d'Astrid Valence est un livre pour enfants qui présente les histoires de grands ballets célèbres tels que 'La Belle au bois dormant' et 'Le lac des cygnes'";
        $books->prix = 8000 ;
        $books->genre_id = 6;
        $books->auteur_id = 8;
        $books->save();


        $books = new Book();
        $books->image = 'thriller1.jpg';
        $books->titre = 'Mr Mercedes';
        $books->resume = "'Mr Mercedes' de Stephen King est un roman policier qui suit l'enquête d'un détective retraité sur un tueur en série qui se fait appeler Mr Mercedes.";
        $books->prix = 4500 ;
        $books->genre_id= 3;
        $books->auteur_id = 6;
        $books->save();


        $books = new Book();
        $books->image = 'thriller2.jpg';
        $books->titre = 'Dix Petits Nègres';
        $books->resume = "'Dix petits nègres' d'Agatha Christie est un roman policier qui suit l'enquête sur la disparition de dix personnes sur une île isolée.";
        $books->prix = 3500 ;
        $books->genre_id= 3;
        $books->auteur_id = 9;
        $books->save();

        $books = new Book();
        $books->image = 'thriller3.jpg';
        $books->titre = "Le Crime de l'Orient Express";
        $books->resume = "'Le crime de l'Orient-Express' d'Agatha Christie est un roman policier qui suit l'enquête sur un meurtre commis à bord d'un train de luxe.";
        $books->prix = 3500 ;
        $books->genre_id= 3;
        $books->auteur_id = 9;
        $books->save();

        $books = new Book();
        $books->image = 'theatre1.jpg';
        $books->titre = 'Dom Juan';
        $books->resume = "'Dom Juan' de Molière est une comédie française écrite au XVIIe siècle qui suit l'histoire d'un noble libertin appelé Don Juan.";
        $books->prix = 5000 ;
        $books->genre_id = 5;
        $books->auteur_id = 10;
        $books->save();

        $books = new Book();
        $books->image = 'theatre2.jpg';
        $books->titre = 'Le Cid';
        $books->resume = "'Le Cid' de Corneille est une tragédie française écrite au XVIIe siècle qui se concentre sur les conflits entre les nobles et les rois et les sacrifices que les personnages doivent faire pour protéger leur honneur et leur famille.";
        $books->prix = 5500 ;
        $books->genre_id = 5;
        $books->auteur_id = 11;
        $books->save();

        $books = new Book();
        $books->image = 'theatre3.jpg';
        $books->titre = 'Antigone';
        $books->resume = "'Antigone' de Jean Anouilh est une tragédie française moderne qui s'inspire de la mythologie grecque et suit l'histoire de la princesse Antigone qui défie les lois pour enterrer son frère mort.";
        $books->prix = 5500 ;
        $books->genre_id = 5;
        $books->auteur_id = 12;
        $books->save();

        $books = new Book();
        $books->image = 'romance1.jpg';
        $books->titre = 'Le rêve de nos mères';
        $books->resume = "'Le rêve de nos mères' de Carine Pitocchi est un roman qui suit l'histoire d'une jeune femme qui doit faire face à des défis personnels et familiaux tout en explorant ses racines et son héritage culturel.";
        $books->prix = 3200 ;
        $books->genre_id= 4;
        $books->auteur_id = 13;
        $books->save();

        $books = new Book();
        $books->image = 'romance2.jpg';
        $books->titre = 'Prisonnière';
        $books->resume = "'Prisonnière' de Danielle Steel est un roman d'aventure qui suit l'histoire d'une femme qui est capturée par des pirates et doit faire face à des défis pour survivre et s'échapper.";
        $books->prix = 4000 ;
        $books->genre_id= 4;
        $books->auteur_id = 14;
        $books->save();

        $books = new Book();
        $books->image = 'romance3.jpg';
        $books->titre = 'Cadeaux inestimables';
        $books->resume = "'Cadeaux inestimables' de Danielle Steel est un roman qui suit l'histoire d'une femme qui se retrouve confrontée à des choix difficiles et à des défis personnels alors qu'elle gère un magasin de cadeaux de luxe.";
        $books->prix = 5000 ;
        $books->genre_id= 4;
        $books->auteur_id = 14;
        $books->save();

        $books = new Book();
        $books->image = 'romance4.jpg';
        $books->titre = 'After';
        $books->resume = "'After' d'Anna Todd est un roman de fiction qui suit l'histoire d'une jeune fille innocente appelée Tessa qui tombe amoureuse d'un garçon bad boy nommé Hardin.";
        $books->prix = 7000 ;
        $books->genre_id= 4;
        $books->auteur_id = 15;
        $books->save();

        $books = new Book();
        $books->image = 'romance5.jpg';
        $books->titre = 'Adore Moi';
        $books->resume = "'Adore Moi' de Lisa Swann est un roman de romance érotique qui suit l'histoire d'une jeune femme qui tombe amoureuse d'un homme riche et mystérieux.";
        $books->prix = 6500;
        $books->genre_id= 4;
        $books->auteur_id = 16;
        $books->save();

        $books = new Book();
        $books->image = 'philosophie1.jpg';
        $books->titre = 'Le Zahir';
        $books->resume = "Un roman de l'écrivain argentin Paulo Coelho, qui raconte l'histoire d'un écrivain qui se met à la recherche de son épouse disparue, qui est devenue son 'Zahir'. Le livre explore des thèmes tels que l'amour, la liberté, la jalousie, la célébrité et l'identité";
        $books->prix = 5500;
        $books->genre_id=7;
        $books->auteur_id = 17;
        $books->save();

        $books = new Book();
        $books->image = 'philosophie2.jpg';
        $books->titre = "L'alchimiste";
        $books->resume = "Un roman de l'écrivain brésilien Paulo Coelho, qui raconte l'histoire d'un berger espagnol nommé Santiago, qui voyage en Égypte à la recherche d'un trésor caché. Le livre explore des thèmes tels que la poursuite de son destin, la poursuite de ses rêves, l'importance de l'écoute de son cœur, et l'omniprésence de Dieu.";
        $books->prix = 6500;
        $books->genre_id=7;
        $books->auteur_id = 17;
        $books->save();


        $books = new Book();
        $books->image = 'afrique1.jpg';
        $books->titre = 'Segu';
        $books->resume = "Un roman historique de l'écrivaine guadeloupéenne Maryse Condé, qui décrit la vie dans le royaume Bambara de Ségou au 18ème siècle, avant l'arrivée des colons européens. Le livre explore des thèmes tels que la politique, la religion, la famille, la culture, l'esclavage et la résistance.";
        $books->prix = 4500;
        $books->auteur_id = 18;
        $books->genre_id=9;
        $books->save();

        $books = new Book();
        $books->image = 'afrique2.jpg';
        $books->titre = 'Moi, Tituba, sorcière ';
        $books->resume = addslashes("Un roman de l'écrivaine guadeloupéenne Maryse Condé, qui raconte l'histoire de Tituba, une femme noire esclave qui a été accusée de sorcellerie pendant les procès de Salem en 1692. Le livre explore des thèmes tels que la race, la religion, le genre, l'oppression et la résistance.");
        $books->prix = 4500;
        $books->genre_id=9;
        $books->auteur_id = 18;
        $books->save();
        
        $books = new Book();
        $books->image = 'jeunesse1.jpg';
        $books->titre = "Les Six Compagnons se jettent à l'eau";
        $books->resume = "Un livre pour enfants de la série 'Les Six Compagnons' écrite par l'auteur français Paul-Jacques Bonzon, qui suit les aventures de six amis qui résolvent des mystères. Dans ce livre, ils enquêtent sur une série de cambriolages dans un camping.";
        $books->prix = 3500;
        $books->genre_id=8;
        $books->auteur_id = 19;
        $books->save();

        $books = new Book();
        $books->image = 'jeunesse2.jpg';
        $books->titre = 'Les Six Compagnons de la Croix-Rousse';
        $books->resume = " Un livre pour enfants de la série 'Les Six Compagnons' écrit par l'auteur français Paul-Jacques Bonzon, où les six amis visitent Lyon et enquêtent sur une série de vols dans un funiculaire.";
        $books->prix = 3500;
        $books->genre_id=8;
        $books->auteur_id = 19;
        $books->save();

        $books = new Book();
        $books->image = 'jeunesse3.jpg';
        $books->titre = "Le Club des Cinq et le trésor de l'île ";
        $books->resume = " Un livre pour enfants de la série 'Le Club des Cinq' écrite par l'auteur britannique Enid Blyton, qui suit les aventures de quatre enfants et de leur chien. Dans ce livre, ils se rendent sur une île pour enquêter sur un trésor caché.";
        $books->prix = 3000;
        $books->genre_id=8;
        $books->auteur_id = 20;
        $books->save();

        $books = new Book();
        $books->image = 'jeunesse4.jpg';
        $books->titre = 'Le Club des Cinq au bord de la mer';
        $books->resume = "Un livre pour enfants de la série 'Le Club des Cinq' écrit par l'auteur britannique Enid Blyton, où les quatre enfants et leur chien passent des vacances à la plage et enquêtent sur une série de cambriolages.";
        $books->prix = 3000;
        $books->genre_id=8;
        $books->auteur_id = 20;
        $books->save();
    }
}
