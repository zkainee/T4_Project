/*
     Opdracht:      opdracht 4.1
     Auteur:        Martijn van Meer / Ralph Gijsbrechts
     Aanmaakdatum:  februari 2017 
	 Update:		april 2021 -- Rob Wessels
     Bestandsnaam:  pokemondb.sql
*/

-- Start in master database
USE MASTER;
GO

-- Drop in case database already exists
DROP DATABASE IF EXISTS [pokemondb];
GO

-- Create database called 'pokemondb'
CREATE DATABASE pokemondb;
GO
-- Use database called 'pokemondb'
USE pokemondb;

-- Table structure for table 'pokemon'
CREATE TABLE pokemon 
(
  name		varchar(60)		NOT NULL,
  number	int				NOT NULL,
  type1		varchar(30)		NOT NULL,
  type2		varchar(30)				,
  ability	varchar(40)		NOT NULL,
  species	varchar(50)		NOT NULL,
  picture	varchar(256)
);

-- Dumping data for table 'pokemon'
INSERT INTO pokemon (name, number, type1, type2, ability, species, picture) 
VALUES
('Bulbasaur', 1, 'Grass', 'Poison', 'Overgrow', 'Seed Pokemon', 'http://img.pokemondb.net/artwork/bulbasaur.jpg'),
('Ivysaur', 2, 'Grass', 'Poison', 'Overgrow', 'Seed Pokemon', 'http://img.pokemondb.net/artwork/ivysaur.jpg'),
('Venusaur', 3, 'Grass', 'Poison', 'Overgrow', 'Seed Pokemon', 'http://img.pokemondb.net/artwork/venusaur.jpg'),
('Charmander', 4, 'Fire', '', 'Blaze', 'Lizard Pokemon', 'http://img.pokemondb.net/artwork/charmander.jpg'),
('Charmeleon', 5, 'Fire', '', 'Blaze', 'Flame Pokemon', 'http://img.pokemondb.net/artwork/charmeleon.jpg'),
('Charizard', 6, 'Fire', 'Flying', 'Blaze', 'Flame Pokemon', 'http://img.pokemondb.net/artwork/charizard.jpg'),
('Squirtle', 7, 'Water', '', 'Torrent', 'Tiny Turtle Pokemon', 'http://img.pokemondb.net/artwork/squirtle.jpg'),
('Wartortle', 8, 'Water', '', 'Torrent', 'Turtle Pokemon', 'http://img.pokemondb.net/artwork/wartortle.jpg'),
('Blastoise', 9, 'Water', '', 'Torrent', 'Shellfish Pokemon', 'http://img.pokemondb.net/artwork/blastoise.jpg'),
('Caterpie', 10, 'Bug', '', 'Shield Dust', 'Worm Pokemon', 'http://img.pokemondb.net/artwork/caterpie.jpg'),
('Metapod', 11, 'Bug', '', 'Shed Skin', 'Cocoon Pokemon', 'http://img.pokemondb.net/artwork/metapod.jpg'),
('Butterfree', 12, 'Bug', 'Flying', 'Compoundeyes', 'Butterfly Pokemon', 'http://img.pokemondb.net/artwork/butterfree.jpg'),
('Weedle', 13, 'Bug', 'Poison', 'Shield Dust', 'Hairy Bug Pokemon', 'http://img.pokemondb.net/artwork/weedle.jpg'),
('Kakuna', 14, 'Bug', 'Poison', 'Shed Skin', 'Cocoon Pokemon', 'http://img.pokemondb.net/artwork/kakuna.jpg'),
('Beedrill', 15, 'Bug', 'Poison', 'Swarm', 'Poison Bee Pokemon', 'http://img.pokemondb.net/artwork/beedrill.jpg'),
('Pidgey', 16, 'Normal', 'Flying', 'Keen Eye', 'Tiny Bird Pokemon', 'http://img.pokemondb.net/artwork/pidgey.jpg'),
('Pidgeotto', 17, 'Normal', 'Flying', 'Keen Eye', 'Bird Pokemon', 'http://img.pokemondb.net/artwork/pidgeotto.jpg'),
('Pidgeot', 18, 'Normal', 'Flying', 'Keen Eye', 'Bird Pokemon', 'http://img.pokemondb.net/artwork/pidgeot.jpg'),
('Rattata', 19, 'Normal', '', 'Guts', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/rattata.jpg'),
('Raticate', 20, 'Normal', '', 'Guts', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/raticate.jpg'),
('Spearow', 21, 'Normal', 'Flying', 'Keen Eye', 'Tiny Bird Pokemon', 'http://img.pokemondb.net/artwork/spearow.jpg'),
('Fearow', 22, 'Normal', 'Flying', 'Keen Eye', 'Beak Pokemon', 'http://img.pokemondb.net/artwork/fearow.jpg'),
('Ekans', 23, 'Poison', '', 'Intimidate', 'Snake Pokemon', 'http://img.pokemondb.net/artwork/ekans.jpg'),
('Arbok', 24, 'Poison', '', 'Intimidate', 'Cobra Pokemon', 'http://img.pokemondb.net/artwork/arbok.jpg'),
('Pikachu', 25, 'Electric', '', 'Static', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/pikachu.jpg'),
('Raichu', 26, 'Electric', '', 'Static', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/raichu.jpg'),
('Sandshrew', 27, 'Ground', '', 'Sand Veil', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/sandshrew.jpg'),
('Sandslash', 28, 'Ground', '', 'Sand Veil', 'Mouse Pokemon', 'http://img.pokemondb.net/artwork/sandslash.jpg'),
('Nidoran (Female)', 29, 'Poison', '', 'Poison Point', 'Poison Pin Pokemon', 'http://img.pokemondb.net/artwork/nidoran-f.jpg'),
('Nidorina', 30, 'Poison', '', 'Poison Point', 'Poison Pin Pokemon', 'http://img.pokemondb.net/artwork/nidorina.jpg'),
('Nidoqueen', 31, 'Poison', 'Ground', 'Poison Point', 'Drill Pokemon', 'http://img.pokemondb.net/artwork/nidoqueen.jpg'),
('Nidoran (Male)', 32, 'Poison', '', 'Poison Point', 'Poison Pin Pokemon', 'http://img.pokemondb.net/artwork/nidoran-m.jpg'),
('Nidorino', 33, 'Poison', '', 'Poison Point', 'Poison Pin Pokemon', 'http://img.pokemondb.net/artwork/nidorino.jpg'),
('Nidoking', 34, 'Poison', 'Ground', 'Poison Point', 'Drill Pokemon', 'http://img.pokemondb.net/artwork/nidoking.jpg'),
('Clefairy', 35, 'Normal', '', 'Cute Charm', 'Fairy Pokemon', 'http://img.pokemondb.net/artwork/clefairy.jpg'),
('Clefable', 36, 'Normal', '', 'Cute Charm', 'Fairy Pokemon', 'http://img.pokemondb.net/artwork/clefable.jpg'),
('Vulpix', 37, 'Fire', '', 'Flash Fire', 'Fox Pokemon', 'http://img.pokemondb.net/artwork/vulpix.jpg'),
('Ninetales', 38, 'Fire', '', 'Flash Fire', 'Fox Pokemon', 'http://img.pokemondb.net/artwork/ninetales.jpg'),
('Jigglypuff', 39, 'Normal', '', 'Cute Charm', 'Balloon Pokemon', 'http://img.pokemondb.net/artwork/jigglypuff.jpg'),
('Wigglytuff', 40, 'Normal', '', 'Cute Charm', 'Balloon Pokemon', 'http://img.pokemondb.net/artwork/wigglytuff.jpg'),
('Zubat', 41, 'Poison', 'Flying', 'Inner Focus', 'Bat Pokemon', 'http://img.pokemondb.net/artwork/zubat.jpg'),
('Golbat', 42, 'Poison', 'Flying', 'Inner Focus', 'Bat Pokemon', 'http://img.pokemondb.net/artwork/golbat.jpg'),
('Oddish', 43, 'Grass', 'Poison', 'Chlorophyll', 'Weed Pokemon', 'http://img.pokemondb.net/artwork/oddish.jpg'),
('Gloom', 44, 'Grass', 'Poison', 'Chlorophyll', 'Weed Pokemon', 'http://img.pokemondb.net/artwork/gloom.jpg'),
('Vileplume', 45, 'Grass', 'Poison', 'Chlorophyll', 'Flower Pokemon', 'http://img.pokemondb.net/artwork/vileplume.jpg'),
('Paras', 46, 'Bug', 'Grass', 'Dry Skin', 'Mushroom Pokemon', 'http://img.pokemondb.net/artwork/paras.jpg'),
('Parasect', 47, 'Bug', 'Grass', 'Dry Skin', 'Mushroom Pokemon', 'http://img.pokemondb.net/artwork/parasect.jpg'),
('Venonat', 48, 'Bug', 'Poison', 'Compoundeyes', 'Insect Pokemon', 'http://img.pokemondb.net/artwork/venonat.jpg'),
('Venomoth', 49, 'Bug', 'Poison', 'Shield Dust', 'Poison Moth Pokemon', 'http://img.pokemondb.net/artwork/venomoth.jpg'),
('Diglett', 50, 'Ground', '', 'Arena Trap', 'Mole Pokemon', 'http://img.pokemondb.net/artwork/diglett.jpg'),
('Dugtrio', 51, 'Ground', '', 'Arena Trap', 'Mole Pokemon', 'http://img.pokemondb.net/artwork/dugtrio.jpg'),
('Meowth', 52, 'Normal', '', 'Pickup', 'Scratch Cat Pokemon', 'http://img.pokemondb.net/artwork/meowth.jpg'),
('Persian', 53, 'Normal', '', 'Limber', 'Classy Cat Pokemon', 'http://img.pokemondb.net/artwork/persian.jpg'),
('Psyduck', 54, 'Water', '', 'Cloud Nine', 'Duck Pokemon', 'http://img.pokemondb.net/artwork/psyduck.jpg'),
('Golduck', 55, 'Water', '', 'Cloud Nine', 'Duck Pokemon', 'http://img.pokemondb.net/artwork/golduck.jpg'),
('Mankey', 56, 'Fighting', '', 'Anger Point', 'Pig Monkey Pokemon', 'http://img.pokemondb.net/artwork/mankey.jpg'),
('Primeape', 57, 'Fighting', '', 'Anger Point', 'Pig Monkey Pokemon', 'http://img.pokemondb.net/artwork/primeape.jpg'),
('Growlithe', 58, 'Fire', '', 'Flash Fire', 'Puppy Pokemon', 'http://img.pokemondb.net/artwork/growlithe.jpg'),
('Arcanine', 59, 'Fire', '', 'Flash Fire', 'Legendary Pokemon', 'http://img.pokemondb.net/artwork/arcanine.jpg'),
('Poliwag', 60, 'Water', '', 'Damp', 'Tadpole Pokemon', 'http://img.pokemondb.net/artwork/poliwag.jpg'),
('Poliwhirl', 61, 'Water', '', 'Damp', 'Tadpole Pokemon', 'http://img.pokemondb.net/artwork/poliwhirl.jpg'),
('Poliwrath', 62, 'Water', 'Fighting', 'Damp', 'Tadpole Pokemon', 'http://img.pokemondb.net/artwork/poliwrath.jpg'),
('Abra', 63, 'Psychic', '', 'Inner Focus', 'Psi Pokemon', 'http://img.pokemondb.net/artwork/abra.jpg'),
('Kadabra', 64, 'Psychic', '', 'Inner Focus', 'Psi Pokemon', 'http://img.pokemondb.net/artwork/kadabra.jpg'),
('Alakazam', 65, 'Psychic', '', 'Inner Focus', 'Psi Pokemon', 'http://img.pokemondb.net/artwork/alakazam.jpg'),
('Kabuto', 140, 'Rock', 'Water', 'Battle Armor', 'Shellfish Pokemon', 'http://img.pokemondb.net/artwork/kabuto.jpg'),
('Geodude', 74, 'Rock', 'Ground', 'Rock Head', 'Rock Pokemon', 'http://img.pokemondb.net/artwork/geodude.jpg'),
('Magikarp', 129, 'Water', '', 'Swift Swim', 'Fish Pokemon', 'http://img.pokemondb.net/artwork/magikarp.jpg'),
('Goldeen', 118, 'Water', '', 'Swift Swim', 'Goldfish Pokemon', 'http://img.pokemondb.net/artwork/goldeen.jpg'),
('Seaking', 119, 'Water', '', 'Swift Swim', 'Goldfish Pokemon', 'http://img.pokemondb.net/artwork/seaking.jpg'),
('Tentacool', 72, 'Water', 'Poison', 'Clear Body', 'Jellyfish Pokemon', 'http://img.pokemondb.net/artwork/tentacool.jpg'),
('Staryu', 120, 'Water', '', 'Illuminate', 'Star Shape Pokemon', 'http://img.pokemondb.net/artwork/staryu.jpg');

-- Alle ''-waarden van type2 wijzigen naar NULL
UPDATE pokemon
SET type2 = NULL
WHERE type2 = '';
