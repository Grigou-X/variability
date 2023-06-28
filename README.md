## Resavia

Resavia est une SPL qui permet de gérer les participations à un événement.

### Prérequis

- Assurez-vous d'avoir `bash` installé sur votre système.
- Le script doit avoir les permissions d'exécution. Si ce n'est pas le cas, utilisez la commande suivante pour donner les permissions nécessaires :

```bash
chmod +x config.sh
```

### Configuration produit

1. Modifier le fichier `config.json` en choisissant les feature à importer en fixant leurs valeur a true ou false. 

2. Exécutez le script `config.sh` en utilisant la commande suivante :

```bash
./config.sh
```

Le script lira le fichier `config.json` et supprimera les modules correspondants dont la valeur est définie sur "false".

### Documentation

#### Architecture

Le module core contient ce qui est commun a tout les evenemnets et ce charge de verifier la configuration pour n'utiliser que les modules qui sont souhaité de feature1 à feature12. Chaque module feature ajoute une fonctionnalité non obligatoire au produit.

#### Contrainte

Pour vérifier les contraintes, il faut run la classe `Constraint.java`. Toute les configurations possibles seront données ainsi que le nombre de configurations possibles.
