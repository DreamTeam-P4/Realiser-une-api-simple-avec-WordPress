<img src="https://www.walili.ca/wp-content/uploads/2019/07/Les-20-extensions-cruciales-des-plugins-WordPress.jpg" width=100% />
<h1> Contexte du projet</h1>
Dans le cadre de l'amélioration du site de simplon Sénégal, vous allez devoir développer une partie API pour pouvoir consulter la liste des formations au niveau du site WordPress. Cette implémentation est faite pour que le WebMaster du site puisse ajouter les formations de chaque catégorie et faciliter un accès vers les candidatures.

Il vous est demandé de réaliser une api avec WP-JSON permettant à partir d'un custom post type "Formation" d'avoir la liste des formations avec la catégorie :

Les formations sont identifiés par différents éléments :

 #titre
 #description
 #durée -extrait -cibles
 #photos
 #lien de candidature
Le flux JSON transmis par L'API doit pouvoir contenir toutes les informations précédentes.

Dans un premier temps, vous aurez la possibilité d'utiliser CPTUI et ACF pour construire votre résultat .
Dans un second temps, vous devrez réaliser un plugin pour la gestion de votre flux JSON :
déclaration et structurations des données
routes spécifiques
Dans un troisième temps (aller plus loin), vous devrez réfléchir à mieux sécuriser l'accès aux informations de l'API.
<h1>Livrables<h1>
  
  Un ou plusieurs dépôts gihub/gitlab contenant :
- Le code de votre plugin permettant de générer les CPT et Champs personnalisés sous wordpress 
- les urls de questionnement à l'API (voir ci-dessous)
- Une(des) collections postman avec les requêtes vers votre API (Une pour la première étape et une seconde pour la seconde étape)
  Des liens sont à disposition pour télécharger l'app, et apprendre comment l'utiliser postman !

Dans l'idéal il faudrait une version en ligne de cette api

Les urls json permettant d'obtenir
- la liste de toutes les formations avec l'ensemble des informations 
- la liste des formations par catégories
- Les apprenants répondant à la recherche d'un mot clé et par cibles
  
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKnMeOrTZbRNhOEiSECpB1DDXI9rajX18jfA&usqp=CAU" width=100% />
  
  
  
