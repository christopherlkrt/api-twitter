## API-TWITTER

API para Coleta e Listagem de Tweets. 

## Tecnologias

	- Laravel
	- Laravel/Homestead
	- Vagrant -> Virtual Box
	- MongoDB (https://github.com/jenssegers/laravel-mongodb)
	- Twitter API (https://developer.twitter.com/en/docs/tweets/timelines/overview / https://github.com/thujohn/twitter)

## Execuções


	- Autenticação para API
		TWITTER_CONSUMER_KEY=
		TWITTER_CONSUMER_SECRET=
		TWITTER_ACCESS_TOKEN=
		TWITTER_ACCESS_TOKEN_SECRET=

	- Comando Laravel para extração dos dados da API.
		php artisan tweets:get {nome_usuario}
	
	- Exibição dos Tweets
		http://localhost/api/{Usuário}/tweets?order=ASC&order_by=fav_count

		Atributos para filtragem:
		Like/Favorito = fav_count
		Retweet = rt_count
		Data: tweeted_at


