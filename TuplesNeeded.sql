use ZooWeeMama;
INSERT INTO ZooWeeMama.EXHIBIT(name, biome, b_name) VALUE ('Glorilla Exhibit', 'Jungle', 'Headquarters');
INSERT INTO ZooWeeMama.SPECIES(family, origin, description) VALUE ('Gorilla', 'Africa', 'strong bois. monke' );
INSERT INTO ZooWeeMama.ANIMAL(name, age, count, f_name, e_name) VALUE ('Harambe', 13, 1, 'Gorilla', 'Glorilla Exhibit');

INSERT INTO ZooWeeMama.BUILDING(name, year) VALUES ('Rainbow Road', 2012), ('Cage A', 2012), ('Cage B', 2013), ('Aquarium', 2016);
INSERT INTO ZooWeeMama.EXHIBIT(name, biome, b_name) VALUE ('Aquarium Exhibit', 'Ocean', 'Aquarium');
INSERT INTO ZooWeeMama.SPECIES(family, origin, description) VALUE ('Seahorse', 'Pacific Ocean', 'horses of the sea');

INSERT INTO ZooWeeMama.STORE(name, type, b_name) VALUES ('Gift Shop','Customers','Headquarters'),
                                                        ('Fish Food', 'Customers', 'Aquarium'),
                                                        ('Lettuce', 'Customers', 'Cage A');

INSERT INTO ZooWeeMama.EVENT(name, time, cost, capacity, b_name, Dep_ID) VALUE ('Seahorseback Riding', '2017-08-15 19:30:10', 69.99, 50, 'Aquarium', 9999999999);
