
drop table parcours;

CREATE TABLE parcours
(
    id      integer  primary key autoincrement,
    titre   varchar(100) NOT NULL,
    periode varchar(100) NOT NULL,
    lieu    varchar(100) NOT NULL,
    detail  text         NOT NULL
);

INSERT INTO parcours (id, titre, periode, lieu, detail)
VALUES (1, 'BEP Systèmes électroniques numériques', '2019', 'Amiens - Lyçée Saint-Riquier',
        ' Diplôme obtenu durant ma formation en BAC PRO Systèmes électroniques numériques, le BEP SEN valide un ensemble de connaissances et de compétences générales et professionnelles.'),
       (2, 'BAC PRO Systèmes électroniques numériques', ' 2020', ' Amiens - Lyçée Saint-Riquier ',
        'Après 3 ans de formation, et 5 domaines étudiés (Télécommunication et Reseau, Electronique Industrielle Embarquée, Electrodomestique, Audiovisuel professionnel, Audiovisuel Multimédia, Alarme Sécurité Incendie) obtention de mon BAC PRO SEN.'),
       (3, 'BTS Services informatiques aux organisations', '2021', 'Amiens - Lyçée Saint-Rémi',
        ' Actuellement en première année de BTS SIO, Spécialité SLAM, je passerai mes épreuves en Mai et Juin 2023.');

Select * from parcours;
