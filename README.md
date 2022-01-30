# gigsy

## instaltion backend...

1. Lancer `cd gigsy-backend`
2. Copier `.env.example` vers `.env` puis lancer `php artisan key:generate`
3. Lancer les migrations `php artisan migrate` 
4. Lancer un `composer install`.
5. `php artisan serve`

## instaltion frontend...

1. Lancer `cd gigsy-f`
2. Lancer `npm i` 
3. Lancer `npm run serve`.


Le projet est alors accessible via http://127.0.0.1:8080/


# Start a new feature
Development of new features starting from the 'develop' branch.

## Start developing a new feature with

`git flow feature start MYFEATURE`
`git flow feature finish MYFEATURE`
`git flow feature publish MYFEATURE`

Getting a published feature
Get a feature published by another user.

`git flow feature pull origin MYFEATURE`

git flow hotfix start
Like the other git flow commands, a hotfix is started with

`git flow hotfix start VERSION`
The version argument hereby marks the new hotfix release name. Optionally you can specify a basename to start from.

Finish a hotfix
By finishing a hotfix it gets merged back into develop and master. Additionally the master merge is tagged with the hotfix version.

`git flow hotfix finish VERSION`
