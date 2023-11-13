CREATE TABLE color (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  hex char(7) NOT NULL
);

CREATE TABLE type (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name varchar(255) NOT NULL
);

CREATE TABLE pokemon (
  id char(4) NOT NULL PRIMARY KEY,
  name varchar(255) NOT NULL,
  hp int(3) NOT NULL,
  img varchar(255) NOT NULL,
  color int(11) NOT NULL,
  FOREIGN KEY (color) REFERENCES color(id)
);

CREATE TABLE pokemon_type (
  pokemon char(4) NOT NULL,
  type int(11) NOT NULL,
  FOREIGN KEY (pokemon) REFERENCES pokemon(id),
  FOREIGN KEY (type) REFERENCES type(id)
);

CREATE TABLE echange (
  id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  echanger char(4) NOT NULL,
  wishlist char(4) NOT NULL,
  username varchar(255) NOT NULL,
  FOREIGN KEY (echanger) REFERENCES pokemon(id),
  FOREIGN KEY (wishlist) REFERENCES pokemon(id)
);



INSERT INTO type (id, name) VALUES
(1, 'Plante'),
(2, 'Poison'),
(3, 'Feu'),
(4, 'Vol'),
(5, 'Eau'),
(6, 'Insecte'),
(7, 'Normal'),
(8, 'Electrik'),
(9, 'Sol'),
(10, 'Fée'),
(11, 'Combat'),
(12, 'Psy'),
(13, 'Roche'),
(14, 'Acier'),
(15, 'Glace'),
(16, 'Spectre'),
(17, 'Dragon'),
(18, 'Ténèbres');

INSERT INTO color (id, hex) VALUES
(1, '#9bcc50'),
(2, '#b97fc9'),
(3, '#fd7d24'),
(4, '#3dc7ef'),
(5, '#4592c4'),
(6, '#719f3f'),
(7, '#a3acaf'),
(8, '#eed535'),
(9, '#ab9842'),
(10, '#fdb9e9'),
(11, '#d56723'),
(12, '#f366b9'),
(13, '#a38c21'),
(14, '#9eb7b8'),
(15, '#51c4e7'),
(16, '#7b62a3'),
(17, '#f16e57'),
(18, '#707070');

INSERT INTO pokemon (id, name, hp, img, color) VALUES
('0001', 'Bulbizarre', 70, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png', 1),
('0002', 'Herbizarre', 100, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png', 1),
('0003', 'Florizarre', 130, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png', 1),
('0004', 'Salamèche', 70, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png', 3),
('0005', 'Reptincel', 100, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png', 3),
('0006', 'Dracaufeu', 130, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png', 3),
('0007', 'Carapuce', 70, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png', 5),
('0008', 'Carabaffe', 100, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png', 5),
('0009', 'Tortank', 130, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png', 5),
('0010', 'Chenipan', 50, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/010.png', 6),
('0011', 'Chrysacier', 80, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/011.png', 6),
('0012', 'Papilusion', 120, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/012.png', 6),
('0013', 'Aspicot', 40, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/013.png', 6),
('0014', 'Coconfort', 80, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/014.png', 6),
('0015', 'Dardargnan', 130, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/015.png', 6),
('0016', 'Roucool', 60, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/016.png', 7),
('0017', 'Roucoups', 90, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/017.png', 7),
('0018', 'Roucarnage', 130, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/018.png', 7),
('0019', 'Rattata', 40, 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/019.png', 7);

INSERT INTO pokemon_type (pokemon, type) VALUES
('0001', 1),
('0001', 2),
('0002', 1),
('0002', 2),
('0003', 1),
('0003', 2),
('0004', 3),
('0005', 3),
('0006', 3),
('0006', 4),
('0007', 5),
('0008', 5),
('0009', 5),
('0010', 6),
('0011', 6),
('0012', 6),
('0012', 4),
('0013', 6),
('0013', 2),
('0014', 6),
('0014', 2),
('0015', 6),
('0015', 2),
('0016', 7),
('0016', 4),
('0017', 7),
('0017', 4),
('0018', 7),
('0018', 4),
('0019', 7);