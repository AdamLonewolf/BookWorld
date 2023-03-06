<?php

namespace Database\Seeders;

use App\Models\Auteur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auteur = new Auteur();
        $auteur->image = 'cslewis.jpg';           
        $auteur->nom = 'C.S Lewis';
        $auteur->biographie = "C.S. Lewis (1898-1963) était un écrivain et universitaire britannique. Il a enseigné à l'Université d'Oxford pendant de nombreuses années et est connu pour ses œuvres de fiction chrétienne, y compris Les Chroniques de Narnia. Lewis a également écrit des essais et des critiques littéraires, ainsi que des ouvrages sur la religion.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'tolkien.jpg';        
        $auteur->nom = 'J.R.R Tolkien';
        $auteur->biographie = "J.R.R. Tolkien (1892-1973) était un écrivain, poète et universitaire britannique. Il a également enseigné à l'Université d'Oxford et est surtout connu pour ses romans de fantasy, en particulier Le Seigneur des Anneaux et Le Hobbit. Tolkien était un expert en langues anciennes et a créé plusieurs langues fictives pour ses œuvres.";
        $auteur->save();    

        $auteur = new Auteur();
        $auteur->image = 'crista.jpg';
        $auteur->nom = 'Crista S. Lockwood';
        $auteur->biographie = "Crista S. Lockwood est une auteure américaine, spécialisée dans la littérature jeunesse et les romans d'amour. Elle a publié plusieurs romans, dont Shadow of the Wind et Love Always, Kate.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'adam.jpg';
        $auteur->nom = 'Adam Nevill';
        $auteur->biographie = "Adam Nevill est un écrivain britannique né en 1969, spécialisé dans le thriller et l'horreur. Il a remporté plusieurs prix pour ses romans, dont Apartment 16 et The Ritual.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'blair.jpg';
        $auteur->nom = 'Blair Daniels';
        $auteur->biographie = "Blair Daniels est une auteure américaine, connue pour ses histoires courtes de suspense et d'horreur. Elle a publié plusieurs recueils de nouvelles, dont They're Just Teeth et Ghost Stories.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'stephen.jpg';
        $auteur->nom = 'Stephen King';
        $auteur->biographie = "Stephen King est un écrivain américain né en 1947, connu pour ses romans d'horreur, de science-fiction et de fantasy, dont Carrie, Shining et Misery. King est l'un des auteurs les plus populaires de son genre, avec plus de 350 millions d'exemplaires de ses livres vendus dans le monde entier.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'exupery.jpg';
        $auteur->nom = 'Saint Exupéry';
        $auteur->biographie = "Antoine de Saint-Exupéry (1900-1944) était un écrivain et aviateur français du XXe siècle. Il a écrit plusieurs livres, dont Le Petit Prince, qui est devenu l'un des livres les plus célèbres de la littérature française.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'astrid.jpg';
        $auteur->nom = 'Astrid Valence';
        $auteur->biographie = "Astrid Valence est une auteure française, connue pour ses romans de suspense psychologique. Elle a publié plusieurs livres, dont La Nuit du Verseau et Les Ombres de la nuit.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'agatha.jpg';
        $auteur->nom = 'Agatha Christie';
        $auteur->biographie = "Agatha Christie (1890-1976) était une écrivaine britannique, considérée comme la reine du roman policier. Elle a écrit plus de 80 romans, nouvelles et pièces de théâtre, dont les célèbres Hercule Poirot et Miss Marple. Ses livres se sont vendus à plus de 2 milliards d'exemplaires dans le monde entier.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'moliere.jpg';        
        $auteur->nom = 'Molière';
        $auteur->biographie = "Molière (1622-1673) était un écrivain et comédien français. Il est considéré comme l'un des plus grands dramaturges de la littérature française et est célèbre pour ses comédies satiriques, dont Les Fourberies de Scapin et Le Misanthrope.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'corneille.jpg';
        $auteur->nom = 'Corneille';
        $auteur->biographie = "Pierre Corneille (1606-1684) était un dramaturge français du XVIIe siècle. Il est surtout connu pour ses tragédies, comme Le Cid et Horace, qui ont contribué à la renaissance du théâtre français à cette époque.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'jean.jpg';
        $auteur->nom = 'Jean Anouilh';
        $auteur->biographie = "Jean Anouilh (1910-1987) était un dramaturge et scénariste français. Il a écrit de nombreuses pièces de théâtre, dont Antigone et La Répétition ou l'Amour puni, qui ont été acclamées par la critique.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'carine.jpg';
        $auteur->nom = 'Carine Pitocchi';
        $auteur->biographie = "Carine Pitocchi est une auteure française, connue pour ses romans de romance et de fantasy. Elle a publié plusieurs livres, dont Les Guerriers de l'ombre et Les Enfants de l'Eau.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'danielle.jpg';
        $auteur->nom = 'Danielle Steel';
        $auteur->biographie = "Danielle Steel est une romancière américaine née en 1947, qui a vendu plus de 800 millions de livres dans le monde entier. Elle est connue pour ses romans romantiques, qui mettent souvent en scène des personnages riches et célèbres.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'anna.jpg';
        $auteur->nom = 'Anna Todd';
        $auteur->biographie = "Anna Todd est une auteure américaine, surtout connue pour sa série de livres After, qui a commencé comme une fanfiction sur le groupe One Direction. La série a été publiée en plusieurs volumes et a été un best-seller international.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'lisa.jpg';
        $auteur->nom = 'Lisa Swann';
        $auteur->biographie = "Lisa Swann est une auteure de romans de romance contemporaine et de suspense, dont les livres incluent La Promesse de Lola, L'Amour en 9 défis, et Un cœur pour deux.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'paolo.jpg';
        $auteur->nom = 'Paolo Coelho';
        $auteur->biographie = "Paulo Coelho est un écrivain brésilien, né en 1947. Il est connu pour son livre L'Alchimiste, qui a été traduit en plus de 80 langues et vendu à plus de 65 millions d'exemplaires. Il a également écrit plusieurs autres livres, dont Brida, Le Zahir et Le Guerrier de lumière.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'maryse.jpg';
        $auteur->nom = 'Maryse Condé';
        $auteur->biographie = "Maryse Condé est une auteure guadeloupéenne, née en 1937. Elle est connue pour ses romans qui explorent des thèmes tels que l'identité, la race et la colonisation. Elle a remporté de nombreux prix pour son travail, dont le prix Nobel alternatif de littérature en 2018.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'paul.jpg';          
        $auteur->nom = 'Paul-Jacques Bonzon';
        $auteur->biographie = "Paul-Jacques Bonzon était un écrivain français pour enfants, né en 1908 et décédé en 1978. Il est surtout connu pour sa série de livres Les Six Compagnons, qui suit les aventures d'un groupe de jeunes détectives.";
        $auteur->save();

        $auteur = new Auteur();
        $auteur->image = 'enid.jpg';
        $auteur->nom = 'Enid Blyton';
        $auteur->biographie = "Enid Blyton était une écrivaine anglaise pour enfants, née en 1897 et décédée en 1968. Elle a écrit de nombreux livres pour enfants, dont les séries Les Cinq et Le Club des Cinq, ainsi que Les Malheurs de Sophie. Elle est l'une des auteures pour enfants les plus populaires de tous les temps, avec plus de 600 millions de livres vendus dans le monde entier.";
        $auteur->save();

    }
}
