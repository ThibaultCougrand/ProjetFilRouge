#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id         Int  Auto_increment  NOT NULL ,
        email      Varchar (100) NOT NULL ,
        password   Varchar (100) NOT NULL ,
        name       Varchar (100) NOT NULL ,
        first_name Varchar (100) NOT NULL ,
        age        TinyINT NOT NULL ,
        sexe       Char (10) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: adress
#------------------------------------------------------------

CREATE TABLE adress(
        id                Int  Auto_increment  NOT NULL ,
        adress            Varchar (255) NOT NULL ,
        additional_adress Varchar (255) NOT NULL ,
        postal_code       Int NOT NULL ,
        city              Varchar (100) NOT NULL ,
        id_users          Int NOT NULL
	,CONSTRAINT adress_PK PRIMARY KEY (id)

	,CONSTRAINT adress_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: bill
#------------------------------------------------------------

CREATE TABLE bill(
        id        Int  Auto_increment  NOT NULL ,
        created   TimeStamp NOT NULL ,
        paid      Datetime NOT NULL ,
        id_adress Int NOT NULL
	,CONSTRAINT bill_PK PRIMARY KEY (id)

	,CONSTRAINT bill_adress_FK FOREIGN KEY (id_adress) REFERENCES adress(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: unit
#------------------------------------------------------------

CREATE TABLE unit(
        id    Int  Auto_increment  NOT NULL ,
        unite Varchar (100) NOT NULL
	,CONSTRAINT unit_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: category
#------------------------------------------------------------

CREATE TABLE category(
        id   Int  Auto_increment  NOT NULL ,
        type Varchar (100) NOT NULL
	,CONSTRAINT category_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ingredients
#------------------------------------------------------------

CREATE TABLE ingredients(
        id          Int  Auto_increment  NOT NULL ,
        name        Varchar (100) NOT NULL ,
        price       Double NOT NULL ,
        id_unit     Int NOT NULL ,
        id_category Int NOT NULL
	,CONSTRAINT ingredients_PK PRIMARY KEY (id)

	,CONSTRAINT ingredients_unit_FK FOREIGN KEY (id_unit) REFERENCES unit(id)
	,CONSTRAINT ingredients_category0_FK FOREIGN KEY (id_category) REFERENCES category(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recipe
#------------------------------------------------------------

CREATE TABLE recipe(
        id          Int NOT NULL ,
        name        Varchar (255) NOT NULL ,
        description Text NOT NULL
	,CONSTRAINT recipe_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: command
#------------------------------------------------------------

CREATE TABLE command(
        id      Int NOT NULL ,
        id_bill Int NOT NULL ,
        qt      Int NOT NULL
	,CONSTRAINT command_PK PRIMARY KEY (id,id_bill)

	,CONSTRAINT command_ingredients_FK FOREIGN KEY (id) REFERENCES ingredients(id)
	,CONSTRAINT command_bill0_FK FOREIGN KEY (id_bill) REFERENCES bill(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recipe_ing
#------------------------------------------------------------

CREATE TABLE recipe_ing(
        id        Int NOT NULL ,
        id_recipe Int NOT NULL
	,CONSTRAINT recipe_ing_PK PRIMARY KEY (id,id_recipe)

	,CONSTRAINT recipe_ing_ingredients_FK FOREIGN KEY (id) REFERENCES ingredients(id)
	,CONSTRAINT recipe_ing_recipe0_FK FOREIGN KEY (id_recipe) REFERENCES recipe(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id       Int NOT NULL ,
        id_users Int NOT NULL
	,CONSTRAINT note_PK PRIMARY KEY (id,id_users)

	,CONSTRAINT note_recipe_FK FOREIGN KEY (id) REFERENCES recipe(id)
	,CONSTRAINT note_users0_FK FOREIGN KEY (id_users) REFERENCES users(id)
)ENGINE=InnoDB;

