## API-TWITTER

API para Coleta e Listagem de Tweets. 

Conta do Twitter utilizada: @RacismDog

## Tecnologias

	- Laravel
	- Laravel/Homestead
	- Vagrant -> Virtual Box
	- MongoDB (https://github.com/jenssegers/laravel-mongodb)
	- Twitter API (https://developer.twitter.com/en/docs/tweets/timelines/overview / https://github.com/thujohn/twitter)

## Execuções

	composer install
	configurar .env

	- Campos para autenticação da API
		TWITTER_CONSUMER_KEY=
		TWITTER_CONSUMER_SECRET=
		TWITTER_ACCESS_TOKEN=
		TWITTER_ACCESS_TOKEN_SECRET=

	- Comando Laravel para extração dos tweets de algum usuário.
		php artisan tweets:get {nome_usuario}
		(Necessita estar dentro da máquina virtual via comando vagrant ssh)
	
	- Exibição dos Tweets
		http://localhost/api/{Usuário}/tweets?order=ASC&order_by=fav_count

		Atributos para filtragem:
		Like/Favorito = fav_count
		Retweet = rt_count
		Data = tweeted_at


