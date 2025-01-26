# SPRINT-banque
Projet sprint application bancaire licence 2 informatique 
branche Master


Conception d'un site web de base pour la gestion d'une banque 
L'objectif de ce projet et le développement d'un site web en architecture MVC pour la gestion d'une
banque avec les services de base : prises de rdv, ouverture de comptes, contrats d'assurances,
crédits,...etc. Une banque est composée d'un directeur d'agence, de plusieurs conseillers clients et
d'agents d'accueil. Il y a donc trois catégories d’employés. Chaque employé a son propre login
(identifiant) et son propre mot de passe. Votre site proposera une page d'accueil qui demande la
saisie d’un identifiant et d’un mot de passe. Une fois ces informations validées, une page suivant la
catégorie de l'employé s'affiche. On aura donc trois interfaces différentes : agent, conseiller et
directeur. 
Pages web des agents
Un agent d'accueil peut effectuer les opérations suivantes : 
– modifier certaines informations du client : adresse, num de tel, mail, profession, situation
familiale (marié, célibataire,...). 
– consulter la synthèse d'un client,
– effectuer des dépôts ou retraits sur le compte d'un client, 
– prendre un rdv pour un client avec son conseiller. 
Pour la consultation des soldes d'un client, il faut insérer l'id client puis appuyer sur le bouton
« synthèse client ». On affichera alors l'identité complète du client, la liste des comptes et des soldes
respectifs, la liste des contrats du client et le nom du conseiller qui suit le client dans l'agence. Un
client peut bien entendu avoir plusieurs comptes : PEL, CEL, Courant, Joint, Pro,...etc. Pour
simplifier on suppose que chaque compte a un nom (PEL, CEL,...), une date d'ouverture, un solde
actuel et un montant de découvert propre à chaque client. Par exemple, pour Dupont, 100 euros de
découvert sur le compte courant et 200 euros de découvert sur le compte joint. Chaque contrat à un
nom (assurance vie, crédit), un tarif mensuel et une date d'ouverture. L'agent d'accueil doit
également disposer d'une interface qui permet de retrouver l'id d'un client à partir de son nom + sa
date de naissance. Attention à la gestion des homonymes. 
Pour la gestion des dépôts ou retraits, il suffit d'insérer l'id client, valider puis un menu déroulant
s'affiche contenant le nom des comptes du client. On choisit alors un compte à créditer ou à débiter
ainsi que la somme. Si le retrait est impossible alors il faut interdire l'opération. Attention à la
gestion des découverts et aux différents contrôles car chaque client dispose ou non d'un montant de
découvert autorisé sur chacun de ses comptes. 
Pour la gestion des rdv, un agent d'accueil identifie d'abord le chargé client « X » du client. Il
affiche ensuite le planning de « X » sur une semaine « Y ». Cet affichage montrera les plages libres
et les plages occupées de X durant la semaine Y. L'agent propose alors une date et une heure de
libre (on fonctionne par tranche horaire d'une heure). Une fois que le client « X » a approuvé la date
et l'heure du rdv, l'agent doit le sauvegarder dans son interface et préciser le motif. Pour faire
simple on considère que chaque contrat ou compte que propose la banque est un motif de rdv. Le
site web affiche alors la liste des pièces à apporter pour l'entretien. C'est le directeur d'agence qui
décide de la liste des pièces à fournir suivant chaque motif. Il disposera d'une interface web qui lui
permet de noter pour chaque motif la liste des pièces que l'on doit apporter. Le motif doit être sous
forme d'une liste déroulante qui est chargée dynamiquement dans l'interface de l'agent d'accueil lors
de la saisie d'un rdv. On lui rajoutera toujours un motif « autre » dans la liste déroulante pour lui
laisser la possibilité de prendre un rdv pour un motif autre que les contrats/comptes que propose la
banque. 
Pages web des conseillers clients 
Un conseiller doit disposer d'une page pour visualiser le planning de la journée de n'importe quel
conseiller. Il peut également visualiser le planning sur une date X. D'autre part, un conseiller Y doit
pouvoir bloquer certains créneaux horaires afin d'accomplir des taches administratives. Un agent
d'accueil ne pourra donc pas prendre de rdv à un client avec le conseiller Y dans ces créneaux
horaires. 
Lorsque le conseiller visualise son planning du jour, il doit pouvoir cliquer sur chaque rdv et
visualiser la synthèse du client ainsi que l'objet du rdv et la liste des pièces nécessaires pour ce rdv.
Si le client n'est pas encore client de la banque alors la synthèse est vide et un message apparaît. 
Un conseiller peut : 
– inscrire un nouveau client à la banque,
– vendre un contrat à un client (assurance, crédit,...), 
– ouvrir un ou plusieurs comptes (PEL, CEL,...) à un client, 
– modifier la valeur d'un découvert, 
– résilier un contrat ou un compte. 
Pages web du directeur de l'agence
Le directeur de l'agence doit disposer de plusieurs interfaces pour : 
– créer et modifier les login et mot de passe des employés. Pour faciliter le projet on suppose
que tous les conseillers ont la même page web et que tous les agents d'accueil ont la même
page web,
– créer supprimer et modifier la liste des contrats et comptes que propose la banque. C'est à
dire que s'il décide que sa banque peut ouvrir des assurances autos alors il ajoute le contrat
« assurance auto » à la liste des contrats. Ainsi les agents d'accueil auront ce nouveau contrat
dans leur liste déroulante de motif lors d'une prise de rdv. 
– créer supprimer et modifier la liste des pièces à fournir pour chaque contrat et compte. C'est
à dire que s'il décide d'exiger un extrait de naissance pour ouvrir un compte CEL alors
l'agent d'accueil visualisera ceci lors de l'affichage des pièces à fournir lors de la prise d'un
rdv dont le motif est « ouverture compte CEL ». 
– visualiser les statistiques de sa banque : nombre de contrats souscris entre deux dates,
nombre de rdv pris par les agents d'accueil entre deux dates, le nombre total de clients de la
banque à une date, le solde total de tous les clients de la banque à une date. 
Travail à réaliser par trinôme
– Pensez d'abord à l'organisation en terme de MCD puis MLDR avant de commencer la 
programmation.
– Proposez un site web dynamique en utilisant les outils vue en cours : html,Css, Php et un 
peu de JS. 
– Soignez la présentation Css : de belles pages web agréables à consulter. De beaux 
formulaires clairs et propres. 
– Soignez les contrôles de gestion des erreurs : un dépôt d'un montant négatif, dépassement de
découvert lors du retrait, ouvrir deux fois le même compte pour un client. 
– Proposez un code Php propre clair et lisible en respectant obligatoirement l’architecture 
MVC
– Remplissez vos tables avec des informations bien avant le début de la soutenance pour tester
votre code et vos scénario.
