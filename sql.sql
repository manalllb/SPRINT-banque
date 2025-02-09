-- Création de la table motif
CREATE TABLE motif (
    idMotif INT AUTO_INCREMENT PRIMARY KEY,
    libelleMotif VARCHAR(100) NOT NULL,
    listePieces TEXT
);
-- Création de la table employe
CREATE TABLE employe (
    numEmploye INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    login VARCHAR(100) NOT NULL,
    motDePasse VARCHAR(255) NOT NULL,
    categorie VARCHAR(50) NOT NULL
);

-- Création de la table client avec la clé étrangère vers employe
CREATE TABLE client (
    numClient INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    adresse VARCHAR(255),
    mail VARCHAR(100),
    numTel VARCHAR(15),
    situation ENUM('Célibataire', 'Marié', 'Divorcé', 'Veuf') NOT NULL,
    numEmploye INT,
    FOREIGN KEY (numEmploye) REFERENCES employe(numEmploye) ON DELETE SET NULL  -- Ajout de la clé étrangère
);

-- Création de la table compte
CREATE TABLE compte (
    numCompte INT AUTO_INCREMENT PRIMARY KEY,
    nomCompte VARCHAR(100) NOT NULL
);

-- Création de la table compte_client (relation entre client et compte)
CREATE TABLE compte_client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numClient INT NOT NULL,
    numCompte INT NOT NULL,
    dateOuverture DATE NOT NULL,
    solde DECIMAL(15, 2) DEFAULT 0.00,
    montantDecouvert DECIMAL(15, 2) DEFAULT 0.00,
    FOREIGN KEY (numClient) REFERENCES client(numClient) ON DELETE CASCADE,
    FOREIGN KEY (numCompte) REFERENCES compte(numCompte) ON DELETE CASCADE
);

-- Création de la table contrat
CREATE TABLE contrat (
    numContrat INT AUTO_INCREMENT PRIMARY KEY,
    nomContrat VARCHAR(100) NOT NULL
);

-- Création de la table contrat_client (relation entre client et contrat)
CREATE TABLE contrat_client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    numClient INT NOT NULL,
    numContrat INT NOT NULL,
    dateOuvertureContrat DATE NOT NULL,
    tarifMensuel DECIMAL(15, 2) DEFAULT 0.00,
    FOREIGN KEY (numClient) REFERENCES client(numClient) ON DELETE CASCADE,
    FOREIGN KEY (numContrat) REFERENCES contrat(numContrat) ON DELETE CASCADE
);

-- Création de la table operation
CREATE TABLE operation (
    numOp INT AUTO_INCREMENT PRIMARY KEY,
    montant DECIMAL(15, 2) NOT NULL,
    typeOp VARCHAR(50) NOT NULL,
    numCompte INT NOT NULL,
    numClient INT NOT NULL,
    FOREIGN KEY (numCompte) REFERENCES compte(numCompte) ON DELETE CASCADE,
    FOREIGN KEY (numClient) REFERENCES client(numClient) ON DELETE CASCADE
);

-- Création de la table rdv
CREATE TABLE rdv (
    numRdv INT AUTO_INCREMENT PRIMARY KEY,
    dateRdv DATETIME NOT NULL,
    numClient INT NOT NULL,
    numEmploye INT NOT NULL,
    idMotif INT NOT NULL,
    FOREIGN KEY (numClient) REFERENCES client(numClient) ON DELETE CASCADE,
    FOREIGN KEY (numEmploye) REFERENCES employe(numEmploye) ON DELETE CASCADE,
    FOREIGN KEY (idMotif) REFERENCES motif(idMotif) ON DELETE CASCADE
);

