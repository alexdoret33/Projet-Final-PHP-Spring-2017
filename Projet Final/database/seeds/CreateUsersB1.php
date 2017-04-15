<?php

use Illuminate\Database\Seeder;

class CreateUsersB1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'nom' => "Aubineau",
            'prenom' => 'Alexis',
            'email' => 'alexis.aubineau@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);


        DB::table('users')->insert([
            'nom' => "Bascop",
            'prenom' => 'Arsene',
            'email' => 'arsene.bascop@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Beghin",
            'prenom' => 'Raphael',
            'email' => 'raphael.beghin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Benayoun",
            'prenom' => 'Elie',
            'email' => 'elie.benayoun@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Bichon",
            'prenom' => 'Thomas',
            'email' => 'thomas.bichon@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Brugere",
            'prenom' => 'Leo',
            'email' => 'leo.brugere@ynov.com',
            'password' => '$2y$10$cZ6nDrDw88skZNZZf00gR.BbBf7ux.fUD6g2lh9Y4frhjg7XWAodG',
            'admin' => 1,
        ]);

        DB::table('users')->insert([
            'nom' => "Canteloup",
            'prenom' => 'Anthony',
            'email' => 'anthony.canteloup@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Cardarelli",
            'prenom' => 'Clement',
            'email' => 'clement.cardarelli@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Chiny",
            'prenom' => 'Antoine',
            'email' => 'antoine.chiny@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Ciboulle",
            'prenom' => 'Mathieu',
            'email' => 'mathieu.ciboulle@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Cloux",
            'prenom' => 'Clement',
            'email' => 'clement.cloux@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Courrian",
            'prenom' => 'Yannick',
            'email' => 'yannick.courrian@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Dauliac",
            'prenom' => 'Julien',
            'email' => 'julien.dauliac@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Desage",
            'prenom' => 'Alexandre',
            'email' => 'alexandre.desage@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Doret",
            'prenom' => 'Alexandre',
            'email' => 'alexandre.doret@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Duval",
            'prenom' => 'Thomas',
            'email' => 'thomas.duval@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Engler",
            'prenom' => 'Dylan',
            'email' => 'dylan.engler@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Estay",
            'prenom' => 'Charly',
            'email' => 'charly.estay@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Flamant",
            'prenom' => 'Cedric',
            'email' => 'cedric.flamant@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Gale",
            'prenom' => 'Etoile',
            'email' => 'etoile.gale@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Gardin",
            'prenom' => 'Kelian',
            'email' => 'kelian.gardin@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Garzaro",
            'prenom' => 'Paul Michel',
            'email' => 'paulmichel.garzaro@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Giralt",
            'prenom' => 'Benjamin',
            'email' => 'benjamin.giralt@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Godrie",
            'prenom' => 'Paul',
            'email' => 'paul.godrie@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Hanotel",
            'prenom' => 'Guillaume',
            'email' => 'guillaume.hanotel@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Lafon",
            'prenom' => 'Arnaud',
            'email' => 'arnaud.lafon@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Marx",
            'prenom' => 'John',
            'email' => 'john.marx@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);


        DB::table('users')->insert([
            'nom' => "Monfouga",
            'prenom' => 'Hugo',
            'email' => 'hugo.monfouga@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Pitault",
            'prenom' => 'Cyriaque',
            'email' => 'cyriaque.pitault@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);

        DB::table('users')->insert([
            'nom' => "Vretman",
            'prenom' => 'Maxence',
            'email' => 'maxence.vretman@ynov.com',
            'password' => '$2y$10$DW1sKB560rN6j0UEKZB6nOV7ausvs1Ger4JZnxCw7QkoGwsqmC0jO',
            'admin' => 0,
        ]);
    }
}
