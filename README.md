a faire:
composer install
changer let databaseurl et mettre ou vous voulez mettre votre base de données soit mysql ou postegre
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
symfony server:start --no-tls

ensuite insert ceci (pour plus de fun):

INSERT INTO page (id, title, content, created_at, updated_at, fk_livre) VALUES
(1, 'Chapitre 1: La Menace fantôme', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.', '2005-03-14 00:00:00', '2005-09-01 00:00:00', 2),
(2, 'Chapitre 2: L'Attaque des clones', 'Vivamus sed ligula et tortor mattis auctor ac a lectus. Duis vitae nisi in nulla varius tempor non eget dolor..', '2017-09-18 00:00:00', '2019-01-01 00:00:00', 2),
(3, 'Chapitre 3:  La Revanche des Sith', 'Phasellus sodales nisi nec libero tristique, non condimentum ipsum viverra. Curabitur vitae nunc eget libero condimentum volutpat.','1999-01-01 00:00:00', '1997-06-23 00:00:00', 2),
(4, 'Chapitre 4: Un nouvel espoir', 'Sed viverra, felis a laoreet gravida, elit purus consequat ex, at pulvinar dui purus vel sapien. In ut mi ut lectus scelerisque faucibus. Mauris convallis consequat tortor, ac consequat sapien vulputate in. In hac habitasse platea dictumst. ', '1885-01-01 00:00:00', '1885-01-01 00:00:00', 2),
(5, 'Chapitre 5:  L'Empire contre-attaque', 'Nunc ultrices sagittis ligula, ac molestie enim aliquet nec. Sed nec commodo velit. Donec ultrices hendrerit sem. Sed vitae tellus sed purus fringilla congue. Nulla facilisi. Duis vitae ex id mi lacinia laoreet a sit amet sapien.', '1927-01-25 00:00:00', '1985-01-01 00:00:00', 2);

INSERT INTO livre (id, title, author, image, created_at, updated_at, resume, categorie)
VALUES 
    (1, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'https://m.media-amazon.com/images/I/710wth0vXZL._AC_UF1000,1000_QL80_.jpg', '2005-03-14', '2005-09-01', 'Un conte philosophique sur un jeune prince voyageant à travers différentes planètes et découvrant des leçons de vie profondes.', 'Philosophie'),
    (2, 'Star Wars: L''intégrale', 'George Lucas', 'https://assets.bubblebd.com/img/oul6udcpva/vqo24hnp1t.jpg', '1977-09-18', '2019-01-01', 'Une saga épique de science-fiction se déroulant dans une galaxie lointaine, mettant en scène des Jedi, des Sith, des héros et des méchants dans une lutte intergalactique pour le bien et le mal.', 'Science-fiction'),
    (3, 'Harry Potter et la Pierre Philosophale', 'J.K. Rowling', 'https://m.media-amazon.com/images/I/516qWQcG3FL.jpg', '1997-06-23', '1999-01-01', 'Le premier tome de la célèbre série suivant les aventures d\'un jeune sorcier découvrant son héritage magique et affrontant les forces du mal.', 'Fantasy'),
    (4, 'L''Alliance Gauloise', 'Alexandre Dumas', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCOeDlj06LVWXFJmHKSM0NleA0HCwus86w2ORyz8hjyA&s', '1885-01-01', '1885-01-01', 'Un roman historique explorant les intrigues politiques et les batailles épiques de la Gaule antique.', 'Roman historique'),
    (5, 'Une Vie en Hiver', 'Mikhail Bulgakov', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbsiEtpjv86gH4eCG1Jur14GsVZVq77eq8BZYksAX7lw&s', '1927-01-25', '1985-01-01', 'Une histoire captivante explorant les défis et les épreuves de la vie, avec des thèmes tels que l\'amour, la perte et la résilience.', 'Roman'),
    (6, 'La Dernière Tentation du Christ', 'Christian Ingerslev', 'https://m.media-amazon.com/images/I/81HtNQVpTWL._AC_UF1000,1000_QL80_.jpg', '2017-09-18', '2019-01-01', 'Un roman controversé explorant une version alternative de la vie de Jésus-Christ, avec ses doutes, ses tentations et sa mission divine.', 'Religion');

INSERT INTO categorie (id, label) VALUES
    (1, 'Science fiction'),
    (2, 'Romance'),
    (3, 'Action'),
    (4, 'Magie'),
    (5, 'Histoire'),
    (6, 'Religion');

INSERT INTO user (id, first_name,lastname, email, paswword, role)
VALUES
    (1, 'John','mollos', 'john@example.com', 'motdepasse123', 'utilisateur');
