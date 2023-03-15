# Techtalk | Les tests unitaires & PHPUnit

## Introduction

### 1. Définition des tests unitaires :

Les tests unitaires sont des tests automatisés qui permettent de vérifier le comportement individuel d'une partie du code, appelée unité.

### 2. Importance des tests unitaires :

Les tests unitaires sont importants car ils aident à garantir la qualité et la fiabilité du code en détectant les erreurs et les problèmes potentiels dès le début du développement.
Ils permettent également de faciliter la maintenance du code en rendant les modifications futures plus sûres et en minimisant les risques de régression.

### 3. Objectif de la présentation :

L'objectif de cette présentation est de présenter les tests unitaires et de montrer comment ils peuvent être utilisés pour améliorer la qualité du code et faciliter la maintenance.
Nous allons également nous concentrer sur PHPUnit, un outil populaire pour les tests unitaires en PHP.

## Pourquoi faire des tests unitaires

### 1. Améliorer la qualité du code

Les tests unitaires permettent de vérifier si chaque unité du code fonctionne correctement et selon les spécifications.
En détectant les erreurs et les problèmes dès le début du développement, les tests unitaires peuvent aider à garantir la qualité et la fiabilité du code.

### 2. Faciliter la maintenance du code

Les tests unitaires peuvent faciliter la maintenance du code en rendant les modifications futures plus sûres.
Lorsque du code est modifié, les tests unitaires peuvent être utilisés pour s'assurer qu'aucune régression n'est introduite et que le code fonctionne toujours correctement.

### 3. Détecter les erreurs plus rapidement

Les tests unitaires sont automatisés, ce qui signifie qu'ils peuvent être exécutés rapidement et fréquemment.
En détectant les erreurs rapidement, les tests unitaires peuvent aider à minimiser les coûts et le temps de développement en identifiant les problèmes avant qu'ils ne se propagent.

## Les différents types de tests unitaires

### 1. Les tests unitaires simples :

Les tests unitaires simples sont utilisés pour tester des unités isolées du code.
Ils vérifient si une unité fonctionne correctement en isolation, sans se soucier de ses interactions avec d'autres parties du code.

### 2. Les tests d'intégration

Les tests d'intégration sont utilisés pour tester la façon dont différentes unités du code travaillent ensemble.
Ils vérifient que les différentes parties du code fonctionnent correctement ensemble et selon les spécifications.

### 3. Les tests fonctionnels

Les tests fonctionnels sont utilisés pour tester le comportement d'un système complet, souvent en se concentrant sur les scénarios d'utilisation.
Ils vérifient que le système fonctionne correctement en entier, en prenant en compte les interactions entre les différentes parties du code.
---
Il est important de noter que les différents types de tests peuvent être utilisés en combinaison pour couvrir tous les aspects du code et garantir une qualité optimale.

## Outils pour les tests unitaires

### 1. PHPUnit

PHPUnit est un des frameworks de tests unitaires les plus populaires pour le langage de programmation PHP.
Il fournit une infrastructure pour écrire, exécuter et gérer des tests.

### 2. Comment planifier et écrire des tests unitaires avec PHPUnit :

**Planifier :**
Avant d'écrire des tests, il est important de planifier ce qui doit être testé et de déterminer les scénarios de test.
Cela peut inclure la définition des entrées attendues et des sorties attendues pour chaque scénario de test.

**Écrire :**
Une fois que vous avez planifié vos tests, vous pouvez les écrire en utilisant la syntaxe de PHPUnit.
Les tests sont écrits sous forme de méthodes dans une classe de test dédiée.
Chaque méthode de test vérifie un comportement spécifique du code.
PHPUnit fournit des outils pour effectuer des assertions et vérifier les résultats des tests.

**Exécuter :**
Une fois que vous avez écrit vos tests, vous pouvez les exécuter en utilisant l'interface de ligne de commande de PHPUnit.
Les tests sont exécutés et les résultats sont affichés, indiquant si les tests ont réussi ou échoué.
Vous pouvez également utiliser des outils pour surveiller les résultats des tests au fil du temps et identifier les problèmes rapidement.

## Créer et exécuter des tests unitaires avec PHPUnit

### A. Créer et exécuter des tests unitaires avec PHPUnit :

Pour créer un test unitaire avec PHPUnit, vous pouvez suivre les étapes suivantes :
[*] Installer PHPUnit en utilisant un gestionnaire de paquets tel que Composer.
[*] Créer une classe de test dédiée pour votre code en étendant la classe PHPUnit_Framework_TestCase.
[*] Écrire des méthodes de test pour vérifier les comportements spécifiques de votre code.
[*] Exécuter les tests en utilisant la commande "phpunit" dans votre terminal.

### B. Résultats des tests :

Après l'exécution des tests, vous verrez les résultats sous forme de rapport.
Le rapport indique le nombre de tests exécutés, le nombre de tests qui ont réussi et le nombre de tests qui ont échoué.
Si un test échoue, le rapport affichera une trace détaillée des erreurs pour vous aider à diagnostiquer et à résoudre les problèmes.
En utilisant des tests unitaires régulièrement, vous pouvez vous assurer que votre code fonctionne comme prévu et détecter les erreurs rapidement avant la mise en production.
