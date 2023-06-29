# Feature 9 - _Support billet physique_

## Description 

Cette Feature permet l'envoi par voie postal de billet pour une événement physique

## Variabilité

- Cette Feature necessite l'implémentation de la Feature 8
- Cette Feature peut être utilisé en parallele de la Feature 10

## Ajout dans le produit
![alt text](../screens/feature9.jpg)

## Composition

- Une entité `entity/PaperTicket.php` qui herite de `Ticket.php` du module feature8.
- Un formulaire `template/formPaperTicket.phtml` qui peremet d'ajouter des billets papier.
