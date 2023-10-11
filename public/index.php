<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require '../src/vendor/autoload.php';
$app = new \Slim\App();

// Define the organizational structure 
$organizationalStructure = [
    "President" => [
        "Name" => "Dr. Jaime I. Manuel Jr.",
        "Board Secretary" => "Dr. Antonio O. Ogbinar",
        "University Secretary" => "Dr. Antonio O. Ogbinar",
        "Vice Presidents" => [
            "Administration" => [
                "Vice President" => "Dr. Estrella N. Perez",
                "Directors" => [
                    "Administrative Services" => "Atty. Kristine Gay B. Balanag",
                    "Auxiliary Services" => "Dr. Florendo Q. Damasco Jr.",
                    "Bids & Awards" => "Atty. Kristine Gay B. Balanag",
                    "Finance Services" => "Ms. Placida E. De Guzman",
                    "Medical Services" => "Dr. Maria Consuelo W. Alcantara",
                    "Internal Quality Assurance System" => "Dr. Angelina J. Prado"
                ]
            ],
            "Academic Affairs" => [
                "Vice President" => "Dr. Honorio C. Buccat",
                "Directors" => [
                    "Instruction" => "Dr. Elsie M. Pacio",
                    "Student Affairs and Services" => "Dr. Shalimar L. Navalta",
                    "Sports" => "Mr. Paolo Jan F. Samson",
                    "Cultural Affairs" => "Prof. Irene N. Gomez",
                    "National Training Service Program" => "Dr. Jo-anne D. Villar",
                    "Library Services & Development" => "Dr. Liceria G. Enteria",
                    "Student Admission & Records" => "Dr. Valoree M. Salamanca",
                    "Alumni Affairs" => "Prof. Delia M. Imperial",
                    "Internationalization and Linkages" => "Dr. Joanne C. Rivera"
                ]
            ],
            "Research & Extension" => [
                "Vice President" => "Dr. Cynthia M. Rodriguez",
                "Directors" => [
                    "Research" => "Mr. Kenneth G. Bayani",
                    "Extension" => "Dr. Eladio E. Camalig Jr."
                ]
            ],
            "Planning & Resource Development" => [
                "Vice President" => "Dr. Prescilo P. Fontanilla Jr.",
                "Directors" => [
                    "Resource Development & GAD Focal Person" => "Ms. Perla S. Sotelo",
                    "Planning & Development" => "Dr. Lilito D. Galvan",
                    "Business Affairs" => "Dr. Melchor D. Salom",
                    "Management Information System" => "Dr. Stephan Kupsch"
                ]
            ]
        ]
    ],
    "Chancellors" => [
        "Northern La Union Campus" => "Dr. Junifer Rey E. Tabafunda",
        "Mid La Union Campus" => "Dr. Eduardo C. Corpuz",
        "South La Union Campus" => "Dr. Floribeth P. Cuison"
    ],
    "Executive Directors" => [
        "Open University System" => "Dr. Joanne C. Rivera",
        "Sericulture Research & Development Institute" => "Dr. Cristeta F. Gapuz",
        "OIC Executive Director National Apiculture Research & Dev't Institute" => "Dr. Gregory B. Viste"
    ]
];

// Define the API route
$app->get('/orgstructure', function (Request $request, Response $response) use ($organizationalStructure) {
    $response->getBody()->write(json_encode($organizationalStructure, JSON_PRETTY_PRINT));
    return $response->withHeader('Content-Type', 'application/json');
});

$app->run();
?>