## Configuration

Dossier Homestead :
fichier Homestead.yaml

Editer comme ci-dessous :

sites:
    - map: homestead.app
      to: /home/vagrant/Code/Laravel/public
    - map: ecommerce.app
      to: /home/vagrant/Code/Ecommerce/public

databases:
    - homestead
    - ecommerce

Dossier Code/Ecommerce
fichier .env

Editer comme ci dessous :

DB_DATABASE=ecommerce

Fichier hosts

Editer comme ci dessous :

192.168.10.10 ecommerce.app
