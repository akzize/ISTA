<?php

namespace Database\Seeders;

use App\Models\Filiere;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FiliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $code_filieres = [

            'TSGE101',
            'GE101',
            'GEOOM301',
            'AA101',
            'AAOC201',
            'TREMOA101',
            'RVA201',
            'CCTP101',
            'AEFGT101',
            'TFCC201',
            'PS102',
            'ESA101',
            'EEI201',
            'EEI101',
            'EB102',
            'EB101',
            'ISP101',
            'OSCC101',
            'ART202',
            'ID101',
            'GEOCF201',
            'AAOC301',
            'COMPT201',
            'RVA101',
            'ESA201',
            'ART102',
            'DEV101',
            'IDOSR201',
            'GEOCM301',
            'ESA301',
            'ART201',
            'TSGE201',
            'AAOCP301',
            'TREMOA201',
            'MOAB201',
            'ART101',
            'AAOG301',
            'TCPS101',
            'MI301',
            'TCPI101',
            'MI201',
            'GEOCF301',
            'GEORH301',

        ];

        $name_filieres = [
            "(CDS)Technicien Spécialisé en Gestion des Entreprises",
            "Chef de Chantiers Travaux Publics",
            "Menuiserie",
            "Menuiserie Aluminium",
            "Menuiserie Aluminium",
            "Peintre Vitrier",
            "Peintre Vitrier",
            "Agent d'Entretien en Froid et Génie Thermique option Frigoriste",
            "Plomberie Sanitaire",
            "Technicien en Electricité de Maintenance Industrielle",
            "Tailleur couturier",
            "Tailleur couturier",
            "Développement Digital option Web Full Stack",
            "(CDS)Technicien Spécialisé en Gestion des Entreprises",
            "Gestion des Entreprises",
            "Gestion des Entreprises option Office Manager",
            "Assistant Administratif",
            "Assistant Administratif option Commerce",
            "Technicien en Réparation des Engins à Moteur (Option: Automobile)",
            "Réparateur de Véhicules Automobiles",
            "Chef de Chantiers Travaux Publics",
            "Agent d'Entretien en Froid et Génie Thermique",
            "Technicien en Froid Commercial et Climatisation",
            "Plomberie Sanitaire",
            "Electromécanique des Systèmes Automatisées",
            "Electricité d'Entretien Industriel",
            "Electricité d'Entretien Industriel",
            "Electricité de Bâtiment",
            "Electricité de Bâtiment",
            "Installateur du système photovoltaique",
            "Ouvrier Spécialisé en Coupe et Couture",
            "Agent de Restauration",
            "Infrastructure Digitale",
            "Gestion des Entreprises option Comptabilité et Finance",
            "Assistant Administratif option Commerce",
            "Comptabilité",
            "Réparateur de Véhicules Automobiles",
            "Electromécanique des Systèmes Automatisées",
            "Agent de Restauration",
            "Développement Digital",
            "Infrastructure Digitale option Systèmes et Réseaux",
            "Gestion des Entreprises option Commerce et Marketing",
            "(CDS)Electromécanique des Systèmes Automatisées",
            "Agent de Restauration",
            "(CDS)Technicien Spécialisé en Gestion des Entreprises",
            "Assistant Administratif option Comptabilité",
            "Technicien en Réparation des Engins à Moteur (Option: Automobile)",
            "Menuiserie option Aluminium et Bois",
            "Agent de Restauration",
            "Assistant Administratif option Gestion",
            "Tronc commun professionnel service",
            "Maintenance industrielle",
            "Tronc cummun professionnel industriel",
            "Maintenance industrielle",
            "Gestion des Entreprises option Comptabilité et Finance",
            "Gestion des Entreprises option Ressources Humaines",
        ];

        for($i = 0; $i < count($code_filieres); $i++){
            Filiere::create([
'code_filiere' => $code_filieres[$i],
'filiere_name' => $name_filieres[$i],
            ]);
        }
}
}
